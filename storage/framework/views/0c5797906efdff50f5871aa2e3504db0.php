<div class="slider-margin-ctrl">
    <div id="carouselFirstIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="none">
        <div class="carousel-indicators circle">
            <?php $sl=-1 ?>
            <?php $__currentLoopData = $top_sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $sl++ ?>
            <button type="button" data-bs-target="#carouselFirstIndicators" data-bs-slide-to="<?php echo e($sl); ?>" class="<?php echo e(($sl==0)? 'active':''); ?>" aria-current="<?php echo e(($sl==0)? 'true':''); ?>" aria-label="<?php echo e($slider->title); ?>"></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="carousel-inner">
            <?php $sl=0 ?>
            <?php $__currentLoopData = $top_sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $sl++ ?>
            <div class="carousel-item <?php echo e(($sl==1)?'active':''); ?>">
                <a href="<?php echo e($slider->redirect_url); ?>"><img src="<?php echo e(asset('storage/'.$slider->image)); ?>" class="d-block w-100" alt="<?php echo e($slider->title); ?>"></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <!-- <div>
        <div class="second-carousel-container">
            <div id="carouselSecondIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="none">
                <div class="carousel-indicators square">
                    <?php $sl=0 ?>
                    <?php $__currentLoopData = $down_sliders->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sliders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" data-bs-target="#carouselSecondIndicators" data-bs-slide-to="<?php echo e($sl); ?>" class="<?php echo e(($sl==0) ? 'active':''); ?>" aria-current="<?php echo e(($sl==0)?'true':''); ?>" aria-label=""></button>
                    <?php $sl++ ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="carousel-inner slider-center">
                    <?php $sl=0 ?>
                    <?php $__currentLoopData = $down_sliders->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sliders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php echo e(($sl==0) ? 'active':''); ?> ">
                        <div class="d-flex gap-2 mb-5">
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <a href="<?php echo e($slider->redirect_url); ?>"><img src="<?php echo e(asset('storage/'.$slider->image)); ?>" class="d-block w-100" alt="<?php echo e($slider->title); ?>"></a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                     <?php $sl++ ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div> -->
</div>
<?php /**PATH C:\xampp\htdocs\merlintechbd\merlin_app\resources\views/livewire/inc/slider.blade.php ENDPATH**/ ?>