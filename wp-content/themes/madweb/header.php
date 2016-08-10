<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true); echo " - "; bloginfo('description');
  } else {
      bloginfo('name'); echo " - "; bloginfo('description');
  }
  ?>" />
  <meta name="keywords" content="fazer meu site, fazer um site, site responsivo, criar site, fazer site, desenvolvimento de sites, quero fazer um site, como montar um site, webdesign, site, website, desenvolvimento, html, wordpress, frontend, front-end, criação de site, landing page, blog, one page site, ux, user experience, seo, wireframe, layout mobile, marketing digital, lead, leads, geração de leads, links patrocinados, adwords, landing page, inbound, blog, one page site, ux, user experience, seo, wireframe, layout mobile, app, desenvolvimento de app" />
  <meta name="author" content="Intrust WEB" />
  <meta name="contact" content="contato@intrustweb.com.br" />
  <meta name="google-site-verification" content="HUJJQNVAyZDn2ghFd2dLp_RzHYS_HvlGqDouAZwWpyo" />

  <title><?php wp_title('-', true, 'right'); bloginfo() ?></title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/animate.css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/dist/assets/font/icomoon/style.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/dist/assets/css/main.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php get_template_part('analyticstracking'); ?>
  <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target="#menu-wrapper" data-offset="64">
<header id="top">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container navbar-wrapper">
    <div class="branding col-xs-8 col-sm-2 text-right">
      <a href="<?php bloginfo('url');?>" title="<?php wp_title('-', true, 'right'); bloginfo() ?>">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/intrust.png" alt="INTRUST WEB">
      </a>
    </div><!-- fim branding -->
    <div class="menu-collapse float--right">
      <span class="glyphicon glyphicon-th"></span>
    </div>
    <div class="menu col-xs-9 col-sm-10">
      <div class="row">
        <div class="col-xs-12">
          <div id="menu-wrapper" class="menu__wrapper <?php if(is_home()) :?>link-animation<?php endif; ?>">
          <?php if (is_home()): ?>
            <ul id="menu-list" class="nav navbar-nav menu__list">
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#top">Home</a></li>
              <li class="dropdown">

                <a href="#" class="dropdown-toggle" id="dropProdutos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Produtos <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="dropProdutos">
                  <li><a href="<?php bloginfo('url'); ?>">Criação de site</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/landing-page">Landing page</a></li>
                </ul>

              </li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#clients">Quem confiou</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#products">Motivos</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#price">Quanto custa</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#contact">Contato</a></li>
              <li class="<?php if(is_page("blog")){echo "active";} ?>"><a href="<?php bloginfo('url');?>/blog">Blog</a></li>
            </ul>
          <?php elseif(is_page("landing-page")): ?>
            <ul id="menu-list" class="nav navbar-nav menu__list link-animation">
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>landing-page/#top">Home</a></li>
              <li class="dropdown">

                <a href="#" class="dropdown-toggle" id="dropProdutos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Produtos <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="dropProdutos">
                  <li><a href="<?php bloginfo('url'); ?>">Criação de site</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/landing-page">Landing page</a></li>
                </ul>

              </li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>landing-page/#clients">Quem confiou</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>landing-page/#products">Motivos</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>landing-page/#price">Quanto custa</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>landing-page/#contact">Contato</a></li>
              <li class="<?php if(is_page("blog")){echo "active";} ?>"><a href="<?php bloginfo('url');?>/blog">Blog</a></li>
            </ul>
          <?php else: ?>
            <ul id="menu-list" class="nav navbar-nav menu__list">
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#top">Home</a></li>
              <li class="dropdown">

                <a href="#" class="dropdown-toggle" id="dropProdutos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Produtos <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="dropProdutos">
                  <li><a href="<?php bloginfo('url'); ?>">Criação de site</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/landing-page">Landing page</a></li>
                </ul>

              </li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#clients">Quem confiou</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#products">Motivos</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#price">Quanto custa</a></li>
              <li><a href="<?php if(!is_home()):bloginfo('url'); echo "/"; endif; ?>#contact">Contato</a></li>
              <li class="<?php if(is_page("blog")){echo "active";} ?>"><a href="<?php bloginfo('url');?>/blog">Blog</a></li>
            </ul>
          <?php endif ?>
          </div> <!-- /#menu-wrapper -->
        </div> <!-- /.col-xs-12 -->
      </div><!-- fim row -->
    </div><!-- fim menu -->
  </div><!-- /.container-fluid -->
</nav>
</header>