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
        $tab = array(10, 25,6,33, 58,1,49,110);
    ?>
    <?php
        // Code
        function plusPetit($tableau){
            $min=$tableau[0];
            for($i=0;$i<count($tableau);$i++){
                if ($min>$tableau[$i]){
                    $min=$tableau[$i];
                }
            }
            return $min;
        }
        for($i=0;$i<count($tab);$i++){
            echo $tab[$i], "$saut";
        }
        $resultat=plusPetit($tab);
        echo "$saut valeur min = $resultat $saut";
    ?>
    <!-- git config --global user.email claudeblandin@yahoo.fr 
git config --global user.name Lupusatris
git add *
git commit -m "ajout fichier"
git push https://github.com/Lupusatris/exoPHP master
-->
</body>
</html>