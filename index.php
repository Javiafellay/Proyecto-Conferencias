<?php include_once 'includes/templates/header.php';?>

<section class="seccion contenedor">
  <h2>La Mejor conferencia de Diseño Web</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quo autem ratione exercitationem aspernatur Quo autem ratione exercitationem aspernatur Quo autem ratione exercitationem aspernatur Quo autem ratione exercitationem aspernatur Quo autem ratione exercitationem aspernatur </p>
</section><!--seccion-->

<section class="programa">
  <div class="contenedor-video">
    <video autoplay loop poster="img/bg-talleres.jpg">
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.webm" type="video/webm">
      <source src="video/video.ogv" type="video/ogv">
    </video>
  </div><!--contenedor-video-->
  <div class="contenido-programa">
    <div class="contenedor">
      <div class="programa-evento">
        <h2>Programa del Evento</h2>
        <nav class="menu-programa">
          <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres</a>
          <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i>Conferencias</a>
          <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
        </nav><!--menu-programa-->

        <div id="talleres" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>HTML5, CSS3 y JavaScript</h3>
            <p><i class="fa fa-clock" aria-hidden="true"></i>16:00 hs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i>06 de junio</p>
            <p><i class="fa fa-user" aria-hidden="true"></i>Javier Martinez Guanez </p>
          </div>

          <div class="detalle-evento">
            <h3>Responsive Web Design</h3>
            <p><i class="fa fa-clock" aria-hidden="true"></i>16:00 hs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i>06 de junio</p>
            <p><i class="fa fa-user" aria-hidden="true"></i>Javier Martinez Guanez </p>
          </div>

          <a href="#" class="button float-right">Ver Todos</a>

        </div><!--#talleres-->

        <div id="conferencias" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Como ser Freelance</h3>
            <p><i class="fa fa-clock" aria-hidden="true"></i>10:00 hs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i>10 de junio</p>
            <p><i class="fa fa-user" aria-hidden="true"></i>Marck Martinez Guanez </p>
          </div>

          <div class="detalle-evento">
            <h3>Tecnologias del Futuro</h3>
            <p><i class="fa fa-clock" aria-hidden="true"></i>17:00 hs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i>10 de junio</p>
            <p><i class="fa fa-user" aria-hidden="true"></i>Marta Martinez Guanez </p>
          </div>

          <a href="#" class="button float-right">Ver Todos</a>

        </div><!--#talleres-->

        <div id="seminarios" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Diseño UI/UX para móbiles</h3>
            <p><i class="fa fa-clock" aria-hidden="true"></i>17:00 hs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i>11 de junio</p>
            <p><i class="fa fa-user" aria-hidden="true"></i>El tío Elon Musk</p>
          </div>

          <div class="detalle-evento">
            <h3>Aprende a programar en una mañana</h3>
            <p><i class="fa fa-clock" aria-hidden="true"></i>20:00 hs</p>
            <p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Diciembre</p>
            <p><i class="fa fa-user" aria-hidden="true"></i>El Sr Bigotes</p>
          </div>

          <a href="#" class="button float-right">Ver Todos</a>

        </div><!--#talleres-->
      </div><!--programaevento-->
    </div><!--contenedor-->
  </div><!--contenidoPrograma-->
</section><!--seccionPrograma-->

<?php include_once 'includes/templates/invitados.php';  ?>

 <div class="contador parallax">
   <div class="contenedor">
     <ul class="resumen-evento clearfix">
       <li><p class="numero"></p>Invitados</li>
       <li><p class="numero"></p>Talleres</li>
       <li><p class="numero"></p>Días</li>
       <li><p class="numero"></p>Conferencias</li>
     </ul>
   </div><!--contenedor-->
 </div><!--Contador Páralax-->

 <section class="precios seccion">
   <h2>Precios</h2>
   <div class="contenedor">
     <ul class="lista-precios clearfix">
       <li>
         <div class="tabla-precio">
           <h3>Pase por día</h3>
           <p class="numero">$30</p>
           <ul>
             <li>Bocadillos Gratis</li>
             <li>Todas las conferencias</li>
             <li>Todos los Talleres</li>
           </ul>
           <a href="#" class="button hollow">Comprar</a>
         </div>

       </li>

              <li>
         <div class="tabla-precio">
           <h3>Todos los días</h3>
           <p class="numero">$50</p>
           <ul>
             <li>Bocadillos Gratis</li>
             <li>Todas las conferencias</li>
             <li>Todos los Talleres</li>
           </ul>
           <a href="#" class="button">Comprar</a>
         </div>

       </li>

              <li>
         <div class="tabla-precio">
           <h3>Pase por 2  día</h3>
           <p class="numero">$45</p>
           <ul>
             <li>Bocadillos Gratis</li>
             <li>Todas las conferencias</li>
             <li>Todos los Talleres</li>
           </ul>
           <a href="#" class="button hollow">Comprar</a>
         </div>

       </li>
     </ul>
   </div>
 </section><!--Seccion precios-->

 <div id="mapa" class="mapa"></div>

 <section class="seccion">
   <h2>Testimoniales</h2>
   <div class="testimoniales contenedor clearfix">
   <div class="testimonial">
     <blockquote>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate.</p>
       <footer class="info-testimonial clearfix">
         <img src="img/testimonial.jpg" alt="Testimonial">
         <cite>Oswaldo Aponte Escobedo <span>Diseñador en Margua</span></cite>
       </footer>
     </blockquote>
   </div><!--FinTestimonial-->

   <div class="testimonial">
     <blockquote>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate.</p>
       <footer class="info-testimonial clearfix">
         <img src="img/testimonial.jpg" alt="Testimonial">
         <cite>Oswaldo Aponte Escobedo <span>Diseñador en Margua</span></cite>
       </footer>
     </blockquote>
   </div><!--FinTestimonial-->

   <div class="testimonial">
     <blockquote>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate.</p>
       <footer class="info-testimonial clearfix">
         <img src="img/testimonial.jpg" alt="Testimonial">
         <cite>Oswaldo Aponte Escobedo <span>Diseñador en Margua</span></cite>
       </footer>
     </blockquote>
   </div><!--FinTestimonial-->
 </div><!--Testimoniales-->
 </section>

<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p>Registrate al newsletter</p>
    <h3>Margua</h3>
    <a href="#" class="button transparente">Registro</a>
  </div><!--CONTENIDO-->
</div><!--NEWSLETTER PARALLAX-->

<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
      <li><p id="dias" class="numero"></p>días</li>
      <li><p id="horas" class="numero"></p>horas</li>
      <li><p id="minutos" class="numero"></p>minutos</li>
      <li><p id="segundos" class="numero"></p>segundos</li>
    </ul>
  </div><!--cuenta-Regresiva-->
  
</section>

<?php include_once'includes/templates/footer.php'; ?>