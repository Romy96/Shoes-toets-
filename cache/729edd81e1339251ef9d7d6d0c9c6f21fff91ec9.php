<!doctype html>
<html>
<head>
	<link href="css/style.css" rel="stylesheet">
	<title>Shoe brands</title>
	<script src="https://use.fontawesome.com/bf8ab24a40.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<?php
   if ( isset($_SESSION['errors'])) {
      $errors = $_SESSION['errors'];
      $_SESSION['errors'] = array();  // remove all errors
   } 
   else
   {
      $_SESSION['errors'] = array();
   }
 ?>
 

  <?php if(count($errors)>0): ?>     
     <div style="background-color: #ff4d4d; border: 2px solid #c73e3e; color: black;">
    <h3>Error(s):</h3>
      <ul>
        <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>   
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>

<!-- content goes here -->
<div class="content">
<?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html>