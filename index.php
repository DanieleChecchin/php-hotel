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





if (isset($_GET['park']) && $_GET['park'] === 'on') {  // Controllo se è settato il park e se è ON tramite un if e la checkbox

    $filteredHotels = []; // Solo gli hotel col park

    foreach ($hotels as $singleHotel) { // Per ogni hotel ..
        if ($singleHotel['parking'] === true) { // Verifico che il singolo hotel abbia il park disponibile
            $filteredHotels[] = $singleHotel; // Inserisco l'hotel nell'array nuovo    
        }
    }                                            // Poi devo iterare su $filteredHotels !!!
} else {
    $filteredHotels = $hotels;
}

// VOTE

if (isset($_GET['vote']) && ($_GET['vote']) >= 1 && ($_GET['vote']) <= 5) {

    $filteredVote = [];

    foreach ($filteredHotels as $singleHotel) {
        if ($singleHotel['vote'] >= $_GET['vote']) {
            $filteredVote[] = $singleHotel;
        }
    }

    $filteredHotels = $filteredVote;
}

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
            <div class="form-check mb-3">
                <label class="form-check-label" for="park">Parcheggio:</label>
                <input class="form-check-input" type="checkbox" id="park" name="park">
            </div>

            <!--Voto-->
            <div class="input-group w-25 mb-3">
                <label class="form-check-label me-3" for="vote">Voto:</label>
                <input class="form-control" type="number" id="vote" name="vote" min="1" max="5">
            </div>

            <!--Bottoni-->
            <div class="buttons mb-5">
                <button type="submit" class="btn btn-primary mx-2">Filtra</button>
                <button type="reset" class="btn btn-warning">Annulla</button>
            </div>
        </form>

        <!--Tabella-->



        <table class="table table-dark table-striped table-hover">
            <?php foreach ($filteredHotels as $singleHotel) { ?>

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
                    <td><?= ($singleHotel['parking']) ? 'Disponibile' : 'NON Disponibile'; ?> </td>
                    <!--Ternario, versione breve dell'if-->
                    <td><?= $singleHotel['vote']; ?></td>
                    <td><?= $singleHotel['distance_to_center']; ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>

    </main>

</body>

</html>