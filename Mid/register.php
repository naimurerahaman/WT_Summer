<?php
$message = ""; 

function validatePasswordStrength($password) {
    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';
    return preg_match($pattern, $password);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fullname = htmlspecialchars($_POST['fullname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (empty($fullname) || empty($email) || empty($password) || empty($confirm_password)) {
        $message = "All fields are required!";
    } elseif (!preg_match("/@/", $email) || !preg_match("/\./", $email)) {
        $message = "Invalid Email!";
    } elseif (!validatePasswordStrength($password)) {
        $message = "Password must be at least 8 characters long and include at least one lowercase letter, one uppercase letter, one number, and one special character.";
    } elseif ($password !== $confirm_password) {
        $message = "Passwords do not match!";
    } else {
        $message = "Registration successful for $fullname!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="register.css">
</head>
<body>
    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="book.php">Books</a>
      <a href="category.php">Category</a>
      <a href="request.php">Request Book</a>
    </nav>

    <div class="register-container">
      <h1>Register</h1>
      <p class="subtitle">Get access to unlimited download of free ebook</p>

      <form action="register.php" method="POST" class="register-form">
        <label for="fullname">Full name*</label>
        <input type="text" id="fullname" name="fullname" value="<?php echo isset($fullname) ? htmlspecialchars($fullname) : ''; ?>">

        <label for="email">Email*</label>
        <input type="email" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">

        <label for="password">Password*</label>
        <input type="password" id="password" name="password">

        <label for="confirm_password">Confirm Password*</label>
        <input type="password" id="confirm_password" name="confirm_password">

        <button type="submit" class="register-btn">Register</button>
      </form>

      <p class="login-text">
        Have an account? <a href="login.php">Login</a>
      </p>

       <?php if (!empty($message)): ?>
    <?php
    if (strpos($message, 'successful') !== false) {
    ?>
        <p id="message" style="text-align:center; font-weight:bold; color: green;">
            <?php echo $message; ?>
        </p>
    <?php
    } else {
    ?>
        <p id="message" style="text-align:center; font-weight:bold; color: red;">
            <?php echo $message; ?>
        </p>
    <?php
    }
    ?>
<?php endif; ?>
    </div>
</body>
</html>