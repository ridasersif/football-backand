<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.74">
    <link rel="stylesheet" href="styledacc.css?v=1.32">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
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
            </div>
          
        </nav>
        <div class="content">
            <div class="menu">
               
                <ul>
                    <li class="profile">
                        <div class="img-box">
                            <img src="logo-fot.jpg" alt="image">
                        </div>
                        <h2>rida sersif</h2>
                    </li>
                    <li>
                        <a href="#" class="active"> 
                        <i class="fa-solid fa-house"></i>
                            <p>dashboard</p>
                        </a>
                    </li>
                   
                    <li>
                        <a href="#"> 
                        <i class="fa-solid fa-user-group"></i> 
                            <p>clients</p>
                        </a>
                    </li>
                    <li>
                        <a href="#"> 
                        <i class="fa-solid fa-table"></i>
                            <p>players</p>
                        </a>
                    </li>
                    <li>
                        <a href="#"> 
                        <i class="fa-solid fa-chart-pie"></i>
                            <p>charts</p>
                        </a>
                    </li>
                    <li class="log-out">
                        <a href="#"> 
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            <p>Log Out</p>
                        </a>
                    </li>
                </ul>

            </div>

          
        
             <div class="tables" id="tables" >

                <div class="data-info" >
                <div class="box" onclick="tabelPlayers()">
                  <i class="fa-solid fa-user"></i>
                  <div class="data">
                    <p>players</p>
                    <span><?php include 'sta_players.php'?></span>
                  </div>
                </div>
                <div class="box">
                <i class="fa-solid fa-people-group"></i>
                  <div class="data">
                    <p>clubes</p>
                    <span><?php include 'sta_clubes.php'?></span>
                  </div>
                </div>
                <div class="box">
                <i class="fa-solid fa-flag"></i>
                  <div class="data">
                    <p>countries</p>
                    <span><?php include 'sta_countries.php'?></span>
                  </div>
                </div>
           
             </div>
                <div id="tables-players"  >
                        <div onclick="afich()" class="addPlayersTabele">
                                <a href="#" > 
                                    <p>Add Player</p>
                                    <i class="fa-solid fa-pen"></i>   
                                </a>
                        </div>
                        <div onclick="afich_form_clube()" class="addPlayersTabele">
                                <a href="#" > 
                                    <p>Add Clube</p>
                                    <i class="fa-solid fa-pen"></i>   
                                </a>
                        </div>
                        <div onclick="afich_form_countries()" class="addPlayersTabele">
                                <a href="#" > 
                                    <p>Add Countries</p>
                                    <i class="fa-solid fa-pen"></i>   
                                </a>
                        </div>
                                        <h3 class="title_table">playres</h3>
                                 <table border="1">
                                    <tr class="tr">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>photo</th>
                                        <th>position</th>
                                        <th>nationalite</th>
                                        <th>club</th>
                                        <th>rating</th>
                                        <th>PCE</th>
                                        <th>SHT</th>
                                        <th>PAS</th>
                                        <th>DRI</th>
                                        <th>DEF</th>
                                        <th>PHY</th>
                                        <th>Updet</th>
                                        <th>Delete</th>
                                    </tr>
                                    <tr>
                                    <?php include 'select_players.php'; ?>
                                    </tr>
                                    </table>
                             
                                    <h3 class="title_table">garde</h3>
                                    <table border="1">
                                    <tr class="tr">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>photo</th>
                                        <th>position</th>
                                        <th>nationalite</th>
                                        <th>club</th>
                                        <th>rating</th>
                                        <th>DIV</th>
                                        <th>HAN</th>
                                        <th>KIC</th>
                                        <th>GEF</th>
                                        <th>SPE</th>
                                        <th>POS</th>
                                        <th>Updet</th>
                                        <th>Delete</th>
                                    </tr>
                                    <tr>
                                    <?php include 'select_GK.php'; ?>
                                    </tr>
                                    </table>
                  </div>
                    <div class="clubes-db">
                                   <h3 class="title_table">clubes</h3>
                                    <table border="1">
                                    <tr class="tr">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>photo</th>
                                        <th>Updet</th>
                                        <th>Delete</th>
                                        
                                    </tr>
                                    <tr>
                                    <?php include 'select_clubes.php'  ?>
                                    </tr>
                                    </table>

                    </div>
                    <div class="cunttries">
                                   <h3 class="title_table">countries</h3>
                                    <table border="1">
                                    <tr class="tr">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>photo</th>
                                        <th>Updet</th>
                                        <th>Delete</th>
                                        
                                    </tr>
                                    <tr>
                                    <?php include 'select_countries.php' ?>
                                    </tr>
                                    </table>

                    </div>
                  
                                
            </div>
           
         </div>
       
            <?php
            include 'player_from.php'
            ?>




















        


          
            <script src="main.js?v=1.23"></script>
</body>
</html> 
