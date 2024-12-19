<?php
include 'conect.php';

 $ID=$_GET['id'];
 echo $id;
 mysqli_query($conn,"DELETE FROM players WHERE id=$ID");
 header("Location:admin.php"); 



?>
