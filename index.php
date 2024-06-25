<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
<!-- Login Form -->
<div class="login-container">
    <div class="container">
        <form action="includes/php/action_form.php" method="post">
            <h2>Login</h2>
            <table class="login-table">
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" placeholder="Enter your email" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" placeholder="Enter your password" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <!-- error message -->
                        <div class="error-message">
                            <?php
                            if (isset($_GET['error'])) {
                                echo htmlspecialchars($_GET['error']);
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

</body>
</html>
