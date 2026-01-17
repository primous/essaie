<?php
require('includes/functions.php');
if(isset($_POST['register'])){

    //veuillez si les champs existent et ne sont pas vides
    if(not_empty(['name', 'pseudo', 'email', 'password', 'confirm_password']) ){

        $errors = [];

        extract($_POST);

        if(mb_strlen($name) < 3 ){
            $errors[] = "Votre pseudo doit avoir minimum 6 caratères";
        }

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Veuillez entrer un email correct";
        }

        if(mb_strlen($password) < 6 ){
            $errors[] = "Votre mot de passe doit avoir minimun 6 caratères";
        } else {
            if($password != $password_confirm){
                $errors[] = "Les deux mot de passe ne sont pas conforme";
            }
        }

        if(is_already_in_use('pseudo', $pseudo, 'users')){
            $errors[] = "Pseaudo déjà utilisé";
        }

         if(is_already_in_use('email', $email, 'users')){
            $errors[] = "Email déjà utilisé";
        }


        if(count($errors) == 0){
            //envoyer un mail d'activation
            //informer l'utilisateur pour qu'il verifie sa boite de reception
            //enregistrerr le user
            //message de bienvenue
            //rediriger vers le dashbord

        }

    } else {
        $errors[] = "Veuillez remplir tout les champs";
    }
    
}


require('views/register.view.php');
?>