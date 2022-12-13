<?php $__env->startSection('title', 'MEMO 詳細'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">MEMO</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
            <!-- <a href="">メンバー登録はコチラ</a> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Main Start -->

<div class="container">
    <div class="row">

        <div class="d-inline-flex flex-row align-items-center mb-3 ml-4">
            <?php if($posts->user->my_pic): ?>
            <img class="rounded-circle img-fluid d-block mr-2 float-left" width="30" height="30" src="<?php echo e(asset('/storage/profile_images/'. $posts->user->id . '.png')); ?>">
            <?php else: ?>
            <i class="fa fa-user-circle fa-2x text-primary me-3"></i>
            <?php endif; ?>
            <h5 class="text-dark text-left mb-1"><?php echo e($posts->user->name); ?></h5>
        </div>

        <div class="col-lg-4 text-center mb-md-5">
            <?php if($posts->image_path): ?>
            <img class="rounded border border-dark img-fluid" src="<?php echo e($posts->image_path); ?>" alt="image">
            <?php else: ?>
            <img class="rounded border border-dark img-fluid" src="<?php echo e(asset('/image/noimage_beer.jpg')); ?>" alt="image">
            <?php endif; ?>

        </div>
        <div class="col-lg-7 mt-3 pl-3">
            <h2 class="ml-2 overflow-hidden text-break"><?php echo e($posts->name); ?></h2>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row" style="width: 30%"><i class="fa fa-flag"></i> 原産国</th>
                        <td>
                            <?php if($posts->country != null): ?>
                            <?php echo e($posts->country->name); ?>

                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 30%"><i class="fa fa-beer"></i> スタイル</th>
                        <td>
                            <?php if($posts->style != null): ?>
                            <?php echo e($posts->style->name); ?>

                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 30%"><i class="fa fa-tint"></i> アルコール度数</th>
                        <td><?php echo e($posts->degree); ?></td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 30%"><i class="fa fa-map-marker"></i> 場所</th>
                        <td><?php echo e($posts->place); ?></td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 30%"><i class="fa fa-commenting"></i> コメント</th>
                        <td class="comment"><?php echo e($posts->coment); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center mt-5">
    <div class="d-inline-flex flex-row align-items-center">
        <a href="<?php echo e(action('TopController@show')); ?>" class="btn btn-outline-primary mr-5"><i class="fa fa-home" aria-hidden="true"></i> TOP</a>
        <h4 class="text-primary"> | </h4>
        <button type="button" onClick="history.back()" class="btn btn-outline-primary ml-5"><i class="fa fa-arrow-left" aria-hidden="true"></i> 戻る</button>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/front/detail.blade.php ENDPATH**/ ?>