<div>
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel" class="carousel carousel-multiple-card slide" data-bs-ride="carousel">
                <div class="carousel-inner carousel-inner-multiple" role="listbox">
                    <?php $sl=0 ?>
                    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $sl++ ?>
                    <div class="carousel-item <?php echo e(($sl==1) ? 'active':''); ?>">
                        <div class="col-md-3 col-12">
                            <div class="card caro-card p-3">
                                <div class="card-img">
                                    <img src="<?php echo e(asset('storage/'.$slider->image)); ?>" class="img-fluid mltpl-card-img ">
                                </div>
                                <h2 class="fs-5 fw-bold text-dark text-truncate-2 h-40 mt-3 mt-md-4 mb-2 mb-md-3 text-overflow-ctrl">
                                    <a target="_blank" href="<?php echo e($slider->redirect_url); ?>" class="text-reset text-decoration-none hover-text-primary" tabindex="0"><?php echo e($slider->title); ?></a>
                                </h2>
                                <a target="_blank" href="<?php echo e($slider->redirect_url); ?>" class="button-card">Visit</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa-solid fa-circle-chevron-left" style="font-size: 2rem; color: #000;"></i></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa-solid fa-circle-chevron-right" style="font-size: 2rem; color: #000;"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\merlintechbd\merlin_app\resources\views/livewire/inc/view-more.blade.php ENDPATH**/ ?>