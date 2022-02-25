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
                                            <button class="btn btn-primary add_radio">Add Question For Choice</button>
                                        </div>
                                        <div class="col-3 text-center">
                                            <button class="btn btn-primary add_input" style="width: 85%;">Add
                                                Question</button>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 add_radio1" style="display: none">
                                    <div class="row">
                                        <div class="offset-2 col-8">

                                            <button class="btn btn-success mt-3 radio_quest">Add Question For
                                                Choice</button>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-12 add_input1" style="display: none">
                                    <div class="row">
                                        <div class="offset-2 col-8">

                                            <button class="btn btn-success mt-3 input_quest">Add Question</button>
                                        </div>

                                    </div>
                                </div>

                                <div class="offset-2 col-8 subb"
                                    @if (count($serv) == 0) style="display:none; " @else  style=" border: 2px solid darkgrey;border-radius: 15px;padding-left: 30px;" @endif>

                                    <div class="row">
                                        <form action="{{ url("$role/Survey/edit") }}" method="POST">
                                            @csrf
                                            <?php
                                            $i = 1;
                                            ?>
                                            <div class="col-12" style="margin-top: 18px;">
                                                {{-- @dd($serv) --}}

                                                @foreach ($servv as $servs)

                                                {{-- @if ($servs->JoinCluster) --}}

                                                <h2 class="text-center"
                                                    style="margin-top: 40px;margin-bottom: 40px;">
                                                    {{ $servs->title }}


                                                </h2>
                                                <h5 class="text-center" style="    margin-top: -22px;">
                                                    @if ($servs->Cluster)
                                                        Cluster Name : {{ $servs->Cluster->name }}
                                                    @endif



                                                </h5>

                                                <input type="hidden" value="{{ $servs->id }}" name="survey_form[]"
                                                    id="">


                                                @foreach ($servs->Ques as $ques)
                                                    @if ($ques->question_type == 'text')
                                                        <label for="">
                                                            Question :
                                                        </label>
                                                        <input type="hidden" name="quesID[]"
                                                            value="{{ $ques->id }}">

                                                        <input type="text" value="{{ $ques->question_title }}"
                                                            name="questioninp[]" id="">
                                                        <br>
                                                    @endif


                                                    <div class='col-12' style="padding: unset">




                                                        @foreach ($ques->Option as $quess)
                                                            @if ($ques->question_type == 'radio')
                                                                <br>
                                                                <label for="">
                                                                    Question :
                                                                </label>
                                                                <input type="hidden" name="quesIDRad[]"
                                                                    value="{{ $ques->id }}">
                                                                <input type="text" value="{{ $ques->question_title }}"
                                                                    name="questionrad[]" id="">
                                                            @endif


                                                            <div class='form-check'>
                                                                <input class='form-check-input' type='radio'
                                                                    name='flexRadioDefault' id='flexRadioDefault1'>
                                                                <input type='text' class='form-control'
                                                                    value="{{ $quess->option1 }}" name='option11[]'>
                                                            </div>

                                                            <div class='form-check'>
                                                                <input class='form-check-input' type='radio'
                                                                    name='flexRadioDefault' id='flexRadioDefault2'>
                                                                <input type='text' value="{{ $quess->option2 }}"
                                                                    class='form-control' name='option22[]'>
                                                            </div>

                                                            <div class='form-check'><input class='form-check-input'
                                                                    type='radio' name='flexRadioDefault'
                                                                    id='flexRadioDefault2'><input type='text'
                                                                    class='form-control'
                                                                    value="{{ $quess->option3 }}" name='option33[]'>
                                                            </div>

                                                            <div class='form-check'><input class='form-check-input'
                                                                    type='radio' name='flexRadioDefault'
                                                                    id='flexRadioDefault2'><input type='text'
                                                                    class='form-control'
                                                                    value="{{ $quess->option4 }}" name='option44[]'>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endforeach

                                                {{-- @endif --}}


                                            @endforeach


                                                @foreach ($serv as $servs)

                                                    @if ($servs->JoinCluster)
                                                    <h2 class="text-center"
                                                        style="margin-top: 40px;margin-bottom: 40px;">
                                                        {{ $servs->title }}


                                                    </h2>
                                                    <h5 class="text-center" style="    margin-top: -22px;">
                                                        @if ($servs->Cluster)
                                                            Cluster Name : {{ $servs->Cluster->name }}
                                                        @endif



                                                    </h5>

                                                    <input type="hidden" value="{{ $servs->id }}" name="survey_form[]"
                                                        id="">


                                                    @foreach ($servs->Ques as $ques)
                                                        @if ($ques->question_type == 'text')
                                                            <label for="">
                                                                Question :
                                                            </label>
                                                            <input type="hidden" name="quesID[]"
                                                                value="{{ $ques->id }}">

                                                            <input type="text" value="{{ $ques->question_title }}"
                                                                name="questioninp[]" id="">
                                                            <br>
                                                        @endif


                                                        <div class='col-12' style="padding: unset">




                                                            @foreach ($ques->Option as $quess)
                                                                @if ($ques->question_type == 'radio')
                                                                    <br>
                                                                    <label for="">
                                                                        Question :
                                                                    </label>
                                                                    <input type="hidden" name="quesIDRad[]"
                                                                        value="{{ $ques->id }}">
                                                                    <input type="text" value="{{ $ques->question_title }}"
                                                                        name="questionrad[]" id="">
                                                                @endif


                                                                <div class='form-check'>
                                                                    <input class='form-check-input' type='radio'
                                                                        name='flexRadioDefault' id='flexRadioDefault1'>
                                                                    <input type='text' class='form-control'
                                                                        value="{{ $quess->option1 }}" name='option11[]'>
                                                                </div>

                                                                <div class='form-check'>
                                                                    <input class='form-check-input' type='radio'
                                                                        name='flexRadioDefault' id='flexRadioDefault2'>
                                                                    <input type='text' value="{{ $quess->option2 }}"
                                                                        class='form-control' name='option22[]'>
                                                                </div>

                                                                <div class='form-check'><input class='form-check-input'
                                                                        type='radio' name='flexRadioDefault'
                                                                        id='flexRadioDefault2'><input type='text'
                                                                        class='form-control'
                                                                        value="{{ $quess->option3 }}" name='option33[]'>
                                                                </div>

                                                                <div class='form-check'><input class='form-check-input'
                                                                        type='radio' name='flexRadioDefault'
                                                                        id='flexRadioDefault2'><input type='text'
                                                                        class='form-control'
                                                                        value="{{ $quess->option4 }}" name='option44[]'>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endforeach

                                                    @endif


                                                @endforeach


                                            </div>


                                            <div class="col-12 title"
                                                style="display: none;margin-bottom: 17px;    margin-top: 19px;">
                                                <h4 for=""> Enter Survey Title </h4>
                                                <input type="text" name="title" class="form-control" id="">

                                                <label for="" style="margin-top: 16px;">Select Cluster </label>

                                                <select name="clusterid" required class="form-control" id="">
                                                    @foreach ($cluster as $clusters)
                                                        <option value="{{ $clusters->id }}">{{ $clusters->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-12 quest">

                                            </div>


                                            <input type="submit"
                                                @if (count($servv) != 0 && count($serv) != 0) style="display:none" @endif name="submit"
                                                class="btn btn-primary subb" value="Update" id="">

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

                $('.subb').css('display', 'block');
                $('.title').css('display', 'block');
            });



            $(".input_quest").on("click", function() {

                $('.subb').css('display', 'block');
                $('.title').css('display', 'block');

            });


            $(".radio_quest").on("click", function() {

                // alert(12);
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
