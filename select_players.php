<?php

include 'conect.php';

$sql = "
     SELECT 
        players.id,
        players.name AS player_name,
        players.photo_url,
        players.position,
        nationalities.flag_url,
        clubs.logo_url AS club_logo,
        players.rating,
        players.pace,
        players.shooting,
        players.passing,
        players.dribbling,
        players.defending,
        players.physical         
    FROM 
        players
    INNER JOIN 
        nationalities ON players.nationality_id = nationalities.id
    INNER JOIN 
        clubs ON players.club_id = clubs.id
        WHERE 
    players.position != 'GK';
";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["player_name"]) . "</td>";
        echo "<td><img src='" . htmlspecialchars($row["photo_url"]) . "' alt='img'></td>";
        echo "<td>" . htmlspecialchars($row["position"]) . "</td>";
        echo "<td><img src='" . htmlspecialchars($row["flag_url"]) . "' alt=''></td>";
        echo "<td><img src='" . htmlspecialchars($row["club_logo"]) . "' alt=''></td>";
        echo "<td>" . htmlspecialchars($row["rating"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["pace"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["shooting"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["passing"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["dribbling"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["defending"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["physical"]) . "</td>";
        echo "<td ><a onclick='afich_from_player_apdate()'class='update' href='update_player.php?id=" . $row["id"] . "'><i  class='fa-solid fa-pen-to-square'></i></a></td>";
        echo "<td><a class='delete' href='delete_player.php?id=" . $row["id"] . "'><i class='fa-solid fa-trash'></i></a></td>";
        echo "</tr>";
    }
} 
mysqli_free_result($result);
?>
