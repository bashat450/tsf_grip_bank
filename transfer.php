<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" href="transfer.css">

    <style type="text/css">
        button {
            transition: 1.5s;
        }

        button:hover {
            background-color: #F9F80A;
            color: white;
        }
    </style>
</head>

<body style="background-color : #34ced3;">
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>

    <nav class="navigation max-width-1 m-auto">
        <div class="main">
            <h3>MB bank</h3>
        </div>

        <div class="div-left">

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="create-user.php">Create User</a></li>
                <li><a href="#">Transfer Money</a></li>
                <li><a href="transaction.php">Transaction History</a></li>
            </ul>
        </div>

    </nav>

    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered"
                        style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr style="color : black;">
                                <td class="py-2">
                                    <?php echo $rows['id'] ?>
                                </td>
                                <td class="py-2">
                                    <?php echo $rows['name'] ?>
                                </td>
                                <td class="py-2">
                                    <?php echo $rows['email'] ?>
                                </td>
                                <td class="py-2">
                                    <?php echo $rows['balance'] ?>
                                </td>
                                <td><a href="uesrdetails.php"> <button type="button" class="btn"
                                            style="background-color : #A569BD;">Transfer</button></a></td>
                            </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
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