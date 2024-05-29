<?php
require_once 'User.php';
User::logout();
header('location: board.php');