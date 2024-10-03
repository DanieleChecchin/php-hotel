<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main class="container my-5">
        <h1 class="text-center fw-bold">HOTEL</h1>
        <table class="table table-dark table-striped table-hover">
            <?php foreach ($hotels as $singleHotel) { ?>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">NOME</th>
                    <th scope="col">DESCRIZIONE</th>
                    <th scope="col">PARCHEGGIO</th>
                    <th scope="col">VOTO</th>
                    <th scope="col">DISTANZA DAL CENTRO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td><?= $singleHotel['name']; ?></td>
                    <td><?= $singleHotel['description']; ?></td>
                    <td><?php
                            if ($singleHotel['parking']) {
                                echo 'Disponibile';
                            } else {
                                echo 'NON Disponibile';
                            }
                            ?> </td>
                    <td><?= $singleHotel['vote']; ?></td>
                    <td><?= $singleHotel['distance_to_center']; ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </main>

</body>

</html>