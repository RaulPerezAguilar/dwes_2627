<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 1 - Echo o Print</title>

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
            <i class="bi bi-stack"></i>
            <span class="fs-6">Ejercicio 1 - Echo o Print</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <?php
                    // Título
                    echo "<h1>El auge de las energías renovables en España</h1>";

                    // Párrafo de al menos 3 líneas
                    echo "<p>";
                    echo "España cerró el último año con un récord de producción eléctrica de origen renovable. ";
                    echo "La energía solar fotovoltaica y la eólica lideran el crecimiento, y comunidades como ";
                    echo "Andalucía, Castilla-La Mancha y Aragón concentran los mayores proyectos. ";
                    echo "Los expertos destacan que este avance reduce la dependencia del gas importado ";
                    echo "y contribuye a abaratar el precio de la electricidad en las horas de más sol.";
                    echo "</p>";

                    // Enlace a El País
                    echo '<a href="http://www.elpais.es" target="_blank" class="btn btn-primary">Leer más en El País</a>';
                ?>
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