<!DOCTYPE html>
<html>
  <head>
    <title>Renessa</title>

    <!-- meta -->
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/owl.transitions.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/home/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/home/css/custom.css') }}">

      <!-- js -->
      <script src="{{ asset('assets/home/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/home/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/home/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('assets/home/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/script.js') }}"></script>
    <script src="{{ asset('assets/home/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/jquery.actual.min.js') }}"></script>
  </head>

  <body>
    <div id="wrapper">
      <div id="overlay-1">
        <section id= "navigation">
          <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
              <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="ion-navicon"></span>
                    </button>
                    <a class="navbar-brand" href="#">Renessa</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#about">Tentang Kami</a></li>
                      <li><a href="#our_service">Kegiatan</a></li>
                      <li><a href="#team">pembicara</a></li>
                      <li><a href="#portfolio">Register</a></li>
                      <li><a href="#price_table">Syarat & Ketentuan</a></li>
                      <li><a href="#blog">Informasi Registrasi</a></li>
                      <li><a href="#testimonial">Testimonials</a></li>
                      <li><a href="#contact">Kontak Kami</a></li>
                  </ul>
                </div>  <!-- collapse navbar-collapse -->
              </div>  <!-- container-fluid -->
          </nav>  <!-- navbar -->
        </section>  <!-- #navigation -->
        <section id="starting">
          <div class="text-center starting-text">
            <h1 class="rene">RENESSA</h1>
            <h2>Welcome to our world</h2>
          </div>
        </section>
        <div id="bottom" class="bottom text-center">
              <a href="#about"><i class="ion-ios7-arrow-down"></i></a>
          </div>
      </div><!-- overlay-1 -->
    </div>  <!-- wrapper -->    
      
    <!-- About Us -->
    <section id="about">
      <div class="container">
        <div class="row text-center" id="heading">
          <div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
            <h3>About Us</h3>
                    <p>We are here, Nothing to fear</p>
                    <hr class="full">
                    <br/>
          </div>
        </div>  <!-- row -->
        <div class="row about-us-text">
          <div class="col-md-8 col-md-offset-2">
            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>  <!-- row -->
        <div class="row main_content">
          <div class="col-md-4 wow animated zoomIn" data-wow-delay="0.1s">
            <figure>
              <img class="pro img-responsive center-block" src="{{ asset('assets/home/img/3-col-icons-web.png')}}">
            </figure>
            <h5 class="text-center">Web Development</h5>
            <div class="row">
              <div class="col-xs-12 text-center" style="border-right: 1px solid #f4f4f4">
                                <div style="display: inline; width: 60px; height: 60px;">
                                    <input type="text" class="knob" data-readonly="true" value="90" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; /* color: rgb(57, 204, 204); */ padding: 0px; -webkit-appearance: none; background: none;">
                                </div>
                            </div>  <!-- col-xs-12 -->
            </div>  <!-- row -->
          </div>  <!-- col-md-4 -->

          <div class="col-md-4 wow animated zoomIn" data-wow-delay="0.1s">
            <figure>
              <img class="pro img-responsive center-block" src="{{ asset('assets/home/img/3-col-icons-android.png')}}">
            </figure>
            <h5 class="text-center">Android Development</h5>
            <div class="row">
              <div class="col-xs-12 text-center" style="border-right: 1px solid #f4f4f4">
                              <div style="display: inline; width: 60px; height: 60px;">   
                                <input type="text" class="knob" data-readonly="true" value="80" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; /* color: rgb(57, 204, 204); */ padding: 0px; -webkit-appearance: none; background: none;">
                              </div>
                          </div>  <!-- col-xs-12 -->
            </div>  <!-- row -->
          </div>  <!-- col-md-4 -->

          <div class="col-md-4 wow animated zoomIn" data-wow-delay="0.1s">
            <figure>
              <img class="pro img-responsive center-block" src="{{ asset('assets/home/img/3-col-icons-iphone.png')}}">
            </figure>
            <h5 class="text-center">iOS Development</h5>
            <div class="row">
              <div class="col-xs-12 text-center" style="border-right: 1px solid #f4f4f4">
                              <div style="display: inline; width: 60px; height: 60px;">
                                  <input type="text" class="knob" data-readonly="true" value="75" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; text-align: center; /* color: rgb(57, 204, 204); */ padding: 0px; -webkit-appearance: none; background: none;">
                            </div>  
                        </div>  <!-- col-xs-12 -->
            </div>  <!-- row -->
          </div>  <!-- col-md-4 -->
        </div><!-- row main_content -->
      </div>  <!-- container -->
    </section>  <!-- about us -->

    <!-- Our service -->
    <section id="our_service">
      <div class="container">
        <div class="row text-center" id= "heading">
              <div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id= "heading-text">
                <h3>Our Services</h3>
                    <p>We are lucky to service people like you</p>
                    <hr class= "full">
                    <br/>
              </div>
            </div>
          <div class="main_content">
            <div class="services">
                <div class="row">
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-rocket fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Web Application</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-desktop fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Web designing</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-th fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Graphics Designing</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                </div>  <!-- row -->
                <div class="row">
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-gamepad fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Game Development</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-lightbulb-o fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Creative Ideas</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-stack-overflow fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Support</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                </div>  <!-- row -->
          </div>  <!-- services -->
        </div>  <!-- main_content -->
      </div>  <!-- container -->
    </section>  <!-- our_service -->

    <!-- Our Team -->
      <section id="team">
        <div class="container">
          <div class="team-members">
            <div class="row text-center" id="heading">
              <div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
                  <h3>Our Team</h3>
                      <p>We can satisfy your demand</p>
                      <hr class="full">
                      <br/>
                </div>
            </div>
            <div class="row main_content">
              <div class="col-md-4 col-sm-6 text-center">
                <div class="row wow animated zoomIn" data-wow-delay="0.1s">
                  <div class="col-md-8 col-md-offset-2">
                    <img class="img-circle img-responsive center-block" src="img/Syed-Rezwanul-Haque.jpg" alt="Syed Rezwanul Haque Rubel">
                  </div>
                </div>
                  <h4 class="wow animated fadeInUp" data-wow-delay= "0.2s">Syed Rezwanul Haque Rubel</h4>
                  <p class= "member-title wow animated fadeIn" data-wow-delay= "0.3s">Project Manager</p>
                  <p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.4s">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna hifd.</p>
                  <div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s">
                    <div class= "team-member-contact">
                      <a href="#" data-toggle="tooltip" title="Contact with Facebook" class= "team-facebook">
                        <i class="fa fa-facebook"></i>
                      </a>
                    
                      <a href="#" data-toggle="tooltip" title="Contact with Twitter" class= "team-twitter">
                        <i class="fa fa-twitter"></i>
                      </a>
                    
                      <a href="#" data-toggle="tooltip" title="Contact with Google-plus"class= "team-google-plus">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </div>  
                  </div>
              </div>  <!-- col-md-4 -->
              <div class="col-md-4 col-sm-6 text-center">
                <div class= "row wow animated zoomIn" data-wow-delay="0.6s">
                  <div class= "col-md-8 col-md-offset-2">
                    <img class="img-circle img-responsive center-block" src="img/Shahjahan-Jewel.jpg" alt= "Shahjahan Jewel" >
                  </div>
                </div>
                  <h4 class= "wow animated fadeInUp" data-wow-delay= "0.7s">Shahjahan Jewel</h4>
                  <p class= "member-title wow animated fadeIn" data-wow-delay= "0.8s">Head Of Ideas</p>
                  <p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.9s">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                  <div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s"> 
                    <div class= "team-member-contact">
                      <a href="#" data-toggle="tooltip" title="Contact with Facebook" class= "team-facebook">
                        <i class="fa fa-facebook"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Contact with Twitter" class= "team-twitter">
                        <i class="fa fa-twitter"></i>
                      </a>
                      <a href="#" data-toggle="tooltip" title="Contact with Google-plus"class= "team-google-plus">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </div>
                  </div>
              </div>  <!-- col-md-4 -->
              <div class="col-md-4 col-sm-6 text-center">
                <div class= "row wow animated zoomIn" data-wow-delay="1.1s">
                  <div class="col-md-8 col-md-offset-2">
                    <img class="img-circle img-responsive center-block" src="img/nathan.jpg" alt= "Nathan Thomas Paul" >
                  </div>
                </div>
                  <h4 class="wow animated fadeInUp" data-wow-delay= "1.2s">Nathan Thomas Paul</h4>
                  <p class= "member-title wow animated fadeIn" data-wow-delay= "1.3s">Client Relations Manager</p>
                  <p class= "team-member-description wow animated fadeIn" data-wow-delay= "1.4s">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum.</p>
                  <div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s"> 
                    <div class= "team-member-contact">
                      <a href="#" data-toggle="tooltip" title="Contact with Facebook" class= "team-facebook">
                        <i class="fa fa-facebook"></i>
                      </a>
                    
                      <a href="#" data-toggle="tooltip" title="Contact with Twitter" class= "team-twitter">
                        <i class="fa fa-twitter"></i>
                      </a>
                    
                      <a href="#" data-toggle="tooltip" title="Contact with Google-plus"class= "team-google-plus">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </div>
                  </div>
                </div>  <!-- col-md-4 -->
            </div> <!-- row main_content -->
          </div>  <!-- team-members -->
      </div>  <!-- container -->
      </section>  <!-- team -->

    <!-- Portfolio -->
      <section id="portfolio">
       <div class="container">
        <div class="row text-center" id= "heading">
              <div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id= "heading-text">
                <h3>REGISTRASI</h3>
                    <p>Silahkan Pilih Registrasi</p>
                    <hr class= "full">
                    <br/>
              </div>
            </div>
          <div class="main_content">
            <div class="services">
                <div class="row">
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <a href="{{url('registrasi/klinik')}}" title="">
                        <i class="fa fa-rocket fa-5x"></i>
                      </a>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Registrasi Klinik</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <a href="{{url('registrasi/seminar')}}" title="">
                        <i class="fa fa-rocket fa-5x"></i>
                      </a>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Registrasi Seminar</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <a href="{{url('registrasi/pameran')}}" title="">
                        <i class="fa fa-rocket fa-5x"></i>
                      </a>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Registrasi Pameran</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                </div>  <!-- row -->
          </div>  <!-- services -->
        </div>  <!-- main_content -->
      </div>  <!-- container -->
      </section>  <!-- portfolio -->
    
    <!-- Price-Table -->
      <section id="price_table">
        <div class="container">
          <div class="row text-center" id="heading">
            <div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
                <h3>Price Table</h3>
                    <p>So flexible, More comfortable</p>
                    <hr class="full">
                    <br/>
              </div>
          </div>  <!-- row -->
          <div class="row main_content">
            <ul class="price-table-chart">
                        <li>
                        <a href="#">
                            <strong>Free</strong>
                            <span class="price_table-description">1 Website</span> 
                            <span class="price_table-description">1 Year Updates</span> 
                            <span class="price_table-description">No Email Support</span>
                            <big class="price_table-price">$0</big>
                            <span class="price_table-button">Buy Now</span>
                        </a>
                    </li>
                
                    <li>
                        <a href="#">
                            <strong>Business</strong>
                            <span class="price_table-description">Unlimited Websites</span> 
                            <span class="price_table-description">1 Year Updates</span> 
                            <span class="price_table-description">1 Year Email Support</span>
                            <big class="price_table-price">$90</big>
                            <span class="price_table-button">Buy Now</span>
                        </a>
                    </li>
                
                    <li>
                        <a href="#">
                            <strong>Premium</strong>
                            <span class="price_table-description">Unlimited Websites</span> 
                            <span class="price_table-description">Lifetime Updates</span> 
                            <span class="price_table-description">Lifetime Email Support</span>
                            <big class="price_table-price">$190</big>
                            <span class="price_table-button">Buy Now</span>
                        </a>
                    </li>
                </ul>
          </div>  <!-- row main_content -->
        </div>  <!-- container -->
      </section>  <!-- price_table -->

    <!-- Blog -->
      <section id="blog">
        <div class="container">
        <div class="row text-center" id= "heading">
              <div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id= "heading-text">
                <h3>Our Services</h3>
                    <p>We are lucky to service people like you</p>
                    <hr class= "full">
                    <br/>
              </div>
            </div>
          <div class="main_content">
            <div class="services">
                <div class="row">
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-rocket fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Web Application</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-desktop fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Web designing</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-th fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Graphics Designing</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                </div>  <!-- row -->
                <div class="row">
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-gamepad fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Game Development</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-lightbulb-o fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Creative Ideas</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                  <div class="col-sm-4 service">
                    <div class="service-icon text-center">
                      <i class="fa fa-stack-overflow fa-5x"></i>
                    </div>
                    <div class="about-service">
                      <h3 class="text-center">Support</h3>
                      <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud 
                      </p>
                    </div>
                  </div>  <!-- col-sm-4 -->
                </div>  <!-- row -->
          </div>  <!-- services -->
        </div>  <!-- main_content -->
      </div>  <!-- container -->
      </section>  <!-- blog -->

    <!-- Clients -->
      <section id= "testimonial">
        <div class= "container">
          <div class= "row text-center" id= "heading">
            <div class= "bg-image col-md-12">
              <div class= "col-md-6 col-md-offset-3 wow animated zoomInDown" id= "heading-text">
                  <h3>Testimonials</h3>
                      <p>Their satisfication, Our inspiration.</p>
                      <hr class= "full">
                      <br/>
                </div>
            </div>
          </div>
          <div class= "row main_content">
            <div class= "col-md-6 col-md-offset-3">
              <div id="client-speech" class="owl-carousel owl-theme">
              <div class="item">
                <div class= "row">
                  <div class= "col-md-6 col-md-offset-3">
                    <img class= "img-circle img-responsive center-block" src="{{ asset('assets/home/img/client1.png')}}">
                  </div>  
                  <div class= "col-md-12">
                    <p class= "client-comment text-center">
                      When you form a team, why do you try to form a team? Because teamwork builds trust and trust builds speed.
                    </p>
                  </div>
                </div>
                <div class= "row text-center">
                  <p class= "client-name text-center"> ----- Noona Nuengthida Sophon</p>
                </div>
              </div>
              <div class="item">
                <div class= "row">
                  <div class= "col-md-6 col-md-offset-3">
                    <img class= "img-circle img-responsive center-block" src="{{ asset('assets/home/img/client2.jpg')}}">
                  </div>
                  <div class= "col-md-12">
                    <p class= "client-comment text-center">
                      I am constantly being asked about individuals.&nbsp;The only way to win is as a team. Football is not about one or two or three star players.
                    </p>
                  </div>
                </div>
                <div class= "row text-center">
                  <p class= "client-name">-----Md. Aminul Islam Bhuiyan</p>
                </div>
              </div>
              <div class="item">
                <div class= "row">
                  <div class= "col-md-6 col-md-offset-3">
                    <img class= "img-circle img-responsive center-block" src="img/client3.png">
                  </div>
                  <div class= "col-md-12">
                    <p class= "client-comment text-center">
                      Individual commitment to a group effort- that is what makes a team work, a company work, a society work, a civilisation work.
                    </p>
                  </div>
                </div>
                <div class= "row text-center">
                  <p class= "client-name">-----  Jenifar Pink</p>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>  
      </section>  <!-- clients -->

    <!-- contact -->
      <section id= "contact">
        <div class= "container">
        <div class="row text-center" id= "heading">
          <div class= "bg-image">
            <div class= "col-lg-6 col-lg-offset-3 share-text wow animated zoomInDown" id= "heading-text">
              <h3 class= "text-center">Stay Connected</h3>
                      <p>We want to connect people like you.</p>
                      <hr class= "full">
                      <br/>
            </div>
          </div>
        </div>
        <div class= "row text-center main_content">
          <div class= "col-md-6 col-md-offset-3 text-center">
            <form method="post" action="#">
              <div class= "form">
                <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                      <i class="fa fa-user fa-fw"></i>
                    </span>
                  <input class="form-control" type="text" placeholder="Name" required>
                </div>
                <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                      <i class="fa fa-envelope-o fa-fw"></i>
                    </span>
                  <input class="form-control" type="text" placeholder="Email address" required>
                </div>
                <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon">
                      <i class="fa fa-tags fa-fw"></i>
                    </span>
                  <input class="form-control" type="text" placeholder="Subject">
                </div>
              </div>
              <div class="input-group margin-bottom-sm">
                  <span class="input-group-addon">
                    <i class="fa fa-comment-o fa-fw"></i>
                  </span>
                <textarea class="form-control" rows="6" type= "text" placeholder="Your Message" required></textarea>
              </div>
              <input class="btn btn-primary send" type="submit" value="Send Message">
            </form>
          </div>  
        </div>
        <div class= "row">
          <div class= "col-md-6 col-md-offset-3 text-center">
            <ul class="socials-icons">
              <li>
                <a href="#" data-toggle="tooltip" title="Share in Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" title="Share in Twitter" class="twitter"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" title="Share in Google +" class="google-plus"><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" title="Share in Instagram" class="instagram"><i class="fa fa-instagram"></i></a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" title="Share in Pinterest" class="pinterest"><i class="fa fa-pinterest"></i></a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" title="Connect with Skype" class="skype"><i class="fa fa-skype"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </section>  <!-- contacts --> 
      
    <!-- footer -->
    <section id= "footer" class= "main-footer">
      <div class= "row">
        <div class= "logo text-center">
          <h1>Renessa</h1>
        </div>
      </div>
      <div class= "row">
        <div class= "copyright text-center">
          <p> © 2014 Technext. Designed and Developed by <a href="http://themewagon.com"><span class= "theme">Themewagon</span></a></p>
        </div>
      </div>
    </section><!-- footer -->

    <!-- js -->
    <script>
      $(document).ready(function() {
          $("#client-speech").owlCarousel({
            autoPlay: 3000,
              navigation : false, // Show next and prev buttons
              slideSpeed : 700,
              paginationSpeed : 1000,
              singleItem:true
          });
      });
    </script>
    <script>
      new WOW().init();
    </script>
    <script>
      $( function() {
          // init Isotope
          var $container = $('.isotope').isotope
          ({
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
          });


          // bind filter button click
          $('#filters').on( 'click', 'button', function() 
          {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            $container.isotope({ filter: filterValue });
         });
  
        // change is-checked class on buttons
          $('.button-group').each( function( i, buttonGroup ) 
          {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() 
            {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
            });
          });
        
      });
    </script>
        <script src="{{ asset('assets/home/js/jquery-ui-1.10.3.min.js') }}"></script>
        <script src="{{ asset('assets/home/js/jquery.knob.js') }}"></script>
        <script src="{{ asset('assets/home/js/daterangepicker.js') }}"></script>
        <script src="{{ asset('assets/home/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <script src="{{ asset('assets/home/js/dashboard.js') }}"></script>
       
  </body>
</html>
