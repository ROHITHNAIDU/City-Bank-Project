<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <title>Transaction</title>
	<style>
		body{
			font-family: 'Roboto Slab', serif;
      		letter-spacing: 0.05rem;
		}
		.container{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			padding-bottom:1rem;
			margin: 8rem auto;
			max-width:600px;
		}
		.container p{
			text-align: center;
			font-size: 3rem;
		}
		.container img{
			width:30%;
			display: block;
			margin: 0 auto;
		}
		.container button{
			display: block;
			outline: none;
			margin: 0 auto;
		}
		.container a{
			text-decoration: none;
		}

	</style>
</head>
<body>
    
<?php

if(isset($_POST['submit']))
{
	session_start();
	
	include 'config.php';

	$receiver_id = $_POST['receiver'];
	$amount = $_POST['amount'];

	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	$cust = $_SESSION['custId'];

	$sender = mysqli_query($conn,"SELECT name FROM customers where id = $cust");
	$sender = mysqli_fetch_row($sender);
	$sender = $sender[0];

	//balance
	$balance = mysqli_query($conn,"SELECT balance FROM customers where id = $cust");
	$balance = mysqli_fetch_row($balance);
	$balance = $balance[0];

	$receiver = mysqli_query($conn,"SELECT name FROM customers where id = $receiver_id");
	$receiver = mysqli_fetch_row($receiver);
	$receiver = $receiver[0];
	
	echo "<div class=\"container\">";
	if($amount > $balance){
		echo "<div>
		<img src=\"images/fail.png\" alt=\"success image\">
		<p>Insufficient balance</p>
		<a href=\"http://localhost/projects/Bank/transfer.php\"><button class=\"btn btn-danger\">Go Back</button></a>
		</div>";
	}
	else{
	$result = mysqli_query($conn, "UPDATE customers SET balance = balance - $amount WHERE id = $cust");
	$result2 = mysqli_query($conn, "UPDATE customers SET balance = balance + $amount WHERE id = $receiver_id");
	$result3 = mysqli_query($conn,"INSERT INTO transaction(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')");
	
	$conn->close();

	echo "<div>
		<img src=\"images/successful.png\" alt=\"success image\">
		<p>Transaction Sucessfull</p>
		<a href=\"http://localhost/projects/Bank/index.html\"><button class=\"btn btn-success\">OK</button></a>
		</div>";
	}
	echo "</div>";
}
?>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>

</body>
</html>