<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
	<title>Transfer to</title>
	<style>
		body{
			background-color: #000;
			color: #fff;
			font-family: 'Roboto Slab', serif;
      		letter-spacing: 0.05rem;
		}
		.transfer{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			border:1px solid #fff;
			border-radius:1rem;
			padding-bottom:1rem;
			margin: 8rem auto;
			max-width:600px;
		}
		form{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		.welcome{
			text-align: center;
		}
		button{
          padding: 0.5rem 1.5rem;
          border: none;
		  outline: none;
          border-radius: 2rem;
          background-color: rgb(7, 7, 250);
          color: #ffffff;
          font-weight: bold;
        }
        button:hover{
          background-color: rgb(252, 119, 115);
        }
	</style>
</head>
<body>
    
<?php

	session_start();

	include 'config.php';


	$_SESSION["custId"] = 1;

	for ($x = 1; $x <= 10; $x++) {
	 
	 if(isset($_POST[$x]))
	 {
	 	$_SESSION["custId"] = $x;
	 	break;
	 }
	}

	
	$cust = $_SESSION['custId'];
	$result = mysqli_query($conn, "SELECT * FROM customers WHERE id = $cust");
	$row = mysqli_fetch_row($result);
	$result2 = mysqli_query($conn, "SELECT * FROM customers WHERE id != $cust");
	$conn->close();

?>

<button onclick="window.location.href='http://localhost/projects/Bank/index.php'">Go Back</button>
<div class="transfer">
	<div class = "welcome">
		<h2 class="wel_msg">Welcome <?php echo $row[1]?></h2>
		<p class = "wel_body">Account Number : <?php echo $row[3]?></p>
		<p class = "wel_body">Current Balance : &#8377<span id="balance"><?php echo $row[4]?></span></p>
	</div>
	<br><br>

	<div class="transferto">
		<form onsubmit="return validate()" method="POST" action="http://localhost/projects/Bank/transaction.php">
			<div>
				<label>Transfer To:</label>
				<select class="select" name = "receiver">
					<?php
					while($row2= mysqli_fetch_array($result2))
					{
						echo '<option value ='.$row2["id"].'>'.$row2["name"].'</option>';
					}
					?>
				</select>
			</div>
			<br>
			<div>
				<label>Enter the amount:</label>
				<input class="amount" type = "NUMBER" id='amount' name = 'amount' placeholder="Rs" required>
				<span id="msg" style="color: red;"></span>
			</div>
			<br><br>
				<button class="button" name='submit' type = 'submit'>Transfer</button>
		</form>
	</div>
</div>

<script>
	function validate(){
    var res=document.getElementById("amount").value;
    if(res==0){
        document.getElementById("msg").innerHTML=" Invalid";
        document.getElementById("amount").style.border="1px solid red";
        return false;
	}
}
</script>

</body>
</html>