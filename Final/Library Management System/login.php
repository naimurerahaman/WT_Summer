<!DOCTYPE html>
<html>
<head>
  <title>Library Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
    </div>
  <div class="login-container">
    <h2>Login</h2>
    <form action="#" method="post">
      <label for="email">Email*</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="password">Password*</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

      <button type="submit" class="btn">Login</button>

      <div class="extra-links">
        <a href="#">Forgot password?</a><br>
        <span>Don't have an account? <a href="register.php">Register</a></span>
      </div>
    </form>
  </div>

</body>
</html>
