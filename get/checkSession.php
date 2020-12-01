<?php
session_start();
$valid=0;
if(isset($_SESSION['isLogged']))
    $valid=1;
echo json_encode($valid);
