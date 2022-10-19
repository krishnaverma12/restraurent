@extends('include.main')
@section('content')
<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="row">

              <div class="owl-carousel owl-theme">
                   <div class="item item-first">
                        <div class="caption">
                             <div class="container">
                                  <div class="col-md-8 col-sm-12">
                                       <h3>Eatery Cafe &amp; Restaurant</h3>
                                       <h1>Our mission is to provide an unforgettable experience</h1>
                                       <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our chef</a>
                                  </div>
                             </div>
                        </div>
                   </div>

                   <div class="item item-second">
                        <div class="caption">
                             <div class="container">
                                  <div class="col-md-8 col-sm-12">
                                       <h3>Your Perfect Breakfast</h3>
                                       <h1>The best dinning quality can be here too!</h1>
                                       <a href="#menu" class="section-btn btn btn-default smoothScroll">Discover menu</a>
                                  </div>
                             </div>
                        </div>
                   </div>

                   <div class="item item-third">
                        <div class="caption">
                             <div class="container">
                                  <div class="col-md-8 col-sm-12">
                                       <h3>New Restaurant in Town</h3>
                                       <h1>Enjoy our special menus every Sunday and Friday</h1>
                                       <a href="#contact" class="section-btn btn btn-default smoothScroll">Reservation</a>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>

    </div>
</section>

<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">

              <div class="col-md-6 col-sm-12">
                   <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                             <h4>Read our story</h4>
                             <h2>We've been Making The Delicious Foods Since 1999</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                             <p>Fusce hendrerit malesuada lacinia. Donec semper semper sem vitae malesuada. Proin scelerisque risus et ipsum semper molestie sed in nisi. Ut rhoncus congue lectus, rhoncus venenatis leo malesuada id.</p>
                             <p>Sed elementum vel felis sed scelerisque. In arcu diam, sollicitudin eu nibh ac, posuere tristique magna. You can use this template for your cafe or restaurant website. Please tell your friends about <a href="https://plus.google.com/+templatemo" target="_parent">templatemo</a>. Thank you.</p>
                        </div>
                   </div>
              </div>

              <div class="col-md-6 col-sm-12">
                   <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img src="{{asset('frontend/images/about-image.jpg')}}" class="img-responsive" alt="">
                   </div>
              </div>
              
         </div>
    </div>
</section>
@endsection