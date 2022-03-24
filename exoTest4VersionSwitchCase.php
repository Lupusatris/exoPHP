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
    ?>
    <?php
        // Code
        function categorie($nbr){
            switch ($nbr) {
                case $nbr>=12:
                    return '"Cadet" apres 12 ans';
                case $nbr>=10:
                    return '"Minime" de 10 à 11 ans';
                case $nbr>=8:
                    return '"Pupille" de 8 à 9 ans';
                case $nbr>=6:
                    return '"Poussin" de 6 à 7 ans';
                default:
                    return 'Trop jeune pour jouer';
            }
        }
        for($a=13;$a>3;$a--){
            $resultat=categorie($a);
            echo "Age = $a, $resultat $saut";
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