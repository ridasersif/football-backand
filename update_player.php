
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
include ('conect.php');
$ID = $_GET["id"];
$updet_countries = mysqli_query($conn, "SELECT * FROM players WHERE id=$ID");
$data = mysqli_fetch_array($updet_countries);

if (isset($_POST['updatplayer'])) {
    $nationality_id = (int) $_POST['nationality'];  
    $club_id = (int) $_POST['club'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $photo_url = mysqli_real_escape_string($conn, $_POST['photo']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $rating = (int) $_POST['rating'];

    if ($_POST['position'] != 'GK') {
        $pace = (int) $_POST['pace'];
        $shooting = (int) $_POST['shooting'];
        $passing = (int) $_POST['passing'];
        $dribbling = (int) $_POST['dribbling'];
        $defending = (int) $_POST['defending'];
        $physical = (int) $_POST['physical'];
        $diving = $handling = $kicking = $reflexes = $speed = $positioning = 0;
    } else {
        $pace = $shooting = $passing = $dribbling = $defending = $physical = 0;    
        $diving = (int) $_POST['diving'];
        $handling = (int) $_POST['handling'];
        $kicking = (int) $_POST['kicking'];
        $reflexes = (int) $_POST['reflexes'];
        $speed = (int) $_POST['speed'];
        $positioning = (int) $_POST['positioning'];
    }

    $sql_player = "UPDATE players SET name='$name', photo_url='$photo_url', position='$position', 
                   nationality_id=$nationality_id, club_id=$club_id, rating=$rating, 
                   pace=$pace, shooting=$shooting, passing=$passing, dribbling=$dribbling, 
                   defending=$defending, physical=$physical, diving=$diving, handling=$handling, 
                   kicking=$kicking, reflexes=$reflexes, speed=$speed, positioning=$positioning 
                   WHERE id=$ID";

    if (mysqli_query($conn, $sql_player)) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    $conn->close();
}
?>

<div >
    <div class="button-start">
    <button id="btnHideForm" onclick="hideForm(event)"><a href="admin.php" style="  text-decoration: none;">X</a></button>
    </div>
    <form  action="" method="POST" >
        <div class="informationJoueur">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" value="<?php echo $data['name'] ?>" placeholder="Entrez le nom du joueur" >
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="text" id="photo" name="photo" value="<?php echo $data['photo_url'] ?>" accept="image/*" placeholder="Entrez le lien de photo" >
            </div>
            <div class="form-group">
                <label for="nationality">Nationalite</label>
                <select name="nationality" id="nationality">
                    <?php
                   
                    $result = mysqli_query($conn, "SELECT * FROM nationalities");
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
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
                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" id="rating" name="rating" value="<?php echo $data['rating'] ?>" min="0" max="100">
            </div>
            <div class="form-group" id="PositionRemplacant">
                <label for="position">Position</label>
                <select name="position" id="position" >
                    <option value="<?php echo $data['position'] ?>" selected><?php echo $data['position'] ?></option>
                    <option value="LW">LW</option>
                    <option value="ST">ST</option>
                    <option value="RW">RW</option>
                    <option value="CM">CM</option>
                    <option value="LB">LB</option>
                    <option value="CB">CB</option>
                    <option value="RB">RB</option>
                    <option value="GK">GK</option>
                </select>
            </div>
        </div>
        <div id="statistiqueJoueur">
            <div class="statistiqueJoueur">
                <div class="form-group">
                    <label for="pace">Pace</label>
                    <input type="number" id="pace"  name="pace" value="<?php echo $data['pace'] ?>"  min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="shooting">Shooting</label>
                    <input type="number" id="shooting" name="shooting" value="<?php echo $data['shooting'] ?>" min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="passing">Passing</label>
                    <input type="number" id="passing"  name="passing" value="<?php echo $data['passing'] ?>" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="dribbling">Dribbling</label>
                    <input type="number" id="dribbling" name="dribbling" value="<?php echo $data['dribbling'] ?>"  min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="defending">Defending</label>
                    <input type="number" id="defending" name="defending" value="<?php echo $data['defending'] ?>" min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="physical">Physical</label>
                    <input type="number" id="physical" name="physical" value="<?php echo $data['physical'] ?>" min="0" max="100" >
                </div>
            </div>
        </div> 

        <div id="statistiqueGarde">
            <div class="statistiqueGarde">
                <div class="form-group">
                    <label for="diving">Diving</label>
                    <input type="number" id="diving" name="diving" value="<?php echo $data['diving'] ?>" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="handling">Handling</label>
                    <input type="number" id="handling" name="handling" value="<?php echo $data['handling'] ?>" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="kicking">Kicking</label>
                    <input type="number" id="kicking" name="kicking" value="<?php echo $data['kicking'] ?>" min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="reflexes">Reflexes</label>
                    <input type="number" id="reflexes" name="reflexes" value="<?php echo $data['reflexes'] ?>" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="speed">Speed</label>
                    <input type="number" id="speed" name="speed" value="<?php echo $data['speed'] ?>" min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="positioning">Positioning</label>
                    <input type="number" id="positioning" name="positioning" value="<?php echo $data['positioning'] ?>" min="0" max="100">
                </div>
            </div>
        </div>

        <div class="button-and">
            <button type="submit" onclick="resetForm()" name="updatplayer" id="btnAddJoueur">Updet</button>
        </div>
    </form>
   
</div>

    <script>
        function resetForm() {
            document.getElementById("playerForm").reset(); 
        }
    </script>
<script src="main.js?v=1.82"></script>
</body>
</html>
