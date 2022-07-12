<?php if(count($fieldsToRender)>0): ?>
  <div class="card-body">
    <label class="form-control-label mb-2"><?php echo e(__(config('settings.label_on_custom_fields'))); ?></label>
    <?php echo $__env->make('partials.fields',['fields'=>$fieldsToRender], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
<?php endif; ?>



<?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/cart/luxe/customfields.blade.php ENDPATH**/ ?>