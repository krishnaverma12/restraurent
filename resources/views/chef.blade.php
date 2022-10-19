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
     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="0.5">
        <div class="container">
             <div class="row">

                  <div class="col-md-12 col-sm-12">
                       <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2>Meet our chefs</h2>
                            <h4>They are nice &amp; friendly</h4>
                       </div>
                  </div>

                  <div class="col-md-4 col-sm-4">
                       <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{asset('frontend/images/team-image1.jpg')}}" class="img-responsive" alt="">
                                 <div class="team-hover">
                                      <div class="team-item">
                                           <h4>Duis vel lacus id magna mattis vehicula</h4> 
                                           <ul class="social-icon">
                                                <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                                <li><a href="#" class="fa fa-envelope-o"></a></li>
                                           </ul>
                                      </div>
                                 </div>
                       </div>
                       <div class="team-info">
                            <h3>New Catherine</h3>
                            <p>Kitchen Officer</p>
                       </div>
                  </div>

                  <div class="col-md-4 col-sm-4">
                       <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                            <img src="{{asset('frontend/images/team-image2.jpg')}}" class="img-responsive" alt="">
                                 <div class="team-hover">
                                      <div class="team-item">
                                           <h4>Cras suscipit neque quis odio feugiat</h4>
                                           <ul class="social-icon">
                                                <li><a href="#" class="fa fa-instagram"></a></li>
                                                <li><a href="#" class="fa fa-flickr"></a></li>
                                           </ul>
                                      </div>
                                 </div>
                       </div>
                       <div class="team-info">
                            <h3>Lindsay Perlen</h3>
                            <p>Owner &amp; Manager</p>
                       </div>
                  </div>

                  <div class="col-md-4 col-sm-4">
                       <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                            <img src="{{asset('frontend/images/team-image3.jpg')}}" class="img-responsive" alt="">
                                 <div class="team-hover">
                                      <div class="team-item">
                                           <h4>Etiam auctor enim tristique faucibus</h4>
                                           <ul class="social-icon">
                                                <li><a href="#" class="fa fa-github"></a></li>
                                                <li><a href="#" class="fa fa-google"></a></li>
                                           </ul>
                                      </div>
                                 </div>
                       </div>
                       <div class="team-info">
                            <h3>Isabella Grace</h3>
                            <p>Pizza Specialist</p>
                       </div>
                  </div>
                  
             </div>
        </div>
   </section>
@endsection