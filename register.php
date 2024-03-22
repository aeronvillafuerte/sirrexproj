<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "noteapp"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST["first-name"];
    $lastname = $_POST["last-name"];
    $username = $_POST["user-name"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO logintbl (f_name, l_name, user_name, l_email, pass_word) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $username, $email, $password);

    if ($stmt->execute()) {
        echo '<script>alert("You are successfully registered!");</script>';
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE NOTES APPLICATION</title>
    <link rel="stylesheet" href="register.css"> 
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

        <div id="notelt-container">
            <h1>Register</h1>

            <form id="registration-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div>
                    <label for="first-name">First Name:</label>
                    <input type="text" id="first-name" name="first-name" required>
                </div>
               
                <div>
                    <label for="last-name">Last Name:</label>
                    <input type="text" id="last-name" name="last-name" required>
                </div>
               
                <div>
                    <label for="user-name">Username:</label>
                    <input type="text" id="user-name" name="user-name" required>
                </div>
               
                <div>
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>
               
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div>
                    <label for="con-password">Confirm Password:</label>
                    <input type="password" id="con-password" name="con-password" required>
                </div>  
               
                <button type="button" id="sign-in-button" onclick="validateForm()" style = "background-color:pink ;color: black; margin-top: 5px;margin-bottom: 10px; padding: 5px 50px; border-radius: 40px;font-size: 16px; align-items: center; display : block; margin: auto;">REGISTER</button>
            </form>
        </div>

        <script>
            function validateForm() {
                var firstname = document.getElementById("first-name").value;
                var lastname = document.getElementById("last-name").value;
                var username = document.getElementById("user-name").value;
                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("con-password").value;

                if (firstname.trim() == "") {
                    alert("Please enter your first name");
                    return false;
                }
                
                if (lastname.trim() == "") {
                    alert("Please enter your last name");
                    return false;
                }
                if (username.trim() == "") {
                    alert("Please enter your username");
                    return false;
                }

                if (email.trim() == "") {
                    alert("Please enter your email");
                    return false;
                }

                if (password.trim() == "") {
                    alert("Please enter your password");
                    return false;
                }

                if (confirmPassword.trim() == "") {
                    alert("Please confirm your password");
                    return false;
                }

                if (password !== confirmPassword) {
                    alert("Passwords do not match");
                    return false;
                }

                // If all validations pass, submit the form
                document.getElementById("registration-form").submit();
            }
        </script>
    </div>
</body>
</html>