<footer id="main-footer" class="">
<?php  wp_footer(); ?>
<section class="prefooter">
    <div class="h2footer">Sigue descubriendo</div>
  <div class="columnas3 researchf">
</section>
</footer>
<!-- Efecto del footer, tiene que cargar en todas las páginas -->
<script src="<?php/* echo get_template_directory_uri();?>/scripts/preiframe.js<?php echo constant("js_version"); */?>" defer></script>
</div>


<?php
/*switch (constant("pagina")) {
    case 'inicio':
        echo '<script src="' . get_template_directory_uri() . '/scripts/navbar.js' . constant("js_version") .'" defer/></script>';
        break;
    case 'paciente-internacional':
    case 'segunda-opinion':
      echo '<script src="' . get_template_directory_uri() . '/scripts/scroll-h2.js' . constant("js_version") .'" defer/></script>';
      break;
    case 'profesional':
      echo '<script src="' . get_template_directory_uri() . '/scripts/ver-mas.js' . constant("js_version") .'" defer/></script>';
      break;
    case 'equipo-medico':
      echo '<script src="' . get_template_directory_uri() . '/scripts/scroll-equipo-medico.js' . constant("js_version") .'" defer/></script>';
      echo '<script src="' . get_template_directory_uri() . '/scripts/boton-remarcado.js' . constant("js_version") .'" defer/></script>';
      break;
    case 'tratamiento-hija':
    case 'tratamiento-u':
    case 'tecnologia-u':
    case 'pediatrica':
    case 'pediatrica-hija':
      echo '<script src="' . get_template_directory_uri() . '/scripts/slider-swiper.js' . constant("js_version") .'" defer/></script>';
      break;
    case 'docencia':
      echo '<script src="' . get_template_directory_uri() . '/scripts/read-more.js' . constant("js_version") .'" defer/></script>';
}
*/
?>

</body>
</html>