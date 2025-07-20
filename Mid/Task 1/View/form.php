<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Registration Form</title>
</head>
<body>
  <center>
    <h1>AIUB</h1>    
    <h2>Course Registration Form</h2>
  </center>

  <h3 align="left">Start the registration and fill the form</h3>


    <table>
      <tr>
        <td>Full Name:</td>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password"></td>
      </tr>
      <tr>
        <td>Select your Gender:</td>
        <td>
          <input type="radio" name="des">Male
          <input type="radio" name="des">Female
          <input type="radio" name="des">Others
        </td>
      </tr>
      <tr>
        <td>Languages Known:</td>
        <td>
          <input type="checkbox">English
          <input type="checkbox">Bangla
          <input type="checkbox">Hindi
        </td>
      </tr>
      <tr>
        <td>Upload your Photo:</td>
        <td><input type="file"></td>
      </tr>
      <tr>
        <td>Date of Birth:</td>
        <td><input type="date"></td>
      </tr>
      <tr>
        <td>Country Name:</td>
        <td>
          <select>
            <option value="">Select Option
            <option value="">Bangladesh
            <option value="">Nigeria
            <option value="">Sri Lanka
            <option value="">Pakistan
          </select>
        </td>
      </tr>
      <tr>
        <td>Comment:</td>
        <td><textarea rows="4" cols="40"></textarea></td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Register">
        </td>
      </tr>
    </table>

</body>
</html>
