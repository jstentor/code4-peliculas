<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear película</title>
</head>
<body>
    <form action="/pelicula/update/<?= $pelicula['id'] ?>" method="post">
    <?= view('pelicula/_form', ['op' => 'Actualizar']) ?>
    </form>
    
</body>
</html>