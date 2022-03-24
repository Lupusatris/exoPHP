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
        $i=45;
    ?>
    <?php
        // Code
        for($nbr=$i+1;$nbr<$i+11;$nbr++){
            echo "$nbr $saut";
        }
        echo "$saut";
        $nbr=$i+1;
        while($nbr<$i+11){
            echo "$nbr $saut";
            $nbr++;
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