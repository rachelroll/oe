@extends('layouts.master')
@section('content')
    <body>
    <nav class="nav-extended ">
        <div class="nav-background">
            <div class="pattern active" style="background-image: url('//cdn.shopify.com/s/files/1/2030/2737/files/icon-seamless_ef568d79-394b-49ab-a3c5-128827d788e8.png?v=1496294246');"></div>
        </div>
        <div class="nav-wrapper container">
            <a href="/" itemprop="url" class="brand-logo site-logo">Gallery</a>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class="site-nav--active active">
                    <a href="/" class="site-nav__link">Home</a>
                </li>
                <li class="site-nav--has-submenu">
                    <a href="#" class="site-nav__link dropdown-button" data-activates="features-dropdown" data-belowOrigin="true" data-constrainWidth="false" data-hover="true">Features<i class="material-icons right">arrow_drop_down</i>
                    </a>
                    <ul id="features-dropdown" class="site-nav__submenu dropdown-content">
                        <li>
                            <a href="/pages/dark-theme" class="site-nav__link">Dark Theme</a>
                        </li>
                        <li>
                            <a href="/collections/dark-theme" class="site-nav__link">Dark Collection</a>
                        </li>
                        <li>
                            <a href="/collections/fillscreen-style" class="site-nav__link">Fillscreen</a>
                        </li>
                        <li>
                            <a href="/collections/horizontal" class="site-nav__link">Horizontal</a>
                        </li>
                        <li>
                            <a href="/collections/all-products" class="site-nav__link">No Header</a>
                        </li>
                        <li>
                            <a href="/pages/contact-us" class="site-nav__link">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/blogs/news" class="site-nav__link">Blog</a>
                </li>
                <li><a href="/cart"><i class="material-icons left">shopping_cart</i>Cart</a>
                </li>
                <li><a class="fullscreen-search" href="#"><i class="material-icons">search</i></a>
                </li>
                <li>
                    <a href="/account/login" id="customer_login_link">Log in</a>
                </li>
                <li>
                    <a href="/account/register" id="customer_register_link">Create account</a>
                </li>
            </ul>
        </div>
        <div class="nav-header center">
            <!-- Show Carousel instead of default page titles -->
            <h1>I make things</h1>
            <div class="tagline">Online Shop</div>
        </div>
    </nav>
        <div class="container">




            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">Logo</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">JavaScript</a></li>
                    </ul>
                </div>
            </nav>
            <div id="index-banner" class="parallax-container">
                <div class="section no-pad-bot">
                    <div class="container">
                        <br><br>
                        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
                        <div class="row center">
                            <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                        </div>
                        <div class="row center">
                            <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
                        </div>
                        <br><br>

                    </div>
                </div>
                <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
            </div>
        </div>


        <div class="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Speeds up development</h5>

                            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">User Experience Focused</h5>

                            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Speeds up development</h5>

                            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">User Experience Focused</h5>

                            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <h3>FEATURED COLLECTION</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eius error fugiat fugit nam officiis perferendis quaerat tempore. Aut blanditiis esse facilis impedit molestiae nam omnis optio quam suscipit tenetur!</p>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Contact Us</h4>
                    <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
    </div>

    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Company Bio</h5>
                    <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Settings</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
            </div>
        </div>
    </footer>


    </body>
    @stop