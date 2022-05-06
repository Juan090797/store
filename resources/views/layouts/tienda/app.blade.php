<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>GrupoMarquina</title>
        @include('layouts.tienda.styles')
        @livewireStyles
    </head>
    <body>
        <!-- Page Preloder -->
        <div id="preloder"><div class="loader"></div></div>
        <!-- Header Section Begin -->
        <header class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{url('/tienda')}}">
                        <svg class="fill-current text-gray-800 mr-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z"></path>
                        </svg>
                        <strong>GRUPO MARQUINA</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/tienda')}}">Tienda<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Nostros</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">
                                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <circle fill="none" cx="12" cy="7" r="3"></circle>
                                            <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z"></path>
                                            <circle cx="10.5" cy="18.5" r="1.5"></circle>
                                            <circle cx="17.5" cy="18.5" r="1.5"></circle>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Header Section End -->
        <!-- Hero Section Begin -->
        <section class="pb-5">
            <div class="container">
                <img src="{{ asset('plugins/img/store_1.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </section>
        <!-- Hero Section End -->
        <!-- Categories Section Begin -->
        <section class="categories">
            <div class="container">
                <div class="row">
                    <div class="categories__slider owl-carousel">
                        <div class="col-lg-3 col-md-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset('plugins/img/categories/cat1.jpg') }}">
                                <h5><a href="#">Electronicos</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset('plugins/img/categories/cat2.jpg') }}">
                                <h5><a href="#">Computadoras</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset('plugins/img/categories/cat3.jpg') }}">
                                <h5><a href="#">Smart Home</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset('plugins/img/categories/cat4.jpg') }}">
                                <h5><a href="#">Automotriz</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset('plugins/img/categories/cat5.jpg') }}">
                                <h5><a href="#">Sotfware</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section End -->
        <livewire:tienda.lista-productos />
        <!-- Featured Section End -->
        <!-- Banner Begin -->
        <div class="banner pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{ asset('plugins/img/banner/banner-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{ asset('plugins/img/banner/banner-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section Begin -->
        <footer class="footer spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                                <a href="{{url('/tienda')}}"><img src="{{ asset('plugins/img/logo_grupomarquina4.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1"></div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__widget">
                            <div class="footer__widget__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyright">
                            <div class="footer__copyright__text"><p>
                                    Derechos de autor &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados</p></div>
                            <div class="footer__copyright__payment"><img src="{{ asset('plugins/img/payment-item.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
        <!-- Js Plugins -->
        <a href="https://api.whatsapp.com/send?phone=51989688456&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20" class="float" target="_blank"><i class="fa fa-whatsapp my-float"></i></a>
        @include('layouts.tienda.scripts')
        @livewireScripts
    </body>
</html>
