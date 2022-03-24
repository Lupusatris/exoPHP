<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Variable
        $saut="<br>";
        $prixArticle=2.30;
        $nbrArticle=10;
        $tva=0.2;
        $total=calcul($prixArticle,$nbrArticle,$tva);
    ?>
    <?php
        // Code
        function calcul($prix,$nombre,$tva){
            return $prix*$nombre*$tva;
        }
        echo "prixArticle=$prixArticle $saut nbrArticle=$nbrArticle $saut tva=$tva $saut $saut total=$total $saut";
    ?>
    <!-- git config --global user.email claudeblandin@yahoo.fr 
git config --global user.name Lupusatris
git add *
git commit -m "ajout fichier"
git push https://github.com/Lupusatris/exoPHP master
-->
</body>
</html>
