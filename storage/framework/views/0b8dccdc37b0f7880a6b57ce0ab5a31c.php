<?php if($page_type=='home'): ?>
    <div>
        <?php if(!empty($data)): ?>
            <style>
                #background_image{
                    background-image: url("<?php echo e(asset('storage/'.$data['bg_image'])); ?>");
                }
            </style>
            <div class="choose-us" id="background_image">
                <div >
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column">
                            <div class="choose-us-title" style="text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);">
                                WHY CHOOSE US
                            </div>
                            <div class="choose-body">
                                <ul>
                                    <?php $__currentLoopData = $data['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="px-3">
                                            <div class="row">
                                                <div class="col-2" style="display: grid; place-items: center">
                                                    <div class="choose-images">
                                                        <img src="<?php echo e(asset('storage/'.$dt->icon)); ?>" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                                <div class="col-1 d-block d-md-none"></div>
                                                <div class="col-9 col-md-10" style="display: flex; align-items: center">
                                                    <div class="choose-desc">
                                                        <span style="color:#ffffff; text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);"><?php echo e($dt->title); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="circle-bg">
                                <div>
                                    <a hre="#" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="fa-solid fa-circle-play circle-icon"></i></a>
                                </div>
                                <div class="dot dots" style="visibility: hidden;"></div>
                                <div class="dot-two dots" data-bs-toggle="modal" data-bs-target="#videoModal"></div>
                                <div class="dot-three dots" data-bs-toggle="modal" data-bs-target="#videoModal"></div>
                                <div class="dot-four dots" data-bs-toggle="modal" data-bs-target="#videoModal"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--  Modal -->
            <div class="modal fade modal-fullscreen" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen"  >
                    <div class="modal-content text-white " style="background: transparent !important; display: grid; place-items: center;">
                        
                        <div class="modal-body p-0 m-0" style="overflow: hidden !important;">
                            <button type="button" id="aboutus-btn" class="btn modal-close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-circle-xmark fs-2 text-white"></i></button>
                            <video id="aboutus-video" width="100%" autoplay muted loop>
                                <source src="<?php echo e(asset('storage/'.$data['video_url'])); ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php else: ?>
    <?php if(!empty($data)): ?>
        <div class="d-flex flex-column text-white py-5">
            <div class="choose-us-title mb-4">
                WHY CHOOSE US
            </div>
            <div class="container px-md-0 px-5">
                <div class="row gap-2">
                    <?php $__currentLoopData = $data['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md choose-us-card">
                            <div class="d-flex justify-content-center px-3 py-4">
                                <img src="<?php echo e(asset('storage/'.$dt->icon)); ?>" class="d-block w-50" alt="<?php echo e($dt->title); ?>">
                            </div>
                            <div>
                                <?php echo e($dt->title); ?>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\merlin_app\resources\views/livewire/inc/why-choose.blade.php ENDPATH**/ ?>