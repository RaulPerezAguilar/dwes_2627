<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora Nutril</title>

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
            <i class="bi bi-calculator"></i>
            <span class="fs-6">Calculadora</span>
        </header>
    
        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <!-- Como hacer un formulario con dos campos -->
                <form method="post">
                <!-- Creamos un formulario a traves de la etiqueta form -->
                <!-- Ahora tenemos que hacer los campos -->
                <!-- Campo 1 a traves de un div-->
                <div class="mb-3">
                    <!-- dentro del div vamos a incluir un label y un imput, el label para el texto de encima y input para relleno-->
                    <label for="valor1" class="form-label">Valor 1:</label>
                    <input type="number" class="form-control" step="0.01" placeholder="0.00" id="valor1" name="valor1" required></input>
                </div>

                <!-- Campo 2 -->
                <div class="mb-3">
                    <label for="valor2" class="form-label">Valor 2:</label>
                    <input type="number" class="form-control" step="0.01" placeholder="0.00" id="valor2" name="valor2" required></input>
                </div>

                <div class="btn-group" role="group">
                    <button type="submit" class="btn btn-warning" name="operacion" value="sumar" formaction="sumar.php">sumar</button>

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



