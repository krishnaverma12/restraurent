<!DOCTYPE html>
<html lang="en">
<head>

     <title>Eatery Cafe and Restaurant Template</title>
<!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
     <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
     <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('frontend/css/templatemo-style.css')}}">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{route('home')}}" class="navbar-brand">Eatery <span>.</span> Cafe</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="{{route('home')}}" class="smoothScroll">Home</a></li>
                         <li><a href="{{route('about')}}" class="smoothScroll">About</a></li>
                         <li><a href="{{route('chef')}}" class="smoothScroll">Chef</a></li>
                         <li><a href="{{route('menu')}}" class="smoothScroll">Menu</a></li>
                         <li><a href="{{route('contact')}}" class="smoothScroll">Contact</a></li>
                         <li><a href="{{route('gallery')}}" class="smoothScroll">Gallery</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="tel:6307233365"><i class="fa fa-phone"></i> Call Now!  </a></li>
                         <a href="#footer" class="section-btn">Reserve a table</a>
                    </ul>
               </div>

          </div>
     </section>