<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>HHSoftware | Soluciones Tecnologicas y Educativas </title>
    <meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="www.softwarehh.com">

    @include('theme.head.style')

</head>

<body class="no-trans">
<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

<!-- header start -->
<!-- ================ -->
<header class="header fixed clearfix navbar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <!-- header-left start -->
                <!-- ================ -->
                <div class="header-left clearfix">

                    <!-- logo
                    <div class="logo smooth-scroll">
                        <a href="#banner"><img id="logo" src="images/logo.png" alt="HHSoftware"></a>
                    </div>
                    -->

                    <!-- name-and-slogan -->
                    <div class="site-name-and-slogan smooth-scroll">
                        <div class="site-name"><a href="#banner">HHSoftware</a></div>
                        <div class="site-slogan">Soluciones <a target="_blank" href="www.softwarehh.com">Tecnólogicas</a> y <a target="_blank" href="www.softwarehh.com">Educativas</a> </div>
                    </div>

                </div>
                <!-- header-left end -->

            </div>
            <div class="col-md-8">

                <!-- header-right start -->
                <!-- ================ -->
                <div class="header-right clearfix">

                    <!-- main-navigation start -->
                    <!-- ================ -->
                    <div class="main-navigation animated">

                        <!-- navbar start -->
                        <!-- ================ -->
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">

                                <!-- Toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="#banner">Inicio</a></li>
                                        <li><a href="#about">Nosotros</a></li>
                                        <li><a href="#services">Servicios</a></li>
                                        <li><a href="#portfolio">Portfolio</a></li>
                                        <li><a href="#clients">Clientes</a></li>
                                        <li><a href="#contact">Contactanos</a></li>
                                    </ul>
                                </div>

                            </div>
                        </nav>
                        <!-- navbar end -->

                    </div>
                    <!-- main-navigation end -->

                </div>
                <!-- header-right end -->

            </div>
        </div>
    </div>
</header>
<!-- header end -->

<!-- banner start -->
<!-- ================ -->
<div id="banner" class="banner">
    <div class="banner-image"></div>
    <div class="banner-caption">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
                    <h1 class="text-center">En <span>HHSoftware</span></h1>
                    <p class="lead text-center">Contamos con un equipo de profesionales certificados y con experiencia en cada una de las áreas de su especialidad, lo que garantiza los más altos estándares de calidad en nuestras soluciones tecnológicas y educativas.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- section start -->
