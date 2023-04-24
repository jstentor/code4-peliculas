<div>
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" value="<?= old('titulo', $pelicula['titulo']) ?>">
</div>
<div> 
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?= old('descripcion', $pelicula['descripcion']) ?></textarea>
</div>
<div>
    <button type="submit"><?= $op ?></button>
</div>