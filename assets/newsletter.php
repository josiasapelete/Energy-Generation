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
    <form action="newsletter.php" method="post">
        <h2>Newsletter</h2>
        <p>Recevez nos dernières infos, podcats, conseil</p>
        <p>Nom et prénoms:</p>
        <input class="form-control" type="text" name="nom">
        <P>Email:</P>
        <input type="email" class="form-control" name="Email" id="">
        <input type="radio" value="1" name="lang" id=""> <span class="input-group">Je préfère recevoir les informations en français</span>
        <input type="radio" value="2" name="lang" id=""> <span class="input-group">Je préfère recevoir les informations en anglais</span>

        <br>

        <button type="button" name="send" class="btn btn-warning">Envoyer</button>
        <?php
            if(isset($_POST['send'])){
                $name = $_POST["nom"];
        $email = $_POST["Email"];
        $lang = filter_input(INPUT_POST, "lang", FILTER_VALIDATE_INT);
        var_dump($name,$lang);
        // if (! $lang) {
        //     die("Vous devez accepter");}
            }
        ?>
    </form>
</body>

</html>