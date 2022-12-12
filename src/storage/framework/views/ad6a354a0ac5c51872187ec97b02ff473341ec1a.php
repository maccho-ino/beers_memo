<?php $__env->startSection('title', 'COUNTRY'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white"><?php echo e($country->name); ?></h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
            <!-- <a href="">メンバー登録はコチラ</a> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card bg-dark mb-3">
                <div class="card-body">
                    <div class="card-top" style="height: 40px;">
                        <h5 class="card-text text-light text-left mb-1 d-inline-flex flex-row align-items-center">
                            <?php if($post->user->my_pic): ?>
                            <img class="rounded-circle img-fluid d-block mr-2 float-left" width="30" height="30" src="<?php echo e(asset('/storage/profile_images/'. $post->user->id . '.jpg')); ?>" alt="user image">
                            <?php else: ?>
                            <i class="fa fa-user-circle fa-2x text-primary me-3"></i>
                            <?php endif; ?>
                            <?php echo e($post->user->name); ?>

                        </h5>
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

<div class="text-center">
    <a href="<?php echo e(action('TopController@country')); ?>"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> COUNTRY 一覧に戻る</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/front/countryindex.blade.php ENDPATH**/ ?>