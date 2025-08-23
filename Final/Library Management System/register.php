<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
    </div>
    <div class="register-container">
    <h1>Register</h1>
    <p class="subtitle">Get access to unlimited download of free ebook</p>

    <form action="register_process.php" method="POST" class="register-form">
      <label for="fullname">Full name*</label>
      <input type="text" id="fullname" name="fullname" required>

      <label for="email">Email*</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password*</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm_password">Confirm Password*</label>
      <input type="password" id="confirm_password" name="confirm_password" required>

      <button type="submit" class="register-btn">Register</button>
    </form>

    <p class="login-text">
      Have an account? <a href="login.php">Login</a>
    </p>
  </div>

</body>
</html>
