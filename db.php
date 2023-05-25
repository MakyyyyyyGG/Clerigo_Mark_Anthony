<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "database") or die(mysqli_error($connection));    
?>
