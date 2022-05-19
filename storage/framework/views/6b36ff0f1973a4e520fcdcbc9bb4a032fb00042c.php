<!DOCTYPE html>
<html>
    <?php echo $__env->make('luxe-template::templates.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body data-spy="scroll" data-target="#secondary_nav" data-offset="75">
        <?php function clean($string) {
            $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
            return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
            }
        ?>
        <div id='wrapper'>
            <?php echo $__env->make('luxe-template::templates.availability', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('luxe-template::templates.mobile-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php if(config('app.isft')): ?>
            <?php echo $__env->make('luxe-template::templates.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <?php echo $__env->make('luxe-template::templates.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('luxe-template::templates.call_waiter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('luxe-template::templates.place-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('luxe-template::templates.place-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div id="toTop"></div><!-- Back to top button --> 
        <?php echo $__env->make('luxe-template::templates.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH /var/www/vhosts/app.supreme.menu/httpdocs/modules/LuxeTemplate/Providers/../Resources/views/show.blade.php ENDPATH**/ ?>