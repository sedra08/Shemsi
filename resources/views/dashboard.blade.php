@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="main">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                @hasrole('user')
                    <div>Welcome to the dashboard!</div>
                    @php
                        $motivationalQuotes = [
                            "Believe you can and you're halfway there. – Theodore Roosevelt",
                            "Your limitation—it's only your imagination.",
                            "Push yourself, because no one else is going to do it for you.",
                            "Great things never come from comfort zones.",
                            "Dream it. Wish it. Do it.",
                            "Success doesn’t just find you. You have to go out and get it.",
                            "The harder you work for something, the greater you’ll feel when you achieve it.",
                            "Dream bigger. Do bigger.",
                            "Don’t stop when you’re tired. Stop when you’re done.",
                            "Wake up with determination. Go to bed with satisfaction.",
                            "Do something today that your future self will thank you for.",
                            "Little things make big days.",
                            "It’s going to be hard, but hard does not mean impossible.",
                            "Don’t wait for opportunity. Create it.",
                            "Sometimes we’re tested not to show our weaknesses, but to discover our strengths.",
                            "The key to success is to focus on goals, not obstacles.",
                            "Dreams don’t work unless you do.",
                            "Success is not for the lazy.",
                            "You don’t have to be great to start, but you have to start to be great.",
                            "Act as if what you do makes a difference. It does. – William James",
                            "Success is not final, failure is not fatal: it is the courage to continue that counts. – Winston Churchill",
                            "It is never too late to be what you might have been. – George Eliot",
                            "Don’t let yesterday take up too much of today. – Will Rogers",
                            "Opportunities don't happen, you create them. – Chris Grosser",
                            "Everything you’ve ever wanted is on the other side of fear. – George Addair",
                            "Hardships often prepare ordinary people for an extraordinary destiny. – C.S. Lewis",
                            "Believe in yourself and all that you are. – Christian D. Larson",
                            "Doubt kills more dreams than failure ever will. – Suzy Kassem",
                            "A winner is a dreamer who never gives up. – Nelson Mandela",
                            "The only way to achieve the impossible is to believe it is possible. – Charles Kingsleigh",
                            "Work hard in silence, let your success be your noise. – Frank Ocean",
                            "Difficulties in life are intended to make us better, not bitter. – Dan Reeves",
                            "Failure will never overtake me if my determination to succeed is strong enough. – Og Mandino",
                            "You may have to fight a battle more than once to win it. – Margaret Thatcher",
                            "Start where you are. Use what you have. Do what you can. – Arthur Ashe",
                            "Don’t limit your challenges. Challenge your limits.",
                            "Do what you can, with what you have, where you are. – Theodore Roosevelt",
                            "The way to get started is to quit talking and begin doing. – Walt Disney",
                            "Courage is one step ahead of fear. – Coleman Young",
                            "Difficulties strengthen the mind, as labor does the body. – Seneca",
                            "Live as if you were to die tomorrow. Learn as if you were to live forever. – Mahatma Gandhi",
                            "Success is getting what you want. Happiness is wanting what you get. – Dale Carnegie",
                            "Be so good they can’t ignore you. – Steve Martin",
                            "If everything seems under control, you're not going fast enough. – Mario Andretti",
                            "Energy and persistence conquer all things. – Benjamin Franklin",
                            "Don’t count the days, make the days count. – Muhammad Ali",
                            "If you want to achieve greatness, stop asking for permission. – Anonymous",
                            "Make today so awesome that yesterday gets jealous.",
                            "Everything you can imagine is real. – Pablo Picasso"
                        ];
                        $index = array_rand($motivationalQuotes);
                    @endphp

                    <div class="text-2xl my-8 font-semibold text-orange-500">
                        <h1 class="animate-pulse">{{ strtoupper($motivationalQuotes[$index]) }}</h1>
                    </div>
                @endhasrole
                    
                                @hasrole('admin')
                    <h1 class="text-2xl font-bold text-center mb-4">Statistics</h1>

                    <div class="flex justify-center items-center">
                        <canvas id="ordersChart" width="400" height="200"></canvas>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        const ctx = document.getElementById('ordersChart').getContext('2d');
                        const ordersChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: @json(array_keys($ordersPerMonth)),
                                datasets: [{
                                    label: 'Orders per Month',
                                    data: @json(array_values($ordersPerMonth)),
                                    backgroundColor: 'rgba(255, 159, 64, 0.6)',
                                    borderColor: 'rgba(255, 159, 64, 1)',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        ticks: {
                                            stepSize: 1
                                        }
                                    }
                                }
                            }
                        });
                    </script>
                @endhasrole

            </div>
        </div>
    </div>
