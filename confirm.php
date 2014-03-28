<?php
session_start();

$yourName = $_POST['yourName'];
$_SESSION["yourName"] = $_POST['yourName'];

$kana = $_POST['kana'];
$_SESSION["kana"] = $_POST['kana'];

if(isset($_POST['address'])) {
$address = $_POST['address'];
}else $address = "Blank";
$_SESSION["address"] = $_POST['address'];

$password = $_POST['password'];
$_SESSION["password"] = $_POST['password'];

$passwordAgain = $_POST['passwordAgain'];
$_SESSION["passwordAgain"] = $_POST['passwordAgain'];

$year = $_POST['year'];
$_SESSION["year"] = $_POST['year'];

$month = $_POST['month'];
$_SESSION["month"] = $_POST['month'];

$date = $_POST['date'];
$_SESSION["date"] = $_POST['date'];

$sex = $_POST['sex'];
$_SESSION["sex"] = $_POST['sex'];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;" charset="EUC-JP">
	<title>Contact</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.6.0/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" href="form.css">
	



</head>

<body>

	
	<div id="container">
		<div id="wrapper">
			<div id="title">Contact</div>

			<div id="box">
				<table>
					<tr>
						<th>Your Name : </th>
						<td><?php echo $yourName; ?></td>
					</tr>
					<tr>
						<th>Kana : </th>
						<td><?php echo $kana; ?></td>
					</tr>
					<tr>
						<th>Address : </th>
						<td><?php echo $address; ?></td>
					</tr>
					<tr>
						<th>Password : </th>
						<td><?php echo $password; ?></td>
					</tr>
					<tr>
						<th>Birthday : </th>
						<td><?php echo $year; ?> , <?php echo $month; ?> , <?php echo $date; ?></td>
					</tr>
					<tr>
						<th>Gender : </th>
						<td><?php echo $sex; ?></td>
					</tr>
					
				</table>
			</div>

				<div class="sendForm">
						<a href="http://localhost/index3.php"><input type="button" value="Back" id="contactSubmit">
				</div>

			</div>
		</div>

		<div id="footer">


		</div>
	</div>



	<script>

	</script>
</body>


</html>

