<!DOCTYPE html>
<html>
    <head>
        <title>Admin Book Management</title>
        <link rel="stylesheet" href="../CSS/bookAdmin.css">
        <link rel="stylesheet" href="../CSS/sideBar.css">
    </head>
    <body>
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
        <div class="content">
            <h1>Book</h1>
            <a class="addBook" href="addBook.php">Add Book</a>
            <a class="manageBook" href="manageBook.php">Manage Book</a>
        </div>
        <script src="../JS/sideBar.js"></script>
    </body>
</html>