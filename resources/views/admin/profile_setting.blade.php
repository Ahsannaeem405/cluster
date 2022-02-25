@extends('admin.layout')
@section('page_title', 'Profile Setting Page')
@section('content')


<!-- Main Header Account -->

<div class="main-header">
	<div class="content-bg-wrap setting-bg"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Profile Setting</h1>
					<p>Welcome to your account setting, here you can edit your account details</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Main Header Account -->


<!-- Your Account Personal Information -->

<div class="container">
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
				
										<form>
											<div class="row">
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group label-floating">
														<label class="control-label">First Name</label>
														<input class="form-control" placeholder="" type="text" value="Abu">
													</div>
				
													<div class="form-group label-floating">
														<label class="control-label">Your Email</label>
														<input class="form-control" placeholder="" type="email"
															value="abc@yourmail.com">
													</div>
				
													<div class="form-group date-time-picker label-floating">
														<label class="control-label">Your Birthday</label>
														<input name="datetimepicker" value="10/24/1984" />
														<span class="input-group-addon">
															<svg class="olymp-month-calendar-icon icon">
																<use xlink:href="#olymp-month-calendar-icon"></use>
															</svg>
														</span>
													</div>
												</div>
				
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group label-floating">
														<label class="control-label">Last Name</label>
														<input class="form-control" placeholder="" type="text" value="Sufian">
													</div>
				
				
				
													<div class="form-group label-floating is-empty">
														<label class="control-label">Your Phone Number</label>
														<input class="form-control" placeholder="" type="text">
													</div>
												</div>
				
												<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
													<div class="form-group label-floating is-select">
														<label class="control-label">Your Country</label>
														<select class="form-select">
															<option value="US">United States</option>
															<option value="AU">Australia</option>
														</select>
													</div>
												</div>
												<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
													<div class="form-group label-floating is-select">
														<label class="control-label">Your State / Province</label>
														<select class="form-select">
															<option value="CA">California</option>
															<option value="TE">Texas</option>
														</select>
													</div>
												</div>
												<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
													<div class="form-group label-floating is-select">
														<label class="control-label">Your City</label>
														<select class="form-select">
															<option value="SF">San Francisco</option>
															<option value="NY">New York</option>
														</select>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group">
														<textarea class="form-control"
															placeholder="Write a little description about you">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56</textarea>
													</div>
				
													<div class="form-group label-floating is-select">
														<label class="control-label">Your Gender</label>
														<select class="form-select">
															<option value="MA">Male</option>
															<option value="FE">Female</option>
														</select>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<div class="form-group label-floating is-select">
														<label class="control-label">Status</label>
														<select class="form-select">
															<option value="MA">Married</option>
															<option value="FE">Not Married</option>
														</select>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<button class="btn btn-primary full-width">Save all Changes</button>
												</div>
				
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
										<h6 class="title">Forget Password</h6>
									</div>
									<div class="ui-block-content">	
										<!-- Personal Information Form  -->
										<form>
												<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="form-group label-floating">
														<label class="control-label">Old Password</label>
														<input class="form-control" placeholder="" type="text" value="">
													</div>
												</div>
												
												<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="form-group label-floating">
														<label class="control-label">New Password</label>
														<input class="form-control" placeholder="" type="text" value="
														">
													</div>
												</div>
											
												<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="form-group label-floating">
														<label class="control-label">Confirm Password</label>
														<input class="form-control" placeholder="" type="text" value="">
													</div>
												</div>
											<div class="row">
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
													<button type="submit" class="btn btn-primary btn-lg full-width">Save all Changes</button>
												</div>
											</div>
										</form>
										
										<!-- ... end Personal Information Form  -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
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
										<li class="" role="presentation">
											<a class="nav-link" id="notifications-tab" data-bs-toggle="tab" href="#notifications" role="tab" aria-controls="home" aria-selected="false">
												Forget Password
											</a>
										</li>

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
