<!-- INSERTION de la page connecxion à la BDD-->    
<?php 

//je test si le fichier connect.php existe bien
   $connect = "connect.php";
   if(file_exists($connect)){
       include $connect;
   }

// RECUPERATION DES DONNEES UTILISATEUR 
//préparation de la requete SQL

//table principale UTILISATEURS
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];

//table RESERVATION
$pass_sanitaire = $_POST['pass_sanitaire'];

$date = $_POST['date'];
$heure = $_POST['heure'];
$personne = $_POST['personne'];

//table MESSAGE
$message = $_POST['message'];
$reservationOk = true;

//AJOUT D'UNE LIGNE dans la table USER-SPEAKEASYTOKYO

$requete = $connexion->prepare("INSERT INTO speakeasytokyo_user (nom, prenom, telephone, mail )
VALUES (:nom, :prenom, :telephone, :mail)");

$resultat =  $requete->execute(array(
':nom'=>$nom,
':prenom'=>$prenom,
':telephone'=>$telephone,
':mail'=>$email));


if ($resultat){
    $idUser = $connexion->lastInsertId();
}
else {
    echo "Le client n'est pas ajouté ";
    $reservationOk = false;
    print_r($requete->errorInfo());
}

// récupérer l'id de l'utilisateur
// ajouter l'id de l'utilisateur dans les tables en dessous.

//AJOUT D'UNE LIGNE dans la table RESERVATION-SPEAKEASYTOKYO

$requete = $connexion->prepare("INSERT INTO speakeasytokyo_reservation (id_user,pass_sanitaire, resadate, heure, nbre_de_pers)
VALUES (:user_id, :pass_sanitaire, :resadate, :heure, :nbre_de_pers)");



$resultat =  $requete->execute(array(
':user_id' => $idUser,    
':pass_sanitaire'=>$pass_sanitaire,
':resadate'=>$date,
':heure'=>$heure,
':nbre_de_pers'=>$personne));

if (!$resultat){
    $reservationOk = false;
    echo "la réservation n'est pas ajoutée";
    print_r($requete->errorInfo());
}

//AJOUT D'UNE LIGNE dans la table MESSAGE-SPEAKEASYTOKYO

$requete = $connexion->prepare("INSERT INTO speakeasytokyo_message (id_user, message)
VALUES (:user_id, :message)");

$resultat =  $requete->execute(array(
    ':user_id' => $idUser,    
    ':message'=>$message));
    
    
    if (!$resultat){
        $reservationOk = false;
        echo "le message n'est pas ajouté ";
        print_r($requete->errorInfo());
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <!-- chargement des medias-queries -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=5.0,user-scalable=yes">


    <!-- Chargement de BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> Page traitement données formulaire SPEAK EASY TOKYO</title>

    <!-- Lien  fichier annexes css -->
    <link rel="stylesheet" href="style.css" type="text/css" />

</head>

<body>

    <p id="ajout">
        <?php


            if ($reservationOk){
                ?>
                Votre réservation a bien été validée
                <?php
            }else{
                ?>
                Réservation non complétée, veuillez recommencer
                <?php
            }
        ?>

    </p>
    

    <div>
        <button id="retour"><a href="index.php">Retour page d'accueil</a></button>
    </div>
</body>
</html>