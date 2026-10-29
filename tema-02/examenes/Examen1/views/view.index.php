<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculo MRUA</title>

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
            <span class="fs-6">Examen practico 03 - Movimiento rectilineo uniformemente acelerado</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main class="pb-5 mb-5">
            <div class="content">

                <?php if (!empty($errores)): ?>
                    <div class="alert alert-danger" role="alert">
                        <ul class="mb-0">
                            <?php foreach ($errores as $error): ?>
                                <li><?= htmlspecialchars($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="calcular.php" method="post" novalidate>
                    <div class="mb-3">
                        <label for="v0" class="form-label">Velocidad inicial (m/s)</label>
                        <div class="input-group">
                            <input type="text" inputmode="decimal" class="form-control" id="v0" name="v0"
                                   value="<?= htmlspecialchars($datos['v0']) ?>" placeholder="20,00" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="a" class="form-label">Aceleración (m/s²)</label>
                        <div class="input-group">
                            <input type="text" inputmode="decimal" class="form-control" id="a" name="a"
                                   value="<?= htmlspecialchars($datos['a']) ?>" placeholder="1,67" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="t" class="form-label">Tiempo transcurrido (s)</label>
                        <div class="input-group">
                            <input type="text" inputmode="decimal" class="form-control" id="t" name="t"
                                   value="<?= htmlspecialchars($datos['t']) ?>" placeholder="6,00" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="m" class="form-label">Masa del cuerpo (kg)</label>
                        <div class="input-group">
                            <input type="text" inputmode="decimal" class="form-control" id="m" name="m"
                                   value="<?= htmlspecialchars($datos['m']) ?>" placeholder="120,00" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-calculator"></i> Calcular
                    </button>
                </form>

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
