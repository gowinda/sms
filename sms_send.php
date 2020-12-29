<?php

if (isset($_POST['submit']))
 {
	$mobileno=$_POST['mnumber'];
	$msg=$_POST['message'];

  require __DIR__ . "/vendor/autoload.php";
  use telesign\sdk\messaging\MessagingClient;
  $customer_id = "7512A0DC-6314-494A-B495-AAF7DCE9BABD";
  $api_key = "SRaDgQLg8wEBASTKPO7wXSca3sHm4PTpntEwuPXTC9BGio4t62GoiUBmr4RwTMzwaWBBHfGwcT1wW74YYWXSpg==";
  $phone_number = "$mobileno";
  $message = "$msg";
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
  

}
?>