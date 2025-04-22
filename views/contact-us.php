    <!-- Start Contact Area 
    ============================================= -->
    <div class="contact-area bg-gray default-padding">
        <div class="container">
            <div class="contact-box">
                <div class="row align-center">
                    <div class="col-lg-4 left-info">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h5><?php echo $isLang ? "Dirección" : "Address" ?></h5>
                                <?php echo $isLang ?
                                    "<p>PH Torres de las Americas<br>
                                Piso 2, Torre A<br>
                                Punta Pacifica, San Francisco, Panama
                                </p>" :

                                    "<p>PH Torres de las Americas<br>
                                Floor 2, Tower A<br>
                                Punta Pacifica, San Francisco, Panama</p>"
                                ?>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <div class="info">
                                <h5><?php echo $isLang ? "Correo Electrónico" : "Email" ?></h5>
                                <p>
                                    supportdesk@dataflowconnect.biz
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="content">
                            <div class="heading">
                                <h2><?php echo $isLang ? "¡Hablemos! Estamos Aquí para Conectar Con Usted " : "Talk! We're Here to Connect With You " ?></h2>

                            </div>
                            <form action="mailFunction.php" method="POST" class="contactForm">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="<?php echo $isLang ? 'Nombre' : 'Name' ?> " type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="<?php echo $isLang ? 'Correo Electrónico' : 'Email' ?>" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="<?php echo $isLang ? 'Teléfono' : 'Phone' ?>" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="message" name="message" placeholder="<?php echo $isLang ? 'Mensaje' : 'Message' ?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"><input type="text" id="captcha_mail" name="captcha" hidden>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control " id="submit"
                                                        placeholder="Captcha code" />
                                                </div>
                                            </div>
                                            <div class="col-md-1 pt-2 pl-3">
                                                <div onclick="generate()" style="cursor:pointer;">
                                                    <i class="fas fa-sync"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        style="text-decoration:line-through;text-align:center; font-style: italic;"
                                                        id="captchandler" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" id="btnCheck" class="btn btn-primary"
                                                    onclick="printmsg()">
                                                    Check</button>
                                            </div>
                                        </div>
                                        <p id="key" style="color:green; font-weight:bold; padding:10px 5px;"></p>
                                    </div>
                                </div> <!-- /.row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" class="submit-button" id="submit" disabled>
                                            <?php echo $isLang ? 'Enviar Mensaje' : 'Send Message' ?>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-md-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.8841259389856!2d-79.51236262581855!3d8.982809091076648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca927b5a4ccc1%3A0x518fb619c05fbaff!2sTorre%20de%20Las%20Americas!5e0!3m2!1sen!2sph!4v1744727154347!5m2!1sen!2sph"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->


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

    