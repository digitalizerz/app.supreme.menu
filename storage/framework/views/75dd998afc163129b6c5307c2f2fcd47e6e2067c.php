<div class="card-body">
  <div class="form-group<?php echo e($errors->has('comment') ? ' has-danger' : ''); ?>">
    <label class="form-control-label mb-2"><?php echo e(__('Additional Note')); ?> / <?php echo e(__('Comment')); ?></label>
    <textarea name="comment" id="comment" class="form-control<?php echo e($errors->has('comment') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__( 'Your comment here' )); ?> ..."></textarea>
    <?php if($errors->has('comment')): ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('comment')); ?></strong>
        </span>
    <?php endif; ?>
  </div>
</div>
<?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/cart/luxe/comment.blade.php ENDPATH**/ ?>