<?php
include ('connect.php');
//get details from form

$payer =$_POST['payer'];
$receiver =$_POST['receiver'];
$amount =$_POST['amount'];
$pay = strtoupper($payer);
$rec = strtoupper($receiver);



//get details of payer and assign it to a variable

$sql= "SELECT * FROM `payers` WHERE p_username='$payer' and p_balance>0";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count= mysqli_num_rows($result);
$row= mysqli_fetch_assoc($result);
$bal =$row['p_amount'];

$payer_phonenumber= $row['p_phone_number'];



//get details of receiver and assign it to variables
$det ="SELECT * FROM `pending_receivers` WHERE pe_username='$receiver' and pe_balance>0";
$ins = mysqli_query($conn, $det) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($ins);

$receiver_phonenumber= $row['pe_phone_number'];
$bank= $row['pe_bank_name'];
$account_name= $row['pe_account_name'];
$account_number= $row['pe_account_number'];
$balance = $row['pe_balance'];

$equal = $balance - $amount;
$pay_bal = $bal - $amount;





//check if payer is a valid user
$sql= "SELECT * from `users` WHERE username='$payer'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count= mysqli_num_rows($result);
if ($count==0){
header("refresh:2, url='master.php'");

die("$pay IS NOT A VALID USER!!!");
}

//check if receiver is a valid user
$sql= "SELECT * from `users` WHERE username='$receiver'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count= mysqli_num_rows($result);
if ($count==0){
header("refresh:2, url='master.php'");

die("$rec IS NOT A VALID USER!!!");
}

//check whether payer has a pledge to redeem
$sql= "SELECT * from `payers` WHERE p_username='$payer' and p_balance>0";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count= mysqli_num_rows($result);
if ($count==0){
header("refresh:2, url='master.php'");

die("$pay DOES NOT HAVE A PLEDGE TO REDEEM!!!");
}


// check whether the amount to pair is not more than the payer's balance

$sql= "SELECT * from `payers` WHERE p_username='$payer'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count= mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
if($amount > ($row['p_balance'])){
header("refresh:2, url='master.php'");

die("$amount IS GREATER THAN $pay'S PLEDGE!!!");
}


//check whether the amount is not more than receiver's balance

$sql= "SELECT * from `pending_receivers` WHERE pe_username='$receiver'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count= mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
if($amount > ($row['pe_balance'])){
header("refresh:2, url='master.php'");

die("$amount IS GREATER THAN $rec'S PAYMENT!!!");
}



//subtract the amount paired from balance

$sql="UPDATE `pending_receivers` SET pe_balance='$equal' WHERE pe_username='$receiver'";
$query= mysqli_query($conn, $sql) or die(mysqli_error($conn));

// subtract amount from payer's balance
$que="UPDATE `payers` SET p_balance='$pay_bal' WHERE p_username='$payer'";
$quer= mysqli_query($conn, $que) or die(mysqli_error($conn));

//INseRT INTO Database
$time = date("h:i");
$ent = "INSERT INTO `notifications` (receiver_username, receiver_phone_number, receiver_account_number,
receiver_bank_name, receiever_account_name, payer_username, payer_phone_number, amount, status, level, time) VALUES 
('$receiver', '$receiver_phonenumber', '$account_number', '$bank', '$account_name', '$payer', '$payer_phonenumber', 
'$amount', 'NEW', 'N', '$time')";
$que = mysqli_query($conn, $ent);

if ($que == true){
header("refresh:2, url='master.php'");

die("$pay HAS BEEN PAIRED TO PAY $rec $amount");
}else{
die(mysqli_error($conn));
}

?>