<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('header') ?>
Ver película
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>

    <h1><?= $pelicula['titulo'] ?></h1>
    <p><?= $pelicula['descripcion'] ?></p>

<?= $this->endSection('contenido') ?>
