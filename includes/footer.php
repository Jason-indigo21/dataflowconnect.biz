<?php if ($_REQUEST['page'] != 'contact-us'): ?>
    <div class="banner-area bg-gradient ">
        <div class="bottom-shape">
            <img src="assets/img/shape/bg-1.png" alt="Shape">
        </div>
        <div class="item-box">
            <div class="item">
                <div class="container ">
                    <div class="row align-center">

                        <div class="col-lg-6 text-light">
                            <div class="content">
                                <h2 class="wow fadeInDown"><?php echo $isLang ? "CARRERA" : "CAREER" ?> </h2>
                                <p class="wow fadeInLeft">
                                    <?php echo $isLang
                                        ? "En <strong>DATAFLOW CONNECT, S.A.,</strong> buscamos personas dinámicas y con orientación al cliente para unirse a nuestro equipo. Si tienes buenas habilidades de comunicación y pasión por brindar un servicio excelente, ¡nos encantaría conocerte!"
                                        : "At <strong>DATAFLOW CONNECT, S.A.</strong>, we are looking for dynamic, customer-oriented individuals to join our team. If you have strong communication skills and a passion for providing excellent service, we’d love to meet you!" ?>
                                </p>
                            </div>
                        </div>
                        <!-- Start Appoinment Form -->
                        <div class="col-lg-5 offset-lg-1 appoinment">
                            <div class="appoinment-box ">
                                <div class="heading">
                                    <h4> <?php echo $isLang ? "¡ÚNETE A NUESTRO EQUIPO!" : "JOIN OUR TEAM!" ?> </h4>
                                </div>
                                <form action="mail-join-up.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control" id="name" name="name" placeholder="<?php echo $isLang ? "Nombre" : "Name" ?> " type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control" id="email" name="email" placeholder="<?php echo $isLang ? "Correo Electrónico" : "Email" ?> " type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="cv" class="custom-label"><?php echo $isLang ? "Subir archivo CV" : "Upload CV" ?> </label>
                                            <span class="file-name" id="fileName"><?php echo $isLang ? "Ningún archivo elegido" : "No file chosen" ?> </span>
                                            <div class="form-group">
                                                <input type="file" id="cv" name="cv" class="custom-file-input">

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <input type="text" id="captcha_mail" name="captcha" hidden>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group ">
                                                                <input type="text" class="form-control " id="submit"
                                                                    placeholder="Captcha" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1 mt-3 pr-3">
                                                            <div onclick="generate()">
                                                                <i class="fas fa-sync"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    style="text-decoration:line-through;text-align:center; font-style: italic; padding-top:30px;"
                                                                    id="captchandler" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 px-4">
                                                            <button type="button" id="btnCheck" class="btn btn-primary" style="float:right;"
                                                                onclick="printmsg()">
                                                                Check Captcha</button>
                                                        </div>
                                                    </div>
                                                    <p id="key" style="color:green; font-weight:bold; padding:10px 5px;"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-5">
                                            <button type="submit" name="submit" id="submit" class="submit-button">
                                                <?php echo $isLang ? "Únete a nosotros" : "JOIN US" ?>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Appoinment Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const fileInput = document.getElementById('cv');
        const fileNameDisplay = document.getElementById('fileName');

        fileInput.addEventListener('change', function() {
            if (fileInput.files.length > 0) {
                fileNameDisplay.textContent = fileInput.files[0].name;
            } else {
                fileNameDisplay.textContent = 'No file chosen';
            }
        });
    </script>

<?php endif; ?>


