<!doctype html>
<html lang="es">

<head>
    <!-- Cargar HEAD, meta etiquetas y diseño de la aplicación -->
    <?php require_once __DIR__ . '/layouts/head.layout.php'; ?>
    <title>Proyecto 4.2 - CRUD Artículos - POO Sin Encapsulamiento</title>
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera HEADER de la aplicación -->
        <?php require_once __DIR__ . '/partials/header.partial.php'; ?>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend>Formulario Edición Artículo</legend>

                <form action="update.php?id=<?= $id ?>" method="post">
                    <!-- descripcion -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $articulo->descripcion ?>" required>
                    </div>
                    <!-- Modelo -->
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" value="<?= $articulo->modelo ?>" required>
                    </div>
                    <!-- Marca -->
                    <!-- Genera dinámicamente el select de marcas a partir del array $marcas -->
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca:</label>
                        <button class="form-control combobox-toggle" type="button"
                            data-bs-toggle="combobox"
                            data-bs-name="marca"
                            data-bs-placeholder="Seleccione marca …">
                            <span class="combobox-value">Seleccione Marca ...</span>
                            <svg class="combobox-caret" width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.46967 5.46967C0.762563 5.17678 1.23744 5.17678 1.53033 5.46967L5 8.93934L8.46967 5.46967C8.76256 5.17678 9.23744 5.17678 9.53033 5.46967C9.82322 5.76256 9.82322 6.23744 9.53033 6.53033L5.53033 10.5303C5.23744 10.8232 4.76256 10.8232 4.46967 10.5303L0.46967 6.53033C0.176777 6.23744 0.176777 5.76256 0.46967 5.46967Z" fill="currentcolor" />
                            </svg>
                        </button>
                        <div class="menu">
                            <?php foreach ($marcas as $indice => $marca) : ?>
                                <button class="menu-item <?= ($articulo->marca == $indice)? 'selected':null ?>" type="button" data-bs-value="<?= $indice ?>"><?= $marca ?></button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Marca -->

                    <!-- unidades -->
                    <div class="mb-3">
                        <label for="unidades" class="form-label">Unidades:</label>
                        <input type="number" min="0" step="1" class="form-control" id="unidades" name="unidades" value="<?= $articulo->unidades ?>" required>
                    </div>
                    <!-- precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" min="0" step="0.01" class="form-control" id="precio" name="precio" value="<?= $articulo->precio ?>" required>
                    </div>
                    <!-- Categorías -->
                    <!-- Genera dinámicamente una lista checbox de categorías a partir del array $categorias -->
                    <div class="mb-3">
                        <label for="categorias" class="form-label">Categorías:</label>
                        <?php foreach ($categorias as $indice => $categoria) : ?>
                            <div class="form-check">
                                <div class="form-field">
                                    <input type="checkbox" id="checkaccent" class="check theme-secondary" name="categorias[]" value="<?= $indice ?>" <?= in_array($indice, $articulo->categorias)? 'checked': null ?> />
                                    <label for="checkaccent"><?= $categoria ?></label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <br>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-primary">Actualizar Artículo</button>
                    </div>

                </form>
            </div>

        </main>

        <!-- pie de página de la aplicación -->
        <?php require_once __DIR__ . '/partials/footer.partial.php'; ?>

        <!-- js bootstrap básico 6.0 -->
        <?php require_once __DIR__ . '/layouts/js_bootstrap.php'; ?>
</body>

</html>