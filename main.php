<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
 
$fullname = htmlspecialchars(trim($_POST['fullname'])); 
$email = htmlspecialchars(trim($_POST['email'])); 
$password = htmlspecialchars(trim($_POST['password'])); 
$gender = htmlspecialchars(trim($_POST['gender'])); 
$dob = htmlspecialchars(trim($_POST['dob'])); 
$address = htmlspecialchars(trim($_POST['address']));  
$errors = []; 
if (empty($fullname)) { 
$errors[] = "Full Name is required."; 
} 
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { 
$errors[] = "A valid Email is required."; } 
if (empty($password)) { 
$errors[] = "Password is required."; } 
if (empty($gender)) { 
$errors[] = "Gender is required."; } 
if (empty($dob)) { 
$errors[] = "Date of Birth is required."; 
} 
if (empty($address)) { 
$errors[] = "Address is required."; 
} 
if (empty($errors)) { 
echo "<h1>Registration Successful</h1>"; 
echo "<p>Thank you for registering, $fullname!</p>"; 
} else { 
echo "<h1>Registration Failed</h1>"; 
foreach ($errors as $error) { 
echo "<p style='color:red;'>$error</p>"; 
}  } 
} else { 
    header("Location: index.html"); 
    exit(); 
    } 
    ?>