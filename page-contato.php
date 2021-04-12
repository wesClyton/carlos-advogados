<?php
    // Template Name: Contato

    add_action( 'phpmailer_init', 'send_smtp_email' );

    function send_smtp_email( $phpmailer ) {
        $phpmailer->isSMTP();
        $phpmailer->Host       = SMTP_HOST;
        $phpmailer->SMTPAuth   = SMTP_AUTH;
        $phpmailer->Port       = SMTP_PORT;
        $phpmailer->SMTPSecure = SMTP_SECURE;
        $phpmailer->Username   = SMTP_USERNAME;
        $phpmailer->Password   = SMTP_PASSWORD;
        $phpmailer->From       = SMTP_FROM;
        $phpmailer->FromName   = SMTP_FROMNAME;
    }

    if(isset($_POST['email'])){

        foreach(['nome'=>true, 'email'=>true,'telefone'=>true,'mensagem'=>true] as $key => $val){

            $f[$key] = strip_tags($_POST[$key]); //filter_input
            if(!$f[$key] && $val){
               exit('void');
            }
        }
        extract($f);

        $mensagem = '<html><body>
            <b>De:</b> '.$nome.' - '.$email.'<br>
            <b>Telefone:</b> '.$telefone.'<br><br>
            <b>Mensagem:</b><br>'.$mensagem.
        '</body></html>';

        $headers = [
            'Content-Type: text/html; charset=UTF-8',
            'From: '.$nome.' <'.$email.'>',
            // 'Reply-To' => $nome.' <'.$email.'>'
            // 'Reply-To: Person Name <person.name@example.com>',
        ];

        // $name = get_bloginfo('name');
        // $emailTo = get_bloginfo('admin_email');
        // $to = 'Contato - '.$name.' <'.$emailTo.'>';

        $send = wp_mail("contato@carlosalbertoadvogados.com.br", "Contato do Site", $mensagem, $headers); //, $headers

        // $send = wp_mail (" destinatário@example.com ", "Assunto", "Mensagem");

        if($send){
            exit(true);
        }

        exit('send');
    }

    get_header();
    if (have_posts()) : while (have_posts()) : the_post();

?>
<!-- content main -->
<div class="content_main" id="page-contato">

    <div class="banner">
        <div class="banner-item">
            <div class="text-banner">
                <h1 class="title">Contato</h1>
            </div>
            <!-- <img src="img/header-home.png" class="img-cover"> -->
        </div>
    </div>

    <div class="contato">
      <div class="container">
        <div class="row justify-content-center justify-content-md-between">
          <div class="col-12 text-center">
            <h4>Em que podemos ajudar?</h4>
          </div>
          <div class="col-12 col-sm-10 col-md-6 col-lg-6">
            <form id="form-contato">
              <div class="row">
                <div class="col-12">
                  <div class="content-error">    
                    <div id="alert">
                      <div class="error">Por favor, preencha todos os campos!</div>
                    </div>
                  </div>
                </div>
                <div class="col-12"><input type="text" name="" id="" placeholder="Nome"></div>
                <div class="col-12"><input type="text" name="" id="" placeholder="Telefone"></div>
                <div class="col-12"><input type="text" name="" id="" placeholder="Email"></div>
                <div class="col-12 col-sm-5"><input type="text" name="" id="" placeholder="Estado"></div>
                <div class="col-12 col-sm-7"><input type="text" name="" id="" placeholder="Cidade"></div>
                <div class="col-12"><textarea type="text" name="" id="" rows="5" placeholder="Mensagem"></textarea></div>
                <button class="btn-secondary-lg m-auto">enviar</button>
              </div>
            </form>
          </div>
          <div class="col-12 col-sm-10 col-md-6 col-lg-6 align-self-center">
            <div class="text-contato text-center">
              <h4>Entre em contato através <br class="d-none d-sm-block"> dos nossos canais:</h4>
              <a target="_blank" href="tel:+55444430286588">(44) 3028-6588</a>
              <a target="_blank" href="mailto:contato@carlosalbertoadvogados.com.br">contato@carlosalbertoadvogados.com.br</a>
              <div class="sociais">
                <a target="_blank" href="https://www.facebook.com/CarlosAlbertodosSantoseAdvogadosAssociados/"><i class="icon-facebook"></i></a>
                <a target="_blank" href="#"><i class="icon-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="localizacao">
        <div class="map-responsive">
        <div class="embed-responsive embed-responsive-100x400px">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7322.095788063683!2d-51.931172!3d-23.422637!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecd0d18f4c6e79%3A0x3089b8922f6c30fb!2sR.%20N%C3%A9o%20Alves%20Martins%2C%201796%20-%20Zona%2001%2C%20Maring%C3%A1%20-%20PR%2C%2087013-060!5e0!3m2!1spt-BR!2sbr!4v1615583947142!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>          
        </div>
      </div>
    </div>

</div>
<!-- /content main -->

<?php
    endwhile; else : endif;
    get_footer();
?>