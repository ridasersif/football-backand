<?php
include 'conect.php';



if (isset($_POST['addcountries'])) {
 


    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $photo = mysqli_real_escape_string($conn, $_POST['photo']);

  
    $sqlclube = "INSERT INTO nationalities (name, flag_url) VALUES ('$name', '$photo')";
    
    if ($conn->query($sqlclube) === TRUE) {
        header("Location: admin.php");
        exit(); 
    } 

    $conn->close();
}
?>

