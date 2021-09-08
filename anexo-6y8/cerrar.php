<?php
session_start();
   unset( $_SESSION['noControl']);
header("Location: index.php");
?>