<!-- ================ -->
<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 id="about" class="title text-center">Nosotros <span>HHSoftware</span></h1>
                <p class="lead text-center">Somos una organización innovadora en el campo del diseño e implementación de soluciones informáticas, capacitación en sistemas, Posicionamiento web e implementación de Herramientas tecnológicas.</p>
                <div class="space"></div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('theme/images/section-image-1.png') }}" alt="">
                        <div class="space"></div>
                    </div>
                    <div class="col-md-6">
                        <p>En HH Software sabemos lo importante que es para su empresa contar con un equipo de profesionales competentes dispuestos a responder productivamente ante los desafíos actuales. Esto nos impulsa a tener el compromiso de generar soluciones de tecnología informática, basados en un proceso de mejoramiento continuo para garantizar permanentemente la satisfacción de nuestros clientes a través del desarrollo de productos acorde a sus expectativas.</p>
                        <p>Junto con su equipo tendremos un recurso humano idóneo, generando relaciones de mutuo beneficio que desarrollen en su empresa un ambiente que fomente la mejora continua y adaptabilidad a las nuevas tendencias y mejores prácticas relacionadas con el área de la tecnología.</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-caret-right pr-10 text-colored"></i> Misión</li>
                            <p>Ofrecer a nuestros clientes soluciones integrales basadas en tecnologías de punta, a través de sistemas de información, para satisfacer las necesidades y cumplir sus objetivos, para buscar el crecimiento de  nuestros clientes, asociados y de nuestra empresa.</p>
                            <li><i class="fa fa-caret-right pr-10 text-colored"></i> Visión</li>
                            <p>Ser líderes en el mercado de soluciones tecnológicas y educativas brindando soluciones innovadoras alineadas con los objetivos del negocio de nuestros clientes.</p>
                        </ul>
                    </div>
                </div>
                <!--
                <div class="space"></div>
                <h2>Becessitatibus quae beatae possimus ullam</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum ipsam fuga error commodi architecto, laudantium culpa tenetur at id, beatae placeat deserunt iure quas voluptas fugit eveniet.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ducimus explicabo quibusdam temporibus deserunt doloremque pariatur ea, animi a. Delectus similique atque eligendi, enim vel reiciendis deleniti neque aliquid, sit?</p>
                        <p>Vitae dolores quam magnam accusantium nam, voluptatibus expedita delectus, dolorum odio magni ut nemo nihil ex earum pariatur molestias velit eveniet, facere autem saepe aut. Ut minima itaque porro facere. Cumque vitae autem, dignissimos molestiae necessitatibus culpa aliquam deleniti soluta sunt voluptatibus tenetur, unde dolorem eligendi doloribus quibusdam facere totam. Possimus atque deserunt numquam aliquam magnam, facilis officiis illo alias ipsa voluptas laborum, praesentium eveniet nobis velit voluptatem odio eligendi, corporis et iste distinctio! Repellendus, id, ad.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="section translucent-bg bg-image-1 black">
    <div class="container object-non-visible" data-animation-effect="fadeIn">
        <h1 id="services"  class="text-center title">HHSoftware Servicios</h1>
        <p class="lead text-center">En HH Software Contamos  con un equipo de profesionales certificados y con experiencia en cada una de las áreas de su especialidad, lo que garantiza los más altos estándares de calidad en nuestras soluciones tecnológicas y educativas.</p>
        <p class="lead text-center">La oferta de HH Software se estructura de manera flexible de acuerdo a las necesidades de cada cliente y cubre los servicios de capacitación, diseño, soporte técnico, operación, automatización y administración de plataformas tecnológicas.</p>
        <div class="space"></div>
        <div class="row">
            <div class="col-sm-6">
                <div class="media">
                    <div class="media-body text-right">
                        <h4 class="media-heading">Diseño Web</h4>
                        <p>Creamos páginas web fáciles de navegar, eficientes en la organización de los contenidos, y atractivas visualmente, todo  esto teniendo en cuenta la identidad de su empresa, sus necesidades y gustos.</p>
                    </div>
                    <div class="media-right">
                        <i class="fa fa-html5"></i>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body text-right">
                        <h4 class="media-heading">App Web de Consulta</h4>
                        <p>Llevamos a la Web todos los procesos de su empresa relacionados con Consulta de información, expedición de certificados, constancias, e información de interés, por medio de portales diseñados para hacer ingresos personalizados asegurando la privacidad y seguridad de la información de sus empleados o clientes, según sea la necesidad.</p>
                    </div>
                    <div class="media-right">
                        <i class="fa fa-plug"></i>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body text-right">
                        <h4 class="media-heading">Tickets LTE</h4>
                        <p>Sistema de asignación, gestión y administración de turnos que logra darle comodidad a su cliente y control del tiempo de los procesos desarrollados por sus empleados a usted, con su diseño de ingreso personalizado y por niveles permite un manejo fácil y una excelente administración.</p>
                    </div>
                    <div class="media-right">
                        <i class="fa fa-ticket"></i>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body text-right">
                        <h4 class="media-heading">Capacitación y Educación</h4>
                        <p>En el campo de desarrollo de competencias de formación ofrecemos a las distintas empresas e instituciones educativas cursos y talleres del área informática, orientados a optimizar la calidad de vida laboral y a mejorar la productividad de los trabajadores y futuros trabajadores.</p>
                    </div>
                    <div class="media-right">
                        <i class="fa fa-child"></i>
                    </div>
                </div>
            </div>
            <div class="space visible-xs"></div>
            <div class="col-sm-6">
                <div class="media">
                    <div class="media-left">
                        <i class="fa fa-black-tie"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">JusticiApp</h4>
                        <p>es una herramienta Web creada ante la necesidad de mantener una correcta organización del devenir procesal de los diferentes asuntos que se adelantan en los despachos judiciales, es sencilla de manejar, entendible incluso para aquellos que no manejan conceptos propios de la rama del derecho, además permite acceder a la información específica que el usuario requiera bien sea para realizar una revisión rutinaria de procesos o para realizar un informe sobre el estado general de los mismos, de manera fácil y eficiente, permitiendo de esta manera realizar una mejor labor de seguimiento y control de los mismos.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Mi Evaluación Web</h4>
                        <p>Portal Web diseñado para simplificar los procesos realizados por las instituciones educativas logrando un ahorro en los recursos de la misma.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <i class="fa fa-area-chart"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Sistematización</h4>
                        <p>Brindamos completa asesoría a aquellos que buscan pasar su negocio a la nueva era de la tecnología de la información, asesorándolo en la adquisición de nuevas herramientas para la optimización de su empresa o negocio, teniendo en cuenta sus necesidades y presupuesto.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <i class="fa fa-facebook-square"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Social Media</h4>
                        <p>En HH Software contamos con profesionales encargados de dotar a los medios sociales de un enfoque empresarial y estratégico, siguiendo las últimas tendencias y usando las principales herramientas de monitorización y sus actualizaciones.<br> Nuestra metodología parte de tomar aquellos que nuestros clientes quieren comunicar y plasmarlo de manera que a los usuarios accedan a esa información de manera fácil y sea llamativo para ellos, formando una estrategia clara para que su compañía saque el mayor provecho de las redes sociales.</>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="default-bg space black">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="text-center">¡Vamos a Trabajar Juntos!</h1>
            </div>
        </div>
    </div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="section">
    <div class="container">
        <h1 class="text-center title" id="portfolio">Portafolio</h1>
        <div class="separator"></div>
        <p class="lead text-center">A continuación nuestro Portafolio:</p>
        <br>
        <div class="row object-non-visible" data-animation-effect="fadeIn">
            <div class="col-md-12">

                <!-- isotope filters start -->
                <div class="filters text-center">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#" data-filter="*">Todo</a></li>
                        <li><a href="#" data-filter=".app-web">App Web</a></li>
                        <li><a href="#" data-filter=".web-development">Desarrollo Web</a></li>
                        <li><a href="#" data-filter=".services">Servicios</a></li>
                    </ul>
                </div>
                <!-- isotope filters end -->

                <!-- portfolio items start -->
                <div class="isotope-container row grid-space-20">
                    <div class="col-sm-6 col-md-3 isotope-item web-development">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="{{ asset('theme/images/portfolio-1.jpg') }}" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-1">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Web Design</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Diseño Web</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="project-1-label">Diseño Web</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Descripción del Proyecto</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Creamos páginas web fáciles de navegar, eficientes en la organización de los contenidos, y atractivas visualmente, todo  esto teniendo en cuenta la identidad de su empresa, sus necesidades y gustos.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('theme/images/portfolio-1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>



                    <div class="col-sm-6 col-md-3 isotope-item app-web">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="{{ asset('theme/images/portfolio-3.jpg') }}" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-3">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Web Design</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Tickets LTE</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="project-3-label">Tickets LTE</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Sistema de asignación, gestión y administración de turnos que logra darle comodidad a su cliente y control del tiempo de los procesos desarrollados por sus empleados a usted, con su diseño de ingreso personalizado y por niveles permite un manejo fácil y una excelente administración.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('theme/images/portfolio-3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item services">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="{{ asset('theme/images/portfolio-4.jpg') }}" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-4">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Site Building</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">Capacitación y Educación</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="project-4-label">Capacitación y Educación</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>En el campo de desarrollo de competencias de formación ofrecemos a las distintas empresas e instituciones educativas cursos y talleres del área informática, orientados a optimizar la calidad de vida laboral y a mejorar la productividad de los trabajadores y futuros trabajadores.</p>
                                                <p>Entre las soluciones que ofrecemos están:</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-caret-right pr-10 text-colored"></i> Cursos de ofimática.</li>
                                                    <li><i class="fa fa-caret-right pr-10 text-colored"></i> Curso de Desarrollo de Software (Básico, Medio y Avanzado).</li>
                                                    <li><i class="fa fa-caret-right pr-10 text-colored"></i> Curso de Mantenimiento de equipo de Cómputo.</li>
                                                    <li><i class="fa fa-caret-right pr-10 text-colored"></i> Curso de Auditoria Informática.</li>
                                                </ul>
                                                <p>Todos Nuestros cursos Pueden Dictarse en la modalidad Presencia o a distancia mediante el uso de aulas virtuales.</p>
                                                <p> <strong>A todas las instituciones o Empresas interesadas en nuestros servicios le ofrecemos un taller Gratis de 3-4 horas sobre Programación Básica, ASp.Net o Laravel.</strong> </p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('theme/images/portfolio-4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item app-web">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="{{ asset('theme/images/portfolio-5.jpg') }}" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-5">
                                    <i class="fa fa-search-plus"></i>
                                    <span>JusticiApp</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">JusticiApp</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="project-5-label">JusticiApp</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Descripción del Proyecto</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>es una herramienta Web creada ante la necesidad de mantener una correcta organización del devenir procesal de los diferentes asuntos que se adelantan en los despachos judiciales, es sencilla de manejar, entendible incluso para aquellos que no manejan conceptos propios de la rama del derecho, además permite acceder a la información específica que el usuario requiera bien sea para realizar una revisión rutinaria de procesos o para realizar un informe sobre el estado general de los mismos, de manera fácil y eficiente, permitiendo de esta manera realizar una mejor labor de seguimiento y control de los mismos.</p>
                                                <a href="http://app.softwarehh.com/login" class="btn btn-info">Ir A la Pagina</a>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('theme/images/portfolio-5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item services">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="{{ asset('theme/images/portfolio-6.jpg') }}" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-6">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Web Design</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-6">Sistematización</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="project-6-label">Sistematización</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Brindamos completa asesoría a aquellos que buscan pasar su negocio a la nueva era de la tecnología de la información, asesorándolo en la adquisición de nuevas herramientas para la optimización de su empresa o negocio, teniendo en cuenta sus necesidades y presupuesto.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('theme/images/portfolio-6.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item web-development">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="{{ asset('theme/images/portfolio-11.jpg') }}" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-11">
                                    <i class="fa fa-search-plus"></i>
                                    <span>App Development</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-11">App Web de Consulta</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-11" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="project-2-label">App Web de Consulta</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Project Description</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Llevamos a la Web todos los procesos de su empresa relacionados con Consulta de información, expedición de certificados, constancias, e información de interés, por medio de portales diseñados para hacer ingresos personalizados asegurando la privacidad y seguridad de la información de sus empleados o clientes, según sea la necesidad.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('theme/images/portfolio-11.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                    <div class="col-sm-6 col-md-3 isotope-item app-web">
                        <div class="image-box">
                            <div class="overlay-container">
                                <img src="{{ asset('theme/images/portfolio-12.jpg') }}" alt="">
                                <a class="overlay" data-toggle="modal" data-target="#project-12">
                                    <i class="fa fa-search-plus"></i>
                                    <span>Mi Evaluación Web</span>
                                </a>
                            </div>
                            <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-12">Mi Evaluación Web</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="project-12" tabindex="-1" role="dialog" aria-labelledby="project-12-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="project-12-label">Mi Evaluación Web</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Descripción del Proyecto</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Portal Web diseñado para simplificar los procesos realizados por las instituciones educativas logrando un ahorro en los recursos de la misma.</p>
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-caret-right pr-10 text-colored"></i> Cada docente dispone de su usuario y contraseña donde solo puede trabajar con su asignación académica.</li>
                                                    <li><i class="fa fa-caret-right pr-10 text-colored"></i> Digitación de notas en Planillas digitales.</li>
                                                    <li><i class="fa fa-caret-right pr-10 text-colored"></i> Apertura y cierre de periodo controlado por el administrador.</li>
                                                    <li><i class="fa fa-caret-right pr-10 text-colored"></i> Todos los procesos se realizan en línea ahorrando tiempo y minimizando las inconsistencias, debido a que los cambios los realizan los mismos usuarios.</li>
                                                    <li><i class="fa fa-caret-right pr-10 text-colored"></i> Reportes académicos en línea actualizados con la información ingresada por los usuarios.</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{ asset('theme/images/portfolio-12.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>

                </div>
                <!-- portfolio items end -->

            </div>
        </div>
    </div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="section translucent-bg bg-image-2 pb-clear">
    <div class="container object-non-visible" data-animation-effect="fadeIn">
        <h1 id="clients" class="title text-center">Clientes</h1>
        <div class="space"></div>
        <div class="row">

            <div class="col-md-4">
                <div class="media testimonial">
                    <div class="media-left">
                        <img src="{{ asset('theme/images/sofi.png') }}" width="300" height="150" alt="">
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="media testimonial">
                    <div class="media-left">
                        <img src="{{ asset('theme/images/R&A.JPG') }}"  width="300" height="150" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media testimonial">
                    <div class="media-left">
                        <img src="{{ asset('theme/images/Contraconjur.png') }}"  width="300" height="150" alt="">
                    </div>
                </div>
            </div>
        </div>
    <!--
        <div class="row">
            <div class="col-md-4">
                <div class="media testimonial">
                    <div class="media-left">
                        <img src="{{ asset('theme/images/testimonial-2.png') }}" alt="">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Solfinanzas</h3>
                       <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media testimonial">
                    <div class="media-left">
                        <img src="{{ asset('theme/images/testimonial-3.png') }}" alt="">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Amazing!</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media testimonial">
                    <div class="media-left">
                        <img src="{{ asset('theme/images/testimonial-1.png') }}" alt="">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Best!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- section start -->
    <!-- ================ -->
    <div class="translucent-bg blue">
        <div class="container">
            <div class="list-horizontal">
                <div class="row">
                    <div class="col-xs-2">
                        <div class="list-horizontal-item">
                            <img src="{{ asset('theme/images/client-1.png') }}" alt="client">
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="list-horizontal-item">
                            <img src="{{ asset('theme/images/client-2.png') }}" alt="client">
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="list-horizontal-item">
                            <img src="{{ asset('theme/images/client-3.png') }}" alt="client">
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="list-horizontal-item">
                            <img src="{{ asset('theme/images/client-4.png') }}" alt="client">
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="list-horizontal-item">
                            <img src="{{ asset('theme/images/client-5.png') }}" alt="client">
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="list-horizontal-item">
                            <img src="{{ asset('theme/images/client-6.png') }}" alt="client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="default-bg space">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="text-center">¡Se Parte de Nuestros Clientes!</h1>
            </div>
        </div>
    </div>
</div>
<!-- section end -->

<!-- footer start -->
<!-- ================ -->
<footer id="footer">

    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer section">
        <div class="container">
            <h1 class="title text-center" id="contact">Contactanos</h1>
            <div class="space"></div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="footer-content">
                        <p class="large">Por último, reiteramos nuestra intención de servir siempre a nuestros usuarios. Permítanos conocer sus inquietudes, opiniones y sugerencias sobre nuestros diferentes productos y servicios.</p>
                        <ul class="list-icons">
                            <!-- <li><i class="fa fa-map-marker pr-10"></i> One infinity loop, 54100</li> -->
                            <li><i class="fa fa-phone pr-10"></i> +57 301 7296715</li>
                            <li><i class="fa fa-whatsapp pr-10"></i> +57 320 7314287</li>
                            <!-- <li><i class="fa fa-fax pr-10"></i> +00 1234567891 </li> -->
                            <li><i class="fa fa-envelope-o pr-10"></i> hhsoftware2016@gmail.com </li>
                        </ul>
                        <!--
                        <ul class="social-links">
                            <li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                            <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                            <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                            <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
                            <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                            <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                        -->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="footer-content">
                        {!! Form::open(['route' => 'contact.message.index', 'method' => 'GET']) !!}
                            <div class="form-group has-feedback">
                                {!! Form::label('full_name', 'Nombres', ['class' => 'sr-only']) !!}
                                {!! Form::text('full_name', null,['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) !!}
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                {!! Form::label('email', 'Correo', ['class' => 'sr-only']) !!}
                                {!! Form::email('email', null,['class' => 'form-control', 'placeholder' => 'Correo', 'required']) !!}
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback">
                                {!! Form::label('message', 'Mensaje', ['class' => 'sr-only']) !!}
                                {!! Form::textarea('message', null,['class' => 'form-control', 'placeholder' => 'Mensaje', 'required']) !!}
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                            {!! Form::submit('Enviar', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer end -->

    <!-- .subfooter start -->
    <!-- ================ -->
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Copyright © 2016 <a target="_blank" href="http://hhsoftware.app/e">HHSoftware</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- .subfooter end -->

</footer>

    @include('theme.footer.script')
    @yield('script')

</body>
</html>
