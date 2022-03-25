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
        <p>saisir le premier nombre :</p>
        <input type="text" name="Nombre1">
        <p>saisir le deuxieme nombre :</p>
        <input type="text" name="Nombre2">
        <button type="submit">Envoyer</button>
    </form>
    <?php
        // Variable
        $saut="<br>";
    ?>
    <?php
        // Code
        if(isset($_GET['Nombre1']) AND isset($_GET['Nombre2']) 
        AND $_GET['Nombre1'] != "" AND $_GET['Nombre2'] != ""
        AND is_numeric($_GET['Nombre1']) AND is_numeric($_GET['Nombre2'])){
            $nbr1 = $_GET['Nombre1'];
            $nbr2 = $_GET['Nombre2'];
            $resultat = $nbr1 + $nbr2;
            echo "La somme de $nbr1 et $nbr2 est égale à : $resultat $saut";
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