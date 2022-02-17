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
                                        <div class="col-3 offset-3 text-center">
                                            <button class="btn btn-primary add_radio">Add Radio</button>
                                        </div>
                                        <div class="col-3 text-center">
                                            <button class="btn btn-primary add_input">Add Input</button>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 add_radio1" style="display: none">
                                    <div class="row">
                                        <div class="col-12">

                                            <button class="btn btn-success mt-3 radio_quest">Add Radio Question</button>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-12 add_input1" style="display: none">
                                    <div class="row">
                                        <div class="col-12 ">

                                            <button class="btn btn-success mt-3 input_quest">Add Input Question</button>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <form action="{{ url("$role/Survey/edit") }}" method="POST">
                                            @csrf
                                            <?php
                                            $i = 1;
                                            ?>


                                            <div class="col-6 quest">
                                                @foreach ($serv as $servs)
                                                    <h2>Servey Form {{ $i++ }}</h2>

                                                    <input type="hidden" value="{{ $servs->id }}" name="survey_form[]"
                                                        id="">

                                                    @foreach ($servs->Ques as $ques)
                                                        <input type="hidden" name="quesID[]" value="{{ $ques->id }}">

                                                        {{-- @if ($ques->question_type == 'radio') --}}
                                                            {{-- <div class='form-group'> <label for=''> Question :</label>
                                                                <input type='text' name='questionr[]'
                                                                    value="{{ $ques->question_title }}"
                                                                    class='form-control' id='Cluster-Name' required>
                                                                 </div> --}}

                                                            <div class='col-6'>

                                                                @foreach ($ques->Option as $quess)
                                                                    <div class='form-check'>
                                                                        <input class='form-check-input' type='radio'
                                                                            name='flexRadioDefault' id='flexRadioDefault1'>
                                                                        <input type='text' class='form-control'
                                                                            value="{{ $quess->option1 }}"
                                                                            name='option1[]'>
                                                                    </div>
                                                                    <div class='form-check'>
                                                                        <input class='form-check-input' type='radio'
                                                                            name='flexRadioDefault' id='flexRadioDefault2'>
                                                                        <input type='text' value="{{ $quess->option2 }}"
                                                                            class='form-control' name='option2[]'>
                                                                    </div>
                                                                    <div class='form-check'><input class='form-check-input'
                                                                            type='radio' name='flexRadioDefault'
                                                                            id='flexRadioDefault2'><input type='text'
                                                                            class='form-control'
                                                                            value="{{ $quess->option3 }}"
                                                                            name='option3[]'></div>
                                                                    <div class='form-check'><input class='form-check-input'
                                                                            type='radio' name='flexRadioDefault'
                                                                            id='flexRadioDefault2'><input type='text'
                                                                            class='form-control'
                                                                            value="{{ $quess->option4 }}"
                                                                            name='option4[]'></div>
                                                                @endforeach
                                                            </div>

                                                        {{-- @elseif ($ques->question_type == 'text') --}}
                                                            <label for="">
                                                                Question : {{ $ques->question_title }}
                                                            </label>
                                                            <input type="text" value="{{ $ques->question_title }}"
                                                                name="question[]"  id="">
                                                        {{-- @endif --}}
                                                    @endforeach
                                                @endforeach


                                            </div>

                                            <div class="col-6 quest">



                                            </div>
                                            <input type="submit" name="submit" class="btn btn-primary" value="Update" id="">

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

    <script>
        $(document).ready(function() {
            $('.add_radio').click(function() {

                $('.add_radio1').css('display', 'block');

                $('.add_input1').css('display', 'none');

            });



            $('.add_input').click(function() {

                $('.add_radio1').css('display', 'none');


                $('.add_input1').css('display', 'block');

            });



            $(".radio_quest").on("click", function() {

                $(".quest").append(
                    "<div class='form-group'> <label for=''> Enter Question</label> <input type='text' name='questionr[]' class='form-control' id='Cluster-Name' required> </div><div class='col-6'><div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault'id='flexRadioDefault1'><input type='text' class='form-control' name='option1[]'></div><div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault'id='flexRadioDefault2' ><input type='text' class='form-control' name='option2[]'></div><div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault'id='flexRadioDefault2' ><input type='text' class='form-control' name='option3[]'></div><div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault'id='flexRadioDefault2' ><input type='text' class='form-control' name='option4[]'></div></div>"
                );

            });

            $(".input_quest").on("click", function() {

                $(".quest").append(
                    "<div class='form-group'> <label for=''> Enter Question</label> <input type='text' name='question[]' class='form-control' id='Cluster-Name' required> </div>"
                );

            });

        });
    </script>
@endsection