</div>
@endsection


    @push('scripts')
        <script>
            window.addEventListener('DOMContentLoaded', function () {
                console.log("You are Above Echo Script")
                window.Echo.channel('system-maintenance')
                    .listen('SystemMaintenanceEvent', (event) => {
                        let location = document.getElementById('main');
                        let div = document.createElement('div');
                        div.style.width = '100%';
                        div.style.height = '32px';
                        div.style.textAlign = 'center';
                        div.style.lineHeight = '32px';
                        div.style.background = '#ffab44';
                        div.style.marginBottom = '16px';
                        div.innerHTML = 'WARNING: The system will be go down for maintenance on ' + event.time;
                        location.insertBefore(div, location.firstChild)
                    });
            })

        </script>

        @hasrole('admin')
            <script>


                    function fetchData(url, buttonLebal = '') {
                        $("#column-chart").html("<p>Loading...</p>");
                        $.ajax({
                            url: url,
                            method: 'GET',
                            success: (response) => {

                                let data = [];

                                if (response.status == true) {

                                    data = response.data

                                }

                                const options = {
                                    colors: ["#1A56DB", "#FDBA8C"],
                                    series: [

                                        {
                                            name: "Customers",
                                            color: "#FDBA8C",
                                            // data: [
                                            //     { x: "Mon", y: 232 },
                                            //     { x: "Tue", y: 113 },
                                            //     { x: "Wed", y: 341 },
                                            //     { x: "Thu", y: 224 },
                                            //     { x: "Fri", y: 522 },
                                            //     { x: "Sat", y: 411 },
                                            //     { x: "Sun", y: 243 },
                                            // ],
                                            data
                                        },
                                    ],
                                    chart: {
                                        type: "bar",
                                        height: "420px",
                                        fontFamily: "Inter, sans-serif",
                                        toolbar: {
                                            show: false,
                                        },
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            columnWidth: "70%",
                                            borderRadiusApplication: "end",
                                            borderRadius: 8,
                                        },
                                    },
                                    tooltip: {
                                        shared: true,
                                        intersect: false,
                                        style: {
                                            fontFamily: "Inter, sans-serif",
                                        },
                                    },
                                    states: {
                                        hover: {
                                            filter: {
                                                type: "darken",
                                                value: 1,
                                            },
                                        },
                                    },
                                    stroke: {
                                        show: true,
                                        width: 0,
                                        colors: ["transparent"],
                                    },
                                    grid: {
                                        show: false,
                                        strokeDashArray: 4,
                                        padding: {
                                            left: 2,
                                            right: 2,
                                            top: -14
                                        },
                                    },
                                    dataLabels: {
                                        enabled: false,
                                    },
                                    legend: {
                                        show: false,
                                    },
                                    xaxis: {
                                        floating: false,
                                        labels: {
                                            show: true,
                                            style: {
                                                fontFamily: "Inter, sans-serif",
                                                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                                            }
                                        },
                                        axisBorder: {
                                            show: false,
                                        },
                                        axisTicks: {
                                            show: false,
                                        },
                                    },
                                    yaxis: {
                                        show: false,
                                    },
                                    fill: {
                                        opacity: 1,
                                    },
                                }

                                if(document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {

                                    $("#column-chart").html("")
                                    const chart = new ApexCharts(document.getElementById("column-chart"), options);
                                    chart.render();

                                    if(buttonLebal != '') {
                                        $("#buttonLabel").text(buttonLebal)
                                    }

                                }
                            },
                            error: (xhr, status, error) => {
                                // Handle error
                                console.error('Error confirming appointment:', error);
                                alert('An error occurred. Please try again.');
                            }
                        });
                    }


                $(document).ready(function(){
                    
                    window.Echo.private("bookingRequest")
                        .listen('CustomerBookingRequestEvent', (event) => {
                            let mainDiv = $('#main');
                            console.log(event, mainDiv);

                            let { id, appointment_time, appointment_date } = event.appointment;

                            let message = $(`<div class="bg-green-500 p-4 m-4 text-center text-white">A New appointment has been received with id: ${id} and time: ${appointment_time} on date: ${appointment_date}</div>`);

                            // Prepend inside the mainDiv
                            mainDiv.prepend(message);

                        });

                    fetchData("{{ route('last-seven-day-appointment') }}");

                    $(document).on('click', '.fetchDaysData', function (event) {

                        let url = $(this).data('url');

                        fetchData(url, $(this).text());
                    })
                })

            </script>
        @endhasrole

    @endpush