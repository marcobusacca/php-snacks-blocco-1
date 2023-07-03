<!-- SCRIPT PHP -->
<?php 
    // ARRAY RANDOM NUMBERS
    $randomNumbers = [];

    // NUMERO MASSIMO DI NUMERI RANDOM UNIVOCI DA GENERARE
    $maxNumbers = 15;

    // CICLO WHILE CHE VIENE ESEGUITO FINCHE LA LUNGHEZZA DELL'ARRAY RANDOM_NUMBERS NON è UGUALE A 15
    while(count($randomNumbers) < $maxNumbers){
        // GENERO UN NUMERO RANDOM DA 1 A 100
        $randomNumber = rand(1, 100);

        // CONTROLLO CHE IL NUMERO GENERATO NON SIA PRESENTE NELL'ARRAY RANDOM_NUMBERS
        if(!in_array($randomNumber, $randomNumbers)){
            // SE NON è PRESENTE, LO INSERISCO NELL'ARRAY
            $randomNumbers[] = $randomNumber;
        }
    }
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
        <title>php-snack-4</title>
    </head>
    <body>
        <!-- Main -->
        <main>
            <!-- Main Container -->
            <div class="container">
                <!-- Main Row -->
                <div class="row">
                </div>
            </div>
        </main>
        <!-- Fine Main -->
    </body>
</html>