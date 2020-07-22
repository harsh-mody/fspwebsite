<html lang="en">
<title> Category </title>
<link rel = "icon" href ="images/logo1.jpg"  type = "image/x-icon">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php include 'navigation.php';?>
<style>

body {
	background-color: #F8F8FF;
	}
h1 {
	text-align: center;
	font-family: serif;
	font-weight: normal;
	text-transform: uppercase;
}
</style>
</head>
<body>
	<!-- Advanced search bar -->
	<fieldset class="container-fluid" style=" overflow: hidden; color:white; background: #111; text-align: center; margin-top: 5em; ">
	<div class="row">
		<div class="col-sm-1">
			<span> 
			Database
			<br><br>			
			<form method="post" action="">
			<select name="database">
			<option value="abc">verified</option>
			<option value="abc">unverified</option>
			</select>
			</form>
			</span>
		</div>
		<div class="col-sm-2">
					<span> 
				Search_for
				<br><br>			
				<form method="post" action="">
				<select name="search">
				<option value="manufacturer">manufacturer</option>
				<option value="retailer">retailer</option>
				<option value="distributor">distributor</option>
				<option value="self">buysell</option>
				<option value="distributor">super stockist</option>
				<option value="distributor">overseas</option>
				<option value="distributor">oem manufacturing</option>
				<option value="distributor">institutional sales partner</option>
				</select>
				</form>
				</span> 
		
		</div>		
		<div class="col-sm-2">
				<span> 
				Keywords
				<br><br>
				<form method="post">
				<input type="text" placeholder="keywords" name="keywords" required>
				</form>
				</span>
		
		</div>		
		<div class="col-sm-2">
				<span> 
				Company_name
				<br><br>
				<form method="post">
				<input type="text" placeholder="company name" name="company" required>
				</form>
				</span> 
		
		</div>		
		<div class="col-sm-2">
				<span> 
				Location
				<br><br>
				<form method="post">
				<input type="text" placeholder="location" name="location" required>
				</form>
				</span> 
		
		</div>		
		<div class="col-sm-3">
				<span> 
				category
				<br><br>			
				<form method="post" action="">
				<select name="category">
				<option value="">All Categories</option>
				<option value="1">Agro Commodities</option>
				<option value="2">Food and Beverage</option>
				<option value="3">Automobiles &amp; Parts</option>
				<option value="4">Animal and Related Products</option>
				<option value="5">Building and Construction</option>
				<option value="6">Business and Technical Services</option>
				<option value="7">Electrical / Electronics / IT / Telecom</option>
				<option value="8">Chemicals, Plastics &amp; Rubber</option>
				<option value="9">Energy - Petroleum, Electricity, Coal, Renewable Energy</option>
				<option value="10">Machinery and Industrial Supplies</option>
				<option value="11">Apparel and Textile</option>
				<option value="12">Consumer Goods</option>
				<option value="13">Healthcare and Hospital Supplies</option>
				<option value="14">Beauty and Personal Care</option>
				<option value="15">Herbs and Herbal Products</option>
				<option value="16">Toys, Gift, Handicraft, Recreational Products</option>
				<option value="17">Office and School Supplies Educational Products</option>
				<option value="18">Safety and Security</option>
				<option value="19">Ores, Minerals, Metals</option>
				<option value="20">Packaging, Printing, Publishing</option>
				</select>
				</form>
				</span> 
		
		</div>		
		<div class="col-sm-1">
				<span> 
				Select_range
				<br><br>			
				<form method="post" action="">
				<select name="range">
				<option value="domestic">domestic</option>
				<option value="overseas">overseas</option>
				</select>
				</form>
				</span> 
		
		</div>		
			</div>
			<button type="button" style="background: yellow; color: black">Submit</button>
	</fieldset>
	<br><br>
	
	<br><br>
	<br><br>
	<?php
	if(isset($_POST["submit"]))
	{
	$database=$_POST["database"];
	$search=$_POST["search"];
	$keywords=$_POST["keywords"];
	$company=$_POST["company"];
	$location=$_POST["location"];
	$category=$_POST["category"];
	$range=$_POST["range"];
	
	$sql = "SELECT database,searchfor,keywords,company,location,category,range From db Where database='$database' and searchfor='$search' and keywords='$keywords' and location='$location' and company='$company' and category='$category' and range='$range'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td>	 <td>" . $row["mno"] . "</td>	  <td>"
. $row["email"]. "</td>	  <td>" . $row["address"] . "</td> 	 <td>" . $row["city"] . "</td>   	    <td>" . $row["bgroup"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
	}
	?>
<?php include 'includes/footer.php'; ?>   
	</body>
	</html>