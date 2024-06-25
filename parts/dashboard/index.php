<?php
include('../../includes/php/check_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <h2>System</h2>
            <span>Coolest system ever.</span>
            <p></p>
            <!-- Incluir o menu -->
            <?php include('../../parts/menu.php'); ?>
        </div>
    </header>

    <!-- Container -->
    <div class="dashboard-container">
        <h3>Dashboard Content</h3>
        <!-- Conteúdo do Dashboard aqui -->
         <span><?php echo "Welcome, ", $_SESSION['email']; ?></span>
    </div>

</body>
</html>
