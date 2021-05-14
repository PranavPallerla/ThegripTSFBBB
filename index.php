<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Basic Banking System</title>

</head>

<body>

    <!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-warning">
    <a href="index.php" class="navbar-brand" style="color: black;"><b>TSF Bank</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navabar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item" >
                <a href="index.php" class="nav-link" style="color: #E9967A ;"><b>Home</b></a>
            </li>
            <li class="nav-item">
                <a href="transfermoney.php" class="nav-link" style="color: #E9967A ;"><b>Transfer Money</b></a>
            </li>
            <li class="nav-item">
                <a href="transactionhistory.php" class="nav-link" style="color: #E9967A ;"><b>Transaction History</b></a>
            </li>
        </ul>

    </div>

</nav>

    <div class="container-fluid">
        <div class="row intro py-1" style="background-color: black;">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h1>TSF Bank </h1>
                    <h2>**Welcomes you**</h2>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" alt="banking" class="img-fluid pt-2">
            </div>
        </div>

        <div class="row activity text-center">

            <div class="col-md act">
                <img src="img/transfer.png" alt="transfer" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button style="background-color: 002147;">Make a Transaction</button></a>
            </div>

            <div class="col-md act">
                <img src="img/history.png" alt="history" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button style="background-color: 002147;">Transaction History</button></a>
            </div>

        </div>

    </div>

    <footer class="text-center mt-5 py-2">
        <p>&copy MAY2021. Made by <b>Pranav Pallerla</b><br>GRIP TheSparksFoundation.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>