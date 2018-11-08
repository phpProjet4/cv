<?php
session_start();
var_dump(session_destroy());
header('location:../index.php');

?>