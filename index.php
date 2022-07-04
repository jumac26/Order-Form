<!-- 
    Coded by: 
	Macabulos, Julius M.
	BSCPE 3-6	

    Activity No. 4
    Order Form with Database
-->
<?php
	session_start();
	include("connection.php");
?>



<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css" >
	<head>
		<title>Order Form Act 4</title>
	</head>
	<body>
		
		<div id="A">
			<div id="A1"><h3>ORDER FORM</h3></div>
			<div><p class="header"><b>Products</b></p></div>
			<form method="POST" action="">
			<div id="A2">
			
				<div id="A2_1" class="A2">
					<div class="A2_1A">
						<input name="VariantA" class="checkBOXmiddle" type="checkbox" value="VariantA">
					</div>

					<div class="A2_1B">
						<div class="variantTitle"><label name="VariantA" value="Variant A">Variant A:</label></div>
						<div><img src="images/A.jpg"></div>
					</div>

					<div class="A2_1C">
						<div><label name="PriceA" value="19930"><b>Price:</b> Php 19,930</label></div>
						<div><label><b>CPU:</b> Ryzen 5 3400G</label></div>
						<div><label><b>RAM:</b> 8GB Kingston HyperX RGB 3200mhz </label></div>
						<div><label><b>Motherboard:</b> MSI A320M Pro Max</label></div>
						<div><label><b>Storage:</b> 240GB m.2 WD Green SSD </label></div>
						<div><label><b>GPU:</b> Radeon Vega 11 Graphics</label></div>
					</div>

					<div class="A2_1D">
						<div><label><b>Stocks Left: 
						<?php
							$query = "select * from items where variant = 'Variant A' limit 1";
							$result = mysqli_query($conn, $query);
							
							if($result){
								if($result && mysqli_num_rows($result) > 0)
								{
									$user_data = mysqli_fetch_assoc($result);
									
									echo $user_data['stocks_left'];
								}
							}
						?>
						</b></label></div>
					</div>
				</div>

				<div id="A2_2" class="A2">
					<div class="A2_1A">
						<input name="VariantB" type="checkbox" value="VariantB">
					</div>

					<div class="A2_1B">
						<div class="variantTitle"><label>Variant B:</label></div>
						<div><img src="images/B.jpg"></div>
					</div>

					<div class="A2_1C">
						<div><label><b>Price:</b> Php 17,880</label></div>
						<div><label><b>CPU:</b> Ryzen 3 3200G</label></div>
						<div><label><b>RAM:</b> 8GB Kingston HyperX RGB 3200mhz </label></div>
						<div><label><b>Motherboard:</b> Asus Prime A320M K/ MSI A320M Pro Max</label></div>
						<div><label><b>Storage:</b> 240GB m.2 WD Green SSD</label></div>
						<div><label><b>GPU:</b> Radeon Vega 8 Graphics</label></div>
					</div>

					<div class="A2_1D">
					<div><label><b>Stocks Left: 
						<?php
							$query = "select * from items where variant = 'Variant B' limit 1";
							$result = mysqli_query($conn, $query);
							
							if($result){
								if($result && mysqli_num_rows($result) > 0)
								{
									$user_data = mysqli_fetch_assoc($result);
									
									echo $user_data['stocks_left'];
								}
							}
						?>
						</b></label></div>
					</div>
				</div>

				<div id="A2_3" class="A2">
					<div class="A2_1A">
						<input name="VariantC" type="checkbox" value="VariantC">
					</div>

					<div class="A2_1B">
						<div class="variantTitle"><label>Variant C:</label></div>
						<div><img src="images/C.jpg"></div>
					</div>

					<div class="A2_1C">
						<div><label><b>Price:</b> Php 66,520</label></div>
						<div><label><b>CPU:</b> AMD Ryzen 5 3600</label></div>
						<div><label><b>RAM:</b> 16gb 2x8GB Avexir Core RGB 3200mhz </label></div>
						<div><label><b>Motherboard:</b> Asrock B450M Steel Legends </label></div>
						<div><label><b>Storage:</b> 240GB m.2 WD Green SSD</label></div>
						<div><label><b>GPU:</b> Gigabyte GeForce RTX 3060Ti Eagle OC 8gb</label></div>
					</div>

					<div class="A2_1D">
					<div><label><b>Stocks Left: 
						<?php
							$query = "select * from items where variant = 'Variant C' limit 1";
							$result = mysqli_query($conn, $query);
							
							if($result){
								if($result && mysqli_num_rows($result) > 0)
								{
									$user_data = mysqli_fetch_assoc($result);
									
									echo $user_data['stocks_left'];
								}
							}
						?>
						</b></label></div>
					</div>
				</div>

				<div id="A2_4" class="A2">
					<div class="A2_1A">
						<input name="VariantD" type="checkbox" value="VariantD">
					</div>

					<div class="A2_1B">
						<div class="variantTitle"><label>Variant D:</label></div>
						<div><img src="images/D.jpg"></div>
					</div>

					<div class="A2_1C">
						<div><label><b>Price:</b> Php 45,970</label></div>
						<div><label><b>CPU:</b> AMD Ryzen 5 3600 </label></div>
						<div><label><b>RAM:</b> 16gb 2x8gb Kingston HyperX RGB 3200mhz </label></div>
						<div><label><b>Motherboard:</b> Asrock B450M Steel Legend </label></div>
						<div><label><b>Storage:</b> 240GB m.2 WD Green SSD</label></div>
						<div><label><b>GPU:</b> Palit GTX 1660 Super Gaming Pro OC Twin Fan</label></div>
					</div>

					<div class="A2_1D">
					<div><label><b>Stocks Left: 
						<?php
							$query = "select * from items where variant = 'Variant D' limit 1";
							$result = mysqli_query($conn, $query);
							
							if($result){
								if($result && mysqli_num_rows($result) > 0)
								{
									$user_data = mysqli_fetch_assoc($result);
									
									echo $user_data['stocks_left'];
								}
							}
						?>
						</b></label></div>
					</div>
				</div>
				
			
			</div>
			<div id="submitBUTTON"><input type="submit" name="variants" value="Submit"></div>
			</form>
			<div><p class="header"><b>Order:</b></p></div>

			<div class="A3">
				<div></div>
				<div><label><b>Variant</b></label></div>
				<div><label><b>Price</b></label></div>
				<div></div>
			</div>

			<?php
				if(isset($_POST['VariantA'])){
					$Variants = $_POST['VariantA'];
					$query1 = "select * from items where variant = 'Variant A' limit 1";
					$result1 = mysqli_query($conn, $query1);
					
					$VARIANT = "Variant A";
					$PRICE = 19930;

					$query3 = "INSERT INTO current_order (price, variant)
					values ('$PRICE', '$VARIANT')";
					mysqli_query($conn, $query3);


					while($user_data = mysqli_fetch_assoc($result1)){
						if($result1 && mysqli_num_rows($result1) > 0)
						{
								$StocksLeft = $user_data['stocks_left'] - 1;
								$query2 = "UPDATE items SET stocks_left = '$StocksLeft' WHERE variant = 'Variant A'";
        						mysqli_query($conn, $query2);
						}
					}
					echo "<meta http-equiv='refresh' content='0'>";
				}
				if(isset($_POST['VariantB'])){
					$Variants = $_POST['VariantB'];
					$query1 = "select * from items where variant = 'Variant B' limit 1";
					$result1 = mysqli_query($conn, $query1);

					$VARIANT = "Variant B";
					$PRICE = 17880;

					$query3 = "INSERT INTO current_order (price, variant)
					values ('$PRICE', '$VARIANT')";
					mysqli_query($conn, $query3);

					while($user_data = mysqli_fetch_assoc($result1)){
						if($result1 && mysqli_num_rows($result1) > 0)
						{
								$StocksLeft = $user_data['stocks_left'] - 1;
								$query2 = "UPDATE items SET stocks_left = '$StocksLeft' WHERE variant = 'Variant B'";
        						mysqli_query($conn, $query2);
						}
					}
					echo "<meta http-equiv='refresh' content='0'>";
				}
				if(isset($_POST['VariantC'])){
					$Variants = $_POST['VariantC'];
					$query1 = "select * from items where variant = 'Variant C' limit 1";
					$result1 = mysqli_query($conn, $query1);

					$VARIANT = "Variant C";
					$PRICE = 66520;

					$query3 = "INSERT INTO current_order (price, variant)
					values ('$PRICE', '$VARIANT')";
					mysqli_query($conn, $query3);

					while($user_data = mysqli_fetch_assoc($result1)){
						if($result1 && mysqli_num_rows($result1) > 0)
						{
								$StocksLeft = $user_data['stocks_left'] - 1;
								$query2 = "UPDATE items SET stocks_left = '$StocksLeft' WHERE variant = 'Variant C'";
        						mysqli_query($conn, $query2);
								
						}
					}
					echo "<meta http-equiv='refresh' content='0'>";
				}
				if(isset($_POST['VariantD'])){
					$Variants = $_POST['VariantD'];
					$query1 = "select * from items where variant = 'Variant D' limit 1";
					$result1 = mysqli_query($conn, $query1);

					$VARIANT = "Variant D";
					$PRICE = 45970;

					$query3 = "INSERT INTO current_order (price, variant)
					values ('$PRICE', '$VARIANT')";
					mysqli_query($conn, $query3);

					while($user_data = mysqli_fetch_assoc($result1)){
						if($result1 && mysqli_num_rows($result1) > 0)
						{
								$StocksLeft = $user_data['stocks_left'] - 1;
								$query2 = "UPDATE items SET stocks_left = '$StocksLeft' WHERE variant = 'Variant D'";
        						mysqli_query($conn, $query2);
						}
					}
					echo "<meta http-equiv='refresh' content='0'>";
				}
				$query4 = "select * from current_order order by price desc";
                $result = mysqli_query($conn, $query4);

				while($user_data = mysqli_fetch_assoc($result))  {
					echo "<div class='A3'>";
					echo "<div></div>";
					echo "<div><label>".$user_data['variant']."</label></div>";
					echo "<div><label>".$user_data['price']."</label></div>";
					echo "<div></div>";
					echo "</div>";
				}
			?>

			<div id="A4">
			<form action="customer.php" method="POST">
				<div><label>Total Payment: </label>
				<?php
					$query = "select * from current_order order by price desc";
					$result = mysqli_query($conn, $query);
					$totalPayment = 0;

					while($user_data = mysqli_fetch_assoc($result))  {
						$totalPayment = $totalPayment + $user_data['price'];
					}
					echo "<input type='text' name = 'total' readonly value =".$totalPayment."></div>";
				?>
				<div><button type="submit">Place Order</button></div>
			</form>
			</div>
		</div>

	</body>
</html>