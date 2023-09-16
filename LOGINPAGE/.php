<?php


$Username = "root";
$Password = "";
$Database = "login";
$ServerName = "localhost";

$con = mysqli_connect ($ServerName,$Database ,$Password ,$Username );

if (!con) {
    echo "error";
}
else {
    echo "success";
}

//login
include ".php";
if (isset($_POST ["login"]));
$Password = $_POST ["password"];
$Username = $_POST {"username"};
$sql = $_POST [select * from login where Username = " $Username" and Password = ""];

$result = ($con , $sql);
 $merge = mysqli_assoc_fetch ( $result);
 if ( $merge){
    echo ("welcome");
 }
else {
    echo ("invalid");
}
















?>