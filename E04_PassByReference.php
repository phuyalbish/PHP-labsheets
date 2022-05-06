<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Parameter</title>
</head>
<body>
    <?php
        $a=23;
        $b=34;
        function swap(&$x,&$y){
            $swap = $x;
            $x = $y;
            $y = $swap;
        }
        print "Before swap: A=".$a." and B=".$b;
        swap($a,$b);
        print "<br/>After swap: A=".$a." and B=".$b;

    ?>
</body>
</html>