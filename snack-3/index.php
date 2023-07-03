<!-- SCRIPT PHP -->
<?php 
    // ARRAY POSTS
    $posts = [

        '01-07-2023' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Adelia Trevisani',
                'text' => 'Testo post 2'
            ],
        ],
        '02-07-2023' => [
            [
                'title' => 'Post 1',
                'author' => 'Rosanna Angelo',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Gianfranco Sagese',
                'text' => 'Testo post 2'
            ],
            [
                'title' => 'Post 3',
                'author' => 'Cirillo Ferrari',
                'text' => 'Testo post 3'
            ],
        ],
        '03-07-2023' => [
            [
                'title' => 'Post 1',
                'author' => 'Marzio Bergamaschi',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Silvana Arcuri',
                'text' => 'Testo post 2'
            ],
            [
                'title' => 'Post 3',
                'author' => 'Sandro Iadanza',
                'text' => 'Testo post 3'
            ],
            [
                'title' => 'Post 4',
                'author' => 'Daniela Mancini',
                'text' => 'Testo post 4'
            ],
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
        <title>php-snack-3</title>
    </head>
    <body>
        <!-- Main -->
        <main>
            <!-- Main Container -->
            <div class="container my-5">
                <!-- Main Row -->
                <div class="row">
                    <?php foreach($posts as $key => $date){?>
                        <div class="col-12 text-center my-5">
                            <h1>
                                <?php echo $key." - "."POSTS" ?>
                            </h1>
                        </div>
                        <hr>
                    <?php } ?>
                </div>
            </div>
        </main>
        <!-- Fine Main -->
    </body>
</html>