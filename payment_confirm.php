<?php
include_once('connect.php');

$id = htmlentities($_GET['id']);

$ins= "SELECT * FROM `notifications` WHERE n_id=$id";
$que= mysqli_query($conn, $ins) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($que);
$amount = ($row['amount'])*1.5;
$username = $row['payer_username'];


//get details from user
$use="SELECT * FROM `users` WHERE username='$username'";
$qry = mysqli_query($conn, $use) or die(mysli_error($conn));
$rw= mysqli_fetch_assoc($qry);

$phonenumber=$rw['phone_number'];
$bank_name=$rw['bank_name'];
$account_number=$rw['account_number'];
$account_name=$rw['account_name'];

//update unconfirmed payment

$un="UPDATE `unconfirmed_payments` SET status='CLEARED' WHERE payment_id=$id";
$re= mysqli_query($conn, $un) or die(mysqli_error($conn));


$sql = "DELETE FROM `notifications` WHERE n_id=$id";
$result = mysqli_query($conn, $sql);

if ($result==true){
//check whether user already exist in pending receivers

$che="SELECT * FROM `pending_receivers` WHERE pe_username='$username'";
$conf=mysqli_query($conn, $che) or die(mysqli_error($conn));
$count= mysqli_num_rows($conf);
$row= mysqli_fetch_assoc($conf);
$amnt = $row['pe_balance'] + $amount;
if ($count>0){
// if it exist, add confirmed amount to user's balance
$sql = "UPDATE `pending_receivers` SET pe_balance='$amnt' WHERE pe_username='$username'";
$res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
header('refresh:0, url=dashboard.php');
die("YOU  HAVE SUCCESSFULLY CONFIRMED YOUR PAYMENT RECEPTION");

}

else{
$sql= " INSERT INTO `pending_receivers` (pe_username, pe_phone_number, pe_bank_name, pe_account_name, pe_account_number, pe_amount, pe_balance) 
VALUES ('$username', '$phonenumber', '$bank_name', '$account_name', '$account_number', '$amount','$amount')";
$query =mysqli_query($conn, $sql) or die(mysqli_error($conn));
header('refresh:0, url=dashboard.php');
die("YOU  HAVE SUCCESSFULLY CONFIRMED YOUR PAYMENT RECEPTION");

}}
else{

die(mysqli_error($conn));
}
?>