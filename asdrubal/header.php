<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=6">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--Fuentes #CAMBIO 
<link rel="preload" href="/wp-content/themes/asdrubal/core/fonts/Cambon-Regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/wp-content/themes/asdrubal/core/fonts/MessinaSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
-->


<?php
include 'complements/variables.php';
include 'complements/versiones.php';
?>

<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/core/fonts/fonts.css' type='text/css' media='all'/>
<?php
 /* #CAMBIO Comprobar cuando avance el proyecto
 $noCookiePopup = isset($_GET['noCookiePopup']) && $_GET['noCookiePopup'] == 'true';
 if (!isset($_COOKIE['accept_cookies']) && !$noCookiePopup) {
  // Viene de ahí, pero lo pusimos inline por velocidad
   // echo "<link rel='stylesheet' id='cookies-css' href='/wp-content/plugins/Anibal/includes/css/cookies.css' media='all' />";
        echo '<style>#cookieConsentContainer{position:fixed;bottom:0;z-index:11;min-height:200px;align-items:center;background-color:#32323a;color:#fff;font-family:"Open Sans",sans-serif;font-size:14px;padding:0 10px;margin:auto;width:calc(100% - 0px);justify-content:center;flex-direction:column;box-shadow:#00000063 0 -4px 17px 8px;opacity:.9}#acceptCookies{background-color:#F4B562;font-weight:700;color:#001D3C}#rejectCookies{color:#2c2d2d}#acceptCookies,#rejectCookies{font-size:14px;cursor:pointer;border:none;margin:8px;padding:8px}a.cookiesprivacidad{color:#F4B562}</style>';
      }
  */  
?>

<link rel='preload' href='<?php echo get_template_directory_uri(); ?>/asdrubal/css/main.css<?php echo constant("var_param_monthly") . constant("css_version");?>' type='text/css' media='all' as="style" />
<link rel="apple-touch-icon-precomposed" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon.jpg"/>
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.jpg" sizes="32x32"/>

<?php // Aquí el wp head
wp_head();
?>


<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/asdrubal/css/main.css<?php echo constant("var_param_monthly") . constant("css_version");?>' type='text/css' media='all'/>

 <meta name="user-date" content="<?php date_default_timezone_set('Europe/Madrid'); $date = date('m/d/Y H:i:s');echo $date;?>">
 <!-- #CAMBIO <meta name="google-site-verification" content="xQe6jqso118wd9vc36A5VYTpFKjg3W-AEVipHm9XnKA" />-->


</head>
<script async src='<?php echo get_template_directory_uri(); ?>/scripts/navbar.js<?php echo constant("js_version");?>'></script>
<?php
//Barra de navegación
include 'asdru/modulos/header-nav.php';
?>

</header>
