<?php
   session_start();
    if (!isset($_SESSION['samplename'])) { 
     
     header('LOCATION:index.php');

 
   exit; 
} ?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
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
  
  <title>set timetable</title>
<link rel="stylesheet" type="text/css" href="n1.css">
<style type="text/css">
  .btn{
    font-size:18px;
  }
  #table{
    width: 80%;
  }
</style>
</head>
<body>
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
</div><br><br>


  <script type="text/javascript">
  var arr =[];
  //document.getElementById("form").style.display ="none";       
   //document.getElementById("insert").style.display ="none"; 

var yu;
for (var i =0; i <= 4; i++) {
     var e = document.getElementById("sub"+i);
      yu= e.options[e.selectedIndex].text;
       arr[i] =yu;
       alert(arr[i]);
      }    

  function f(){

   document.getElementById("t1").innerHTML =arr[4];
     document.getElementById("t2").innerHTML =arr[4];
     document.getElementById("t6").innerHTML =arr[4];
     document.getElementById("t7").innerHTML =arr[4];
     document.getElementById("t3").innerHTML =arr[3];
     document.getElementById("t23").innerHTML =arr[3];
     document.getElementById("t8").innerHTML =arr[3];
     document.getElementById("t28").innerHTML =arr[3];
    document.getElementById("t4").innerHTML =arr[2];
     document.getElementById("t9").innerHTML =arr[2];
     document.getElementById("t14").innerHTML =arr[2];
     document.getElementById("t19").innerHTML =arr[2];
    
    document.getElementById("t5").innerHTML =arr[1];
     document.getElementById("t10").innerHTML =arr[1];
     document.getElementById("t24").innerHTML =arr[1];
     document.getElementById("t29").innerHTML =arr[1];
    
    document.getElementById("t15").innerHTML =arr[0];
     document.getElementById("t20").innerHTML =arr[0];
     document.getElementById("t25").innerHTML =arr[0];
     document.getElementById("t30").innerHTML =arr[0];
 

 }

</script>
<center>
<div id="tab1">
<table  id = 'table' class="table table-hover table-responsive">
  
  <tr>
    <td style="font-size: 30px;font-weight: bold;">Day</td>
     <td style="font-size: 30px;font-weight: bold;">8:00-9:00</td>
     <td style="font-size: 30px;font-weight: bold;">9:00-10:00</td>
     <td style="font-size: 30px;font-weight: bold;">10:0-11:00</td>
     <td style="font-size: 30px;font-weight: bold;">11:0-12:00</td>
     <td style="font-size: 30px;font-weight: bold;">12:0-1:00</td>


  </tr>

  <tr>
    <td>Mon</td>
     <td id="t1">5e</td>
      <td id="t2">5e</td>
       <td id="t3">4d</td>
        <td id="t4">3c</td>
     <td id="t5">2b</td>
     

  </tr>
  
  <tr>
    <td>Tues</td>
     <td id="t6">5e</td>
      <td id="t7">5e</td>
       <td id="t8">4d</td>
        <td id="t9">3c</td>
     <td id="t10">2b</td>
     

  </tr>
  
  <tr>
    <td>Wed</td>
     <td id="t11"></td>
     <td id="t12"></td>
      <td id="t13"></td>
     <td id="t14">3c</td>
      <td id="t15">1a</td>

  </tr>
  <tr>
    <td>Thurs</td>
     <td id="t16"></td>
     <td id="t17"></td>
      <td id="t18"></td>
     <td id="t19">3c</td>
      <td id="t20">1a</td>

  </tr>
  <tr>
    <td>Fri</td>
     <td id="t21"></td>
     <td id="t22"></td>
      <td id="t23">4d</td>
     <td id="t24">2b</td>
      <td id="t25">1a</td>

  </tr>
  <tr>
    <td>Sat</td>
     <td id="t26"></td>
     <td id="t27"></td>
      <td id="t28">4d</td>
     <td id="t29">2b</td>
      <td id="t30"></td>

  </tr>
  </table>
  </div>

<div id="insert">

<?php
 include "dbConfig.php";

$myPhpVar=$_GET['id'];

 mysqli_select_db($conn, "timetable");
$sql = "SELECT * FROM fac_load";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <span>FACULTY</span>
 <?php
  echo"<select id='fac0' name='fac_load'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";
}
      echo "</select>";
?>


<?php 
 
 $sql = "SELECT subject_name FROM semester_sub where semester = '$myPhpVar'";
 $query = mysqli_query($conn, $sql);
  
   ?>
 &nbsp&nbsp&nbsp&nbsp<span>SUBJECT</span> <?php
  echo"<select id='sub0' name='semester_sub'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['subject_name'] . "'>" . $row['subject_name'].     
"</option>";
}
      echo "</select>";
?>
 
<?php 
 $sql = "SELECT * FROM fac_load";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <br><br><br><span>FACULTY</span>
 <?php
  echo"<select id='fac1' name='fac_load'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";
}
      echo "</select>";
?>
<?php
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
 $query = mysqli_query($conn, $sql);
  
   ?>
 &nbsp&nbsp&nbsp&nbsp<span>SUBJECT</span>
 <?php
  echo"<select id='sub1' name='semester_sub'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['subject_name'] . "'>" . $row['subject_name'].     
"</option>";
}
      echo "</select>";
?>


<?php $sql = "SELECT * FROM fac_load";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <br><br><br><span>FACULTY</span>
 <?php
  echo"<select id='fac2' name='fac_load'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";
}
      echo "</select>";
?>
<?php
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
 $query = mysqli_query($conn, $sql);
  
   ?>
 &nbsp&nbsp&nbsp&nbsp<span>SUBJECT</span>
 <?php
  echo"<select id='sub2' name='semester_sub'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['subject_name'] . "'>" . $row['subject_name'].     
"</option>";
}
      echo "</select>";
?>


<?php $sql = "SELECT * FROM fac_load";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <br><br><br><span>FACULTY</span>
 <?php
  echo"<select id='fac3' name='fac_load'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";
}
      echo "</select>";
?>
<?php
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
 $query = mysqli_query($conn, $sql);
  
   ?>
 &nbsp&nbsp&nbsp&nbsp<span>SUBJECT</span>
 <?php
  echo"<select id='sub3' name='semester_sub'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['subject_name'] . "'>" . $row['subject_name'].     
"</option>";
}
      echo "</select>";
?>


<?php 
 $sql = "SELECT * FROM fac_load";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <br><br><br><span>FACULTY : </span>
 <?php
  echo"<select id='fac4' name='fac_load'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";
}
      echo "</select>";
?>
<?php
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
 $query = mysqli_query($conn, $sql);
  
   ?>
 &nbsp&nbsp&nbsp&nbsp<span>SUBJECT : </span>
 <?php
  echo"<select id='sub4'name='semester_sub'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['subject_name'] . "'>" . $row['subject_name'].     
"</option>";
}
      echo "</select>";

echo"<div id='form'><br><br><br><br><br><button class ='btn btn-danger' onclick=f();sendArray();>Create TimeTable</button>
</div>"?>
  


</div>

</center>


</body>
</html>