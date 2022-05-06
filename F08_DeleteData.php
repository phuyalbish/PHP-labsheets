<?php
$con = mysqli_connect("localhost","root","","student");
    $sql = "DELETE FROM bim  WHERE id=34";
    if(mysqli_query($con,$sql)){
        print "Successfuly Deleted value.";
    }
    else{
        die("Unable to Insert Value".mysqli_error($con));
    }

?>