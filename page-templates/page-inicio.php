<?php
/*
Template name: Inicio
*/
?>
<?php get_header(); ?>
<main class="Main">
  <div class="Main-container">
    <section class="Slider">
      <div class="Slider-content" id="slider">
        <section class="Slider-content-item">
          <div class="Slider-content-item-text">
            <p>Desarrollo Web</p>
            <p>Súmate a la transformación digital</p>
          </div>
          <div class="Slider-content-item-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/desarrollo-web.svg')); ?>">
          </div>
        </section>
        <section class="Slider-content-item">
          <div class="Slider-content-item-text">
            <p>Aplicaciones Web</p>
            <p>Programas que corren en el navegador</p>
          </div>
          <div class="Slider-content-item-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/pwa.svg')); ?>">
          </div>
        </section>
        <section class="Slider-content-item">
          <div class="Slider-content-item-text">
            <p>Aplicaciones móviles</p>
            <p>Desarollo de aplicaciones móviles hibridas</p>
          </div>
          <div class="Slider-content-item-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/app-movil.svg')); ?>">
          </div>
        </section>
        <section class="Slider-content-item">
          <div class="Slider-content-item-text">
            <p>Planes de mantenimiento</p>
            <p>Mejora continua y cambios periódicos en su sitio o app</p>
          </div>
          <div class="Slider-content-item-img">
            <img class="Slider-img-planes" src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/planes.svg')); ?>">
          </div>
        </section>
      </div>
      <div id="Prev" class="Prev">&#10094;</div>
      <div id="Next" class="Next">&#10095;</div>
    </section>
    <section class="Slogan">
      <article class="Slogan-content">
        <div>
          <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/transformacion-digital.png')); ?>">
        </div>
        <div>
          <p>Súmate a la transformación digital</p>
        </div>
      </article>
    </section>
    <section class="Servicios">
      <h2>¿Qué Ofrecemos?</h2>
      <div class="Servicios-content">
        <div class="Servicios-card">
          <div class="Servicios-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/planes.svg')); ?>">
          </div>
          <p class="Servicios-card-text">
            Planes para desarrollar, actualizar y mejorar continuamente tu sitio web o aplicación.
          </p>
        </div>
        <div class="Servicios-card">
          <div class="Servicios-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/desarrollo-web.svg')); ?>">
          </div>
          <p class="Servicios-card-text">
            Desarrollo de sitios web profesional, moderno, a medida, adaptado a todos los tamaños de dispositivo y auto-adminstrable.
          </p>
        </div>
        <div class="Servicios-card">
          <div class="Servicios-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/pwa.svg')); ?>">
          </div>
          <p class="Servicios-card-text">
            Progressive Web App. Aplicaciones web que permiten mejoras excelente y que corren en todos los dispositivos.
          </p>
        </div>
        <div class="Servicios-card">
          <div class="Servicios-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/app-movil.svg')); ?>">
          </div>
          <p class="Servicios-card-text">
            Aplicaciones móviles híbridas.
          </p>
        </div>
      </div>
    </section>
    <section class="Tecnologias">
      <h2>Tecnologias</h2>
      <div class="Tecnologias-content">
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/html.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            HTML Es un lenguaje de marcado que permite dar estructura a las páginas web.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/css.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            CSS Es un lenguaje que permite embellecer las páginas web, darle estilos, colores e incluso animaciones.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/js.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            JavaScript es el único lenguaje de programación que "entienden" los navegadores. Permite realizar animaciones avanzadas en nuestras páginas, validar formularios, realizar cambios sin refrescar el navegador, etc, etc, etc.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/wordpress.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            Wordpress es el gestor de contenidos más usado de Internet. Permite que personas, sin saber de código, puedan gestionar el contenido de su página web. Ideal para gestionar un sitio web sencillo, con su propio Blog para personas que no saben programar.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/angular.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            Angular es un Framework robusto, estable y moderno que permite desarrollar sitios y aplicaciones web complejas.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/mongodb.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            MongoDB es una base de datos no relacional basada en documentos.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/nodejs.svg')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            NodeJS es un entorno de desarrollo que permite, entre otras cosas, utilizar JavaScript en el lado del Servidor. Con ello podemos mejorar el desarrollo de sitios web simples y, permite también desarrollar aplicaciones web complejas con el mismo lenguaje tanto del lado de cliente (navegador) como del lado del servidor.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/ionic.svg')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            Ionic es un Framework que permite desarrollar aplicaciones móviles hibridas.
          </p>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
