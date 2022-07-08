<!--
=========================================================
* Luxe Checkout Theme- v0.2
=========================================================
Author: Aleks Iralda
Author Site: https://www.twitter.com/aleksiralda
Theme: Luxe Theme
Theme site: https://aleksiralda.github.io/luxe-theme/
Support: https://www.reddit.com/user/aleksiralda

=========================================================
 -->
<!DOCTYPE html>
<html lang="<?php echo  App::getLocale() ?>">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo e($restorant->description); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($restorant->name); ?></title>
    
    <meta property="og:image" content="<?php echo e($restorant->logom); ?>">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="590">
    <meta property="og:image:height" content="400">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <?php echo $__env->yieldContent('extrameta'); ?>
    <?php if(\Akaunting\Module\Facade::has('googleanalytics')): ?>
        <?php echo $__env->make('googleanalytics::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <?php endif; ?>

    <?php echo $__env->make('googletagmanager::head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('head'); ?>
    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>
    <?php echo notifyCss(); ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap"> 
    <link rel="stylesheet" href="<?php echo e(asset('custom')); ?>/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('custom')); ?>/css/custom.css">
    <link rel="stylesheet" href="<?php echo e(asset('luxe')); ?>/bootstrap_customized.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('luxe')); ?>/main.css">
    
    <?php echo $__env->make('layouts.rtl', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    <!-- Custom CSS defined by admin -->
    <?php if(\Request::route()->getName() != "vendor"): ?>
    <link type="text/css" href="<?php echo e(asset('byadmin')); ?>/front.css" rel="stylesheet">
    <?php else: ?>
    <link type="text/css" href="<?php echo e(asset('byadmin')); ?>/frontmenu.css" rel="stylesheet">
    <?php endif; ?>
   <script src="<?php echo e(asset('vendor')); ?>/vue/vue.js"></script>
   <script src="<?php echo e(asset('vendor')); ?>/axios/axios.min.js"></script>

</head>

<body class="checkout">
    <?php echo $__env->make('googletagmanager::body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if(auth()->guard()->check()): ?>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    <?php endif; ?>

    <!-- Navbar -->
    <?php echo $__env->make('layouts.luxe.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- End Navbar -->
    <div class="wrapper">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.luxe.cartSideMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(request()->get('location') ): ?>
            <?php echo $__env->make('layouts.luxe.modallocation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>

    <script src="<?php echo e(asset('luxe')); ?>/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>
    <script src="<?php echo e(asset('vendor')); ?>/select2/select2.min.js"></script>
    <script src="<?php echo e(asset('luxe')); ?>/select2.js"></script>

    <script src="<?php echo e(asset('luxe')); ?>/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('luxe')); ?>/cartFunctions.js"></script>
    <script src="<?php echo e(asset('custom')); ?>/js/cartSideMenu.js"></script>
    <script src="<?php echo e(asset('custom')); ?>/js/notify.min.js"></script>

    <!-- Add to Cart   -->
    <script>
        var LOCALE="<?php echo  App::getLocale() ?>";
        var CASHIER_CURRENCY = "<?php echo  config('settings.cashier_currency') ?>";
        var USER_ID = '<?php echo e(auth()->user()&&auth()->user()?auth()->user()->id:""); ?>';
        var PUSHER_APP_KEY = "<?php echo e(config('broadcasting.connections.pusher.key')); ?>";
        var PUSHER_APP_CLUSTER = "<?php echo e(config('broadcasting.connections.pusher.options.cluster')); ?>";
    </script>

    <script src="<?php echo e(asset('luxe')); ?>/js.js"></script>


     <!-- Google Map -->
     <script async defer src="https://maps.googleapis.com/maps/api/js?libraries=geometry,drawing&key=<?php echo config('settings.google_maps_api_key'); ?>&libraries=places&callback=js.initializeGoogle"></script>

    <?php if(strlen( config('broadcasting.connections.pusher.app_id'))>2): ?>
        <!-- Pusher -->
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        <script src="<?php echo e(asset('custom')); ?>/js/pusher.js"></script>
    <?php endif; ?>
    <?php echo $__env->yieldContent('js'); ?>

    <?php echo notifyJs(); ?>
    <?php if(\Request::route()->getName() != "vendor"): ?>
        <?php echo file_get_contents(base_path('public/byadmin/front.js')) ?>
    <?php else: ?>
        <?php echo file_get_contents(base_path('public/byadmin/frontmenu.js')) ?>
    <?php endif; ?>

    <script>
        window.translations = <?php echo Cache::get('translations'.App::getLocale()); ?>;
    </script>

    <script>
        //VUE COMPLETE ORDER TOTAL PRICE
    total = new Vue({
        el: '#totalSubmit',
        data: {
            totalPrice: 0
        }
    })
    </script>

</body>

</html>
<?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/layouts/front-luxe.blade.php ENDPATH**/ ?>