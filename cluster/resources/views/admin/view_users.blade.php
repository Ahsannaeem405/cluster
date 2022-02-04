@extends('admin1.layout')
@section('page_title', 'Home Page')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">


    <br />
    <?php

    $role = Auth::user()->role;

    ?>
    <div class="main-header">
        <div class="content-bg-wrap bg-group event-manager-bg"
            style="background:  linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url({{ asset('/img/events-manager.jpg') }})">
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Manage Events</h1>
                        <p>Welcome to your event manager page. Here you can Add new, Edit and Delete events.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">

        <div class="ui-block responsive-flex">
            <br />
            <div class="col-12" style="padding: 7px;">
                @if ($message = Session::get('success'))
                <div class="alert alert-success ">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
                <a href="#" class="btn btn-primary float-right" data-bs-toggle="modal"
                data-bs-target="#create-event">Add Event</a>

                <ul class="nav nav-pills mb-3 col-md-6 offset-md-5" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Your Event</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Join Event</button>
                    </li>
                  
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="table-responsive">
                     
							<table class="event-item-table event-item-table-fixed-width">

								<thead>

									<tr>
                                        <th>#</th>

										<th class="author">
											Picture
										</th>

										<th class="location">
											Name
										</th>

										<th class="upcoming">
											DATE
										</th>

										<th class="description">
											DESCRIPTION
										</th>
										<th class="add-event">
                                            Action
										</th>
                                        <th class="add-event">
                                            
										</th>
									</tr>
								</thead>
								<tbody>
                                    <?php
                                        $i = 1;
                                        ?>
                                    @foreach ($event as $events)

									<tr class="event-item">
                                        <td>{{$i++}}</td>
										<td class="author">
											<div class="event-author inline-items">
												<div class="author-thumb">
													<img loading="lazy" src="{{asset('img/avatar62-sm.html')}}" width="34"
														height="34" alt="author">
												</div>
												<div class="author-date">
													<a href="#" class="author-name h6">
                                                        {{$events->name}}
                                                    </a>
												</div>
											</div>
										</td>
										<td class="location">
											<div class="place inline-items">
												{{-- <svg class="olymp-add-a-place-icon">
													<use xlink:href="#olymp-add-a-place-icon"></use>
												</svg> --}}
												<span>{{$events->name}}</span>
											</div>
										</td>
										<td class="upcoming">
											<div class="date-event inline-items align-left">
												<svg class="olymp-small-calendar-icon">
													<use xlink:href="#olymp-small-calendar-icon"></use>
												</svg>

												<span class="month">{{$events->datetimepicker}} {{$events->time}}{{$events->time_type}}</span>

											</div>
										</td>
										<td class="description">
											<p class="description">Hey! {{$events->description}} </p>
										</td>
                                        <td class="description">
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-event{{$events->id}}">Edit</a>
                                            <a href="{{url("$role/delete/event")}}/{{$events->id}}" class="btn btn-danger">Delete</a>
                                        </td>


									</tr>

                                    <div class="modal fade" id="edit-event{{$events->id}}" tabindex="-1" role="dialog" aria-labelledby="create-event"
                                    aria-hidden="true">
                                    <div class="modal-dialog window-popup create-event" role="document">
                                        <div class="modal-content">
                                            <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                                <svg class="olymp-close-icon">
                                                    <use xlink:href="#olymp-close-icon"></use>
                                                </svg>
                                            </a>
                                            <div class="modal-header">
                                                <h6 class="title">Create an Event</h6>
                                            </div>
                                
                                            <div class="modal-body">
                                                <form action="{{url("$role/update/event")}}/{{$events->id}}" method="POST">
                                                    @csrf
                                                <div class="form-group label-floating is-select">
                                                    <label class="control-label">Personal Event</label>
                                                    <select class="form-select" name="Event_type">
                                                        <option value="Public" @if($events->Event_type == 'Public') selected @endif>Public Event</option>
                                                        <option value="Private" @if($events->Event_type == 'Private') selected @endif>Private Event</option>
                                                    </select>
                                                </div>
                                
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Event Name</label>
                                                    <input class="form-control" name="name" placeholder="Event Name" value="{{$events->name}}" type="text">
                                                </div>
                                                <input type="hidden" value="@if(isset($mang->id)) {{$mang->id}} @endif" name="mangerID" id="">
                                
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Event Location</label>
                                                    <input class="form-control" placeholder="Event Location" name="location" value="{{$events->location}}" type="text">
                                                </div>
                                
                                                <div class="form-group date-time-picker label-floating">
                                                    <label class="control-label">Event Date</label>
                                                    <input name="datetimepicker" value="{{$events->datetimepicker}}">
                                                    <span class="input-group-addon">
                                                        <svg class="olymp-calendar-icon icon">
                                                            <use xlink:href="#olymp-calendar-icon"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                
                                                <div class="row">
                                                    <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Event Time</label>
                                                            <input class="form-control" name="time" placeholder="Event Time" value="{{$events->time}}" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div class="form-group label-floating is-select">
                                                            <label class="control-label">AM-PM</label>
                                                            <select class="form-select" name="time_type">
                                                                <option value="AM" @if($events->time_type == 'AM') selected @endif>AM</option>
                                                                <option value="PM" @if($events->time_type == 'PM') selected @endif>PM</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group label-floating is-select">
                                                            <label class="control-label">Timezone</label>
                                                            <select class="form-select" name="timezone">
                                                                <option value="US" @if($events->timezone == 'US') selected @endif>US (UTC-8)</option>
                                                                <option value="UK" @if($events->timezone == 'UK') selected @endif>UK (UTC-0)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                
                                                </div>
                                
                                                <div class="form-group">
                                                    <textarea class="form-control"
                                                        placeholder="Event Description" name="description">{{$events->description}}</textarea>
                                                </div>
                                
                                                <div class="form-group">
                                                    <svg class="olymp-happy-face-icon">
                                                        <use xlink:href="#olymp-happy-face-icon"></use>
                                                    </svg>
                                
                                                    <select class="form-select" name="type_Emj">
                                                        <option value="Green" title="Green Goo Rock">Green Goo Rock</option>
                                
                                                        <option value="Mathilda" title="Mathilda Brinker">Mathilda Brinker</option>
                                
                                                        <option value="Marina" title="Marina Valentine">Marina Valentine</option>
                                
                                                        <option value="Dave" title="Dave Marinara">Dave Marinara</option>
                                
                                                        <option value="Rachel" title="Rachel Howlett">Rachel Howlett</option>
                                
                                                    </select>
                                                </div>
                                
                                                <input type="submit"  class="btn btn-primary "  value="Create Event" name="" id="">
                                                {{-- <button>Create Event</button> --}}
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
								</tbody>
							</table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="table-responsive">
                     
							<table class="event-item-table event-item-table-fixed-width">

								<thead>

									<tr>
                                        <th>#</th>

										<th class="author">
											Picture
										</th>

										<th class="location">
											Name
										</th>

										<th class="upcoming">
											DATE
										</th>

										<th class="description">
											DESCRIPTION
										</th>
										<th class="add-event">
										</th>
									</tr>
								</thead>
								<tbody>
                                    <?php
                                        $i = 1;
                                        ?>
                                    @foreach ($event_join as $events)

									<tr class="event-item">
                                        <td>{{$i++}}</td>
										<td class="author">
											<div class="event-author inline-items">
												<div class="author-thumb">
													<img loading="lazy" src="{{asset('img/avatar62-sm.html')}}" width="34"
														height="34" alt="author">
												</div>
												<div class="author-date">
													<a href="#" class="author-name h6">
                                                        {{$events->name}}
                                                    </a>
												</div>
											</div>
										</td>
										<td class="location">
											<div class="place inline-items">
												{{-- <svg class="olymp-add-a-place-icon">
													<use xlink:href="#olymp-add-a-place-icon"></use>
												</svg> --}}
												<span>{{$events->name}}</span>
											</div>
										</td>
										<td class="upcoming">
											<div class="date-event inline-items align-left">
												<svg class="olymp-small-calendar-icon">
													<use xlink:href="#olymp-small-calendar-icon"></use>
												</svg>

												<span class="month">{{$events->datetimepicker}} {{$events->time}}{{$events->time_type}}</span>

											</div>
										</td>
										<td class="description">
											<p class="description">Hey! {{$events->description}} </p>
										</td>


									</tr>

                                  
                                    @endforeach
								</tbody>
							</table>
                        </div>
                    </div>
                  </div>
                  

