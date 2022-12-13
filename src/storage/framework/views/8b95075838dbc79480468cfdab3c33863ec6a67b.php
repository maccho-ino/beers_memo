<?php $__env->startSection('title', 'Myメモ編集'); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5 mb-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-uppercase text-white">My memo 編集</h1>
            <!-- <a href="">Top</a> -->
            <!-- <i class="far fa-square text-primary px-2"></i> -->
            <!-- <p class="text-primary">メンバー登録</p> -->
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- NewPost Start -->
<div class="container-fluid contact position-relative px-5" style="margin-top: 15px;">
    <!-- <div class="container"> -->
    <!-- <div class="row g-5 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-geo-alt fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Our Office</h6>
                        <span>123 Street, New York, USA</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-envelope-open fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Email Us</h6>
                        <span>info@example.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-phone-vibrate fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Call Us</h6>
                        <span>+012 345 6789</span>
                    </div>
                </div>
            </div> -->
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="<?php echo e(action ('User\MainController@update')); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo e($mymemo_form->id); ?>">
                <?php if(count($errors) > 0): ?>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($e); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <?php endif; ?>

                <div class="row g-3">
                    <div class="col-sm-12">
                        <input type="text" class="form-control bg-light border-primary px-4" placeholder="名前" name="name" value="<?php echo e($mymemo_form->name); ?>" style="height: 55px;">
                    </div>
                    <div class="col-sm-12">
                        <!-- <input type="text" class="form-control bg-light border-primary px-4" placeholder="原産国" name="country" value="<?php echo e($mymemo_form->country->name); ?>" style="height: 55px;"> -->
                        <select class="form-control bg-light border-primary px-4" id="country_id" name="country_id" value="<?php echo e($mymemo_form->country->name); ?>" placeholder="原産国" style="height: 55px;" type="text">
                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($id); ?>" <?php if($mymemo_form->country_id == $id): ?> selected <?php endif; ?>><?php echo e($name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>


                    <div class="col-sm-12">
                        <select class="form-control bg-light border-primary px-4" id="style_id" name="style_id" placeholder="スタイル" style="height: 55px;" type="text">
                            <?php $__currentLoopData = $styles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($id); ?>" <?php if($mymemo_form->style_id == $id): ?> selected <?php endif; ?>><?php echo e($name); ?>

                                <?php if($mymemo_form->style_id != null): ?>
                                <?php echo e($name); ?>

                                <?php endif; ?>
                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-sm-12 input-group">
                        <input type="text" class="form-control bg-light border-primary px-4" placeholder="アルコール度数" name="degree" value="<?php echo e($mymemo_form->degree); ?>" style="height: 55px;">
                        <div class="input-group-append">
                            <span class="input-group-text border-primary bg-primary text-dark" id="text1b">%</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" class="form-control bg-light border-primary px-4" placeholder="飲んだor買った場所" name="place" value="<?php echo e($mymemo_form->place); ?>" style="height: 55px;">
                    </div>
                    <div class="col-sm-12">
                        <textarea class="form-control bg-light border-primary px-4 py-3" rows="4" placeholder="コメント" name="coment" value="<?php echo e($mymemo_form->coment); ?>"><?php echo e($mymemo_form->coment); ?></textarea>
                    </div>
                    <div class="col-sm-6">
                        <input type="file" class="form-control-file" name="image" value="<?php echo e($mymemo_form->image_path); ?>">
                    </div>
                    <?php echo csrf_field(); ?>
                    <input type="submit" class="btn btn-primary border-inner w-100 py-3" value="更新">
                    <!-- <a href="<?php echo e(action('User\MainController@delete', $mymemo_form->id)); ?>"><button type="button" class="center-block btn btn-outline-primary mt-3"><i class="fa fa-trash"></i> MY MEMO 削除</button></a> -->
                </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>

<div class="text-center">
    <a href="<?php echo e(action('User\MainController@index')); ?>"><i class="fa fa-arrow-circle-left text-primary mt-5" aria-hidden="true"></i> MY MEMO 一覧に戻る</a>
</div>
<!-- NewPost End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/beers_memo/resources/views/user/edit.blade.php ENDPATH**/ ?>