<?php

namespace App\Livewire\Admin\Pages;

use App\Models\ComRegion;
use App\Models\Hasil;
use Livewire\Component;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;

class FilteringKecamatan extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $idNya, $limit = 10, $searchKecamatan = 3301020, $searchDesa, $listKec, $listDesa;
    public $g_1 = [];
    public $g_2 = [];
    public $g_ts = [];
    public $b_1 = [];
    public $b_2 = [];
    public $b_3 = [];
    public $b_4 = [];
    public $b_ts = [];
    public $dpt = [];
    public $dptb = [];
    public function updatedSearchKecamatan()
    {
        $this->listDesa = ComRegion::where('region_root', 3301020)->get()->toArray();
        $this->searchDesa = null;
    }
    public function downloadReport()
    {
        $data = Hasil::with(['desaTPS'])
            ->selectRaw('desa, 
                SUM(g_1) as total_g_1, SUM(g_2) as total_g_2, SUM(g_ts) as total_g_ts,
                SUM(b_1) as total_b_1, SUM(b_2) as total_b_2, SUM(b_3) as total_b_3, SUM(b_4) as total_b_4, SUM(b_ts) as total_b_ts,
                SUM(g_1 + g_2 + g_ts) as total_g,
                SUM(b_1 + b_2 + b_4 + b_3 + b_ts) as total_b,
                SUM(dpt) as total_dpt, SUM(dptb) as total_dptb')
            ->groupBy('desa');
        // if ($this->searchKecamatan) {
        //     $data->whereHas('kecamatanTPS', function ($query) {
        //         $query->where('region_cd', $this->searchKecamatan);
        //     });
        // }
        if ($this->searchDesa) {
            $data->whereHas('desaTPS', function ($query) {
                $query->where('region_cd', $this->searchDesa);
            });
        }
        $laporan = $data->orderBy('desa', 'ASC')->get();
        $data = [
            'title' => 'Kec. Wanareja',
            'data' => $laporan
        ];

        $pdf = Pdf::loadView('pdf.report-hitung-cepat', $data)->setPaper('a4', 'landscape');
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, now()->format('Y-m-d_H-i-s') . '_report-hitung-cepat.pdf', [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . now()->timezone('Asia/Jakarta')->format('d-m-Y_H-i-s') . '_report-hitung-cepat.pdf"',
        ]);
    }
    public function mount()
    {
        // $this->listKec = ComRegion::where('region_level', '3')->get();
        $this->listDesa = ComRegion::where('region_root', 3301020)->get()->toArray();
    }
    public function render()
    {
        $data = Hasil::with(['kecamatanTPS', 'desaTPS'])
            ->selectRaw('kecamatan, desa, 
                    SUM(g_1) as total_g_1, SUM(g_2) as total_g_2, SUM(g_ts) as total_g_ts,
                    SUM(b_1) as total_b_1, SUM(b_2) as total_b_2, SUM(b_3) as total_b_3, SUM(b_4) as total_b_4, SUM(b_ts) as total_b_ts,
                    SUM(g_1 + g_2 + g_ts) as total_g,
                    SUM(b_1 + b_2 + b_3 + b_4 + b_ts) as total_b,
                    SUM(dpt) as total_dpt, SUM(dptb) as total_dptb')
            ->groupBy('kecamatan', 'desa');
        if ($this->searchKecamatan) {
            $data->whereHas('kecamatanTPS', function ($query) {
                $query->where('region_cd', $this->searchKecamatan);
            });
        }
        if ($this->searchDesa) {
            $data->whereHas('desaTPS', function ($query) {
                $query->where('region_cd', $this->searchDesa);
            });
        }
        $data = $data->orderBy('kecamatan', 'ASC');
        if ($this->limit) {
            $data = $data->paginate($this->limit);
        } else {
            $data = $data->get(); // Fetch all records if limit is null
        }
        return view('livewire.admin.pages.filtering-kecamatan', [
            'data' => $data
        ]);
    }
}
