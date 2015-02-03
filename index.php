<!DOCTYPE html>
<html lang="en">

<?php include "incs/header.php" ?>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<body>


<!-- <div id="theme-options" class="hidden-xs">
    <div id="body-options">
        <div id="color-options">
            <h2 class="no-margin-top">Color Selector</h2>
            <a href="javascript:void(0);" rel="style-blue.css" class="color-box color-blue">blue</a>
            <a href="javascript:void(0);" rel="style-blue2.css" class="color-box color-blue2">blue2</a>
            <a href="javascript:void(0);" rel="style-blue3.css" class="color-box color-blue3">blue3</a>
            <a href="javascript:void(0);" rel="style-blue4.css" class="color-box color-blue4">blue4</a>
            <a href="javascript:void(0);" rel="style-blue5.css" class="color-box color-blue5">blue5</a>
            <a href="javascript:void(0);" rel="style-green.css" class="color-box color-green">green</a>
            <a href="javascript:void(0);" rel="style-green2.css" class="color-box color-green2">green2</a>
            <a href="javascript:void(0);" rel="style-green3.css" class="color-box color-green3">green3</a>
            <a href="javascript:void(0);" rel="style-green4.css" class="color-box color-green4">green4</a>
            <a href="javascript:void(0);" rel="style-green5.css" class="color-box color-green5">green5</a>
            <a href="javascript:void(0);" rel="style-red.css" class="color-box color-red">red</a>
            <a href="javascript:void(0);" rel="style-red2.css" class="color-box color-red2">red2</a>
            <a href="javascript:void(0);" rel="style-red3.css" class="color-box color-red3">red3</a>
            <a href="javascript:void(0);" rel="style-fuchsia.css" class="color-box color-fuchsia">fuchsia</a>
            <a href="javascript:void(0);" rel="style-pink.css" class="color-box color-pink">pink</a>
            <a href="javascript:void(0);" rel="style-yellow.css" class="color-box color-yellow">yellow</a>
            <a href="javascript:void(0);" rel="style-yellow2.css" class="color-box color-yellow2">yellow2</a>
            <a href="javascript:void(0);" rel="style-orange.css" class="color-box color-orange">orange</a>
            <a href="javascript:void(0);" rel="style-orange2.css" class="color-box color-orange2">orange2</a>
            <a href="javascript:void(0);" rel="style-orange3.css" class="color-box color-orange3">orange3</a>
            <a href="javascript:void(0);" rel="style-violet.css" class="color-box color-violet">violet</a>
            <a href="javascript:void(0);" rel="style-violet2.css" class="color-box color-violet2">violet2</a>
            <a href="javascript:void(0);" rel="style-violet3.css" class="color-box color-violet3">violet3</a>
            <a href="javascript:void(0);" rel="style-gray.css" class="color-box color-gray">gray</a>
            <a href="javascript:void(0);" rel="style-aqua.css" class="color-box color-aqua">aqua</a>
        </div>
        <div id="header-options">
            <h2>Header Style</h2>
            <div class="btn-group">
                <a href="configurator.html" class="btn btn-block btn-primary btn-ar">Go to the headers selector</a>
            </div>
        </div>
        <div id="width-options">
            <h2>Container Selector</h2>
            <div class="btn-group">
                <form>
                    <input type="checkbox" name="full-width-checkbox" data-label-width="80" data-label-text="Full Width" checked> 
                </form>
            </div>
        </div>
    </div>
    <div id="icon-options">
        <i class="fa fa-gears fa-2x fa-flip-horizontal"></i>
    </div>
</div> -->

<div id="sb-site">
<div class="boxed">

<header id="header-full-top" class="hidden-xs header-full">
    <div class="container">
        <div class="header-full-title">
            <h1 class="animated fadeInRight"><a href="index.html" class="active">artificial <span>reason</span></a></h1>
            <p class="animated fadeInRight">Clean and elegant theme</p>
        </div>
        <nav class="top-nav">
            <ul class="top-nav-social hidden-sm">
                <li><a href="#" class="animated fadeIn animation-delay-6 rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="#" class="animated fadeIn animation-delay-7 twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="animated fadeIn animation-delay-8 facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="animated fadeIn animation-delay-9 google-plus"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="animated fadeIn animation-delay-9 instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" class="animated fadeIn animation-delay-8 vine"><i class="fa fa-vine"></i></a></li>
                <li><a href="#" class="animated fadeIn animation-delay-7 linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="animated fadeIn animation-delay-6 flickr"><i class="fa fa-flickr"></i></a></li>
            </ul>

            <div class="dropdown animated fadeInDown animation-delay-11">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Login</a>
                <div class="dropdown-menu dropdown-menu-right dropdown-login-box animated fadeInUp">
                    <form role="form">
                        <h4>Login Form</h4>

                        <div class="form-group">
                            <div class="input-group login-input">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <br>
                            <div class="input-group login-input">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-ar btn-primary pull-right">Login</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- dropdown -->

            <div class="dropdown animated fadeInDown animation-delay-13">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-search-box animated fadeInUp">
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-ar btn-primary" type="button">Go!</button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
                </div>
            </div> <!-- dropdown -->
        </nav>
    </div> <!-- container -->
