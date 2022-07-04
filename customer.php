<?php
	session_start();
	include("connection.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
	$OrderDate = date("Y/m/d");
	$FullName = $_POST['fullname'];
	$EmailAddress = $_POST['email'];
	$PhoneNumber = $_POST['phone_number'];
	$CityAddress = $_POST['address'];
	$OrderType = $_POST['order_type'];
	$PickupOrDeliveryDate = $_POST['delivery_date'];
	
	$query = "INSERT INTO customer_details (orderDate, fullName, emailAddress, phoneNumber, cityAddress, orderType, pickupDate)
	values ('$OrderDate', '$FullName', '$EmailAddress', '$PhoneNumber', '$CityAddress', '$OrderType', '$PickupOrDeliveryDate')";
	mysqli_query($conn, $query);
	
	header("location: submit.php");
	}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<form action="" method="POST">
<div id="card">
	<h1>Customer Details</h1>
	<div id="innercard">
		
		<div id="order">
			<h3>Order Date:</h3><h3 name="current_date"><?php echo date("Y/m/d");?></h3>
			<h3 id="num">Order No:</h3><h3>000-3411-2131<h3>
		</div>
		<div id="info">
			<table>
			<tr>
			<td class="label">Full Name:</td> 
			<td><input type="text" class="input" id="fname" name="fullname" onblur="requiredF()" autofocus></td> 
			<td class="blur"><span id="req1"></span></td>
			</tr>
			<tr>
			<td class="label">Email Address:</td>
			<td><input type="email" class="input" id="eadd" name="email" onblur="requiredEA()" placeholder="xyz@gmail.com"></td>
			<td class="blur"><span id="req2"></span></td>
			</tr>
			<tr>
			<td class="label">Phone Number:</td>
			<td><input type="text" class="input" id="cnum" name="phone_number" onblur="requiredCN()" placeholder="0912 345 6789"></td>
			<td class="blur"><span id="req3"></span></td>
			</tr>
			<tr>
			<td class="label">City Address:</td>
			<td><input type="address" class="input" name="address"></td>
			</tr>
			</table>
		</div>
		<div id="mode">
			<div id="type">
				Order Type:<br><br>
				<form action="/action_page.php">
				<input type="radio" value="delivery" name="order_type">
				<label for="delivery">Delivery</label><br>
				<input type="radio" value="pickup" name="order_type">
				<label for="pickup">Pick Up</label>
				</form>
			</div>
			<div id="date">
				<label for="pickup">PickUp or Delivery Date:</label><br><br>
				<input type="date" name="delivery_date">
			</div>
		</div>
		<button name="customer-submit" type="submit" onClick="Submit()">Submit</button>
		
	</div>
</div>
</body>
</form>
</html>