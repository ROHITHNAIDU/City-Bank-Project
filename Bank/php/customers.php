<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
	<title>Customers</title>
    <style>
		*{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
			font-family: 'Roboto Slab', serif;
      		letter-spacing: 0.05rem;
        }
		.logo {
      	font-size: 1.6rem;
    	}
		.nav-link:hover{
     	padding: 1px;
      	transition: 0.5s;
    	}
        h1{
            text-align: center;
			margin: 2rem 0;
        }
		.main{
			overflow-x:auto;
			margin: 1rem;
		}
		table{
			border-collapse: collapse;
			max-width:100vw;
			margin: 0 auto;
		}
		td, th{
			border: 1px solid black;
			text-align: center;
			padding:7px 20px;
		}
		th{
			background-color: rgb(252, 119, 115);
		}
		tr:nth-child(even){
			background-color:#f2f2f2;
		}
		button{
          padding: 0.3rem 1.5rem;
          border: none;
		  outline: none;
          border-radius: 2rem;
          background-color: rgb(7, 7, 250);
          color: #ffffff;
        }
        button:hover{
          background-color: rgb(252, 119, 115);
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="logo navbar-brand ps-3 pe-3" href="http://localhost/projects/Bank/index.html">City Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/projects/Bank/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/projects/Bank/index.php">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/projects/Bank/transaction_history.php">Transactions</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>	

    <h1>Customers</h1>
    <?php
	include 'config.php';
	$sql = mysqli_query($conn, "SELECT * FROM customers");
	?>

	<div class = "main">
			<table>
				<thead class="table-head">
					<th>Customer ID</th>
					<th>Customer Name</th>
					<th>Email</th>
					<th>Account Number</th>
					<th>Current Balance &#8377</th>
					<th>View</th>
				</thead>

				<?php
				while($res = mysqli_fetch_assoc($sql)) {         
	            echo "<tr>";
	            echo "<td>".$res['id']."</td>";
	            echo "<td>".$res['name']."</td>";
	            echo "<td>".$res['email']."</td>";
	            echo "<td>".$res['accountnumber']."</td>";
	            echo "<td>".$res['balance']."</td>";
				echo '<td><form method = "POST" action = "http://localhost/projects/Bank/transfer.php">
				<button type="submit" name='.$res["id"].'> View </button></form></td>'; 
	            echo "</tr>";
	      		  }
				?>

			</table>
	</div>
	

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>