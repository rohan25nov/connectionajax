<?php
session_start();
include "../sql.php";
$uname=$_GET['username'];
$pass=$_GET['password'];
$valid=0;
$str="select * from login where username='$uname' and password='$pass' and ActiveFlag=1";
$res=mysqli_query($sql,$str);
if(mysqli_num_rows($res)>0)
{
    $valid=1;
    $_SESSION['isLogged']=true;
}
echo json_encode($valid);

