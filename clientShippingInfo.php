<?php
if (isset($_POST['submit'])){
$name = $_POST['name'];
echo "Name: ".$name."<br>";
$address = $_POST['address'];
echo "Adress: ".$address."<br>";
$city = $_POST['city'];
echo "City: ".$city."<br>";
$state = $_POST['state'];
echo "State: ".$state."<br>";
$zip = $_POST['zip'];
echo "Zip Code: ".$zip."<br>";
$contact = $_POST['contact'];
echo "Want to be contacted: ".$contact."<br>";
$paymentMethod = $_POST['paymentMethod'];
echo "Payment Method: ".$paymentMethod;
}