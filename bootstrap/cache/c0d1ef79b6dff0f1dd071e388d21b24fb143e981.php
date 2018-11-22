<?php $__env->startSection('title', 'dashboard'); ?>


<?php $__env->startSection('content'); ?>

<div class='dashboard'>
  <div class='row expanded'>
  <h2>Dashboard</h2>
  <?php echo e($admin); ?>

  <?php echo e(\App\Classes\Redirect::to('./')); ?>

  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>