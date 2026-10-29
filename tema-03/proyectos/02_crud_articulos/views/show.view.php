<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.2 - CRUD Artículos</title>

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
            <span class="fs-6">Proyecto 3.2 - CRUD Artículos</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend>Ficha del Artículo</legend>

                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">id</th>
                            <td><?= $articulo['id'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Descripción</th>
                            <td><?= $articulo['descripcion'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Modelo</th>
                            <td><?= $articulo['modelo'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Categorías</th>
                            <td><?= implode(', ', $articulo['categorias']) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Unidades</th>
                            <td><?= $articulo['unidades'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Precio</th>
                            <td><?= number_format($articulo['precio'], 2, ',', '.') ?> €</td>
                        </tr>
                    </tbody>
                </table>

                <a class="btn-solid theme-primary" href="index.php" role="button">Volver</a>
            </div>
        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Raul Perez Aguilar - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    </div>
</body>

</html>
