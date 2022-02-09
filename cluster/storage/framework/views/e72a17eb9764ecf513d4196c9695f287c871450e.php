
<?php $__env->startSection('page_title', 'Home Page'); ?>
<?php $__env->startSection('content'); ?>

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
                        <h1>Manage your Events</h1>
                        <p>Welcome to your Events Management page.Here you can easly Add, Delete and Edit you clustors.
                            Thank you</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Main Header Groups -->



    <!-- Main Content Groups -->

    <div class="container">
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


        <div class="row">
            <?php if(Auth::user()->role == 'admin'): ?>

            <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">

                <!-- Friend Item -->

                <div class="friend-item friend-groups create-group h-75 mb-3">

                    <a href="#" class="  full-block" data-bs-toggle="modal" data-bs-target="#create-friend-group-1"></a>
                    <div class="content">

                        <a href="#" class="btn btn-control bg-green" data-bs-toggle="modal"
                            data-bs-target="#create-friend-group-1">
                            <svg class="olymp-plus-icon">
                                <use xlink:href="#olymp-plus-icon"></use>
                            </svg>
                        </a>

                        <div class="author-content">
                            <a href="#" class="h5 author-name">Create New</a>
                            <div class="country"></div>
                        </div>

                    </div>

                </div>

                <!-- ... end Friend Item -->
            </div>
            <?php endif; ?>
            


            <?php $__currentLoopData = $viewCluster; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">

                    <div class="ui-block h-100 mb-0">
