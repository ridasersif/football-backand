<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.24">
    <link rel="stylesheet" href="styledacc.css?v=1.24">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <?php
    include('conect.php');
    
    $ID = $_GET['id'];

    $sqlSelect = "
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
            players.id = '$ID';
    ";

    $result = mysqli_query($conn, $sqlSelect);
    $player = mysqli_fetch_assoc($result);

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $photo = $_POST['photo'];
        $nationality = $_POST['nationality'];
        $club = $_POST['club'];
        $rating = $_POST['rating'];
        $position = $_POST['position'];
        $pace = $_POST['pace'];
        $shooting = $_POST['shooting'];
        $passing = $_POST['passing'];
        $dribbling = $_POST['dribbling'];
        $defending = $_POST['defending'];
        $physical = $_POST['physical'];
        $diving = $_POST['diving'];
        $handling = $_POST['handling'];
        $kicking = $_POST['kicking'];
        $reflexes = $_POST['reflexes'];
        $speed = $_POST['speed'];
        $positioning = $_POST['positioning'];
    
        $sql = "
            UPDATE players SET 
                name = '$name',
                photo_url = '$photo',
                nationality_id = '$nationality',
                club_id = '$club',
                rating = '$rating',
                position = '$position',
                pace = '$pace',
                shooting = '$shooting',
                passing = '$passing',
                dribbling = '$dribbling',
                defending = '$defending',
                physical = '$physical',
                diving = '$diving',
                handling = '$handling',
                kicking = '$kicking',
                reflexes = '$reflexes',
                speed = '$speed',
                positioning = '$positioning'
            WHERE id = $id
        ";
    
        if (mysqli_query($conn, $sql)) {
            header("Location: players_list.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
    ?>
    
<div>
    <div class="button-start">
        <button id="btnHideForm" onclick="hideForm(event)">X</button>
    </div>
    <form action="update_player.php?id=<?php echo $ID; ?>" method="POST" id="player-form">
        <div class="informationJoueur">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" value="<?php echo $player['player_name']; ?>">
            </div>
            
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="text" id="photo" name="photo" value="<?php echo $player['photo_url']; ?>" accept="image/*">
            </div>
            <div class="form-group">
                <label for="nationality">Nationalite</label>
                <select name="nationality" id="nationality">
                    <?php
                    include 'conect.php';
                    $result = mysqli_query($conn, "SELECT * FROM nationalities");
                    while ($row = mysqli_fetch_assoc($result)) {
                        $selected = ($row['id'] == $player['nationality_id']) ? 'selected' : '';
                        echo "<option value='" . $row['id'] . "' $selected>" . $row['name'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="club">Club</label>
                <select name="club" id="club">
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM clubs");
                    while ($row = mysqli_fetch_assoc($result)) {
                        $selected = ($row['id'] == $player['club_id']) ? 'selected' : '';
                        echo "<option value='" . $row['id'] . "' $selected>" . $row['name'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" id="rating" name="rating" min="0" max="100" value="<?php echo $player['rating']; ?>">
            </div>
            <div class="form-group" id="PositionRemplacant">
                <label for="position">Position</label>
                <select name="position" id="position">
                    <option value="LW" <?php echo ($player['position'] == 'LW') ? 'selected' : ''; ?>>LW</option>
                    <option value="ST" <?php echo ($player['position'] == 'ST') ? 'selected' : ''; ?>>ST</option>
                    <option value="RW" <?php echo ($player['position'] == 'RW') ? 'selected' : ''; ?>>RW</option>
                    <option value="CM" <?php echo ($player['position'] == 'CM') ? 'selected' : ''; ?>>CM</option>
                    <option value="LB" <?php echo ($player['position'] == 'LB') ? 'selected' : ''; ?>>LB</option>
                    <option value="CB" <?php echo ($player['position'] == 'CB') ? 'selected' : ''; ?>>CB</option>
                    <option value="RB" <?php echo ($player['position'] == 'RB') ? 'selected' : ''; ?>>RB</option>
                    <option value="GK" <?php echo ($player['position'] == 'GK') ? 'selected' : ''; ?>>GK</option>
                </select>
            </div>
        </div>
        <div id="statistiqueJoueur">
            <div class="statistiqueJoueur">
                <div class="form-group">
                    <label for="pace">Pace</label>
                    <input type="number" id="pace" name="pace" min="0" max="100" value="<?php echo $player['pace']; ?>">
                </div>
                <div class="form-group">
                    <label for="shooting">Shooting</label>
                    <input type="number" id="shooting" name="shooting" min="0" max="100" value="<?php echo $player['shooting']; ?>">
                </div>
                <div class="form-group">
                    <label for="passing">Passing</label>
                    <input type="number" id="passing"  name="passing" min="0" max="100" value="<?php echo $player['passing']; ?>">
                </div>
                <div class="form-group">
                    <label for="dribbling">Dribbling</label>
                    <input type="number" id="dribbling" name="dribbling"  min="0" max="100" value="<?php echo $player['dribbling']; ?>">
                </div>
                <div class="form-group">
                    <label for="defending">Defending</label>
                    <input type="number" id="defending" name="defending" min="0" max="100" value="<?php echo $player['defending']; ?>">
                </div>
                <div class="form-group">
                    <label for="physical">Physical</label>
                    <input type="number" id="physical" name="physical" min="0" max="100" value="<?php echo $player['physical']; ?>">
                </div>
            </div>
        </div> 

        <div id="statistiqueGarde">
            <div class="statistiqueGarde">
                <div class="form-group">
                    <label for="diving">Diving</label>
                    <input type="number" id="diving" name="diving" min="0" max="100" value="<?php echo $player['diving']; ?>">
                </div>
                <div class="form-group">
                    <label for="handling">Handling</label>
                    <input type="number" id="handling" name="handling" min="0" max="100" value="<?php echo $player['handling']; ?>">
                </div>
                <div class="form-group">
                    <label for="kicking">Kicking</label>
                    <input type="number" id="kicking" name="kicking" min="0" max="100" value="<?php echo $player['kicking']; ?>">
                </div>
                <div class="form-group">
                    <label for="reflexes">Reflexes</label>
                    <input type="number" id="reflexes" name="reflexes" min="0" max="100" value="<?php echo $player['reflexes']; ?>">
                </div>
                <div class="form-group">
                    <label for="speed">Speed</label>
                    <input type="number" id="speed" name="speed" min="0" max="100" value="<?php echo $player['speed']; ?>">
                </div>
                <div class="form-group">
                    <label for="positioning">Positioning</label>
                    <input type="number" id="positioning" name="positioning" min="0" max="100" value="<?php echo $player['positioning']; ?>">
                </div>
            </div>
        </div>

        <div class="button-and">
            <button type="submit" name="addJoueur" id="btnAddJoueur">Modifier</button>
        </div>
    </form>
</div>

<script src="audete.js"></script>
</body>
</html>
