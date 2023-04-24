<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('header') ?>
Editar película
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>


    <form action="/dashboard/pelicula/update/<?= $pelicula['id'] ?>" method="post">
    <?= view('pelicula/_form', ['op' => 'Actualizar']) ?>
    </form>

<?= $this->endSection('contenido') ?>
