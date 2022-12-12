<?php $__env->startSection('title', 'HOME'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 text-center">
            <!-- <div class="card"> -->
            <!-- <div class="card-header">Dashboard</div> -->

            <!-- <div class="card-body"> -->
            <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>

            メンバー登録完了！
            <p>さっそく MY MEMO を作成しよう</p>
            <a href="<?php echo e(action('User\MainController@show')); ?>" class="mt-10 text-primary"><i class="fa fa-arrow-circle-left"></i> MY PAGEへ</a>
            <!-- </div> -->
            <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/home.blade.php ENDPATH**/ ?>