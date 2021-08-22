
<?php
session_start();
if(session_destroy())
{
header('location:../../Responsivepage/view/login.php');
}
?>