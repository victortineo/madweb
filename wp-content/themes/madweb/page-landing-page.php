<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()):the_post(); ?>
<div id="<?php echo get_the_ID(); ?>" class="landingpage">

<div id="carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
  </ol> -->
  <!-- Wrapper for slides -->
  <div class="carousel-inner link-animation" role="listbox">
    <div class="item active">
      <div class="carousel-caption aniview" av-animation="slideInRight">
        <h1>Você precisa desenvolver uma Landing Page.<br>Nós desejamos fazer uma Landing Page para você!</h1>
        <p>Soluções para vender mais na internet</p>
        <a href="#about" class="btn btn-custom3">SAIBA MAIS</a>
      </div>
    </div>
  </div>
</div>

<!-- Section-n1 About -->
<section id="about" class="section-n1">
  <div class="container">
    <div class="row">
      <article class="section-n1__about link-animation">
        <header class="page-header">
          <h1 class="text-uppercase">Criação de uma Landing Page responsiva.</h1>
          <h2>Invista no crescimento da sua empresa</h2>
        </header>
        <div class="section-n1__content">
          <p>Criação de uma Landing Page para empresas que procuram soluções para vender mais na internet através de um formato cuidadosamente desenvolvido pela Intrust Web, garantindo em sua tecnologia o desenvolvimento leve, com design inovador, respeitando as normas de uma Langing Page responsiva precisa e práticas para garantir a conversão e atração de mais clientes (Leads) para o seu negócio.</p>
        </div>
        <a href="#clients" class="btn btn-custom3">SAIBA MAIS</a>
      </article>
    </div><!-- row -->
  </div><!-- container -->
</section><!-- section-n1 -->

<!-- Section-n2 Newsletter -->
<section class="section-n2"> 
  <div class="container">
    <div class="row section-n2-newsletter">
      <header class="page-header col-xs-12 col-md-6" av-animation="slideInLeft"> <!-- header -->
        <h1>RECEBAS AS <strong>NOVIDADES</strong></h1>
      </header> <!-- header -->
      <article class="content col-xs-12 col-md-6"> <!-- content -->
        <div class="row">
          <form action="//intrustweb.us13.list-manage.com/subscribe/post?u=a2a672fef6910f5f7276a880f&amp;id=3a32fe030f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div class="col-xs-12 col-sm-4">
              <div class="input-group">
                <input placeholder="NOME" name="FNAME" id="mce-FNAME" type="text">
              </div>
            </div>
            <div class="col-xs-12 col-sm-5">
              <div class="input-group">
                <input placeholder="SEU E-MAIL" name="EMAIL" type="email" id="mce-EMAIL">
              </div>
            </div>
            <div class="col-xs-12 col-sm-3">
              <input type="submit" value="ASSINAR" name="subscribe" id="mc-embedded-subscribe" class="btn btn-custom1 btn-block">
            </div>
          <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a87686e44179880f1e95c6c84_ee643cbcd8" tabindex="-1" value=""></div>
          <div class="clear"></div>
          </form>
        </div>
      </article> <!-- content -->
    </div>
  </div>
</section>

<!-- Section-n3 Cases -->
<section id="clients" class="section-n3">
  <div class="container">
    <div class="row section-n3__cases">
      <header class="page-header">
        <h1>Quem já confiou</h1>
        <h2>Conheça quem já confiou na criação de site</h2>
      </header>
    </div><!-- row -->
  </div><!-- container -->
</section><!-- section-n1 -->
<section class="section-n3__cases-content mod_tabnav2">
<div class="container">
<div class="row">
  <div class="col-xs-12 no-gutter">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">

      <li role="presentation" class="active col-xs-4 col-sm-6 col-md-2 col-md-offset-3">
        <a href="#tab-pane1" aria-controls="tab-pane1" role="tab" data-toggle="tab">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/logo8.png" alt="MOV INVESTIMENTOS">
        </a>
      </li>
      <li role="presentation" class="col-xs-4 col-sm-6 col-md-2">
        <a href="#tab-pane2" aria-controls="tab-pane2" role="tab" data-toggle="tab">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/logo9.png" alt="JC NASSUR"> 
        </a>
      </li>
      <li role="presentation" class="col-xs-4 col-sm-6 col-md-2">
        <a href="#tab-pane3" aria-controls="tab-pane3" role="tab" data-toggle="tab">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/logo7.png" alt="DR MAURICIO KURK"> 
        </a>
      </li>