</div>


              
            </div>
        </div>

    </div>
    <div class="modal fade" id="create-event" tabindex="-1" role="dialog" aria-labelledby="create-event"
    aria-hidden="true">
    <div class="modal-dialog window-popup create-event" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon">
                    <use xlink:href="#olymp-close-icon"></use>
                </svg>
            </a>
            <div class="modal-header">
                <h6 class="title">Create an Event</h6>
            </div>

            <div class="modal-body">
                <form action="{{url("$role/add/event")}}" method="POST">
                    @csrf
                <div class="form-group label-floating is-select">
                    <label class="control-label">Personal Event</label>
                    <select class="form-select" name="Event_type">
                        <option value="Public">Public Event</option>
                        <option value="Private">Private Event</option>
                    </select>
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Event Name</label>
                    <input class="form-control" name="name" placeholder="" value="Take Querty to the Veterinarian" type="text">
                </div>
                <input type="hidden" value="@if(isset($mang->id)) {{$mang->id}} @endif" name="mangerID" id="">

                <div class="form-group label-floating is-empty">
                    <label class="control-label">Event Location</label>
                    <input class="form-control" placeholder="" name="location" value="" type="text">
                </div>

                <div class="form-group date-time-picker label-floating">
                    <label class="control-label">Event Date</label>
                    <input name="datetimepicker" name="date" value="26/03/2016">
                    <span class="input-group-addon">
                        <svg class="olymp-calendar-icon icon">
                            <use xlink:href="#olymp-calendar-icon"></use>
                        </svg>
                    </span>
                </div>

                <div class="row">
                    <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Event Time</label>
                            <input class="form-control" name="time" placeholder="" value="09:00" type="text">
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="form-group label-floating is-select">
                            <label class="control-label">AM-PM</label>
                            <select class="form-select" name="time_type">
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group label-floating is-select">
                            <label class="control-label">Timezone</label>
                            <select class="form-select" name="timezone">
                                <option value="US">US (UTC-8)</option>
                                <option value="UK">UK (UTC-0)</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <textarea class="form-control"
                        placeholder="Event Description" name="description">I need to take Querty for a check up and ask the doctor if he needs a new tank.</textarea>
                </div>

                <div class="form-group">
                    <svg class="olymp-happy-face-icon">
                        <use xlink:href="#olymp-happy-face-icon"></use>
                    </svg>

                    <select class="form-select" name="type_Emj">
                        <option value="Green" title="Green Goo Rock">Green Goo Rock</option>

                        <option value="Mathilda" title="Mathilda Brinker">Mathilda Brinker</option>

                        <option value="Marina" title="Marina Valentine">Marina Valentine</option>

                        <option value="Dave" title="Dave Marinara">Dave Marinara</option>

                        <option value="Rachel" title="Rachel Howlett">Rachel Howlett</option>

                    </select>
                </div>

                <input type="submit"  class="btn btn-primary "  value="Create Event" name="" id="">
                {{-- <button>Create Event</button> --}}
            </form>
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
