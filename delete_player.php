<?php
include 'conect.php';

 $ID=$_GET['id'];
 echo $id;
 mysqli_query($conn,"DELETE FROM players WHERE id=$ID");
 header("Location:admin.php"); 




//****************************************************** */

// if (isset($_GET['id'])) {
//     $player_id = $_GET['id'];

  
//     $sql = "DELETE FROM players WHERE id = ?";

//     if ($stmt = mysqli_prepare($conn, $sql)) {
        
//         mysqli_stmt_bind_param($stmt, "i", $player_id);

       
//         if (mysqli_stmt_execute($stmt)) {
         
//             header("Location:admin.php"); 
//             exit();
//         } else {
//             echo "error en delete";
//         }

   
//         mysqli_stmt_close($stmt);
//     } else {
//         echo "error de conexon";
//     }
// } else {
//     echo "ne execte pas";
// }

// mysqli_close($conn);
?>
