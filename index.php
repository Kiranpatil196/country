<?php
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$selectdb = mysqli_select_db($connection, 'phpajax');
if(!$selectdb){
	die("Database Selection Failed" . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajax Country State Select List</title>
	<style type="text/css">
		#state-select,#city-select{
			display: none;
		}
	</style>
</head>
<body>
<div id="form">
	<h2>Select the Country & State</h2>
	<select id="country-select">
		<option disabled selected>Please Select Country</option>
		<?php
			$sql = "SELECT * FROM countries";
			$result = mysqli_query($connection, $sql);
			while($row = mysqli_fetch_assoc($result)){
		?>
		<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
		<?php } ?>
	</select>
	<select id="state-select">
		
	</select>
	<select id="city-select">
		
	</select>
	<a href="index.php"><input type="submit" value="Submit"/></a>
	
	<script type="text/javascript" src="ind.js">
		
	</script>
</div>
</body>
</html>