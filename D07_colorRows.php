<html>
<head>
    <title>Chess Board</title>
</head>
<body>
    <?php
        print "<table border='1' width='30px' height='300px' cellspacing='0' cellpadding='0' outline='none'>";
            
            for($j=0; $j<10; $j++){
                print "<tr>";
                if($j%2==0) print "<td></td>";
                else print "<td bgcolor='black'></td>";
            print "</tr>";
            }
        print "</table>";
    ?>
</body>
</html>