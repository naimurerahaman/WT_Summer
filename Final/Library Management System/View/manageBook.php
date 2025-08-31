<!DOCTYPE html>
<html>
    <head>
        <title>Add Book</title>
        <link rel="stylesheet" href="../CSS/manageBook.css">
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

    <div class="content">
    <h2>Manage Books</h2>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Author</th>
          <th>Category</th>
          <th>ISBN No.</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Software Project Management</td>
          <td>101</td>
          <td>1</td>
          <td>4518</td>
          <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
        </tr>
        <tr>
          <td>Data Structure</td>
          <td>102</td>
          <td>2</td>
          <td>6541</td>
          <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
        </tr>
        <tr>
          <td>Design and Analysis</td>
          <td>103</td>
          <td>3</td>
          <td>7312</td>
          <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div> 
        <script src="../JS/sideBar.js"></script>
    </body>
</html>