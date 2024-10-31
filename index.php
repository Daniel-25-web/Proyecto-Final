<?php
// Habilitar la visualización de errores para facilitar la depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir archivos de configuración y la clase 'llamada'
include_once 'llamar/config.php';
include 'llamar/llamada.php';

// Procesar el formulario si hay datos POST
if (isset($_POST) && !empty($_POST)) {
    $p = new llamada(); // Crear una nueva instancia de la clase 'llamada'
    $resultado = $p->save($_POST); // Guardar los datos del formulario
    echo $resultado; // Mostrar el resultado (opcional)
    
    // Si la llamada se guarda correctamente, mostrar una alerta y redirigir
    if ($resultado) {
        echo "<script>
                alert('Llamada agendada correctamente');
                window.location.href = 'index.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medcare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/navBarLogo.png" alt="logo" width="auto" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="#equipo">Doctores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Primer Sección -->
    <div class="container content mt-4" id="nosotros">
        <div class="card border-0">
            <div class="row g-0">
                <div class="col-md-7">
                    <div class="card-body">
                        <h6 class="text-uppercase fw-bold text-primary">Medcare</h6>
                        <h1 class="display-4 fw-bold">Mejora tu Salud Mental</h1>
                        <p class="mt-4 text-muted">
                            La salud mental es fundamental para el bienestar integral de las personas. No solo influye
                            en cómo pensamos y sentimos, sino que también afecta nuestras relaciones, productividad y
                            calidad de vida. Al cuidar nuestra salud mental, podemos enfrentar los desafíos de la vida
                            con resiliencia, mejorar nuestra capacidad de comunicación y fomentar un entorno más
                            positivo tanto en lo personal como en lo profesional. Invertir en este aspecto es esencial
                            para lograr un equilibrio emocional y un desarrollo pleno.
                        </p>
                        <a href="#" class="btn btn-primary btn-lg mt-3">Quiero Ayuda.</a>
                    </div>
                </div>
                <div class="col-md-5 d-flex justify-content-center align-items-center p-4">
                    <img src="images/imgPsi.jpg" alt="Doctora" class="card-img img-fluid rounded-4">
                </div>
            </div>
        </div>
    </div>

    <!-- Segunda Sección -->
    <div class="containerCards container-fluid my-2">
        <div class="container-fluid">
            <div class="row gx-4 carndsContainer">
                <div class="col-lg-3 col-md-6 bg-white cardSec2">
                    <img src="images/imgClock.png" class="w-50" alt="Horarios">
                    <h5 class="text-center fw-bold">Horarios</h5>
                    <p class="text-center">Lunes a Viernes<br>8 AM - 9 PM<br><br>Sábados y Festivos<br>8 AM - 12 PM</p>
                </div>
                <div class="col-lg-3 col-md-6 bg-white cardSec2">
                    <img src="images/imgDoc.png" class="w-50" alt="Tu doctor">
                    <h5 class="text-center fw-bold">Tu doctor</h5>
                    <p class="text-center">Aquí puedes escoger el doctor con el que te sientas más a gusto.</p>
                    <a href="#" class="btn btn-primary">Yo elijo</a>
                </div>
                <div class="col-lg-3 col-md-6 bg-white cardSec2">
                    <img src="images/imgMap.png" class="w-50" alt="Puntos Físicos">
                    <h5 class="text-center fw-bold">Puntos Físicos</h5>
                    <p class="text-center">Ubicación y mapa del lugar donde están nuestras oficinas.</p>
                    <a href="#" class="btn btn-primary">Ubícanos</a>
                </div>
                <div class="col-lg-3 col-md-6 bg-white cardSec2">
                    <img src="images/imgClock.png" class="w-50" alt="Horarios">
                    <h5 class="text-center fw-bold">Horarios</h5>
                    <p class="text-center">Lunes a Viernes<br>8 AM - 9 PM<br><br>Sábados y Festivos<br>8 AM - 12 PM</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tercera Sección -->
    <div class="container content mt-4 mb-4" id="servicios">
        <div class="card border-0">
            <div class="row g-0">
                <div class="col-md-5 d-flex justify-content-center align-items-center p-4">
                    <img src="images/imgPsi2.jpg" alt="Doctora" class="card-img img-fluid rounded-4">
                </div>
                <div class="col-md-7">
                    <div class="card-body d-flex justify-content-center align-content-center flex-column h-100">
                        <h6 class="text-uppercase fw-bold text-primary">SERVICIOS</h6>
                        <h1 class="display-4 fw-bold">Nuestros Servicios</h1>
                        <p class="mt-4 text-muted">
                            La salud mental es fundamental para el bienestar integral de las personas. No solo influye
                            en cómo pensamos y sentimos, sino que también afecta nuestras relaciones, productividad y
                            calidad de vida. Al cuidar nuestra salud mental, podemos enfrentar los desafíos de la vida
                            con resiliencia, mejorar nuestra capacidad de comunicación y fomentar un entorno más
                            positivo tanto en lo personal como en lo profesional. Invertir en este aspecto es esencial
                            para lograr un equilibrio emocional y un desarrollo pleno.
                        </p>
                        <a href="#" class="btn btn-primary btn-lg mt-3" style="width: fit-content">Mas información.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cuarta Sección -->
    <div class="container text-center mt-5 mb-5" id="equipo">
        <h6 class="text-uppercase fw-bold text-primary">EQUIPO</h6>
        <h2 class="display-5 fw-bold">Nuestros Doctores</h2>
        <div class="row justify-content-center mt-4">
            <!-- Doctor 1 -->
            <div class="col-md-3">
                <div class="doctor-card">
                    <img src="images/doctor2.jpg" alt="Dr. Juan Pérez" class="doctorImage">
                    <h4 class="mt-3">Dr. Juan Pérez</h4>
                    <p>Psicólogo</p>
                </div>
            </div>
            <!-- Doctor 2 -->
            <div class="col-md-3">
                <div class="doctor-card">
                    <img src="images/doctor1.jpg" alt="Dra. Ana Martínez" class="doctorImage">
                    <h4 class="mt-3">Dra. Ana Martínez</h4>
                    <p>Psicóloga</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Llamadas -->
    <div class="content" id="contacto">
        <div>
            <h6 class="text-uppercase fw-bold text-primary text-center">Contacto</h6>
            <h2 class="display-5 fw-bold text-center mb-4">Nosotros te llamamos</h2>
            <form class="form d-flex justify-content-center align-content-center flex-column my-6" action=""
                method="post" enctype="multipart/form-data">
                <label for="nombre">
                    <h5>Nombre:</h5>
                </label>
                <input autocomplete="off" class="inputForms" type="text" name="nombre" id="nombre" placeholder=""
                    required>
                
                <label for="numero">
                    <h5>Número de teléfono:</h5>
                </label>
                <input autocomplete="off" class="inputForms" type="tel" name="numero" id="numero" placeholder=""
                    required>
                <button class="mt-3 btn btn-primary w-full m-auto">Lláma me</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer py-3 bg-dark mt-5">
        <div class="container text-center">
            <p class="text-light">© 2023 Medcare. Todos los derechos reservados.</p>
            <a href="#" class="text-light">Política de privacidad</a>
            <a href="" class="text-light">Facebook</a>
            <a href="" class="text-light">Instagram</a>
            <a href="" class="text-light">Twitter</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
