<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 4.1 - CRUD Artículos - POO Encapsulamiento</title>

    <!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


    <!-- icons bootstrap 1.13.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 4.1 - CRUD Artículos - POO Encapsulamiento</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend>Formulario Nuevo Artículo</legend>

                <form action="create.php" method="post">
                    <!-- descripcion -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>
                    <!-- Modelo -->
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" required>
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
                                <button class="menu-item" type="button" data-bs-value="<?= htmlspecialchars($indice) ?>"><?= $marca ?></button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Marca -->

                    <!-- unidades -->
                    <div class="mb-3">
                        <label for="unidades" class="form-label">Unidades:</label>
                        <input type="number" min="0" step="1" class="form-control" id="unidades" name="unidades" required>
                    </div>
                    <!-- precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" min="0" step="0.01" class="form-control" id="precio" name="precio" required>
                    </div>
                    <!-- Categorías -->
                    <!-- Genera dinámicamente una lista checbox de categorías a partir del array $categorias -->
                    <div class="mb-3">
                        <label for="categorias" class="form-label">Categorías:</label>
                        <?php foreach ($categorias as $indice => $categoria) : ?>
                            <div class="form-check">
                                <div class="form-field">
                                    <input type="checkbox" id="checkaccent" class="check theme-secondary" name="categorias[]" value="<?= htmlspecialchars($indice) ?>" />
                                    <label for="checkaccent"><?= $categoria ?></label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <br>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-primary">Crear Artículo</button>
                    </div>

                </form>
            </div>

        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Juan Carlos Moreno - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    </div>
</body>

</html>