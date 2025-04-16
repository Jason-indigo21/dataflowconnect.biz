<div class="faq-area overflow-hidden rectangular-shape default-padding">
    <div class="container">
        <div class="faq-items">
            <div class="row">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                            <img src="assets/img/illustration/4.png" alt="Thumb">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-content">
                            <h5><?php echo $isLang ? "Preguntas Frecuentes (FAQ) ":"Frequently Asked Questions" ?> </h5>
                            <h4 class="area-title"><?php echo $isLang 
                            ? "Sabemos que al buscar una consultora para tu Call Center surgen muchas dudas. Aquí respondemos las preguntas más comunes sobre nuestros servicios, procesos y tecnologías."
                            :"We know that many doubts arise when looking for a consultant for your Call Center. Here, we answer the most common questions about our services, processes, and technologies." ?> </h4>
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $isLang ? "¿Qué hace exactamente &nbsp;<b>DATAFLOW CONNECT, S.A.?</b>":"What exactly does &nbsp;<b>DATAFLOW CONNECT, S.A. </b> &nbsp;do?" ?> 
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                            <?php echo $isLang 
                                            ? "Somos una consultora especializada en <b>Call Centers en Panamá</b>, dedicada a optimizar la atención al cliente, impulsar las ventas y mejorar procesos internos a través de estrategias personalizadas y herramientas tecnológicas de vanguardia."
                                            :" We are a consulting firm specializing in Call Centers in Panama. We are dedicated to optimizing customer service, boosting sales, and improving internal processes through personalized strategies and cutting-edge technological tools." ?> 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <?php echo $isLang ? "¿Qué industrias atienden?":"What industries do you serve?" ?> 
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                            <?php echo $isLang ? "Trabajamos con una amplia variedad de sectores, entre ellos:":"We work with a wide variety of industries, including:" ?> 
                                            </p>
                                            <ul class="solution-sector ml-5">
                                                <li><?php echo $isLang ? "Comercio Electrónico":"Health & Wellness" ?> </li>
                                                <li><?php echo $isLang ? "Salud y Bienestar":"Health & Wellness" ?> </li>
                                                <li><?php echo $isLang ? "Tecnología":"Technology" ?> </li>
                                                <li><?php echo $isLang ? "Educación y Formación":"Education and Training" ?> </li>
                                                <li><?php echo $isLang ? "Sector Financiero y Bancario":"Financial and Banking Sector" ?> </li>
                                                <li><?php echo $isLang ? "Energía y Servicios Públicos":"Energy & Utilities" ?> </li>
                                                <li><?php echo $isLang ? "Servicios Profesionales":"Professional Services" ?> </li>
                                                <li><?php echo $isLang ? "Startups":"Startups" ?> </li>
                                                <li><?php echo $isLang ? "Marketing":"Marketing" ?> </li>
                                            </ul>
                                            <?php echo $isLang 
                                            ? "¿No ve su industria aquí? <a href='./?page=contact-us".($_REQUEST['lang']=='es' ?'&lang=es' :'&lang=en')."'>¡Contáctenos!</a> Seguro podemos ayudarle."
                                            :"Don't see your industry here? <a href='./?page=contact-us".($_REQUEST['lang']=='es' ?'&lang=es' :'&lang=en')."'>Contact us!</a> We can surely help you." ?> 
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-12">
                    <div class="faq-content">
                        <div class="accordion mt-5" id="accordionExample">

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo $isLang ? "¿Qué tecnologías utilizan para mejorar la gestión de Call Centers?":" What technologies do you use to improve Call Center management?" ?> 
                                    </h4>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                        <?php echo $isLang ? "Colaboramos con las mejores herramientas del mercado para garantizar eficiencia y calidad. Entre ellas:":" We collaborate with the best tools on the market to guarantee efficiency and quality. Including:" ?>
                                        </p>
                                        <ul class="solution-sector ml-5">
                                            <li><?php echo $isLang ? "<b>Zendesk</b> Atención al cliente omnicanal.":"<b>Zendesk:</b> Omnichannel customer support." ?> </li>
                                            <li><?php echo $isLang ? "<b>Intercom y LiveChat:</b> Comunicación en tiempo real.":"<b>Intercom and LiveChat:</b> Real-time communication." ?> </li>
                                            <li><?php echo $isLang ? "<b>Moodle y Canvas LMS:</b> Plataformas de aprendizaje.":"<b>Moodle and Canvas LMS:</b> Learning platforms." ?> </li>
                                            <li><?php echo $isLang ? "<b>Google Ads y Mailchimp:</b> Marketing y campañas digitales.":"<b>Google Ads and Mailchimp:</b> Marketing and digital campaigns." ?> </li>
                                            <li><?php echo $isLang ? "<b>Oracle CX Service:</b> Gestión de relaciones con el cliente (CRM).":"<b>Oracle CX Service:</b> Customer Relationship Management (CRM)." ?> </li>
                                            <li><?php echo $isLang ? "<b>AWS Security Hub, Microsoft Azure Security y Google Cloud Security</b> Seguridad de datos avanzada.":"<b>AWS Security Hub, Microsoft Azure Security, and Google Cloud Security:</b> Advanced Data Security." ?> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo $isLang ? "¿Ofrecen servicios de telemarketing o solo atención al cliente?":"Do you offer telemarketing services or just customer support?" ?> 
                                    </h4>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $isLang ? "¡Ambos! Nuestro equipo ofrece soluciones integrales que incluyen:":"Both! Our team offers comprehensive solutions including:" ?> </p>
                                        <ul class="solution-sector ml-5">
                                            <li><?php echo $isLang ? "Telemarketing para generación de leads y ventas.":"Telemarketing for lead generation and sales." ?> </li>
                                            <li><?php echo $isLang ? "Atención al cliente para fidelizar y fortalecer las relaciones.":"Customer service to build loyalty and strengthen relationships." ?> </li>
                                            <li><?php echo $isLang ? "Análisis de datos para optimizar las campañas y procesos.":"Data analysis to optimize campaigns and processes." ?> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo $isLang ? "¿Pueden ayudar a una empresa que recién está empezando?":"Can they help a company that is just starting out?" ?> 
                                    </h4>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $isLang ? "¡Claro! Acompañamos a <b>startups</b> en el proceso de construcción de su estructura de atención al cliente, ayudándolas a:":"Of course! We accompany startups in the process of building their customer service structure, helping them to:" ?> </p>
                                        <ul class="solution-sector ml-5">
                                            <li><?php echo $isLang ? "Definir estrategias de comunicación.":"Define communication strategies." ?> </li>
                                            <li><?php echo $isLang ? "Seleccionar e implementar las herramientas adecuadas.":"Select and implement the right tools." ?> </li>
                                            <li><?php echo $isLang ? "Establecer procesos eficientes y escalables.":"Establish efficient and scalable processes." ?> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo $isLang ? "¿Cómo miden los resultados de sus estrategias?":"How do you measure the results of your strategies?" ?> 
                                    </h4>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $isLang ? "Utilizamos herramientas avanzadas de <b>análisis y monitoreo de datos</b> para medir:":"We use advanced data monitoring and analysis tools to measure:" ?> </p>
                                        <ul class="solution-sector ml-5">
                                            <li><?php echo $isLang ? "Tiempos de respuesta y resolución.":"Response and resolution times." ?> </li>
                                            <li><?php echo $isLang ? "Niveles de satisfacción del cliente (CSAT, NPS).":"Customer satisfaction levels (CSAT, NPS)." ?> </li>
                                            <li><?php echo $isLang ? "Impacto en ventas y retención.":"Impact on sales and retention." ?> </li>
                                        </ul>
                                        <p><?php echo $isLang ? "Todos estos indicadores nos permiten ajustar y optimizar continuamente las estrategias para garantizar los mejores resultados.":"All these indicators allow us to adjust and optimize strategies to ensure the best results continuously." ?> </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo $isLang ? "¿Qué diferencia a <b>DATAFLOW CONNECT, S.A.</b> de otras empresas similares?":"What sets &nbsp;<b>DATAFLOW CONNECT, S.A.</b>&nbsp; apart from other similar companies?" ?> 
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $isLang ? "Nuestra diferencia radica en:":"Our difference lies in:" ?> </p>
                                        <ul class="solution-sector ml-5">
                                            <li><?php echo $isLang ? "<b>Experiencia local y visión global</b>. Entendemos el mercado panameño y aplicamos las mejores prácticas internacionales.":"<b>Local expertise and global vision.</b> We understand the Panamanian market and apply international best practices." ?> </li>
                                            <li><?php echo $isLang ? "<b>Tecnología y Humanidad</b>. Combinamos herramientas de última generación con un enfoque cercano y empático.":"<b>Technology and Humanity.</b> We combine state-of-the-art tools with a close and empathetic approach." ?> </li>
                                            <li><?php echo $isLang ? "<b>Resultados Medibles.</b> No hacemos promesas vacías; ofrecemos datos concretos que demuestran el impacto de nuestro trabajo.":"<b>Measurable results.</b> We don't make empty promises; we offer concrete data demonstrating our work's impact." ?> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo $isLang ? "¿Cómo es el proceso de trabajo si quiero contratar sus servicios?":"What is the work process like if I want to hire your services?" ?> 
                                    </h4>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $isLang ? "Nuestro proceso es sencillo, transparente y eficiente:":"Our process is simple, transparent, and efficient:" ?> </p>
                                        <ol class="ml-5">
                                            <li><b><?php echo $isLang ? "Consulta inicial":"Initial Consultation" ?> :</b> <?php echo $isLang ? "Entendemos sus necesidades y objetivos.":"We understand your needs and goals." ?> </li>
                                            <li><b><?php echo $isLang ? "Análisis y diagnóstico":"Analysis and diagnosis" ?> :</b> <?php echo $isLang ? "Evaluamos su situación actual y detectamos oportunidades de mejora.":"We assess your current situation and identify opportunities for improvement." ?> </li>
                                            <li><b><?php echo $isLang ? "Propuesta personalizada":"Personalized proposal" ?> :</b> <?php echo $isLang ? "Diseñamos una estrategia ajustada a su negocio.":"We design a strategy tailored to your business." ?> </li>
                                            <li><b><?php echo $isLang ? "Implementación y capacitación":"Implementation and training" ?> :</b> <?php echo $isLang ? "Ponemos en marcha las soluciones y formamos a su equipo.":"We implement the solutions and train your team." ?> </li>
                                            <li><b><?php echo $isLang ? "Monitoreo y optimización continua":"Continuous monitoring and optimization" ?> :</b> <?php echo $isLang ? ": Medimos resultados y ajustamos para maximizar el impacto.":"We measure results and adjust to maximize impact." ?> </li>
                                        </ol>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo $isLang ? "¿Cómo garantizan la seguridad de los datos de mis clientes?":"How do I ensure the security of my customers' data?" ?> 
                                    </h4>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $isLang ? "La seguridad es una prioridad. Implementamos las mejores prácticas y tecnologías, incluyendo:":"Safety is a priority. We implement best practices and technologies, including:" ?> </p>
                                        <ul class="solution-sector ml-5">
                                            <li><?php echo $isLang ? "Cifrado de extremo a extremo.":"End-to-end encryption." ?> </li>
                                            <li><?php echo $isLang ? "Autenticación multifactor (MFA).":"Multi-factor authentication (MFA)." ?> </li>
                                            <li><?php echo $isLang ? "Monitoreo constante con AWS Security Hub, Microsoft Azure Security y Google Cloud Security.":"Constant monitoring with AWS Security Hub, Microsoft Azure Security, and Google Cloud Security." ?> </li>
                                            <li><?php echo $isLang ? "Cumplimiento de normativas internacionales de protección de datos.":"Compliance with international data protection regulations." ?> </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTen">
                                    <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                                    <?php echo $isLang ? "¿Qué costos tienen sus servicios?":"What are the costs of your services?" ?> 
                                    </h4>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p><?php echo $isLang ? "Nuestros precios dependen de la complejidad y el alcance del proyecto. Ofrecemos <b>planes flexibles y personalizados</b> que se adaptan a las necesidades y el presupuesto de su empresa.":"Our prices depend on the complexity and scope of the project. We offer <b>flexible and customized plans</b> that fit your company's needs and budget." ?> </p>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>