<!--       <li role="presentation" class="col-xs-4 col-sm-6 col-md-2">
        <a href="#tab-pane4" aria-controls="tab-pane4" role="tab" data-toggle="tab">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/logo4.png" alt="PANDORAS BOX"> 
        </a>
      </li> -->
<!--       <li role="presentation" class="col-xs-4 col-sm-6 col-md-2">
        <a href="#tab-pane5" aria-controls="tab-pane5" role="tab" data-toggle="tab">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/logo5.png" alt="BIG CASE">
        </a>
      </li>
      <li role="presentation" class="col-xs-4 col-sm-6 col-md-2">
        <a href="#tab-pane6" aria-controls="tab-pane6" role="tab" data-toggle="tab">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/logo6.png" alt="SEQUENZA">   
        </a>
      </li> -->
    </ul> <!-- /.nav-tabs -->
  </div> <!-- xs.12 -->
</div><!-- row -->
</div><!-- container -->
<hr>
<div class="container">
<div class="row">
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- GLOBALSTAR -->
    <article role="tabpanel" class="tab-pane fade in active" id="tab-pane1">
      <div class="col-xs-12 col-sm-12 col-md-6 tab-content-wrapper tab-content-1">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/euro.gif" alt="MOV INVESTIMENTOS">
        <h1>EURO FACTORING</h1>
        <p>"O desenvolvimento aconteceu com fluidez e com um atendimento de muita qualidade, estou 100% satisfeito e tenho orgulho do resultado final. Sou grato pelo trabalho desenvolvimento pela equipe da Intrust Web"</p>
      </div>
      <div class="col-xs-12 text-center">
        <a target="_blank" href="http://madgo.com.br/eurofactoring/" class="href btn btn-custom1">DEMONSTRAÇÃO</a>
      </div>
    </article>
    <article role="tabpanel" class="tab-pane fade" id="tab-pane2">
      <div class="col-xs-12 col-sm-12 col-md-6 tab-content-wrapper tab-content-1">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/stress-english.gif" alt="JC NASSUR">
        <h1>STRESS ENGLISH</h1>
        <p>Site desenvolvido em cima de um framework atualizado e moderno levando em conta que o cliente é do ramo tecnológico. A proposta exibe imagens relacionadas aos serviços no slider para contextualizar o usuário em seu seguimento. Com uma estrutura de rápida leitura e entendimento pois foi possível se ter um ótimo resultado com UX , os campos seguem uma linha coerente de conteúdo, apresentando a empresa de acordo com a mudança de seções. Nosso objetivo com esse site foi que o usuário já chegasse ao final do site com a vontade de fazer uma parceria com a JC Nassur, e conseguimos esse nível de excelência.</p>
        <!-- <span>Kim</span> -->
      </div>
      <div class="col-xs-12 text-center">
        <a target="_blank" href="http://www.stressenglish.com.br/ingles-internet-skype/" class="href btn btn-custom1">DEMONSTRAÇÃO</a>
      </div>
    </article>
    <article role="tabpanel" class="tab-pane fade" id="tab-pane3">
      <div class="col-xs-12 col-sm-12 col-md-6 tab-content-wrapper tab-content-1">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/cnfactoring.gif" alt="DR MAURICIO KURC">
        <h1>CN FACTORING</h1>
        <p>A concepção desse site foi bem interessante, fizemos esse site pensando em toda sofisticação que o consultório médico do Dr Mauricio Kurk possui. Conseguimos traduzir o refinamento empregado em seu consultório através do site e o resultado foi muito satisfatório.</p>
        <!-- <span>DR MAURICIO KURC</span> -->
      </div>
      <div class="col-xs-12 text-center">
        <a target="_blank" href="http://cnfactoring.com.br/" class="href btn btn-custom1">DEMONSTRAÇÃO</a>
      </div>
    </article>
    <article role="tabpanel" class="tab-pane fade" id="tab-pane4">
      <div class="col-xs-12 col-sm-12 col-md-6 tab-content-wrapper tab-content-1">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/Pandoras.gif" alt="PANDORAS BOX">
        <h1>PANDORAS BOX</h1>
        <p>O site da Pandoras Box foi bem bacana de fazer, o importante era ter imagens que exemplificasse bem o Core Business do cliente. Como tudo na Pandoras Box é muito visual trouxemos um layout com bastante sliders, deixando os conteúdos leves e bem ilustrados, seguindo o conceito do “menos é mais”.</p>
        <!-- <span>Kim</span> -->
      </div>
      <div class="col-xs-12 text-center">
        <a target="_blank" href="http://pandorasbox.com.br/" class="href btn btn-custom1">VER SITE  </a>
      </div>
    </article>
    <article role="tabpanel" class="tab-pane fade" id="tab-pane5">
      <div class="col-xs-12 col-sm-12 col-md-6 tab-content-wrapper tab-content-1">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/bigcase.gif" alt="BIG CASE">
        <h1>BIG CASE</h1>
        <p>Este site foi desenvolvido e pensado para um público jovem, universitários. Então usamos cores que trazem em seu tom uma certa jovialidade, e para complementar essa ideia, foram empregados ícones nesse mesmo contexto, deixando o site bem moderno e atual. Tivemos bastante êxito pois as expectativas do cliente foram excedidas principalmente quanto a layout e também quanto a funcionalidades.</p>
        <!-- <span>Kim</span> -->
      </div>
      <div class="col-xs-12 text-center">
        <a target="_blank" href="http://bigcase.com.br/" class="href btn btn-custom1">VER SITE  </a>
      </div>
    </article>
    <article role="tabpanel" class="tab-pane fade" id="tab-pane6">
      <div class="col-xs-12 col-sm-12 col-md-6 tab-content-wrapper tab-content-1">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/cases/sequenza.gif" alt="SEQUENZA">
        <h1>SEQUENZA</h1>
        <p>Este projeto foi muito interessante de se fazer, pois foi o primeiro job que fizemos. O site é multipage mas também é onepage, apresentando assim páginas longas que descrevem o que a empresa faz de maneira fácil e intuitiva, na home a história da empresa é apresentada ao visitante da página. O UX também foi bem empregado neste projeto, pensamos na concepção do mesmo, desde o nascimento com o Wireframe até o desenvolvimento do responsivo. E o resultado final foi um site bem visual, com efeitos bacanas e muita modernidade impressa. Temos um projeto bem diferente dos projetos de empresas de TI que geralmente seguem um mesmo padrão mais conservador.</p>
        <!-- <span>Kim</span> -->
      </div>
      <div class="col-xs-12 text-center">
        <a target="_blank" href="http://www.sequenza.com.br/" class="href btn btn-custom1">VER SITE  </a>
      </div>
    </article>
  </div><!-- /.tab-content -->
