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

$park = $_GET['park'];

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
    <main class="container mb-5">
        <h1 class="text-center fw-bold">HOTEL</h1>

        <!--Forms-->
        <form method="GET">

            <!--Parcheggio-->
            <label for="park">Parcheggio:</label>
            <select class="my-5 w-25" name="park" id="park">
                <option value="" disabled selected>Filtra in base al parcheggio</option>
                <option value="1">Disponibile</option>
                <option value="2">NON Disponibile</option>
            </select>

            <!--Voto-->
            <label for="vote">Voto:</label>
            <select class="my-5 w-25" name="vote" id="vote">
                <option value="" disabled selected>Filtra in base al voto</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="1">5</option>
            </select>

            <br>

            <!--Bottoni-->
            <div class="buttons mb-5">
                <button type="submit" class="btn btn-primary mx-2">Filtra</button>
                <button type="reset" class="btn btn-warning">Annulla</button>
            </div>
        </form>

        <!--Tabella-->
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

        <?php echo $park; ?>
    </main>

</body>

</html>