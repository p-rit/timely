<?php
include "dbConfig.php";
$temp = $_POST['d'];
$query = "DELETE FROM fac_load WHERE fac_id=".$temp;
 mysqli_query($conn,$query);

echo 1;

?>