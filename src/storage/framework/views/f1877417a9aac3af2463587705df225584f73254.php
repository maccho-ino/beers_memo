<?php $__env->startSection('title', 'プロフィール'); ?>

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
    <div class="row">
        <div class="col-lg-3 text-center d-flex flex-column">
            <?php if($user): ?>
            <figure>
                <img class="rounded-circle img-fluid d-block mx-auto border border-dark" src="<?php echo e($user->my_pic); ?>" width="150" height="150">
            </figure>
            <?php else: ?>
            <i class="fa fa-user-circle fa-5x text-primary me-3"></i>
            <?php endif; ?>
            <a href="image"><button type="button" class="btn btn-outline-primary mt-4"><i class="fa fa-camera"></i> 画像を変更</button></a>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <h4 class="text-dark"><?php echo e(Auth::user()->name); ?></h4>
                <p class="text-dark">プロフィール/自己紹介</p>
                <form method="POST" action="<?php echo e(action('User\ProfileController@create')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <textarea class="form-control border border-primary" name="introduction" rows="8"><?php echo e(Auth::user()->introduction); ?></textarea>
                    <input type="submit" class="btn btn-outline-primary mt-2" value="更新">
                </form>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="<?php echo e(action('User\MainController@show')); ?>"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY PAGEに戻る</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/user/profile.blade.php ENDPATH**/ ?>