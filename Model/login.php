<?php
    session_start(); 
    if (isset($_SESSION['admin'])) { // IF SESSION 'CLUB' IS ALREADY OPEN
        header('location: ../View/admin.php'); // REDIRECT TO MANAGEMENT PAGE
        exit();
    } elseif (isset($_SESSION['client'])) { // IF SESSION 'MEMBER' IS ALREADY OPEN
        header('location: ../View/repas.php'); // REDIRECT TO HOME PAGE
        exit();
    }

    if(isset($_POST['login'])){
        include 'DataBase.php';
        global $db;
    
        $user = $_POST['nom'];
        $mdp = $_POST['mdp'];
        $shapassword = sha1($mdp);

        $stmt = $db->prepare("SELECT id_client, nom_client, mdp_client, tel_client, address_client FROM client WHERE id_client = ? AND nom_client = ? AND mdp_client = ? AND tel_client = ? AND address_client = ?");
        $stmt->execute(array($user, $shapassword));
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

        if ($count > 0) {
            $_SESSION['client'] = $row->nom_client ;// SESSION USERNAME
            $_SESSION['id_client'] = $row->id_client ;// ID USER
            header('location: ../View/repas.php'); // REDIRECT VERS PAGE PRODUCTS
            exit();
        } 


        if (!$count > 0)
        {
            echo 'incooooooorrect';
        }
    }
?>