<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <p>saisir le prix de l'article :</p>
        <input type="text" name="prixArt">
        <p>saisir le nombre d'article :</p>
        <input type="text" name="nbArt">
        <p>saisir la tva :</p>
        <input type="text" name="tva">
        <button type="submit">Envoyer</button>
    </form>
    <?php
        // Variable
        $saut="<br>";
    ?>
    <?php
        // Code
        if(isset($_GET['prixArt']) AND isset($_GET['nbArt']) AND isset($_GET['tva']) 
        AND $_GET['prixArt'] != "" AND $_GET['nbArt'] != "" AND $_GET['tva']
        AND is_numeric($_GET['prixArt']) AND is_numeric($_GET['nbArt']) AND is_numeric($_GET['tva'])){
            $nbr1 = $_GET['prixArt'];
            $nbr2 = $_GET['nbArt'];
            $nbr3 = $_GET['tva'];
            $resultat = $nbr1 * $nbr2 * ($nbr3/100+1);
            echo "Le prix TTC est égal à : $resultat $saut";
        }
        else{
            echo "Veuillez remplir les champs du formulaire avec des chiffres";
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