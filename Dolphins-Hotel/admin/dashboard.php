<?php
    require('inc/essentials.php');
    adminLogin();
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>
<body class = "bg-dw">
    
    <div class="container-fluid text-light p-3 d-flex align-items-center justify-content-between" style="background:#03254c">
        <h3 class="mb-0">ADMIN DASHBOARD</h3>
            <a href="logout.php" >
             <i class="fa fa-sign-out me-2" style="color: white; font-size:40px;"></i>
            </a>
            
            
        
    </div>


    <?php require('inc/scripts.php'); ?>    
</body>
</html>