<?php
session_start();

$oldPassword = "123";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current = $_POST["current_password"];
    $new = $_POST["new_password"];
    $confirm = $_POST["confirm_password"];

    if ($current !== $oldPassword) {
        $_SESSION['msg'] = "Current password is wrong!";
    } elseif ($new !== $confirm) {
        $_SESSION['msg'] = "New password and Confirm password do not match!";
    } elseif (empty($new)) {
        $_SESSION['msg'] = "New password cannot be empty!";
    } else {
        $oldPassword = $new;
        $_SESSION['msg'] = "Password changed successfully!";
    }

    header("Location: changePassAdmin.php");
    exit();
}

if (isset($_SESSION['msg'])) {
    $message = $_SESSION['msg'];
    unset($_SESSION['msg']); 
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <link rel="stylesheet" href="../CSS/adminChangePass.css">
  <link rel="stylesheet" href="../CSS/sideBar.css">
</head>
<body>  
    </div>    
        <div class="logout">
        <a href="login.php" class="btn-logout"><button>Log Out</button></a>
    </div>

    <div class="sidebar">
        <a href="adminHome.php">Dashboard</a>
        
        <div class="dropdown">
            <a href="#" class="dropdown-btn">Books</a>
            <div class="dropdown-content">
                <a href="addBook.php">Add Book</a>
                <a href="manageBook.php">Manage Book</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#" class="dropdown-btn">Categories</a> 
            <div class="dropdown-content">
                <a href="addCategory.php">Add Category</a>
                <a href="manageCategory.php">Manage Category</a>
            </div>
        </div>
        <a href="adminIssueBook.php">Issue Books</a>
        <a href="viewStudentDetails.php">View Student Details</a>
        <a href="changePassAdmin.php">Change Password</a>
    </div>
  
  <div class="container">
    <h2>Change Password</h2>
    <form method="post">
      <label>Current Password</label>
      <input type="password" name="current_password">

      <label>New Password</label>
      <input type="password" name="new_password">

      <label>Confirm Password</label>
      <input type="password" name="confirm_password">

      <input type="submit" value="Change Password">
    </form>
    <div class="msg"><?php echo $message; ?></div>
  </div>
  <script src="../JS/sideBar.js"></script>
</body>
</html>