</header> <!-- header-full -->

<?php include "incs/menu.php"; ?>


<section class="carousel-section">
    <div id="carousel-example-generic" class="carousel carousel-razon slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-7">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                   <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Assistência técnica especializada</h1>
                                   <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Manutenção em toda linha de equipamentos Apple</h2>
                                   <ul class="list-unstyled carousel-list">
                                       <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Orçamento sem compromisso</li>
                                       <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Atendimento domiciliar / remoto</li>
                                       <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Técnicos com cursos especializados</li>
                                       
                                   </ul>
                                   <p class="animated fadeInUpBig animation-delay-17">Visando garantir tranquilidade no atendimento do cliente, seguimos os padrões de atendimento Apple em <span>Troubleshooting</span></p>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-5 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="img/demo/pre.png" class="img-responsive animated bounceInUp animation-delay-3" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                   <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Serviços especializados</h1>
                                   <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Técnicos atualizados no mercado</h2>
                                   <ul class="list-unstyled carousel-list">
                                       <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Análise e consultoria</li>
                                       <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Vendas de equipamentos Apple e periféricos</li>
                                       <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Configuração, manutenção, rede e serviços Apple</li>
                                       <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Manutenção de hardware e software</li>
                                   </ul>
                                   <p class="animated fadeInUpBig animation-delay-17">Suporte a aplicativos : Mail,Agenda,Boot camp, Time Machine e utilitários.</p>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="img/demo/pre2.png" class="img-responsive animated bounceInUp animation-delay-3" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-9">
                            <div class="carousel-caption">
                                <div class="carousel-text">
                                   <h1 class="animated fadeInDownBig animation-delay-7 carousel-title">Solicite orçamento sem compromisso</h1>
                                   <h2 class="animated fadeInDownBig animation-delay-5  crousel-subtitle">Não combramos a primeira visita</h2>
                                   <ul class="list-unstyled carousel-list">
                                       <li class="animated bounceInLeft animation-delay-11"><i class="fa fa-check"></i>Atendimento avulso</li>
                                       <li class="animated bounceInLeft animation-delay-13"><i class="fa fa-check"></i>Opção em contrato mensal</li>
                                       <li class="animated bounceInLeft animation-delay-15"><i class="fa fa-check"></i>Agilidade e excelência no atendimento</li>
                                   </ul>
                                   <p class="animated fadeInUpBig animation-delay-17">* Orçamento não será cobrado desde que o equipamento seja entregue em nosso laboratório</p>
                               </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-3 hidden-xs carousel-img-wrap">
                            <div class="carousel-img">
                                <img src="img/demo/pre3.png" class="img-responsive animated bounceInUp animation-delay-3" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section> <!-- carousel -->

