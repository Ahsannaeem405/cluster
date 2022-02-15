@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')


    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group bg-dashboard"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Dashboard</h1>
                        <p>Welcome to your dashboard! Here you’l see all your profile stats like: visits,
                            events, clustors, annual graphs, and much more!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Main Header Groups -->

    <div class="container-fluid" style="    padding-left: 40px;padding-right: 40px;">
        <div class="row">

            <div class="col col-xl-4 order-xl-4 col-lg-6 order-lg-4 col-md-6 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-content">
                        <ul class="statistics-list-count">
                            <li>
                                <div class="points">
                                    <span>
                                        Join Clustors
                                    </span>
                                </div>
                                <div class="count-stat text-danger">
                                    @if (isset($clus))
                                        {{ $clus }}
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col-xl-4 order-xl-4 col-lg-6 order-lg-4 col-md-6 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-content">
                        <ul class="statistics-list-count">
                            <li>
                                <div class="points">
                                    <span>
                                        Join Events
                                    </span>
                                </div>
                                <div class="count-stat text-danger">
                                    @if (isset($eve))
                                        {{ $eve }}
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col-xl-4 order-xl-4 col-lg-6 order-lg-4 col-md-6 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-content">
                        <ul class="statistics-list-count">
                            <li>
                                <div class="points">
                                    <span>
                                        Upcoming Events
                                    </span>
                                </div>
                                <div class="count-stat text-danger">
                                    @if (isset($ser))
                                        {{ $ser }}
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="container-fluid" style="    padding-left: 40px;padding-right: 40px;">
        <div class="row">
            <div class="col col-lg-12 col-sm-12 col-12">
                <div class="ui-block responsive-flex">
                    <div class="ui-block-title">
                        <div class="h6 title">Cluster</div>

                    </div>

                    <div class="ui-block-content">

                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>




                    </div>
                </div>
            </div>
        </div>

    </div>




    <a class="back-to-top" href="#">
        <svg class="back-icon" width="14" height="18">
            <use xlink:href="#olymp-back-to-top"></use>
        </svg>
    </a>

    <?php
$i = 0;
    ?>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Upcoming Events of this year"
                },
                axisY: {
                    title: "Total Upcoming Events"
                },
                data: [{
                    type: "column",
                    showInLegend: true,
                    legendMarkerColor: "#08ddc1",
                    // legendText: "MMbbl = one million barrels",
                    dataPoints: [

                    @foreach ($clusterr as $clusterrs )

                        {
                            y: {{$clusterrs}},
                            label: "{{$i++}}"
                        },
                        @endforeach




                    ]
                }]
            });
            chart.render();

        }
    </script>



@endsection
