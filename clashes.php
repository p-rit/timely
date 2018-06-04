<?php
include "dbConfig.php";

//faculty
$temp1= $_REQUEST['a1'];
echo $temp1;
$temp2= $_REQUEST['a2'];
echo $temp2;
$temp3= $_REQUEST['a3'];
echo $temp3;
$temp4= $_REQUEST['a4'];
$temp5= $_REQUEST['a5'];
//subjects
$temp11= $_REQUEST['b1'];
$temp22= $_REQUEST['b2'];
$temp33= $_REQUEST['b3'];
$temp44= $_REQUEST['b4'];
$temp55= $_REQUEST['b5'];
/*$res= mysqli_query($conn,"SELECT faculty_name FROM sem_time WHERE day_id='d1',time_id ='t1'") ;
// ($res->num_rows) {
//	$row=$res->fetch_assoc();
   if($res==$temp1)
      echo"facuty is busy for subject $temp11\n";
	
  else
  {
   $res =mysqli_query($conn,"INSERT INTO sem_time('Sr_no','day','day_id','time','time_id','faculty_name','subject_name','semester')VALUES('','','','','','$temp1','$temp11','')");	
      
       echo "inserted";
  	 
  	}*/

?>