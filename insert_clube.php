<?php
include 'conect.php'; 

if (isset($_POST['addclube'])) {
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $photo = mysqli_real_escape_string($conn, $_POST['photo']);

   
    $sqlclube = "INSERT INTO clubs (name, photo) VALUES ('$name', '$photo')";
    
        header("Location:admin.php");
   
    $sqlclube->$
    $conn->close();
}
?>
