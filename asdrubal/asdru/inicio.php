<?php
define("pagina","inicio");
$current_pagina = 'inicio';
include ('00_functions.php');
/* Template Name: HOME */;
?>

<x-layout class="homelayout">
  <?php

include $ruta . '01-cover.php';

?>
</x-layout>

<?php get_footer(); ?>
