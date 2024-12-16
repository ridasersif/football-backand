<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
            <div>
                <img src="" alt="img">
            </div>
            <div class="choi">
                <a href="index.html">home</a>
                <a href="user.html">uesr</a>
                <a href="admin.php">admin</a>
                <button onclick="afich()" name="addPlayerDb">+</button>
                
                  
            </div>
            <div class="sign">
                    <button onclick="openForm(event)" name="addPlayerDb">Sign Up</button>
                    <button onclick="openForm(event)" name="addPlayerDb">Log in</button>
            </div>
        </nav>
        
<div class="formul" id="formul">
                <div class="button-start">
                  <button id="btnHideForm" onclick="hideForm(event)">X</button>
                </div>
                <form id="player-form">
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
                            <input type="text" id="nationality" name="nationality" placeholder="Entrez le lien de flag">
                        </div>
                        <div class="form-group">
                            <label for="nationality">flag</label>
                            <input type="text" id="nationality" name="nationality" placeholder="Entrez le lien de flag">
                        </div>
                        
                        <div class="form-group">
                            <label for="club">Club</label>
                            <input type="text" id="club" name="club" placeholder="Entrez le nom de club" >
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="text" id="logo" name="logo" accept="image/*" placeholder="Entrez le lien de logo" >
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="number" id="rating" name="rating" min="0" max="100">
                        </div>
                        <div class="form-group" id="PositionRemplacant">
                            <label for="position">position</label>
                            <select type="number" id="position" name="rating" min="0" max="100" >
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
                                    <input type="number" id="passing"  min="0" max="100">
                                </div>
                                <div class="form-group">
                                    <label for="dribbling">Dribbling</label>
                                    <input type="number" id="dribbling" min="0" max="100" >
                                </div>
                                <div class="form-group">
                                    <label for="defending">Defending</label>
                                    <input type="number" id="defending" min="0" max="100" >
                                </div>
                                <div class="form-group">
                                    <label for="physical">Physical</label>
                                    <input type="number" id="physical" min="0" max="100" >
                                </div>
                        </div>
                  </div>

                  <div id="statistiqueGarde">
                        <div class="statistiqueGarde">
                                <div class="form-group">
                                    <label for="diving">diving</label>
                                    <input type="number" id="diving"  min="0" max="100">
                                </div>
                                <div class="form-group">
                                    <label for="handling">handling</label>
                                    <input type="number" id="handling"  min="0" max="100">
                                </div>
                                <div class="form-group">
                                    <label for="kicking">kicking</label>
                                    <input type="number" id="kicking"  min="0" max="100" >
                                </div>
                                <div class="form-group">
                                    <label for="reflexes">reflexes</label>
                                    <input type="number" id="reflexes"  min="0" max="100">
                                </div>
                                <div class="form-group">
                                    <label for="speed">speed</label>
                                    <input type="number" id="speed" min="0" max="100" >
                                </div>
                                <div class="form-group">
                                    <label for="positioning">positioning</label>
                                    <input type="number" id="positioning" min="0" max="100">
                                </div>
                        </div>
                  </div>

                </form>
                <div class="button-and">
                    <input tybe="submit" values="Ajout" name="addJoueur" id="btnAddJoueur" onclick="addJoueur(event)"></input>
                </div>
            </div>



            <script src="main.js"></script>
</body>
</html> 
