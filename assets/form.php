<?php require_once('connect.php') ;?>

<section>
    <div class="container my-5">
        <h1 class="text-center mb-4 pb-2 text-primary fw-bold">POSTULEZ MAINTENANT !</h1>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold text-primary">Prénom</label>
                <input type="text" name="prenom" placeholder="Votre Prénom" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold text-primary">Nom</label>
                <input type="text" name="nom" placeholder="votre Nom" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold text-primary">Genre</label>
                <select class="form-select" required name="genre" aria-label="Default select example">
                    <option selected>Ouvrez ce menu pour choisir le genre</option>
                    <option value="1">Homme</option>
                    <option value="2">Femme</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold text-primary">Email address</label>
                <input type="email" name="mail" placeholder="example@gmail.com" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold text-primary">Confirmer votre email</label>
                <input type="email" name="email" placeholder="example@gmail.com" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold text-primary">Numéro de téléphone (avec indicatif)</label>
                <input type="number" name="number" placeholder="+228 99999999" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold text-primary">Votre pays</label>
                <select class="form-select" name="pays"  required aria-label="Default select example">
                    <option value="1">Togo</option>
                    <option value="2">Bénin</option>
                    <option value="2">Ghana</option>
                    <option value="2">Niger</option>
                    <option value="2">Cameroun</option>
                    <option value="2">Libreville</option>
                    <option value="2">Côte-d'Ivoire</option>
                    <option value="2">Mali</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold text-primary">Niveau d'études</label>
                <select class="form-select" name="diplome" required aria-label="Default select example">
                    <option value="1">Pas de diplôme supérieur</option>
                    <option value="2">Bac</option>
                    <option value="2">Bac +2</option>
                    <option value="2">Bac +3</option>
                    <option value="2">Bac +4/5</option>
                    <option value="2">Doctorat</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold text-primary">Thématique choisie</label>
                <select class="form-select" name="theme" required aria-label="Default select example">
                    <option value="2">Energy</option>
                    <option value="2">Agri-Business</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold text-primary">Campus préféré</label>
                <select class="form-select" name="campus" required aria-label="Default select example">
                    <option value="2">Campus francophone - Lomé</option>
                    <option value="2">Campus Anglophone - Accra</option>
                </select>
            </div>

            <br>
            <button type="submit" name="send" class="btn btn-primary col-3">Envoyer</button>
        </form>
        <?php
        if (isset($_POST['send'])) {
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $mail = $_POST['mail'];
            $genre = filter_input(INPUT_POST, "genre", FILTER_VALIDATE_INT);
            $pays = filter_input(INPUT_POST, "pays", FILTER_VALIDATE_INT);
            $diplome = filter_input(INPUT_POST, "diplome", FILTER_VALIDATE_INT);
            $theme = filter_input(INPUT_POST, "theme", FILTER_VALIDATE_INT);
            $campus = filter_input(INPUT_POST, "campus", FILTER_VALIDATE_INT);
            $number = $_POST['number'];


            if($mail==$email){
            // requete pour inserer les donné
            $sql = "INSERT INTO inscription (nom,prenom,email,genre,number,pays,diplome,theme,campus)
values (?,?,?,?,?,?,?,?,?) ";

            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                die(mysqli_error($conn));
            }
            mysqli_stmt_bind_param(
                $stmt,
                "sssiiiiii",
                $nom,
                $prenom,$email,$genre,$number,$pays,$diplome,$theme,$campus
            );
            mysqli_stmt_execute($stmt);
            echo "Informations enrégistrées";

        } else {
            echo "les mails ne sont pas identique";
        }
            // var_dump($prenom,$nom,$mail,$genre,$pays,$diplome,$theme,$campus,$number);
        }
        ?>
    </div>
</section>