<?php 
/* 
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/
$text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. In non exercitationem consectetur enim voluptatem nam maiores alias quasi, totam nihil porro. Non temporibus velit fugit pariatur placeat labore repellendus, natus facere ullam! Maiores dignissimos error iusto. Dolores soluta quae rerum quibusdam, voluptatem repudiandae ratione quo omnis architecto? Qui esse ipsam distinctio assumenda ducimus consequatur provident. Vel, soluta voluptatum facilis ratione tempore ab adipisci dicta. Doloremque reprehenderit est tempora quia praesentium inventore aliquam odio provident alias recusandae illo quidem porro accusantium, facere voluptatem soluta, quis maiores quisquam voluptas corporis omnis quasi. Incidunt illo optio commodi pariatur voluptates. Delectus sed similique eaque!";
$texts = explode('.',$text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <main>
        <?php foreach($texts as $value) : ?>
        <p><?= $value; ?></p>
        <?php endforeach; ?>
    </main>
</body>
</html>