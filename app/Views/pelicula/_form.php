<div>
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" value="<?= $pelicula['titulo'] ?>">
</div>
<div> 
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?= $pelicula['descripcion']?></textarea>
</div>
<div>
    <button type="submit"><?= $op ?></button>
</div>