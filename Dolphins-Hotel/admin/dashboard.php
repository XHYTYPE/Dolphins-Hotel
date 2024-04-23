<?php
    require('inc/essentials.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php'); ?>
    <style>
        #dashboard-menu{
            position: fixed;
            height: 100%;
        }
        @media screen and (max-width: 991px){
            #dashboard-menu{
                height: auto;
                width: 100%;
            }
            #main-content{
                margin-top:60px;
            }
        }
    </style>

</head>
<body class = "bg-dw">
    
   <?php include('inc/header.php'); ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, et iure. Deserunt nemo dolore quia non repellendus temporibus provident mollitia consectetur sapiente, vero doloribus ducimus facere, velit tenetur reprehenderit error!
            </div>
        </div>
    </div>
    
    <?php require('inc/scripts.php'); ?>    
</body>
</html>