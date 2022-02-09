
<?php $__env->startSection('page_title', 'Home Page'); ?>
<?php $__env->startSection('content'); ?>

	<!-- ... end Responsive Header-BP -->

	<div class="header-spacer header-spacer-small"></div>
	<!-- Main Header Groups -->

	<div class="main-header">
		<div class="content-bg-wrap bg-group clusterbg"></div>
		<div class="container">
			<div class="row">
				<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
					<div class="main-header-content">
						<h1>Members</h1>
						<p>Welcome to your member manager page.Here you can easly Add, Delete and Edit you mambers.
							Thank you</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Main Header Groups -->

	<!-- Main Content Groups -->

	<div class="container">
		<?php if(Auth::user()->role == 'admin'): ?>
		<div class="row">
			<div class="col-12">
				<div class="add-new-member my-3">
					<a href="#" data-bs-toggle="modal"  data-bs-toggle="modal"
					data-bs-target="#add-new-member">
						<button><i class="fas fa-plus mx-1"></i> Add New</button>
					</a>
					
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-12">
				<div class="members-table">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col" class="text-center">#</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Cluster</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">1</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								<td>Floppy</td>
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">2</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								<td>Floppy</td>
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">3</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								<td>Floppy</td>
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">4</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								<td>Floppy</td>
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">5</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								<td>Floppy</td>
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">6</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								<td>Floppy</td>
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-center">7</td>
								<td class="py-2">Francine Smith</td>
								<td>abc@xyz.com</td>
								<td>Floppy</td>
								<td>
									<div class="d-flex justify-content-end">
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
											<button class="mx-2 members-btns btn-danger" >
												<span>Delete </span><i class="fas fa-trash-alt"></i>
											</button>
										</a>
										
										<a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#edit-new-member">
											<button class="mx-2 members-btns btn-secondary">
												<span>Edit</span> <i class="fas fa-edit"></i>
											</button>
										</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- ... end Main Content Groups -->



	<!-- Window-popup Create Friends Group -->

	<div class="modal fade" id="add-new-member" tabindex="-1" role="dialog"
		aria-labelledby="create-friend-group-1" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Add New Member</h6>
				</div>

				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="exampleFormControlInput1">Name</label>
							<input type="text" class="form-control" id="Cluster-Name" placeholder="Enter Name">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Email</label>
							<input type="email" class="form-control" id="Cluster-Name" placeholder="Enter Email">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Password</label>
							<input type="password" class="form-control" id="Cluster-Name" placeholder="Enter Passowrd">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Cluster</label>
							<select class="from-control">
								<option>floppy</option>
								<option>floppy</option>
								<option>floppy</option>
							</select>
						</div>

						<button href="#" class="btn btn-blue full-width">Add Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="edit-new-member" tabindex="-1" role="dialog"
		aria-labelledby="create-friend-group-1" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Edit Member</h6>
				</div>

				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="exampleFormControlInput1">Name</label>
							<input type="text" class="form-control" id="Cluster-Name" Value="Francine Smith">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Email</label>
							<input type="email" class="form-control" id="Cluster-Name" Value="abc@xyz.com">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Old Password</label>
							<input type="password" class="form-control" id="Cluster-Name" placeholder="Enter Old Password">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">New Password</label>
							<input type="password" class="form-control" id="Cluster-Name" placeholder="Enter New Password">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Clusters</label>
							<select class="from-control">
								<option>floppy</option>
								<option>floppy</option>
								<option>floppy</option>
							</select>
						</div>

						<button href="#" class="btn btn-blue full-width">Edit Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="delete-new-member" tabindex="-1" role="dialog"
		aria-labelledby="create-friend-group-1" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Delete Member</h6>
				</div>

				<div class="modal-body">
					<div class="">
						<p>Are you sure you want to delete this members <span class="text-danger">Francine Smith</span></p>
					</div>
					<div class="row">
						<div class="col-6">
						<button href="#" class="btn btn-blue full-width" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">Ok</button>

						</div>
						<div class="col-6">
						<button href="#" class="btn btn-secondary full-width" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">No</button>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cluster\cluster\resources\views/admin/view_members.blade.php ENDPATH**/ ?>