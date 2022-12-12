<?php $__env->startSection('title', 'USERS MEMO'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">USERS MEMO</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Body Start -->

<div class="container">
    <div class="row">
        <div class="col-lg-4 text-center">
            <?php if($user->my_pic): ?>
            <img class="rounded-circle img-fluid d-block mx-auto border border-dark" src="<?php echo e(asset('/storage/profile_images/'. $user->id . '.jpg')); ?>" width="150" height="150">
            <?php else: ?>
            <img class="rounded-circle img-fluid w-50 d-block mx-auto border border-dark" src="<?php echo e(asset('/image/user.png')); ?>">
            <i class="fa fa-user-circle fa-5x text-primary me-3"></i>
            <?php endif; ?>

            <h4 class="text-dark text-center mt-2"><?php echo e($user->name); ?></h4>
        </div>
        <div class="col-lg-7">
            <h4 class="text-dark">PROFILE</h4>
            <div class="h-50">
                <?php echo e($user->introduction); ?>

            </div>
            <!-- <div class="row">
                <div class="col-sm-3">
                    <a href="profile"><button type="button" class="center-block btn btn-outline-primary"><i class="fa fa-user-plus"></i> PROFILE編集</button></a>
                </div>
                <div class="col-sm-3">
                    <a href="create"><button type="button" class="btn btn-outline-primary"><i class="fa fa-plus-square"></i> MY MEMO作成</button></a>
                </div>
            </div> -->
        </div>
    </div>
</div>


<div class="container">
    <div class="row mt-3">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-group bg-dark mb-3">
                <div class="card-body">
                    <div class="card-top">
                    </div>
                    <?php if($post->image_path): ?>
                    <img class="card-img-top mt-1" src="<?php echo e($post->image_path); ?>" alt="Card image">
                    <?php else: ?>
                    <img class="card-img-top mt-1" src="<?php echo e(asset('/image/noimage_beer.jpg')); ?>" alt="Card image">
                    <?php endif; ?>
                    <p class="card-text">
                    <h5 class="card-title text-light mt-2"><?php echo e(Str::limit($post->name, 16)); ?></h5>
                    <p class="card-text text-light"><?php echo e($post->country->name); ?></p>
                    <a href="<?php echo e(action('TopController@detail', $post->id)); ?>" class="btn btn-primary">more <i class="fa fa-arrow-circle-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/front/userpage.blade.php ENDPATH**/ ?>