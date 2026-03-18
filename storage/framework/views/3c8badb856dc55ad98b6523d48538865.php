<div>
    <title><?php echo e($pageTitle  .' | '.$pageSubTitle); ?></title>
    <?php if(isset($imageLink)): ?>
    <meta property="og:image" content="<?php echo e($imageLink); ?>">
    <?php endif; ?>
    <meta name="description" content="<?php echo e(isset($metaDescription) ? $metaDescription : ''); ?>" />
    <meta name="keywords" content="<?php echo e(isset($metaTitle) ? $metaTitle : ''); ?>" />
    <meta name="tag" content="<?php echo e(isset($metaTags) ? $metaTags : ''); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</div>
<?php /**PATH C:\xampp\htdocs\merlintechbd\merlin_app\resources\views/components/meta.blade.php ENDPATH**/ ?>