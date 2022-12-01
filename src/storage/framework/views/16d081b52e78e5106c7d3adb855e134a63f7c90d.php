<?php $__env->startSection('title', '管理者ページ'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">USER 一覧</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <div class="row">
        <nav class="navbar navbar-light">
            <form class="form-inline" method="GET" action="<?php echo e(action('Admin\MainController@userIndex')); ?>">
                <input class="form-control mr-sm-2" type="text" placeholder="User name" name="keyword" value="<?php echo e($keyword); ?>">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </div>

    <div class="row mt-5">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>User Email</th>
                </tr>
            </thead>
            <?php if($is_sarched): ?>
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td><a href="<?php echo e(action('Admin\MainController@userDetail', ['id' => $data->id])); ?>"><?php echo e($data->id); ?></a></td>
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->email); ?></td>
                </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td><a href="<?php echo e(action('Admin\MainController@userDetail', ['id' => $user->id])); ?>"><?php echo e($user->id); ?></a></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </table>
        <?php if(!$is_sarched): ?>
        <div class="d-flex justify-content-center mt-4"> <?php echo e($users->links()); ?></div>
        <?php endif; ?>
    </div>



    <div class="text-center">
        <a href="<?php echo e(action('Admin\MainController@show')); ?>"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> 管理者ページに戻る</a>
    </div>

</div>>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/admin/user.blade.php ENDPATH**/ ?>