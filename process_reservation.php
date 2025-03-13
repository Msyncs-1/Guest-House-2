<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name=htmlspecialchars($_POST["name"]);
	$phone=htmlspecialchars($_POST["phone"]);
	$email=htmlspecialchars($_POST["email"]);
	$checkin_date=htmlspecialchars($_POST["checkin_date"]);
	$checkout_date=htmlspecialchars($_POST["checkout_date"]);
	$adults=htmlspecialchars($_POST["adults"]);
	$children=htmlspecialchars($_POST["children"]);
	$id_passport=htmlspecialchars($_POST["id_passport"]);
	$message=htmlspecialchars($_POST["message"]);
	
	//ID/PASSPORT Validation
	
	if(empty($id_passport)||
	strlen($id_passport)<6){
		die("Invalid ID or Passport Number.");
	}
	
	//email
	$to="ntupanyamabulelani@gmail.com";
	$subject="New Reservation Request";
	$headers="From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
	
	$body="Name: $name\nPhone: $phone\nEmail: $email\nCheck-in Date: $checkin_date\nCheck-out Date: $checkout_date\nAdults: $adults\nChildren: $children\nID/Passport: $id_passport\nMessage: $message";
	
	if (mail($to, $subject, $body, $headers)){
	echo "Your reservation has been submitted successfully.";}
		else {
		echo "Error sending your reservation, Please try again.";}
}
?>


	