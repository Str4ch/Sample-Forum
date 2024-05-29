<?php
require_once 'User.php';
var_dump($_POST);
$user_id=User::login($_POST['Uinput'], $_POST['Pinput']);
if($user_id!=-1){
    session_start();
    $_SESSION['user_id']=$user_id;
    $_SESSION['username']=$_POST['Uinput'];
    var_dump($_SESSION);
    header('location: board.php');
    exit;
}
else{
    header('location: login.php?Err=1');
}