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
        $i=0;
        $tab=[];
        $tab1=[];
    ?>
    <?php
        // Code
        for($i;$i<10;$i++){
            if ($i==0){
                $tab[$i]=1;
            }else{
                $tab[$i]=$tab[$i-1]+2;
            }
            echo $tab[$i], "$saut";
        }
        echo "$saut";
        $i=0;
        while($i<10){
            if ($i==0){
                $tab1[$i]=1;
            }else{
                $tab1[$i]=$tab1[$i-1]+2;
            }
            echo $tab1[$i], "$saut";
            $i++;
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
