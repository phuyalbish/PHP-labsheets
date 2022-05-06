<?php
$con = mysqli_connect("localhost","root","","student");
    $sql = "UPDATE bim SET name='Ashish',address='Chyamasing' WHERE id=54 ";
    if(mysqli_query($con,$sql)){
        print "Successfuly Updated value.";
    }
    else{
        die("Unable to Insert Value".mysqli_error($con));
    }

?>