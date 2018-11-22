<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="<?php echo trim($_SERVER['PHP_SELF'], 'index.php'); ?>css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Admin Panel - <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>

<?php echo $__env->make('includes.admin-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="off-canvas-content" data-off-canvas-content>
  <!-- Your page content lives here -->
  <div class="admin-title-bar">
    <div class="title-bar">
      <div class="title-bar-left">
        <button class="menu-icon hide-for-large" type="button" data-open="offCanvas"></button>
        <h5 class="title-bar-title"><?php echo e(getenv('APP_NAME')); ?></h5> 
      
      </div>
    </div>
    </div>
  <?php echo $__env->yieldContent('content'); ?>

</div>


<script src="<?php echo trim($_SERVER['PHP_SELF'], 'index.php'); ?>js/all.js"></script>
<script src="https://use.fontawesome.com/88c6faeeb0.js"></script> 
</body>
</html>
