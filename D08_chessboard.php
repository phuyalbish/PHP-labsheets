<html>
<head>
    <title>Chess Board</title>
</head>
<body>
    <?php
        $count=1;
        print "<table border='1px' width='300px' height='300px' cellspacing='0'>";
        for($i=0; $i<8; $i++){
            print "<tr>";
            for($j=0; $j<8; $j++){
                if($i%2==1 && $j%2==1 || $i%2==0 && $j%2==0) print "<td>".$count++."</td>";
                else print "<td bgcolor='black'><font color='white'>".$count++."</font></td>";
            }
            print "</tr>";
        }
        print "</table>";
    ?>
</body>
</html>