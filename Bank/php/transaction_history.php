<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <title>Transaction History</title>
    <style>
    *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: 'Roboto Slab', serif
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
    tr:nth-child(even){
			background-color:#f2f2f2;
		}
        th{
			background-color: rgb(252, 119, 115);
		}
		td, th{
			border: 1px solid black;
			text-align: center;
			padding:7px 20px;
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

<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM transaction order by slno desc");
?>
    <div class="header">
        <h1>Transaction History</h1>
    </div>

    <div class = "main">
        <table>
            
            <thead class="table-head">
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount Transfered &#8377</th>
                <th>Date</th>
            </thead>

            <?php
            while($res = mysqli_fetch_assoc($result)) {         
            echo "<tr class='body-row'>";
            echo "<td>".$res['sender']."</td>";
            echo "<td>".$res['receiver']."</td>";
            echo "<td>".$res['amount']."</td>";
            echo "<td>".$res['date']."</td>";
            echo "</tr>";
                }
            ?>

        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>