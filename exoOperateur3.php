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
        // Initialisation Variable
        $saut="<br>";
        // [$a, $b] = array(15, 23);
        [$a, $b] = [15, 23];
        $c=$a+$b;
    ?>
    <?php
        // Code
        echo "a=$a $saut b=$b $saut $saut";
        [$a, $b] = [$b, $a];
        echo "a=$a $saut b=$b $saut";
    ?>
    <!-- git config --global user.email claudeblandin@yahoo.fr 
git config --global user.name Lupusatris
git add *
git commit -m "ajout fichier"
git push https://github.com/Lupusatris/exoPHP master
-->
</body>
</html>