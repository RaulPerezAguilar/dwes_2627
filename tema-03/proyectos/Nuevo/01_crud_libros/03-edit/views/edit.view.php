<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.1 - CRUD Libros</title>

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
            <span class="fs-6">Proyecto 3.1 - CRUD Libros</span>
        </header>
        

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend>Formulario Editar Libro</legend>

                <!-- formulario nuevo libro -->
                <form action="update.php" method="post">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?=  $libro['titulo'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor:</label>
                        <input type="text" class="form-control" id="autor" name="autor" value="<?=  $libro['autor'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="editorial" class="form-label">Editorial:</label>
                        <input type="text" class="form-control" id="editorial" name="editorial" value="<?=  $libro['editorial'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="generos" class="form-label">Géneros:</label>
                        <input type="text" class="form-control" id="generos" name="generos" value="<?=  implode(', ', $libro['generos']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="<?=  $libro['precio'] ?>" required>
                    </div>
                    <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                    <button type="reset" class="btn-solid theme-warning">Borrar</button>
                    <button type="submit" class="btn-solid theme-primary">Actualizar Libro</button>
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