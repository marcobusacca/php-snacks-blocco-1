<!-- SCRIPT PHP -->
<?php 

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
        <title>php-snack-2</title>
    </head>
    <body>
        <!-- Main -->
        <main>
            <!-- Main Container -->
            <div class="container my-5">
                <!-- Main Row -->
                <div class="row">
                    <!-- Title Col -->
                    <div class="col-12 text-center">
                        <h1>Accedi</h1>
                    </div>
                    <!-- Form Col -->
                    <div class="col-12 d-flex justify-content-center my-5">
                        <!-- Form -->
                        <form action="index.php" method="GET" class="text-center border border-black p-5">
                            <!-- Input Name -->
                            <input type="text" name="user-name" placeholder="Inserisci il tuo nome" class="w-100 py-1 px-3 my-3">
                            <!-- Input Mail -->
                            <input type="email" name="user-email" placeholder="Inserisci la tua email" class="w-100 py-1 px-3 my-3">
                            <!-- Input Age -->
                            <input type="number" name="user-age" placeholder="Inserisci la tua età" min="1" class="w-100 py-1 px-3 my-3">
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-success mt-3">Accedi</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- Fine Main -->
    </body>
</html>