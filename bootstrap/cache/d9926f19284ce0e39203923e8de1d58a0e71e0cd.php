<?php $__env->startSection('title', 'Courses All'); ?>


<?php $__env->startSection('content'); ?>

<div class='courses'>
  <div class='row expanded'>
  <h2 align=center>All Courses</h2>
  </div>
  <div class="row expanded">
    <div class="small-12 medium-6 column" align=center>
    <form action="">
      <div class="input-group" style='max-width:500px;'>
      <input type="text" class='input-group-field' placeholder='Search by course name'>
      <div class="input-group-button">
      <input type="submit" class='button'>
      </div>
      </div>
    </form>


<div class="grid-container">
  <div class="grid-x grid-margin-x">
  <div class="cell medium-2">
    <h4>Courses</h4>
    <select class="vertical tabs" data-tabs id="example-tabs">

    <?php foreach ($courses as $num => $course) {
      // echo $course;
      ?>
        <option href="#course<?php echo $num ?>" class="tabs-title"><a >Tab <?php echo $num ?></a></op>
      <?php
    }
    ?>
    </select>
    </div>




<div class="cell medium-8">
      <div class="tabs-content" data-tabs-content="example-tabs">
      <?php foreach ($courses as $num => $course) {
      // echo $course;
      ?>
        <div class="tabs-panel" id="course<?php echo $num ?>">
          <img class="thumbnail" src="assets/img/generic/rectangle-8.jpg">
          <p><?php echo $course->course_name ?></p>
          <p><?php echo $course->course_description ?></p>
          <p>Date Created:<?php echo $course->created_at ?></p>
          <!-- <p>Six</p> -->
        </div>
        <?php
    }
    ?>
      </div>
  </div>
   

  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>