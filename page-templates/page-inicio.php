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
            <p>Desarrollo de aplicaciones móviles híbridas</p>
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
      <div id="Prev" class="Prev fas fa-chevron-left"></div>
      <div id="Next" class="Next fas fa-chevron-right"></div>
    </section>
    <section class="Slogan">
      <article class="Slogan-content">
        <div class="Slogan-content-item">
          <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/transformacion-digital.png')); ?>">
        </div>
        <div class="Slogan-content-item">
          <p>La transformación digital consiste no sólo en incluir tecnología digital en tus proyectos sino en transformar los procesos productivos, la gestión y el enfoque mismo de tus emprendimientos.</p>
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
            Planes para desarrollar, actualizar y mejorar continuamente tus sitios web o aplicaciones.
          </p>
        </div>
        <div class="Servicios-card">
          <div class="Servicios-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/desarrollo-web.svg')); ?>">
          </div>
          <p class="Servicios-card-text">
            Desarrollo de sitios web profesionales, modernos, a medida, adaptados a todos los tamaños de dispositivo y auto-adminstrables.
          </p>
        </div>
        <div class="Servicios-card">
          <div class="Servicios-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/pwa.svg')); ?>">
          </div>
          <p class="Servicios-card-text">
            Progressive Web App permite desarrollar plataformas web que se comportan como aplicaciones pero que son ejecutados por el navegador.
          </p>
        </div>
        <div class="Servicios-card">
          <div class="Servicios-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/app-movil.svg')); ?>">
          </div>
          <p class="Servicios-card-text">
            Las aplicaciones móviles híbridas se pueden subir a Play Store o Apple Store con la ventaja de no tener que desarrollar la misma aplicación para cada sistema operativo. Conoce más de esta tecnología en nuestro blog. li19La83
          </p>
        </div>
      </div>
    </section>
    <section class="Tecnologias">
      <h2>Tecnologías</h2>
      <div class="Tecnologias-content">
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/html.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            HTML Es un lenguaje de marcado que permite dar estructura a las páginas web, incorporar archivos externos y mostrar el contenido de los sitios en general.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/css.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            CSS Es el lenguaje que permite embellecer las páginas web, darle estilos, colores e incluso animaciones. También permite modificar la visualización de la estructura generada con HTML.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/js.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            JavaScript es el único lenguaje de programación que "entienden" los navegadores. Permite transformar un sencillo sitio web en una plataforma dinámica capaz de realizar tareas tan avanzadas como las que podría hacer un programa de escritorio.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/wordpress.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            El 60,7% de los sitios que usan un gestor de contenido, se inclinan por WP. Permite que puedas gestionar el contenido de tus sitios web, sean estos un blog, una tienda online, una plataforma de reservas o de pedidos a domicilio.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/angular.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            Angular es un Framework robusto, estable y moderno que permite desarrollar sitios, aplicaciones web complejas, aplicaciones móviles e incluso programas que corran en tu computadora.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/mongodb.png')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            MongoDB es el sistema lider en la gestión de bases de datos no relacionales. Basado en un modelo de documentos permite una gestión veloz, eficaz y eficiente de tus bases de datos. Conoce más de esta tecnología en nuestro blog.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/nodejs.svg')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            NodeJS es un entorno de desarrollo que permite, entre otras cosas, utilizar JavaScript en el lado del Servidor. Con ello podemos programar aplicaciones web y móviles complejas con el mismo lenguaje tanto del lado de cliente (navegador) como del lado del Servidor, conocidas como aplicaciones isomorficas.
          </p>
        </div>
        <div class="Tecnologias-card">
          <div class="Tecnologias-card-img">
            <img src="<?php echo esc_url(home_url('/wp-content/themes/esferadigital/img/ionic.svg')); ?>">
          </div>
          <p class="Tecnologias-card-text">
            Ionic es el Framework más utilizado para el desarrollo de aplicaciones móviles hibridas. Se complementa excelentemente con Angular, facilitando tanto el desarrollo como el mantenimiento y la escalabilidad de tus aplicaciones.
          </p>
        </div>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
