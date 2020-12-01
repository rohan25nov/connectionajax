<?php
include '../sql.php';
$str="select * from login where ActiveFlag=1";
$res=mysqli_query($sql,$str);
$output=array();
while ($arr=mysqli_fetch_assoc($res))
{
    $output[]=$arr;
}
echo json_encode($output);
