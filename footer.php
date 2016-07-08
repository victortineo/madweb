<!-- Modal Contact -->
<section class="modalContact">
  <div class="modalContact__wrapper">
    <span class="modalContact__toggle glyphicon glyphicon-remove modalContact__click"></span>
    <header class="page-header">
      <h1>Peça um orçamento agora!<br><small>Nossa equipe está aguardando as suas informações para lhe enviar um orçamento em menos de 24 horas</small></h1>
    </header>
    <div class="content">
      <form action="https://formspree.io/ricardo.rocha@madgo.com.br" method="POST">
      <input type="hidden" name="Lugar" value="Intrust WEB" />
      <input type="hidden" name="_next" value="<?php echo get_template_directory_uri() ?>/obrigado2.html" />
      <input type="hidden" name="_subject" value="Contato Modal - Intrust WEB" />
        <div class="col-xs-12">
          <div class="input-group--default">
            <input required placeholder="NOME" name="Nome" type="text" >
          </div>
          <div class="input-group--default">
            <input required placeholder="E-MAIL" name="E-mail" type="email" >
          </div>
          <div class="input-group--default">
            <input required placeholder="TELEFONE" name="Telefone" type="tel" >
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
  <figure class="postit postit-fixed1 visible-md visible-lg">
    <a href="#" class="modalContact__click" title="Faça um orçamento!">
      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/quero_orcamento.png" alt="Quero um Orçamento">
    </a>
  </figure>
  <figure class="postit postit-fixed2 visible-xs visible-sm">
    <a href="#" class="modalContact__click" title="Faça um orçamento!">
      <img src="<?php echo get_template_directory_uri() ?>/dist/assets/img/orcamento_mobile.png" alt="Quero um Orçamento">
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
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text'; /**
 * Translated default messages for the $ validation plugin.
 * Locale: PT_PT
 */
$.extend($.validator.messages, {
  required: "Campo de preenchimento obrigat&oacute;rio.",
  remote: "Por favor, corrija este campo.",
  email: "Por favor, introduza um endere&ccedil;o eletr&oacute;nico v&aacute;lido.",
  url: "Por favor, introduza um URL v&aacute;lido.",
  date: "Por favor, introduza uma data v&aacute;lida.",
  dateISO: "Por favor, introduza uma data v&aacute;lida (ISO).",
  number: "Por favor, introduza um n&uacute;mero v&aacute;lido.",
  digits: "Por favor, introduza apenas d&iacute;gitos.",
  creditcard: "Por favor, introduza um n&uacute;mero de cart&atilde;o de cr&eacute;dito v&aacute;lido.",
  equalTo: "Por favor, introduza de novo o mesmo valor.",
  accept: "Por favor, introduza um ficheiro com uma extens&atilde;o v&aacute;lida.",
  maxlength: $.validator.format("Por favor, n&atilde;o introduza mais do que {0} caracteres."),
  minlength: $.validator.format("Por favor, introduza pelo menos {0} caracteres."),
  rangelength: $.validator.format("Por favor, introduza entre {0} e {1} caracteres."),
  range: $.validator.format("Por favor, introduza um valor entre {0} e {1}."),
  max: $.validator.format("Por favor, introduza um valor menor ou igual a {0}."),
  min: $.validator.format("Por favor, introduza um valor maior ou igual a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!-- <script type='text/javascript' src='http://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script> -->
  <?php wp_footer(); ?>
</body>
</html>