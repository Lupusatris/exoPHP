<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier utilisateur</title>
</head>
<body>
    <h3>Modifier un utilisateur :</h3>
    <form action="" method="post">
        <p>Saisir votre nom :</p>
        <input type="text" name="nom_utilisateur">
        <p>Saisir votre prénom :</p>
        <input type="text" name="prenom_utilisateur">
        <p>Saisir votre mail :</p>
        <input type="text" name="mail_utilisateur">
        <p>Saisir votre mot de passe :</p>
        <input type="text" name="mdp_utilisateur">
        <p>Saisir une image :</p>
        <input type="text" name="img_utilisateur">
        <p><input type="submit" value="Modifier"></p>
    </form>
    <!--Import-->
    <?php
        //fichier de connexion à la BDD
        include 'connectBdd.php';
        //function requête SQL
        include 'function.php';
        //test si $_GET['id'] existe
        if(isset($_GET['id']) AND $_GET['id'] !=''){
            //stocke $_GET['id'] dans une variable $value
            $value = $_GET['id'];
            //test le contenu des champs du formulaire
            if(isset($_POST['nom_utilisateur']) AND $_POST['nom_utilisateur'] !="" AND 
            isset($_POST['prenom_utilisateur']) AND $_POST['prenom_utilisateur'] !="" AND  
            isset($_POST['mail_utilisateur']) AND $_POST['mail_utilisateur'] !="" AND  
            isset($_POST['mdp_utilisateur']) AND $_POST['mdp_utilisateur'] !="" AND  
            isset($_POST['img_utilisateur']) AND $_POST['img_utilisateur'] !=""){
                //stocket dans des variables les super globales POST
                $nomUtil = $_POST['nom_utilisateur'];
                $prenomUtil = $_POST['prenom_utilisateur'];
                $mailUtil = $_POST['mail_utilisateur'];
                $mdpUtil = $_POST['mdp_utilisateur'];
                $imgUtil = $_POST['img_utilisateur'];
                //appele la méthode updateUtilisateur
                updateUtilisateur($bdd,$nomUtil,$prenomUtil,$mailUtil,$mdpUtil,$imgUtil,$value);
                //afficher un message de confirmation
                echo "<p>$nomUtil à été modifié en BDD</p>";
            }
            //test si les champs du formulaire ne sont pas remplis
            else{
                echo '<p>Veuillez remplir les champs du  formulaire</p>';
            }
        }
        //test si l'id n'existe pas 
        else{
            header('Location: showUtilisateur.php?error');
        }
    ?>
</body>
</html>