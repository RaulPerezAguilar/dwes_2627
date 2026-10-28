<!-- Menú principal de la aplicación -->
<nav class="navbar md:navbar-expand bg-1">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Artículos</a>
        <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" aria-hidden="true"></span>
        </button>
        <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
            <div class="drawer-header">
                <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
            </div>
            <div class="drawer-body mb-2 md:mb-0">
                <ul class="nav navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Listado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="new.php">Nuevo</a>
                    </li>
                    <li class="nav-item">
                        <!-- Ordenar: enlaces a order.php?campo=...&sentido=... -->
                        <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                            Ordenar
                        </button>
                        <div class="menu">
                            <?php foreach (CAMPOS_ORDEN as $clave => $etiqueta): ?>
                                <a class="menu-item" href="order.php?campo=<?= $clave ?>&amp;sentido=asc"><?= e($etiqueta) ?> (ascendente)</a>
                                <a class="menu-item" href="order.php?campo=<?= $clave ?>&amp;sentido=desc"><?= e($etiqueta) ?> (descendente)</a>
                                <?php if ($clave !== array_key_last(CAMPOS_ORDEN)): ?>
                                    <hr class="menu-divider">
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </li>
                </ul>
                <!-- Buscar: envía el término a filter.php por GET -->
                <form class="hstack gap-2" role="search" action="filter.php" method="get">
                    <input class="form-control" type="search" name="q" value="<?= e($q ?? '') ?>" placeholder="Search" aria-label="Search" />
                    <button class="btn-solid btn-icon theme-secondary" type="submit" aria-label="Buscar">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </div>
        </dialog>
    </div>
</nav>
