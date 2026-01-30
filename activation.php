<?php
session_start();
require 'config/db.php';
require 'includes/functions.php';

if(!empty($_GET['p'])  && is_already_in_use('pseudo', $_GET['p'], 'users')  && !empty($_GET['token']) ){
    $pseudo = $_GET['p'];
    $token = $_GET['token'];

    $q = $db->prepare('select email, password from users where pseudo = ?');
    $q->execute([$pseudo]);

    $data = $q->fetch(PDO::FETCH_OBJ);
    $token_verif = sha1($pseudo.$data->email.$data->password);

    if($token == $token_verif){

        $q = $db->prepare('update users set active = "1" where pseudo = ?');
        $q->execute([$pseudo]);
        set_flash('Compte activé', 'success');
        redirect('login.php');

    } else {
        set_flash('Parametres invalide', 'danger');
        redirect('index.php');
    }



}else{
    redirect('index.php');
}