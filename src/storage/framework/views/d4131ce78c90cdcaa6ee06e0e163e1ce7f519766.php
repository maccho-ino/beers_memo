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
            <a href="<?php echo e(action('User\MainController@edit', $posts->id)); ?>"><button type="button" class="center-block btn btn-outline-primary mt-5"><i class="fa fa-pencil"></i> MY MEMO 編集</button></a>
            <button type="button" class="center-block btn btn-outline-primary mt-5 ml-2" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i> MY MEMO 削除</button>
        </div>
    </div>
</div>

<!-- Button trigger modal -->




<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">削除</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                MY MEMO を削除しますか？
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                <a href="<?php echo e(action('User\MainController@delete', $posts->id)); ?>"><button type=" button" class="btn btn-primary"><i class="fa fa-trash"></i> YES</button></a>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="<?php echo e(action('User\MainController@index')); ?>"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY MEMO 一覧に戻る</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/user/detail.blade.php ENDPATH**/ ?>