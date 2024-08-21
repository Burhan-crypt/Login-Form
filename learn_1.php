<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login Page</title>
    <link rel="stylesheet" href="learn_1.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            
            <button type="submit">Login</button>
        </form>

        <div class="message">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve the input values from the form
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $confirm_password = $_POST["confirm_password"];

                    // Simple validation to check if passwords match
                    if ($password === $confirm_password) {
                        echo "<p>Welcome, $username! You have logged in successfully.</p>";
                    } else {
                        echo "<p>Passwords do not match. Please try again.</p>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
