    <script src="<?php echo e(asset('luxe')); ?>/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>
    <script src="<?php echo e(asset('custom')); ?>/js/select2.js"></script>
    <script src="<?php echo e(asset('vendor')); ?>/select2/select2.min.js"></script>
    <!-- cartFunctions.js and order.js was modified by @aleksiralda  using V3.1.3 -->
    <script src="<?php echo e(asset('luxe')); ?>/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('luxe')); ?>/cartFunctions.js"></script>
    <script src="<?php echo e(asset('luxe')); ?>/order.js"></script>

    <script src="<?php echo e(asset('custom')); ?>/js/js.js"></script>

    <script>
        var CASHIER_CURRENCY = "<?php echo  config('settings.cashier_currency') ?>";
        var LOCALE="<?php echo  App::getLocale() ?>";
        var IS_POS=false;
    </script>

    <?php if(isset($showGoogleTranslate)&&$showGoogleTranslate&&!$showLanguagesSelector): ?>
        <?php echo $__env->make('googletranslate::scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!-- Interface from PHP items to JS Array -->
    <?php echo $__env->make('restorants.phporderinterface', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <script src="<?php echo e(asset('luxe')); ?>/LuxeTemplate.js"></script>

<?php /**PATH /var/www/vhosts/app.supreme.menu/httpdocs/modules/LuxeTemplate/Providers/../Resources/views/templates/scripts.blade.php ENDPATH**/ ?>