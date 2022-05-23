<?php
/* 
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
*/

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

foreach ($posts as $data => $post) {
    foreach ($post as $value) {
        echo "<h1> $data </h1>";
        foreach ($value as $key => $detail) {
            echo "<p> $key:  $detail </p>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <style>
        .card {
            width: 33%;
            padding: 1rem;
        }
    </style>
</head>

<body>
    <main>
        <?php foreach ($posts as $data => $post) : ?>
            <div class="card">

                <div class="text">



                    <?php foreach ($post as $value) : ?>
                        <h1> <?php echo $data; ?> </h1>
                        <?php foreach ($value as $key => $detail) : ?>
                            <p> <?php echo $key . ": " . $detail ?> </p>
                        <?php endforeach; ?>
                        <img src="" alt="">
                    <?php endforeach; ?>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="card">

                <div class="text">
                    <h1></h1>
                    <p></p>
                </div>

                <img src="" alt="">

            </div>

    </main>
</body>

</html>