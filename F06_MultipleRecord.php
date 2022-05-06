<?php
$con = mysqli_connect("localhost","root","","student");
$sql = "INSERT INTO bim VALUES(34,'Sanish','Kav');";
$sql .= "INSERT INTO bim VALUES(45,'Prabin','Dallu');";
$sql .= "INSERT INTO bim VALUES(67,'Ravi','Swoyambhu');";
        if($con->multi_query($sql) == TRUE){
            print "Successfuly inserted value.";
        }
        else{
            die("Unable to Insert Value".mysqli_error($con));
        }

?>