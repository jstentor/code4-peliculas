<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('header') ?>
Listado de categorías
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>

    <a href="/dashboard/categoria/new">Crear</a>

    <table>
        <tr>
            <th>Título</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($data as $categoria) : ?>
        <tr>
            <td><?= $categoria['titulo'] ?></td>
            <td>
            <a href="/dashboard/categoria/edit/<?= $categoria['id'] ?>">Editar</a>
            <form action="/dashboard/categoria/delete/<?= $categoria['id'] ?>" method="post">
                <button type="submit">Borrar</button>
            </form>
            </td>
        </tr>
        <?php endforeach ?>
    </table>

<?= $this->endSection('contenido') ?>
