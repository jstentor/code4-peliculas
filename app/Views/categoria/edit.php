<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('header') ?>
Editar categoría
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>

    <?= view('partials/_form-error') ?>

    <?= view('partials/_session') ?>
    <form action="/dashboard/categoria/update/<?= $categoria['id'] ?>" method="post">
    <?= view('categoria/_form', ['op' => 'Actualizar']) ?>
    </form>
    
<?= $this->endSection('contenido') ?>
