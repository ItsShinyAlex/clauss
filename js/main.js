//Remover los title de los a
window.onload = function() {
    var links = document.getElementsByTagName("a");
    for (var i = 0; i < links.length; i++) {
        var link = links[i];
        link.onmouseover = function() {
            this.setAttribute("org_title", this.title);
            this.title = "";
        };
        link.onmouseout = function() {
            this.title = this.getAttribute("org_title");
        };
    }
};

// JavaScript
window.sr = ScrollReveal({ reset: false, mobile: false });


      var hero = {
        origin   : "top",
        distance : "24px",
        duration : 1500,
        scale    : 1.05,
      }
      
      
      var clientes = {
        origin   : "top",
        distance : "24px",
        duration : 1500,
        scale    : 1.05,
        delay    : 1200,
      }

      var intro = {
        origin   : "bottom",
        distance : "64px",
        duration : 900,
        delay    : 1000,
        scale    : 1,
      }

      var resaltado = {
        origin   : "left",
        distance : "32px",
        duration : 1200,
        delay    : 400,
        scale    : 0,
      }

      
      var aplicaciones = {
        origin   : "top",
        distance : "24px",
        duration : 1000,
        scale    : 1.05,
        delay    : 1200
      }

      
      var titulo = {
        origin   : "bottom",
        distance : "32px",
        duration : 1200,
        delay    : 0,
        scale    : 0,
      }
      
       var subtitulo = {
        origin   : "bottom",
        distance : "32px",
        duration : 1200,
        delay    : 200,
        scale    : 0,
      }
      
      var imagenes = {
        origin   : "left",
        distance : "32px",
        duration : 1200,
        delay    : 600,
        scale    : 0,
      }
      
    var contenido = {
        origin   : "bottom",
        distance : "32px",
        duration : 1200,
        delay    : 800,
        scale    : 0,
      }

        
            
        //Animación en general
        sr.reveal('.template-section h2', titulo);
        sr.reveal('.template-section h3', subtitulo);
        sr.reveal('.template-section img', imagenes);
        sr.reveal('.template-section p', contenido);
        sr.reveal('.template-section a.boton', contenido);

      function addCommasToNum( num ){
        return num.toString().replace( /\B(?=(\d{3})+(?!\d))/g, "," )
      }

    
//smooth scroll
jQuery(function( $ ){
	// Smooth scrolling when clicking on a hash link
	$('a[href*="#"]').on('click',function (e) {
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		if ( $(window).width() > 1023 ) {
			var $scrollTop = $target.offset().top-140;
		} else {
			var $scrollTop = $target.offset().top;
		}

		$('html, body').stop().animate({
			'scrollTop': $scrollTop
		}, 900, 'swing');
	});

});