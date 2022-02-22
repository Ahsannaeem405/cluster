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
                                            <button class="btn btn-primary add_input" style="width: 85%;">Add Question</button>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 add_radio1 " style="display: none">
                                    <div class="row">
                                        <div class="col-8 offset-2 mb-3">

                                            <button class="btn btn-success mt-3 radio_quest">Add Question For
                                                Choice</button>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-12 add_input1" style="display: none">
                                    <div class="row">
                                        <div class="col-8 offset-2 mb-3">

                                            <button class="btn btn-success mt-3 input_quest" >Add Question</button>
                                        </div>

                                    </div>
                                </div>

                                <div class="offset-2 col-8" style="border: 2px solid darkgrey;border-radius: 15px;padding: 30px;">
                                    <div class="row">
                                        <form action="{{ url("$role/Survey/create") }}" method="POST">
                                            @csrf
                                            <div class="col-12 title" style="display: none;margin-bottom: 17px;">
                                                    <h4 for=""> Enter Survey Title </h4>
                                                    <input type="text" name="title" class="form-control" id="">

                                            </div>

                                            <div class="col-12 quest">
                                                <div class="jumboo">



                                                <div class="accordion-item" style="    padding: unset;">
                                                    <div class="jumbotron jumbotron-fluid"
                                                        style="    margin-bottom: 0; background: white;">
                                                        <div class="container">
                                                            <h5 class="text-center">No Question Available</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            </div>
                                            <div class="col-12 subb" style="display: none;margin-top: 32px; text-align: center;">
                                                <input type="submit"  name="submit" class="btn btn-primary" value="Submit"
                                                    id="">

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
                $('.title').css('display', 'block');

                $('.subb').css('display', 'block');
            });

            $(".radio_quest").on("click", function() {
                $('.jumboo').empty();


                $(".quest").append(
                    "<div class='form-group'> <label for=''> Enter Question</label> <input type='text'  name='questionr[]' class='form-control' id='Cluster-Name' required> </div><div class='col-6'><div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault'id='flexRadioDefault1'><input type='text' class='form-control' name='option1[]'></div><div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault'id='flexRadioDefault2' ><input type='text' class='form-control' name='option2[]'></div><div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault'id='flexRadioDefault2' ><input type='text' class='form-control' name='option3[]'></div><div class='form-check'><input class='form-check-input' type='radio' name='flexRadioDefault'id='flexRadioDefault2' ><input type='text' class='form-control' name='option4[]'></div></div>"
                );

            });

            $(".input_quest").on("click", function() {

                $('.jumboo').empty();

                $(".quest").append(
                    "<div class='form-group' style='margin-top: 25px;'> <label for=''> Enter Question</label> <input type='text'  name='question[]' class='form-control' id='Cluster-Name' required> </div>"
                );

            });

        });
    </script>
@endsection
