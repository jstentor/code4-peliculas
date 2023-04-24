
<?= $this->extend('Layouts/dashboard') ?>

<?= $this->section('header') ?>
Crear categoría
<?= $this->endSection('header') ?>

<?= $this->section('contenido') ?>

    <?= view('partials/_session') ?>
   <form action="/dashboard/categoria/create" method="post">
    <?= view('categoria/_form', ['op' => 'Crear']) ?>
    </form>
    
<?= $this->endSection('contenido') ?>
