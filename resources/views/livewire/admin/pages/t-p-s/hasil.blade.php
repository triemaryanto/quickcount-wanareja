<div>
    <style>
        .chart-canvas {
            max-width: 100%;
            /* Menggunakan 100% agar responsif */
            height: 400px;
        }

        @media (max-width: 768px) {
            .chart-canvas {
                height: 300px;
                /* Tinggi lebih kecil untuk perangkat kecil */
            }

            .card-title {
                font-size: 16px;
                /* Memperkecil ukuran font pada perangkat kecil */
            }

            h3,
            h6 {
                font-size: 18px;
            }
        }
    </style>

    <div class="page-header page-header-light d-flex justify-content-center align-items-center text-center">
        <div class="page-header-content">
            <div class="page-title">
                <h3 class="font-weight-semibold mb-0">Hitung Suara Sementara Kec. Wanareja</h3>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-lg-6 col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center">Calon Bupati dan Wakil Bupati</h3>
                </div>
                <div class="card-body">
                    <div id="loading-bupati" wire:loading>
                        <p>Loading chart...</p>
                    </div>
                    <div class="text-center" wire:loading.remove>
                        <canvas id="bupatiPieChart" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center">Calon Gubernur dan Wakil Gubernur</h3>
                </div>
                <div class="card-body">
                    <div id="loading-gubernur" wire:loading>
                        <p>Loading chart...</p>
                    </div>
                    <div class="text-center" wire:loading.remove>
                        <canvas id="gubernurPieChart" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-center">Calon Bupati dan Wakil Bupati Berdasarkan
                        Kecamatan</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <canvas id="bupatiBarChart" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-center">Calon Gubernur dan Wakil Gubernur
                        Berdasarkan Kecamatan</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <canvas id="gubernurBarChart" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Tombol untuk layar kecil -->
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <!-- Konten Footer -->
            <div class="collapse navbar-collapse justify-content-center" id="navbar-footer">
                <span class="navbar-text text-center">
                    &copy; 2024 By
                    <a href="https://wa.me/6285157392291" class="text-decoration-none">
                        Tri Maryanto
                    </a>
                </span>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let chartGubernurPie = null;
            let chartBupatiPie = null;
            let chartGubernurBar = null;
            let chartBupatiBar = null;

            // Function to render a chart
            function renderChart(chartId, config, chartObj) {
                const ctx = document.getElementById(chartId).getContext('2d');
                if (chartObj) chartObj.destroy(); // Destroy the old chart instance
                return new Chart(ctx, config);
            }

            // Fetch data from the API and update charts
            function fetchChartData() {
                fetch('/api/pie-chart') // Replace with your API endpoint
                    .then(response => response.json())
                    .then(data => {
                        // Update Pie Charts
                        chartGubernurPie = renderChart('gubernurPieChart', {
                            type: 'pie',
                            data: {
                                labels: ['No. 1 Andika & Hendi', 'No. 2 Luthfi & Taj Yasin',
                                    'Tidak Sah'
                                ],
                                datasets: [{
                                    data: data.gubernur,
                                    backgroundColor: [
                                        'rgba(217, 4, 15, 0.8)', // Warna untuk No. 1
                                        'rgba(0, 56, 184, 0.8)', // Warna untuk No. 2
                                        'rgba(0, 0, 0, 0.5)' // Warna untuk Tidak Sah
                                    ],
                                    borderColor: [
                                        'rgba(0, 0, 0, 0.5)',
                                        'rgba(0, 0, 0, 0.5)',
                                        'rgba(0, 0, 0, 0.5)',
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                const value = tooltipItem.raw;
                                                const total = data.gubernur.reduce((sum, v) => sum +
                                                    v, 0);
                                                const percentage = ((value / total) * 100).toFixed(
                                                    2);
                                                return `${tooltipItem.label}: ${value} (${percentage}%)`;
                                            }
                                        }
                                    }
                                }
                            }
                        }, chartGubernurPie);

                        chartBupatiPie = renderChart('bupatiPieChart', {
                            type: 'pie',
                            data: {
                                labels: ['No. 1 SBW & Fahrur Rozi', 'No. 2 Imam Tobroni & Sonhaji',
                                    'No. 3 Syamsul & Ammy', 'No. 4 Awaludin & Vicky', 'Tidak Sah'
                                ],
                                datasets: [{
                                    data: data.bupati,
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
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                const value = tooltipItem.raw;
                                                const total = data.bupati.reduce((sum, v) => sum +
                                                    v, 0);
                                                const percentage = ((value / total) * 100).toFixed(
                                                    2);
                                                return `${tooltipItem.label}: ${value} (${percentage}%)`;
                                            }
                                        }
                                    }
                                }
                            }
                        }, chartBupatiPie);


                        // Update Bar Charts
                        chartGubernurBar = renderChart('gubernurBarChart', {
                            type: 'bar',
                            data: {
                                labels: data.gubernurRegions,
                                datasets: [{
                                        label: 'No. 1 Andika & Hendi',
                                        data: data.gubernurG1,
                                        backgroundColor: 'rgba(217, 4, 15, 0.8)',
                                        borderColor: 'rgba(0, 0, 0, 0.5)',
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'No. 2 Luthfi & Taj Yasin',
                                        data: data.gubernurG2,
                                        backgroundColor: 'rgba(0, 56, 184, 0.8)',
                                        borderColor: 'rgba(0, 0, 0, 0.5)',
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'Tidak Sah',
                                        data: data.gubernurGTS,
                                        backgroundColor: 'rgba(0, 0, 0, 0.5)',
                                        borderColor: 'rgba(0, 0, 0, 0.5)',
                                        borderWidth: 1
                                    }
                                ]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false
                            }
                        }, chartGubernurBar);

                        chartBupatiBar = renderChart('bupatiBarChart', {
                            type: 'bar',
                            data: {
                                labels: data.bupatiRegions,
                                datasets: [{
                                        label: 'No. 1 SBW & Fahrur Rozi',
                                        data: data.bupatiB1,
                                        backgroundColor: 'rgba(253, 0, 0, 0.8)',
                                        borderColor: 'rgba(0, 0, 0, 0.5)',
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'No. 2 Imam Tobroni & Sonhaji',
                                        data: data.bupatiB2,
                                        backgroundColor: 'rgba(6, 13, 209, 0.8)',
                                        borderColor: 'rgba(0, 0, 0, 0.5)',
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'No. 3 Syamsul & Ammy',
                                        data: data.bupatiB3,
                                        backgroundColor: 'rgba(233, 230, 9, 0.8)',
                                        borderColor: 'rgba(0, 0, 0, 0.5)',
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'No. 4 Awaludin & Vicky',
                                        data: data.bupatiB4,
                                        backgroundColor: 'rgba(255, 255, 255, 0.8)',
                                        borderColor: 'rgba(0, 0, 0, 0.5)',
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'Tidak Sah',
                                        data: data.bupatiBTS,
                                        backgroundColor: 'rgba(0, 0, 0, 0.5)',
                                        borderColor: 'rgba(0, 0, 0, 0.5)',
                                        borderWidth: 1
                                    }
                                ]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false
                            }
                        }, chartBupatiBar);
                    })
                    .catch(error => console.error('Error fetching chart data:', error));
            }

            // Initialize Pusher
            const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
                cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
                encrypted: true,
            });

            // Subscribe to the Pusher channel
            const channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function() {
                fetchChartData();
            });

            // Initial data load
            fetchChartData();
        });
    </script>
</div>
