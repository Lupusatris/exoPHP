<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
</head>
<body>
    <h3>Ajouter un produit :</h3>
    <form action="" method="post">
        <p>Saisir le nom du produit :</p>
        <input type="text" name="nom_produit">
        <p>Saisir le contenu du produit:</p>
        <textarea name="contenu_produit" cols="30" rows="10">
        </textarea>
        <p><input type="submit" value="Ajouter"></p>
    </form>
    <?php
        // Variable
        $saut="<br>";
    ?>
    <?php
        // Code
        //fichier de connexion à la BDD
        include 'connectBdd.php';
        //function requête SQL
        include 'function.php';
        if(isset($_POST['nom_produit'])AND isset($_POST['contenu_produit']) AND
        $_POST['nom_produit'] != "" AND $_POST['contenu_produit'] !=""){
            $nom = $_POST['nom_produit'];
            $content = $_POST['contenu_produit'];
            insertProduit($bdd,$nom, $content);
            echo "$nom à été ajouté en BDD $saut";
        }
        else{
            echo "Veuillez remplir les champs du  formulaire $saut";
        }
    ?>
    <!-- git config --global user.email claudeblandin@yahoo.fr 
git config --global user.name Lupusatris
git add *
git commit -m "ajout fichier"
git push https://github.com/Lupusatris/exoPHP master
-->
</body>
</html>