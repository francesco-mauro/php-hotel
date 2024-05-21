<?php
// Array di hotel
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
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <!-- bel titolo tabella  -->
        <h1 class="mb-4 text-center">Lista Hotel</h1>
        <!-- tabella, prima riga senza php  -->
        <table class="table table-bordered">
            <div>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to Center (km)</th>
                </tr>
            </div>
            <!-- tabella, corpo, con php -->
            <div>
                <?php
                foreach ($hotels as $hotel) {
                    echo '<tr>';
                        echo '<td>' . $hotel['name'] . '</td>';
                        echo '<td>' . $hotel['description'] . '</td>';
                        echo '<td>' . $hotel['parking'] ? 'yes' : 'no' . '</td>';
                        echo '<td>' . $hotel['vote'] . '</td>';
                        echo '<td>' . $hotel['distance_to_center'] . '</td>';
                    echo '</tr>';
                }
                ?>
                </div>
        </table>
    </div>
</body>

</html>