</div> <!-- /.row -->
</div><!-- container -->
</section>
<!-- Section-n3 Cases -->

<!-- Section-n4 Cases -->
<section id="products" class="section-n4">
  <div class="container">
    <div class="row">
      <header class="page-header">
        <h1>Porque criar uma Landing Page</h1>
        <h2>Motivos para fazer uma Landing Page com a Intrust Web</h2>
      </header>
    </div><!-- row -->
  </div><!-- container -->
</section><!-- section-n4 -->
<!-- Section-n4-content Cases -->
<section class="section-n4-content">
  <div class="container">
    <div class="row">
      <article class="col-xs-12 col-sm-4">
        <div class="wrapper-icons"><span class="icons icon-time1"></span></div><br>
        <strong>PRAZO</strong><br>
        <p>Criamos sua landing page em ate 5 dias úteis após o envio do conteúdo.</p>
      </article>
      <article class="col-xs-12 col-sm-4">
        <div class="wrapper-icons"><span class="icons icon-mobile3"></span></div><br>
        <strong>RESPONSIVO</strong><br>
        <p>Landing page responsiva para mobile, garantindo a visibilidade para todos os usuários e os resultados da buscas através de dispositivos mobile.</p>
      </article>
      <article class="col-xs-12 col-sm-4">
        <div class="wrapper-icons"><span class="icons icon-site-gerenciavel"></span></div><br>
        <strong>CUSTO BENEFÍCIO</strong><br>
        <p>Melhor custo x benefício de acordo com pesquisas do mercado</p>
      </article>
    </div><!-- row -->
    <div class="row">
      <article class="col-xs-12 col-sm-4">
        <div class="wrapper-icons"><span class="icons icon-search1"></span></div><br>
        <strong>SEO</strong><br>
        <p>Landing Page com tecnologia que permite otimização para SEO. Garanta o melhor posicionamento nos mecanismos de busca do Google.</p>
      </article>
      <article class="col-xs-12 col-sm-4">
        <div class="wrapper-icons"><span class="icons icon-alvo1"></span></div><br>
        <strong>CONVERSÃO</strong><br>
        <p>Layout desenvolvido pensado na experiência do usuário (UX) visando melhor o desempenho de conversão para leads.</p>
      </article>
      <article class="col-xs-12 col-sm-4">
        <div class="wrapper-icons"><span class="icons icon-design1"></span></div><br>
        <strong>DESIGN</strong><br>
        <p>Criatividade e garantia de design moderno, flat e minimalista. De acordo com as tendências do mercado.</p>
      </article>
    </div><!-- row -->
  </div><!-- container -->
