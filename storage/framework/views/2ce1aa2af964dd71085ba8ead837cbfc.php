<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
    <main style="background-color: #fff;">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('inc.slider', [])->html();
} elseif ($_instance->childHasBeenRendered('V2k0ZVi')) {
    $componentId = $_instance->getRenderedChildComponentId('V2k0ZVi');
    $componentTag = $_instance->getRenderedChildComponentTagName('V2k0ZVi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('V2k0ZVi');
} else {
    $response = \Livewire\Livewire::mount('inc.slider', []);
    $html = $response->html();
    $_instance->logRenderedChild('V2k0ZVi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:inc.slider>
        <div class="main-body">
            
            <div>
                <div class="text-center fs-2 mb-3 fw-bold" style="text-shadow: 3px 3px 5px rgba(230, 230, 230, 0.7); color: #6fa143;">
                    PRODUCT CATEGORY
                </div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('inc.categories', [])->html();
} elseif ($_instance->childHasBeenRendered('bQ57TAm')) {
    $componentId = $_instance->getRenderedChildComponentId('bQ57TAm');
    $componentTag = $_instance->getRenderedChildComponentTagName('bQ57TAm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bQ57TAm');
} else {
    $response = \Livewire\Livewire::mount('inc.categories', []);
    $html = $response->html();
    $_instance->logRenderedChild('bQ57TAm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:inc.categories>
            </div>
        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('inc.why-choose', ['pageType' => $page_type,'page_type' => $page_type])->html();
} elseif ($_instance->childHasBeenRendered('xfR9BsS')) {
    $componentId = $_instance->getRenderedChildComponentId('xfR9BsS');
    $componentTag = $_instance->getRenderedChildComponentTagName('xfR9BsS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xfR9BsS');
} else {
    $response = \Livewire\Livewire::mount('inc.why-choose', ['pageType' => $page_type,'page_type' => $page_type]);
    $html = $response->html();
    $_instance->logRenderedChild('xfR9BsS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:inc.why-choose>
        <div class="details-section">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('inc.view-more', [])->html();
} elseif ($_instance->childHasBeenRendered('enG8o2s')) {
    $componentId = $_instance->getRenderedChildComponentId('enG8o2s');
    $componentTag = $_instance->getRenderedChildComponentTagName('enG8o2s');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('enG8o2s');
} else {
    $response = \Livewire\Livewire::mount('inc.view-more', []);
    $html = $response->html();
    $_instance->logRenderedChild('enG8o2s', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:inc.view-more>
        </div>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\merlintechbd\merlin_app\resources\views/home.blade.php ENDPATH**/ ?>