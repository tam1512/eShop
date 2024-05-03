<div class="pagetitle">
  <h1><?php echo e($pageTitle); ?></h1>
  <nav>
    <ol class="breadcrumb">
      <?php $__currentLoopData = $breadcrumb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="breadcrumb-item"><a href="<?php echo e($value); ?>"><?php echo e($key); ?></a></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <li class="breadcrumb-item active"><?php echo e($pageTitle); ?></li>
    </ol>
  </nav>
</div><!-- End Page Title --><?php /**PATH E:\program File\xampp\htdocs\eshop\src\views/admin/blocks/breadcrumb.blade.php ENDPATH**/ ?>