<?php
    // véfification de l'utilisateur et du mot de passe
    if ($_POST['user']!=='admin' && $_POST['motDePasse'] !== 'maison'){
      header('Location: admin.php');
      // si le compte n'est pas correct on revient sur la page d'authentification 
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

<!-- INSERTION de la page connecxion à la BDD-->    
<?php 

//je test si le fichier connect.php existe bien
   $connect = "connect.php";
   if(file_exists($connect)){
       include $connect;
   }

   //permet de joindre les trois tables
   $cmd  ="SELECT *, DATE_FORMAT(TR.resadate,'%d/%m/%Y') as resadatefr FROM speakeasytokyo_user TU ";
   $cmd .='left join speakeasytokyo_reservation TR on TU.id = TR.id_user ';
   $cmd .='left join speakeasytokyo_message TM on TU.id = TM.id_user ';
   $resultat = $connexion->query($cmd);
   
?>

    <div id="logo-admin"></div>
    <h1 id="pageAdministrateur">Traitement des données utilisateurs</h1>

    <div id="bdd">

        <div id="table-user">
            <table class="table-bdd">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>mail</th>
                        <th>Pass Sanitaire</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Nbr de pers</th>
                        <th>Message</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                      foreach ($resultat as $resa){
                    ?>
                    <tr>
                        <td><?= $resa['id']?></td>
                        <td><?= $resa['nom']?></td>
                        <td><?= $resa['prenom']?></td>
                        <td><?= $resa['telephone']?></td>
                        <td><?= $resa['mail']?></td>
                        <td><?= $resa['pass_sanitaire']===1?'Oui':'Non'?></td>
                        <td><?= $resa['resadatefr']?></td>
                        <td><?= $resa['heure']?></td>
                        <td><?= $resa['nbre_de_pers']?></td>
                        <td><?= $resa['message']?></td>

                    </tr>
                    <?php
                      }
                   ?>

                </tbody>
            </table>

        </div>
    </div>

    <div>
        <button id="retour"><a href="index.php">Retour page d'accueil</a></button>
    </div>

</body>

</html>