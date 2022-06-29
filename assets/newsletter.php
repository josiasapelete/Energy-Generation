<?php require_once('connect.php') ;?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form  method="post">
        <h2>Newsletter</h2>
        <p>Recevez nos dernières infos, podcats, conseil</p>
        <p>Nom et prénoms:</p>
        <input class="form-control" type="text" name="nom">
        <P>Email:</P>
        <input type="email" class="form-control" name="Email" id="">
        <input type="radio" value="1" checked name="lang" id=""> <span class="input-group">Je préfère recevoir les informations en français</span>
        <input type="radio" value="2" name="lang" id=""> <span class="input-group">Je préfère recevoir les informations en anglais</span>

        <br>
        <input name="submit" class="btn btn-warning" type="submit" value="send">
        <!-- <button type="button" name="send" class="btn btn-warning">Envoyer</button> -->
        <?php
        // varible pour recuperer les entrées 
            if(isset($_POST['submit'])){
                
                $name = $_POST["nom"];
        $email = $_POST["Email"];
        $lang = filter_input(INPUT_POST, "lang", FILTER_VALIDATE_INT);

        // requete pour inserer les donné
        $sql = "INSERT INTO newsletter (nom,email,lang)
        values (?,?,?) ";

        $stmt= mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            die(mysqli_error($conn));
        }
        mysqli_stmt_bind_param($stmt,"ssi",
        $name,$email,$lang); 
        mysqli_stmt_execute($stmt);
        echo "Informations enrégistrées";

            }
        ?>
    </form>
</body>

</html>