

<?php $__env->startSection('page_title', 'Home Page'); ?>
<?php $__env->startSection('content'); ?>

<?php
$role = Auth::user()->role;
?>

	<!-- ... end Responsive Header-BP -->

	<div class="header-spacer header-spacer-small"></div>


	<!-- Main Header Groups -->

	<div class="main-header">
		<div class="content-bg-wrap bg-group event-manager-bg" style="background:  linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url(<?php echo e(asset('/img/events-manager.jpg')); ?>)"></div>
		<div class="container">
			<div class="row">
				<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
					<div class="main-header-content">
						<h1>Your Events</h1>

					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- ... end Main Header Groups -->

	<div class="container">
		<div class="row">
			<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ui-block responsive-flex">
					<div class="ui-block-title">
						<ul class="nav nav-tabs calendar-events-tabs" id="calendar-events-tabs" role="tablist">

							<li class="nav-item" role="presentation">
								<a class="nav-link" id="notifications-tab" data-bs-toggle="tab" href="#notifications"
									role="tab" aria-controls="home" aria-selected="false">
									Events <span class="items-round-little bg-breez"><?php echo e($event->count()); ?></span>
								</a>
							</li>

						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Tab panes -->
	
	<div class="tab-content" id="calendar-events-tabs-content">
		<div class="tab-pane fade show active" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
			<div class="container">
				<div class="row">
					
					<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="ui-block">


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
                                    <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $events): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


									<tr class="event-item">
                                        <td><?php echo e($i++); ?></td>
										<td class="author">
											<div class="event-author inline-items">
												<div class="author-thumb">
													<img loading="lazy" src="<?php echo e(asset('img/avatar62-sm.html')); ?>" width="34"
														height="34" alt="author">
												</div>
												<div class="author-date">
													<a href="#" class="author-name h6"><?php echo e($events->EventJoin->Event->User->first_name); ?> <?php echo e($events->EventJoin->Event->User->last_name); ?></a>
												</div>
											</div>
										</td>
										<td class="location">
											<div class="place inline-items">
												
												<span><?php echo e($events->EventJoin->name); ?></span>
											</div>
										</td>
										<td class="upcoming">
											<div class="date-event inline-items align-left">
												<svg class="olymp-small-calendar-icon">
													<use xlink:href="#olymp-small-calendar-icon"></use>
												</svg>

												<span class="month"><?php echo e($events->EventJoin->datetimepicker); ?> <?php echo e($events->EventJoin->time); ?><?php echo e($events->EventJoin->time_type); ?></span>

											</div>
										</td>
										<td class="description">
											<p class="description">Hey! <?php echo e($events->EventJoin->description); ?> </p>
										</td>


									</tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>








	<!-- JS Scripts -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cluster\cluster\resources\views/admin/view_event.blade.php ENDPATH**/ ?>