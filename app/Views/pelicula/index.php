<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('header') ?>
Listado de películas
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>

    <a href="/dashboard/pelicula/new">Crear</a>

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
            <a href="/dashboard/pelicula/show/<?= $pelicula['id'] ?>">Ver</a>
            <a href="/dashboard/pelicula/edit/<?= $pelicula['id'] ?>">Editar</a>
            <form action="/dashboard/pelicula/delete/<?= $pelicula['id'] ?>" method="post">
                <button type="submit">Borrar</button>
            </form>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
<?= $this->endSection('contenido') ?>
