document.getElementById("donationForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const firstName = document.getElementById("firstName").value.trim();
  const lastName = document.getElementById("lastName").value.trim();
  const address = document.getElementById("address").value.trim();
  const city = document.getElementById("city").value.trim();
  const state = document.getElementById("state").value;
  const phone = document.getElementById("phone").value.trim();
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirmPassword").value;

  // Check all required fields
  if (!firstName || !lastName || !address || !city || !state || !phone || !email || !password || !confirmPassword) {
    alert("Please fill in all required fields.");
    return;
  }

  // Name validation
  if (!/^[A-Za-z]+$/.test(firstName) || !/^[A-Za-z]+$/.test(lastName)) {
    alert("First and last name must contain only letters.");
    return;
  }

  // Phone validation
  if (!/^\d{11}$/.test(phone)) {
    alert("Phone number must be exactly 11 digits.");
    return;
  }

  // Password validation
  if (password.length < 8 || 
      !/[A-Z]/.test(password) || 
      !/[a-z]/.test(password) || 
      !/[0-9]/.test(password) || 
      !/[\W_]/.test(password)) {
    alert("Password must be at least 8 characters and include uppercase, lowercase, number, and special character.");
    return;
  }

  if (password !== confirmPassword) {
    alert("Passwords do not match.");
    return;
  }

  alert("Form submitted successfully!");
});
