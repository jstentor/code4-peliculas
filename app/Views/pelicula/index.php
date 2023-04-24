<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<body>
    <h1>Listado de películas</h1>

    <a href="/pelicula/new">Crear</a>

    <table>
        <tr>
            <th>Título</th>
            <th>Resumen</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($data as $pelicula) : ?>
        <tr>
            <td><?= $pelicula['titulo'] ?></td>
            <td><?= $pelicula['descripcion'] ?></td>
            <td>
            <a href="/pelicula/show/<?= $pelicula['id'] ?>">Ver</a>
            <a href="/pelicula/edit/<?= $pelicula['id'] ?>">Editar</a>
            <form action="/pelicula/delete/<?= $pelicula['id'] ?>" method="post">
                <button type="submit">Borrar</button>
            </form>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>