<!DOCTYPE html>
<html lang="en">

<?php include "incs/header.php"; ?>


<?php include "incs/menu.php"; ?>


<header class="main-header">
    <div class="container">
        <h1 class="page-title">Contato</h1>

<!--         <ol class="breadcrumb pull-right">
            <li><a href="#">Pages</a></li>
            <li><a href="#">Form</a></li>
            <li class="active">Contact Option 1</li>
        </ol> -->
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="section-title no-margin-top">Envie sua mensagem para nós</h2>
        </div>
        <div class="col-md-8">
            <section>
                <p>Entre em contato ou peça um orçamento.</p>
            <?php
            // check for a successful form post  
            if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
      
            // check for a form error  
            elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
            ?>

                <form role="form" method="post" action="contact-form-submission.php">
                    <div class="form-group">
                        <label for="InputName">Nome</label>
                        <input type="text" class="form-control" id="InputName" name="name">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail1">Email</label>
                        <input type="email" class="form-control" id="InputEmail1" name="mail">
                    </div>
                    <div class="form-group">
                        <label for="InputMessage">Mensagem</label>
                        <textarea class="form-control" id="InputMessage" rows="8" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-ar btn-primary">Envia!</button>
                    <div class="clearfix"></div>
                    <input type="hidden" name="save" value="contato">
                </form>
            </section>
        </div>

        <div class="col-md-4">
            <section>
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-envelope-o"></i> Informações adicionais </div>
                    <div class="panel-body">
                        <h4 class="section-title no-margin-top">Contatos</h4>
                        <address>
                            <strong>Help my Mac</strong><br>
                            Rua Ferreira de Araújo. 902 - Pinheiros<br>
                            <abbr title="Phone">Tel:</abbr> (11) 2244-8725 <br>
                            <abbr title="Phone">Cel:</abbr> (11) 96590-9689 <br>
                            Mail: <a href="#">support@openmid.com</a>
                        </address>

                        <!-- Business Hours -->
<!--                         <h4 class="section-title no-margin-top">Business Hours</h4>
                        <ul class="list-unstyled">
                            <li><strong>Monday-Friday:</strong> 9am to 7pm</li>
                            <li><strong>Saturday:</strong> 9am to 2pm</li>
                            <li><strong>Sunday:</strong> Closed</li>
                        </ul> -->
                    </div>
                </div>
            </section>
        </div>
    </div>

    <hr class="dotted">

    <section>
        <div class="well well-sm">
            <!-- <iframe width="100%" height="350" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=central%2Bpark&amp;ie=UTF8&amp;z=12&amp;t=m&amp;iwloc=near&amp;output=embed"></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0748773897208!2d-46.698253700000016!3d-23.565754099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57a674a3fa6d%3A0xc4ea27198f914bff!2sR.+Ferreira+de+Ara%C3%BAjo%2C+902+-+Pinheiros%2C+S%C3%A3o+Paulo+-+SP%2C+05428-002!5e0!3m2!1spt-BR!2sbr!4v1423255655033" width="100%" height="350" frameborder="0" style="border:0"></iframe>
        </div>
    </section>
</div> <!-- container -->


<?php include "incs/footer.php"; ?>

</div> <!-- boxed -->
</div> <!-- sb-site -->

<div class="sb-slidebar sb-right">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
        </span>
    </div><!-- /input-group -->
<!-- 
    <h2 class="slidebar-header no-margin-bottom">Navigation</h2>
    <ul class="slidebar-menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="portfolio_topbar.html">Portfolio</a></li>
        <li><a href="page_about3.html">About us</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="page_contact.html" class="active">Contact</a></li>
    </ul>

    <h2 class="slidebar-header">Social Media</h2>
    <div class="slidebar-social-icons">
        <a href="#" class="social-icon-ar rss"><i class="fa fa-rss"></i></a>
        <a href="#" class="social-icon-ar facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="social-icon-ar twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="social-icon-ar pinterest"><i class="fa fa-pinterest"></i></a>
        <a href="#" class="social-icon-ar instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="social-icon-ar wordpress"><i class="fa fa-wordpress"></i></a>
        <a href="#" class="social-icon-ar linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="social-icon-ar flickr"><i class="fa fa-flickr"></i></a>
        <a href="#" class="social-icon-ar vine"><i class="fa fa-vine"></i></a>
        <a href="#" class="social-icon-ar dribbble"><i class="fa fa-dribbble"></i></a>
    </div>
</div> --> <!-- sb-slidebar sb-right -->

<div id="back-top">
    <a href="#header"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/slidebars.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/holder.js"></script>
<script src="js/buttons.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/circles.min.js"></script>

<!-- Syntaxhighlighter -->
<script src="js/syntaxhighlighter/shCore.js"></script>
<script src="js/syntaxhighlighter/shBrushXml.js"></script>
<script src="js/syntaxhighlighter/shBrushJScript.js"></script>

<script src="js/app.js"></script>


</body>

</html>

