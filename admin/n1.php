<?php
   session_start();
    if (!isset($_SESSION['samplename'])) { 
     
     header('LOCATION:index.php');

 
   exit; 
} ?> 
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Font awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Bootstrap Datatables -->
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="css/bootstrap-select.css">
  <!-- Bootstrap file input -->
  <link rel="stylesheet" href="css/fileinput.min.css">
  <!-- Awesome Bootstrap checkbox -->
  <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="css/style.css">
  
<link rel="stylesheet" type="text/css" href="n1.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<title>set timetable</title>
</head>
<body background="">
   <script type="text/javascript">
    
  

</script>
<div id="nav-bar">
    <ul >
  <li><a class="active" href="manage.php">Home</a></li>
  <!--<li><a id="1" href="AjaxCall.php?id=1">SEM 1</a></li>-->
  <li><a id="2" href="AjaxCall.php?id=2">SEM 2</a></li>
  <!--<li><a id="3" href="AjaxCall.php?id=3">SEM 3</a></li>-->
  <li><a id="4" href="AjaxCall.php?id=4">SEM 4</a></li>
  <!--<li><a id="5" href="AjaxCall.php?id=5">SEM 5</a></li>-->
  <li><a id="6" href="AjaxCall.php?id=6">SEM 6</a></li>
  <!--<li><a id="7" href="AjaxCall.php?id=7">SEM 7</a></li>-->
  <li><a id="8" href="AjaxCall.php?id=8">SEM 8 </a></li>
  <!--<li><a id="9" href="AjaxCall.php?id=9">SEM 9</a></li>-->
  <li><a id="10" href="AjaxCall.php?id=10">SEM 10</a></li>
  
</ul>
</div>



 
</body>
</html>
