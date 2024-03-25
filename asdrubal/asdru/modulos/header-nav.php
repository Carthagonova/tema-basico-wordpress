<?php

$rutita = $current_url="//".$_SERVER['HTTP_HOST'];

$link_somos = $rutita.'/quienes-somos/' ;
$link_terapias = $rutita.'/terapias/' ;
$link_tarifas = $rutita.'/tarifas/' ;
$link_tajetas = $rutita.'/tarjetas-regalo/';
$link_blog = $rutita.'/blog/' ;
$link_contacto = $rutita.'/contacto/' ;
$link_reservas = 'https://bit.ly/3kdHnYw' ;
?>
<body>
<header>

<div class="absolute-navbar">
<div id="contactocta">
    <div class="nav-together">
      <div><a href="tel:+34912627104"><img id="telefono" src="<?php echo get_template_directory_uri(); ?>/images/phone.svg" width="25px" alt="Asdrubal Teléfono"> +34 912 627 104</a></div>
      <div><a href="/contacto/"><img id="telefono" src="<?php echo get_template_directory_uri(); ?>/images/mail.svg" width="25px" alt="Asdrubal email"> Contáctenos</a></div>
    </div>
</div>
  <nav class="navbar-header">
    <a href="<?php echo $rutita?>/" id="main-link-home">
      <div class="navbar-logo">
        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/asdrubal-logo.jpg" width="250" alt="Asdrubal Logo">
      </div>
    </a>

  <ul id="main-navbar">
  <!-- #CAMBIO Se puede hacer asçí con un summary details, ocon un desplegable normal
    <li >
      <details id="s-tratamientos">
          <summary>Tratamientos</summary>
          <div class="dropdown-content">    
                 <ul>
                    <li><a href="/hiperplasia-benigna-de-prostata/">Hiperplasia Benigna de Próstata</a></li>
                    <li><a href="/cancer-de-prostata/">Cáncer de Próstata</a></li>
                    <li><a href="/cancer-de-vejiga/">Cáncer de Vejiga</a></li>
                    <li><a href="/cancer-de-rinon/">Cáncer de Riñón</a></li>
                    <li><a href="/cancer-de-testiculo/">Cáncer de Testículo</a></li>
                  </ul>
                  <div class="mainsummary"><a class="bg-blue" href="<?php echo $link_tratamientos ;?>">Tratamientos</a></div>
          </div>
      </details>
    </li>-->
    <li class="navlinks"><a href="<?php echo $link_somos ;?>">Quiénes Somos</a></li>
    <li class="navlinks"><a href="<?php echo $link_terapias ;?>">Terapias</a></li>
    <li class="navlinks"><a href="<?php echo $link_tarifas ;?>">Tarifas</a></li>
    <li class="navlinks"><a href="<?php echo $link_tarjetas ;?>">Tarjetas Regalo</a></li>
    <li class="navlinks"><a href="<?php echo $link_blog ;?>">Blog</a></li>
    <li class="navlinks"><a href="<?php echo $link_contacto ;?>">Contacto</a></li>
  </ul>

  <ul id="login-navbar">
  <li id="cita" class="cta mainbg"><a class="linkwhite" href="<?php echo $link_reservas ;?>">Reservas</a></li>
  <li id="menu-togle" class="cta bg-blue"  onclick="openmenu()"><div>Menu</div></li>
  </ul>
  </nav>
</div>

<?php // BARRA DE NAVEGACIÓN SI MOVIL ?>

<div id="mobile-nab" class="navbar-mobile">
<nav id="navbar-mobile" class="mobile-ulbar-tcs">
  <div class="mobilepanel">
          <div id="close-menu" class="close-menu" onclick="closemenu()">X</div>
  </div>
  <ul class="main-navbar-movile">
    <li id="homelink"><a href="<?php echo $rutita ;?>"><svg xmlns="http://www.w3.org/2000/svg" width="29.876" height="11.671" viewBox="0 0 29.876 11.671"><g id="Group_2691" data-name="Group 2691" transform="translate(-1007.5 -65.213)"><g id="Group_1768" data-name="Group 1768" transform="translate(1015.098 65.713) rotate(90)"><path id="Path_6234" data-name="Path 6234" d="M-5872.524,370.362a.5.5,0,0,1-.4-.2l-5.335-7.1a.5.5,0,0,1,.1-.7.5.5,0,0,1,.7.1l5.335,7.1a.5.5,0,0,1-.1.7A.5.5,0,0,1-5872.524,370.362Z" transform="translate(5877.86 -362.764)"></path><path id="Path_6235" data-name="Path 6235" d="M-5877.86,370.362a.5.5,0,0,1-.3-.1.5.5,0,0,1-.1-.7l5.335-7.1a.5.5,0,0,1,.7-.1.5.5,0,0,1,.1.7l-5.335,7.1A.5.5,0,0,1-5877.86,370.362Z" transform="translate(5883.196 -362.764)"></path></g><path id="Path_7249" data-name="Path 7249" d="M-10252.624,1135.549H-10282v-1h29.376Z" transform="translate(11290 -1064)"></path></g></svg> Inicio</a></li>
    <li class="navlinks"><a href="<?php echo $link_somos ;?>">Quiénes Somos</a></li>
    <li class="navlinks"><a href="<?php echo $link_terapias ;?>">Terapias</a></li>
    <li class="navlinks"><a href="<?php echo $link_tarifas ;?>">Tarifas</a></li>
    <li class="navlinks"><a href="<?php echo $link_tarjetas ;?>">Tarjetas Regalo</a></li>
    <li class="navlinks"><a href="<?php echo $link_blog ;?>">Blog</a></li>
    <li class="navlinks"><a href="<?php echo $link_contacto ;?>">Contacto</a></li>
  </ul>
</nav>


</div>
<div id="menu-togle" class="mobile-toggle"></div>

<!-- #CAMBIO NOSE SI HACER EL OVERLAY ASI <div id="page-overlay"> Este div se cierra en el footer, es para hacer el efecto de transparencia al abrir el menú-->
<?php // EL header se cierra en el header del index ; ?>