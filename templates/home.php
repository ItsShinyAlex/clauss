<?php
    /* Template Name: Principal */ 
    get_header();
?>

    <section id="intro">
        <?php echo do_shortcode('[rev_slider alias="principal"]'); ?>
    </section>

    <section id="about-home" class="template-section padding-50">
        <div class="contenedor">
            <div class="flex">
                <div class="columna">

                </div>

                <div class="columna">
                    <h2 class="big-white">Acerca de mi</h2>
                    <h3 class="special-white-big"><span>Hola</span>Soy Clauss</h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/coaching/rombos.png" alt="<>........<>">
                    <p class="texto-blanco">Tengo más de 35 años en el campo del acondicionamiento físico, los últimos años me he también especializado en áreas del bienestar, la prevención y la madurez funcional y autónoma.
                    </p>
                    <p class="texto-blanco">Quiero enseñarte que es posible comer sano y ejercitarte sin descuidar tus actividades diarias en pro del bienestar integral que te mereces.
                    </p>

                    <a href="#" class="boton blanco-transparente">SABER MÁS</a>
                </div>
            </div>
        </div>
    </section>
    <div class="fondo-figura"></div>
    <section id="mis-clientes" class="template-section padding-50">
        <div class="contenedor">
            <h2 class="big-green">Mis clientes
                <span class="special-green"> ¡Lo confirman!</span></h2>


            <div class="flex">
                <div class="columna">

                    <div class="testimonio flex">
                        <div class="columna">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/cliente1.png" alt="Emma">
                        </div>
                        <div class="columna">
                            <p class="testimonials">"Las clases de Claudia me gustan porque las sabe estructurar muy bien, es metódica y trabaja por secciones, se involucra con sus alumnas y la música es maravillosa."</p>
                            <p class="autor"><b>Emma</b></p>
                            <p class="puesto"><b>- Contadora, Profesionista y Mamá. -</b></p>
                        </div>
                    </div>
                </div>

                <div class="columna">
                    <div class="testimonio flex">
                        <div class="columna">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/cliente2.png" alt="Susana">

                        </div>
                        <div class="columna">
                            <p class="testimonials">"Gracias a Claus aprendí a ser consiente de lo que implica el "ejercicio", no a ir por la vida diciendo, es que voy al Gym, sino mentalizarme en voy a trabajar mi cuerpo para que siga siendo funcional muchísimo tiempo."</p>
                            <p class="autor"><b>Susana</b></p>
                            <p class="puesto"><b>- M. en C. En Ingeniería Mecánica-</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ebooks-home" class="template-section padding-50">

        <div class="contenedor">
            <div class="title">
                <h2 class="big-green">
                    Mis Ebooks
                    <span class="special-green"> y Videos </span></h2>
            </div>

            <div class="flex">
                <div class="columna">
                    <div class="green-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ebook-1.jpg" alt="COMIENZA A BRILLAR">
                    </div>
                </div>

                <div class="columna">
                    <h3 class="white"><b>Ebook</b></h3>
                    <h4 class="special-white">Hábitos Saludables</h4>
                    <p class="small"><b>Son guías que te orientarán en la mejora de tus patrones diarios (hábitos) en afán de mejorar tu calidad de vida, prevenir padecimientos crónicos y retrasar el envejecimiento prematuro.</b></p>
                    <a class="boton naranja">¡ME INTERESA!</a>
                </div>
            </div>




            <div class="flex">

                <div class="columna">
                    <h3 class="white"><b>Ebook</b></h3>
                    <h4 class="special-white">Cocina Saludable</h4>
                    <p class="small"><b>Son guías que te ayudarán a organizarte para cocinar sencillo, saludable y delicioso.</b></p>
                    <a class="boton naranja">¡ME INTERESA!</a>
                </div>


                <div class="columna">
                    <div class="green-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ebook-1.jpg" alt="COMIENZA A BRILLAR">
                    </div>
                </div>
            </div>



            <div class="flex">
                <div class="columna">
                    <div class="green-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ebook-1.jpg" alt="COMIENZA A BRILLAR">
                    </div>
                </div>
                <div class="columna">
                    <h3 class="white"><b>Ebook</b></h3>
                    <h4 class="special-white">Movimientos Saludables</h4>
                    <p class="small"><b>Son guías de apoyo para que te mantengas funcional, recuperes y conserves las cualidades físicas básicas para la vida, además de verte y sentirte muy bien.</b></p>
                    <a class="boton naranja">¡ME INTERESA!</a>
                </div>

            </div>
        </div>
    </section>

    <section id="suscribirme" class="template-section padding-50">
        <div class="contenedor">
            <div class="flex">
                <div class="columna">

                </div>
                <div class="columna">
                    <h2 class="black-gray"><b>¿Te gustaría recibir avisos de mis nuevos e-books y publicaciones saludables?</b></h2>
                    <p class="green"><b>Por favor deja tu correo aqui: </b></p>
                </div>
            </div>
        </div>
    </section>

    <section id="videos-home" class="padding-50 template-section">
        <div class="contenedor">
            <div class="flex">
                <div class="columna">
                    <h2>Videos de movimientos
                        <span class="green">saludables</span></h2>
                    <p>Por medio de videos fáciles pero con estructura, objetivo y dosificación, te iré enseñando diferentes rutinas para recuperar, conservar o desarrollar la resistencia, fuerza, flexibilidad, equilibrio y más cualidades físicas necesarias para prevenir lesiones así como verte y sentirte muy bien.
                    </p>
                    <a class="boton verde">¡ME INTERESA!</a>
                </div>
                <div class="columna">
                    <img class="videos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/videos.png" alt="circulo amarillo">
                </div>
            </div>
        </div>
    </section>

    <section id="coaching-home" class="template-section">
        <div class="contenedor">
            <div class="flex">
                <div class="columna">
                    <h2 class="green">COACHING
                        <span class="big-green">en cambio de
                        <b class="special-green">Hábitos</b></span></h2>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/jugoVerde.png" alt="Jugo saludable">
                </div>
                <div class="columna">
                    <p class="white">Crearé un programa <b>totalmente personalizado,</b> basado en tus objetivos, tiempo, recursos, preferencias, gustos y limitantes.</p>
                    <p>Es un proceso de acompañamiento personalizado en el camino de modificar diversos patrones de conducta que tienen que ver con la salud integral, con el objetivo de adoptar gradualmente hábitos más positivos y saludables para la vida.
                    </p>
                    <p class="cursiva">¡Mejora tu calidad de vida y logra bienestar integral!</p>
                    <a class="boton naranja-dos">¡ME INTERESA!</a>

                </div>
            </div>

        </div>
    </section>

    <section id="entrenamiento-home" class="template-section">
        <div class="contenedor">
            <div class="flex">
                <div class="columna">
                    <h2>ENTRENAMIENTO
                        <span class="big-green">deportivo en</span>
                        <span class="acondicionamiento">acondicionamiento</span>
                        <span class="cursiva">[Físico para la vida]</span></h2>


                    <div class="info">
                        <p>Diseñaré para ti un programa de entrenamiento personalizado que puedas realizar en casa. Tomando en cuenta tus objetivos, tiempo, recursos y limitantes.
                        </p>
                        <p>Te ayudaré a conservar y recuperar gradualmente cualidades físicas como <b>la fuerza, la flexibilidad y la resistencia</b>, entre otras, vitales para garantizar tu funcionalidad y autonomía óptima, mejorando tu calidad de vida. </p>
                        <p class="cursiva">Mejora estado físico, desde tu casa y a tu ritmo! </p>
                        <a class="boton naranja">¡ME INTERESA!</a>
                    </div>
                </div>
                <div class="columna">

                </div>
            </div>

        </div>
    </section>



    <?php 
    get_footer();
?>
