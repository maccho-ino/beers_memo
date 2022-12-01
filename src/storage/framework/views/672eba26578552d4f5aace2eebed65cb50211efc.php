<?php $__env->startSection('title', '原産国カテゴリー'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">COUNTRY</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
            <!-- <a href="">メンバー登録はコチラ</a> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row mb-5">
        <h4 class="font-weight-bold mb-3 pb-1 border border-dark border-top-0 border-right-0 border-left-0"><?php echo e($area->name); ?></h4>
        <?php $__currentLoopData = $area->countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="<?php echo e(action('TopController@countryIndex', ['id' => $country->id])); ?>" class="text-primary"><i class="fa fa-flag"></i> <?php echo e($country->name); ?>

                <?php if($mymemo = $country->mymemos): ?>
                (<?php echo e($mymemo->count()); ?>)
                <?php endif; ?>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="row mt-5">
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="<?php echo e(action('TopController@countryIndex', ['id' => '22'])); ?>" class="text-primary"><i class="fa fa-flag"></i> その他</a>
        </div>
    </div>
</div>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/front/country.blade.php ENDPATH**/ ?>