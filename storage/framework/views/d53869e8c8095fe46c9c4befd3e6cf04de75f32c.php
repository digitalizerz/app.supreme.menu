<?php if(!config('settings.hide_cod')): ?>
    <div class="text-center" id="totalSubmitCOD"  style="display: <?php echo e(config('settings.default_payment')=="cod"&&!config('settings.hide_cod')?"block":"none"); ?>;" >
        <button v-if="totalPrice" type="button" class='button full-button d-flex align-items-center justify-content-center uppercase' onclick="document.getElementById('order-form').submit();"><?php echo e(__('Place order')); ?></button>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/cart/luxe/payments/cod.blade.php ENDPATH**/ ?>