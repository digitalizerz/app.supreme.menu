<!-- STRIPE -->
<?php if(config('settings.stripe_key')&&config('settings.enable_stripe')): ?>
  <div class="text-center" style="display: none" id="totalSubmitStripe">
    <i id="indicatorStripe" style="display: none" class="fa fa-spinner fa-spin"></i>
    <button
        v-if="totalPrice"
        type="submit"
        id="stripeSend"
        class="button full-button d-flex align-items-center justify-content-center uppercase paymentbutton"
        onclick="document.getElementById('stripe-payment-form').submit();"
        ><?php echo e(__('Place an order')); ?></button>
  </div>
<?php endif; ?>
<?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/cart/luxe/payments/submitstripe.blade.php ENDPATH**/ ?>