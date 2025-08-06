<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Management System</title>
    <link rel="stylesheet" href="CSS/task_3_style.css">
</head>
<body>
    
    <h1>Bank Management System</h1>
    <h3>Your Trusted Financial Partner</h3>
    <h4>Customer Registration Form</h4>
    <div class="form-box">
        
        <form>
            <label>Full Name:</label>
            <input type="text" id="fullname">

            <label>Date of Birth:</label>
            <input type="date" id="dob">

            <label>Gender:</label>
            <div class="radio-group">
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
            </div>

            <label>Marital Status:</label>
            <select id="maritalStatus">
                <option>Single</option>
                <option>Married</option>
                <option>Divorced</option>
            </select>

            <label>Account Type:</label>
            <select id="account">
                <option>Savings</option>
                <option>Current</option>
            </select>

            <label>Initial Deposit Amount:</label>
            <input type="number" id="deposit">

            <label>Mobile Number:</label>
            <input type="text" id="mobile">

            <label>Email Address:</label>
            <input type="email" id="email">

            <label>Address:</label>
            <textarea rows="2" id="address"></textarea>

            <label>Occupation:</label>
            <input type="text" id="occupation">

            <label>National ID (NID):</label>
            <input type="text" id="nid">

            <label>Set Password:</label>
            <input type="password" id="password">

            <label>Upload ID Proof:</label>
            <input type="file" id="idproof">

            <div class="checkbox-group">
                <input type="checkbox" id="agree"> I agree to the terms and conditions
            </div>

            <div class="button-group">
                <button type="submit">Register</button>
                <button type="reset">Clear</button>
            </div>
        </form>
    </div>

</body>
</html>