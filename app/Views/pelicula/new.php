<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('header') ?>
Añadir película
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>

    <?= view('partials/_form-error') ?>

    <form action="/dashboard/pelicula/create" method="post">
    <?= view('pelicula/_form', ['op' => 'Crear']) ?>
    </form>
    
<?= $this->endSection('contenido') ?>
