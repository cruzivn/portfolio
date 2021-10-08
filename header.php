<header>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link pe-5 <?php echo ($pg == "inicio") ? "active" : ""  ?>" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5 <?php echo ($pg == "sobre-mi") ? "active" : ""  ?>" href="sobre-mi.php">Sobre mi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5 <?php echo ($pg == "proyectos") ? "active" : ""  ?>" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5 <?php echo ($pg == "contacto") ? "active" : ""  ?>" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="curriculum d-flex px-3 py-2 border border-dark">
            <i class="fas fa-file-download"></i>
            <div class="ps-3">
                <h3 class="m-0">Descarga mi CV</h3>
            </div>

        </div>
    </nav>
</header>