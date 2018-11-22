<?php $__env->startSection('title', 'dashboard'); ?>


<?php $__env->startSection('content'); ?>

<div class='dashboard'>
  <div class='row expanded'>
  <h2>Dashboard</h2>
    <form action="/school-management/public/admin" method='POST' enctype='multipart/form-data'>
      <input type="text" name='name' class='form-control'>
      <input type="file" name='image'>
      <input class='btn btn-primary' type="submit" name='go' value='Submit'>
    </form>
    

  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>