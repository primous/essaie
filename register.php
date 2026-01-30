<?php
session_start();
require('config/db.php') ;
require('includes/functions.php');
require('includes/constants.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';



$errors = [];

if(isset($_POST['register'])){

    //veuillez si les champs existent et ne sont pas vides
    if(not_empty(['name', 'pseudo', 'email', 'password', 'password_confirm']) ){

    

        $errors = [];

        extract($_POST);

        
        if(mb_strlen($pseudo) < 3 ){
            $errors[] = "Votre pseudo doit avoir minimum 3 caratères";
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
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
            $to = $email;
            $subject = WEBSITE_NAME . ' - Activation de compte';

            
            $password = sha1($password);
            // ✅ Token sécurisé
            $token = sha1($pseudo.$email.$password);

            // Génération du mail HTML
            ob_start();
            require 'templates/emails/activation.view.php';
            $content = ob_get_clean();

            $mail = new PHPMailer(true);

            try {
                // 🔧 Configuration SMTP Gmail
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'yenickoprimous@gmail.com'; // ton Gmail
                $mail->Password   = 'trrt oyyz mqea norj'; // mot de passe d’application
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                // 📬 Expéditeur / Destinataire
                $mail->setFrom('yenickoprimous@gmail.com', 'DevConnect');
                $mail->addAddress($to);

                // 📨 Contenu du mail
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body    = $content;
                $mail->CharSet = 'UTF-8';

                $mail->send();
                set_flash( 'Mail d\'activation envoyé', 'success');


                $q = $db->prepare('insert into users(name, pseudo, email, password)
                                   values(:name, :pseudo, :email, :password) ');

                $q->execute([
                    'name'=>$name,
                    'pseudo'=>$pseudo,
                    'email'=>$email,
                    'password'=>$password
                ]);

                header('Location: index.php');
                exit;

            } catch (Exception $e) {
                set_flash( "Erreur SMTP ❌ : {$mail->ErrorInfo}", 'danger');
                
            }

            //informer l'utilisateur pour qu'il verifie sa boite de reception

            
            //enregistrerr le user
            //message de bienvenue
            //rediriger vers le dashbord

        } else{
            save_input_data();
        }

    } else {
        $errors[] = "Veuillez remplir tout les champs";
        save_input_data();
    }
    
} else {
    clear_input_data();
}


require('views/register.view.php');
?>