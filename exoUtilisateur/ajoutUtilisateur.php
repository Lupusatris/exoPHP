<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout utilisateur</title>
</head>
<body>
    <h3>Ajouter un utilisateur :</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <p>Saisir votre nom :</p>
        <input type="text" name="nom_utilisateur">
        <p>Saisir votre prénom :</p>
        <input type="text" name="prenom_utilisateur">
        <p>Saisir votre mail :</p>
        <input type="text" name="mail_utilisateur">
        <p>Saisir votre mot de passe :</p>
        <input type="text" name="mdp_utilisateur">
        <p>Saisir une image :</p>
        <input type="file" name="img_utilisateur">
        <p><input type="submit" value="Ajouter"></p>
    </form>
    <?php
        //fichier de connexion à la BDD
        include 'connectBdd.php';
        //function requête SQL
        include 'function.php';
        //test si les champs existent et sont remplis
        if(isset($_POST['nom_utilisateur']) AND $_POST['nom_utilisateur'] !="" AND 
        isset($_POST['prenom_utilisateur']) AND $_POST['prenom_utilisateur'] !="" AND  
        isset($_POST['mail_utilisateur']) AND $_POST['mail_utilisateur'] !="" AND  
        isset($_POST['mdp_utilisateur']) AND $_POST['mdp_utilisateur'] !=""){
            $nomUtil = $_POST['nom_utilisateur'];
            $prenomUtil = $_POST['prenom_utilisateur'];
            $mailUtil = $_POST['mail_utilisateur'];
            $mdpUtil = $_POST['mdp_utilisateur'];
            if (isset($_FILES['img_utilisateur']) AND $_FILES['img_utilisateur'] !=""){
                $nomTemp = $_FILES['img_utilisateur']['tmp_name'];
                $nameFile = $_FILES['img_utilisateur']['name'];
                $imgUtil = "./images/$nameFile";
                move_uploaded_file($tmpName,$imgUtil);
            }
            insertUtilisateur($bdd,$nomUtil, $prenomUtil, $mailUtil, $mdpUtil, $imgUtil);
            echo "$nomUtil à été ajouté en BDD";
        }else{
            
            echo 'Veuillez remplir les champs du  formulaire';
        }
    ?>
</body>
</html>