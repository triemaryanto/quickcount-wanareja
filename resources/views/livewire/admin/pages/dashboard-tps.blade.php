<div>
    @push('css')
        {{-- <link href="{{ asset('limitless/') }}/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css"> --}}
        <link href="{{ asset('limitless/') }}/global_assets/css/icons/material/icons.css" rel="stylesheet" type="text/css">
    @endpush
    <x-slot name="header">
        <livewire:admin.global.page-header judul="Dashboard" subjudul="Rekap Hitung Cepat Kec. Wanareja"
            :breadcrumb="['Rekap Hitung Cepat Kec. Wanareja']" />
    </x-slot>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Rekap Total Quick Count Calon Bupati dan Wakil Bupati</h6>
                    <div class="header-elements">
                        <div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                            <label class="form-check-label">
                                Live update:

                            </label>
                            <a href="{{ route('dashboard-tps') }}" wire:navigate><i
                                    class="mi-refresh mr-3 mi-1x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div style="display: flex; justify-content: space-around;">
                        <div class="text-center">
                            <h3>Calon Bupati dan Wakil Bupati</h3>
                            <canvas id="bupatiPieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Rekap Total Quick Count Calon Gubernur Dan Wakil Gubernur</h6>
                    <div class="header-elements">
                        <div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                            <label class="form-check-label">
                                Live update:

                            </label>
                            <a href="{{ route('dashboard-tps') }}"><i class="mi-refresh mr-3 mi-1x"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div style="display: flex; justify-content: space-around;">
                        <div class="text-center">
                            <h3>Calon Gubernur Dan Wakil Gubernur</h3>
                            <canvas id="gubernurPieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Traffic Pemilihan Calon Bupati Dan Wakil Bupati Berdasarkan Desa</h6>
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
                    <div class="row">
                        <canvas id="bupatiChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Traffic Pemilihan Calon Gubernur Dan Wakil Gubernur Berdasarkan Desa</h6>
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
                    <div class="row">
                        <canvas id="gubernurChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:admin.pages.filtering-kecamatan>
        @push('js')
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                document.addEventListener('livewire:load', function() {
                    // Pie chart untuk Gubernur
                    var ctxGubernur = document.getElementById('gubernurPieChart').getContext('2d');
                    var gubernurPieChart = new Chart(ctxGubernur, {
                        type: 'pie',
                        data: {
                            labels: ['No. 1', 'No. 2', 'Tidak Sah'],
                            datasets: [{
                                label: 'Gubernur',
                                data: @json($gubernur),
                                backgroundColor: [
                                    'rgba(217, 4, 15, 0.8)',
                                    'rgba(0, 56, 184, 0.8)',
                                    'rgba(0, 0, 0, 0.5)'
                                ],
                                borderColor: [
                                    'rgba(217, 4, 15, 0.8)',
                                    'rgba(0, 56, 184, 0.8)',
                                    'rgba(0, 0, 0, 0.5)'
                                ],
                                borderWidth: 1
                            }]
                        }
                    });

                    // Pie chart untuk Bupati
                    var ctxBupati = document.getElementById('bupatiPieChart').getContext('2d');
                    var bupatiPieChart = new Chart(ctxBupati, {
                        type: 'pie',
                        data: {
                            labels: ['No. 1', 'No. 2', 'No 3', 'No 4', 'Tidak Sah'],
                            datasets: [{
                                label: 'Bupati',
                                data: @json($bupati),
                                backgroundColor: [
                                    'rgba(253, 0, 0, 0.8)',
                                    'rgba(6, 13, 209, 0.8)',
                                    'rgba(233, 230, 9, 0.8)',
                                    'rgba(255, 255, 255, 0.8)',
                                    'rgba(0, 0, 0, 0.5)'
                                ],
                                borderColor: [
                                    'rgba(0, 0, 0, 0.5)',
                                    'rgba(0, 0, 0, 0.5)',
                                    'rgba(0, 0, 0, 0.5)',
                                    'rgba(0, 0, 0, 0.5)',
                                    'rgba(0, 0, 0, 0.5)'
                                ],
                                borderWidth: 1
                            }]
                        }
                    });

                    //barchart bupati
                    var ctx = document.getElementById('bupatiChart').getContext('2d');
                    var chartData = @json($chartBupati);

                    var labels = chartData.map(item => item.region);
                    var b1Data = chartData.map(item => item.total_b1);
                    var b2Data = chartData.map(item => item.total_b2);
                    var b3Data = chartData.map(item => item.total_b3);
                    var b4Data = chartData.map(item => item.total_b4);
                    var btsData = chartData.map(item => item.total_bts);

                    var desaChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                    label: 'No. 1',
                                    data: b1Data,
                                    backgroundColor: 'rgba(253, 0, 0, 0.8)',
                                    borderColor: 'rgba(0, 0, 0, 0.5)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'No. 2',
                                    data: b2Data,
                                    backgroundColor: 'rgba(6, 13, 209, 0.8)',
                                    borderColor: 'rgba(0, 0, 0, 0.5)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'No. 3',
                                    data: b3Data,
                                    backgroundColor: 'rgba(233, 230, 9, 0.8)',
                                    borderColor: 'rgba(0, 0, 0, 0.5)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'No. 4',
                                    data: b3Data,
                                    backgroundColor: 'rgba(255, 255, 255, 0.8)',
                                    borderColor: 'rgba(0, 0, 0, 0.5)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'Tidak Sah',
                                    data: btsData,
                                    backgroundColor: 'rgba(0, 0, 0, 0.5)',
                                    borderColor: 'rgba(0, 0, 0, 0.5)',
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    //barchart Gurbernur
                    var ctx = document.getElementById('gubernurChart').getContext('2d');
                    var chartData = @json($chartGubernur);
                    console.log(chartData);
                    var labels = chartData.map(item => item.region);
                    var g1Data = chartData.map(item => item.total_g1);
                    var g2Data = chartData.map(item => item.total_g2);
                    var gtsData = chartData.map(item => item.total_gts);

                    var kecamatanChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                    label: 'No. 1',
                                    data: g1Data,
                                    backgroundColor: 'rgba(217, 4, 15, 0.8)',
                                    borderColor: 'rgba(217, 4, 15, 0.8)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'No. 2',
                                    data: g2Data,
                                    backgroundColor: 'rgba(0, 56, 184, 0.8)',
                                    borderColor: 'rgba(0, 56, 184, 0.8)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'Tidak Sah',
                                    data: gtsData,
                                    backgroundColor: 'rgba(0, 0, 0, 0.5)',
                                    borderColor: 'rgba(0, 0, 0, 0.5)',
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                });
            </script>
        @endpush
</div>
