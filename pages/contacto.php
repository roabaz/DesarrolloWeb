<!DOCTYPE html>
<html>

<head>
    <title>Trabajemos juntos - NDV Marketing Consulting</title>
    <meta charset="UTF-8">
    <meta name="description" content="Ponete en contacto con nosotros via whatsapp, email, telefono o por nuestro formulario de contacto, te atenderemos lo mas pronto posible.">
    <meta name="keywords" content="ndv Marketing, ndv Marketing consultant, natalia@ndv.com.uy, atencion personalizada marketing">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../resources/assets/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://kit.fontawesome.com/7cc55b8f61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../resources/css/style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light mt-xl-4 mt-3">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand" href="../index.html">
                        <img class="brand" src="../resources/assets/logo.png">
                    </a>
                    <button class="navbar-toggler float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <div class="offcanvas-title" id="offcanvasNavbarLabel">
                                <a class="navbar-brand" href="../index.html">
                                    <img class="brand" src="../resources/assets/logo.png">
                                </a>
                            </div>
                            <button type="button" class="btn-close text-white h4 font-weight-bold" data-bs-dismiss="offcanvas">
                            </button>
                        </div>
                        <ul class="nav pages d-block d-xl-none d-lg-none d-md-none">
                            <hr>
                            <li class=" col-12 float-left">
                                <a class="nav-link" href="nosotros.html">Nosotros</a>
                            </li>
                            <hr>
                            <li class="nav-item col-12">
                                <a class="nav-link" href="servicios.html">Servicios</a>
                            </li>
                            <hr>
                            <li class="nav-item col-12">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>
                            <hr>
                            <li class="nav-item col-12">
                                <a class="nav-link text-white" href="contacto.php">Contacto</a>
                            </li>
                            <hr>
                        </ul>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav pages">
                            <li class="nav-item animate__animated animate__pulse">
                                <a class="nav-link" href="nosotros.html">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="servicios.html">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <section class='text_widget mt-5'>
            <h1 class='titulo_principal mb-5 text-center'>
                Listos para <br> trabajar juntos.
            </h1>
        </section>
        <section class="row contacto pb-5 mb-3">
            <div class="col-xl-8 col-12 mx-auto">
                <form id="contact" action="send_email.php" method="post">
                    <div class="form-group">
                        <p class="text-left" for="exampleInputPassword1">Tu nombre</p>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <p class="text-left" for="exampleInputPassword1">Tu teléfono</p>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <p class="text-left" for="exampleInputEmail1">Tu e-email</p>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <p class="text-left" for="exampleFormControlTextarea1">Tu mensaje</p>
                        <textarea type="text" name="message" class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="submit" name="submit" value="Submit" class="btn btn-primary mt-3">Enviar</button>
                </form>

                <div>
                    <?php
                    if ($_GET['success']) {
                        echo '<p class="alert-success mt-3 p-3 col-6">' . $_GET['success'] . ' </p>';
                    }
                    ?>
                </div>

            </div>
        </section>
        <footer class="row  footer border-top mx-auto pt-4">
            <div class="col-xl-4 col-5 mx-auto">
            <span>¿Hablamos? →</span>
                <a class="footer_links" target="_blank" href="mailto:hola@ndv.com.uy">
                    hola@ndv.com.uy
                </a>
            </div>
            <div class="col-xl-7 col-6">
                <a class="footer_links" target="_blank" href="https://api.whatsapp.com/send?phone=+59892661066&text=hola quiero asesorarme por:">
                    <i class="fa-brands fa-whatsapp h3 pl-4 text-success"></i>
                </a>
                <a class="footer_links" target="_blank" href="tel:+59892661066">
                    <i class="fa-solid fa-mobile-screen-button h3 phone_footer"></i>
                </a>
                <a class="footer_links" target="_blank" href="https://www.instagram.com/ndv.marketing/">
                    <i class="fa-brands fa-instagram h3 instagram"></i>
                </a>
                <a class="footer_links" target="_blank" href="https://www.linkedin.com/company/ndv-marketing/">
                    <i class="fa-brands fa-linkedin-in h3 linkedin"></i>
                </a>
            </div>
            <p class="mt-4">Hecho con ❤ en Montevideo - Uruguay para todo el 🌍</p>

            <p class="mt-2">©2022 NDV Todos los derechos reservados</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>