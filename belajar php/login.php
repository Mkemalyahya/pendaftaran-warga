<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            padding: 0;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: red;
        }

        .content {
            background: green;
            padding: 40px; 
            border-radius: 15px;
           margin-top: 150px;
        
            
        }
    </style>
</head>
<body>

    <div class="content">
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
        <a href="register.php">register account?</a>
    </form>
    </div>

</div>

    <?php
    session_start();

    if (isset($_POST['login'])) {
        include('config.php');

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $row['username'];
                header("Location: welcome.php");
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that username.";
        }

        $conn->close();
    }
    ?>
   
</body>
</html>
