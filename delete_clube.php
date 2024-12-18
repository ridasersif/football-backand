<?php
include 'conect.php';

 $ID=$_GET['id'];
 echo $id;
 mysqli_query($conn,"DELETE FROM clubs WHERE id=$ID");
 header("Location:admin.php"); 
