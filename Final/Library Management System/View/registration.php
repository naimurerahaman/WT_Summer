<!DOCTYPE html>
<html>
<head>
  <title> Registration Form</title>
  <link rel="stylesheet" href="../CSS/registration.css" >
</head>
<body>
  <div class="container">
    <h2>Register</h2>
<?php
include "../View/config.php";
$success= $error = "";

$name = $phone = $password = $email ="";
$nameErr = $phoneErr = $passwordErr = $emailErr ="";
$successMsg = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match( "/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }


    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    }
    else {
        $email = test_input($_POST["email"]);
    }

   
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
            $phoneErr = "Phone number must be 10 to 15 digits";
        }
    }

    
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters";
        }
    }

    
    if (empty($nameErr) && empty($phoneErr) && empty($passwordErr) && empty($emailErr)) {
        $successMsg = "Registration successful!";

        $sql = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
        if ($conn->query($sql) === TRUE) {
            $success = "New record created successfully";
        } else {
            $error = "error".$conn-> error;
        }
    }
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}
?>

    <form method="post" action="">
      <input type="text" name="name"  placeholder="Enter your name"  value="<?php echo $name; ?>">
      <span class="error"> <?php echo $nameErr; ?></span>
      <br>

      <input type="email" name="email"  placeholder="Enter your email"  value="<?php echo $email; ?>">
      <span class="error"> <?php echo $emailErr; ?></span>
      <br>

      <input type="text" name="phone" placeholder="Enter your phone number" value="<?php echo $phone; ?>">
      <span class="error"> <?php echo $phoneErr; ?></span>
      <br>

      <input type="password" name="password" placeholder="Enter your password" value="">
      <span class="error"> <?php echo $passwordErr; ?></span>
      <br>

      <input type="submit" value="Register">
    </form>

    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($phoneErr) && empty($passwordErr)) {
      echo "<p class='success'>$successMsg</p>";
    
}
?>
</div>
</body>
</html>