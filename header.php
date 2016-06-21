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
  <meta name="keywords" content="Marca – Logotipo,Namming,Identidade Visual,Papelaria,Apresentações Institucional,Apresentação Comercial,
Folder,Design Gráfico,Conceito Criativo,Site – Website,Layout Mobile,Wireframing,Desenvolvimento,
Responsivo – Mobile,UX/UI Design,One Page Site,App – Aplicativo,Wordpress e HTML,Front-end,
Adwords,Links Patrocinados,Facebook Ads,E-mail Marketing,Landing Page,Inbound,Geração de Leads,
Conteúdo para Blog,Social Mídia,SEO" />
  <meta name="author" content="Joel Santos - MadGO" />
  <meta name="contact" content="joel.santos@madgo.com.br" />

	<title><?php wp_title('-', true, 'right'); bloginfo() ?></title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bower_components/animate.css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/dist/assets/font/icomoon/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/dist/assets/css/main.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<header id="top">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="branding col-xs-6 col-sm-4">
      <a href="#" title="TT Elegancia">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/Intrust.png" alt="INTRUST WEB">
      </a>
    </div><!-- fim branding -->
    <div class="menu-collapse float--right">
      <span class="glyphicon glyphicon-th"></span>
    </div>
    <div class="menu col-xs-8">
      <div class="row">
        <div class="col-xs-12">
          <div id="menu-wrapper" class="menu__wrapper <?php if(is_home()) :?>link-animation<?php endif; ?>">
            <ul id="menu-list" class="nav navbar-nav menu__list">
              <li <?php if(is_home()) :?>class="page-scroll"<?php endif; ?>><a href="http://localhost/madweb/#top">Home</a></li>
              <li <?php if(is_home()) :?>class="page-scroll"<?php endif; ?>><a href="http://localhost/madweb/#about">Quem Somos</a></li>
              <li <?php if(is_home()) :?>class="page-scroll"<?php endif; ?>><a href="http://localhost/madweb/#clients">Nossos Clientes</a></li>
              <li <?php if(is_home()) :?>class="page-scroll"<?php endif; ?>><a href="http://localhost/madweb/#products">Produtos</a></li>
              <li <?php if(is_home()) :?>class="page-scroll"<?php endif; ?>><a href="http://localhost/madweb/#contact">Contato</a></li>
            </ul>
          </div> <!-- /#menu-wrapper -->
        </div> <!-- /.col-xs-12 -->
      </div><!-- fim row -->
    </div><!-- fim menu -->
  </div><!-- /.container-fluid -->
</nav>