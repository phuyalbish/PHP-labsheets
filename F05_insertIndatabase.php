<?php
$con = mysqli_connect("localhost","root","","student");
    $sql = "INSERT INTO bim VALUES(34,'Bishal','Kavresthali')";
    if(mysqli_query($con,$sql)){
        print "Successfuly inserted value.";
    }
    else{
        die("Unable to Insert Value".mysqli_error($con));
    }

?>