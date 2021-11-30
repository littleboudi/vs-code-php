<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <!-- chargement des medias-queries -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=5.0,user-scalable=yes">


    <!-- Chargement de BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Page administrateur SPEAK EASY TOKYO</title>

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
?>
    <div id="logo-admin"></div>

    <div id="content">

        <h1 id="pageAdministrateur">Page Administrateur</h1>
        <div id="encadre">
            <form action="traitement.php" method="POST">
            <ul id="page-admin">
                <li>
                    <label class="utilisateur" for="user">Nom d'utilisateur</label>
                    <input class="password" id="user" type="text" name="user">
                </li>

                <li>
                    <label class="utilisateur" for="motDePasse">Mot de passe</label>
                    <input class="password" id="motDePasse" type="password" name="motDePasse">
                </li>

                <input type="submit" value="se connecter">
            </ul>
            </form>
        </div>
    </div>





</body>

</html>