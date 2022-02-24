@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')

<style>
    a.canvasjs-chart-credit {
    display: none;
}
</style>

    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group bg-dashboard"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content mt-5">
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
                                        Total Clustors
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
                                        Total Events
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
                                        Total Services
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

                        {{-- <div class="chart-js chart-js-one-bar">
                            <canvas id="one-bar-chart" width="1400" height="380"></canvas>
                        </div> --}}



                    </div>
                </div>
            </div>
        </div>

    </div>

    
		{{-- servey form --}}
        @if(count($serv) > 0 )
        @foreach ($serv as $servs)
            {{-- @dd($servs->id , $servs->Survey->surveyID) --}}

            @if (!$servs->Survey)
            @php
             $seconds ="<script>document.write(localStorage.getItem('user'));</script>";
             $skip=$seconds;
            @endphp
    @if(!isset($skip) || $skip !='SkipForm')
<button type="button" id="serveyModel" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">s</button>
  @endif
  @endif
  @endforeach
  @endif
  
  <!-- Modal -->
  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Servey Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container" style="margin-top:0px">
                <div class="offset-2 col-8"
                    style="border: 2px solid darkgrey;border-radius: 15px;padding-left: 30px;">
                    <div class="row">
                        <?php
                        $i = 1;
                        ?>

                        <form action="{{ url('form/submision') }}" method="POST">
                            @csrf

                            @if(count($serv) > 0 )
                            @foreach ($serv as $servs)
                                {{-- @dd($servs->id , $servs->Survey->surveyID) --}}

                                @if (!$servs->Survey)
                                    <input type="hidden" name="survyID[]" value="{{ $servs->id }}" id="">


                                    <h2 class="text-center" style="margin-top: 56px;"> {{ $servs->title }}

                                    </h2>

                                    <div class="col-12">
                                        {{-- @dd($servs->Ques); --}}
                                        @foreach ($servs->Ques as $ques)
                                            @if ($ques->question_type == 'radio')
                                                <br>
                                                <label for="">

                                                    Question : </span> {{ $ques->question_title }}
                                                    <span>

                                                </label>
                                            @endif

                                            @foreach ($ques->Option as $quess)
                                                <div class="col-12">
                                                    {{-- @dd($ques->servey_id) --}}

                                                    <input type="hidden" name="questionIDr[]"
                                                        value="{{ $ques->id }}" id="">

                                                    <input type="hidden" name="Formm[]"
                                                        value="{{ $ques->servey_id }}" id="">

                                                    <input type="hidden" name="optionID[]"
                                                        value="{{ $quess->id }}" id="">

                                                    @if (isset($quess->option1))
                                                        <input class="form-check-input"
                                                            value="{{ $quess->option1 }}" type="radio"
                                                            name="option{{ $quess->id }}"
                                                            id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            {{ $quess->option1 }}
                                                        </label>
                                                    @endif



                                                    <br>
                                                    @if (isset($quess->option2))
                                                        <input class="form-check-input" type="radio"
                                                            value="{{ $quess->option2 }}"
                                                            name="option{{ $quess->id }}"
                                                            id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            {{ $quess->option2 }}
                                                        </label>
                                                    @endif
                                                    @if (isset($quess->option3))
                                                        <br>

                                                        <input class="form-check-input" type="radio"
                                                            value="{{ $quess->option3 }}"
                                                            name="option{{ $quess->id }}"
                                                            id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            {{ $quess->option3 }}


                                                        </label>
                                                    @endif
                                                    @if (isset($quess->option4))
                                                        <br>
                                                        <input class="form-check-input" type="radio"
                                                            value="{{ $quess->option4 }}"
                                                            name="option{{ $quess->id }}"
                                                            id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            {{ $quess->option4 }}


                                                        </label>
                                                    @endif
                                                </div>
                                            @endforeach

                                            @if ($ques->question_type == 'text')
                                                <br>
                                                <label for="">
                                                    Question : {{ $ques->question_title }}
                                                </label>
                                                <input type="hidden" name="Form[]" value="{{ $ques->servey_id }}"
                                                    id="">
                                                <input type="hidden" name="questionID[]"
                                                    value="{{ $ques->id }}" id="">
                                                <input type="text" class="form-control" name="answer_text[]"
                                                    id="">
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach


                       
                            <br>
                            <br>
                            {{-- @dd(count($submit)) --}}
                            @if (!$servs->Survey)
                                <input type="submit" class="btn btn-primary" value="Submit Form" id="">

                                @else
                                  
                                <div class="accordion-item"
                                style="    padding-left: 15px !important;padding-right: 15px !important;    padding: unset;margin-bottom: 11px;">
                                <div class="jumbotron jumbotron-fluid"
                                    style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;background: white;">
                                    <div class="container">
                                        <h5 class="text-center"> Your Servey Submitted</h5>
                                    </div>
                                </div>
                            </div>
                                @endif
                            @else
                            <div class="accordion-item"
                            style="    padding-left: 15px !important;padding-right: 15px !important;    padding: unset;margin-bottom: 11px;">
                            <div class="jumbotron jumbotron-fluid"
                                style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;background: white;">
                                <div class="container">
                                    <h5 class="text-center">No Survey Available</h5>
                                </div>
                            </div>
                        </div>
                            @endif
                        </form>
                    </div>



                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="Skip" data-bs-dismiss="modal">Skip</button>

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
 $arr =  ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct','Nov' ,'Dec']
    ?>




    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Clusters of this year"
                },
                axisY: {
                    title: "Number of Cluster"
                },
                data: [{

                    type: "column",
                    // showInLegend: true,
                    legendMarkerColor: "#08ddc1",
                    // legendText: "MMbbl = one million barrels",
                    dataPoints: [

                    @foreach ($clusterr as $clusterrs )

                        {
                            y: {{$clusterrs}},
                            label: "{{$arr[$i++]}}"
                        },
                        @endforeach





                    ]
                }]
            });
            chart.render();


        }

    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

    $(document).ready(function(){
        $('#serveyModel').click();
        $('#Skip').click(function(){
            localStorage.setItem('user','SkipForm');
       
        });
    });

</script>

@endsection
