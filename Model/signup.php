<?php 
include '../Includes/DataBase.php';
include '../Includes/functions.php';

    $nom = $mdp = $tel = $address = $nomERROR = $telERROR = $addressERROR =  $mdpERROR  ="";
    $Success ="";
    $isSuccess  =  true;

    
        if(isset($_POST['Inscription'])){

          $nom = checkInput($_POST['nom']);
          $mdp = checkInput($_POST['mdp']);
          $tel  = checkInput($_POST['tel']);
          $address = checkInput($_POST['address']);
          $hashedMdp = sha1($mdp);
          

          if(empty($nom)){
            $addressERROR = "Ce champ ne peut pas être vide";
            $isSuccess = false;
           }
           else{
             $stmt2 = $db->prepare("SELECT nom_client FROM client WHERE nom_client = ? ");
             $stmt2->execute(array($nom));
             $row2 = $stmt2->fetchAll();
             if($row2 != null)
             {
               $emailERROR = "Le nom existe déjà";
               $isSuccess = false;
             }
           }

          if(empty($address)){
            $nomERROR = "Ce champ ne peut pas être vide";
            $isSuccess = false;
          }

          if(empty($tel)){
            $telERROR = "Ce champ ne peut pas être vide";
            $isSuccess = false;
          }

          if(empty($mdp)){
            $mdpERROR = "Ce champ ne peut pas être vide";
            $isSuccess = false;
           }
           }
         
          // if($isSuccess){
          //     $status = false; 
          //     $stmt = $db->prepare("INSERT INTO client ( nom_client, mdp_client , tel_client, Address_client) VALUES (?, ?, ?, ?)");
          //     $stmt->execute(array($nom, $mdp, $tel, $address));

          //     $Success ='Success' ;
          //     header('refresh:2;url=../View/Home.php');
          // }
      
// }

// $nom = checkInput($_POST['nom']);
// $tel  = checkInput($_POST['tel']);
// $address = checkInput($_POST['address']);
// $mdp = checkInput($_POST['mdp']);
// $hashedMdp = sha1($mdp);