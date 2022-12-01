<?php $__env->startSection('title', 'ユーザー情報'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">USER 情報</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <div class="row">
        <div class="col-md-2 text-center">
            <i class="fa fa-user-circle fa-5x text-primary me-3"></i>
            <button type="button" class="center-block btn btn-outline-primary mt-2" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i> USER 削除</button>
        </div>
        <div class="col-md-10">
            <h5 class="p-1">NAME: <?php echo e($user->name); ?></h5>
            <h5 class="p-1">E-MAIL: <?php echo e($user->email); ?></h5>
        </div>
    </div>

    <div class="row mt-5">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-2">Name</th>
                    <th class="col-md-1">Country</th>
                    <th class="col-md-1">Style</th>
                    <th class="col-md-1">%</th>
                    <th class="col-md-2">Place</th>
                    <th class="col-md-4">Coment</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td><a href="<?php echo e(action('Admin\MainController@usermemo', $post->id)); ?>"><?php echo e($post->id); ?></a></td>
                    <td><?php echo e($post->name); ?></td>
                    <td>
                        <?php if($post->country != null): ?>
                        <?php echo e($post->country->name); ?>

                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($post->style != null): ?>
                        <?php echo e($post->style->name); ?>

                        <?php endif; ?>
                    </td>
                    <td><?php echo e($post->degree); ?></td>
                    <td><?php echo e($post->place); ?></td>
                    <td><?php echo e($post->coment); ?></td>
                </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

    <div class="container d-flex justify-content-center mt-5">
        <div class="d-inline-flex flex-row align-items-center">
            <a href="<?php echo e(action('Admin\MainController@show')); ?>" class="btn btn-outline-primary mr-5"><i class="fa fa-home" aria-hidden="true"></i> 管理者ページに戻る</a>
            <h4 class="text-primary"> | </h4>
            <button type="button" onClick="history.back()" class="btn btn-outline-primary ml-5"><i class="fa fa-arrow-left" aria-hidden="true"></i> 戻る</button>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">USERの削除</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    USER を削除しますか？
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                    <a href="<?php echo e(action('Admin\MainController@userDestroy', $user->id)); ?>"><button type=" button" class="btn btn-primary"><i class="fa fa-trash"></i> YES</button></a>
                </div>
            </div>
        </div>
    </div>
</div>>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/admin/userdetail.blade.php ENDPATH**/ ?>