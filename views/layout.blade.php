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
 

  @if(count($errors)>0)     {{-- does $errors have any errors? --}}
     <div style="background-color: #ff4d4d; border: 2px solid #c73e3e; color: black;">
    <h3>Error(s):</h3>
      <ul>
        @foreach ($errors as $error)   
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

<!-- content goes here -->
<div class="content">
@yield('content')
</div>

</body>
</html>