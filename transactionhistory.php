<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/table.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Transaction History</title>

</head>

<body style="background-color: #8B8989;">

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

    <div class="container">
        <h2 class="text-center pt-4" style="color: black;">Transaction History</h2>

        <br>
        <div class="table-responsive-sm">
            <table class="table table-hover table-striped table-condensed table-bordered">
                <thead style="color: black;">
                    <tr>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';

                    $sql = "SELECT * FROM `transaction`";
                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {

                    ?>

                        <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['sender']; ?></td>
                            <td class="py-2"><?php echo $rows['receiver']; ?></td>
                            <td class="py-2"><?php echo $rows['amount']; ?></td>
                        </tr>

                    <?php
                    }

                    ?>

                </tbody>


            </table>

        </div>


    </div>

    <footer class="text-center mt-5 py-2">
        <p>&copy May2021. Made by <b>Pallerla Pranav</b><br>GRIP TheSparksFoundation.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>