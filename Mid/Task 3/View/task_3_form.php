<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donation Form</title>
    <link rel="stylesheet" href="CSS\task_3_style.css">
    
</head>
<body>

    <div class="form-container">
    <h2 class="donor-info">Donor Information</h2>
     <form id="donationForm">
        <label>First Name:</label> <br>
            <input type="text" id="firstname"> <br>
        <label>Last Name:</label> <br>
            <input type="text" id="lastname">  <br>
        <label>Address:</label> <br>
            <input type="text" id="address">   <br> 
        <label>City:</label> <br>
            <input type="text" id="city"> <br>
        <label>State:</label> <br>
            <select id="state" >
             <option value="">Select a State</option>
             <option>Dhaka</option>
             <option>Khulna</option>
             <option>Chittagong</option>
             <option>Rajshahi</option>
             <option>Barisal</option>
            </select><br>
        <label>Phone:</label> <br>
            <input type="tel" id="phone">  <br>
        <label>Email:</label>      <br>
            <input type="email" id="email"> <br>
        <label>Create Password (min 8 characters)</label> <br>
            <input type="password" id="password" > <br>
        <label>Confirm Password</label> <br>
            <input type="password" id="confirmPassword" > <br>
        <label>Donation Amount</label>    <br>
            <input type="radio" name="amount" value="none"> None
            <input type="radio" name="amount" value="500" > 500 BDT
            <input type="radio" name="amount" value="1000" > 1000 BDT
            <input type="radio" name="amount" value="2000"> 2000 BDT
            <input type="radio" name="amount" value="3000" > 3000 BDT
            <input type="radio" name="amount" value="other" > Other <br>
          
        <label>Other Amount</label>
            <input type="text" id="otheramount" > <br>

        <input type="checkbox" id="regular"> I am interested in giving on a regular basis.
        
        <h3 class="section-title">Additional Information</h3>

        <input type="checkbox" id="anonymous"> I would like my gift to remain anonymous.<br>
        <input type="checkbox" id="employer" > My employer offers a matching gift program. <br>
        <input type="checkbox" id="noThanks" > Please don't send a thank you letter. <br>

        <label>Comments</label> <br>
        <textarea rows="4" cols="50"></textarea> <br>

        <button type="reset">Reset</button>
        <button type="submit">Submit</button>
     </form>
    </div>  
       <script src="../View/JS/task_3_valid.js"> </script>
</body>
</html>