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
    $arr = [1,2,3,4,5,6];
    for($i=0; $i<6; $i++){
        print "$arr[$i]\t";
    }
    print "<br/>Modifying an array: adding 5 to each:<br/>";
    for($i=0; $i<6; $i++){
        $arr[$i] += 5;
        print "$arr[$i]\t";

    }

    ?>
</body>
</html>