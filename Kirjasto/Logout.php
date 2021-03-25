<?php session_start(); 
 
if (isset($_SESSION['login_user'])){
    unset($_SESSION['login_user']); // xóa session login
    header ("Location: Kirjasto.php");
}
?>
