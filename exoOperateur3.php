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
        [$t, $o] = [5, 2];
        $c=$a+$b;
    ?>
    <?php
        // Code
        echo "a=$a $saut b=$b $saut $saut";
        echo "t=$t $saut o=$o $saut $saut";
        [$a, $b] = [$b, $a];
        echo "a=$a $saut b=$b $saut";
    ?>
</body>
</html>