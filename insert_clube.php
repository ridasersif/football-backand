<?php
include 'conect.php'; 

if (isset($_POST['addclube'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $photo = mysqli_real_escape_string($conn, $_POST['photo']);

  
    $sqlclube = "INSERT INTO clubs (name, logo_url) VALUES ('$name', '$photo')";
    
    if ($conn->query($sqlclube) === TRUE) {
        header("Location: admin.php");
        exit(); 
    } 

    $conn->close();
}
?>

