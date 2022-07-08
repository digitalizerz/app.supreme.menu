<!-- QRSAAS -->
<!-- DINE IN OR TAKEAWAY -->
<?php if(config('settings.enable_pickup')): ?>
  <div class="row">
    <div class="col-12 col-md-3">
      <h5 class="text-muted">01</h5>
      <h4 class="uppercase"><?php echo e(__('Service Type')); ?></h4>
    </div>
    <div class="col-12 col-md-9">
      <!-- We have POS in QR -->
      <?php if(in_array("poscloud", config('global.modules',[])) || in_array("deliveryqr", config('global.modules',[])) ): ?>
        <?php echo $__env->make('cart.luxe.localorder.dineiintakeawaydeliver', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
        <?php echo $__env->make('cart.luxe.localorder.dineiintakeaway', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
    </div>
  </div>
  <hr class="dashed">
  <div class="row">
    <div class="col-12 col-md-3">
      <h5 class="text-muted">02</h5>
      <h4 class="uppercase"><?php echo e(__('Order Details')); ?></h4>
    </div>
    <div class="col-12 col-md-9">
      <!-- Name -->
      <div id="clientBox"  style="display: none">
      <?php echo $__env->make('cart.luxe.newclient', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <!-- Local Order Phone -->
      <?php echo $__env->make('cart.luxe.localorder.phone', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- LOCAL ORDERING -->
      <?php echo $__env->make('cart.luxe.localorder.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Takeaway time slot -->
      <div class="takeaway_picker" style="display: none">
          <?php echo $__env->make('cart.luxe.time', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <!-- Delivery adress -->
      <?php if(in_array("poscloud", config('global.modules',[])) || in_array("deliveryqr", config('global.modules',[])) ): ?>
        <div class="qraddressBox" style="display: none">
        <?php echo $__env->make('cart.luxe.newaddress', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      <?php endif; ?>
      <!-- Custom Fields -->
      <?php echo $__env->make('cart.luxe.customfields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Comment -->
      <?php echo $__env->make('cart.luxe.comment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
<?php else: ?>
<!-- Simple QR -->
  <div class="row">
    <div class="col-12 col-md-3">
      <h5 class="text-muted">01</h5>
      <h4 class="uppercase"><?php echo e(__('Order Details')); ?></h4>
    </div>
    <div class="col-12 col-md-9">
      <!-- LOCAL ORDERING -->
      <?php echo $__env->make('cart.luxe.localorder.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Custom Fields -->
      <?php echo $__env->make('cart.luxe.customfields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Comment -->
      <?php echo $__env->make('cart.luxe.comment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
<?php endif; ?><?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/cart/luxe/product/qrsaas.blade.php ENDPATH**/ ?>