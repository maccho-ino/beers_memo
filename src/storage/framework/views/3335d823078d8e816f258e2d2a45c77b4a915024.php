<?php $__env->startSection('title', 'プロフィール変更'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">My Profile</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Bdy Start -->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-4 text-center">
            <?php if($user): ?>
            <figure>
                <img class="rounded-circle img-fluid w-50 d-block mx-auto border border-dark" src="<?php echo e($user->my_pic); ?>">
            </figure>
            <?php else: ?>
            <img class="rounded-circle img-fluid w-50 d-block mx-auto border border-dark" src="<?php echo e(asset('/image/noimage.png')); ?>">
            <?php endif; ?>
            <form method="POST" action="<?php echo e(action('User\ProfileController@store')); ?>" enctype="multipart/form-data" class="mt-4">
                <?php echo e(csrf_field()); ?>

                <input type="file" name="myPic">
                <input type="submit">
            </form>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            <a href="mypage"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY PAGEに戻る</a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/user/image.blade.php ENDPATH**/ ?>