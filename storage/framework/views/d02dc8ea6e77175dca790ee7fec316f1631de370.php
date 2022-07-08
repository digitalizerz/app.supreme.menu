<?php $__env->startSection('content'); ?>
<section class="relative hero-background">
  <picture data-background=true >
      <div class="opacity-mask"></div>
      <source  srcset="<?php echo e($restorant->coverm); ?>" media="(min-width: 569px)" />
      <img src='<?php echo e($restorant->coverm); ?>' />        
  </picture>
  <div class="d-flex align-items-center justify-content-center hero-title">
  <div class="hero-container text-center">
  <h5 class="mb-1"><?php echo e($restorant->name); ?></h5>
  <h1 class="mb-4"><?php echo e(__('Checkout')); ?></h1>
  <div class="inline-links justify-content-center align-items-center">
    <!-- <?php echo $__env->make('cart/luxe/herobuttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
  </div>
  </div>
  </div>
</section>
<section class="section section-place-content py-5">
  <div class="container">
    <?php if (isset($component)) { $__componentOriginalf6d1e1ab7a8df2de5d0bdc28df8775f180a35b0c = $component; } ?>
<?php $component = $__env->getContainer()->make(Mckenziearts\Notify\NotifyComponent::class, []); ?>
<?php $component->withName('notify-messages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalf6d1e1ab7a8df2de5d0bdc28df8775f180a35b0c)): ?>
<?php $component = $__componentOriginalf6d1e1ab7a8df2de5d0bdc28df8775f180a35b0c; ?>
<?php unset($__componentOriginalf6d1e1ab7a8df2de5d0bdc28df8775f180a35b0c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      <form id="order-form" role="form" method="post" action="<?php echo e(route('order.store')); ?>" autocomplete="off" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
      <div class="row justify-content-center">
        <!-- Left part -->
          <div class="col-md-7 mb-4">
            <div class="card card-checkout">
              <?php if(!config('settings.social_mode')): ?>
                <?php if(config('app.isft')&&count($timeSlots)>0): ?>
                  <!-- FOOD TIGER -->
                  <?php echo $__env->make('cart.luxe.product.foodtiger', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php elseif(config('app.isag')&&count($timeSlots)>0): ?>)
                  <!-- Agris Mode -->
                  <?php echo $__env->make('cart.luxe.product.agris', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php elseif(config('app.isqrsaas')&&count($timeSlots)>0): ?>
                  <!-- QR Saas Mode -->
                  <?php echo $__env->make('cart.luxe.product.qrsaas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
                <hr class="dashed">
                <?php if(count($timeSlots)>0): ?>
                  <!-- Payment Methods-->
                  <div class="row">
                    <div class="col-12 col-md-3">
                      <h5 class="text-muted">03</h5>
                      <h4 class="uppercase"><?php echo e(__('Payment Method')); ?></h4>
                    </div>
                    <div class="col-12 col-md-9">
                      <?php echo $__env->make('cart.luxe.paymentmethod', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                <?php endif; ?>
              <?php else: ?>
                <!-- Social MODE -->
                <?php if(count($timeSlots)>0): ?>
                  <?php echo $__env->make('cart.luxe.product.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
              <?php endif; ?>
          </div><!-- end card -->
        </div>
        <!-- Right Part -->
        <div class="col-md-5">
          <?php if(count($timeSlots)>0): ?>
              <!-- Payment -->
              <?php echo $__env->make('cart.luxe.payment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php else: ?>
              <!-- Closed restaurant -->
              <?php echo $__env->make('cart.luxe.closed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endif; ?>
        </div>
          <div class="my-3 text-center">
            <h6 class="text-center text-muted"><small><?php echo e(__('Powered by')); ?> <a href="/" target="_blank" rel="noopener noreferrer"><?php echo e(config('global.site_name')); ?></a> – &copy; <?php echo e(date('Y')); ?></small></h6>
          </div>
      </div><!-- end row -->
    </div><!-- end container -->
    <?php echo $__env->make('cart.luxe.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

  <script async defer src= "https://maps.googleapis.com/maps/api/js?key=<?php echo config('settings.google_maps_api_key'); ?>&callback=initAddressMap"></script>
  <!-- Stripe -->
  <script src="https://js.stripe.com/v3/"></script>
  <script>
    "use strict";
    var RESTORANT = <?php echo json_encode($restorant) ?>;
    var STRIPE_KEY="<?php echo e(config('settings.stripe_key')); ?>";
    var ENABLE_STRIPE="<?php echo e(config('settings.enable_stripe')); ?>";
    var SYSTEM_IS_QR="<?php echo e(config('app.isqrexact')); ?>";
    var SYSTEM_IS_WP="<?php echo e(config('app.iswp')); ?>";
    var initialOrderType = 'delivery';
    if(RESTORANT.can_deliver == 1 && RESTORANT.can_pickup == 0){
        initialOrderType = 'delivery';
    }else if(RESTORANT.can_deliver == 0 && RESTORANT.can_pickup == 1){
        initialOrderType = 'pickup';
    }
  </script>
  <script src="<?php echo e(asset('custom')); ?>/js/checkout.js"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.front-luxe', ['class' => ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/cart-luxe.blade.php ENDPATH**/ ?>