</section><!-- section-n4 -->

<!-- Section-n5 Prices -->
<section id="price" class="section-n5">
  <div class="container">
    <div class="row">
      <header class="page-header">
        <h1>Quanto custa</h1>
        <h2>Contrate agora sua Landing Page com a Intrust Web e desfrute dos benefícios que preparamos para você:</h2>
      </header>
      <!-- <img class="img-divisor" src="<?php echo get_template_directory_uri() ?>/dist/assets/img/quanto-custa.png" alt="MOV INVESTIMENTOS"> -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- section-n5 -->
<!-- Section-n5-content Cases -->
<section class="section-n5-content">
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-sm-8 col-md-7 pull-right orcamento">
        <div class="col-xs-12 col-sm-5 no-gutter">
          <h1>Compre sua Landing Page agora a partir de:</h1>
        </div>
        <div class="col-xs-12 col-sm-6 no-gutter">
          <em class="price">R$ </em><em class="big"><span>399,00</span></em>
        </div>
        <div class="col-xs-12 col-sm-9 no-gutter">
          <p>A nossa estratégia é encontrar o melhor custo para o seu projeto, sem perder qualidade, com projetos a partir de R$399,00. Conte o que você precisa e encontraremos juntos uma solução para o investimento que você tiver disponível.</p>
        </div>
        <div class="col-xs-12 no-gutter">
          <a href="#" class="btn btn-custom1 modalContact__click"><em>Quero um orçamento</em></a>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="mod-contTo-1">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-3">
        <span class="iconsCount icon-mobile3"></span><br>
        <strong class="count">+</strong><strong class="count timer" data-from="0" data-to="50">0</strong><br>
        <strong class="textCount">Landing pages<br>Entregues</strong>
      </div>
      <div class="col-xs-12 col-sm-3">
        <span class="iconsCount icon-pessoa"></span><br>
        <strong class="count">+</strong><strong class="count timer" data-from="0" data-to="100">0</strong><br>
        <strong class="textCount">Clientes<br>Satisfeitos</strong>
      </div>
      <div class="col-xs-12 col-sm-3">
        <span class="iconsCount icon-baloes1"></span><br>
        <strong class="count timer" data-from="0" data-to="53">0</strong><br>
        <strong class="textCount">Indicações<br>recebidas</strong>
      </div>
      <div class="col-xs-12 col-sm-3">
        <span class="iconsCount icon-beleza"></span><br>
        <strong class="count timer" data-from="0" data-to="100">0</strong><strong class="count">%</strong><br>
        <strong class="textCount">Feedback<br>positivo</strong>
      </div>
    </div>
  </div>
