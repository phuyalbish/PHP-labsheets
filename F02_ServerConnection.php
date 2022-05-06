<?php

    $con = mysqli_connect("localhost","root","","student");
    if(!$con){
        die("Can't connect to the database".mysqli_error($con));
    }
    else{
        print "Successfully Cnnected to the server.";
    }
?>