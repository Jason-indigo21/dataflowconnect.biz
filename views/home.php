    <div class="banner-area content-bg circle-shape ">
        <!-- Background -->
        <div class="bg" style="background-image: url(assets/img/banner/1.jpg);"></div>
        <!-- End Background -->
        <div class="item">
            <div class="container">
                <div class="row align-center">

                    <div class="col-lg-7 offset-lg-5">
                        <div class="content">
                            <h2 class="wow fadeInDown"><?php echo !isset($_REQUEST['lang']) || $_REQUEST['lang']!='en' ? 'DONDE CADA LLAMADA SE CONVIERTE EN UNA OPORTUNIDAD' : 'WHERE EVERY CALL BECOMES AN OPPORTUNITY ' ?>  </h2>
                            <p class="wow fadeInLeft">
                            <?php echo !isset($_REQUEST['lang']) || $_REQUEST['lang']!='en' 
                            ? 'En <b>DATAFLOW CONNECT, S.A.,</b> impulsamos su centro de llamadas hacia un nuevo horizonte. Ofrecemos estrategias personalizadas que impulsan el crecimiento de su negocio, optimizan sus operaciones y mejoran la experiencia de sus clientes.'
                             :'At <b>DATAFLOW CONNECT, S.A.,</b> we propel your call center into a new horizon. We offer customized strategies that drive your business growth, optimize your operations, and improve your customer experience.' ?> 
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-us-area overflow-hidden reverse default-padding bg-gray">
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-6 info wow fadeInUp">
                    <h5 class="area-title"><?php echo !isset($_REQUEST['lang']) || $_REQUEST['lang']!='en' ? '¿Nuestro secreto? ' : 'Our secret?' ?> </h5>
                    <p>
                    <?php echo !isset($_REQUEST['lang']) || $_REQUEST['lang']!='en' 
                    ? 'Una visión 360° que abarca desde la atención directa al cliente hasta el análisis profundo de datos, combinando herramientas de marketing digital, telemarketing y soporte operativo.' 
                    : 'A 360° vision that ranges from direct customer service to deep data analysis, combining digital marketing, telemarketing, and operational support tools.' ?> 
                        
                    </p>
                    <h5> <?php echo $isLang ? "Más que una Consultora, su Socio Estratégico":"More than a Consultancy, Your Strategic Partner" ?> </h5>
                    <p><?php echo $isLang 
                    ? "Nos enfocamos en conectar a su empresa con su verdadero potencial. Implementamos soluciones que fortalecen las relaciones con sus clientes, optimizan sus procesos y posicionan su negocio de manera efectiva en el mercado."
                    :" We focus on connecting your company with its true potential. We implement solutions that strengthen customer relationships, optimize processes, and position your business effectively in the market." ?></p>

                    <h4 class="mt-5"> <?php echo $isLang ? "¿Listo para marcar la diferencia?":"Ready to make a difference?" ?>  </h4>
                    <p>
                        <a href="#" class="btn-animate wow fadeInRight">
                            <span class="circle">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text mr-2"> <?php echo $isLang ? "¡Hablemos Hoy! ":"Let's talk today!" ?>  </span>
                        </a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="thumb wow fadeInRight" data-wow-delay="0.6s">
                        <img src="assets/img/illustration/1.png" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-services-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="single-item col-lg-4 col-md-6">
                    <h2 class="area-title"><?php echo $isLang ? "Soluciones Integrales para un Call Center de Alto Rendimiento ":"We provide IT & Business solutions" ?> </h2>
                    <div class="devider"></div>
                    <p>
                    <?php echo $isLang 
                    ? "Descubra cómo nuestros servicios pueden transformar su centro de llamadas en una herramienta clave para el éxito empresarial."
                    :" Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme." ?> 
                       
                    </p>
                    <!-- <a class="btn btn-gradient effect btn-md" href="#">See More</a> -->
                </div>
                <?php foreach ($services as $service): ?>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <i class="flaticon-padlock"></i>
                            <h4><a href=""><?= $service['title'] ?></a></h4>
                            <p>
                                <?= $service['home-content'] ?>
                            </p>
                        </div>
                    </div>

                <?php endforeach; ?>



            </div>
        </div>
    </div>

    <div class="process-style-twoa-rea text-center text-light default-padding bg-cover bottom-less" style="background-image: url(assets/img/shape/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5><?php echo $isLang ? "Nuestros Valores, Nuestra Esencia":"Our Values, Our Essence" ?> </h5>
                        <h2 class="area-title"><?php echo $isLang ? "Conectando Negocios, Creando Experiencias ":"Connecting Businesses, Creating Experiences" ?>  </h2>
                        <div class="devider"></div>
                        <p>
                        <?php echo $isLang 
                        ? "En DATAFLOW CONNECT, S.A., no solo gestionamos llamadas, creamos conexiones auténticas que impulsan el crecimiento de su negocio. Somos una empresa panameña con visión global, especializada en soluciones innovadoras para call centers que priorizan la eficiencia, la cercanía y la satisfacción del cliente."
                        :"At DATAFLOW CONNECT, S.A., we don't just manage calls; we create authentic connections that drive your business growth. We are a Panamanian company with a global vision, specializing in innovative solutions for call centers that prioritize efficiency, closeness, and customer satisfaction." ?> 
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="process-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="process-style-two col-lg-3 col-md-6">
                        <div class="item">
                            <i class="flaticon-select"></i>
                            <h5><?php echo $isLang 
                            ? "Empatía"
                            :"Empathy" ?> </h5>
                            <p>
                            <?php echo $isLang 
                            ? "Entendemos que detrás de cada llamada hay una persona. Por eso, ponemos al cliente en el centro de cada estrategia."
                            :" We understand that there is a person behind every call. That's why we put the customer at the center of every strategy." ?> 
                               
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="process-style-two col-lg-3 col-md-6">
                        <div class="item">
                            <i class="flaticon-video-call"></i>
                            <h5><?php echo $isLang 
                            ? "Innovation"
                            :"Innovation" ?> </h5>
                            <p>
                                <?php echo $isLang 
                                ?"Nos apasiona la tecnología y el aprendizaje constante. Buscamos siempre nuevas formas de optimizar sus procesos y mejorar resultados."
                                :"We are passionate about technology and constant learning. We always look for new ways to optimize your processes and improve results." ?> 
                                
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="process-style-two col-lg-3 col-md-6">
                        <div class="item">
                            <i class="flaticon-strategy"></i>
                            <h5>
                                <?php echo $isLang ? "Compromiso":"Commitment" ?> 
                                </h5>
                            <p>
                            <?php echo $isLang 
                            ? "Su éxito es nuestro objetivo. Trabajamos con transparencia, dedicación y un enfoque personalizado para cada proyecto."
                            :"Your success is our goal. We work with transparency, dedication, and a personalized approach to each project." ?> 
                                
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="process-style-two col-lg-3 col-md-6">
                        <div class="item">
                            <i class="flaticon-solution"></i>
                            <h5><?php echo $isLang ? "Resultados Medibles":"Measurable Results" ?> </h5>
                            <p>
                            <?php echo $isLang 
                            ? "We don't just discuss quality; we show it. We measure every interaction, analyze data, and adjust strategies for maximum impact."
                            :"We don't just discuss quality; we show it. We measure every interaction, analyze data, and adjust strategies for maximum impact." ?>                                 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>

    <div class="contact-area bg-gray half-bg default-padding">
        <div class="container">
            <div class="contact-box">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <h2><?php echo $isLang ? "Más que una Consultora, su Socio de Crecimiento":"More than a Consultancy, Your Growth Partner" ?> </h2>
                        <p><?php echo $isLang 
                        ? "Nuestra práctica nos permite ayudarle a construir una experiencia de cliente excepcional, impulsando la fidelización y el crecimiento sostenido de su negocio."
                        :"Our practice allows us to help you build an exceptional customer experience, driving loyalty and sustained business growth." ?> </p>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="content">
                            <div class="heading">
                                <h2><?php echo $isLang ? "¿Se une a nuestra misión de transformar experiencias?":"Do you join our mission to transform experiences?" ?> </h2>
                                <a href="#" class="btn-animate wow fadeInRight my-4 w-100">
                                    <a href="#" class="btn-animate wow fadeInRight my-4 w-100">
                                        <span class="circle">
                                            <span class="icon arrow"></span>
                                        </span>
                                        <span class="button-text w-100"><?php echo $isLang ? " ¡Contáctenos y empecemos hoy!":"Contact us, and let's get started today! " ?> </span>
                                    </a>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials-area carousel-shadow default-padding-bottom">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- <h5>Our Client's Review </h5> -->
                        <h2>
                        <?php echo $isLang ? "Lo que dicen nuestros clientes":"What Our Customers Say" ?>  
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <b> "<?php echo $isLang ? "Un cambio total en nuestra atención al cliente":"A total change in our customer service" ?> " </b>
                                <p>
                                " <?php echo $isLang 
                                    ? "Desde que implementamos las estrategias de esta consultora, nuestros tiempos de respuesta se redujeron en un 40% y la satisfacción de nuestros clientes aumentó notablemente. Su enfoque en la optimización y el CRM nos permitió mejorar cada interacción."
                                    :"Since we implemented the strategies of this consulting firm, our response times have been reduced by 40%, and our clients' satisfaction has increased significantly. Their focus on optimization and CRM allowed us to improve every interaction." ?> 
                                    "
                                </p>
                                <div class="bottom">
                                    <div class="provider">
                                        <h5><?php echo $isLang ? "Gerente de Servicio al Cliente":"Customer Service Manager" ?>  </h5>
                                        <span><?php echo $isLang ? "Empresa de Telecomunicaciones":"Telecommunications Company" ?> </span>
                                    </div>
                                    <div class="raging">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <b>"<?php echo $isLang ? "Resultados tangibles en ventas y fidelización":"Tangible results in sales and loyalty" ?> "</b>
                                <p>"
                                <?php echo $isLang 
                                ? "Buscábamos mejorar nuestras campañas de telemarketing, y el equipo de esta consultora nos ayudó a desarrollar una estrategia basada en datos que incrementó nuestras conversiones en un 30%. Son verdaderos expertos en el área."
                                :" We were looking to improve our telemarketing campaigns, and the team at this consultancy helped us develop a data-driven strategy that increased our conversions by 30%. They are true experts in the area." ?> 
                                   "
                                </p>
                                <div class="bottom">
                                    <div class="provider">
                                        <h5><?php echo $isLang ? "Director Comercial":"Commercial Director" ?> </h5>
                                        <span><?php echo $isLang ? "Startup":"Startup" ?> </span>
                                    </div>
                                    <div class="raging">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="info">
                                <b>"<?php echo $isLang ? "Eficiencia operativa como nunca antes":"Operational efficiency like never before" ?> "</b>
                                <p>"
                                    <?php echo $isLang 
                                    ? "Gracias a su asesoría, optimizamos nuestros procesos de back office y reducimos costos sin afectar la calidad del servicio. Ahora, nuestra operación es más ágil y nuestros clientes lo notan."
                                    :"Thanks to their advice, we optimized our back-office processes and reduced costs without affecting the quality of service. Our operation is more agile, and our customers notice it." ?> 
                                    "
                                </p>
                                <div class="bottom">
                                    <div class="provider">
                                        <h5>CEO</h5>
                                        <span><?php echo $isLang ? "Empresa de Servicios Financieros":"Financial Services Company" ?> </span>
                                    </div>
                                    <div class="raging">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>