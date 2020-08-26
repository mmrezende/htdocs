<?php
    session_start();
    
    echo isset($_SESSION['email'])?$_SESSION['email']:"nenhum email foi definido";
    $_SESSION['email'] = "mateusmendoncadr@gmail.com";
?>