<?php include('templates/header.php'); ?>

<div class="jumbotron text-center mb-5">
    <h1 class="display-4">Bienvenido a TechSolutions</h1>
    <p class="lead">Tu socio de confianza en asesoría tecnológica.</p>
    <a href="services.php" class="btn btn-primary btn-lg mt-4">Descubre Nuestros Servicios</a>
</div>

<section class="mt-5">
    <h2 class="text-center mb-4">Nuestros Servicios</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Consultoría</h5>
                    <p class="card-text">Ayudamos a tu empresa a aprovechar al máximo la tecnología.</p>
                    <a href="services.php" class="btn btn-outline-primary">Saber Más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Desarrollo de Software</h5>
                    <p class="card-text">Creamos soluciones de software personalizadas para tu negocio.</p>
                    <a href="services.php" class="btn btn-outline-primary">Saber Más</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Seguridad Informática</h5>
                    <p class="card-text">Protegemos tu información y garantizamos la seguridad de tus sistemas.</p>
                    <a href="services.php" class="btn btn-outline-primary">Saber Más</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    <h2 class="text-center mb-4">Testimonios de Clientes</h2>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <blockquote class="blockquote text-center">
                    <p class="mb-4">TechSolutions nos ayudó a mejorar nuestra infraestructura de TI de manera eficiente y efectiva.</p>
                    <footer class="blockquote-footer">Juan Rojas</footer>
                </blockquote>
            </div>
            <div class="carousel-item">
                <blockquote class="blockquote text-center">
                    <p class="mb-4">La consultoría de TechSolutions fue clave para nuestra transformación digital.</p>
                    <footer class="blockquote-footer">Emilia Flores</footer>
                </blockquote>
            </div>
            <div class="carousel-item">
                <blockquote class="blockquote text-center">
                    <p class="mb-4">Excelente servicio y soporte continuo. Recomendamos TechSolutions.</p>
                    <footer class="blockquote-footer">Cristiano Ronaldo</footer>
                </blockquote>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</section>

<?php include('templates/footer.php'); ?>

