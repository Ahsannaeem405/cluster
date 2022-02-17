@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')

    <?php
    $role = Auth::user()->role;
    $post_role = Auth::user()->post_role;
    ?>



    <div class="main-header">
        <div class="content-bg-wrap bg-group event-manager-bg"
            style="background:  linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url({{ asset('/img/events-manager.jpg') }})">
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Survey</h1>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-end" >

                @if (isset($ans) && count($ans) > 0)
                {{-- <a href="{{ url("$post_role/survey/form") }}">
                    <i class="fa fa-plus" aria-hidden="true"
                        style="    background: #1f6606;font-size: 22px;padding: 6px;color: white;border-radius: 6px;"></i>


                </a> --}}


                <a href="{{ url("$post_role/survey/form") }}" style="margin-right: 26px;height: 21%;margin-bottom: 13px;" class="btn btn-control bg-green">
                <svg class="olymp-plus-icon">
                    <use xlink:href="#olymp-plus-icon"></use>
                </svg>
            </a>


                    <table class="event-item-table event-item-table-fixed-width text-start">
                        <thead>

                            <tr>

                                <th class="author" style="font-size: 15px;">
                                    #
                                </th>


                                <th class="location" style="font-size: 15px;">
                                    First Name
                                </th>

                                <th class="upcoming" style="font-size: 15px;">
                                    Last Name
                                </th>

                                <th class="description" style="font-size: 15px;">
                                    Email </th>

                                <th class="description" style="font-size: 15px;">
                                    Action </th>




                            </tr>

                        </thead>

                        <tbody>
                            <?php
                            $i = 1;

                            ?>


                            @foreach ($ans as $anss)
                                <tr class="">
                                    <td class="author">
                                        {{ $i++ }}
                                    </td>



                                    <td class="location event-as">
                                        {{ $anss->User->first_name }}
                                    </td>
                                    <td class="upcoming event-as">
                                        {{ $anss->User->last_name }}
                                    </td>
                                    <td class="description event-as">
                                        {{ $anss->User->email }}

                                    </td>

                                    <td class="description event-as">
                                        <a style="text-decoration: none" href="{{url("$role/view/survey/{$anss->User->id}")}}">



                                        <i class="fas fa-eye" style="
                                                            font-size: 18px;
                                                        "></i>
                                        </a>
                                        &nbsp;




                                    </td>

                                </tr>



                                <div class="modal fade" id="create-event{{ $anss->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="create-event" aria-hidden="true">
                                    <div class="modal-dialog window-popup create-event" role="document">
                                        <div class="modal-content">
                                            <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg class="olymp-close-icon">
                                                    <use xlink:href="#olymp-close-icon"></use>
                                                </svg>
                                            </a>
                                            <div class="modal-header">
                                                <h6 class="title">User Survey</h6>
                                            </div>

                                            <div class="modal-body">

                                                <div class="form-group  is-select">
                                                    <label class="control-label"> Question :
                                                        {{ $anss->Ques->question_title }} </label>

                                                    {{-- @dd($anss->Ques->question_type) --}}
                                                    @if ($anss->Ques->question_type == 'radio')
                                                        @foreach ($anss->Ques->Option as $options)

                                                            <br>

                                                            <input class="form-check-input"
                                                                value="{{ $options->option1 }}" type="radio"
                                                                name="option{{ $options->id }}" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                {{ $options->option1 }}
                                                            </label>
                                                            <br>

                                                            <input class="form-check-input" type="radio"
                                                                value="{{ $options->option2 }}" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                {{ $options->option2 }}
                                                            </label>
                                                            <br>

                                                            <input class="form-check-input" type="radio"
                                                                value="{{ $options->option3 }}" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                {{ $options->option3 }}


                                                            </label>
                                                            <br>
                                                            <input class="form-check-input" type="radio"
                                                                value="{{ $options->option4 }}" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                {{ $options->option4 }}


                                                            </label>
                                                        @endforeach

                                                    @else
                                                        <input type="text" value="{{ $anss->Ques->answer_text }}" id="">
                                                    @endif



                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </tbody>
                    </table>
                @else



                    <div class="jumbotron jumbotron-fluid" style="    margin-bottom: 0;background: white;">
                        <div class="container">
                            <h4 class="text-center">No Data Available</h4>
                        </div>
                    </div>


                @endif
            </div>

        </div>

    </div>

    <!-- ... end Main Header Groups -->






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="{{ asset('js/libs/fullcalendar.min.js') }}"></script>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>





@endsection
