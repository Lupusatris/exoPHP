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
        $a=-5;
        $b=2;
    ?>
    <?php
        // Code
        function positifEtNegatif($nombre){
            if ($nombre>=0){
                return "$nombre est positif.";
            }else{
                return "$nombre est negatif.";
            }
        }
        $resultata=positifEtNegatif($a);
        echo "$resultata $saut";
        $resultatb=positifEtNegatif($b);
        echo "$resultatb $saut";
    ?>
    <!-- git config --global user.email claudeblandin@yahoo.fr 
git config --global user.name Lupusatris
git add *
git commit -m "ajout fichier"
git push https://github.com/Lupusatris/exoPHP master
-->
</body>
</html>