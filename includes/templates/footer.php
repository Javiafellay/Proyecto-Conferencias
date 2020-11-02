<footer class="site-footer">
  <div class="contenedor clearfix">
    <div class="footer-informacion">
      <h3>Sobre<span>Margua</span></h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque incidunt, dolorum nobis! Magnam dignissimos quas.</p>
    </div><!--footer-Informacion-->

    <div class="ultimos-tweets">
      <h3>Ultimos<span>Tweets</span></h3>
      <ul>
        <li>Officia fugiat maxime hic at cupiditate explicabo quidem obcaecati, #deserunt velit quod, numquam!</li>
        <li>Officia fugiat maxime hic at cupiditate explicabo quidem obcaecati, #deserunt velit quod, numquam!</li>
        <li>Officia fugiat maxime hic at cupiditate explicabo quidem obcaecati, #deserunt velit quod, numquam!</li>
      </ul>
    </div><!--ultimos-tweets-->

    <div class="menu">
      <h3>Redes<span>Sociales</span></h3>
            <nav class="redes-sociales">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>
    </div><!--Menu-->

</div><!--Contenedor-->

<p class="copyright">
  Todos los Derechos Reservados Margua 2020
</p>
  
</footer>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="js/jquery-1.12.0.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script> 
  <script src="js/jquery.lettering.js"></script>
    <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);//PARA ELIMINAR LAS EXTENCIONES DE LOS NOMBRES DE LAS PAGINAS

      if ($pagina == 'invitados' || $pagina == 'index') {
        echo '<script src="js/jquery.colorbox-min.js"></script>';
      }else if ($pagina == 'conferencia') {
         /*Librería de   Lightbox para imagenes*/
        echo '<script src="js/lightbox.js"></script>';
      }
  ?>
  <script src="js/main.js"></script>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
