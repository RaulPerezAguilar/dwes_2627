<?php
// Campos comunes de los formularios nuevo/editar. Variable esperada: $articulo
// Las categorías se escriben como texto separado por comas.
$categorias_texto = is_array($articulo['categorias']) ? implode(', ', $articulo['categorias']) : $articulo['categorias'];
?>
<div class="mb-3">
    <label for="descripcion" class="form-label">Descripción:</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= e($articulo['descripcion']) ?>" required>
</div>
<div class="mb-3">
    <label for="modelo" class="form-label">Modelo:</label>
    <input type="text" class="form-control" id="modelo" name="modelo" value="<?= e($articulo['modelo']) ?>" required>
</div>
<div class="mb-3">
    <label for="categorias" class="form-label">Categorías (separadas por comas):</label>
    <input type="text" class="form-control" id="categorias" name="categorias" value="<?= e($categorias_texto) ?>" placeholder="telefonía, fotografía">
</div>
<div class="mb-3">
    <label for="unidades" class="form-label">Unidades:</label>
    <input type="number" min="0" step="1" class="form-control" id="unidades" name="unidades" value="<?= e($articulo['unidades']) ?>" required>
</div>
<div class="mb-3">
    <label for="precio" class="form-label">Precio:</label>
    <input type="number" min="0" step="0.01" class="form-control" id="precio" name="precio" value="<?= e($articulo['precio']) ?>" required>
</div>
