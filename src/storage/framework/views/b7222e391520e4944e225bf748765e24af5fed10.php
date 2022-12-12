<?php $__env->startSection('title', 'トップページ'); ?>

<?php $__env->startSection('content'); ?>


<div class="container-fluid px-0 d-lg-block">
    <div class="row">
        <img src="<?php echo e(asset('image/top_sample.jpg')); ?>" class="img-fluid">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="text-center mt-4">
            <h1>NEW !</h1>
        </div>
        <div class="card-deck my-4">
            <div class="card col-md-3 bg-dark">
                <img class="card-img-top mt-3" src="<?php echo e(asset('image/sample01.jpg')); ?>" alt="Card image">
                <div class="card-body">
                    <h5 class="card-title text-light">ビールの名前</h5>
                    <p class="card-text text-light">国名</p>
                    <a href="#!" class="btn btn-primary">more <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/top.blade.php ENDPATH**/ ?>