<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultados MRUA</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-speedometer2"></i>
            <span class="fs-6">Examen practico 03 - Resultados</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main class="pb-5 mb-5">
            <div class="content">

                <h2 class="h5" style="color: blue">Datos introducidos</h2>
                <table class="table table-sm mb-4">
                    <tbody>
                        <?php foreach ($entrada as [$magnitud, $valor, $unidad]): ?>
                            <tr>
                                <td><?= htmlspecialchars($magnitud) ?></td>
                                <td class="text-end"><?= htmlspecialchars($valor) ?></td>
                                <td><?= htmlspecialchars($unidad) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>  

                <table>
                <h2 class="h5" style="color: blue;">Resultados</h2>
                <table class="table table-sm mb-4">
                    <tbody>
                        <?php foreach ($resultados as [$magnitud, $valor, $unidad]): ?>
                            <tr>
                                <td><?= htmlspecialchars($magnitud) ?></td>
                                <td class="text-end"><?= htmlspecialchars($valor) ?></td>
                                <td><?= htmlspecialchars($unidad) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <a href="index.php" class="btn btn-primary">
                    <i class="bi bi-arrow-left"></i> Nuevo cálculo
                </a>

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

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </div>
  </body>
</html>
