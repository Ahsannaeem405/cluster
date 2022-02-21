@extends('admin.layout')
@section('page_title', 'Communication Page')
@section('content')

<?php
$role = Auth::user()->role;
?>


<div class="main-header">
	<div class="content-bg-wrap bg-account comm-bg"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content mt-5">
					<h1>Welcome to your Communication dashboard!</h1>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Your Account Personal Information -->
	<div class="container-fluid">
		<div class="row">
			<div class=" col-12 responsive-display-none px-4">
				<div class="ui-block responsive-flex">
					<div class="ui-block-title">

    				<ul class="nav nav-tabs calendar-events-tabs" id="calendar-events-tabs" role="tablist">


							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="news-letter-tab" data-bs-toggle="tab" href="#news-letter"
									role="tab" aria-controls="home" aria-selected="true">
									News Letter
								</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" id="meeting-tab" data-bs-toggle="tab" href="#meeting" role="tab"
									aria-controls="home" aria-selected="false">
									Meeting Invitation
								</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" id="offer-tab" data-bs-toggle="tab" href="#offer" role="tab"
									aria-controls="home" aria-selected="true">
									Partner Offers
								</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" id="marketing-tab" data-bs-toggle="tab" href="#marketing" role="tab"
									aria-controls="home" aria-selected="false">
									Marketing Mails
								</a>
							</li>

						</ul>

					</div>
				</div>
			</div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
				<div class="tab-content" id="calendar-events-tabs-content">
					<div class="tab-pane fade show active" id="news-letter" role="tabpanel"
						aria-labelledby="news-letter-tab">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<div class="ui-block">
										<div class="ui-block-title">
											<h6 class="title">News Letter</h6>
										</div>
										<div class="ui-block-content">
											<!-- Personal Account Settings Form -->
											<form action="{{url("$role/send/email")}}" method="POST" >
                                                @csrf
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<textarea id="editor" name="desc" rows="10" ></textarea>
														</div>
													</div>
												</div>
												<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Managers</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Managers" value="Managers" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Members</div>

														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Members" value="Members" checked="">
															</label>
														</div>
													</div>
                                                    <input type="hidden" name="name" value="News Letter" id="">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Users</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Users" value="Users" checked="">
															</label>
														</div>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <input type="submit" class="btn btn-danger w-md-50 w-100" name="" value="Send Now" id="">
													{{-- <button class="btn btn-danger w-md-50 w-100">Send Now</button> --}}
												</div>
											</form>

											<!-- ... end Personal Account Settings Form  -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="meeting" role="tabpanel" aria-labelledby="meeting-tab">
						<div class="container-fluid">
							<div class="row">
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="ui-block">
										<div class="ui-block-title">
											<h6 class="title">Meeting Invitations</h6>
										</div>
										<div class="ui-block-content">
											<!-- Personal Account Settings Form -->
											<form action="{{url("$role/send/email")}}" method="POST" >
                                                @csrf
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<textarea id="editor1" name="desc" rows="10" ></textarea>
														</div>
													</div>
												</div>
												<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Managers</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Managers" value="Managers" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Members</div>

														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Members" value="Members" checked="">
															</label>
														</div>
													</div>
                                                    <input type="hidden" name="name" value="Meeting Invitations" id="">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Users</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Users" value="Users" checked="">
															</label>
														</div>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <input type="submit" class="btn btn-danger w-md-50 w-100" name="" value="Send Now" id="">
													{{-- <button class="btn btn-danger w-md-50 w-100">Send Now</button> --}}
												</div>
											</form>
											<!-- ... end Personal Account Settings Form  -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="offer" role="tabpanel" aria-labelledby="offer-tab">
						<div class="container-fluid">
							<div class="row">
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="ui-block">
										<div class="ui-block-title">
											<h6 class="title">Partner Offers</h6>
										</div>
										<div class="ui-block-content">
											<!-- Personal Account Settings Form -->
											<form action="{{url("$role/send/email")}}" method="POST" >
                                                @csrf
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<textarea id="editor2" name="desc" rows="10" ></textarea>
														</div>
													</div>
												</div>
												<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Managers</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Managers" value="Managers" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Members</div>

														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Members" value="Members" checked="">
															</label>
														</div>
													</div>
                                                    <input type="hidden" name="name" value="Partner Offers" id="">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Users</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Users" value="Users" checked="">
															</label>
														</div>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <input type="submit" class="btn btn-danger w-md-50 w-100" name="" value="Send Now" id="">
													{{-- <button class="btn btn-danger w-md-50 w-100">Send Now</button> --}}
												</div>
											</form>

											<!-- ... end Personal Account Settings Form  -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
						<div class="container-fluid">
							<div class="row">
								<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="ui-block">
										<div class="ui-block-title">
											<h6 class="title">Marketing Mails</h6>
										</div>
										<div class="ui-block-content">
											<!-- Personal Account Settings Form -->
											<form action="{{url("$role/send/email")}}" method="POST" >
                                                @csrf
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<textarea id="editor3" name="desc" rows="10" ></textarea>
														</div>
													</div>
												</div>
												<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Managers</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Managers" value="Managers" checked="">
															</label>
														</div>
													</div>
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Members</div>

														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Members" value="Members" checked="">
															</label>
														</div>
													</div>
                                                    <input type="hidden" name="name" value="Marketing Mails" id="">
													<div class="description-toggle">
														<div class="description-toggle-content">
															<div class="h6">Users</div>
														</div>

														<div class="togglebutton">
															<label>
																<input type="checkbox" name="Users" value="Users" checked="">
															</label>
														</div>
													</div>
												</div>
												<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <input type="submit" class="btn btn-danger w-md-50 w-100" name="" value="Send Now" id="">
													{{-- <button class="btn btn-danger w-md-50 w-100">Send Now</button> --}}
												</div>
											</form>


											<!-- ... end Personal Account Settings Form  -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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

    <script>
		document.addEventListener("DOMContentLoaded", function () {
			var webpMachine = new webpHero.WebpMachine()
			webpMachine.polyfillDocument()
		});

		tinymce.init({
			selector: '#editor',
			menubar: false,
			statusbar: false,
			plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
			toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
			skin: 'bootstrap',
			toolbar_drawer: 'floating',
			min_height: 200,
			autoresize_bottom_margin: 16,
			setup: (editor) => {
				editor.on('init', () => {
					editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
				});
				editor.on('focus', () => {
					editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)",
						editor.getContainer().style.borderColor = "#80bdff"
				});
				editor.on('blur', () => {
					editor.getContainer().style.boxShadow = "",
						editor.getContainer().style.borderColor = ""
				});
			}
		});


		tinymce.init({
			selector: '#editor1',
			menubar: false,
			statusbar: false,
			plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
			toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
			skin: 'bootstrap',
			toolbar_drawer: 'floating',
			min_height: 200,
			autoresize_bottom_margin: 16,
			setup: (editor) => {
				editor.on('init', () => {
					editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
				});
				editor.on('focus', () => {
					editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)",
						editor.getContainer().style.borderColor = "#80bdff"
				});
				editor.on('blur', () => {
					editor.getContainer().style.boxShadow = "",
						editor.getContainer().style.borderColor = ""
				});
			}
		});

		tinymce.init({
			selector: '#editor2',
			menubar: false,
			statusbar: false,
			plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
			toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
			skin: 'bootstrap',
			toolbar_drawer: 'floating',
			min_height: 200,
			autoresize_bottom_margin: 16,
			setup: (editor) => {
				editor.on('init', () => {
					editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
				});
				editor.on('focus', () => {
					editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)",
						editor.getContainer().style.borderColor = "#80bdff"
				});
				editor.on('blur', () => {
					editor.getContainer().style.boxShadow = "",
						editor.getContainer().style.borderColor = ""
				});
			}
		});

		tinymce.init({
			selector: '#editor3',
			menubar: false,
			statusbar: false,
			plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
			toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
			skin: 'bootstrap',
			toolbar_drawer: 'floating',
			min_height: 200,
			autoresize_bottom_margin: 16,
			setup: (editor) => {
				editor.on('init', () => {
					editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
				});
				editor.on('focus', () => {
					editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)",
						editor.getContainer().style.borderColor = "#80bdff"
				});
				editor.on('blur', () => {
					editor.getContainer().style.boxShadow = "",
						editor.getContainer().style.borderColor = ""
				});
			}
		});
	</script>




@endsection
