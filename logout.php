<?php
/*
session_destroy();

*/
session_start();
include('users.php');
$us = new user();
$us -> logout();
header('location:./index.php');
?>