<?php
    include("queries.php");
    include("sessionHandling.php");

    $allReserves = getAllReservations();
?>

<head>
    <meta charset="utf-8">
    <meta name="Century Elm Dev" content="WebDevProject">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="headerCSS.css">
    <link rel="stylesheet" type="text/css" href="reservation.css">
    <link rel="stylesheet" href="footerCSS.css">
    <Title>Reservations</Title>
</head>

<body>
    <?php include 'headerFile.php'; ?>
    <table>
        <tr>
            <td>ID</td>
            <td>Date</td>
            <td>Time</td>
            <td>Party Name</td>
            <td>Phone</td>
            <td>Number of Guests</td>
            <td>Special Requests (If any)</td>
        </tr>

        <?php foreach($allReserves as $row) { ?>
            <tr>
                <td><?= $row["id"]?></td>
                <td><?= $row["party_name"]?></td>
                <td><?= $row["phone"]?></td>
                <td><?= $row["num_guest"]?></td>
                <td><?= $row["date"]?></td>
                <td><?= $row["time"]?></td>
                <td><?= $row["special"]?></td>
            </tr>
         <?php
        }
        ?>
    </table>

    <a href="Reservation.php">Go Back to Reservations</a>
</body>