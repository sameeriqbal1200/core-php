<html class="no-js" lang="en">
<?php
//database connection 
$database = mysqli_connect("localhost", "root", "", "core-php");

$result = mysqli_query($database, "SELECT * FROM client_words");
$result = mysqli_query($database ,"SELECT * FROM our_services");


$baseurl = "http://localhost/core-php/admin-panel";

?>      
<!-- Mirrored from www.themezaa.com/html/pofo/home-classic-corporate.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 May 2019 07:05:35 GMT -->

<head>
        <!-- title -->
        <title>POFO – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-top header-dark background-transparent white-link navbar-expand-lg">
                <div class="container nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto pl-lg-0">
                        <a href="index.html" title="Pofo" class="logo"><img src="images/logo.png" data-rjs="images/logo@2x.png" class="logo-dark" alt="Pofo"><img src="images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="Pofo" class="logo-light default"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col accordion-menu pr-0 pr-md-3">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal">
                                <!-- start menu item -->
                                <li class="dropdown megamenu-fw">
                                    <a href="#">Home</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full">
                                        <ul>
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Classic Homepages</li>
                                                    <li><a href="home-classic-corporate.html">Classic corporate</a></li>
                                                    <li><a href="home-classic-digital-agency.html">Classic digital agency</a></li>
                                                    <li><a href="home-classic-innovation-agency.html">Classic innovation agency</a></li>
                                                    <li><a href="home-classic-web-agency.html">Classic web agency</a></li>
                                                    <li><a href="home-classic-one-page.html">Classic one page</a></li>
                                                    <li><a href="home-classic-start-up.html">Classic start-up</a></li>
                                                    <li><a href="home-classic-interactive-agency.html">Classic interactive agency</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column -->
                                            <!-- start sub menu column -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Creative Homepages</li>
                                                    <li><a href="home-creative-studio.html">Creative studio</a></li>
                                                    <li><a href="home-creative-business.html">Creative business</a></li>
                                                    <li><a href="home-creative-simple-portfolio.html">Creative simple portfolio</a></li>
                                                    <li><a href="home-creative-branding-agency.html">Creative branding agency</a></li>
                                                    <li><a href="home-creative-small-business.html">Creative small business</a></li>
                                                    <li><a href="home-creative-designer.html">Creative designer</a></li>
                                                    <li><a href="home-creative-agency.html">Creative agency</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Portfolio Homepages</li>
                                                    <li><a href="home-portfolio-minimal.html">Portfolio minimal</a></li>
                                                    <li><a href="home-portfolio-multiple-carousel.html">Portfolio multiple carousel</a></li>
                                                    <li><a href="home-portfolio-centered-slides.html">Portfolio centered slides</a></li>
                                                    <li><a href="home-portfolio-personal.html">Portfolio personal</a></li>
                                                    <li><a href="home-portfolio-metro.html">Portfolio metro</a></li>
                                                    <li><a href="home-portfolio-full-screen-vertical.html">Portfolio full screen – vertical</a></li>
                                                    <li><a href="home-portfolio-photographer.html">Portfolio photographer</a></li>
                                                    <li><a href="home-portfolio-parallax.html">Portfolio parallax</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Blog Homepages</li>
                                                    <li><a href="home-blog-grid.html">Blog grid</a></li>
                                                    <li><a href="home-blog-masonry.html">Blog masonry</a></li>
                                                    <li><a href="home-blog-clean.html">Blog clean</a></li>
                                                    <li><a href="home-blog-personal.html">Blog personal</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                        </ul>
                                        <!-- end sub menu -->
                                    </div>
                                </li>
                                <!-- end menu item -->
                                <li class="dropdown simple-dropdown"><a href="#">Pages</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about-us-simple.html">About us simple</a></li>
                                                <li><a href="about-us-classic.html">About us classic</a></li>
                                                <li><a href="about-us-modern.html">About us modern</a></li>
                                                <li><a href="about-me.html">About me</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="services-simple.html">Services simple</a></li>
                                                <li><a href="services-classic.html">Services classic</a></li>
                                                <li><a href="services-modern.html">Services modern</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="contact-us-simple.html">Contact simple</a></li>
                                                <li><a href="contact-us-classic.html">Contact classic</a></li>
                                                <li><a href="contact-us-classic-02.html">Contact classic – style 02</a></li>
                                                <li><a href="contact-us-modern.html">Contact modern</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Team <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="team-simple.html">Team simple</a></li>
                                                <li><a href="team-classic.html">Team classic</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Additional Pages <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="our-clients.html">Our clients</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                                <li><a href="coming-soon.html">Coming soon</a></li>
                                                <li><a href="coming-soon-02.html">Coming soon – style 02</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="maintenance.html">Maintenance</a></li>
                                                <li><a href="search-result.html">Search result</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="#">Portfolio</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full">
                                        <ul>
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Grid - Full width Layouts</li>
                                                    <li><a href="portfolio-full-width-grid-overlay.html">Portfolio grid overlay</a></li>
                                                    <li><a href="portfolio-full-width-grid-with-icon.html">Portfolio grid with icon</a></li>
                                                    <li><a href="portfolio-full-width-grid-transform.html">Portfolio grid transform</a></li>
                                                    <li><a href="portfolio-full-width-grid-zooming.html">Portfolio grid zooming</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Masonry - Full width Layouts</li>
                                                    <li><a href="portfolio-full-width-masonry-overlay.html">Portfolio masonry overlay</a></li>
                                                    <li><a href="portfolio-full-width-masonry-with-icon.html">Portfolio masonry with icon</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Metro - Full width Layouts</li>
                                                    <li><a href="portfolio-full-width-metro-overlay.html">Portfolio metro overlay</a></li>
                                                    <li><a href="portfolio-full-width-metro-with-icon.html">Portfolio metro with icon</a></li>
                                                    <li><a href="portfolio-full-width-metro-transform.html">Portfolio metro transform</a></li>
                                                    <li><a href="portfolio-full-width-metro-zooming.html">Portfolio metro zooming</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Other - Full width Layouts</li>
                                                    <li><a href="portfolio-full-width-image-gallery.html">Portfolio image gallery</a></li>
                                                    <li><a href="portfolio-full-width-justified-gallery.html">Portfolio justified</a></li>
                                                    <li><a href="portfolio-full-width-carousel.html">Portfolio carousel</a></li>
                                                    <li><a href="portfolio-full-width-parallax.html">Portfolio parallax</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column -->
                                            <!-- start sub menu column -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Grid - Boxed Layouts</li>
                                                    <li><a href="portfolio-boxed-grid-overlay.html">Portfolio grid overlay</a></li>
                                                    <li><a href="portfolio-boxed-grid-with-icon.html">Portfolio grid with icon</a></li>
                                                    <li><a href="portfolio-boxed-grid-transform.html">Portfolio grid transform</a></li>
                                                    <li><a href="portfolio-boxed-grid-zooming.html">Portfolio grid zooming</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Masonry - Boxed Layouts</li>
                                                    <li><a href="portfolio-boxed-masonry-overlay.html">Portfolio masonry overlay</a></li>
                                                    <li><a href="portfolio-boxed-masonry-with-icon.html">Portfolio masonry with icon</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Metro - Boxed Layouts</li>
                                                    <li><a href="portfolio-boxed-metro-overlay.html">Portfolio metro overlay</a></li>
                                                    <li><a href="portfolio-boxed-metro-with-icon.html">Portfolio metro with icon</a></li>
                                                    <li><a href="portfolio-boxed-metro-transform.html">Portfolio metro transform</a></li>
                                                    <li><a href="portfolio-boxed-metro-zooming.html">Portfolio metro zooming</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-header">Other - Boxed Layouts</li>
                                                    <li><a href="portfolio-boxed-image-gallery.html">Portfolio image gallery</a></li>
                                                    <li><a href="portfolio-boxed-justified-gallery.html">Portfolio justified</a></li>
                                                    <li><a href="portfolio-boxed-carousel.html">Portfolio carousel</a></li>
                                                    <li><a href="portfolio-boxed-parallax.html">Portfolio parallax</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->

                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Single Project Page</li>
                                                    <li><a href="single-project-page-01.html">Single project page 01</a></li>
                                                    <li><a href="single-project-page-02.html">Single project page 02</a></li>
                                                    <li><a href="single-project-page-03.html">Single project page 03</a></li>
                                                    <li><a href="single-project-page-04.html">Single project page 04</a></li>
                                                    <li><a href="single-project-page-05.html">Single project page 05</a></li>
                                                    <li><a href="single-project-page-06.html">Single project page 06</a></li>
                                                    <li><a href="single-project-page-07.html">Single project page 07</a></li>
                                                    <li><a href="single-project-page-08.html">Single project page 08</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Portfolio Columns</li>
                                                    <li><a href="portfolio-two-columns.html">Portfolio 2 columns</a></li>
                                                    <li><a href="portfolio-three-columns.html">Portfolio 3 columns</a></li>
                                                    <li><a href="portfolio-four-columns.html">Portfolio 4 columns</a></li>
                                                    <li><a href="portfolio-five-columns.html">Portfolio 5 columns</a></li>
                                                </ul>
                                            </li>
                                            <!-- end sub menu column  -->
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3 d-none d-lg-block">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li>
                                                        <a href="home-creative-studio.html" class="menu-banner-image"><img src="images/menu-banner-01.png" alt="portfolio"/></a>
                                                    </li>
                                                    <li>
                                                        <a href="home-creative-business.html" class="menu-banner-image"><img src="images/menu-banner-02.png" alt="portfolio"/></a>
                                                    </li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                        </ul>
                                        <!-- end sub menu -->
                                    </div>
                                </li>
                                <li class="dropdown simple-dropdown"><a href="#" title="Blog">Blog</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Standard <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-standard-full-width.html">Blog standard – full width</a></li>
                                                <li><a href="blog-standard-with-left-sidebar.html">Blog standard with left sidebar</a></li>
                                                <li><a href="blog-standard-with-right-sidebar.html">Blog standard with right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Classic <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-classic.html">Blog classic</a></li>
                                                <li><a href="blog-classic-full-width.html">Blog classic – full width</a></li>

                                            </ul></li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog List <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-list.html">Blog list</a></li>
                                                <li><a href="blog-list-full-width.html">Blog list – full width</a></li>
                                            </ul></li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Grid <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-grid.html">Blog grid</a></li>
                                                <li><a href="blog-grid-full-width.html">Blog grid – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Masonry <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-masonry.html">Blog masonry</a></li>
                                                <li><a href="blog-masonry-full-width.html">Blog masonry – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Simple <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-simple.html">Blog simple</a></li>
                                                <li><a href="blog-simple-full-width.html">Blog simple – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Clean <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-clean.html">Blog clean</a></li>
                                                <li><a href="blog-clean-full-width.html">Blog clean – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Images <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-images.html">Blog images</a></li>
                                                <li><a href="blog-images-full-width.html">Blog images – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog Only Text <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-only-text.html">Blog only text</a></li>
                                                <li><a href="blog-only-text-full-width.html">Blog only text – full width</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Post Layout <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-post-layout-01.html">Blog post layout 01</a></li>
                                                <li><a href="blog-post-layout-02.html">Blog post layout 02</a></li>
                                                <li><a href="blog-post-layout-03.html">Blog post layout 03</a></li>
                                                <li><a href="blog-post-layout-04.html">Blog post layout 04</a></li>
                                                <li><a href="blog-post-layout-05.html">Blog post layout 05</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Post Types <i class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-standard-post.html">Standard post</a></li>
                                                <li><a href="blog-gallery-post.html">Gallery post</a></li>
                                                <li><a href="blog-slider-post.html">Slider post</a></li>
                                                <li><a href="blog-html5-video-post.html">HTML5 video post</a></li>
                                                <li><a href="blog-youtube-video-post.html">Youtube video post</a></li>
                                                <li><a href="blog-vimeo-video-post.html">Vimeo video post</a></li>
                                                <li><a href="blog-audio-post.html">Audio post</a></li>
                                                <li><a href="blog-blockquote-post.html">Blockquote post</a></li>
                                                <li><a href="blog-full-width-post.html">Full width post</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- end sub menu -->
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="#">Elements</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full icon-list-menu">
                                        <ul>
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">General elements</li>
                                                    <li><a href="accordions.html"><i class="ti-layout-accordion-separated"></i> Accordions</a></li>
                                                    <li><a href="buttons.html"><i class="ti-mouse"></i> Buttons</a></li>
                                                    <li><a href="team.html"><i class="ti-user"></i> Team</a></li>
                                                    <li><a href="team-carousel.html"><i class="ti-layout-slider-alt"></i> Team carousel</a></li>
                                                    <li><a href="clients.html"><i class="ti-id-badge"></i> Clients</a></li>
                                                    <li><a href="client-carousel.html"><i class="ti-layout-slider"></i> Client carousel</a></li>
                                                    <li><a href="subscribe.html"><i class="ti-bookmark"></i> Subscribe</a></li>
                                                    <li><a href="call-to-action.html"><i class="ti-headphone-alt"></i> Call to action</a></li>
                                                    <li><a href="tab.html"><i class="ti-layout-tab"></i> Tab</a></li>
                                                    <li><a href="google-map.html"><i class="ti-location-pin"></i> Google map</a></li>
                                                    <li><a href="text-slider.html"><i class="ti-layout-media-overlay"></i> Text slider</a></li>
                                                    <li><a href="contact-form.html"><i class="ti-clipboard"></i> Contact form</a></li>
                                                    <li><a href="image-gallery.html"><i class="ti-gallery"></i> Image gallery</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column -->
                                            <!-- start sub menu column -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Infographics / icons</li>
                                                    <li><a href="process-bar.html"><i class="icon-hourglass"></i> Process bar</a></li>
                                                    <li><a href="icon-with-text.html"><i class="ti-layout-media-left"></i> Icon with text</a></li>
                                                    <li><a href="overline-icon-box.html"><i class="ti-layout-placeholder"></i> Overline icon box</a></li>
                                                    <li><a href="custom-icon-with-text.html"><i class="ti-layout-cta-btn-left"></i> Custom icon with text</a></li>
                                                    <li><a href="counters.html"><i class="ti-timer"></i> Counters</a></li>
                                                    <li><a href="countdown.html"><i class="ti-alarm-clock"></i> Countdown</a></li>
                                                    <li><a href="pie-charts.html"><i class="ti-pie-chart"></i> Pie charts</a></li>
                                                    <li><a href="text-box.html"><i class="ti-layout-cta-left"></i> Text box</a></li>
                                                    <li><a href="fancy-text-box.html"><i class="ti-layout-cta-center"></i> Fancy text box</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->

                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Interactive Elements</li>
                                                    <li><a href="testimonials.html"><i class="ti-thought"></i> Testimonials</a></li>
                                                    <li><a href="testimonials-carousel.html"><i class="ti-comments"></i> Testimonials carousel</a></li>
                                                    <li><a href="video.html"><i class="ti-video-camera"></i> Video</a></li>
                                                    <li><a href="interactive-banners.html"><i class="ti-image"></i> Interactive banners</a></li>
                                                    <li><a href="services.html"><i class="ti-headphone-alt"></i> Services</a></li>
                                                    <li><a href="portfolio-slider.html"><i class="ti-layout-slider-alt"></i> Portfolio slider</a></li>
                                                    <li><a href="info-banner.html"><i class="ti-layout-slider"></i> Info banner</a></li>
                                                    <li><a href="rotate-box.html"><i class="ti-layout-width-full"></i> Rotate box</a></li>
                                                    <li><a href="process-step.html"><i class="ti-stats-up"></i> Process step</a></li>
                                                    <li><a href="blog-posts.html"><i class="ti-comment-alt"></i> Blog posts</a></li>
                                                    <li><a href="instagram.html"><i class="ti-instagram"></i> Instagram</a></li>
                                                    <li><a href="parallax-scrolling.html"><i class="ti-exchange-vertical"></i> Parallax scrolling</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Text & containers</li>
                                                    <li><a href="heading.html"><i class="ti-text"></i> Heading</a></li>
                                                    <li><a href="dropcaps.html"><i class="ti-layout-accordion-list"></i> Dropcaps</a></li>
                                                    <li><a href="columns.html"><i class="ti-layout-column3-alt"></i> Columns</a></li>
                                                    <li><a href="blockquote.html"><i class="ti-quote-left"></i> Blockquote</a></li>
                                                    <li><a href="highlights.html"><i class="ti-underline"></i> Highlights</a></li>
                                                    <li><a href="message-box.html"><i class="ti-layout-media-right-alt"></i> Message box</a></li>
                                                    <li><a href="social-icons.html"><i class="ti-signal"></i> Social icons</a></li>
                                                    <li><a href="lists.html"><i class="ti-list"></i> Lists</a></li>
                                                    <li><a href="seperators.html"><i class="ti-layout-line-solid"></i> Separators</a></li>
                                                    <li><a href="pricing-table.html"><i class="ti-layout-grid2-thumb"></i> Pricing table</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                        </ul>
                                        <!-- end sub menu -->
                                    </div>
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="#">Features</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <!-- start sub menu -->
                                    <div class="menu-back-div dropdown-menu megamenu-content mega-menu collapse mega-menu-full">
                                        <ul>
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Header Styles</li>
                                                    <li><a href="transparent-header.html">Transparent header</a></li>
                                                    <li><a href="white-header.html">White header</a></li>
                                                    <li><a href="dark-header.html">Dark header</a></li>
                                                    <li><a href="header-with-top-bar.html">Header with top bar</a></li>
                                                    <li><a href="header-with-sticky-top-bar.html">Header with sticky top bar</a></li>
                                                    <li><a href="header-with-push.html">Header with push</a></li>
                                                    <li><a href="center-navigation.html">Center navigation</a></li>
                                                    <li><a href="center-logo.html">Center logo</a></li>
                                                    <li><a href="top-logo.html">Top logo</a></li>
                                                    <li><a href="one-page-navigation.html">One page navigation</a></li>
                                                    <li><a href="hamburger-menu.html">Hamburger menu</a></li>
                                                    <li><a href="hamburger-menu-modern.html">Hamburger menu modern</a></li>
                                                    <li><a href="hamburger-menu-half.html">Hamburger menu half</a></li>
                                                    <li><a href="left-menu-classic.html">Left menu classic</a></li>
                                                    <li><a href="left-menu-modern.html">Left menu modern</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column -->
                                            <!-- start sub menu column -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Footer</li>
                                                    <li><a href="footer-standard.html">Footer standard</a></li>
                                                    <li><a href="footer-standard-dark.html">Footer standard dark</a></li>
                                                    <li><a href="footer-classic.html">Footer classic</a></li>
                                                    <li><a href="footer-classic-dark.html">Footer classic dark</a></li>
                                                    <li><a href="footer-clean.html">Footer clean</a></li>
                                                    <li><a href="footer-clean-dark.html">Footer clean dark</a></li>
                                                    <li><a href="footer-modern.html">Footer modern</a></li>
                                                    <li><a href="footer-modern-dark.html">Footer modern dark</a></li>
                                                    <li><a href="footer-center-logo.html">Footer center logo </a></li>
                                                    <li><a href="footer-center-logo-dark.html">Footer center logo dark</a></li>
                                                    <li><a href="footer-strip.html">Footer strip</a></li>
                                                    <li><a href="footer-strip-dark.html">Footer strip dark</a></li>
                                                    <li><a href="footer-center-logo-02.html">Footer center logo 02</a></li>
                                                    <li><a href="footer-center-logo-02-dark.html">Footer center logo 02 dark</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->

                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Page Title</li>
                                                    <li><a href="page-title-left-alignment.html">Left alignment</a></li>
                                                    <li><a href="page-title-right-alignment.html">Right alignment</a></li>
                                                    <li><a href="page-title-center-alignment.html">Center alignment</a></li>
                                                    <li><a href="page-title-dark-style.html">Dark style</a></li>
                                                    <li><a href="page-title-big-typography.html">Big typography</a></li>
                                                    <li><a href="page-title-parallax-image-background.html">Parallax image background</a></li>
                                                    <li><a href="page-title-background-breadcrumbs.html">Image after breadcrumbs</a></li>
                                                    <li><a href="page-title-gallery-background.html">Gallery background</a></li>
                                                    <li><a href="page-title-background-video.html">Background video</a></li>
                                                    <li><a href="page-title-mini-version.html">Mini version</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                            <!-- start sub menu column  -->
                                            <li class="mega-menu-column col-lg-3">
                                                <!-- start sub menu item  -->
                                                <ul>
                                                    <li class="dropdown-header">Gallery</li>
                                                    <li><a href="single-image-lightbox.html">Single image lightbox</a></li>
                                                    <li><a href="lightbox-gallery.html">Lightbox gallery</a></li>
                                                    <li><a href="zoom-gallery.html">Zoom gallery</a></li>
                                                    <li><a href="popup-with-form.html">Popup with form</a></li>
                                                    <li><a href="modal-popup.html">Modal popup</a></li>
                                                    <li><a href="open-youtube-video.html">Open youtube video</a></li>
                                                    <li><a href="open-vimeo-video.html">Open vimeo video</a></li>
                                                    <li><a href="open-google-map.html">Open google map</a></li>
                                                </ul>
                                                <!-- end sub menu item  -->
                                            </li>
                                            <!-- end sub menu column  -->
                                        </ul>
                                        <!-- end sub menu -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto pr-lg-0">
                        <div class="header-searchbar">
                            <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                            <!-- search input-->
                            <form id="search-header" method="post" action="http://www.themezaa.com/html/pofo/search-result.html" name="search-header" class="mfp-hide search-form-result">
                                <div class="search-form position-relative">
                                    <button type="submit" class="fas fa-search close-search search-button"></button>
                                    <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                                </div>
                            </form>
                        </div>
                        <div class="header-social-icon d-none d-md-inline-block">
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://dribbble.com/" title="Dribbble" target="_blank"><i class="fab fa-dribbble"></i></a>                          
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header -->
        <!-- start slider section --> 
        <section class="wow fadeIn example no-padding no-transition">
            <article class="content">
                <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- start revolution slider 5.4.1 fullwidth mode -->
                    <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                        <ul><!-- slide  -->
                            <li data-index="rs-3045" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="200"  data-thumb="images/classic-corporate-100x50-1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="100" data-fsslotamount="0" data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>
                                <!-- main image -->
                                <img src="images/homepage-option17-slider-01.jpg"  alt="Ocean"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg">
                                <!-- layer nr. 3 -->
                                <div class="tp-caption NotGeneric-Title tp-resizeme" 
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-115','-110','-90','-90']"
                                     data-fontsize="['12','12','12','12']"
                                     data-lineheight="['20','20','20','20']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-type="text" 
                                     data-responsive_offset="on" 
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                     data-textAlign="['center','center','center','center']"
                                     data-paddingtop="[10,10,10,10]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[10,10,10,10]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 7; white-space: nowrap; text-transform: uppercase; font-family:'Montserrat', sans-serif !important; font-weight: 500; letter-spacing:2px;">we work hard, we play hard</div>
                                <!-- layer nr. 4 -->
                                <div class="tp-caption NotGeneric-SubTitle tp-resizeme " 
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                     data-fontsize="['70','70','60','50']"
                                     data-lineheight="['75','75','60','60']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-type="text" 
                                     data-responsive_offset="on" 
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                     data-textAlign="['center','center','center','center']"
                                     data-paddingtop="[10,10,10,10]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[10,10,10,10]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 8; white-space: nowrap; font-family:'Montserrat', sans-serif !important; font-weight: 600; letter-spacing: -1px;">A print & digital<br>creative studio</div>

                                <!-- layer nr. 5 -->
                                <a href="portfolio-full-width-grid-overlay.html" class="tp-caption btn btn-transparent-white btn-medium border-radius-4 z-index-5" 
                                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                   data-y="['middle','middle','middle','middle']" data-voffset="['130','130','110','110']" 
                                   data-fontsize="['12','14','14','14']"
                                   data-whitespace="nowrap"
                                   data-visibility="['on', 'on', 'on', 'on']"
                                   data-type="text"
                                   data-color="['#FFFFFF']"
                                   data-responsive_offset="on" 
                                   data-responsive="on"
                                   data-frames='[{"from":"y:150px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                   data-textAlign="['inherit', 'inherit', 'right', 'center']" 
                                   data-paddingtop="[6,6,6,6]"
                                   data-paddingright="[26,26,26,26]"
                                   data-paddingbottom="[6,6,6,6]"
                                   data-paddingleft="[26,26,26,26]"
                                   data-basealign="slide">Explore Work</a>
                                <!-- LAYER NR. 6 -->
                            </li>
                            <!-- slide  -->
                            <li data-index="rs-2" data-transition="fade" data-slotamount="3" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-thumb="images/classic-corporate-60x60-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>
                                <!-- main image -->
                                <img src="images/homepage-3-slider-img-1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg" data-no-retina>
                                <!-- layer nr. 3 -->
                                <div class="tp-caption NotGeneric-Title tp-resizeme" 
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-115','-110','-90','-90']"
                                     data-fontsize="['12','12','12','12']"
                                     data-lineheight="['20','20','20','20']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-visibility="['on', 'on', 'on', 'on']"
                                     data-type="text"
                                     data-color="['#FFF']"
                                     data-responsive_offset="on" 
                                     data-responsive="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                     data-textAlign="['inherit', 'inherit', 'right', 'center']"
                                     data-paddingtop="[10,10,10,10]"
                                     data-paddingright="[30,30,30,30]"
                                     data-paddingbottom="[10,10,10,10]"
                                     data-paddingleft="[30,30,30,30]"
                                     data-basealign="slide" 
                                     style="z-index: 7; white-space: nowrap; text-transform: uppercase; font-family:'Montserrat', sans-serif !important; font-weight: 500; letter-spacing:2px;">we work hard, we play hard</div>

                                <!-- layer nr. 4 -->
                                <div class="tp-caption NotGeneric-SubTitle tp-resizeme " 
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                     data-fontsize="['70','70','60','50']"
                                     data-lineheight="['75','75','60','60']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-visibility="['on', 'on', 'on', 'on']"
                                     data-type="button"
                                     data-color="['#FFF']"
                                     data-responsive_offset="on" 
                                     data-responsive="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                     data-textAlign="['center', 'center', 'center', 'center']"
                                     data-paddingtop="[10,10,10,10]"
                                     data-paddingright="[30,30,30,30]"
                                     data-paddingbottom="[10,10,10,10]"
                                     data-paddingleft="[30,30,30,30]"
                                     data-basealign="slide" 
                                     style="z-index: 8; white-space: nowrap; font-family:'Montserrat', sans-serif !important; font-weight: 600; letter-spacing: -1px;">We are a web<br>design agency</div>
                                <!-- layer nr. 5 -->
                                <a href="portfolio-full-width-grid-overlay.html" class="tp-caption btn btn-transparent-white btn-medium border-radius-4 z-index-5" 
                                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                   data-y="['middle','middle','middle','middle']" data-voffset="['130','130','110','110']" 
                                   data-fontsize="['12','14','14','14']"
                                   data-whitespace="nowrap"
                                   data-visibility="['on', 'on', 'on', 'on']"
                                   data-type="text"
                                   data-color="['#FFFFFF']"
                                   data-responsive_offset="on" 
                                   data-responsive="on"
                                   data-frames='[{"from":"y:150px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                   data-textAlign="['inherit', 'inherit', 'right', 'center']" 
                                   data-paddingtop="[6,6,6,6]"
                                   data-paddingright="[26,26,26,26]"
                                   data-paddingbottom="[6,6,6,6]"
                                   data-paddingleft="[26,26,26,26]"
                                   data-basealign="slide">Explore Work</a>
                                <!-- layer nr. 6 -->
                            </li>
                            <li data-index="rs-3" data-transition="fade" data-slotamount="3" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-thumb="images/classic-corporate-60x60-3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <div class="opacity-extra-medium bg-black position-relative z-index-1"></div>
                                <!-- main image -->
                                <img src="images/homepage-3-slider-img-3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg" data-no-retina>
                                <!-- layer nr. 3 -->
                                <div class="tp-caption NotGeneric-Title tp-resizeme" 
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-115','-110','-90','-90']"
                                     data-fontsize="['12','12','12','12']"
                                     data-lineheight="['20','20','20','20']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-visibility="['on', 'on', 'on', 'on']"
                                     data-type="text"
                                     data-color="['#FFF']"
                                     data-responsive_offset="on" 
                                     data-responsive="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                     data-textAlign="['inherit', 'inherit', 'right', 'center']"
                                     data-paddingtop="[10,10,10,10]"
                                     data-paddingright="[30,30,30,30]"
                                     data-paddingbottom="[10,10,10,10]"
                                     data-paddingleft="[30,30,30,30]"
                                     data-basealign="slide" 
                                     style="z-index: 7; white-space: nowrap; text-transform: uppercase; font-family:'Montserrat', sans-serif !important; font-weight: 500; letter-spacing:2px;">we work hard, we play hard</div>

                                <!-- layer nr. 4 -->
                                <div class="tp-caption NotGeneric-SubTitle tp-resizeme " 
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                     data-fontsize="['70','70','60','50']"
                                     data-lineheight="['75','75','60','60']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-visibility="['on', 'on', 'on', 'on']"
                                     data-type="button"
                                     data-color="['#FFF']"
                                     data-responsive_offset="on" 
                                     data-responsive="on"
                                     data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                     data-textAlign="['center', 'center', 'center', 'center']"
                                     data-paddingtop="[10,10,10,10]"
                                     data-paddingright="[30,30,30,30]"
                                     data-paddingbottom="[10,10,10,10]"
                                     data-paddingleft="[30,30,30,30]"
                                     data-basealign="slide" 
                                     style="z-index: 8; white-space: nowrap; font-family:'Montserrat', sans-serif !important; font-weight: 600; letter-spacing: -1px;">We are delivering<br>beautiful products</div>

                                <!-- layer nr. 5 -->
                                <!-- layer nr. 5 -->
                                <a href="portfolio-full-width-grid-overlay.html" class="tp-caption btn btn-transparent-white btn-medium border-radius-4 z-index-5" 
                                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                   data-y="['middle','middle','middle','middle']" data-voffset="['130','130','110','110']" 
                                   data-fontsize="['12','14','14','14']"
                                   data-whitespace="nowrap"
                                   data-visibility="['on', 'on', 'on', 'on']"
                                   data-type="text"
                                   data-color="['#FFFFFF']"
                                   data-responsive_offset="on" 
                                   data-responsive="on"
                                   data-frames='[{"from":"y:150px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]'
                                   data-textAlign="['inherit', 'inherit', 'right', 'center']" 
                                   data-paddingtop="[6,6,6,6]"
                                   data-paddingright="[26,26,26,26]"
                                   data-paddingbottom="[6,6,6,6]"
                                   data-paddingleft="[26,26,26,26]"
                                   data-basealign="slide">Explore Work</a>
                                <!-- layer nr. 6 -->
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end revolution slider -->
            </article>
        </section>
        <!-- end slider section -->
        <!-- start about section --> 
        <section class="wow fadeIn cover-background md-no-background-img bg-medium-light-gray" style="background-image: url('images/homepage-option17-banner-bg.jpg')">
            <div class="container">
                <div class="row"> 
                    <div class="col-12 col-lg-6 offset-lg-6 wow fadeIn">
                        <div class="row m-0">
                            <div class="col-12 text-center text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 
                                <span class="text-medium text-deep-pink alt-font margin-10px-bottom d-inline-block">Easy way to build perfect websites</span>
                                <h5 class="alt-font text-extra-dark-gray font-weight-600">Beautifully handcrafted templates for your website</h5>
                                <p class="width-90 md-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text.</p>
                            </div>                          
                            <!-- star feature box item -->
                            <div class="col-12 col-md-6 sm-margin-30px-bottom last-paragraph-no-margin sm-no-padding-lr text-center text-lg-left">
                                <i class="icon-tools text-deep-pink icon-extra-medium margin-20px-bottom md-margin-15px-bottom"></i>
                                <div class="feature-content">
                                    <div class="alt-font font-weight-600 text-extra-dark-gray margin-5px-bottom">Modern Framework</div>
                                    <p class="width-80 lg-width-90 md-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- star feature box item -->
                            <div class="col-12 col-md-6 last-paragraph-no-margin sm-no-padding-lr text-center text-lg-left">
                                <i class="icon-layers text-deep-pink icon-extra-medium margin-20px-bottom md-margin-15px-bottom"></i>
                                <div class="feature-content">
                                    <div class="alt-font font-weight-600 text-extra-dark-gray margin-5px-bottom">Live Website Builder</div>
                                    <p class="width-80 lg-width-90 md-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                                </div> 
                            </div>
                            <!-- end feature box item -->
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end about section -->
        <!-- start services section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 margin-eight-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font text-extra-dark-gray font-weight-600">Beautiful and easy to use UI, professional animations and drag & drop feature</h5>
                        <p class="width-80 d-inline-block sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="row">
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                            <div class="d-inline-block margin-20px-bottom"><i class="icon-tools text-white-2 icon-round-small bg-deep-pink"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Pixel Perfect Design</div>
                            <p class="width-75 mx-auto">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                            <div class="d-inline-block margin-20px-bottom"><i class="icon-layers text-white-2 icon-round-small bg-deep-pink"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Full Documentation</div>
                            <p class="width-75 mx-auto">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                            <div class="d-inline-block margin-20px-bottom"><i class="icon-scissors text-white-2 icon-round-small bg-deep-pink"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Reasonable Pricing</div>
                            <p class="width-75 mx-auto">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                            <div class="d-inline-block margin-20px-bottom"><i class="icon-lock text-white-2 icon-round-small bg-deep-pink"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">User-friendly Admin</div>
                            <p class="width-75 mx-auto">Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end services section -->
        <!-- start section -->
        <section class="p-0 wow fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <!-- start features item -->
                    <?php 
                        $result = mysqli_query($database, "SELECT * FROM client_profile");

                        if (mysqli_num_rows($result) != 0) {
                            while ($read_more = mysqli_fetch_array($result)) {
                    ?> 
                    <div class="col-12 col-lg-3 p-0 cover-background position-relative md-height-500px sm-height-300px wow fadeIn" style="background: transparent url('<?php echo $baseurl; ?>/read_more_uploads/<?php echo $read_more['image'],".jpg"; ?>')"></div>
                    <!-- end features item -->
                    <!-- start features item -->
                    <div class="col-12 col-lg-3 p-0 d-flex align-items-center position-relative bg-extra-dark-gray text-center text-lg-left wow fadeIn" data-wow-delay="0.2s">
                        <div class="padding-fifteen-all lg-padding-ten-all sm-padding-30px-all width-100">
                            <div class="alt-font text-medium-gray margin-10px-bottom"><?php echo $read_more['short_description']; ?></div>
                            <div class="alt-font text-extra-large margin-20px-bottom text-white-2 width-90 lg-width-100 sm-margin-15px-bottom"><?php echo $read_more['description_heading']; ?></div>
                            <p><?php echo $read_more['description']; ?></p>
                            <a href="about-us-simple.html" class="btn btn-transparent-white btn-small border-radius-4"><i class="fas fa-play-circle icon-very-small margin-5px-right ml-0" aria-hidden="true"></i><?php echo $read_more['button_name']; ?></a>
                        </div>
                    </div>

                <?php } } ?>
                    <!-- end features item -->
                    <!-- start features item -->
                    <!-- <div class="col-12 col-lg-3 p-0 cover-background position-relative md-height-500px sm-height-300px wow fadeIn" data-wow-delay="0.4s" style="background: transparent url('images/homepage-option17-image-02.jpg')"></div> -->
                    <!-- end features item -->
                    <!-- start features item -->
                    <!-- <div class="col-12 col-lg-3 p-0 d-flex align-items-center position-relative bg-extra-dark-gray text-center text-lg-left wow fadeIn" data-wow-delay="0.6s">
                        <div class="padding-fifteen-all lg-padding-ten-all sm-padding-30px-all width-100">
                            <div class="alt-font text-medium-gray margin-10px-bottom">Unique digital experiences</div>
                            <div class="alt-font text-extra-large margin-20px-bottom text-white-2 width-90 lg-width-100 sm-margin-15px-bottom">Pixel perfect design and clear code delivered to you</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text.</p>
                            <a href="about-us-classic.html" class="btn btn-transparent-white btn-small border-radius-4"><i class="fas fa-play-circle icon-very-small margin-5px-right ml-0" aria-hidden="true"></i>Read More</a>
                        </div>
                    </div> -->
                    <!-- end features item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start portfolio section -->
        <section class="wow fadeIn padding-90px-top md-padding-50px-top sm-padding-30px-top pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- start filter navigation -->
                        <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small md-margin-40px-bottom sm-margin-20px-bottom">
                            <li class="nav active"><a href="javascript:void(0);" data-filter="*" class="light-gray-text-link text-very-small">All</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".web" class="light-gray-text-link text-very-small">Web</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".advertising" class="light-gray-text-link text-very-small">Advertising</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".branding" class="light-gray-text-link text-very-small">Branding</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".design" class="light-gray-text-link text-very-small">Design</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".photography" class="light-gray-text-link text-very-small">Photography</a></li>
                        </ul>                                                                           
                        <!-- end filter navigation -->
                    </div>
                </div>
            </div>
            <!-- start filter content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0 sm-padding-15px-lr">
                        <div class="filter-content overflow-hidden">
                            <ul class="portfolio-grid work-4col gutter-medium hover-option7">
                                <li class="grid-sizer"></li>
                                <!-- start portfolio item -->
                                <li class="grid-item web branding design wow fadeInUp">
                                    <a href="single-project-page-01.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item77.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Naked Soap</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Web and Photography</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item design photography wow fadeInUp" data-wow-delay="0.2s">
                                    <a href="single-project-page-02.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item78.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Berlin Design</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Branding and Brochure</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item web branding design photography wow fadeInUp" data-wow-delay="0.4s">
                                    <a href="single-project-page-03.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item23.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Abstract Comics</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Branding and Identity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item advertising branding design photography wow fadeInUp" data-wow-delay="0.6s">
                                    <a href="single-project-page-04.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item80.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box verticalalign-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Teabag Collection</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Web and Photography</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item web branding design wow fadeInUp">
                                    <a href="single-project-page-05.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item24.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">HardDot Stone</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Branding and Identity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item web advertising branding design photography wow fadeInUp" data-wow-delay="0.2s">
                                    <a href="single-project-page-06.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item25.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Educamp School</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Branding and Identity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item web advertising branding design photography wow fadeInUp" data-wow-delay="0.4s">
                                    <a href="single-project-page-07.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item26.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Third Eye Glasses</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Branding and Brochure</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                                <!-- start portfolio item -->
                                <li class="grid-item web advertising branding wow fadeInUp" data-wow-delay="0.6s">
                                    <a href="single-project-page-08.html">
                                        <figure>
                                            <div class="portfolio-img"><img src="images/portfolio-item19.jpg" alt=""/></div>
                                            <figcaption>
                                                <div class="portfolio-hover-main text-center last-paragraph-no-margin">
                                                    <div class="portfolio-hover-box align-middle">
                                                        <div class="portfolio-hover-content position-relative">
                                                            <span class="font-weight-600 alt-font text-uppercase margin-one-bottom d-block text-extra-dark-gray">Violator Series</span>
                                                            <p class="text-medium-gray text-uppercase text-extra-small">Web and Photography</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- end portfolio item -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end filter content -->
        </section>
        <!-- end portfolio section -->
        <!-- start information section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row align-items-center"> 
                    <div class="col-12 col-lg-5 md-margin-50px-bottom">
                        <h5 class="alt-font text-extra-dark-gray font-weight-600">Beautifully handcrafted templates for your website</h5>
                        <ul class="p-0 list-style-4">
                            <li>Beautiful and easy to understand UI, professional animations</li>
                            <li>Theme advantages are pixel perfect design & clear code delivered</li>
                            <li>Present your services with flexible, convenient and multipurpose</li>
                            <li>Find more creative ideas for your projects </li>
                            <li>Unlimited power and customization possibilities</li> 
                        </ul>
                        <a href="home-classic-digital-agency.html" class="btn btn-dark-gray btn-small text-extra-small border-radius-4 margin-20px-top"><i class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> ALL advantages</a>
                    </div>
                    <div class="col-12 col-lg-7 text-center">
                        <img src="images/explore-work-02.png" alt="" class="w-100">
                    </div> 
                </div>
            </div>
        </section>
        <!-- end information section -->
        <!-- start parallax feature box -->
        <section class="p-0 wow fadeIn bg-light-gray">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-12 col-lg-6 wow fadeInLeft padding-four-all md-padding-eight-all md-padding-15px-lr sm-padding-50px-tb">
                        <div class="row m-0">
                            <div class="col-12 col-xl-10 margin-six-bottom lg-margin-six-bottom md-margin-30px-bottom sm-no-margin-bottom">
                                <h4 class="alt-font text-extra-dark-gray font-weight-600 text-center text-lg-left md-width-70 mx-auto mx-lg-0 sm-width-100 sm-margin-30px-bottom">We are delivering beautiful digital products for you</h4>
                            </div>
                            <!-- start feature box item -->
                            <div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-desktop text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">Powerful Website Builder</div>
                                        <p class="width-95 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-book-open text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">Different Layout Type</div>
                                        <p class="width-95 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-12 col-xl-6 col-lg-12 col-md-6 lg-margin-six-bottom md-no-margin-bottom sm-margin-30px-bottom last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-wallet text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">True Responsiveness</div>
                                        <p class="width-95 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-12 col-xl-6 col-lg-12 col-md-6 last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative ">
                                    <i class="icon-camera text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600">Elegant / Unique design</div>
                                        <p class="width-95 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                        </div>
                    </div> 
                    <div class="col-12 col-lg-6 cover-background md-height-400px wow fadeInRight" style="background-image:url('images/services-classic-07.jpg');"></div>
                </div>
            </div>
        </section>
        <!-- end parallax feature box -->   
        <!-- start services section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="alt-font margin-5px-bottom text-uppercase text-small text-medium-gray">What We Do</div>
                        <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100">our services</h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
                    </div>
                    <div class="col-12 margin-100px-top md-margin-70px-top sm-margin-50px-top">                    
                        <div class="row">
                            <!-- start services item -->
                            <?php

                             if (mysqli_num_rows($result) != 0) {
                            while($res = mysqli_fetch_array($result)){
                            ?> 
                            <div class="col-12 col-md-4 team-block text-left feature-box-15 sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp">
                                <figure>
                                    <div class="feature-box-content sm-width-100">
                                        <div class="feature-box-image">
                                            <img src="<?php echo $baseurl; ?>/our_services_uploads/<?php echo $res['image'],".jpg"; ?>">
                                        </div>
                                        <div class="hover-content bg-deep-pink d-flex justify-content-center align-items-center">
                                            <div class="padding-twelve-lr">
                                                <span class="text-white-2 d-inline-block text-center"><?php echo $res['flip_content']; ?>
                                                </span>
                                            </div>
                                        </div> 
                                    </div>
                                    <figcaption>
                                        <div class="text-center margin-25px-top">
                                            <div class="text-extra-dark-gray alt-font font-weight-600"><?php echo $res['designation']; ?></div> 
                                            <p><?php echo $res['experience']; ?></p>
                                        </div>   
                                    </figcaption>
                                </figure>
                            </div>
                        <?php } } ?>
                            <!-- end services item -->
                            <!-- start services item -->
                            <!-- <div class="col-12 col-md-4 team-block text-left feature-box-15 sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.2s">
                                <figure>
                                    <div class="feature-box-content sm-width-100">
                                        <div class="feature-box-image"><img src="images/blog-img1.jpg" alt=""></div>
                                        <div class="hover-content bg-deep-pink d-flex justify-content-center align-items-center">
                                            <div class="padding-twelve-lr">
                                                <span class="text-white-2 d-inline-block text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <figcaption>
                                        <div class="text-center margin-25px-top">
                                            <div class="text-extra-dark-gray alt-font font-weight-600">Social Media Marketing</div> 
                                            <p>475+ We completed marketing</p>
                                        </div>   
                                    </figcaption>
                                </figure>
                            </div> -->
                            <!-- end services item -->
                            <!-- start services item -->
                            <!-- <div class="col-12 col-md-4 team-block text-left feature-box-15 last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.6s">
                                <figure>
                                    <div class="feature-box-content sm-width-100">
                                        <div class="feature-box-image"><img src="images/blog-img2.jpg" alt=""></div>
                                        <div class="hover-content bg-deep-pink d-flex justify-content-center align-items-center">
                                            <div class="padding-twelve-lr">
                                                <span class="text-white-2 d-inline-block text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <figcaption>
                                        <div class="text-center margin-25px-top">
                                            <div class="text-extra-dark-gray alt-font font-weight-600">Mobile App Development</div> 
                                            <p>475+ We created mobile app</p>
                                        </div>   
                                    </figcaption>
                                </figure>
                            </div> -->
                            <!-- end services item -->
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <!-- end services section -->
        <!-- start parallax section -->
        <section class="parallax" data-stellar-background-ratio="0.6" style="background-image: url(https://www.themezaa.com/index.php)">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container-fluid position-relative">
                <div class="row align-items-center"> 
                    <div class="col-12 col-lg-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn">
                        <img src="images/homepage-option15-image-3.png" alt="" class="w-100">
                    </div> 
                    <div class="col-12 col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="width-75 lg-width-100 padding-three-lr sm-no-padding-lr">
                            <h4 class="alt-font text-white-2 font-weight-600">Unique, truly responsive and functional websites </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text.</p>
                            <ul class="p-0 list-style-4 margin-30px-bottom list-style-color">
                                <li>Beautiful and easy to understand UI, professional animations</li>
                                <li>Theme advantages are pixel perfect design &amp; clear code delivered</li>
                                <li>Present your services with flexible, convenient and multipurpose</li>
                                <li>Unlimited power and customization possibilities</li> 
                            </ul>
                            <a href="about-us-modern.html" class="btn btn-white btn-small text-extra-small border-radius-4 margin-20px-tb md-no-margin-bottom"><i class="fas fa-play-circle icon-very-small margin-5px-right ml-0" aria-hidden="true"></i>GET TO KNOW US</a>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end parallax section -->
        <!-- start section -->
        <section class="wow fadeIn">
            <div class="container"> 
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5 text-center md-margin-50px-bottom wow fadeInLeft">
                        <img src="images/image-8.jpg" alt="" class="w-100">
                    </div> 
                    <div class="col-12 col-lg-7 wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="padding-eight-lr text-center text-lg-left sm-no-padding w-100">
                            <span class="text-deep-pink alt-font margin-10px-bottom md-no-margin-bottom d-inline-block text-medium">Wide range of web development services</span>
                            <h5 class="font-weight-600 alt-font text-extra-dark-gray">Responsive, convenient and multipurpose theme</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is printing and typesetting simply dummy text.</p>
                            <a href="about-us-simple.html" class="btn btn-dark-gray btn-small text-extra-small border-radius-4 margin-30px-top"><i class="fas fa-play-circle icon-very-small margin-5px-right ml-0" aria-hidden="true"></i> About Company</a>
                        </div>
                    </div>
                </div>
                <div class="divider-full bg-extra-light-gray margin-seven-bottom margin-eight-top"></div>
                <div class="row">
                    <!-- start feature box -->
                    <div class="col-12 col-md-4 sm-margin-30px-bottom text-center text-md-left wow fadeInUp last-paragraph-no-margin">
                        <div class="row m-0">
                            <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-lr float-left sm-margin-15px-bottom">
                                <i class="icon-desktop text-medium-gray icon-extra-medium top-6"></i>
                            </div>
                            <div class="col-12 col-lg-9 col-md-8 p-0">
                                <span class="margin-5px-bottom text-extra-dark-gray alt-font d-block font-weight-600 sm-margin-10px-bottom">Modern Framework</span>
                                <p class="width-75 lg-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box -->
                    <!-- start feature box -->
                    <div class="col-12 col-md-4 sm-margin-30px-bottom text-center text-md-left wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="row m-0">
                            <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-lr float-left sm-margin-15px-bottom">
                                <i class="icon-book-open text-medium-gray icon-extra-medium top-6"></i>
                            </div>
                            <div class="col-12 col-lg-9 col-md-8 p-0">
                                <span class="margin-5px-bottom text-extra-dark-gray alt-font d-block font-weight-600 sm-margin-10px-bottom">Web Interactive</span>
                                <p class="width-75 lg-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box -->
                    <!-- start feature box -->
                    <div class="col-12 col-md-4 text-center text-md-left wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="row m-0">
                            <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-lr float-left sm-margin-15px-bottom">
                                <i class="icon-gift text-medium-gray icon-extra-medium top-6"></i>
                            </div>
                            <div class="col-12 col-lg-9 col-md-8 p-0">
                                <span class="margin-5px-bottom text-extra-dark-gray alt-font d-block font-weight-600 sm-margin-10px-bottom">Graphic Design</span>
                                <p class="width-75 lg-width-100">Lorem Ipsum is simply text the printing and typesetting standard industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start advantage section -->
        <section class="p-0 wow fadeIn bg-light-gray" id="services">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-12 col-lg-6 padding-seven-half-tb padding-eight-lr lg-padding-five-all md-padding-ten-all sm-padding-15px-lr text-center text-lg-left last-paragraph-no-margin wow fadeIn">
                        <span class="text-medium margin-15px-bottom d-block alt-font text-deep-pink">We create premium designs and technology</span>
                        <h4 class="alt-font text-extra-dark-gray font-weight-600 mx-auto mx-lg-0 sm-width-100">we design brand, digital experience that engage the right customers.</h4>
                        <p class="width-80 lg-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
                        <a href="services-simple.html" class="btn btn-dark-gray btn-small text-extra-small border-radius-4 margin-35px-top"><i class="fas fa-play-circle icon-very-small margin-5px-right ml-0" aria-hidden="true"></i>all advantages</a>
                    </div>
                    <div class="col-12 col-lg-6 position-relative md-height-500px sm-height-300 cover-background wow fadeIn" style="background-image: url('images/parallax-bg11.jpg')"></div>
                </div>
            </div>
        </section>
        <!-- end advantage section -->
        <!-- start counter section --> 
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- start counter box item -->
                    <div class="col-12 col-lg-3 col-md-6 md-padding-twelve-left md-margin-ten-bottom sm-margin-50px-bottom sm-padding-15px-left wow fadeInRight">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-desktop text-medium-gray icon-extra-medium top-6"></i>
                            <div class="feature-content">
                                <h6 class="d-block text-extra-dark-gray font-weight-600 alt-font margin-5px-bottom mb-md-0 timer" data-speed="2000" data-to="350">350</h6>
                                <span class="text-small text-uppercase position-relative top-minus4">Happy Clients</span>
                            </div>
                        </div>
                    </div>
                    <!-- end counter box item -->
                    <!-- start counter box item -->
                    <div class="col-12 col-lg-3 col-md-6 md-padding-twelve-left md-margin-ten-bottom sm-margin-50px-bottom sm-padding-15px-left wow fadeInRight" data-wow-delay="0.2s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-camera text-medium-gray icon-extra-medium top-6"></i>
                            <div class="feature-content">
                                <h6 class="d-block text-extra-dark-gray font-weight-600 alt-font margin-5px-bottom mb-md-0 timer" data-speed="2000" data-to="780">780</h6>
                                <span class="text-small text-uppercase position-relative top-minus4">Photo Capture</span>
                            </div>
                        </div>
                    </div>
                    <!-- end counter box item -->
                    <!-- start counter box item -->
                    <div class="col-12 col-lg-3 col-md-6 md-padding-twelve-left sm-margin-50px-bottom sm-padding-15px-left wow fadeInRight" data-wow-delay="0.4s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-laptop text-medium-gray icon-extra-medium top-6"></i>
                            <div class="feature-content">
                                <h6 class="d-block text-extra-dark-gray font-weight-600 alt-font margin-5px-bottom mb-md-0 timer" data-speed="2000" data-to="850">850</h6>
                                <span class="text-small text-uppercase position-relative top-minus4">Work Completed</span>
                            </div>
                        </div>
                    </div>
                    <!-- end counter box item -->
                    <!-- start counter box item -->
                    <div class="col-12 col-lg-3 col-md-6 md-padding-twelve-left sm-padding-15px-left wow fadeInRight" data-wow-delay="0.6s">
                        <div class="feature-box-5 position-relative">
                            <i class="icon-chat text-medium-gray icon-extra-medium top-6"></i>
                            <div class="feature-content">
                                <h6 class="d-block text-extra-dark-gray font-weight-600 alt-font margin-5px-bottom mb-md-0 timer" data-speed="2000" data-to="650">650</h6>
                                <span class="text-small text-uppercase position-relative top-minus4">Telephonic Talk</span>
                            </div>
                        </div>
                    </div>
                    <!-- end counter box item -->
                </div>
            </div>
        </section>
        <!-- end counters section -->
        <!-- start video section -->
        <section class="parallax" data-stellar-background-ratio="0" style="background-image:url('images/parallax-bg6.jpg');">
            <div class="opacity-full bg-extra-dark-gray"></div>
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-9 col-lg-10 text-center wow fadeIn last-paragraph-no-margin">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=nrJtHemSPW4"><img src="images/icon-play-white.png" class="width-10 sm-width-50px margin-30px-bottom" alt=""/></a>
                        <h4 class="alt-font text-white-2">Beautiful and easy to use UI, professional animations and drag & drop feature</h4>
                        <p class="width-75 mx-auto text-medium-gray lg-width-90 sm-width-100 sm-margin-30px-bottom">With years of experience in the website design and development industry ThemeZaa pride ourselves on creating unique, creative and quality designs that are developed upon the latest modern coding and developing techniques, which are then built using the most up to date, structured coding framework so that your development team can take it to the next level with ease.</p>
                        <a href="about-us-simple.html" class="btn btn-white btn-small text-extra-small border-radius-4 margin-45px-top sm-no-margin-top"><i class="fas fa-play-circle icon-very-small margin-5px-right ml-0" aria-hidden="true"></i> About Company</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end video section -->
        <!-- start clients slider section  -->
        <section class="wow fadeIn">
            <div class="container text-center">
                <div class="row">    
                    <div class="swiper-slider-clients swiper-container black-move wow fadeIn">
                        <div class="swiper-wrapper">
                            <!-- start slide -->
                            <div class="swiper-slide text-center"><a href="https://www.envato.com/"><img src="images/logo-1.png" alt=""></a></div>
                            <!-- end slide -->
                            <!-- start slide -->
                            <div class="swiper-slide text-center"><a href="https://www.woocommerce.com/"><img src="images/logo-2.png" alt=""></a></div>
                            <!-- end slide -->
                            <!-- start slide -->
                            <div class="swiper-slide text-center"><a href="https://www.wordpress.com/"><img src="images/logo-3.png" alt=""></a></div>
                            <!-- end slide -->
                            <!-- start slide -->
                            <div class="swiper-slide text-center"><a href="https://www.magento.com/"><img src="images/logo-4.png" alt=""></a></div>
                            <!-- end slide -->
                            <!-- start slide -->
                            <div class="swiper-slide text-center"><a href="https://www.sass-lang.com/"><img src="images/logo-5.png" alt=""></a></div>
                            <!-- end slide -->
                            <!-- start slide -->
                            <div class="swiper-slide text-center"><a href="https://www.pingdom.com/"><img src="images/logo-6.png" alt=""></a></div>
                            <!-- end slide -->
                            <!-- start slide -->
                            <div class="swiper-slide text-center"><a href="https://www.lesscss.org/"><img src="images/logo-7.png" alt=""></a></div>
                            <!-- end slide -->
                            <!-- start slide -->
                            <div class="swiper-slide text-center"><a href="https://www.jquery.com/"><img src="images/logo-8.png" alt=""></a></div>
                            <!-- end slide -->
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <!-- end clients slider section -->
        <!-- start testimonial slider section -->
        <section class="bg-light-gray wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center wow fadeIn">
                        <p class="alt-font margin-5px-bottom text-uppercase text-small text-medium-gray">What people say</p>
                        <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100">Clients Words</h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
                    </div>
                </div>
                <div class="row position-relative margin-100px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="swiper-container swiper-pagination-bottom black-move blog-slider swiper-three-slides">
                        
                        
                        <div class="swiper-wrapper">
                            <?php 
                                if (mysqli_num_rows($result) != 0) {
                                while($mes = mysqli_fetch_array($result)){
                            ?>
                              
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                                <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all ">
                                    <img src="<?php echo $baseurl; ?>/uploads/<?php echo $mes['image'],".jpg"; ?>" class="width-100% margin-25px-bottom md-margin-15px-bottom " alt="">
                                    <p class="md-margin-15px-bottom sm-margin-20px-bottom"><?php echo $mes['description']; ?></p>
                                    <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600"><?php echo $mes['client_name']; ?></span>
                                    <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray"><?php echo $mes['client_designation']; ?></span>
                                </div>
                            </div>
                            <?php } } ?> 
                            
                            <!-- end testimonial item -->
                            
                        </div>
                                               
                        <div class="swiper-pagination swiper-pagination-three-slides h-auto"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end testimonial slider section -->
        <!-- start latest blog section  -->
        <section class="border-top border-color-extra-light-gray wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="alt-font margin-5px-bottom text-uppercase text-small text-medium-gray">Publish what you think</p>
                        <h5 class="text-uppercase alt-font text-extra-dark-gray margin-10px-top margin-20px-bottom font-weight-700 md-width-100 sm-width-100">Latest Blogs</h5>
                        <span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px"></span>
                    </div>
                </div>
                <div class="row margin-100px-top md-margin-70px-top sm-margin-50px-top">
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 md-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin wow fadeInUp">
                        <div class="blog-post blog-post-style1 text-center text-md-left">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                <a href="blog-post-layout-01.html">
                                    <img src="images/latest-blog5.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-details">
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">25 April 2017 | by <a href="blog-classic.html" class="text-link-dark-gray">Jay Benjamin</a></span>
                                <a href="blog-post-layout-01.html" class="post-title text-medium text-extra-dark-gray width-90 md-width-100 d-block">I like the body. I like to design everything to do with the body.</a>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"></div>
                                <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 md-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-post blog-post-style1 text-center text-md-left">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                <a href="blog-post-layout-02.html">
                                    <img src="images/latest-blog6.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-details">
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">20 April 2017 | by <a href="blog-classic.html" class="text-link-dark-gray">Herman Miller</a></span>
                                <a href="blog-post-layout-02.html" class="post-title text-medium text-extra-dark-gray width-90 md-width-100 d-block">Styles come and go. Design is a language, not a style.</a>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"></div> 
                                <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 sm-margin-30px-bottom last-paragraph-no-margin sm-clear-both wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-post blog-post-style1 text-center text-md-left">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                <a href="blog-post-layout-03.html">
                                    <img src="images/latest-blog7.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-details">
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">15 march 2017 | by <a href="blog-classic.html" class="text-link-dark-gray">Hugh Macleod</a></span>
                                <a href="blog-post-layout-03.html" class="post-title text-medium text-extra-dark-gray width-90 md-width-100 d-block">Recognizing the need is the primary condition for design.</a>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"></div>
                                <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                    <!-- start blog post item -->
                    <div class="col-12 col-lg-3 col-md-6 last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-post blog-post-style1 text-center text-md-left">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                <a href="blog-post-layout-04.html">
                                    <img src="images/latest-blog8.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-details">
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">10 march 2017 | by <a href="blog-classic.html" class="text-link-dark-gray">Jay Benjamin</a></span>
                                <a href="blog-post-layout-04.html" class="post-title text-medium text-extra-dark-gray width-90 md-width-100 d-block">Get in over your head as often and as joyfully as possible.</a>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"></div>
                                <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                </div>
            </div>
        </section>
        <!-- end latest blog section -->
        <!-- start footer --> 
        <footer class="footer-classic-dark bg-extra-dark-gray padding-five-bottom sm-padding-30px-bottom">
            <div class="bg-dark-footer padding-50px-tb sm-padding-30px-tb">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- start slogan -->
                        <div class="col-lg-4 col-md-5 text-center alt-font sm-margin-15px-bottom">
                            London based highly creative studio
                        </div>
                        <!-- end slogan -->
                        <!-- start logo -->
                        <div class="col-lg-4 col-md-2 text-center sm-margin-10px-bottom">
                            <a href="index.html"><img class="footer-logo" src="images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="Pofo"></a>
                        </div>
                        <!-- end logo -->
                        <!-- start social media -->
                        <div class="col-lg-4 col-md-5 text-center">
                            <span class="alt-font margin-20px-right">On social networks</span>
                            <div class="social-icon-style-8 d-inline-block vertical-align-middle">
                                <ul class="small-icon mb-0">
                                    <li><a class="facebook text-white-2" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a class="twitter text-white-2" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google text-white-2" href="https://plus.google.com/" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a class="instagram text-white-2" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end social media -->
                    </div>
                </div>
            </div>
            <div class="footer-widget-area padding-five-top padding-30px-bottom sm-padding-30px-top">
                <div class="container">
                    <div class="row">
                        <!-- start about -->
                        <div class="col-lg-3 col-md-6 widget md-margin-30px-bottom text-center text-md-left last-paragraph-no-margin">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">About Agency</div>
                            <p class="text-small width-95 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the and typesetting industry. </p>
                        </div>
                        <!-- end about -->
                        <!-- start blog post -->
                        <div class="col-lg-3 col-md-6 widget md-margin-30px-bottom">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600 text-center text-md-left">Latest Blog Post</div>
                            <ul class="latest-post position-relative">
                                <li class="media border-bottom border-color-medium-dark-gray">
                                    <figure>
                                        <a href="blog-post-layout-01.html"><img src="images/latest-blog2.jpg" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-post-layout-01.html" class="d-block mb-1">Design is not just what looks...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                                </li>
                                <li class="media border-bottom border-color-medium-dark-gray">
                                    <figure>
                                        <a href="blog-post-layout-02.html"><img src="images/latest-blog3.jpg" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-post-layout-02.html" class="d-block mb-1">A lot of care, effort & passion...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                                </li>
                                <li class="media">
                                    <figure>
                                        <a href="blog-post-layout-03.html"><img src="images/latest-blog4.jpg" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-post-layout-03.html" class="d-block mb-1">I love making the stuff, that's...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                                </li>
                            </ul>
                        </div>
                        <!-- end blog post -->
                        <!-- start newsletter -->
                        <div class="col-lg-3 col-md-6 widget md-margin-30px-bottom text-center text-md-left">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">Subscribe Newsletter</div>
                            <p class="text-small width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <form id="subscribenewsletterform" action="javascript:void(0)" method="post">
                                <div class="position-relative newsletter width-95">
                                    <div id="success-subscribe-newsletter" class="mx-0"></div>
                                    <input type="text" id="email" name="email" class="bg-transparent text-small m-0 border-color-medium-dark-gray" placeholder="Enter your email...">
                                    <button id="button-subscribe-newsletter" type="submit" class="btn btn-arrow-small position-absolute border-color-medium-dark-gray"><i class="fas fa-caret-right no-margin-left"></i></button>
                                </div>   
                            </form>
                        </div>
                        <!-- end newsletter -->
                        <!-- start instagram -->
                        <div class="col-lg-3 col-md-6 widget md-margin-5px-bottom text-center text-md-left">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">Follow us Instagram</div>
                            <div class="instagram-follow-api">
                                <ul id="instaFeed-footer"></ul>
                            </div>
                        </div>
                        <!-- end instagram -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-bottom border-top border-color-medium-dark-gray padding-30px-top">
                    <div class="row">
                        <!-- start copyright -->
                        <div class="col-lg-6 col-md-6 text-small text-md-left text-center">POFO - Portfolio Concept Theme</div>
                        <div class="col-lg-6 col-md-6 text-small text-md-right text-center">&COPY; 2019 POFO is Proudly Powered by <a href="http://www.themezaa.com/" target="_blank" title="ThemeZaa">ThemeZaa</a></div>
                        <!-- end copyright -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>

<!-- Mirrored from www.themezaa.com/html/pofo/home-classic-corporate.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 May 2019 07:10:04 GMT -->
</html>