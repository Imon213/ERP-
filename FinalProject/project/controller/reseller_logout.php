<?php
    session_start();
    unset($_SESSION['flag']);
    header('location:../../Responsivepage/view/login.php');
    
?>