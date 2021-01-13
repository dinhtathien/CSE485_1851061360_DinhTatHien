<?php
    session_start();
    ob_start();
    define("TEMPLATE", true);
    require("connect.php");
    if(isset($_SESSION["user"]["mail"]) && isset($_SESSION["user"]["pass"])){
        include_once("dashboard.php");
    }else{
        include_once("login.php");
    }
?>