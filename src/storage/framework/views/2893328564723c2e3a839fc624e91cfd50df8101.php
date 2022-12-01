<?php $__env->startSection('title', 'Myメモ作成'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">My memo 作成</h1>

        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- NewPost Start -->
<div class="container-fluid contact position-relative px-5" style="margin-top: 15px;">

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="<?php echo e(action ('User\MainController@create')); ?>" method="POST" enctype="multipart/form-data">

                <?php if(count($errors) > 0): ?>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($e); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>

                <div class="row g-3">
                    <div class="col-sm-12">
                        <input type="text" class="form-control bg-light border-primary px-4" placeholder="名前" name="name" value="<?php echo e(old('name')); ?>" style="height: 55px;">
                    </div>

                    <div class="col-sm-12">
                        <select class="form-control bg-light border-primary px-4" id="country_id" name="country_id" value="<?php echo e(old('country_id')); ?>" placeholder="原産国" style="height: 55px;" type="text">
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>



                    <div class="col-sm-12">
                        <select class="form-control bg-light border-primary px-4" id="style_id" name="style_id" placeholder="スタイル" style="height: 55px;" type="text">
                            <?php $__currentLoopData = $styles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>


                    <div class="col-sm-6 input-group">
                        <input type="text" class="form-control bg-light border-primary px-4" placeholder="アルコール度数" name="degree" value="<?php echo e(old('degree')); ?>" style="height: 55px;">
                        <div class="input-group-append">
                            <span class="input-group-text border-primary bg-primary text-dark" id="text1b">%</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control bg-light border-primary px-4" placeholder="飲んだor買った場所" name="place" value="<?php echo e(old('place')); ?>" style="height: 55px;">
                    </div>
                    <div class="col-sm-12">
                        <textarea class="form-control bg-light border-primary px-4 py-3" rows="4" placeholder="コメント" name="coment" value="<?php echo e(old('coments')); ?>"></textarea>
                    </div>
                    <div class="col-sm-6">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-primary border-inner w-100 py-3" value="作成">
                        <?php echo e(__('作成')); ?>

                    </button>
                </div>
            </form>
        </div>

        <a href="mypage" class="text-center mt-3"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY PAGEに戻る</a>

    </div>
</div>
<!-- NewPost End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/user/create.blade.php ENDPATH**/ ?>