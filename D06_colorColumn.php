<html>
<head>
    <title>Chess Board</title>
</head>
<body>
    <?php
        print "<table border='1' width='300px' height='30px' cellspacing='0' cellpadding='0' outline='none'>";
            print "<tr>";
            for($j=0; $j<10; $j++){
                if($j%2==0) print "<td></td>";
                else print "<td bgcolor='black'></td>";
            }
            print "</tr>";
        print "</table>";
    ?>
</body>
</html>