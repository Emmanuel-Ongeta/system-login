<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin: 20px 0;
        }
        label {
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        p {
            text-align: center;
            color: #f00;
            font-weight: bold;
        }
        a {
            text-align: center;
            display: block;
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .show {
            display: block !important;
        }
        .hide {
            display: none !important;
        }
    </style>
    <script src="script.js"></script>
</head>
<body>
    <div class="container" id="loginContainer">
        <?php if (!isset($_SESSION["user_id"])): ?>
            <h2>Login</h2>
            <form id="loginForm" method="POST" action="login.php">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br><br>
                <input type="submit" value="Login">
            </form>
            <a href="#" id="showSignupForm">Sign up here</a>
        <?php else: ?>
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION["user_id"]); ?>!</h2>
            <p>You are now logged in.</p>
            <form method="POST" action="logout.php">
                <input type="submit" value="Logout">
            </form>
        <?php endif; ?>
    </div>
    <div id="signupContainer" class="container hide">
        <h2>Sign Up</h2>
        <form id="signupForm" method="POST" action="signup.php">
            <label for="newUsername">Username:</label><br>
            <input type="text" id="newUsername" name="newUsername"><br><br>
            <label for="newPassword">Password:</label><br>
            <input type="password" id="newPassword" name="newPassword"><br><br>
            <input type="submit" value="Sign Up">
        </form>
        <a href="#" id="showLoginForm">Back to Login</a>
        <p id="message"></p>
    </div>
</body>
</html>
