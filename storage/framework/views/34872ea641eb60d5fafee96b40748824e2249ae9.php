<!-- Add Address -->
<div class="modal fade bd-example-moda" id="modal-order-new-address" z-index="9999" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-centered " role="document" id="modalDialogItem">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="mb-0"><?php echo e(__('Add New Address')); ?></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="new_address_checkout_body">
                <form role="form">
                    <?php echo csrf_field(); ?>
                    <div class="form-group" id="new_address_checkout_holder">
                        <label class="form-control-label" for="new_address_checkout"><?php echo e(__('Address')); ?></label>
                        <select class=" form-control" id="new_address_checkout">
                        </select>
                    </div>

                    <div class="form-group">
                        <div id="new_address_map" class="form-control"></div>
                    </div>

                    <div id="address-info">
                        <div class="row no-gutters">
                            <div class="col">
                                <div class="form-group<?php echo e($errors->has('address') ? ' has-danger' : ''); ?>">
                                    <input name="address" id="address" type="text" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Address')); ?>">
                                    <?php if($errors->has('address')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('address')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('address_number') ? ' has-danger' : ''); ?>">
                                    <input name="address_number" id="address_number" type="text" class="form-control<?php echo e($errors->has('address_number') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Address number')); ?>">
                                    <?php if($errors->has('address_number')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('address_number')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('number_apartment') ? ' has-danger' : ''); ?>">
                                    <input name="number_apartment" id="number_apartment" type="text" class="form-control<?php echo e($errors->has('number_apartment') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Apartment number')); ?>">
                                    <?php if($errors->has('number_apartment')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('number_apartment')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <input type="hidden" id="lat" name="lat" />

                            </div>
                            <div class="col">
                                <div class="form-group<?php echo e($errors->has('number_intercom') ? ' has-danger' : ''); ?>">
                                    <input name="number_intercom" id="number_intercom" type="text" class="form-control<?php echo e($errors->has('number_intercom') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Intercom')); ?>">
                                    <?php if($errors->has('number_intercom')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('number_intercom')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('floor') ? ' has-danger' : ''); ?>">
                                    <input name="floor" id="floor" type="text" class="form-control<?php echo e($errors->has('floor') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Floor')); ?>">
                                    <?php if($errors->has('floor')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('floor')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group<?php echo e($errors->has('entry') ? ' has-danger' : ''); ?>">
                                    <input name="entry" id="entry" type="text" class="form-control<?php echo e($errors->has('entry') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Entry number')); ?>">
                                    <?php if($errors->has('entry')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('entry')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <input type="hidden" id="lng" name="lng" />
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col"><button type="button" class="btn mb-0 bg-transparent rounded-sm d-flex justify-content-center align-items-center border w-100 bg-transparent text-center text-muted text-sm " data-dismiss="modal" aria-label="Close"><?php echo e(__('Cancel')); ?></button></div>
                        <div class="col"><button iid="submitNewAddress" type="button" class="btn w-100 d-flex justify-content-center align-items-center rounded-sm btn-outline-primary text-sm"><?php echo e(__('Save')); ?></button></div>
                    </div>
                </form>
            </div>            
        </div>
    </div>
</div>
<!-- Add Coupon -->
<div class="modal fade bd-example-moda" id="applyCoupon" z-index="9999" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal modal-dialog-centered " role="document" id="modalDialogItem">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="mb-0"><?php echo e(__('Apply Coupon')); ?></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <input  id="coupon_code" name="coupon_code" type="text" class="form-control form-control-alternative mb-4" placeholder="<?php echo e(__('Discount coupon')); ?>">
                <div class="row no-gutters">
                    <div class="col"><button type="button" class="btn mb-0 bg-transparent rounded-sm d-flex justify-content-center align-items-center border w-100 bg-transparent text-center text-muted text-sm " data-dismiss="modal" aria-label="Close"><?php echo e(__('Cancel')); ?></button></div>
                    <div class="col"><button id="promo_code_btn" type="button" class="btn w-100 d-flex justify-content-center align-items-center rounded-sm btn-outline-primary text-sm"><?php echo e(__('Apply')); ?></button></div>
                </div>
                <span><i id="promo_code_succ" class="ni ni-check-bold text-success"></i></span>
                <span><i id="promo_code_war" class="ni ni-fat-remove text-danger"></i></span>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/cart/luxe/modals.blade.php ENDPATH**/ ?>