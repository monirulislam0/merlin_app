<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <main>
        <div>
            <img src="<?php echo e(asset('storage/'.$banner->image)); ?>" alt="..." class="img-fluid">
        </div>

        <div class="container innerpage-container py-5 news-section">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('frontend.home')); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
            </nav>
            <div class="row g-3">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 bg-white">
                    <div class="row">
                        <div class="col-4">
                            <div class="py-3 px-1">
                                <a href="<?php echo e(route('frontend.singleNews',['slug'=>$dt->slug])); ?>"><img src="<?php echo e(asset('storage/'.$dt->image)); ?>" alt="..." class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="py-4 px-2">
                                <div class="fw-bold py-2 mb-3">
                                    <a href="<?php echo e(route('frontend.singleNews',['slug'=>$dt->slug])); ?>" class="text-decoration-none text-dark"><?php echo e($dt->title); ?></a>
                                </div>
                                <div class="mb-2">
                                    <i class="fa-regular fa-calendar-days"></i><span class="px-2"><?php echo e($dt->published_date); ?></span>
                                </div>
                                <div class="lh-lg">
                                    <?php echo $dt->short; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\merlintechbd\merlin_app\resources\views/all-news.blade.php ENDPATH**/ ?>