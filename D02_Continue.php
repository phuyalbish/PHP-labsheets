<!DOCTYPE html>
<html lang="en">
<head>
    <title>Continue</title>
</head>
<body>
    <?php
        for($i=1; $i<=10; $i++){
            if($i%2==0) continue;
            print "This is $i<br/>";

        }
    ?>
</body>
</html>