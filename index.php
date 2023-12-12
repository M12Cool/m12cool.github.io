<?php
session_start(); // Start or resume a session

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION["loginUsername"])) {
    header("Location: login.php");
    exit();
}

// Your protected content or functionality goes here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["loginUsername"]; ?>!</h2>
    
    <!-- Your protected content goes here -->

    <form action="index.php?id=101" method="post">
        <!-- Logout button -->
        <input type="submit" value="Logout">
    </form>
</body>
</html>
