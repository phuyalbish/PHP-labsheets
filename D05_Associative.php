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
    $arr = ["Bishal"=>"Fail","Prabin"=>"Pass","Sanish"=>"Pass","Ravi"=>"Fail"];
    foreach($arr as $key => $value){
        print "$key = $value<br/>";
    }
    print "<br/>Modifying an associative array by replacing value:<br/>";
    foreach($arr as $key => $value){
        if($value =="Pass") $value="Fail";
        else $value="Pass";
        print "$key = $value<br/>";
    }

    ?>
</body>
</html>