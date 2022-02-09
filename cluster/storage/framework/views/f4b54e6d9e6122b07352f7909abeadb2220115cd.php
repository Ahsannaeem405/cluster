
<?php $__env->startSection('page_title', 'Home Page'); ?>
<?php $__env->startSection('content'); ?>


    <br />
    <?php

    $role = Auth::user()->role;

    ?>
  	<div class="header-spacer header-spacer-small"></div>


      <!-- Main Header Groups -->
  
      <div class="main-header">
          <div class="content-bg-wrap bg-group clusterbg"></div>
          <div class="container">
              <div class="row">
                  <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                      <div class="main-header-content">
                          <?php if(Auth::user()->role == 'admin'): ?>
                          <h1>Manage User</h1>
                          <?php else: ?>
                          <h1>Join User</h1>
                          <?php endif; ?>
                          <p>Welcome to your user manager page.Here you can easly Add, Delete and Edit you mambers.
                              Thank you</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  
      <!-- ... end Main Header Groups -->
  
      <!-- Main Content Groups -->
  
      <div class="container">
          <div class="row">
            <div class="col-12" style="padding: 7px;">
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
              <div class="col-12">
                  <div class="add-new-member my-3">
                      <a href="#" class="btn btn-primary" data-bs-toggle="modal"  data-bs-toggle="modal"
                      data-bs-target="#add-new-user">
                          <i class="fas fa-plus mx-1"></i> Add New
                      </a>
                      
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-12">
                  <div class="members-table">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th scope="col" class="text-center">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Cluster Name</th>
                                  <th scope="col"></th>
                              </tr>
                          </thead>
                          <tbody>
                           
                              <tr>
                                  <td class="text-center">1</td>
                                  <td class="py-2">cluster</td>
                                  <td>cluster name</td>
                                  
                                  <td>
                                      <div class="d-flex justify-content-end">
                                          <a data-bs-toggle="modal"  data-bs-toggle="modal" data-bs-target="#delete-new-member">
                                              <button class="mx-2 members-btns btn-danger">
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
                                          <form method="post" action="">
                                            <?php echo csrf_field(); ?> 
                                            <div class="form-group">
                                                  <label for="exampleFormControlInput1">Name</label>
                                                  <input type="text" name="first_name" value="" class="form-control" id="Cluster-Name" Value="Francine Smith">
                                                  <?php $__errorArgs = ['first_name'];
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
                                                  <label for="exampleFormControlInput1">Email</label>
                                                  <input type="email"  name="email" value="" class="form-control" id="Cluster-Name" Value="abc@xyz.com">
                                                  <?php $__errorArgs = ['email'];
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
                                                  <label for="exampleFormControlInput1">Old Password</label>
                                                  <input type="password"  name="c_password"  class="form-control" id="Cluster-Name" placeholder="Enter Old Password">
                                                  <?php $__errorArgs = ['c_password'];
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
                                                  <label for="exampleFormControlInput1">New Password</label>
                                                  <input type="password" name="new_password" class="form-control" id="Cluster-Name" placeholder="Enter New Password">
                                                  <?php $__errorArgs = ['new_password'];
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
                                                <label for="exampleFormControlInput1">Confirm Password</label>
                                                <input type="password" name="confirm_password" class="form-control" id="Cluster-Name" placeholder="Enter Confirm Password">
                                            </div>
                      
                                              <button type="submit" class="btn btn-blue full-width">Edit Now</button>
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
                                          <h6 class="title">Delete User</h6>
                                      </div>
                      
                                      <div class="modal-body">
                                          <div class="">
                                              <p>Are you sure you want to delete this user <span class="font-weight-bold text-danger">Francine Smith</span></p>
                                          </div>
                                          <div class="row">
                                              <div class="col-6">
                                                  <form method="post" action="">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-blue full-width" class="close icon-close" >Yes</button>
                                            </form>
                                              </div>
                                              <div class="col-6">
                                              <button href="#" class="btn btn-secondary full-width" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">No</button>
                      
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                              
                              
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  
      <!-- ... end Main Content Groups -->
  
  
  
      <!-- Window-popup Create Friends Group -->
  
      <div class="modal fade" id="add-new-user" tabindex="-1" role="dialog"
          aria-labelledby="create-friend-group-1" aria-hidden="true">
          <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
              <div class="modal-content">
                  <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                      <svg class="olymp-close-icon">
                          <use xlink:href="#olymp-close-icon"></use>
                      </svg>
                  </a>
                  <div class="modal-header">
                      <h6 class="title">Add New User</h6>
                  </div>
  
                  <div class="modal-body">
                      <form method="post" action="<?php echo e(url('admin/addUser')); ?>">
                        <?php echo csrf_field(); ?>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Name</label>
                              <input type="text" name="first_name" class="form-control" id="Cluster-Name" placeholder="enter Name">
                              <?php $__errorArgs = ['first_name'];
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
                              <label for="exampleFormControlInput1">Email</label>
                              <input type="email" name="email" class="form-control" id="Cluster-Name" placeholder="enter email">
                              <?php $__errorArgs = ['email'];
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
                              <label for="exampleFormControlInput1">Password</label>
                              <input type="password" name="password" class="form-control" id="Cluster-Name" placeholder="enter passowrd">
                              <?php $__errorArgs = ['password'];
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
                          <button type="submit" class="btn btn-blue btn-lg full-width">Add Now</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
     
    
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cluster\cluster\resources\views/admin/cluster_manager.blade.php ENDPATH**/ ?>