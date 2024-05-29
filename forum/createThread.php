<?php
require_once 'Thread.php';
session_start();
var_dump($_POST);
var_dump($_GET);
var_dump($_SESSION);
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $user_id = $_SESSION['user_id'];
}
else{
    $username = 'Anon';
    $user_id = -1;
}
if(isset($_POST['topic'])){
    Thread::createThread($_POST['topic'], $username, $user_id);
    header("Location: board.php");
    exit;
}