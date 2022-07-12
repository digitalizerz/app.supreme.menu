<div class="card">
    <div class="card-header text-center">
        <h4 class="uppercase"><?php echo e(__('Order Summary')); ?></h4>
    </div>
    <div class="card-body">
        <?php echo $__env->make('cart.luxe.items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <hr class="dashed">

        <!-- Price overview -->
        <div id="totalPrices" v-cloak>
            <div class="d-flex justify-content-center align-items-center" v-if="totalPrice==0"><?php echo e(__('Cart is empty')); ?>!</div>
            <ul class="clearfix">
                <li v-if="totalPrice"><?php echo e(__('Subtotal')); ?>:<span class="text-dark">{{ totalPriceFormat }}</span></li>
                <li v-if="deduct"><?php echo e(__('Coupon discount')); ?>:<span v-if="deduct" class="ammount">{{ deductFormat }}</span></li>
                <?php if(config('app.isft')||config('settings.is_whatsapp_ordering_mode')|| in_array("poscloud", config('global.modules',[])) || in_array("deliveryqr", config('global.modules',[])) ): ?>
                <li v-if="totalPrice&&deliveryPrice>0"><?php echo e(__('Delivery')); ?>:<span>{{ deliveryPriceFormated }}</span></li>
                <?php endif; ?>
                <li v-if="totalPrice" class="total text-dark"><?php echo e(__('Total')); ?>:<span class="text-lg text-dark">{{ withDeliveryFormat }}</span></li>
                <input v-if="totalPrice" type="hidden" id="tootalPricewithDeliveryRaw" :value="withDelivery" />
            </ul>
        </div>
        <!-- End price overview -->
        <?php if(in_array("coupons", config('global.modules',[]))): ?>
            <!-- Coupons -->
            <?php echo $__env->make('cart.luxe.coupons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- End coupons -->
        <?php endif; ?>
        <div class="terms-checkbox rounded-sm d-flex justify-content-center align-items-center p-3 mb-3 border text-center text-muted text-sm">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="privacypolicy" checked type="checkbox">
                <label class="custom-control-label text-sm" for="privacypolicy">
                    &nbsp;&nbsp;<?php echo e(__('I agree to the')); ?>

                    <a href="<?php echo e(config('settings.link_to_ts')); ?>" target="_blank" style="text-decoration: underline;"><?php echo e(__('Terms of Service')); ?></a>
                </label>
            </div>
        </div>
        
        

        <!-- Payment Actions -->
        <?php if(!config('settings.social_mode')): ?>

            <!-- COD -->
            <?php echo $__env->make('cart.luxe.payments.cod', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Extra Payments ( Via module ) -->
            <?php $__currentLoopData = $extraPayments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extraPayment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make($extraPayment.'::button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </form>

            <!-- Stripe -->
            <?php echo $__env->make('cart.luxe.payments.submitstripe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            

        <?php elseif(config('settings.is_whatsapp_ordering_mode')): ?>
            <?php echo $__env->make('cart.luxe.payments.whatsapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php elseif(config('settings.is_facebook_ordering_mode')): ?>
            <?php echo $__env->make('cart.luxe.payments.facebook', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <!-- END Payment Actions -->
    </div>

<?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/cart/luxe/payment.blade.php ENDPATH**/ ?>