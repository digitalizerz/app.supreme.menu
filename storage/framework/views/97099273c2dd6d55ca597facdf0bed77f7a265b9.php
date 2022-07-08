<!-- STRIPE -->
<?php if(config('settings.stripe_key')&&config('settings.enable_stripe')): ?>
<div id="stripe-payment-form" style="display: none">
<form action="/charge" method="post" >

    <div style="width: 100%;" class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
        <input name="name" id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__( 'Name on card' )); ?>" value="<?php echo e(auth()->user()?auth()->user()->name:""); ?>" required>
        <?php if($errors->has('name')): ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($errors->first('name')); ?></strong>
            </span>
        <?php endif; ?>
    </div>

    <div class="form">
        <div style="width: 100%;" #stripecardelement  id="card-element" class="form-control">

        <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <br />
        <div class="" id="card-errors" role="alert">

        </div>
    </div>
</form>
</div>
<?php endif; ?>
<?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/cart/luxe/payments/stripe.blade.php ENDPATH**/ ?>