<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="navbar.css" type="text/css">
    <link rel="stylesheet" href="transfer.css">

    <title>Transaction History</title>

</head>

<body style="background-color: #cc74f2;">

    <nav class="navigation max-width-1 m-auto">
        <div class="main">
            <h3>MB bank</h3>
        </div>

        <div class="div-left">

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="create-user.php">Create User</a></li>
                <li><a href="transfer.php">Transfer Money</a></li>
                <li><a href="#">Transaction History</a></li>
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
                        <th class="text-center">S.No</S></th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Date & Time</th>
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
                        <td class="py-2">
                            <?php echo $rows['sno']; ?>
                        </td>
                        <td class="py-2">
                            <?php echo $rows['sender']; ?>
                        </td>
                        <td class="py-2">
                            <?php echo $rows['receiver']; ?>
                        </td>
                        <td class="py-2">
                            <?php echo $rows['balance']; ?>
                        </td>
                        <td class="py-2">
                            <?php echo $rows['datetime']; ?>
                        </td>
                    </tr>

                    <?php
                    }

                    ?>

                </tbody>


            </table>

        </div>


    </div>

    <div class="footer">
        <a href="" class="footer-link">&copy; 2021 made by Bashat Parween</a>
        <a href="" class="footer-tsf">GRIP The Sparks Foundation.</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>
</body>

</html>