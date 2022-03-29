<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste utilisateurs</title>
</head>
<body>
    <h3>Liste des utilisateurs :</h3>
    <form action="" method="post">
    <?php
        //fichier de connexion à la BDD
        include 'connectBdd.php';
        //function requête SQL
        include 'function.php';
        showAllUtilisateur($bdd);
    ?>
        <input type="submit" value="Supprimer">
    </form>
    <?php
        if(isset($_GET['error'])){
            echo "<p>Veuillez sélectionner un utilisateur</p>";
        }
        //vérification de la super globale $_POST['id_util']
        if(isset($_POST['id_util'])){
            //boucle pour parcourir chaque case cochés ($value équivaut à value en HTML)
            foreach($_POST['id_util'] as $value){
                deleteUtilisateur($bdd, $value);
                echo "<p>Suppression de l'article $value</p>";
            }
            //Script JS pour redirection vers showUtilisateur.php dans 1500 ms 
            echo '<script>
            setTimeout(()=>{
                document.location.href="showUtilisateur.php"; 
            }, 1500);</script>';
            //header('Location: showUtilisateur.php');
        }
        else{
            echo "<p>Veuillez cocher un ou plusieurs utilisateur à supprimer</p>";
        }
    ?>
</body>
</html>