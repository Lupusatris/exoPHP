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
        $a=1;
        $b=2;
        $c=3
    ?>
    <?php
        // Code
        function plusGrand($nbr1,$nbr2,$nbr3){
            if ($nbr1>$nbr2 && $nbr1>$nbr3){
                return $nbr1;
            }else if($nbr2>$nbr3){
                return $nbr2;
            }else{
                return $nbr3;
            }
        }
        $resultat=plusGrand($a,$b,$c);
        echo "$resultat est le plus grand $saut";
        [$a,$b,$c]=[$b,$c,$a];
        $resultat=plusGrand($a,$b,$c);
        echo "$resultat est le plus grand $saut";
        [$a,$b,$c]=[$b,$c,$a];
        $resultat=plusGrand($a,$b,$c);
        echo "$resultat est le plus grand $saut";
    ?>
    <!-- git config --global user.email claudeblandin@yahoo.fr 
git config --global user.name Lupusatris
git add *
git commit -m "ajout fichier"
git push https://github.com/Lupusatris/exoPHP master
-->
</body>
</html>