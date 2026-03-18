<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php if (isset($component)) { $__componentOriginal5907ff098052f208f0f60d05357c854c = $component; } ?>
<?php $component = App\View\Components\Meta::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('meta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Meta::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5907ff098052f208f0f60d05357c854c)): ?>
<?php $component = $__componentOriginal5907ff098052f208f0f60d05357c854c; ?>
<?php unset($__componentOriginal5907ff098052f208f0f60d05357c854c); ?>
<?php endif; ?>
<meta property="og:title" content="<?php echo $__env->yieldContent('og_title', 'Merlin Tech LTD.'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('og_description', ''); ?>">
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image', ''); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:type" content="product">
    <meta property="fb:app_id" content="<?php echo e(config('services.facebook.app_id')); ?>">
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('storage/'.config('settings.site_favicon'))); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="<?php echo e(asset('frontend/css/style.css')); ?>" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/39a0ca5659.js" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('frontend/js/custom.js')); ?>"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo config('settings.google_analytics'); ?>

    <?php echo config('settings.messenger_script'); ?>

    
    <?php echo config('settings.google_tag_manager'); ?>

    <?php echo config('settings.facebook_pixels'); ?>

</head>
<body>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('inc.top-menu', [])->html();
} elseif ($_instance->childHasBeenRendered('oB5Feyq')) {
    $componentId = $_instance->getRenderedChildComponentId('oB5Feyq');
    $componentTag = $_instance->getRenderedChildComponentTagName('oB5Feyq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oB5Feyq');
} else {
    $response = \Livewire\Livewire::mount('inc.top-menu', []);
    $html = $response->html();
    $_instance->logRenderedChild('oB5Feyq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:inc.top-menu>
    <?php echo e($slot); ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('inc.footer', [])->html();
} elseif ($_instance->childHasBeenRendered('MRQX7pY')) {
    $componentId = $_instance->getRenderedChildComponentId('MRQX7pY');
    $componentTag = $_instance->getRenderedChildComponentTagName('MRQX7pY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MRQX7pY');
} else {
    $response = \Livewire\Livewire::mount('inc.footer', []);
    $html = $response->html();
    $_instance->logRenderedChild('MRQX7pY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

<script>
    window.addEventListener('alert', event => {
        toastr[event.detail.type](event.detail.message,
            event.detail.title ?? ''), toastr.options = {
            "closeButton": true,
            "progressBar": true,
        }
    });

    window.addEventListener('close-modal', event => {
        $("#fileDownloadModal_"+event.detail.id).modal('hide')
    });

    $(document).ready(function(){
        $("#imageModal").modal('show');
    });
    $(document).ready(function(){
        $('#carouselFirstIndicators').carousel();
    });
    
</script>

<!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "309657499791958");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v18.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\merlin_app\resources\views/layouts/app.blade.php ENDPATH**/ ?>