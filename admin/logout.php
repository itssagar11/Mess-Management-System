<?php 
session_start();

if(session_destroy()){
header( 'Location:../html/index.php');
    }
exit;
?>