<?php
include 'conect.php';

$sqlCount = "SELECT COUNT(*) AS total FROM clubs";
$result = $conn->query($sqlCount);

if ($result) {
    $row = $result->fetch_assoc();
    echo $row['total'];
}
$conn->close();
?>
