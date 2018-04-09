<?php
    /* Template Name: Principal */ 
    get_header();
?>
    
    <section id="deliciosas" class="template-section">
        <div class="flex">
            <div class="columna">
                <h1>Deliciosas
                y Saludables</h1>
                
                <h2>Recetas con camote</h2>
                
                <p>El camote es genial, se pueda utilizar en un sinfín de recetas prácticas, saludables y sabrosas. </p>
                <p>Este <span class="ebook">eBook</span> es mi <span class="verde-fuerte">regalo para ti</span> que quieres agregar más alimentos buenos a tu día. Podrás preparar recetas saladas, dulces, líquidas y sólidas.  </p>
                <div class="flex">
                    <div class="columna">
                        <p class="verde-fuerte">¡Disfrútalas Ya!</p>
                    </div>
                    <div class="columna">
                        <button class="btn-green">¡DESCARGA GRATIS!</button>
                    </div>
                </div>
            </div>
            <div class="columna">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/home/camotes.png" alt="camotes">
            </div>
            <div class="columna">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/home/transparente-verde.png" alt="hojas">
            </div>
        </div>
    </section>
    
    <section id="about" class="template-section">
        <div class="contenedor">
            <div class="flex">
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/home/transparente-verde2.png" alt="hojas">
                </div>
                
                <div class="columna">
                    <h2>Acerca de mi</h2>
                    <p>Hola</p>
                    <h3>Soy Clauss</h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/coaching/rombos....png" alt="<>........<>">
                    <p>engo más de 35 años en el campo del acondicionamiento físico, los últimos años me he también especializado en áreas del bienestar, la prevención y la madurez funcional y autónoma.
                    </p>
                    <p>Quiero enseñarte que es posible comer sano y ejercitarte sin descuidar tus actividades diarias en pro del bienestar integral que te mereces.
                    </p>
                    <button class="btn-white">SABER MÁS</button>
                </div>
            </div>
        </div>
    </section>

    <?php 
    get_footer();
?>
