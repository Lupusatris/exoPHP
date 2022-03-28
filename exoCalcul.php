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
        <p>Saisir un nombre :</p>
        <input type="text" name="nbr1">
        <p>Saisir un nombre :</p>
        <input type="text" name="nbr2">
        <p>Saisir un Opérateur (+,-,*,/) :</p>
        <input type="text" name="operateur">
        <p><input type="submit" value="Calculer"></p>
    </form>
    <?php
        // Variable
        $saut="<br>";
    ?>
    <?php
        // Code
        if(isset($_POST['nbr1']) AND isset($_POST['nbr2']) AND isset($_POST['operateur']) 
        AND $_POST['nbr1'] != "" AND $_POST['nbr2'] != "" AND $_POST['operateur'] != ""
        AND is_numeric($_POST['nbr1']) AND is_numeric($_POST['nbr2'])){
            $nbr1 = $_POST['nbr1'];
            $nbr2 = $_POST['nbr2'];
            $op = $_POST['operateur'];
            switch ($_POST['operateur']) {
                case '+':
                    $resultat=$nbr1+$nbr2;
                    break;
                case '-':
                    $resultat=$nbr1-$nbr2;
                    break;
                case '*':
                    $resultat=$nbr1*$nbr2;
                    break;
                case '/':
                    $resultat=$nbr1/$nbr2;
                    break;
                default:
                    echo "Vous n'avez pas mis un operateur valide";
                    break;
            }
            $resultat=round($resultat,3);
            echo "Le resultat de $nbr1 $op $nbr2 est $resultat $saut";
        }else{
            echo "Veuillez remplir les champs du formulaire avec des nombres et un opérateur $saut";
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