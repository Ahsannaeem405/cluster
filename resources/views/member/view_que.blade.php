@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">


    <?php

    $role = Auth::user()->post_role;

    ?>
    <div class="main-header">
        <div class="content-bg-wrap bg-group event-manager-bg"
            style="background:  linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url({{ asset('/img/events-manager.jpg') }})">
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Survey Form</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid" style="padding-left: 26px;padding-right: 26px;">

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif





        <div class="row">
            <div class="col-12">
                <div class="members-table">

                    <div class="accordion-item" style="    padding: unset;">
                        <div class="jumbotron jumbotron-fluid"
                            style="    margin-bottom: 0;    border-radius: 5px 5px 0 0;box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);background: white;">
                            <div class="container">
                                <div class="col-12">
                                    <div class="row">
<?php
$i = 1;
?>
                                        @foreach ($serv as $servs)

                                        <h2>Servey Form {{$i++}}</h2>

                                        <form action="{{ url('form/submision') }}" method="POST">
                                                @csrf
                                                <div class="col-8">
                                                    @foreach ($servs->Ques as $ques)

                                                        <br>

                                                        @if($ques->question_type == 'radio')
                                                        <label for="">

                                                            Question : </span> {{ $ques->question_title }}
                                                            <span>

                                                        </label>
                                                        @endif
                                                        <br>

                                                        @foreach ($ques->Option as $quess)
                                                            <input type="hidden" name="questionIDr[]"
                                                                value="{{ $ques->id }}" id="">
                                                            <input type="hidden" name="optionID[]"
                                                                value="{{ $quess->id }}" id="">

                                                            <input class="form-check-input" value="{{ $quess->option1 }}"
                                                                type="radio" name="option{{ $quess->id }}"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                {{ $quess->option1 }}
                                                            </label>
                                                            <br>

                                                            <input class="form-check-input" type="radio"
                                                                value="{{ $quess->option2 }}"
                                                                name="option{{ $quess->id }}" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                {{ $quess->option2 }}
                                                            </label>
                                                            <br>

                                                            <input class="form-check-input" type="radio"
                                                                value="{{ $quess->option3 }}"
                                                                name="option{{ $quess->id }}" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                {{ $quess->option3 }}


                                                            </label>
                                                            <br>
                                                            <input class="form-check-input" type="radio"
                                                                value="{{ $quess->option4 }}"
                                                                name="option{{ $quess->id }}" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                {{ $quess->option4 }}


                                                            </label>
                                                        @endforeach

                                                        @if($ques->question_type == 'text')

                                                        <label for="">
                                                          Question :     {{ $ques->question_title }}
                                                        </label>
                                                        <input type="hidden" name="questionID[]" value="{{ $ques->id }}" id="">
                                                        <input type="text" class="form-control" name="answer_text[]" id="">

                                                        @endif


                                                    @endforeach
                                        @endforeach

                                        <br>
                                        <br>

                                        <input type="submit" class="btn btn-primary" value="Submit Form" id="">

                                    </div>


                                    </form>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>

            </div>
        </div>




    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>


@endsection
