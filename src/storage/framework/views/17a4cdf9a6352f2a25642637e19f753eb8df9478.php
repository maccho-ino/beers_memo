<?php $__env->startSection('title', 'スタイルカテゴリー'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">STYLE</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
            <!-- <a href="">メンバー登録はコチラ</a> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <?php $__currentLoopData = $brewings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brewing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row mb-5">
        <h4 class="font-weight-bold mb-3 pb-1 border border-dark border-top-0 border-right-0 border-left-0"><?php echo e($brewing->name); ?></h4>
        <?php $__currentLoopData = $brewing->styles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $style): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="<?php echo e(action('TopController@styleIndex', ['id' => $style->id])); ?>" class="text-primary"><i class="fa fa-beer"></i> <?php echo e($style->name); ?>

                <?php if($mymemo = $style->mymemos): ?>
                (<?php echo e($mymemo->count()); ?>)
                <?php endif; ?>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="row mt-5">
        <div class="col-lg-2 col-md-3 col-sm-4 mb-3">
            <a href="<?php echo e(action('TopController@styleIndex', ['id' => '19'])); ?>" class="text-primary"><i class="fa fa-beer"></i> その他</a>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/front/style.blade.php ENDPATH**/ ?>