    <?php if(isset($restorant)): ?>
      <?php echo $__env->yieldContent('addiitional_button_1'); ?>
      <?php echo $__env->yieldContent('addiitional_button_2'); ?>
      <?php if(config('app.isqrsaas')): ?>
        <?php if(!config('settings.is_whatsapp_ordering_mode') && !$restorant->getConfig('disable_callwaiter', 0) && strlen(config('broadcasting.connections.pusher.app_id')) > 2 && strlen(config('broadcasting.connections.pusher.key')) > 2 && strlen(config('broadcasting.connections.pusher.secret')) > 2): ?>
          <a data-toggle="modal" data-target="#modal-form" href='javascript:;' class='d-flex btn_hero'><svg width="16" fill="#444" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21 15c0-4.625-3.51-8.45-8-8.95V3.99h-2v2.05c-4.493.5-8 4.31-8 8.941v2h18v-2ZM5 15c0-3.859 3.141-7 7-7s7 3.141 7 7H5Zm-3 3h20v2H2Z"/></svg>&nbsp;<?php echo e(__('Call Waiter')); ?></a> 
        <?php endif; ?>
        
        <?php if(config('settings.enable_guest_log')): ?>
          <a href="<?php echo e(route('register.visit',['restaurant_id'=>$restorant->id])); ?>" class="d-flex btn_hero"> <svg width="16" fill="#444" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 2.01H6c-1.21 0-3 .79-3 3v3 6 3 2c0 2.2 1.79 3 3 3h15v-2H6.01c-.47-.02-1.02-.2-1.02-1 0-.11 0-.2.02-.28 .11-.58.58-.72.98-.73h13.989c.01 0 .03-.01.04-.01h.95V17v-2.01V4c0-1.11-.9-2-2-2Zm0 14H5v-2 -6 -3c0-.806.55-.99 1-1h7v7l2-1 2 1v-7h2V15v1.01Z"/></svg>&nbsp;<?php echo e(__('Register visit')); ?></a>
        <?php endif; ?>

        <?php if(isset($hasGuestOrders)&&$hasGuestOrders): ?>
          <a href="<?php echo e(route('guest.orders')); ?>" class='d-flex btn_hero'><svg width="16" fill="#444" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path d="M21 5c0-1.11-.9-2-2-2H5c-1.11 0-2 .89-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5ZM5 19V5h14l0 14H4.99Z"/><path d="M7 7h1.99v2h-2Zm4 0h6v2h-6Zm-4 4h1.99v2h-2Zm4 0h6v2h-6Zm-4 4h1.99v2h-2Zm4 0h6v2h-6Z"/></g></svg>&nbsp;<?php echo e(__('My Orders')); ?></a>
        <?php endif; ?>
      <?php endif; ?>
    <?php endif; ?><?php /**PATH C:\Users\Omen 1 Solutions\Desktop\WEBAPP-SUPREME\httpdocs\supreme.menu\resources\views/cart/luxe/herobuttons.blade.php ENDPATH**/ ?>