<section class="margin-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-10">
                    <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-html5"></i></span>
                    <h4 class="content-box-title">Lorem ipsum dolor</h4>
                    <p>Consectetur adipisicing elit vritatis dolor rem officia molestiae atque eveniet inventore earum quas voluptates cumque</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-14">
                    <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-css3"></i></span>
                    <h4 class="content-box-title">Lorem ipsum dolor</h4>
                    <p>Consectetur adipisicing elit vritatis dolor rem officia molestiae atque eveniet inventore earum quas voluptates cumque</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-16">
                    <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-desktop"></i></span>
                    <h4 class="content-box-title">Lorem ipsum dolor</h4>
                    <p>Consectetur adipisicing elit vritatis dolor rem officia molestiae atque eveniet inventore earum quas voluptates cumque</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="content-box box-default animated fadeInUp animation-delay-12">
                    <span class="icon-ar icon-ar-lg icon-ar-round icon-ar-inverse"><i class="fa fa-flag"></i></span>
                    <h4 class="content-box-title">Lorem ipsum dolor</h4>
                    <p>Consectetur adipisicing elit vritatis dolor rem officia molestiae atque eveniet inventore earum quas voluptates cumque</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-lines">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="home-devices">
                    <h3>The template for all devices</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, sapiente, nam sunt rem beatae architecto cupiditate numquam consectetur dolorum aliquam suscipit adipisci expedita vel quaerat illum aperiam facere inventore officia.</p>
                    <p>Consequuntur sed ipsum eius minima eum velit soluta accusamus omnis maiores modi quae mollitia consectetur adipisci.</p>
                    <ul class="icon-devices">
                        <li class="active"><a href="#desktop" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
                        <li><a href="#laptop" data-toggle="tab"><i class="fa fa-laptop"></i></a></li>
                        <li><a href="#tablet" data-toggle="tab"><i class="fa fa-tablet"></i></a></li>
                        <li><a href="#mobile" data-toggle="tab"><i class="fa fa-mobile"></i></a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
                    <div class="tab-pane active" id="desktop">
                        <img src="img/demo/mac.png" alt="" class="img-responsive">
                    </div>
                    <div class="tab-pane" id="laptop">
                        <img src="img/demo/macpro.png" alt="" class="img-responsive">
                    </div>
                    <div class="tab-pane" id="tablet">
                        <img src="img/demo/ipad.png" alt="" class="img-responsive">
                    </div>
                    <div class="tab-pane" id="mobile">
                        <img src="img/demo/iphone.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <section class="margin-bottom">
        <p class="lead lead-lg text-center primary-color margin-bottom">Knows the <strong>Artificial Reason</strong> and surprise yourself</p>
       <div class="row">
            <div class="col-md-6">
                <h2 class="no-margin-top">About us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, alias, nihil molestias libero corporis perferendis a quasi at.</p>
                <p>Eos, illum, odit nulla provident sint atque quasi necessitatibus dolores voluptatibus perspiciatis aliquid tempora possimus laudantium. Blanditiis, deleniti!</p>
                <p>Saepe, laborum, eligendi vitae ad excepturi officiis vel omnis quidem et dolorum rem vero explicabo consequatur mollitia nihil!</p>
                <p>Fuga, omnis, quo, cumque, ipsa quasi facilis voluptatibus iure veniam nostrum voluptate accusantium dolore reprehenderit. Corrupti, mollitia, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit ducimus, pariatur ad ipsam et quod numquam eveniet magni aspernatur.</p>

            </div>
            <div class="col-md-6">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading panel-heading-link">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                          <i class="fa fa-lightbulb-o"></i> Talent and creativity
                        </a>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati molestiae id ipsum ipsa repudiandae. Voluptatum, molestias, quas magnam repellat quos facilis sequi. Ullam optio eius deleniti dolore quasi doloribus ipsam incidunt perferendis.</p>
                        <p>Dolores, corrupti, laborum, officia sit aliquam doloremque accusantium nemo sunt veniam est incidunt perferendis minima obcaecati ex aperiam voluptatibus blanditiis eum suscipit magnam dolorum in adipisci nihil ipsam perspiciatis molestiae!</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading panel-heading-link">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                          <i class="fa fa-desktop"></i> Design and code
                        </a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit dignissimos inventore cupiditate expedita saepe enim nobis nostrum? Laborum, laudantium, maiores, cupiditate, perspiciatis at ad accusamus corporis sed ipsam et velit!</p>
                        <p>Incidunt, harum itaque voluptatum asperiores recusandae explicabo maiores. Alias, quos, ex impedit at error id laborum fugit architecto qui beatae molestiae dolorum rem veritatis quia aliquam totam accusamus perferendis. Nulla!</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading panel-heading-link">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                          <i class="fa fa-user"></i> Quality and Support
                        </a>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, rerum unde doloribus accusamus pariatur non expedita quibusdam velit totam obcaecati. Consequatur, deserunt, asperiores quam nisi earum voluptates animi labore tempore!</p>
                        <p>Dolorum, aliquam, totam labore saepe error a eum culpa assumenda sint laudantium ipsa iure ullam et dicta nesciunt repellendus optio voluptatibus reprehenderit odit officia fugiat necessitatibus recusandae architecto ad neque?</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>


       </div>
   </section>

</div>


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

    <h2 class="slidebar-header no-margin-bottom">Navigation</h2>
    <ul class="slidebar-menu">
        <li><a href="index.html" class="active">Home</a></li>
        <li><a href="portfolio_topbar.html">Portfolio</a></li>
        <li><a href="page_about3.html">About us</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="page_contact.html">Contact</a></li>
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
</div> <!-- sb-slidebar sb-right -->

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

<script src="js/index.js"></script>

</body>

</html>
