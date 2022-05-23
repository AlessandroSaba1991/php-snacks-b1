<?php
/* 
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <style>
        .rectangle{
            width: fit-content;
            padding: 1rem;
            color: white;
            margin-bottom: 1rem;
        }
        .green {
            background-color: green;
        }

        .gray {
            background-color: gray;
        }
    </style>
</head>

<body>
    <main>
        <?php foreach ($db as $key => $value) : ?>
            <div class="rectangle <?= $key === 'teachers' ? 'gray' : 'green' ?>">
                <?php foreach ($value as $detail) : ?>
                    <p><?= $detail['name'] . " " . $detail['lastname'] ?> </p>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

    </main>
</body>

</html>