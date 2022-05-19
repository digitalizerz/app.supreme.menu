<!-- section-place-content -->
<section class='section section-place-content'>
    <div class='bg-white nav-menu sticky_horizontal'>
        <div class='packer'>
            <div class="package">
                <nav id='place-menu' class=" content-tab expanded">
                    <?php $__currentLoopData = $restorant->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(!$category->items->isEmpty()): ?>
                            <div class='item'>
                                <a class="" href='#subsection-<?php echo $category->id; ?>'><?php echo $category->name ?></a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </nav>
            </div>
        </div>
    </div>
    <div class='packer'>
        <div class='package'>
            <div class='content'>
                <div class="row">
                    <div class="col-xl-9">
                        <!-- tab menu -->
                        <div class='holder-left content-tab expanded'>
                            <div class='content-center'>
                                <?php if(!$restorant->categories->isEmpty()): ?>
                                    <?php $__currentLoopData = $restorant->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div id='subsection-<?php echo $category->id; ?>' class='box-info'>
                                        <div class='head'>
                                            <h3 class="mb-0"><?php echo $category->name; ?></h3>
                                        </div>
                                        <div class='content grid'>
                                            <?php $__currentLoopData = $category->aitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href='javascript:;' onClick="setCurrentItem(<?php echo e($item->id); ?>)" class='item-offer-horizontal'>
                                                    <div class='info'>
                                                        <h6 class="title"><?php echo e($loop->iteration); ?>. <?php echo e($item->name); ?></h6>
                                                        <p class="text-truncate"><?php echo e($item->short_description); ?></p>
                                                        <div class='extras'>
                                                            <div class='price'>
                                                                <?php echo money($item->price, config('settings.cashier_currency'),config('settings.do_convertion')); ?>
                                                                <?php if($item->discounted_price>0): ?>
                                                                    <span><?php echo money($item->discounted_price, config('settings.cashier_currency'),config('settings.do_convertion')); ?></span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="allergens">
                                                                <?php $__currentLoopData = $item->allergens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allergen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class='allergen' data-toggle="tooltip" data-placement="bottom" title="<?php echo e($allergen->title); ?>" >
                                                                        <img  src="<?php echo e($allergen->image_link); ?>" />
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <picture>
                                                        <source srcset="<?php echo e($item->logom); ?>" media="(min-width: 569px)" />
                                                        <img loading="lazy" src='<?php echo e($item->logom); ?>' />
                                                    </picture>
                                                    <?php if($item->discounted_price>0): ?>
                                                    <div class="absolute offer-label">
                                                        <svg viewBox="0 0 24 24" fill="#ffb232" width="42" xmlns="http://www.w3.org/2000/svg"><path fill="#FFF" d="M12 11.222l2.667 1.77 -.89-3.12 2.22-1.89 -2.667-.34 -1.34-2.67 -1.34 2.66 -2.667.33 2.22 1.88 -.89 3.11Z"/><path d="M19 21.723V9.99v-1 -5c0-1.104-.9-2-2-2H7c-1.104 0-2 .89-2 2v5 1 11.72l7-4.58 7 4.57ZM8 7.99l2.667-.34 1.33-2.667 1.33 2.667 2.667.33 -2.23 1.88 .89 3.11 -2.667-1.78 -2.667 1.77 .89-3.12 -2.23-1.89Z"/></svg>
                                                    </div>
                                                    <?php endif; ?>
                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <?php if($canDoOrdering): ?>
                        <div class="btn_reserve_fixed"><a href="#0" class="btn_1 gradient full-width" id="theCartBottomButton" onClick="openNav()" ><?php echo e(__('Order Summary')); ?> </a></div>
                        <?php endif; ?>
                        <div class='holder-right mb-3'>
                            <?php if($canDoOrdering): ?>
                                <?php echo $__env->make('luxe-template::templates.side_cart',['id'=>'cartList','idtotal'=>'totalPrices'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                            <?php echo $__env->make('luxe-template::templates.hours', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="about-us text-center">
                                <?php if(isset($doWeHaveImpressumApp)&&$doWeHaveImpressumApp&&strlen($restorant->getConfig('impressum_value',''))>5): ?>
                                    <div class="impressum">
                                        <h6><?php echo e($restorant->getConfig('impressum_title','')); ?></h6>
                                        <p><small><?php echo $restorant->getConfig('impressum_value',''); ?>.</small></p>
                                    </div>
                                <?php endif; ?>
                                <h6 class="text-center"><small><?php echo e(__('Powered by')); ?> <a href="/" target="_blank" rel="noopener noreferrer"><?php echo e(config('global.site_name')); ?></a></small></h6>
                                <?php if(!config('settings.single_mode')&&config('settings.restaurant_link_register_position')=="footer"): ?>
                                <a  target="_blank" class="nav-link" href="<?php echo e(route('newrestaurant.register')); ?>"><?php echo e(__('Add your Restaurant')); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /var/www/vhosts/app.supreme.menu/httpdocs/modules/LuxeTemplate/Providers/../Resources/views/templates/place-content.blade.php ENDPATH**/ ?>