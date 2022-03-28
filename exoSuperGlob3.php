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
        <p>Saisir son nom :</p>
        <input type="text" name="nom">
        <p>Saisir son genre :</p>
        <select name="genre" >
            <option value="1">
                Autre
            </option>
            <option value="2">
                Homme
            </option>
            <option value="3">
                Femme
            </option>   
        </select>
        <p><input type="submit" value="Afficher"></p>
    </form>
    <?php
        // Variable
        $saut="<br>";
    ?>
    <?php
        // Code
        if(isset($_POST['nom']) AND $_POST['nom'] != "" ){
            $nom = $_POST['nom'];
            echo "Votre nom est $nom $saut";
        }else{
            echo "Veuillez remplir le champs du formulaire avec votre nom $saut";
        }
        switch ($_POST['genre']){
            case 2 :
                    echo "Vous avez choisi Homme $saut";
                    break;
            case 3 :
                    echo "Vous avez choisi Femme $saut";
                    break;
            default :
                    echo "Veuillez choisir un genre $saut";
                    break;
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