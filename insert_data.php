<?php
include 'conect.php';
if (isset($_POST['addJoueur'])) {
    $nationality_id = (int) $_POST['nationality'];  
    $club_id = (int) $_POST['club'];

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $photo_url = mysqli_real_escape_string($conn, $_POST['photo']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $rating = (int) $_POST['rating'];

    //********************************************* */
    if($_POST['position']!='GK'){
        $pace = (int) $_POST['pace'];
        $shooting = (int) $_POST['shooting'];
        $passing = (int) $_POST['passing'];
        $dribbling = (int) $_POST['dribbling'];
        $defending = (int) $_POST['defending'];
        $physical = (int) $_POST['physical'];
        $diving = 0;
        $handling = 0;
        $kicking = 0;
        $reflexes = 0;
        $speed = 0;
        $positioning = 0;
    }

    // *******************************************
    else{
        $pace =0;
        $shooting =0;
        $passing =
        $dribbling = 0;
        $defending = 0;
        $physical =  0;    
        $diving = (int) $_POST['diving'];
        $handling = (int) $_POST['handling'];
        $kicking = (int) $_POST['kicking'];
        $reflexes = (int) $_POST['reflexes'];
        $speed = (int) $_POST['speed'];
        $positioning = (int) $_POST['positioning'];
    }

    // *************************************************
    $sql_player = "INSERT INTO players (name, photo_url, position, nationality_id, club_id, rating, pace, shooting, passing, dribbling, defending, physical, diving, handling, kicking, reflexes, speed, positioning) 
                   VALUES ('$name', '$photo_url', '$position', $nationality_id, $club_id, $rating, $pace, $shooting, $passing, $dribbling, $defending, $physical, $diving, $handling, $kicking, $reflexes, $speed, $positioning)";
    if (mysqli_query($conn, $sql_player)) {
        header("Location:admin.php");
    } else {
        die("Erreur lors de l'ajout du joueur: " . mysqli_error($conn));
    }
}
?>
