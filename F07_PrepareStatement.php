<?php
include("F02_ServerConnection.php");
$sql = $con->prepare("INSERT INTO bim VALUES(?,?,?)");
$sql->bind_param("iss",$id,$fname,$add);
$id=34;
$fname="Astha";
$add="Kapan";
$sql->execute(); 
$id=54;
$fname="Rashika";
$add="Paiyatar";
$sql->execute();
?>