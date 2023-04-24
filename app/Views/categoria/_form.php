<div>
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" value="<?= old('titulo', $categoria['titulo']) ?>">
</div>
<div>
    <button type="submit"><?= $op ?></button>
</div>