<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
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
        if(isset($_POST['prixArt']) AND isset($_POST['nbArt']) AND isset($_POST['tva']) 
        AND $_POST['prixArt'] != "" AND $_POST['nbArt'] != "" AND $_POST['tva']
        AND is_numeric($_POST['prixArt']) AND is_numeric($_POST['nbArt']) AND is_numeric($_POST['tva'])){
            $nbr1 = $_POST['prixArt'];
            $nbr2 = $_POST['nbArt'];
            $nbr3 = $_POST['tva'];
            $resultat = $nbr1 * $nbr2 * ($nbr3/100+1);
            echo "Le prix d'un article est égal à : $nbr1 $saut";
            echo "Le nombre d'article est égal à : $nbr2 $saut";
            echo "La taxe est égale à : $nbr3 $saut";
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