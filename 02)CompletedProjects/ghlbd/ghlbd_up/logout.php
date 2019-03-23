<?php
session_start();
unset($_SESSION['member_ID']);
unset($_SESSION['member_Type']);
header('Location:../index.php');
?>