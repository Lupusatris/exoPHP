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
        $nbr =5 ;
        $prenom="claude";
        $bool=false;
    ?>
    <?php
        // Code
        echo "nbr=$nbr $saut";
        echo gettype($nbr),$saut;
        echo "prenom=$prenom $saut";
        echo gettype($bool),$saut;
        echo 'mon prénom : '.$prenom.'<br>';
        echo "mon prénom : $prenom<br>";
        echo "mon prénom : {$prenom}<br>";  
    ?>
</body>
</html>