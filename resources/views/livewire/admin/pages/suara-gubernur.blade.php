<div>
    @push('css')
        <link href="{{ asset('limitless/') }}/global_assets/css/icons/material/icons.css" rel="stylesheet" type="text/css">
    @endpush
    <x-slot name="header">
        <livewire:admin.global.page-header judul="Dashboard" subjudul="Hitung Suara Sementara Gubernur Kec. Wanareja"
            :breadcrumb="['Hitung Suara Gubernur']" />
    </x-slot>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Tabel Rincian Data Suara Gubernur Berdasarkan Desa</h6>
                    <div class="header-elements">
                        <div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                            <label class="form-check-label">
                                Live update:

                            </label>
                            <a href="{{ route('dashboard-tps') }}"><i class="mi-refresh mr-3 mi-1x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div class="col-12 mb-3 row">
                        <label class="col-form-label col-md-1">Kelurahan / Desa</label>
                        <div class="col-md-3">
                            <div class="col-lg-10">
                                <select wire:model.live="searchDesa" class="form-control">
                                    <option value="">Pilih Kelurahan / Desa</option>
                                    @foreach ($listDesa ?? [] as $list)
                                        <option value="{{ $list['region_cd'] }}">{{ $list['region_nm'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <label class="col-form-label col-md-1">Show</label>
                        <div class="col-md-3">
                            <div class="col-lg-3">
                                <select wire:model.live="limit" class="form-control">
                                    <option value>All</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a href="{{ route('dashboard-tps') }}" wire:navigate class="btn btn-primary">Reset
                                Filter</a>
                        </div>
                        <div class="col-md-2">
                            <div class="col-md-2">
                                <div type="button" wire:loading.remove class="btn btn-info"
                                    wire:click="downloadReport">
                                    Download
                                    Laporan Per Desa</div>
                                <div wire:loading wire:target="downloadReport">
                                    <button class="btn btn-secondary-light" type="button" disabled>
                                        <span class="spinner-grow spinner-grow-sm align-middle" role="status"
                                            aria-hidden="true"></span>
                                        Downloading...
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div type="button" wire:loading.remove class="btn btn-info"
                                    wire:click="downloadReportTPS">
                                    Download
                                    Laporan Per TPS</div>
                                <div wire:loading wire:target="downloadReportTPS">
                                    <button class="btn btn-secondary-light" type="button" disabled>
                                        <span class="spinner-grow spinner-grow-sm align-middle" role="status"
                                            aria-hidden="true"></span>
                                        Downloading...
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mb-4">
                        <table class="table table-bordered">
                            <thead class="bg-grey-400">
                                <tr>
                                    <th rowspan="2" class="text-center">#</th>
                                    {{-- <th rowspan="2" class="text-center">Kecamatan</th> --}}
                                    <th rowspan="2" class="text-center">Desa</th>
                                    {{-- <th rowspan="2" class="text-center">TPS</th> --}}
                                    {{-- <th colspan="6" class="text-center">Bupati/Wakil Bupati</th> --}}
                                    <th colspan="4" class="text-center">Gubernur/Wakil Gubernur</th>
                                    <th rowspan="2" class="text-center">Presentasi <br>Kehadiran</th>
                                    <th colspan="4" class="text-center">Hak Suara</th>
                                </tr>
                                <tr>
                                    {{-- <th class="text-center">No. 1 <br>SBW & Fahrur Rozi</th>
                                    <th class="text-center">No. 2 <br>Imam Tobroni & Sonhaji</th>
                                    <th class="text-center">No. 3 <br>Syamsul & Ammy</th>
                                    <th class="text-center">No. 4 <br>Awaludin & Vicky</th>
                                    <th class="text-center">Suara Tidak Sah</th>
                                    <th class="text-center">Total</th> --}}
                                    <th class="text-center">No. 1 <br>Andika & Hendi</th>
                                    <th class="text-center">No. 2 <br>Luthfi & Taj Yasin</th>
                                    <th class="text-center">Suara Tidak Sah</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">DPT</th>
                                    <th class="text-center">DPTb</th>
                                    <th class="text-center">DPK</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $row)
                                    <tr>
                                        <td class="text-left">
                                            @if ($data instanceof \Illuminate\Pagination\LengthAwarePaginator)
                                                {{ ($data->currentPage() - 1) * $data->perPage() + $index + 1 }}
                                            @else
                                                {{ $index + 1 }}
                                            @endif
                                        </td>
                                        {{-- <td class="text-left">{{ $row->kecamatanTPS->region_nm ?? '' }}</td> --}}
                                        <td class="text-left">{{ $row->desaTPS->region_nm ?? '' }}</td>
                                        {{-- <td class="text-right">{{ number_format($row->total_b_1 ?? 0, 0, ',', '.') }}
                                            <br> ({{ number_format($row->perc_b_1 ?? 0, 2) }}%)
                                        </td>
                                        <td class="text-right">{{ number_format($row->total_b_2 ?? 0, 0, ',', '.') }}
                                            <br> ({{ number_format($row->perc_b_2 ?? 0, 2) }}%)
                                        </td>
                                        <td class="text-right">{{ number_format($row->total_b_3 ?? 0, 0, ',', '.') }}
                                            <br> ({{ number_format($row->perc_b_3 ?? 0, 2) }}%)
                                        </td>
                                        <td class="text-right">{{ number_format($row->total_b_4 ?? 0, 0, ',', '.') }}
                                            <br> ({{ number_format($row->perc_b_4 ?? 0, 2) }}%)
                                        </td>
                                        <td class="text-right">{{ number_format($row->total_b_ts ?? 0, 0, ',', '.') }}
                                            <br> ({{ number_format($row->perc_b_ts ?? 0, 2) }}%)
                                        </td>
                                        <td
                                            class="text-right {{ $row->total_b > $row->total_sum ? 'bg-danger' : '' }}">
                                            <span @if ($row->total_b > $row->total_sum) style="color:white;" @endif>
                                                {{ number_format($row->total_b ?? 0, 0, ',', '.') }}
                                                <br> ({{ number_format($row->perc_total_b ?? 0, 2) }}%)
                                            </span>
                                        </td> --}}
                                        <td class="text-right">{{ number_format($row->total_g_1 ?? 0, 0, ',', '.') }}
                                            {{-- <br> ({{ number_format($row->perc_g_1 ?? 0, 2) }}%) --}}
                                        </td>
                                        <td class="text-right">{{ number_format($row->total_g_2 ?? 0, 0, ',', '.') }}
                                            {{-- <br> ({{ number_format($row->perc_g_2 ?? 0, 2) }}%) --}}
                                        </td>
                                        <td class="text-right">{{ number_format($row->total_g_ts ?? 0, 0, ',', '.') }}
                                            {{-- <br> ({{ number_format($row->perc_g_ts ?? 0, 2) }}%) --}}
                                        </td>
                                        <td
                                            class="text-right  {{ $row->total_g > $row->total_sum ? 'bg-danger' : '' }}">
                                            <span @if ($row->total_g > $row->total_sum) style="color:white;" @endif>
                                                {{ number_format($row->total_g ?? 0, 0, ',', '.') }}
                                                {{-- <br> ({{ number_format($row->perc_total_b ?? 0, 2) }}%) --}}
                                            </span>
                                        </td>
                                        <td class="text-right">
                                            @php
                                                $totalHakSuara = $row->total_dptb + $row->total_dpt + $row->total_dpk;
                                            @endphp
                                            ({{ number_format($row->total_g / $totalHakSuara ?? 0, 2) }}%)
                                        </td>
                                        <td class="text-right"> {{ number_format($row->total_dpt ?? 0, 0, ',', '.') }}
                                        </td>
                                        <td class="text-right">{{ number_format($row->total_dptb ?? 0, 0, ',', '.') }}
                                        </td>
                                        <td class="text-right">{{ number_format($row->total_dpk ?? 0, 0, ',', '.') }}
                                        </td>
                                        <td class="text-right">
                                            {{ number_format($row->total_dptb + $row->total_dpt + $row->total_dpk ?? 0, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                @endforeach
                                <tr class="bg-slate">
                                    <td colspan="2">Total</td>
                                    {{-- <td class="text-right">
                                        {{ number_format($data->sum('total_b_1') ?? 0, 0, ',', '.') }}</td>
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_b_2') ?? 0, 0, ',', '.') }}</td>
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_b_3') ?? 0, 0, ',', '.') }}</td>
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_b_4') ?? 0, 0, ',', '.') }}</td>
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_bts') ?? 0, 0, ',', '.') }}</td>
                                    <td class="text-right">{{ number_format($data->sum('total_b') ?? 0, 0, ',', '.') }}
                                    </td> --}}
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_g_1') ?? 0, 0, ',', '.') }}</td>
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_g_2') ?? 0, 0, ',', '.') }}</td>
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_g_ts') ?? 0, 0, ',', '.') }}</td>
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_g') ?? 0, 0, ',', '.') }}
                                    </td>
                                    <td class="text-right">
                                        @php
                                            $a = $data->sum('total_g');
                                            $b =
                                                $data->sum('total_dpt') +
                                                $data->sum('total_dptb') +
                                                $data->sum('total_dpk');
                                        @endphp
                                        ({{ number_format($a / $b ?? 0, 2) }}%)
                                    </td>
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_dpt') ?? 0, 0, ',', '.') }}</td>
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_dptb') ?? 0, 0, ',', '.') }}</td>
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_dpk') ?? 0, 0, ',', '.') }}</td>
                                    <td class="text-right">
                                        {{ number_format($data->sum('total_dpt') + $data->sum('total_dptb') + $data->sum('total_dpk') ?? 0, 0, ',', '.') }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="text-right flex justify-end">
                @if ($data instanceof \Illuminate\Pagination\LengthAwarePaginator)
                    {{ $data->links() }} <!-- Show pagination links only if paginated -->
                @endif
            </div>
        </div>
    </div>
</div>
