<?php
    $con = mysqli_connect("localhost","root","");
    $sql = "CREATE DATABASE student";
    if(mysqli_query($con,$sql)){
        print "Created a database";
    }
    else{
        die("Unable to create a database".mysqli_error($con));
    }
?>