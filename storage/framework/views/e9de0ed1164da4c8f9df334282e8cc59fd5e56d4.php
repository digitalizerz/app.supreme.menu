
<div class="card-body tablepicker">
  <div class="tablepicker">
    <input type="hidden" value="<?php echo e($restorant->id); ?>" id="restaurant_id"/>
    <?php if($tid==null): ?>
      <label class="form-control-label mb-2"><?php echo e(__('Select Table')); ?></label>
      <?php echo $__env->make('cart.luxe.select',$tables, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>            
      <h4><?php echo e($tableName); ?></h4>
      <input type="hidden" value="<?php echo e($tid); ?>" name="table_id"  id="table_id"/>
    <?php endif; ?>
  </div>
</div>

<?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/cart/luxe/localorder/table.blade.php ENDPATH**/ ?>