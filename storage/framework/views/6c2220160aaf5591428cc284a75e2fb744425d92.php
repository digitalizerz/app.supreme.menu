
<div class="modal fade bd-example-modal-sm" id="modal-form" z-index="9999" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered " role="document">
        <form role="form" method="post" action="<?php echo e(route('call.waiter')); ?>">
            <?php echo csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="mb-0"><?php echo e(__('Call Waiter')); ?></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center py-4">
                    <?php echo $__env->make('partials.fields',$fields, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="modal-footer">
                    <div class="footer-area">
                        <div class="quantity-btn btn-block">
                            <div>
                                <button class="btn btn-block justify-content-center" type="submit"><?php echo e(__('Call Now')); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div><?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\modules\LuxeTemplate\Providers/../Resources/views/templates/call_waiter.blade.php ENDPATH**/ ?>