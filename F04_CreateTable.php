<?php
    $con = mysqli_connect("localhost","root","","student");
    $sql = "CREATE TABLE bim(id int,name VARCHAR(20),address varchar(20))";
    if(mysqli_query($con,$sql)){
        print "Created table Successfully!";
    }
    else{
        die("Unable to add table".mysqli_error($con));
    }
?>