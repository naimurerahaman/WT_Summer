
<!DOCTYPE html>
<html>
<head>
  <title>Library Login</title>
  <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>


  <nav class="navbar">
    <a href="home.php">Home</a>
    <a href="book.php">Books</a>
    <a href="category.php">Category</a>
    <a href="request.php">Request Book</a>
  </nav>  

  <div class="login-container">
    <h2>Login</h2>

    
    <form action="" method="post" onsubmit="return validateLogin()">
      <label for="email">Email*</label>
      <input type="email" id="email" name="email" placeholder="Enter your email">

      <label for="password">Password*</label>
      <input type="password" id="password" name="password" placeholder="Enter your password">

      <button type="submit" class="btn">Login</button>

      <p id="message"></p>

    <?php
      $adminEmail = "admin@example.com";
      $adminPassword = "123";

      $error = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

      if ($email === $adminEmail && $password === $adminPassword) {
        header("Location: adminHome.php");
        exit();
       } else {
        $error = "Invalid email or password!";
      }
      }

      if ($error != "") {
       echo "<p style='color:red;'>$error</p>";
      }
    ?>
      <div class="extra-links">
        <a href="#">Forgot password?</a><br>
        <span>Don't have an account? <a href="register.php">Register</a></span>
      </div>
    </form>
      
  </div>
  

</body>
</html>