<?php
require_once 'Thread.php';
session_start();
var_dump($_POST);
var_dump($_SESSION);
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
else{
    $username = -1;
}
if(isset($_GET['thread_id']) and isset($_POST['message'])) {
    Thread::PostMessage($_GET['thread_id'], $username, $_POST['message']);
    header("Location: readThread.php?id=".$_GET['thread_id']."&topic=".$_GET['thread_name']);
    exit;
}

exit;