<footer>

    <!-- Fixed Shape -->
    <div class="fixed-shape">
        <img src="assets/img/shape/bg-4.png" alt="Shape">
    </div>
    <!-- Fixed Shape -->

    <!-- End Footer Top -->
    <div class="container container-footer">
        <?php include("./includes/chat.php"); ?>
        <div class="f-items default-padding">
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item about">
                        <img src="assets/images/logo.png" alt="Logo" class="w-75 d-flex mx-auto align-item-center">
                        <p class="text-justify">
                            <?php echo $isLang
                                ? "En <b class='text-primary'>DATAFLOW CONNECT, S.A.,</b> no solo gestionamos llamadas, creamos conexiones. Somos una consultora especializada en soluciones estratégicas para Call Centers, diseñada para ayudar a empresas a mejorar su atención al cliente, optimizar sus operaciones y potenciar su crecimiento."
                                : "At <b class='text-primary'>DATAFLOW CONNECT, S.A.,</b> we don't just manage calls; we create connections. We are a consulting firm specializing in strategic solutions for Call Centers, designed to help companies improve their customer service, optimize their operations, and boost their growth." ?>

                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title"><?php echo $isLang ? "Enlaces Rápidos" : "Quick Links" ?> </h4>
                        <ul>
                            <li class="">
                                <a href="?page=home<?php echo $isLang ? '&lang=es' : '&lang=en' ?>" class="<?php echo $_REQUEST['page'] == 'home' ? "active" : ""; ?>" class=" active"> <?php echo !isset($_REQUEST['lang']) || $_REQUEST['lang'] != 'en' ? 'Inicio' : 'Home' ?> </a>
                            </li>
                            <li class="">
                                <a href="?page=solutions-by-sector<?php echo $isLang ? '&lang=es' : '&lang=en' ?>" class="<?php echo $_REQUEST['page'] == 'home' ? "active" : ""; ?>" class=""><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang'] != 'en' ? 'Soluciones Por Sector' : 'SOLUTIONS BY SECTOR' ?></a>
                            </li>
                            <li class="">
                                <a href="?page=digital-infrastructure<?php echo $isLang ? '&lang=es' : '&lang=en' ?>" class="<?php echo $_REQUEST['page'] == 'home' ? "active" : ""; ?>" class=""><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang'] != 'en' ? 'Infraestructura Digital' : 'DIGITAL INFRASTRUCTURE' ?></a>
                            </li>
                            <li class="">
                                <a href="?page=discover-more<?php echo $isLang ? '&lang=es' : '&lang=en' ?>" class="<?php echo $_REQUEST['page'] == 'home' ? "active" : ""; ?>" class=""><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang'] != 'en' ? 'Descubra Mas' : 'DISCOVER MORE' ?></a>
                            </li>
                            <li class="">
                                <a href="?page=frequesntly-asked-question<?php echo $isLang ? '&lang=es' : '&lang=en' ?>" class="<?php echo $_REQUEST['page'] == 'home' ? "active" : ""; ?>" class=""><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang'] != 'en' ? 'Preguntas Frecuentes' : 'FREQUENTLY ASKED QUESTIONS' ?></a>
                            </li>
                            <li>
                                <a href="?page=contact-us<?php echo $isLang ? '&lang=es' : '&lang=en' ?>" class="<?php echo $_REQUEST['page'] == 'home' ? "active" : ""; ?>"><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang'] != 'en' ? 'Contactenos' : 'CONTACT US' ?></a>
                            </li>
                            <li>
                                <a href="?page=privacy-policy<?php echo $isLang ? '&lang=es' : '&lang=en' ?>" class="<?php echo $_REQUEST['page'] == 'home' ? "active" : ""; ?>"><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang'] != 'en' ? 'Politica De Privacidad' : 'Privacy Policy' ?></a>
                            </li>
                            <li>
                                <a href="?page=cookie-privacy<?php echo $isLang ? '&lang=es' : '&lang=en' ?>" class="<?php echo $_REQUEST['page'] == 'home' ? "active" : ""; ?>"><?php echo !isset($_REQUEST['lang'])  || $_REQUEST['lang'] != 'en' ? 'Privacidad de los cookies' : 'Cookie Privacy' ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title"><?php echo $isLang ? "Nuestra Propuesta" : "Our Proposal" ?></h4>
                        <ul>
                            <?php foreach ($services as $service): ?>
                                <li><a href="?page=our-proposal&service=<?= $service['link'] ?><?php echo $isLang ? '&lang=es' : '&lang=en' ?>" class="<?php echo $_REQUEST['page'] == 'home' ? "active" : ""; ?>"><?= $service['title'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item">
                        <h4 class="widget-title"><?php echo $isLang ? "¡Contáctenos!" : "Contact Us" ?> </h4>
                        <div class="address">
                            <ul>
                                <li>
                                    <strong><?php echo $isLang ? "Dirección" : "Address" ?> :</strong>
                                    PH Torres de las Americas<br>
                                    Floor 2, Tower A <br>
                                    Punta Pacifica, San Francisco, Panama

                                </li>
                                <li>
                                    <strong><?php echo $isLang ? "Correo Electrónico" : "Email" ?> :</strong>
                                    <a href="mailto:info@validtheme.com">supportdesk@dataflowconnect.biz</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Start Footer Bottom -->

    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; <?php echo date('Y'); ?>. <a>Dataflow Connect, S.A. </a> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-bottom-center modal-lg">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </button>
                </div>
                <div class="modal-body px-5 text-center">
                    <div class=" d-flex  justify-content-center align-items-end">
                        <img src="assets/images/cookie.jpg" class="w-50" alt="">
                        <h1 class="pb-3"> Cookie</h1>
                    </div>

                    <h6 class="modal-title mb-3" id="exampleModalLabel">
                        <?php if ($_REQUEST['lang'] == 'en') : ?>
                            OUR COOKIES ARE ONLY AS SWEET AS OUR RESULTS!
                        <?php else : ?>
                            ¡NUESTRAS COOKIES SON TAN DULCES COMO NUESTROS RESULTADOS!
                        <?php endif; ?>

                    </h6>
                    <p class="text-justify">
                        <?php if ($_REQUEST['lang'] == 'en') : ?>
                            Imagine you're browsing our website for creative inspiration, and suddenly, bam! A pop-up window appears, greeting you with a warm digital hug and offering personalized recommendations based on your interests. That's it, thanks to our beloved Cookies, small pieces of digital magic that, if you accept, allow us to provide you with a unique experience adapted to your needs.
                        <?php else : ?>
                            Imagine esto: está navegando por nuestra web en busca de inspiración creativa y, de repente, ¡zas!
                            Aparece una ventana emergente que lo saluda con un cálido abrazo digital y le ofrece recomendaciones
                            personalizadas basadas en sus intereses. Eso es
                            gracias a nuestras queridas Cookies, pequeños trocitos de magia digital que si acepta nos permiten
                            brindarle una experiencia única y adaptada a sus necesidades.
                        <?php endif; ?>

                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-accept" id="clickModal" data-bs-dismiss="modal">
                        <?php if ($_REQUEST['lang'] == 'en') : ?>
                            THAT'S GREAT. ACCEPT
                        <?php else : ?>
                            GENIAL. ACEPTAR
                        <?php endif; ?>

                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Footer Bottom -->
</footer>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-bottom-center modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><?php echo $isLang ? "" : "" ?> COOKIES</h3>
            </div>
            <div class="modal-body ">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <img src="assets/images/cookies.jpg" class="w-50" alt="">
                            <p>
                                <?php echo $isLang
                                    ? "Para que este sitio web funcione mejor, asegúrese de que las cookies bloqueadas estén permitidas. Lea nuestra <a href='./?page=cookie-privacy' >Política de cookies</a> para obtener más información."
                                    : "To make this website work better, please make sure that blocked cookies are allowed. Please read our <a href='./?page=cookie-privacy' >Cookie Policy</a> for more information." ?>
                            </p>
                        </div>
                        <!-- <div class="col-4"></div> -->
                    </div>

                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $isLang ? "Aceptar" : "Accept" ?> </button>
            </div>
        </div>
    </div>
</div>

<?php

if ($_REQUEST['email-sent'] == 'success')

    echo '<script>
             Swal.fire({
        icon: "success",
        title: "Message sent",
        showConfirmButton: false,
        timer: 1500    })
      </script>';
?>
<!-- End Footer -->

<!-- jQuery Frameworks
    ============================================= -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/modernizr.custom.13711.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/progress-bar.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/count-to.js"></script>
<script src="assets/js/YTPlayer.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/bootsnav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/chat.js"></script>

<script>
    $(document).ready(function() {
        // $('#exampleModal').modal('show');
        let cookies = localStorage.getItem('cookies');

        if (localStorage.getItem('cookies') == '0' || localStorage.getItem('cookies')) {
            // localStorage.setItem('cookies', false);
        } else {
            $('#exampleModal').modal('show');
            localStorage.setItem('cookies', '0');
        }
    });

    console.log(localStorage.getItem('cookies'));


    $(document).ready(function() {
        generate();
    })


    let captcha;

    function generate() {

        // Clear old input
        document.getElementById("submit").value = "";

        // Access the element to store
        // the generated captcha
        // captcha = document.getElementById("captcha");
        captchaInput = document.getElementById("captchandler");
        let uniquechar = "";

        const randomchar =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        // Generate captcha for length of
        // 5 with random character
        for (let i = 1; i < 7; i++) {
            uniquechar += randomchar.charAt(
                Math.random() * randomchar.length)
        }
        console.log(uniquechar)
        // Store generated input
        // captcha.innerHTML = uniquechar;
        captchaInput.value = uniquechar;

    }

    function printmsg() {
        const usr_input = document
            .getElementById("submit").value;

        // Check whether the input is equal
        // to generated captcha or not
        if (usr_input == captchaInput.value) {
            let s = document.getElementById("key").innerHTML = '<p style="color: #18084e; font-size: 16px;padding: 1px 10px;background: #fff;width: fit-content; border-radius: 5px;"><i class="fas fa-check-circle"></i> Matched</p>';
            console.log(s);

            $('.submit-button').prop('disabled', false);
            document.getElementById("captcha_mail").value = captchaInput.value;
            document.getElementById("btnCheck").disabled = true;
            generate();
        } else {
            let s = document.getElementById("key")
                .innerHTML = '<p style="color: red; font-size: 16px;padding: 1px 10px;background: #fff;width: fit-content; border-radius: 5px;"><i class="fas fa-exclamation-circle"></i> INCORRECT CAPTCHA</p>';
            generate();
        }
    }
</script>


</body>

</html>