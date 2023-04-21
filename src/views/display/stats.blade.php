@php
    /** 
     *  @name       : <x-stats>
     *  @description: Customizable Stats
     *  @auth       : Phat
     *  @date       : 20/04/2023
     *  @github     : https://github.com/iMSophat/elements
     * 
     *  @required `JS`:
     *  -> Chart.js v2.9.3 -> https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js
     *  
     *  @param  ✨🧾
     *  -> title    : Stats title 
     *  -> data     : data value
     *  -> range    : percentage data 
     *  -> id       : init canvas id 
     *  -> bgColor  : HEX Color code for background color  `#1fa8e029, etc...`
     *  -> lineColor: HEX Color code for border color `#1fa8e029, etc...`
     *  -> color    : Tailwindcss class name    `text-red-500 ... etc`
     *  
     *  @example 🌺
     *  <x-stats
     *      title="Revenue"
     *      data="10"
     *      range="100"
     *      id="init-id"
     *      bgColor="#1fa8e029"
     *      lineColor="#1fa8e0"
     *      color="text-green-500">
     *  </x-stats>
     **/ 
@endphp


@props([
    'title'     => '',
    'data'      => '0',
    'range'     => '0',
    'id'        => 'undefined-id',
    'bgColor'   => '#1fa8e029',
    'lineColor' => '#1fa8e0',
    'color'     => 'text-red-500',
])

<div class="relative overflow-hidden">
    <div class="px-3 pt-8 pb-10 text-center relative z-0">
        <h4 class="text-base font-sans text-secondary-500 dark:text-gray-300 font-medium">{{ $title }}</h4>
        <h3 class="text-3xl text-success-700 dark:text-green-500 font-semibold leading-tight my-3 line-clamp-1">{{ $data }}</h3>
        <p class="text-xs {{ $color }} leading-tight">▲ {{ $range }}%</p>
    </div>
    <div class="absolute bottom-0 inset-x-0">
        <canvas id="{{ $id }}" height="70"></canvas>
    </div>
</div>


{{-- chart init --}}
<script type="application/javascript">
    new Chart(
        document.getElementById('{{ $id }}').getContext('2d'), 
        {
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                tooltips: {
                    enabled: false,
                },
                elements: {
                    point: {
                        radius: 0
                    },
                },
                scales: {
                    xAxes: [{
                        gridLines: false,
                        scaleLabel: false,
                        ticks: {
                            display: false
                        }
                    }],
                    yAxes: [{
                        gridLines: false,
                        scaleLabel: false,
                        ticks: {
                            display: false,
                            suggestedMin: 0,
                            suggestedMax: 10
                        }
                    }]
                }
            },
            type: "line",
            data: {
                labels: [1, 2, 1, 3, 5, 4, 7],
                datasets: [
                    {
                        backgroundColor: "{{ $bgColor }}",
                        borderColor: "{{ $lineColor }}",
                        borderWidth: 2,
                        data: [1, 2, 1, 3, 5, 4, 7],
                    },
                ],
            },
            
        }
    );
</script>