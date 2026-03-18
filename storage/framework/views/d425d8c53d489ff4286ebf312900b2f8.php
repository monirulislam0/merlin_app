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
} elseif ($_instance->childHasBeenRendered('T1HzO06')) {
    $componentId = $_instance->getRenderedChildComponentId('T1HzO06');
    $componentTag = $_instance->getRenderedChildComponentTagName('T1HzO06');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('T1HzO06');
} else {
    $response = \Livewire\Livewire::mount('inc.slider', []);
    $html = $response->html();
    $_instance->logRenderedChild('T1HzO06', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
} elseif ($_instance->childHasBeenRendered('baI6kt9')) {
    $componentId = $_instance->getRenderedChildComponentId('baI6kt9');
    $componentTag = $_instance->getRenderedChildComponentTagName('baI6kt9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('baI6kt9');
} else {
    $response = \Livewire\Livewire::mount('inc.categories', []);
    $html = $response->html();
    $_instance->logRenderedChild('baI6kt9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:inc.categories>
            </div>
        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('inc.why-choose', ['pageType' => $page_type,'page_type' => $page_type])->html();
} elseif ($_instance->childHasBeenRendered('TigJXVC')) {
    $componentId = $_instance->getRenderedChildComponentId('TigJXVC');
    $componentTag = $_instance->getRenderedChildComponentTagName('TigJXVC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TigJXVC');
} else {
    $response = \Livewire\Livewire::mount('inc.why-choose', ['pageType' => $page_type,'page_type' => $page_type]);
    $html = $response->html();
    $_instance->logRenderedChild('TigJXVC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:inc.why-choose>
        <div class="details-section">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('inc.view-more', [])->html();
} elseif ($_instance->childHasBeenRendered('UA59l6o')) {
    $componentId = $_instance->getRenderedChildComponentId('UA59l6o');
    $componentTag = $_instance->getRenderedChildComponentTagName('UA59l6o');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UA59l6o');
} else {
    $response = \Livewire\Livewire::mount('inc.view-more', []);
    $html = $response->html();
    $_instance->logRenderedChild('UA59l6o', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH C:\xampp\htdocs\merlin_app\resources\views/home.blade.php ENDPATH**/ ?>