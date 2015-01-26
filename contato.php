<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php include './estruturas/head.php'; ?>
        <title>Contato | FarmAlfenas Jr</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!--Header-->
        <?php include './estruturas/header.php'; ?>
        <!-- /header -->

        <section class="container">
            <iframe class="borda" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3714.205814750468!2d-45.94757579999995!3d-21.421153800000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b5f5ac8ec6fa25%3A0x70741c65e865be15!2sR.+Gabriel+Monteiro+da+Silva%2C+701+-+Parque+das+Na%C3%A7%C3%B5es%2C+Alfenas+-+MG%2C+37130-000%2C+Rep%C3%BAblica+Federativa+do+Brasil!5e0!3m2!1spt-BR!2s!4v1407303463681"></iframe>
        </section>

        <div class="container line"></div>

        <section id="contact-page" class="container">
            <div class="row-fluid">
                <div class="span9">
                    <h4>Contato</h4>
                    <div class="status alert alert-success" style="display: none"></div>

                    <form id="main-contact-form" class="contact-form" name="contact-form">
                        <div class="row-fluid">
                            <div class="row-fluid">
                                <div class="span4">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="input-block-level" required="required">

                                    <label>Email</label>
                                    <input type="text" name="email" class="input-block-level" required="required">

                                </div>
                                <div class="span8">
                                    <label>Mensagem</label>
                                    <textarea name="mensagem" name="mensagem" required="required" class="input-block-level" rows="8"></textarea>
                                </div>

                            </div>
                        </div>
                    </form>
                    <button id="submit" class="btn btn-primary btn-large pull-right">Enviar email</button>
                </div>

                <div class="span3">
                    <h4>Endereço</h4>
                    <p>
                        <i class="icon-map-marker pull-left"></i>Rua Gabriel Monteiro da Silva, 701<br>Prédio K, sala K 107 A<br>Centro - Alfenas - MG
                    </p>
                    <p>
                        <i class="icon-envelope"></i> &nbsp;farmalfenasjr@yahoo.com.br
                    </p>
                </div>
        </section>

        <!--Footer-->
        <?php include './estruturas/footer.php'; ?>
        <!--/Footer-->       

        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script> 

        <script>
            $(function() {
                //twitter bootstrap script
                $("button#submit").click(function() {
                    $.ajax({
                        type: "POST",
                        url: "sendemail.php",
                        data: $('form.contact-form').serialize(),
                        success: function(msg) {
                            alert("Mensagem Enviada");
                        },
                        error: function() {
                            alert("Erro! Sua mensagem não foi enviada!");
                        }
                    });
                });
            });
        </script>

    </body>
</html>
