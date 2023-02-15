<?php require "./inc/session_start.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "./inc/head.php";?>
</head>
<body>
    <?php 
        if(!isset($_GET['vista']) || $_GET['vista'] == "" ){
            $_GET['vista']= "login";
        }
        if(is_file(".views/".$_GET['vista'].".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404" ){
            
            include './inc/navbar.php'; 

            include "./views/".$_GET['vista'].".php"; 

            include './inc/script.php'; 

        }else{
            
            if($_GET['vista'] == "login"){
                include "./views/login.php";
            }else{
                include "./views/404.php";
            }

        }
    
    ?>
    
</body>
</html>
