

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
    $ID=$_GET["id"];
    
    $updet_clube=mysqli_query($conn,"SELECT * FROM clubs WHERE id=$ID");
    $data=mysqli_fetch_array($updet_clube);
    ?>
<div >
    <div class="button-start">
        <button id="btnHideForm" onclick="hideForm(event)"><a href="admin.php" style="  text-decoration: none;">X</a></button>
    </div>
    <form action="" method="POST" id="">
    
        <div class="informationJoueur clube_countries">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" value="<?php echo $data['name'] ?>" placeholder="Entrez le nom du clube" >
            </div>
            <div class="form-group">
                <label for="photo">Logo</label>
                <input type="text" id="photo" name="photo" value="<?php echo $data['logo_url'] ?>" accept="image/*" placeholder="Entrez le lien de Logo" >
            </div>
        </div>
   
        <div class="button-and">
            <button type="submit" onclick="resetForm()" name="updetclube" id="btnAddJoueur">apudet</button>
        </div>
    </form>
    <?php 

if (isset($_POST['updetclube'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $photo = mysqli_real_escape_string($conn, $_POST['photo']);

  
    $sqlclube = "UPDATE clubs SET name='$name',logo_url='$photo' WHERE id=$ID ";
    
    if ($conn->query($sqlclube) === TRUE) {
        header("Location: admin.php");
        exit(); 
    } 

    $conn->close();
}
?>
</div>

    <script>
        function resetForm() {
            document.getElementById("playerForm").reset(); 
        }
    </script>
<script src="main.js?v=1.32"></script>
</body>
</html>
