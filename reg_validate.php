<?php
include('connect.php');
$Username = $_POST["Username"];
$Email = $_POST["Email"];
$phone_number = $_POST["phone_number"];
$AccountNAme = $_POST["AccountNAme"];
$BankName = $_POST["BankName"];
$AccountNumber = $_POST["AccountNumber"];
$Password = $_POST["Password"];
$PasswordConfirm = $_POST["ConfirmPassword"];
$gender = $_POST["gender"];
$Terms =$_POST["Terms"];
$usrname=strtoupper($Username);

//echo $Username, $Email,  $phone_number, $AccountNAme, $BankName, $AccountNumber, $gender, $Password, $PasswordConfirm, $Terms;



if ($Username=="" ){
echo "<script>alert('Username is empty!!!'); window.location.replace('register.php');</script>";
exit;
}


if ($Email=="" ){
echo "<script>alert('Email is empty!!!'); window.location.replace('register.php');</script>";
exit;
}

if ($phone_number==0 ){
echo "<script>alert('phone number is empty!!!'); window.location.replace('register.php');</script>";
exit;
}

if ($AccountNAme=="" ){
echo "<script>alert('Account Name is empty!!!'); window.location.replace('register.php');</script>";
exit;
}

if ($AccountNumber=="" ){
echo "<script>alert('Account Number is empty!!!'); window.location.replace('register.php');</script>";
exit;
}

if ($Password=="" ){
echo "<script>alert('Password field is empty!!!'); window.location.replace('register.php');</script>";
exit;
}

if ($PasswordConfirm=="" ){
echo "<script>alert('Confirm  password!!!'); window.location.replace('register.php');</script>";
exit;
}

if ($gender=="" ){
echo "<script>alert('Gender is empty!!!'); window.location.replace('register.php');</script>";
exit;
}

if ($Terms=="" ){
echo "<script>alert('$usrname not Registered. Make sure to Accept Terms and Conditions!!!'); window.location.replace('register.php');</script>";
exit;
}


 if ($Password != $PasswordConfirm) {
 echo "<script>alert('Incorrect Password!!!'); window.location.replace('register.php');</script>";
exit;
 } 
 

$query = "SELECT phone_number FROM `users` WHERE phone_number='$phone_number'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

// if phonenumber exist, deny registration
if ($count > 0){
echo "<script>alert('Phone Number already exist!!!'); window.location.replace('register.php');</script>";
exit;

}




$query = "SELECT email FROM `users` WHERE email='$Email'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

// if email exist, deny registration
if ($count > 0){
echo "<script>alert('Email already exist!!!'); window.location.replace('register.php');</script>";
exit;

}



$query = "SELECT username FROM `users` WHERE username='$Username'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

// if username exist, deny registration
if ($count > 0){
echo "<script>alert('Username already exist!!!'); window.location.replace('register.php');</script>";
}

else {
//Register user

$sql = "INSERT INTO `users` (username, email, phone_number, account_name, bank_name, account_number, gender, password) 
VALUES ('$Username', '$Email', '$phone_number', '$AccountNAme', '$BankName', '$AccountNumber', '$gender', '$Password')";

if (($conn->query($sql))=== true){


echo "<script>alert('CONGRATS $usrname, YOUR IS REGISTRATION SUCCESSFUL!!!'); window.location.replace('login.php');</script>";

}








}








?>