<a href="<?php echo e(url("$role/view/Event",$list->id)); ?>">
                        <!-- Friend Item -->

                        <div class="friend-item clusotr-groups">

                            <div class="friend-item-content">
                                <div class="friend-avatar">
                                    <div class="author-thumb">
                                        <img loading="lazy" src="<?php echo e(asset('images')); ?>/<?php echo e($list->image); ?>"
                                            alt="Olympus">
                                    </div>
                                    <div class="author-content">
                                        <a href="#" class="h5 author-name"><?php echo e($list->name); ?></a>
                                        <div class="country">Manager:<span> Faizan</span></div>
                                        <p><?php echo e($list->detail); ?></p>
                                    </div>
                                </div>

                                <div class="control-block-button">

                                    

                                    <?php if(Auth::user()->role == 'user'): ?>
                                        <a href="<?php echo e(url('/user/Join/cluster')); ?>/<?php echo e($list->id); ?>" class="btn btn-control "
                                            style="background:#ff5e3a">
                                            <i class="fa fa-plus"></i>
                                        </a>

                                        <?php else: ?>
                                        <a href="<?php echo e(url('user/deleteCluster')); ?>/<?php echo e($list->id); ?>"
                                            class=" btn btn-control bg-blue">
                                            <i class="fa fa-trash olymp-happy-faces-icon" aria-hidden="true"></i>
                                        </a>

                                        <a href="#" class="btn btn-control bg-green" data-bs-toggle="modal"
                                            data-bs-target="#edit-cluster<?php echo e($list->id); ?>">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>

                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </a>
                        <!-- ... end Friend Item -->
                    </div>

                </div>


                <div class="modal fade" id="edit-cluster<?php echo e($list->id); ?>" tabindex="-1" role="dialog"
                    aria-labelledby="create-friend-group-1" aria-hidden="true">
                    <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
                        <div class="modal-content">
                            <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                            <div class="modal-header">
                                <h6 class="title">Create New Cluster</h6>
                            </div>

                            <div class="modal-body">
                                <form method="post" action="<?php echo e(url('user/updateCluster')); ?>/<?php echo e($list->id); ?>"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Cluster Name</label>
                                        <input type="text" name="name"
                                            class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            value="<?php echo e($list->name); ?>" id="Cluster-Name" placeholder="Enter Cluster Name"
                                            required>
                                        <?php $__errorArgs = ['name'];
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
                                        <label for="exampleFormControlTextarea1">Cluster Details</label>
                                        <textarea name="detail" class="form-control <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="exampleFormControlTextarea1" rows="3"
                                            required><?php echo e($list->detail); ?></textarea>
                                        <?php $__errorArgs = ['detail'];
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
                                        <label for="exampleFormControlInput1">Select Cluster Image</label>
                                        <input type="file" name="image"
                                            class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Cluster-Name"
                                            placeholder="Enter Cluster Image">
                                        <img src="<?php echo e(asset('images')); ?>/<?php echo e($list->image); ?>" width="100" height="100">
                                        <?php $__errorArgs = ['image'];
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
                                        <label for="exampleFormControlInput1">Cluster</label>
                                        <input list="browsers" name="cluster"   placeholder="Select Cluster"  class="form-control <?php $__errorArgs = ['cluster'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <datalist id="browsers">
                                            <option value=""></option>
                                            </datalist>
                                        
                                        <?php $__errorArgs = ['cluster'];
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


                                    <button type="submit" class="btn btn-blue btn-lg full-width">Create Cluster</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

    <!-- ... end Main Content Groups -->



    <!-- Window-popup Create Friends Group -->

    <div class="modal fade" id="create-friend-group-1" tabindex="-1" role="dialog"
        aria-labelledby="create-friend-group-1" aria-hidden="true">
        <div class="modal-dialog window-popup create-friend-group create-friend-group-1" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="#olymp-close-icon"></use>
                    </svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Create New Cluster</h6>
                </div>

                <div class="modal-body">
                    <form method="post" action="<?php echo e(url('user/createCluster')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cluster Name</label>
                            <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="Cluster-Name" placeholder="Enter Cluster Name" required>
                            <?php $__errorArgs = ['name'];
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
                            <label for="exampleFormControlTextarea1">Cluster Details</label>
                            <textarea name="detail" class="form-control <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="exampleFormControlTextarea1" rows="3" required>Enter details here</textarea>
                            <?php $__errorArgs = ['detail'];
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
                            <label for="exampleFormControlInput1">Select Cluster Image</label>
                            <input type="file" name="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="Cluster-Name" placeholder="Enter Cluster Name" required>
                            <?php $__errorArgs = ['image'];
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
                            <label for="exampleFormControlInput1">Cluster</label>
                            <input list="browsers" name="cluster"   placeholder="Select Cluster"  class="form-control <?php $__errorArgs = ['cluster'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <datalist id="browsers">
                                <option value=""></option>
                                </datalist>
                            
                            <?php $__errorArgs = ['cluster'];
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
                        <button type="submit" class="btn btn-blue btn-lg full-width">Create Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Create Friends Group -->


    <!-- ... end Window-popup Create Friends Group Add Friends -->



    <a class="back-to-top" href="#">
        <svg class="back-icon" width="14" height="18">
            <use xlink:href="#olymp-back-to-top"></use>
        </svg>
    </a>




    <!-- Window-popup-CHAT for responsive min-width: 768px -->

    <div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog"
        aria-labelledby="popup-chat-responsive" aria-hidden="true">

        <div class="modal-content">
            <div class="modal-header">
                <span class="icon-status online"></span>
                <h6 class="title">Chat</h6>
                <div class="more">
                    <svg class="olymp-three-dots-icon">
                        <use xlink:href="#olymp-three-dots-icon"></use>
                    </svg>
                    <svg class="olymp-little-delete js-chat-open">
                        <use xlink:href="#olymp-little-delete"></use>
                    </svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="mCustomScrollbar">
                    <ul class="notification-list chat-message chat-message-field">
                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="img/avatar14-sm.html" width="28" height="28" alt="author"
                                    class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m
                                    gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated"
                                        datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="img/author-page.html" width="36" height="36" alt="author"
                                    class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Don’t worry Mathilda!</span>
                                <span class="chat-message-item">I already bought everything</span>
                                <span class="notification-date"><time class="entry-date updated"
                                        datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="img/avatar14-sm.html" width="28" height="28" alt="author"
                                    class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m
                                    gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated"
                                        datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <form class="need-validation">

                    <div class="form-group">
                        <textarea class="form-control" placeholder="Press enter to post..."></textarea>
                        <div class="add-options-message">
                            <a href="#" class="options-message">
                                <svg class="olymp-computer-icon">
                                    <use xlink:href="#olymp-computer-icon"></use>
                                </svg>
                            </a>
                            <div class="options-message smile-block">

                                <svg class="olymp-happy-sticker-icon">
                                    <use xlink:href="#olymp-happy-sticker-icon"></use>
                                </svg>

                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat1.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat2.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat3.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat4.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat5.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat6.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat7.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat8.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat9.html" alt="icon" width="20" height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat10.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat11.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat12.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat13.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat14.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat15.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat16.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat17.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat18.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat19.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat20.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat21.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat22.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat23.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat24.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat25.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat26.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat27.html" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cluster\cluster\resources\views/admin/events.blade.php ENDPATH**/ ?>