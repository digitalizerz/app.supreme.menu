<br />
<div class="card card-profile shadow">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-8">
                <h5 class="h3 mb-0"><?php echo e(__('Allergens')); ?></h5>
            </div>
            <div class="col-4 text-right">
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="table-responsive">
        <form method="post" action="<?php echo e(route('allergens.set', $item)); ?>" autocomplete="off" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
        <table class="table align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="imagr"><?php echo e(__('Image')); ?></th>
                    <th scope="col" class="sort" data-sort="name"><?php echo e(__('Name')); ?></th>
                    <th scope="col"><?php echo e(__('Contains')); ?></th>
                </tr>
            </thead>
            <tbody class="list">
                    <?php $selected=$item->allergens()->pluck('posts.id')->toArray(); ?>
                    <?php $__currentLoopData = $allergens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alergen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><img style="height:30px" src="<?php echo e($alergen->image_link); ?>" /></th>
                            <th scope="row"><?php echo e($alergen->title); ?></th>
                            <th scope="row">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class=""  <?php if(in_array($alergen->id,$selected)): ?>
                                        checked
                                    <?php endif; ?> name="allergens[<?php echo e($alergen->id); ?>]">
                                </div>
                                
                            </th>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
            
            </tbody>
        </table>
        <div class="text-center mb-2">
            <button type="submit" class="btn btn-success mt-4"><?php echo e(__('Save')); ?></button>
        </div>
        </form>
    </div>
    <!-- end content -->
</div><?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\modules\Allergens\Providers/../Resources/views/select.blade.php ENDPATH**/ ?>