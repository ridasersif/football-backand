<?php

include 'conect.php';

$sql = "
     SELECT 
        clubs.id,
        clubs.name,
        clubs.logo_url
        FROM clubs
        
";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td><img id ='img_flag_url' src='" . htmlspecialchars($row["logo_url"]) . "' alt='img'></td>";
        echo "<td ><a  class='update' href='?modifid=" . $row["id"] . "'><i onclick=' afich()' class='fa-solid fa-pen-to-square'></i></a></td>";
        echo "<td><a class='delete' href='delete_clube.php?id=" . $row["id"] . "'><i class='fa-solid fa-trash'></i></a></td>";
        echo "</tr>";
    }
} 
mysqli_free_result($result);
?>
