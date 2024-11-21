<?php

namespace App\Http\Controllers;

use App\Models\ComRegion;
use App\Models\Hasil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartDataController extends Controller
{
    public function getChartData()
    {
        // Aggregate data for Bupati
        $bupatiData = Hasil::select(
            'desa',
            DB::raw('SUM(b_1) as total_b1'),
            DB::raw('SUM(b_2) as total_b2'),
            DB::raw('SUM(b_3) as total_b3'),
            DB::raw('SUM(b_4) as total_b4'),
            DB::raw('SUM(b_ts) as total_bts')
        )->groupBy('desa')->get();

        $bupatiRegions = [];
        $bupatiB1 = [];
        $bupatiB2 = [];
        $bupatiB3 = [];
        $bupatiB4 = [];
        $bupatiBTS = [];

        foreach ($bupatiData as $row) {
            $region = ComRegion::where('region_cd', $row->desa)->first();
            $bupatiRegions[] = $region->region_nm;
            $bupatiB1[] = $row->total_b1;
            $bupatiB2[] = $row->total_b2;
            $bupatiB3[] = $row->total_b3;
            $bupatiB4[] = $row->total_b4;
            $bupatiBTS[] = $row->total_bts;
        }

        // Aggregate data for Gubernur
        $gubernurData = Hasil::select(
            'desa',
            DB::raw('SUM(g_1) as total_g1'),
            DB::raw('SUM(g_2) as total_g2'),
            DB::raw('SUM(g_ts) as total_gts')
        )->groupBy('desa')->get();

        $gubernurRegions = [];
        $gubernurG1 = [];
        $gubernurG2 = [];
        $gubernurGTS = [];

        foreach ($gubernurData as $row) {
            $region = ComRegion::where('region_cd', $row->desa)->first();
            $gubernurRegions[] = $region->region_nm;
            $gubernurG1[] = $row->total_g1;
            $gubernurG2[] = $row->total_g2;
            $gubernurGTS[] = $row->total_gts;
        }

        // Pie chart totals
        $bupatiTotal = [
            array_sum($bupatiB1),
            array_sum($bupatiB2),
            array_sum($bupatiB3),
            array_sum($bupatiB4),
            array_sum($bupatiBTS),
        ];

        $gubernurTotal = [
            array_sum($gubernurG1),
            array_sum($gubernurG2),
            array_sum($gubernurGTS),
        ];

        // Prepare API response
        return response()->json([
            'bupati' => $bupatiTotal,
            'gubernur' => $gubernurTotal,
            'bupatiRegions' => $bupatiRegions,
            'bupatiB1' => $bupatiB1,
            'bupatiB2' => $bupatiB2,
            'bupatiB3' => $bupatiB3,
            'bupatiB4' => $bupatiB4,
            'bupatiBTS' => $bupatiBTS,
            'gubernurRegions' => $gubernurRegions,
            'gubernurG1' => $gubernurG1,
            'gubernurG2' => $gubernurG2,
            'gubernurGTS' => $gubernurGTS,
        ]);
    }
}
