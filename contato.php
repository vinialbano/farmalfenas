<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <?php include './estruturas/head.php';?>
    <title>Contato | FarmAlfenas Jr</title>
</head>

<body>

    <!--Header-->
    
	<?php include './estruturas/header.php';?>
    <!-- /header -->

    <section class="no-margin">
        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=dhaka+ban&amp;sll=40.714353,-74.005973&amp;sspn=0.836898,1.815491&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=24.542126,90.293884&amp;spn=0.124922,0.411301&amp;z=8&amp;output=embed"></iframe>
    </section>

    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>First Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your First Name">
                        <label>Last Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your Last Name">
                        <label>Email Address</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your email address">
                    </div>
                    <div class="span7">
                        <label>Message</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <p> </p>

            </form>
        </div>

        <div class="span3">
            <h4>Our Address</h4>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <p>
                <i class="icon-map-marker pull-left"></i> 1209 Willow Oaks Lane, New York<br>
                Lafayette, 1212,  United States
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;email@example.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+123 45 67 89
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.shapebootstrap.net
            </p>
        </div>

    </div>

</section>

<!--Bottom-->
<?php include './estruturas/bottom.php'; ?>
<!--/bottom-->

<!--Footer-->
<?php include './estruturas/footer.php'; ?>
<!--/Footer-->

<!--  Login form -->
     <?php include './estruturas/login.php'; ?>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>   

</body>
</html>
