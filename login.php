<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["user-name"];
    $password = $_POST["password"];

    // Connect to your database (replace the placeholders with your actual database credentials)
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "noteapp";

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to fetch user by username
    $sql = "SELECT * FROM logintbl WHERE user_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Username exists, fetch the user data
        $row = $result->fetch_assoc();
        
        // Verify password
        if ($password === $row["pass_word"]) { // Compare plain text passwords
            // Password is correct, set session and redirect to index.php
            session_start();
            $_SESSION["username"] = $row["user_name"];
            header("Location: dashboard.php");
            exit;
        } else {
            // Password is incorrect, set password error message
            $passwordErr = "Invalid password";
        }
    } else {
        // Username does not exist, set username error message
        $usernameErr = "Invalid username";
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE NOTES APPLICATION</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
</head>
<body>
    <div class="container">
        <header>
            <h1 id="notelt-title"><span class="do">Do</span><span class="note">Note!</span></h1>
            <nav class="navigation">
                <a href="index.php">HOME</a>
                <a href="register.php">REGISTER</a>
                <a href="login.php">LOGIN</a>
            </nav>
        </header>
        <div class="wrapper">
            <h1>Login</h1>
            <form action="login.php" method="post" id="loginForm" onsubmit="return validateForm()">
                <div class="input-box">
                    <input type="text" name="user-name" id="user-name" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <?php if(isset($usernameErr)): ?>
            <div class="error" style= "color: red"><?php echo $usernameErr; ?></div>
            <?php endif; ?>
            
                <div class="input-box">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                
                
            <?php if(isset($passwordErr)): ?>
            <div class="error" style= "color: red"><?php echo $passwordErr; ?></div>
            <?php endif; ?>
               <br>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="button">Login</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="#">Register</a></p>
                </div>
            </form>
        
        </div>
    </div>
    <script>
        function validateForm() {
            var username = document.getElementById("user-name").value;
            var password = document.getElementById("password").value;
            // Perform your validation here
            if (username.trim() === "") {
                alert("Please enter your username");
                return false;
            }
            if (password.trim() === "") {
                alert("Please enter your password");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
