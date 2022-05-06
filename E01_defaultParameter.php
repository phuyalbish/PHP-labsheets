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
        function add(int $a=20,float $b=30.4){
            return ($a+$b);
        }
        print "When both are not given ".add();
        print "<br/>When only a is given ".add(10);
        print "<br/>When only b is given ".add(15.5);
        print "<br/>When both are given ".add(10,15.5);
    ?>
</body>
</html>