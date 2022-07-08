
<!-- head -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo e($restorant->description); ?>">
    <meta name="author" content="Aleks Iralda - @aleksiralda">    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($restorant->name); ?></title>

    <meta property="og:image" content="<?php echo e($restorant->logom); ?>">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="590">
    <meta property="og:image:height" content="400">
    <meta property="og:title"  name="og:title" content="<?php echo e($restorant->name); ?>">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff"  >

    <link rel="icon" type="image/png" href="<?php echo e(asset('argonfront')); ?>/img/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('argonfront')); ?>/img/apple-icon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

    <?php echo $__env->make('googletagmanager::head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('head'); ?>
    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>
    <?php echo notifyCss(); ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap"> 
    <link rel="stylesheet" href="<?php echo e(asset('custom')); ?>/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('luxe')); ?>/bootstrap_customized.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('luxe')); ?>/main.css">
    
    <?php if(isset($showGoogleTranslate)&&$showGoogleTranslate&&!$showLanguagesSelector): ?>
    <link rel="stylesheet" href="<?php echo e(asset('custom')); ?>/css/gt.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('byadmin')); ?>/front.css">

    <script src="<?php echo e(asset('vendor')); ?>/vue/vue.js"></script>
    <script src="<?php echo e(asset('vendor')); ?>/axios/axios.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php if(config('settings.google_analytics')): ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo config('settings.google_analytics'); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '<?php echo config('settings.google_analytics'); ?>');
        </script>
    <?php endif; ?>
</head><?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\modules\LuxeTemplate\Providers/../Resources/views/templates/head.blade.php ENDPATH**/ ?>