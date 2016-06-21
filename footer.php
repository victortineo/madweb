<!-- Modal Contact -->
<section class="modalContact">
  <div class="modalContact__wrapper">
    <span class="modalContact__toggle glyphicon glyphicon-remove modalContact__click"></span>
    <header class="page-header">
      <h1>Peça um orçamento agora!<br><small>Nossa equipe está aguardando as suas informações para lhe enviar um orçamento em menos de 24 horas</small></h1>
    </header>
    <div class="content">
      <form action="https://formspree.io/contato@madgo.com.br" method="POST">
      <input type="hidden" name="Lugar" value="Intrust WEB" />
      <input type="hidden" name="_next" value="http://madknow.com.br/madweb/obrigado.html" />
      <input type="hidden" name="_subject" value="Contato - Intrust WEB" />
        <div class="col-xs-12">
          <div class="input-group--default">
            <input required placeholder="NOME" name="Nome" type="text" >
          </div>
          <div class="input-group--default">
            <input required placeholder="E-MAIL" name="E-mail" type="text" >
          </div>
          <div class="input-group--default">
            <input required placeholder="TELEFONE" name="Telefone" type="text" >
          </div>
          <div class="input-group--default">
            <textarea required placeholder="MENSAGEM" name="Mensagem"></textarea>
          </div>
          <input type="submit" class="btn btn-custom2 text-center" value="ENVIAR">
        </div>
      </form>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer__contact">
    <p>contato@intrustweb.com.br <span class="hidden-xs">|</span> Ou se preferir, ligue-nos: 11 3436.8132</p>
  </div>
  <div class="footer__credits">
    <span>UM PRODUTO <a href="http://madgo.com.br" target="_blank"><strong>MADGO</strong></a></span>
  </div>
  <figure class="postit-fixed1 link-animation visible-md visible-lg">
    <a href="#" class="modalContact__click" title="Faça um orçamento!">
      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/quero_orcamento.png" alt="Quero um Orçamento">
    </a>
  </figure>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- <script type="text/javascript" src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/dist/assets/js/classie.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/dist/assets/js/cbpAnimatedHeader.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/dist/assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/dist/assets/js/main.jquery.js"></script>
<script type='text/javascript' src='http://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <?php wp_footer(); ?>
</body>
</html>