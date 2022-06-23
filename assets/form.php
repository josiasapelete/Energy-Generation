<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <form action="" style="padding-bottom: 30px; padding-top: 30px">
        <h1>POSTULEZ MAINTENANT !</h1>

        <hr>

        <label for=""> Prénom et Nom </label>
        <input type="text" placeholder="Prénom" required>
        <input type="text" placeholder="Nom" required>

        <br>

        <label for=""> Genre </label>
        <select name="" id="">
            <option value="">Veuillez selectionner</option>
            <option value="">Homme</option>
            <option value="">Femme</option>
        </select>

        <br>

        <label for=""> Email </label>
        <input type="email" placeholder="Prénom" required>

        <br>

        <label for=""> Confirmer votre email </label>
        <input type="email" placeholder="Entrer votre mail" required>

        <br>

        <label for=""> Numéro de téléphone(avec indicatif) </label>
        <input type="number" required>

        <br>

        <label for=""> Pays </label>
        <select name="" id="">
            <option value="">Veuillez selectionner</option>
            <option value="">Homme</option>
            <option value="">Femme</option>
            <option value="">Femme</option>
            <option value="">Femme</option>
        </select>

        <br>

        <label for=""> Nuveau d'étude </label>
        <select name="" id="">
            <option value="">Veuillez Sélectionner</option>
            <option value="">Pas de diplôme supérieur</option>
            <option value="">Bac</option>
            <option value="">Bac+2</option>
            <option value="">Bac+3</option>
            <option value="">Bac+4/5</option>
            <option value="">Doctorat</option>
        </select>

        <br>

        <label for=""> Campus préféré </label>
        <select name="" id="">
            <option value="">Campus francophone - Lomé</option>
            <option value="">Campus Anglophone - Accra</option>
        </select>

        <br>

        <Button>Envoyer</Button>
    </form>

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Prénom</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Saisie tom prénom">
            </div>

            <br>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Nom</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Saisie ton nom">
            </div>

            <br>

            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>

        <br>

        <div class="form-group col-md-6">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <br>

        <div class="form-group col-md-6">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>

        <br>

        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <br>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

</body>
</html>