</section>

<!-- <section class="section-n5-content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-3 sale sale1">
        <strong>COMPRA</strong>
        <div class="wrapper-sale">
          <span class="sale-desc">a partir de:</span>
          <span class="sale-price"><span class="price-r">R$</span>599,00 <span class="price-d">Á VISTA</span></span>
        </div>
      </div>
      <div class="col-xs-12 col-md-1 sale-or">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/ou.png" alt="Ou">
      </div>
      <div class="col-xs-12 col-md-8 sale sale2">
        <strong>CONTRATAÇÃO</strong>
        <div class="wrapper-sale">
          <span class="sale-desc"><span class="col-xs-12 col-md-4 col-md-offset-1 setup">Setup</span> <span class="sale-big col-xs-12 col-md-2">+</span> <span class="col-xs-12 col-md-4 mensal">Mensalidade a partir de:</span></span>
          <div class="wrapper-price">
            <span class="sale-price sale-price--left"><span class="price-r">R$</span>250,00 <br class="quebra"><span class="price-d">Á VISTA</span></span>
            <span class="sale-price sale-price--middle">+</span>
            <span class="sale-price sale-price--right"><span class="price-r">R$</span><b>19,00</b> <br class="quebra"><span class="price-d">MENSAIS</span></span>
          </div>
        </div>
      </div>
      <div class="col-xs-12 sale-lid">
        <a href="#" class="btn btn-custom1 btn-block modalContact__click">Quero Agora!</a>
      </div>
    </div><!-- row -->
  </div><!-- container -->
</section><!-- section-n5 -->

<!-- Section-n6 Contact -->
<section id="contact" class="section-n6">
  <div class="container no-gutter">
    <div class="row">
      <header class="page-header">
        <h1>FALE CONOSCO</h1>
        <h2>Não perca mais tempo e dinheiro em outras tentativas, faça a sua Landing Page com a Intrust Web agora!</h2>
      </header>
    </div><!-- row -->
    <div class="row section-n6__form no-gutter">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4 no-gutter text-center aniview fast" av-animation="fadeInUp">
          <form action="https://formspree.io/ricardo.rocha@madgo.com.br" method="POST">
            <input type="hidden" name="Lugar" value="Intrust WEB" />
            <input type="hidden" name="_next" value="<?php echo get_template_directory_uri() ?>/obrigado.html" />
            <input type="hidden" name="_subject" value="Contato Lead - Intrust WEB - Landing-page" />
            <div class="col-xs-12">
              <div class="input-group--default">
                <input placeholder="Nome completo" required name="Nome" type="text" >
              </div>
              <div class="input-group--default">
                <input required placeholder="Telefone" name="Telefone" type="tel" >
              </div>
              <div class="input-group--default">
                <input required placeholder="E-mail" name="E-mail" type="email" >
              </div>
              <div class="input-group--default">
                <input placeholder="Assunto" name="Assunto" type="text" >
              </div>
              <div class="input-group--default">
                <textarea placeholder="Mensagem" required name="Mensagem"></textarea>
              </div>
              <button type="submit" class="btn btn-custom1">ENVIAR</button>
            </div>
          </form>
      </div>
    </div><!-- row -->
  </div><!-- container -->
</section><!-- section-n6 -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>