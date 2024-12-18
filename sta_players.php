<?php
include 'conect.php';

$sqlCount = "SELECT COUNT(*) AS total FROM players";
$result = $conn->query($sqlCount);

if ($result) {
    $row = $result->fetch_assoc();
    echo $row['total'];
}
$conn->close();
?>
