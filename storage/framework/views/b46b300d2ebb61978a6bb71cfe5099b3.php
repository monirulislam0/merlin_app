<div>
    <div class="product-cat">
        <div class="row g-3 justify-content-center">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 col-lg-4 product-cat-box ">
                <div class="product-box-images">
                    <a href="<?php echo e(route('frontend.products',$category->slug)); ?>">
                        <div style="overflow: hidden;">
                            <img src="<?php echo e(asset('storage/'.$category->hover_image)); ?>" class="d-block w-100 product-images" alt="<?php echo e($category->title); ?>" style="height: 220px;" />
                        </div>
                        <div class="d-flex gap-3 justify-content-between align-items-center py-2 px-4 text-white">
                            <div class="fs-5 text-overflow-ellipsis">
                                <?php echo e($category->name); ?>

                            </div>
                            <div class="d-flex gap-2 text-nowrap">
                                <div>VIEW MORE</div>
                                <div>
                                    <i class="fa-solid fa-play" ></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--<div class="product-box-text">-->
                <!--    <?php echo e($category->name); ?>-->
                <!--</div>-->
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
            <!--<div class="col-4 product-cat-box " onmouseover="changeImage('<?php echo e(asset('storage/'.$category->image)); ?>')">-->
            <!--    <div class="product-box-images">-->
            <!--        <a href="<?php echo e(route('frontend.products',$category->slug)); ?>">-->
            <!--            <div>-->
            <!--                <img src="<?php echo e(asset('storage/'.$category->hover_image)); ?>" class="d-block w-100" alt="<?php echo e($category->title); ?>" />-->
            <!--            </div>-->
            <!--            <div class="d-flex justify-content-between align-items-center py-2 px-4 text-white">-->
            <!--                <div class="fs-5">-->
            <!--                    <?php echo e($category->name); ?>-->
            <!--                </div>-->
            <!--                <div class="d-flex gap-4">-->
            <!--                    <div>VIEW MORE</div>-->
            <!--                    <div>-->
            <!--                        <i class="fa-solid fa-play"></i>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </a>-->
            <!--    </div>-->
            <!--    <div class="product-box-text">-->
            <!--        <?php echo e($category->name); ?>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
        </div>
    </div>
</div>

<?php /**PATH C:\xampp\htdocs\merlintechbd\merlin_app\resources\views/livewire/inc/categories.blade.php ENDPATH**/ ?>