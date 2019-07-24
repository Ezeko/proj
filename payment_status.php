<?php
include_once('connect.php');

$id = htmlentities($_GET['id']);

$ins= "SELECT * FROM `notifications` WHERE n_id=$id";
$que= mysqli_query($conn, $ins) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($que);
$amount = $row['amount'];

$sql = "UPDATE `notifications` SET level = 'R' WHERE n_id=$id";
$result = mysqli_query($conn, $sql);

if ($result==true){
$sql= " INSERT INTO `unconfirmed_payments` (u_amount, payment_id, status) VALUES ('$amount', '$id','UNCLEARED')";
$query =mysqli_query($conn, $sql) or die(mysqli_error($conn));
header('refresh:0, url=dashboard.php');
die("YOU  HAVE SUCCESSFULLY CONFIRMED YOUR PAYMENT, KINDLY WAIT FOR THE RECEIVER'S UPDATE!!! ");

}
else{

die(mysqli_error($conn));
}
?>