<?php
// Muestra el mensaje de éxito ($mensaje) y/o la lista de errores ($errores), si existen
?>
<?php if (!empty($mensaje)): ?>
    <div class="alert theme-success" role="alert">
        <i class="bi bi-check-circle"></i> <?= e($mensaje) ?>
    </div>
<?php endif; ?>

<?php if (!empty($errores)): ?>
    <div class="alert theme-danger" role="alert">
        <i class="bi bi-exclamation-triangle"></i> Revise los siguientes puntos:
        <ul class="mb-0">
            <?php foreach ($errores as $error): ?>
                <li><?= e($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
