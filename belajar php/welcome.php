<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<style>
    body {
        padding: 0;

display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
background: red;

    }

    .centre {
        background: green;
        border-radius:20px;
        margin-top: 150px;
        padding: 25px
    }
</style>
<body>
    <div class="centre">
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="logout.php">Logout?</a>
    </div>
</body>
</html>
