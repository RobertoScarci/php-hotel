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
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <main>
        <table class="table table-hover border">
            <thead> 
                <tr>
                    <th scope="col" class="border">Hotel's Name:</th>
                    <th scope="col" class="border">Description:</th>
                    <th scope="col" class="border">Parking:</th>
                    <th scope="col" class="border">Vote:</th>
                    <th scope="col" class="border">Distance to center:</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                        <td class="border"> <?php echo $hotel['name'] ?></td>
                        <td class="border"> <?php echo $hotel['description'] ?></td>
                        <td class="border"> <?php if ($hotel['parking'] === true) {
                                    echo 'Parcheggio disponibile: si';
                                } else {
                                    echo 'Parcheggio disponibile: no';
                                } ?></td>
                        <td class="border"> <?php echo $hotel['vote'] ?> &star; </td>
                        <td class="border"> <?php echo $hotel['distance_to_center'] . ' km' ?></td>


                    </tr>
            </tbody>
        <?php } ?>
        </table>

    </main>
</body>

</html>