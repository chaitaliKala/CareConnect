<?php
 include("connection.php");
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up Page</title>
<style>


  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #1e1e1e;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .container {
    width: 300px;
    margin: 0 auto;
  }

  .signup-form {
    background-color: #0a8f9e; /* Dark cyan background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    animation: fadeIn 1s ease;
  }

  .form-control {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="tel"],
  input[type="password"] {
    width: calc(100% - 20px); /* Adjusted width */
    padding: 10px;
    border: none;
    border-radius: 5px;
  }

  button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #07778e; /* Dark cyan button color */
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #065e70; /* Darker hover color */
  }

  .error-message {
    color: red;
    margin-top: 5px;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(-20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @media screen and (max-width: 600px) {
    .container {
      width: 90%;
    }
  }
</style>
</head>
<body>
<div class="container">
  <form id="signupForm" class="signup-form" method="POST">
    <h2>Sign Up</h2>
    <div class="form-control">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" placeholder="Enter your name" required>
      <div class="error-message" id="nameError"></div>
    </div>
    <div class="form-control">
      <label for="phone">Phone Number</label>
      <input type="tel"name="phone" id="phone" placeholder="Enter your phone number" required>
      <div class="error-message" id="phoneError"></div>
    </div>
    <div class="form-control">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Enter your password" required>
      <div class="error-message" id="passwordError"></div>
    </div>
    <div class="form-control">
      <label for="confirmPassword">Confirm Password</label>
      <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm your password" required>
      <div class="error-message" id="confirmPasswordError"></div>
    </div>
    <button type="submit" name="submit">Sign Up</button><br>
    <center> <a href="userlogin.php">Already Have Account</a></center>

  </form>
</div>

<script>
// document.getElementById('signupForm').addEventListener('submit', function(event) {
//   event.preventDefault();
//   var isValid = validateForm();
//   if (isValid) {
//     var name = document.getElementById('name').value;
//     var phone = document.getElementById('phone').value;
//     var password = document.getElementById('password').value;
//     var confirmPassword = document.getElementById('confirmPassword').value;
//     alert("Name: " + name + "\nPhone Number: " + phone + "\nPassword: " + password + "\nConfirm Password: " + confirmPassword);
//   }
// });

function validateForm() {
  var name = document.getElementById('name').value;
  var phone = document.getElementById('phone').value;
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('confirmPassword').value;
  var isValid = true;

  // Validate name
  if (name.trim() === '') {
    document.getElementById('nameError').innerText = 'Name is required';
    isValid = false;
  } else {
    document.getElementById('nameError').innerText = '';
  }

  // Validate phone number
  if (phone.trim() === '') {
    document.getElementById('phoneError').innerText = 'Phone number is required';
    isValid = false;
  } else {
    document.getElementById('phoneError').innerText = '';
  }

  // Validate password
  if (password.trim() === '') {
    document.getElementById('passwordError').innerText = 'Password is required';
    isValid = false;
  } else {
    document.getElementById('passwordError').innerText = '';
  }

  // Validate confirm password
  if (confirmPassword.trim() === '') {
    document.getElementById('confirmPasswordError').innerText = 'Confirm password is required';
    isValid = false;
  } else if (confirmPassword !== password) {
    document.getElementById('confirmPasswordError').innerText = 'Passwords do not match';
    isValid = false;
  } else {
    document.getElementById('confirmPasswordError').innerText = '';
  }
    
   


  return isValid;
}
</script>

<?php

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $pass=$_POST['password'];
  $cpass=$_POST['confirmPassword'];
  
  $query="INSERT INTO `register`(`username`, `phone`, `pass`, `cpass`) VALUES ('$name',' $phone','$pass','$cpass')";

  $add = mysqli_query($conn,$query) or die(mysqli_error($connect));

  
  if($add){
    // $_SESSION['name'] = $user;
    //     setcookie("username", $user, time() + 7200);
    //     setcookie("password", $pass, time() + 7200);
    //     header("Location: index.php");
    //     exit();
    echo "<script>";

    echo 'window.location.href="userlogin.php";';
    echo 'alert("Sign up successfully now you can login");';
    echo "</script>";



   
  }
  else{
    alert($conn->error_log());
  }
}





?>




</body>
</html>
