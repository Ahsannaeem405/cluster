@extends('admin.layout')
@section('page_title', 'Home Page')
@section('content')


<!-- Main Header Account -->

<div class="main-header">
	<div class="content-bg-wrap setting-bg"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Setting</h1>
					<p>Welcome to your account setting, here you can edit your account details</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Main Header Account -->


<!-- Your Account Personal Information -->

<div class="container-fluid">
	@if ($message = Session::get('success'))
	<div class="alert alert-success ">    
		<strong>{{ $message }}</strong>
	</div>
	@endif
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="tab-content" id="calendar-events-tabs-content">
				<div class="tab-pane fade show active" id="events" role="tabpanel" aria-labelledby="events-tab">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="ui-block">
									<div class="ui-block-title">
										<h6 class="title">Personal Information</h6>
									</div>
									<div class="ui-block-content">
										<!-- Personal Information Form  -->
				
										<form method="post" action="{{url('profileSetting')}}/{{$user_data->id}}">
											@csrf
											<div class="row">
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group">
														<label class="control-label">First Name</label>
														<input name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" type="text" value="{{$user_data->first_name}}">

														@error('first_name')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

													<div class="form-group ">
														<label class="control-label">Last Name</label>
														<input name="last_name" class="form-control  @error('last_name') is-invalid @enderror" placeholder="Last Name" type="text" value="{{$user_data->last_name}}">
														@error('last_name')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
													</div>
												</div>
				
												<div class="row">
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group">
														<label class="control-label">Your Email</label>
														<input name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Your Email" type="email"
															value="{{$user_data->email}}">
															@error('email')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
				
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">

													<div class="form-group ">
														<label class="control-label">Your Birthday</label>
														<input type="date" class="form-control  @error('dob') is-invalid @enderror" name="dob" value="{{$user_data->dob}}" />
														@error('dob')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
													</div>
												</div>
												<div class="row">
													<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group ">
														<label class="control-label">Your Gender</label>
														<select class="form-control  @error('gender') is-invalid @enderror" name="gender">
															<option value="">Select gender</option>
															<option value="Male" @if($user_data->gender == 'Male') selected @endif>Male</option>
															<option value="Female"  @if($user_data->gender == 'Female') selected @endif>Female</option>
														</select>
														@error('gender')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
				
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													
													<div class="form-group ">
														<label class="control-label">Your Phone Number</label>
														<input name="number" class="form-control  @error('number') is-invalid @enderror" placeholder="Your Phone Number" type="text" value="{{$user_data->number}}">
														@error('number')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="form-group ">
													<label class="control-label">Marriege Status</label>
													<select  name="married_status" class="form-control   @error('married_status') is-invalid @enderror">
														<option value="">Select Marriege Status</option>

														<option value="Married" @if($user_data->married_status == 'Married') selected @endif>Married</option>
														<option value="Unmarried"  @if($user_data->married_status == 'Unmarried') selected @endif>Unmarried</option>
													</select>
													@error('married_status')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
											</div>					
											</div>					
											<div class="row">
												<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="form-group">
														<label class="control-label">Your Description</label>

														<textarea rows="4" cols="4" class="form-control  @error('description') is-invalid @enderror" placeholder="Enter Your Description" name="description"
														>{{$user_data->description}}</textarea>
															@error('description')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
														</div>
				
												
												</div>
												</div>
										
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<button type="submit" class="btn btn-primary full-width">Update all Changes</button>
												</div>
				
										</form>
				
										<!-- ... end Personal Information Form  -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
					<div class="container">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="ui-block">
									<div class="ui-block-title">
										<h6 class="title">Website Settings</h6>
									</div>
									<div class="ui-block-content">	
										<!-- Personal Information Form  -->
										@if($setting_data == null)
										<form method="POST" action="{{url('admin/websiteSetting')}}" enctype="multipart/form-data">
											@csrf
											<div class="row">
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group ">
														<label class="control-label">Website Name</label>
														<input class="form-control @error('website_name') is-invalid @enderror" name="website_name" placeholder="Website Name" type="text" >
														@error('website_name')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group  d-flex upload-logo align-items-center">
														<div class="w-50">
															<h6>Website Logo</h6>
															<label type="button" class="btn btn-primary w-50"> Upload Logo
																<input class="form-control @error('website_logo') is-invalid @enderror" name="website_logo" placeholder="" type="file"  hidden id="logo-upload">
															</label>
															<input class="form-control "  placeholder="" type="file"  hidden id="logo-upload">
															@error('website_logo')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
														</div>
														@if($setting_data != null)
														<div class="site-img"><img src="{{asset('images')}}/"></div>
														@endif
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group ">
														<label class="control-label">Home page header</label>
														<input class="form-control @error('header_name') is-invalid @enderror"  name="header_name" placeholder="Home page header" type="text" >
														@error('header_name')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
											
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group ">
														<label class="control-label">Footer Text</label>
														<input class="form-control @error('footer_name') is-invalid @enderror"  name="footer_name" placeholder="Footer Text" type="text">
														@error('footer_name')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
												
													<button type="submit" class="btn btn-primary full-width">Save Setting</button>

												
												</div>
											</div>
										</form>
										@else
										<form method="POST" action="{{url('admin/updateWebsiteSetting')}}/{{$setting_data->id}}" enctype="multipart/form-data">
											@csrf
											<div class="row">
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group ">
														<label class="control-label">Website Name</label>
														<input class="form-control @error('website_name') is-invalid @enderror" value="{{$setting_data->website_name}}" name="website_name" placeholder="Website Name" type="text" >
														@error('website_name')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group  d-flex upload-logo align-items-center">
														<div class="w-50">
															<h6>Website Logo</h6>
															<label type="button" class="btn btn-primary w-50"> Upload Logo
																<input class="form-control @error('website_logo') is-invalid @enderror" name="website_logo" placeholder="" type="file"  hidden id="logo-upload">
															</label>
															<input class="form-control "  placeholder="" type="file"  hidden id="logo-upload">
															@error('website_logo')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
														</div>
														<div class="site-img"><img src="{{asset('images')}}/{{$setting_data->website_logo}}"></div>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group ">
														<label class="control-label">Home page header</label>
														<input class="form-control @error('header_name') is-invalid @enderror" value="{{$setting_data->header_name}}" name="header_name" placeholder="Home page header" type="text" >
														@error('header_name')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
											
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group ">
														<label class="control-label">Footer Text</label>
														<input class="form-control @error('footer_name') is-invalid @enderror" value="{{$setting_data->footer_name}}" name="footer_name" placeholder="Footer Text" type="text">
														@error('footer_name')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
												
													<button type="submit" class="btn btn-primary full-width">Update Setting</button>

												
												</div>
											</div>
										</form>
										@endif
										<!-- ... end Personal Information Form  -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@if(Auth::user()->role == 'user')
				
				<div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="company-tab">
					<div class="container">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="ui-block">
									<div class="ui-block-title">
										<h6 class="title">company Settings</h6>
									</div>
									<div class="ui-block-content">	
										<!-- Personal Information Form  -->
										@if($company_data == null)
										<form method="post" action="{{url('user/AddCompany')}}">
											@csrf
												<div class="col col-lg-12 col-md-6 col-sm-12 col-12">
													<div class="form-group ">
														<label class="control-label">Company Name</label>
														<input type="text"  name="title" class="form-control"  >
														@error('title')
                                                  <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                  </span>
                                                  @enderror 
													</div>
												</div>
											
												<div class="col col-lg-12 col-md-6 col-sm-12 col-12">
													<div class="form-group ">
														<label class="control-label">Company Description</label>
														<input type="text"  name="description" class="form-control">
														@error('description')
														<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>
											
												
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<button type="submit" class="btn btn-primary  full-width">Save Now</button>
												</div>
										</form>
										@else
										<form method="post" action="{{url('user/UpdateCompany')}}/{{$company_data->id}}">
											@csrf
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group ">
														<label class="control-label">Company Name</label>
														<input type="text"  name="title" class="form-control" value="{{$company_data->title}}" >
														@error('title')
                                                  <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                  </span>
                                                  @enderror 
													</div>
												</div>
											
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group ">
														<label class="control-label">Company Description</label>
														<input type="text"  name="description" class="form-control" value="{{$company_data->description}}" >
														@error('description')
														<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
														</span>
														@enderror
													</div>
												</div>
											
												
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<button type="submit" class="btn btn-primary  full-width">Update Company</button>
												</div>
										</form>
										@endif
										<!-- ... end Personal Information Form  -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif

			</div>
			<!-- <div class="modal fade" id="public-event" tabindex="-1" role="dialog" aria-labelledby="public-event" aria-hidden="true">
				<div class="modal-dialog window-popup event-private-public public-event" role="document">
					<div class="modal-content">
						<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
							<svg class="olymp-close-icon">
								<use xlink:href="#olymp-close-icon"></use>
							</svg>
						</a>
						<div class="modal-body">
							<article class="hentry post has-post-thumbnail thumb-full-width private-event">
			
								<div class="private-event-head inline-items">
									<img loading="lazy" src="img/avatar77-sm.html" alt="author" width="40" height="40">
			
									<div class="author-date">
										<a class="h3 event-title" href="#">Green Goo in Gotham</a>
										<div class="event__date">
											<time class="published" datetime="2017-03-24T18:18">
												Saturday at 9:00am
											</time>
										</div>
									</div>
			
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Edit Event Settings</a>
											</li>
											<li>
												<a href="#">Mark as Completed</a>
											</li>
											<li>
												<a href="#">Delete Event</a>
											</li>
										</ul>
									</div>
								</div>
			
								<div class="post-thumb">
									<img loading="lazy" src="img/event-public.html" alt="photo" width="769" height="380">
								</div>
			
								<div class="row">
									<div class="col col-lg-7 col-md-7 col-sm-12 col-12">
										<div class="post__author author vcard inline-items">
											<img loading="lazy" src="img/avatar5-sm.html" alt="author" width="42" height="42">
			
											<div class="author-date">
												<a class="h6 post__author-name fn" href="#">Green Goo Rock</a> created the
												<a href="#">Event</a>
												<div class="post__date">
													<time class="published" datetime="2017-03-24T18:18">
														March 11 at 9:52pm
													</time>
												</div>
											</div>
			
										</div>
			
										<p>
											We’ll be playing in the Gotham Bar in May. Come and have a great time with us! Entry: $12
										</p>
									</div>
									<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
										<div class="event-description">
											<h6 class="event-description-title">Public Event</h6>
											<div class="place inline-items">
												<svg class="olymp-add-a-place-icon">
													<use xlink:href="#olymp-add-a-place-icon"></use>
												</svg>
												<span>Gotham Bar</span>
											</div>
			
											<div class="place inline-items">
												<svg class="olymp-add-a-place-icon">
													<use xlink:href="#olymp-add-a-place-icon"></use>
												</svg>
												<span>Mar 26, 2016 at 9:00am UTC-8</span>
											</div>
			
											<ul class="friends-harmonic">
												<li>
													<a href="#">
														<img loading="lazy" src="img/friend-harmonic5.html" alt="friend" width="28" height="28">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/friend-harmonic10.html" alt="friend" width="28" height="28">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/friend-harmonic7.html" alt="friend" width="28" height="28">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/friend-harmonic8.html" alt="friend" width="28" height="28">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/friend-harmonic2.html" alt="friend" width="28" height="28">
													</a>
												</li>
												<li>
													<a href="#" class="all-users bg-breez">+24</a>
												</li>
			
												<li class="with-text">
													Will Assist
												</li>
											</ul>
			
											<a href="#" class="btn btn-blue btn-sm full-width">Invite Friends</a>
			
											<a href="#" class="btn btn-breez btn-sm full-width">Add to Calendar / Assist</a>
										</div>
									</div>
								</div>
			
			
								<div class="post-additional-info inline-items">
			
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon">
											<use xlink:href="#olymp-heart-icon"></use>
										</svg>
										<span>8</span>
									</a>
			
									<ul class="friends-harmonic">
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic1.html" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic9.html" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic7.html" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic4.html" alt="friend" width="28" height="28">
											</a>
										</li>
										<li>
											<a href="#">
												<img loading="lazy" src="img/friend-harmonic8.html" alt="friend" width="28" height="28">
											</a>
										</li>
									</ul>
			
									<div class="names-people-likes">
										<a href="#">Diana </a>, <a href="#">Nicholas</a> and
										<br>15 more liked this
									</div>
			
			
									<div class="comments-shared">
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-speech-balloon-icon">
												<use xlink:href="#olymp-speech-balloon-icon"></use>
											</svg>
											<span>16 Comments</span>
										</a>
									</div>
			
			
								</div>
			
								<div class="control-block-button post-control-button">
			
									<a href="#" class="btn btn-control">
										<svg class="olymp-like-post-icon">
											<use xlink:href="#olymp-like-post-icon"></use>
										</svg>
									</a>
			
									<a href="#" class="btn btn-control">
										<svg class="olymp-comments-post-icon">
											<use xlink:href="#olymp-comments-post-icon"></use>
										</svg>
									</a>
			
									<a href="#" class="btn btn-control">
										<svg class="olymp-share-icon">
											<use xlink:href="#olymp-share-icon"></use>
										</svg>
									</a>
			
								</div>
			
							</article>
			
							<div class="mCustomScrollbar" data-mcs-theme="dark">
			
								<ul class="comments-list">
									<li class="comment-item">
										<div class="post__author author vcard inline-items">
											<img loading="lazy" src="img/author-page.html" width="36" height="36" alt="author">
			
											<div class="author-date">
												<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
												<div class="post__date">
													<time class="published" datetime="2017-03-24T18:18">
														38 mins ago
													</time>
												</div>
											</div>
			
											<a href="#" class="more">
												<svg class="olymp-three-dots-icon">
													<use xlink:href="#olymp-three-dots-icon"></use>
												</svg>
											</a>
			
										</div>
			
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>
			
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-heart-icon">
												<use xlink:href="#olymp-heart-icon"></use>
											</svg>
											<span>3</span>
										</a>
										<a href="#" class="reply">Reply</a>
									</li>
									<li class="comment-item">
										<div class="post__author author vcard inline-items">
											<img loading="lazy" src="img/avatar1-sm.html" alt="author" width="42" height="42">
			
											<div class="author-date">
												<a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
												<div class="post__date">
													<time class="published" datetime="2017-03-24T18:18">
														1 hour ago
													</time>
												</div>
											</div>
			
											<a href="#" class="more">
												<svg class="olymp-three-dots-icon">
													<use xlink:href="#olymp-three-dots-icon"></use>
												</svg>
											</a>
			
										</div>
			
										<p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum
											quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
										</p>
			
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-heart-icon">
												<use xlink:href="#olymp-heart-icon"></use>
											</svg>
											<span>8</span>
										</a>
										<a href="#" class="reply">Reply</a>
									</li>
									<li class="comment-item">
										<div class="post__author author vcard inline-items">
											<img loading="lazy" src="img/avatar10-sm.html" alt="author" width="36" height="36">
			
											<div class="author-date">
												<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
												<div class="post__date">
													<time class="published" datetime="2017-03-24T18:18">
														5 mins ago
													</time>
												</div>
											</div>
			
											<a href="#" class="more">
												<svg class="olymp-three-dots-icon">
													<use xlink:href="#olymp-three-dots-icon"></use>
												</svg>
											</a>
			
										</div>
			
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>
			
										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-heart-icon">
												<use xlink:href="#olymp-heart-icon"></use>
											</svg>
											<span>8</span>
										</a>
										<a href="#" class="reply">Reply</a>
									</li>
								</ul>
			
							</div>
			
							<form class="comment-form inline-items">
			
								<div class="post__author author vcard inline-items">
									<img loading="lazy" src="img/author-page.html" width="36" height="36" alt="author">
			
									<div class="form-group with-icon-right">
										<textarea class="form-control" placeholder=""></textarea>
										<div class="add-options-message">
											<a href="#" class="options-message">
												<svg class="olymp-camera-icon">
													<use xlink:href="#olymp-camera-icon"></use>
												</svg>
											</a>
										</div>
									</div>
								</div>
			
							</form>
						</div>
					</div>
				</div>
			</div> -->
			
		</div>

		<div
			class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
			<div class="ui-block">

				<!-- Your Profile  -->
				<div class="your-profile">

					<div class="accordion" id="accordionExample1">
						<div class="accordion-item">
							<h6 class="accordion-header" id="headingOne1">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne1" aria-expanded="true"
									aria-controls="collapseOne1">
									Settings
									<svg class="olymp-dropdown-arrow-icon">
										<use xlink:href="#olymp-dropdown-arrow-icon"></use>
									</svg>
								</button>
							</h6>
							<div id="collapseOne1" class="accordion-collapse collapse show"
								aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
								<div class="accordion-body setting-nav">
									<ul class="nav  calendar-events-tabs" id="calendar-events-tabs" role="tablist">
										<li class="" role="presentation">
											<a class="nav-link active" id="events-tab" data-bs-toggle="tab" href="#events" role="tab" aria-controls="home" aria-selected="true">
												Personel Setttings
											</a>
										</li>
										@if(Auth::user()->role == 'admin')
										<li class="" role="presentation">
											<a class="nav-link" id="notifications-tab" data-bs-toggle="tab" href="#notifications" role="tab" aria-controls="home" aria-selected="false">
												Website Settings
											</a>
										</li>
										@endif
										@if(Auth::user()->role == 'user')
										<li class="" role="presentation">
											<a class="nav-link" id="company-tab" data-bs-toggle="tab" href="#company" role="tab" aria-controls="home" aria-selected="false">
												User Company
											</a>
										</li>
										@endif
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- ... end Your Profile  -->

			</div>
		</div>
	</div>
</div>


<!-- ... end Your Account Personal Information -->





<a class="back-to-top" href="#">
	<svg class="back-icon" width="14" height="18">
		<use xlink:href="#olymp-back-to-top"></use>
	</svg>
</a>

@endsection
