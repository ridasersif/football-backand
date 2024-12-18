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
<div class="formul" id="formul">
    <div class="button-start">
        <button id="btnHideForm" onclick="hideForm(event)">X</button>
    </div>
    <form  action="insert_data.php" method="POST" id="player-form">
        <div class="informationJoueur">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" placeholder="Entrez le nom du joueur" >
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="text" id="photo" name="photo" accept="image/*" placeholder="Entrez le lien de photo" >
            </div>
            <div class="form-group">
                <label for="nationality">Nationalite</label>
                <select name="nationality" id="nationality">
                    <?php
                    include 'conect.php';
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
                <input type="number" id="rating" name="rating" min="0" max="100">
            </div>
            <div class="form-group" id="PositionRemplacant">
                <label for="position">Position</label>
                <select name="position" id="position">
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
                    <input type="number" id="pace" name="pace" min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="shooting">Shooting</label>
                    <input type="number" id="shooting" name="shooting" min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="passing">Passing</label>
                    <input type="number" id="passing"  name="passing" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="dribbling">Dribbling</label>
                    <input type="number" id="dribbling" name="dribbling"  min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="defending">Defending</label>
                    <input type="number" id="defending" name="defending" min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="physical">Physical</label>
                    <input type="number" id="physical" name="physical" min="0" max="100" >
                </div>
            </div>
        </div> 

        <div id="statistiqueGarde">
            <div class="statistiqueGarde">
                <div class="form-group">
                    <label for="diving">Diving</label>
                    <input type="number" id="diving" name="diving" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="handling">Handling</label>
                    <input type="number" id="handling" name="handling" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="kicking">Kicking</label>
                    <input type="number" id="kicking" name="kicking" min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="reflexes">Reflexes</label>
                    <input type="number" id="reflexes" name="reflexes" min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="speed">Speed</label>
                    <input type="number" id="speed" name="speed" min="0" max="100" >
                </div>
                <div class="form-group">
                    <label for="positioning">Positioning</label>
                    <input type="number" id="positioning" name="positioning" min="0" max="100">
                </div>
            </div>
        </div>

        <div class="button-and">
            <button type="submit" onclick="resetForm()" name="addJoueur" id="btnAddJoueur">Ajoute</button>
        </div>
    </form>

    <form action="insert_clube.php" method="POST" id="clube-form">
        <div class="informationJoueur clube_countries">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" placeholder="Entrez le nom du clube" >
            </div>
            <div class="form-group">
                <label for="photo">Logo</label>
                <input type="text" id="photo" name="photo" accept="image/*" placeholder="Entrez le lien de Logo" >
            </div>
        </div>
        <div class="button-and">
            <button type="submit" onclick="resetForm()" name="addclube" id="btnAddJoueur">Ajoute</button>
        </div>
    </form>
    <form action="insert_countrie.php" method="POST" id="countries-form">
        <div class="informationJoueur clube_countries">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" placeholder="Entrez le nom du pays" >
            </div>
            <div class="form-group">
                <label for="photo">Pays</label>
                <input type="text" id="photo" name="photo" accept="image/*" placeholder="Entrez le lien de photo" >
            </div>
        </div>
        <div class="button-and">
            <button type="submit" onclick="resetForm()" name="addcountries" id="btnAddJoueur">Ajoute</button>
        </div>
    </form>
</div>

    <script>
        function resetForm() {
            document.getElementById("playerForm").reset(); 
        }
    </script>
<script src="main.js?v=1.32"></script>
</body>
</html>
