
<?php $__env->startSection('page_title', 'Home Page'); ?>
<?php $__env->startSection('content'); ?>

<div class="header-spacer header-spacer-small"></div>

<!-- Main Header Account -->

<div class="main-header">
	<div class="content-bg-wrap bg-account comm-bg"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Welcome to your Communication dashboard!</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ... end Main Header Account -->


<!-- Your Account Personal Information -->
<div class="container">
	<div class="row">
		<div class=" col-12 responsive-display-none">
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
		<div class=" col-12">
			<div class="tab-content" id="calendar-events-tabs-content">
				<div class="tab-pane fade show active" id="news-letter" role="tabpanel"
					aria-labelledby="news-letter-tab">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="ui-block">
									<div class="ui-block-title">
										<h6 class="title">News Letter</h6>
									</div>
									<div class="ui-block-content">
										<!-- Personal Account Settings Form -->
										<form>
											<div class="row">
												<div class="col-12">
													<div class="form-group">
														<textarea id="editor" rows="10"></textarea>
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
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
												<div class="description-toggle">
													<div class="description-toggle-content">
														<div class="h6">Members</div>

													</div>

													<div class="togglebutton">
														<label>
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
												<div class="description-toggle">
													<div class="description-toggle-content">
														<div class="h6">Users</div>
													</div>

													<div class="togglebutton">
														<label>
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
											</div>
											<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
												<button class="btn btn-danger w-md-50 w-100">Send Now</button>
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
					<div class="container">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="ui-block">
									<div class="ui-block-title">
										<h6 class="title">Meeting Invitations</h6>
									</div>
									<div class="ui-block-content">
										<!-- Personal Account Settings Form -->
										<form>
											<div class="row">
												<div class="col-12">
													<div class="form-group">
														<textarea id="editor1" rows="10"></textarea>
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
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
												<div class="description-toggle">
													<div class="description-toggle-content">
														<div class="h6">Members</div>
													</div>

													<div class="togglebutton">
														<label>
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
												<div class="description-toggle">
													<div class="description-toggle-content">
														<div class="h6">Users</div>
													</div>

													<div class="togglebutton">
														<label>
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
											</div>
											<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
												<button class="btn btn-danger w-md-50 w-100">Send Now</button>
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
					<div class="container">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="ui-block">
									<div class="ui-block-title">
										<h6 class="title">Partner Offers</h6>
									</div>
									<div class="ui-block-content">
										<!-- Personal Account Settings Form -->
										<form>
											<div class="row">
												<div class="col-12">
													<div class="form-group">
														<textarea id="editor2" rows="10"></textarea>
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
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
												<div class="description-toggle">
													<div class="description-toggle-content">
														<div class="h6">Members</div>
													</div>

													<div class="togglebutton">
														<label>
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
												<div class="description-toggle">
													<div class="description-toggle-content">
														<div class="h6">Users</div>
													</div>

													<div class="togglebutton">
														<label>
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
											</div>
											<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
												<button class="btn btn-danger w-md-50 w-100">Send Now</button>
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
					<div class="container">
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="ui-block">
									<div class="ui-block-title">
										<h6 class="title">Marketing Mails</h6>
									</div>
									<div class="ui-block-content">
										<!-- Personal Account Settings Form -->
										<form>
											<div class="row">
												<div class="col-12">
													<div class="form-group">
														<textarea id="editor3" rows="10"></textarea>
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
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
												<div class="description-toggle">
													<div class="description-toggle-content">
														<div class="h6">Members</div>
													</div>

													<div class="togglebutton">
														<label>
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
												<div class="description-toggle">
													<div class="description-toggle-content">
														<div class="h6">Users</div>
													</div>

													<div class="togglebutton">
														<label>
															<input type="checkbox" checked="">
														</label>
													</div>
												</div>
											</div>
											<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
												<button class="btn btn-danger w-md-50 w-100">Send Now</button>
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cluster\cluster\resources\views/admin/view_communication.blade.php ENDPATH**/ ?>