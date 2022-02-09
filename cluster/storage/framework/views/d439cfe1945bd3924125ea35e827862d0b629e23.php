
<?php $__env->startSection('page_title', 'Home Page'); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">


    <br />
    <?php

    $role = Auth::user()->role;

    ?>
    <div class="main-header">
        <div class="content-bg-wrap bg-group event-manager-bg"
            style="background:  linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url(<?php echo e(asset('/img/events-manager.jpg')); ?>)">
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
            <div class="col-12" style="    padding: 7px;">
                <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success ">
                    <strong><?php echo e($message); ?></strong>
                </div>
            <?php endif; ?>

                <div class="table-responsive">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>
                                    Second Name
                                </th>
                                <th>Email</th>
                                <th>Date of Birth</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;

                            ?>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($users->User->first_name); ?></td>
                                    <td><?php echo e($users->User->last_name); ?></td>
                                    <td><?php echo e($users->User->email); ?></td>
                                    <td><?php echo e($users->User->dob); ?></td>
                                    <td><?php echo e($users->User->role); ?></td>
                                    <td>
                                        <div class="author-page author vcard inline-items more">
                                            <div class="author-thumb">
                                                <button class="btn btn-primary">Action &nbsp; <i class="fa fa-angle-down"
                                                        style="font-size: 17px;" aria-hidden="true"></i>
                                                </button>
                                                <div class="more-dropdown more-with-triangle" style="    margin-top: -7px;">
                                                    <div class="mCustomScrollbar" data-mcs-theme="dark">


                                                        <ul class="account-settings">
                                                            <li>

                                                                <a style="font-size: 14px;"
                                                                    href="<?php echo e(url("$role/manager/status",[$users->id, $users->User->id])); ?>">
                                                                    <span> Manager</span>
                                                                </a>

                                                            </li>


                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin1.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cluster\cluster\resources\views\admin\view_users.blade.php ENDPATH**/ ?>