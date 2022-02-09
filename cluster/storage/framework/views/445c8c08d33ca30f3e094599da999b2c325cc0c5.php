
<?php $__env->startSection('page_title', 'Home Page'); ?>
<?php $__env->startSection('content'); ?>
<style>
	.serviceBtn{
		border-radius:50%;width:80%;height:80%;padding:10px;
	}
</style>
<div class="header-spacer header-spacer-small"></div>


<!-- Main Header Groups -->

<div class="main-header">
	<div class="content-bg-wrap bg-group bg-services"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Our Servies</h1>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container py-5">
		

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
					<h6 class="title">Add New Service</h6>
				</div>

				<div class="modal-body">
					<form method="post" action="<?php echo e(url('admin/addService')); ?>">
						<?php echo csrf_field(); ?>
						<div class="form-group">
							<label for="exampleFormControlInput1">Title</label>
							<input type="text" name="title" class="form-control  <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Cluster-Name" placeholder="Enter Title">
							<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<span class="invalid-feedback" role="alert">
							<strong><?php echo e($message); ?></strong>
							</span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                                

						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Description</label>
							<textarea name="description" rows="4" cols="4" class="form-control  <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter Description"></textarea>
							<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<span class="invalid-feedback" role="alert">
							<strong><?php echo e($message); ?></strong>
							</span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                                

							</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Clusters</label>
							<select name="cluster_id" class="form-control   <?php $__errorArgs = ['cluster_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
								<option value="">Select Sluster</option>
								<?php $__currentLoopData = $clusters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clusterslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($clusterslist->id); ?>"><?php echo e($clusterslist->name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<?php $__errorArgs = ['cluster_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<span class="invalid-feedback" role="alert">
							<strong><?php echo e($message); ?></strong>
							</span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                                

						</div>
					

						<button type="submit" class="btn btn-blue full-width">Add Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>
		<?php if($message = Session::get('success')): ?>
		<div class="alert alert-success ">
			<strong><?php echo e($message); ?></strong>
		</div>
	<?php endif; ?>
	<?php if($message = Session::get('error')): ?>
	<div class="alert alert-danger ">
		<strong><?php echo e($message); ?></strong>
	</div>
	<?php endif; ?>

<?php if(count($services) > 0): ?>
	<div class="row ">

		<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-lg-4 col-md-6 col-sm-6 mt-5 ">
			<div class="servies-card text-center mx-xl-5 mx-lg-2 mx-md-3 p-2">
				<div class="servies-card-hard position-relative">
					<div class="servies-card-img position-absolute">
						<i class="fas fa-user-shield"></i>
					</div>
				</div>
				<div class="servies-card-body mt-5">
					<h4><?php echo e($serviceslist->title); ?></h4>
					<p><?php echo e($serviceslist->description); ?></p>
					<div class="row ">
						<div class="col-lg-4 col-md-4 col-sm-4  ">
							<a href="#" class="btn btn-primary serviceBtn" data-bs-toggle="modal"  data-bs-toggle="modal"
							data-bs-target="#edit-new-servies<?php echo e($serviceslist->id); ?>">
								<i class="fas fa-edit"></i>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4  ">
							<a href="<?php echo e(url('admin/deleteService')); ?>/<?php echo e($serviceslist->id); ?>"  class="btn btn-danger serviceBtn">
								<i class="fas fa-trash text-white"></i>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4  ">
							<a class="btn btn-warning serviceBtn">
								<i class="fas fa-file text-white"></i>
							</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>


		
		<div class="modal fade" id="edit-new-servies<?php echo e($serviceslist->id); ?>" tabindex="-1" role="dialog"
		aria-labelledby="create-friend-group-1" aria-hidden="true">
		<div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon">
						<use xlink:href="#olymp-close-icon"></use>
					</svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Edit Service</h6>
				</div>

				<div class="modal-body">
					<form method="post" action="<?php echo e(url('admin/updateService')); ?>/<?php echo e($serviceslist->id); ?>">
						<?php echo csrf_field(); ?>
						<div class="form-group">
							<label for="exampleFormControlInput1">Title</label>
							<input type="text" name="title" value="<?php echo e($serviceslist->title); ?>" class="form-control  <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Cluster-Name" placeholder="Enter Title">
							<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<span class="invalid-feedback" role="alert">
							<strong><?php echo e($message); ?></strong>
							</span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                                

						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Description</label>
							<textarea name="description" rows="4" cols="4" class="form-control  <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter Description"><?php echo e($serviceslist->description); ?></textarea>
							<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<span class="invalid-feedback" role="alert">
							<strong><?php echo e($message); ?></strong>
							</span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                                

							</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Clusters</label>
							<select name="cluster_id" class="form-control   <?php $__errorArgs = ['cluster_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
								<option value="">Select Sluster</option>
								<?php $__currentLoopData = $clusters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clusterslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($clusterslist->id); ?>" <?php if($serviceslist->cluster_id == $clusterslist->id): ?> selected <?php endif; ?>><?php echo e($clusterslist->name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<?php $__errorArgs = ['cluster_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
							<span class="invalid-feedback" role="alert">
							<strong><?php echo e($message); ?></strong>
							</span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                                

						</div>
					

						<button type="submit" class="btn btn-blue full-width">Add Now</button>
					</form>
				</div>
			</div>
		</div>
	</div>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




	</div>
	<?php else: ?>
	<h6 class="text-center">No Active Service</h6>
	<?php endif; ?>

	<?php endif; ?>
	
			

			<?php if(Auth::user()->role == 'user'): ?>
			
<?php if(count($services) > 0): ?>
<div class="row ">

	<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceslist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-lg-4 col-md-6 col-sm-6 mt-5 ">
		<div class="servies-card text-center mx-xl-5 mx-lg-2 mx-md-3 p-2">
			<div class="servies-card-hard position-relative">
				<div class="servies-card-img position-absolute">
					<i class="fas fa-user-shield"></i>
				</div>
			</div>
			<div class="servies-card-body mt-5">
				<h4><?php echo e($serviceslist->title); ?></h4>
				<p><?php echo e($serviceslist->description); ?></p>
				<form method="post" action="<?php echo e(url('user/applyService')); ?>">
					<?php echo csrf_field(); ?>
				<center>
				<div class="row px-5">
					<div class="col-lg-6 col-md-6 col-sm-6 ">
						<div class="form-group">
							<label for="exampleFormControlInput1"><small>Individual</small>
							<input type="radio" name="apply" checked value="individual" style="width: 25px;height: 25px;"></label>
						</div>
						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6  ">
						<div class="form-group">
							<label for="exampleFormControlInput1"><small>Company</small>
							<input type="radio" name="apply" value="company" style="width: 25px;height: 25px;"></label>
						</div>
						
					</div>
				
				</div></center>
				<button type="submit" class="btn  w-100 mb-0">
					<small>	Apply Now</small>	
				</button>
				</form>
			</div>
		</div>
	</div>


	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




</div>
<?php else: ?>
<h6 class="text-center">No Active Service</h6>
<?php endif; ?>

			<?php endif; ?>
			

</div>

<!-- ... end Main Header Groups -->






<!-- Window-popup-CHAT for responsive min-width: 768px -->



<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



<a class="back-to-top" href="#">
	<svg class="back-icon" width="14" height="18">
		<use xlink:href="#olymp-back-to-top"></use>
	</svg>
</a>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cluster\cluster\resources\views/admin/view_services.blade.php ENDPATH**/ ?>