<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
  <title>City Bank</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Yusei Magic', sans-serif;
      letter-spacing: 0.05rem;
    }
    .logo {
      font-size: 1.6rem;
    }
    .nav-link:hover {
      padding: 1px;
      transition: 0.5s;
    }
    .container {
      margin-top: 1rem;
      padding: 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .bankimg img {
      max-width: 100vw;
      max-height: 80vh;
    }
    .bank-description {
      margin: 2rem 0;
      padding: 1rem;
      text-align: center;
    }
    span {
      color: rgb(252, 119, 115);
    }
    .container button {
      padding: 0.5rem 1rem;
      border: none;
      outline: none;
      border-radius: 2rem;
      background-color: rgb(7, 7, 250);
      color: #ffffff;
      font-weight: bold;
    }
    .container button:hover {
      background-color: rgb(252, 119, 115);
    }
    ul {
      list-style: none;
      display: flex
    }

    .social-icon {
      height: 35px;
      width: 35px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      font-size: 27px;
      margin-right: 11px;
      cursor: pointer
    }
    .social-twitter {
      background-color: #55acee;
    }
    .social-facebook {
      background-color: #3b5999;
    }
    .social-linkedin {
      background-color: #0077B5;
    }
    .social-google {
      background-color: #dd4b39;
    }
    .social-instagram {
      background-color: #dd4b39;
    }
    .social-icon i {
      transition: 0.4s all;
    }
    .social-icon:hover i {
      transform: scale(1.2);
    }
    @media (max-width: 900px) {
      .container {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="logo navbar-brand ps-3 pe-3" href="#">City Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/projects/Bank/index.php">Home</a>
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

  <div class="container">
    <div class="bankimg">
      <img src="images/bank.jpg" alt="bank">
    </div>
    <div class="bank-description">
      <p class="fs-2 fw-bold">Welcome to <span>City Bank</span></p>
      <p>The Online Banking made easy for you... </p>
      <button onclick="window.location.href='http://localhost/projects/Bank/index.php'">View Customers</button>
      <br><br>
      <p>Want to know the Transaction History click below</p>
      <button
        onclick="window.location.href='http://localhost/projects/Bank/transaction_history.php'">Transactions</button>
    </div>
  </div>

  <footer class="bg-dark text-light">
    <div class="d-flex flex-column align-items-center">
      <h5 class="my-3 text-center">Follow us on</h5>
      <ul>
        <li><span class="social-icon social-facebook"><i class="fa fa-facebook"></i></span></li>
        <li><span class="social-icon social-google"><i class="fa fa-google"></i></span></li>
        <li><span class="social-icon social-linkedin"><i class="fa fa-linkedin"></i></span></li>
        <li><span class="social-icon social-instagram"><i class="fa fa-instagram"></i></span></li>
        <li><span class="social-icon social-twitter"><i class="fa fa-twitter"></i></span></li>
      </ul>
    </div>
        <p class="link pt-2 pb-5  mb-0 text-center">by <a class="text-decoration-none text-warning"
        href="https://www.linkedin.com/in/rohith-naidu-v-9b0429174">Rohith Naidu V</a></p>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>

</html>