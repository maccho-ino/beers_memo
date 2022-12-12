<?php $__env->startSection('title', 'MY MEMO 一覧'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">My MEMO 一覧</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Main Start -->

<div class="container">
    <div class="row mt-3">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
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
                    <h5 class="card-title text-light mt-2"><?php echo e(Str::limit($post->name, 12)); ?></h5>
                    <p class="card-text text-light"><?php echo e($post->country->name); ?></p>
                    <a href="<?php echo e(action('User\MainController@detail', $post->id)); ?>" class="btn btn-primary">more <i class="fa fa-arrow-circle-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>


<div class="text-center">
    <a href="<?php echo e(action('User\MainController@show')); ?>"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY PAGEに戻る</a>
</div>

<!-- Main End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/user/index.blade.php ENDPATH**/ ?>