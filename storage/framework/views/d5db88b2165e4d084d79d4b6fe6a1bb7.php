<header>
    <div class="header-fixed">
        <div class="row header-body">
            <div class="col-6 col-md-2 header-logo p-4">
                <a href="<?php echo e(route('frontend.home')); ?>">
                    <img src="<?php echo e(asset('storage/'.config('settings.site_logo'))); ?>" alt="Logo" />
                </a>
            </div>
            <div class="col-md-9 col-lg-8 header-nav">
                <nav class="navbar navbar-expand-lg navbar-light h-100 w-100 p-0">
                    <div class="collapse navbar-collapse d-lg-flex justify-content-md-center h-100 p-0" id="navbarNav">
                        <ul class="navbar-nav h-100">
                            <li class="nav-item main-nav">
                                <a class="nav-link nav-link-names" href="<?php echo e(route('frontend.home')); ?>">Home</a>
                            </li>
                            <li class="nav-item main-nav">
                                <div class="d-flex justify-content-between h-md-100">
                                     <a class="nav-link nav-link-names" href="<?php echo e(route('frontend.product.center')); ?>">Products</a>
                                 
                                    <button class="btn btn-outline-none d-flex d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavSub" aria-controls="navbarNavSub" aria-expanded="false" aria-label="Toggle navigation navbarNavSub">
                                        <i class="fa-solid fa-caret-down fs-4 fa-caret-down-navbar" style="color: #fff; margin-top: -4px;"></i>
                                    </button>
                                </div>

                                <div class="submenu navbar-nav " id="navbarNavSub">
                                    <ul>
                                        <?php $__currentLoopData = $product_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="nav-item d-flex flex-column first-sub-item" id="first-sub-item">
                                            <div class="d-flex justify-content-between">
                                                <a class="nav-link" href="<?php echo e(route('frontend.products',$product->slug)); ?>"><?php echo e($product->name); ?></a>
                                                <?php if(count($product->children)>0): ?>
                                                 <button class="btn btn-outline-none d-flex d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavSubChild3" aria-controls="navbarNavSubChild3" aria-expanded="false" aria-label="Toggle navigation navbarNavSubChild3" >
                                                    <i class="fa-solid fa-caret-down fs-6 fa-caret-down-navbar" style="color: #fff;"></i>
                                                </button>
                                            </div>
                                            
                                            <div class="submenu-second navbar-nav" id="navbarNavSubChild3" style="background: #222;">
                                                <ul>
                                                    <?php $__currentLoopData = $product->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="nav-item sec-nav-item"><a class="nav-link" href="<?php echo e(route('frontend.products',$child->slug)); ?>"><?php echo e($child->name); ?></a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                            <?php endif; ?>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </li>
                            <!--<li class="nav-item main-nav">-->
                            <!--    <a class="nav-link nav-link-names" href="<?php echo e(route('frontend.about')); ?>">About Us</a>-->
                            <!--</li>-->
                            <li class="nav-item main-nav">
                                
                                 <div class="d-flex justify-content-between h-md-100">
                                     <a class="nav-link nav-link-names" href="<?php echo e(route('frontend.about')); ?>">About Us</a>
                                 
                                    <button class="btn btn-outline-none d-flex d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavSubAbout" aria-controls="navbarNavSubAbout" aria-expanded="false" aria-label="Toggle navigation navbarNavSubAbout">
                                        <i class="fa-solid fa-caret-down fs-4 fa-caret-down-navbar" style="color: #fff;"></i>
                                    </button>
                                </div>
                                <div class="submenu navbar-nav" id="navbarNavSubAbout">
                                    <ul>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(route('frontend.about')); ?>">Company Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo e(route('frontend.news','industry-news')); ?>">Service</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo e(route('frontend.news','certification')); ?>">Certification</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item main-nav">
                                <a class="nav-link nav-link-names" href="<?php echo e(route('frontend.service')); ?>">Download</a>
                            </li>
                            <li class="nav-item main-nav">
                                
                                 <div class="d-flex justify-content-between h-md-100">
                                     <a class="nav-link nav-link-names" href="<?php echo e(route('frontend.allNews')); ?>">News</a>
                                 
                                    <button class="btn btn-outline-none d-flex d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavSub2" aria-controls="navbarNavSub2" aria-expanded="false" aria-label="Toggle navigation navbarNavSub2">
                                        <i class="fa-solid fa-caret-down fs-4 fa-caret-down-navbar" style="color: #fff;"></i>
                                    </button>
                                </div>
                                <!-- <div class="submenu navbar-nav" id="navbarNavSub2">
                                    <ul>
                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo e(route('frontend.news','exhibition-news')); ?>">Industry News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="<?php echo e(route('frontend.news','company-news')); ?>">Company News</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </li>
                            <li class="nav-item main-nav">
                                <a class="nav-link nav-link-names" href="<?php echo e(route('frontend.ourProject')); ?>">Our Projects</a>
                            </li>
                            <li class="nav-item main-nav">
                                <a class="nav-link nav-link-names" href="#">FAQs</a>
                            </li>
                            <li class="nav-item main-nav">
                                <a class="nav-link nav-link-names" href="<?php echo e(route('frontend.contact')); ?>">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-6 col-md-1 col-lg-2 d-flex justify-content-lg-center justify-content-end align-items-center gap-3">
                <div id="search-container">
                    <div class="search-btn-ctrl">
                        <div class="search-icon" id="search-icon" onclick="openSearch()">
                            <i class="fa-solid fa-magnifying-glass fs-5 searchIcon" id="searchIcon" style="color: #333;"></i>
                        </div>
                        <div class="close-search" id="close-search" onclick="closeSearch()">
                            <i class="fa-solid fa-xmark fs-5 searchCloseIcon"></i>
                        </div>
                    </div>
                    <input type="text" wire:model="filter_key" wire:keyup="filter" id="search-input" placeholder="Search...">
                    <div class="suggestion-container">
                         <?php if(count($suggestions) > 0): ?>
                            <ul class="list-group mt-2">
                                <?php $__currentLoopData = $suggestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suggestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item">
                                        <a href="<?php echo e(route('frontend.product.detail', ['slug' => $suggestion->slug])); ?>" class="text-decoration-none">
                                            <?php echo e($suggestion->name); ?>

                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php elseif($noResultsMessage): ?>
                            <div class="alert alert-info mt-2">
                                <?php echo e($noResultsMessage); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                
                <div class="d-none d-lg-flex">
                    <a href="//<?php echo e(config('settings.social_facebook')); ?>" target="_blank">
                        <i class="fa-brands fa-facebook fs-4" style="color: #333;"></i>
                    </a>
                </div>
                 <div class="d-none d-lg-flex">
                     <a href="//<?php echo e(config('settings.social_youtube')); ?>" target="_blank">
                       <i class="fa-brands fa-youtube fs-4" style="color: #333;"></i>
                    </a>
                </div>
                <div class="d-none d-lg-flex">
                     <a href="//<?php echo e(config('settings.social_instagram')); ?>" target="_blank">
                       <i class="fa-brands fa-instagram fs-4" style="color: #333;"></i>
                    </a>
                </div>
                 <div class="d-none d-lg-flex">
                     <a href="//<?php echo e(config('settings.social_linkedin')); ?>" target="_blank">
                       <i class="fab fa-linkedin fs-4" style="color: #333;"></i>
                    </a>
                </div>
                <div class="d-flex d-md-none">
                   <button class="btn btn-outline-none" id="navbarMenu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars fs-4" style="color: #333;"></i>
                   </button>
                </div>
            </div>
        </div>
    </div>
    <div class="sidenav-contact">
        <ul>
            <li class="contact-info-container">
                <i class="fa-solid fa-envelope contact-info-icon"></i>
                <div class="contact-info-overlay">
                    <a href="mailto:<?php echo e(config('settings.default_email_address')); ?>" style="text-decoration: none; color: #fff;"><?php echo e(config('settings.default_email_address')); ?></a>
                </div>
            </li>
            <li class="contact-info-container">
                <i class="fa-solid fa-phone contact-info-icon"></i>
                <div class="contact-info-overlay"><?php echo e(config('settings.phone')); ?></div>
            </li>
            <li class="contact-info-container">
                <i class="fa-solid fa-mobile-screen contact-info-icon"></i>
                <div class="contact-info-overlay" style="margin-right: -3px;"><?php echo e(config('settings.mobile')); ?></div>
            </li>
            <li class="custom-fs-container"  id="backToTopBtn">
                <i class="fa-solid fa-forward-step custom-fs-icon"></i>
            </li>
        </ul>
    </div>
</header><?php /**PATH C:\xampp\htdocs\merlintechbd\merlin_app\resources\views/livewire/inc/top-menu.blade.php ENDPATH**/ ?>