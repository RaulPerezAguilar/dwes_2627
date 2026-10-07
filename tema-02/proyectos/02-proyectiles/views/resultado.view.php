<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.2 - Calculadora de Proyectiles</title>

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
            <i class="bi bi-rocket"></i>
            <span class="fs-6">Proyecto 2.2 - Calculadora de Proyectiles</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                <?php else: ?>

                    <!-- Tabla 1: valores iniciales -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Valores Iniciales:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-50">Velocidad Inicial:</td>
                                <td><?php echo $velocidad_inicial; ?> m/s</td>
                            </tr>
                            <tr>
                                <td>Ángulo Inclinación:</td>
                                <td><?php echo $angulo_lanzamiento; ?> º</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Tabla 2: resultados -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Resultados:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-50">Ángulo Radianes:</td>
                                <td><?php echo $angulo_radianes; ?> Radianes</td>
                            </tr>
                            <tr>
                                <td>Velocidad Inicial X:</td>
                                <td><?php echo $velocidad_x; ?> m/s</td>
                            </tr>
                            <tr>
                                <td>Velocidad Inicial Y:</td>
                                <td><?php echo $velocidad_y; ?> m/s</td>
                            </tr>
                            <tr>
                                <td>Alcance Máximo del Proyectil:</td>
                                <td><?php echo $alcance_maximo; ?> m</td>
                            </tr>
                            <tr>
                                <td>Tiempo de Vuelo del Proyectil:</td>
                                <td><?php echo $tiempo_vuelo; ?> s</td>
                            </tr>
                            <tr>
                                <td>Altura Máxima del Proyectil:</td>
                                <td><?php echo $altura_maxima; ?> m</td>
                            </tr>
                        </tbody>
                    </table>

                <?php endif; ?>

                <!-- botones de acción -->
                <div class="btn-group" role="group">
                    <a class="btn btn-warning" href="index.php" role="button">Nuevo Cálculo</a>
                </div>

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

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </div>
  </body>
</html>