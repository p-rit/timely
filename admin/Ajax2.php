<?php
include "dbConfig.php";
//$temp = $_GET['d'];
$temp = $_POST['dd'];
//$res= mysqli_query($conn,"DELETE FROM fac_load WHERE fac_id='$temp'") ;
 $query = "DELETE FROM semester_sub WHERE subject_id=".$temp;
 mysqli_query($conn,$query);



?>