<!-- SCRIPT PHP -->
<?php 
    // ARRAY MATCHES
    $matches = [
        [
            'homeTeam'      =>      'Olimpia Milano',
            'awayTeam'      =>      'Cantù',
            'homePoints'    =>      55,
            'awayPoints'    =>      60,
        ],
        [
            'homeTeam'      =>      'Virtus Bologna',
            'awayTeam'      =>      'Derthona Basket',
            'homePoints'    =>      102,
            'awayPoints'    =>      75,
        ],
        [
            'homeTeam'      =>      'Basket Brindisi',
            'awayTeam'      =>      'Reyer Venezia Mestre',
            'homePoints'    =>      99,
            'awayPoints'    =>      87,
        ],
        [
            'homeTeam'      =>      'Polisportiva Dinamo',
            'awayTeam'      =>      'Scafati Basket',
            'homePoints'    =>      96,
            'awayPoints'    =>      92,
        ],
        [
            'homeTeam'      =>      'Pallacanestro Varese',
            'awayTeam'      =>      'Pistoia Basket',
            'homePoints'    =>      112,
            'awayPoints'    =>      109,
        ],
    ];
?>

<!-- TEMPLATE HTML -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDN CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Head Title -->
        <title>php-snack-1</title>
    </head>
    <body>
        <!-- Main -->
        <main>
            <!-- Main Container -->
            <div class="container my-5">
                <!-- Main Row -->
                <div class="row">
                    <!-- Title Col -->
                    <div class="col-12 text-center my-5">
                        <!-- Title -->
                        <h1>03/07/2023 - Partite Basket</h1>
                    </div>
                    <hr>
                    <!-- Matches Col -->
                    <?php foreach($matches as $match){ ?>
                        <div class="col-12 text-center border py-3">
                            <?php echo $match['homeTeam']." - ".$match['awayTeam']." | ".$match['homePoints']." - ".$match['awayPoints'] ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>
        <!-- Fine Main -->
    </body>
</html>