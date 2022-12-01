<?php $__env->startSection('title', '管理者ページ'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark bg-img p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">管理者ページ</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <a href="#"><button type="button" class="center-block btn btn-outline-primary"><i class="fa fa-user-circle-o fa-lg"></i> user 一覧</button></a>
        </div>
        <div class="col-sm-2">
            <a href="#"><button type="button" class="btn btn-outline-primary"><i class="fa fa-file-text-o fa-lg"></i> mymemo 一覧</button></a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/Admin/index.blade.php ENDPATH**/ ?>