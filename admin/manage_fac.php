<?php
	 session_start();
    if (!isset($_SESSION['samplename'])) { 
     
     header('LOCATION:index.php');

 
   exit; 
} 

    ?>
<?php
include "dbConfig.php";
if(isset($_POST['Submit']))
{ 
	$no=$_POST['no'];
	for($i=0;$i<$no;$i++)
   {		
	$name1=$_POST['names'.$i];
	$lect1=$_POST['lectures'.$i];
    $res= mysqli_query($conn,"INSERT INTO fac_load VALUES('','$name1','$lect1')");
}
}
if(isset($_POST['update']))
{
	$id=$_POST['I1'];
	$name=$_POST['F1'];
	$lect=$_POST['L1'];
    $res= mysqli_query($conn,"UPDATE fac_load SET faculty_name='$name',L_count='$lect'WHERE fac_id='$id'");
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
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
	
<style type="text/css">
	#fac_table,#text_box,#add,#rem_table,#update_table{
		display :none;	
		}
		#a,#b,#c,#d{
			font-size: 18px;
		}
 		#table{
 			width: 80%; 
 		}
</style>

	
   
 </head>
<body  background="">
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<center>
				<h2 style="text-align: center;font-weight:bold;" id="demo"></h2>
				<h3> M.Tech</h3>
				<br><br>
<button class="btn btn-warning" id="a" onclick="viewFn()">View</button>		
	
<button class="btn btn-warning" id="b" onclick="updateFn()">Update Faculty</button>
<button class="btn btn-warning" id="c" onclick="addFn()">Add Faculty</button>
<button class="btn btn-warning" id="d" onclick="removeFn()">Remove Faculty</button><br><br>

	

 <div id="fac_table">
<?php
$result = mysqli_query($conn,"SELECT * FROM fac_load");
$r1 =$result->num_rows;
echo "<table class ='table table-hover table-responsive' id
 = 'table'>
<tr>
<th style='font-size: 20px;font-weight: bold;'>Faculty ID</th>
<th style='font-size: 20px;font-weight: bold;'>Faculty Name</th>
<th style='font-size: 20px;font-weight: bold;'>Lectures Allocated</th>
</tr>";
for($i=1;$i<=$r1;$i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>"; 
 echo "<td>" . $row['fac_id'] . "</td>";
 echo "<td>" . $row['faculty_name'] . "</td>";
 echo "<td>" . $row['L_count'] . "</td>";
 }
 
echo "</tr>";
echo "</table>";
?>
</div>
<div id="update_table">
<?php
$result = mysqli_query($conn,"SELECT * FROM fac_load");
$r1 =$result->num_rows;
echo "<table class ='table table-hover table-responsive' id
 = 'table'>
<tr>
<th style='font-size: 20px;font-weight: bold;'>Faculty ID</th>
<th style='font-size: 20px;font-weight: bold;'>Faculty Name</th>
<th style='font-size: 20px;font-weight: bold;'>Lectures Allocated</th>
<th style='font-size: 20px;font-weight: bold;'>Edit</th>
</tr>";
for($i=1;$i<=$r1;$i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>"; 
 echo "<td>" . $row['fac_id'] . "</td>";
 echo "<td>" . $row['faculty_name'] . "</td>";
 echo "<td>" . $row['L_count'] . "</td>";
 echo "<td><button class='btn btn-warning btn-sm' id=\"".$i ."\" onclick=f1(".$row['fac_id'].",'". $row['faculty_name']."',". $row['L_count'].")>edit</button></td>";
}
 
echo "</tr>";
echo "</table>";
?>
</div>

<div id="rem_table">
<?php
$result = mysqli_query($conn,"SELECT * FROM fac_load");
$r1 =$result->num_rows;
echo "<table class ='table table-hover table-responsive' id
 = 'table'>
<tr>
<th style='font-size: 20px;font-weight: bold;'>Faculty ID</th>
<th style='font-size: 20px;font-weight: bold;'>Faculty Name</th>
<th style='font-size: 20px;font-weight: bold;'>Lectures Allocated</th>
<th style='font-size: 20px;font-weight: bold;'>Remove</th>
</tr>";
for($i=1;$i<=$r1;$i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>"; 
 echo "<td>" . $row['fac_id'] . "</td>";
 echo "<td>" . $row['faculty_name'] . "</td>";
 echo "<td>" . $row['L_count'] . "</td>";
 echo "<td><button class='btn btn-warning btn-sm' id=\"".$i ."\" onclick=r1(".$row['fac_id'].")>remove</button></td>";
}
echo "</tr>";
echo "</table>";
?>
</div>
<div id="text_box"><!--table for updation-->
	<form action="" method="POST">
 <input type="text" name="I1" id="id" hidden><br><br>
Faculty Name: <input type="text" name="F1" id="name" required><br><br>
No. of Lectures: <input type="number" name="L1" id="lect" required><br><br>
<input class="btn btn-warning btn-sm" type="submit" name="update" value="UPDATE">
</form>
</div>
<div id="add">
	<form>
		Enter numbers of faculties to added :<input type="number" name="" id="textfac" required><br><br>
		<button class="btn btn-warning btn-sm" onclick="addFac()">add</button>
	</form>
</div>

 <script type="text/javascript" src="js/managefac.js"></script>
  <script type="text/javascript" src="/time_table/js/session.js"></script>

</center>
</div></div></div>
<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	

</body>
</html>
