<div class="py-12 flex justify-center">
    {{-- The Master doesn't talk, he acts. --}}
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="w-full bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            
            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3 rounded-lg">New</button>
            @if ($modal)
                @include('livewire.crear')
            @endif

            <button wire:click="datos()" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 my-3 rounded-lg">Datos</button>

            <div id="container" class="table-fixed w-full max-w-4xl"> </div>


            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="https://code.highcharts.com/modules/accessibility.js"></script>
            
            <script>
                    Highcharts.chart('container', {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie'
                        },
                        title: {
                            text: 'Browser market shares in May, 2020',
                            align: 'left'
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        accessibility: {
                            point: {
                                valueSuffix: '%'
                            }
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                                }
                            }
                        },
                        series: [{
                            name: 'Brands',
                            colorByPoint: true,
                            data: <?= $data ?>,
                        }]
                    });

            </script>
        </div>
    </div>
</div>
