<?php $__env->startSection('cardbody'); ?>
<div class="container-fluid">
    <div class="row">
    <?php $__currentLoopData = $setup['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-4">
            <br/>
            <a href="<?php echo e(route("admin.landing.posts.edit",["post"=>$item->id])); ?>">
                <div class="card cardWithShadow cardWithShadowAnimated shadow" data-toggle="tooltip" data-placement="top" title="<?php echo e(__('Edit this item')); ?>">
                    <div class="card-body">
                        <?php if(strlen($item->image)>2): ?>
                            <div class="imgHolderInCard">
                                <img 
                                    class="image-in-card" 
                                    src='<?php echo e($item->image_link); ?>'
                                />
                            </div>
                        <?php endif; ?>
                        <h3 class="card-title"><?php echo e($item->title); ?></h3>
                        <p class="card-text"><?php echo e($item->description); ?></p>
                    </div>
                </div>
            </a>
            <br/>
            <div class="text-center">
                <a onclick="return confirm('Are you sure?')" href="<?php echo e(route("admin.landing.posts.delete",["post"=>$item->id])); ?>" class="btn btn-outline-danger btn-sm"><?php echo e(__('Delete')); ?></a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('general.index', $setup, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/app.supreme.menu/httpdocs/resources/views/crud/posts/index.blade.php ENDPATH**/ ?>