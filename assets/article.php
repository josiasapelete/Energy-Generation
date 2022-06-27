<?php
require_once('connect.php');
if(!isset($_GET['id']) OR !is_numeric($_GET['id'])){
    header('location:index.php');
} else {
    // code pour Sélectionner l'article qui est cliqué
    $id=$_GET['id'];
    $req="SELECT * FROM articles WHERE id=$id";
    $resultat= mysqli_query($conn,$req);
    $ligne= mysqli_fetch_assoc($resultat);
    extract($_GET); 
    $id =strip_tags($id);

     if(!empty($_POST)){

        extract($_POST);
        // code pour sécuriser l'entrer
        $auteur= strip_tags($auteur);
        $comment =strip_tags($comment);

        // code pour afficher les erreurs
        $errors =array();
        if(empty($auteur)){
            array_push($errors,"Vous devez entrez votre Pseudo");
        }
        if(empty($comment)){
            array_push($errors,"Vous devez entrez votre commentaire");
        }
        if(count($errors)==0){
            $req="INSERT INTO commentaires (articleId,autor,comment,date) VALUES ('$id','$auteur','$comment',NOW())";
            $resultat=mysqli_query($conn,$req);
            if($resultat){
            $succes= 'Votre commentaire a été publié';

                echo $succes;
            }
            unset($auteur);
            unset($comment);
        }
    }
    
}
?>