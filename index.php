<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>::Kalaiselvan | Bio-Data::</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Favicon-->
  <link rel="shortcut icon" href="images/favicon-64.png" >

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/font/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/libs/materialize/css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/css/bootstrap.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/css/animate.min.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/sweetalert/sweet-alert.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
  <link rel="stylesheet" href="assets/libs/owl-carousel/owl.theme.css" media="screen,projection" />

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <!-- Choose your default colors -->
  <link rel="stylesheet" href="assets/css/colors/color1.css">
  <!-- <link rel="stylesheet" href="assets/css/colors/color2.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color3.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color4.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color5.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color6.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color7.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/colors/color8.css"> -->

  <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
  <![endif]-->
</head>

<body>

<?php 

if(isset($_REQUEST['hub_challenge'])){
	$challenge=$_REQUEST['hub_challenge'];
	$token=$_REQUEST['hub_verfiy_token'];	
}
if($token=="kalaiselvan_chat_bot_challenge_token"){
	echo $challenge;
}
?>

  <!-- start option panel -->
  <div id="switch">
      <div class="content-switcher">
          <p class="brand-text">Color Options:</p>
          <ul class="header">
              <li><a href="#" onclick="setActiveStyleSheet('color1'); return false;" class="button color switch" style="background-color:#00bcd4"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color2'); return false;" class="button color switch" style="background-color:#ff4081"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color3'); return false;" class="button color switch" style="background-color:#C043D5"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color4'); return false;" class="button color switch" style="background-color:#73D077"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color5'); return false;" class="button color switch" style="background-color:#FE7448"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color6'); return false;" class="button color switch" style="background-color:#1ABBAC"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color7'); return false;" class="button color switch" style="background-color:#EAB82E"></a></li>
              <li><a href="#" onclick="setActiveStyleSheet('color8'); return false;" class="button color switch" style="background-color:#799CAC"></a></li>
          </ul>
          <p class="brand-text">Menu Options:</p>
          <div class="menu-select" title="The menu will display in all devices">
              <input type="radio" id="menu1" name="intelligent-menu">
              <label for="menu1">Fixed</label>
          </div>
          <div class="menu-select" title="The menu will display or hide in all devices depending on scroll">
              <input type="radio" id="menu2" name="intelligent-menu" checked="checked">
              <label for="menu2">Intelligent ( Auto Hide )</label>
          </div>
          <div class="menu-select" title="Fixed menu will apply in non-mobile devices and Intelligent menu will apply in mobile devices">
              <input type="radio" id="menu3" name="intelligent-menu">
              <label for="menu3">Mobile Intelligent</label>
          </div>
          <div id="hide">
              <i class="fa fa-times"></i>
          </div>
      </div>
  </div>
  <div id="show" class="btn-floating waves-effect waves-light btn-large brand-text">
      <i class="fa fa-cog"></i>
  </div>
  <!-- end option panel -->

  <!-- Preloader --> 
    <div id="preloader">
      <div class="loader">
            <svg class="circle-loader" height="50" width="50">
              <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
            </svg>
        </div>    
    </div><!--preloader end-->

  <!-- Main Container -->
  <main id="app" class="main-section">
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home"><img src="images/logo.png" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  <ul class="right static-menu">
                    <li class="search-form-li">
                      <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                      <div class="search-form-wrap hide">
                        <form action="#" class="">
                          <input type="search" class="search">
                          <button type="submit"><i class="mdi-action-search"></i>
                          </button>
                        </form>
                      </div>
                    </li>
                    <li>
                      <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                        <i class="mdi-navigation-more-vert right"></i>
                      </a>
                    </li>
                  </ul>
                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="images/person.jpg" alt="">
                        </div>
                        <h3>Kalaiselvan</h3>
                        <h5>Full Stack Developer</h5>
                      </div>
                    </li><!-- mini profile end-->


                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>About Me</a>
                    </li>
                    <li><a href="#resume" data-section="#resume" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Resume</a>
                    </li>
					  <!--       <li><a href="#portfolio" data-section="#portfolio" class="menu-smooth-scroll"><i class="fa fa-briefcase fa-fw"></i>Portfolio</a>
                    </li>
                   <li><a href="#team" data-section="#team" class="menu-smooth-scroll"><i class="fa fa-users fa-fw"></i>Team</a>
                    </li>
                   <li><a href="#testimonial" data-section="#testimonial" class="menu-smooth-scroll"><i class="fa fa-comments fa-fw"></i>Testimonial</a>
                    </li>
                    <li><a href="#blog" data-section="#blog" class="menu-smooth-scroll"><i class="fa fa-pencil fa-fw"></i>Blog</a>
                    </li>-->
                    <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Contact</a>
                    </li>
                  </ul>
                  <ul id="dropdown1" class="inline-menu submenu-ul dropdown-content">
                    <li>Home</li>
                   <!-- <li><a href="blog.html">All Blog</a>
                    </li>
                    <li><a href="blog-with-sidebar.html">Blog with Sidebar</a>
                    </li>
                    <li><a href="single.html">Single Blog</a>
                    </li>-->
                  </ul>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </header>
    <!-- #header  navigation end -->

    <!-- Home Section start -->
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-inner">
                  <div class="center-align home-content">
                    <h1 class="home-title">HI! I'm <span>Kalaiselvan</span></h1>
                    <h2 class="home-subtitle">Full Stack Developer from Bangalore, India</h2>
                    <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Hire Me <i class="mdi-content-send left"></i>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .container end -->
        <div class="section-call-to-area">
          <div class="container">
            <div class="row">
              <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                <i class="mdi-navigation-expand-more"></i>
              </a>
            </div>
          </div>
          <!-- .container end -->
        </div>
      </div>
    </section>
    <!-- #home Section end -->

    <!-- About Section start -->
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix about-inner">

            <div class="col-sm-12 col-md-4">
              <div class="person-about">
                <h3 class="about-subtitle">My Story</h3>
                <p>Hello, I’m a Full Stack Developer [Front/Back] End Developer from Bangalore, India. I hold a master degree of Computer Application from the Anna University Chennai. <br />
                </p>
                <a class="waves-effect waves-light btn-large brand-bg white-text" href="assets/pdf/kalaiselvana.pdf" target="_blank">
					<i class="mdi-content-archive left"></i> Download Resume</a>
              </div>
            </div>
            <!-- about me description -->

            <div class="col-sm-6 col-md-4">
              <div class="person-img wow fadeIn">
                <img class="z-depth-1" src="images/person.jpg" alt="">
              </div>
            </div>
            <!-- about me image -->

            <div class="col-sm-6 col-md-4">
              <div class="person-info">
                <h3 class="about-subtitle">Personal Information</h3>
                <h5><span>Name :</span>Kalaiselvan</h5>
                <h5><span>Age :</span> 28 Years</h5>
                <!--<h5><span>Phone :</span> +919843742320, +919743637922</h5>-->
                <h5><span>Email :</span> kalai6095@gmail.com</h5>
                <h5><span>Address :</span>No.7 Rajeshwari building, Next to Ragavendra Apartment,E-city, Bangalore</h5>
				<h5><span>github  :</span><a href="https://github.com/kalai6095" target="_blank" >view</a></h5>
              </div>

              <div class="about-social">
                <ul>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
					  <a href="https://plus.google.com/117835471034106065850" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
                   </li>
                  <li>
                    <a href="https://in.linkedin.com/in/kalaiselvan-a-1431b08b" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-pinterest"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- about me info -->

          </div>
        </div>
      </div>
      <!-- .container end -->
    </section>
    <!-- #about Section end -->

    <!-- Resume Section start -->
    <section id="resume" class="scroll-section ">
      <section id="skill" class="root-sec white skill-wrap">
      <div class="sec-overlay">
        <div class="container">
          <div class="row">
            <div class="clearfix skill-inner">
              <div class="col-sm-12 col-md-3">
                <div class="skill-left">
                  <h2 class="title">Skills</h2>
                  <p class="regular-text">Man behind the gun, any sophisticated weapons. Human remains that taking the role. We are experienced in utilizing all resources.</p>
                </div>
              </div>

              <!-- skills container -->
              <div class="col-sm-12 col-md-6 col-md-offset-1">
                <div class="skill-right">
                  <div id="skillSlider" class="clearfix skill-graph">

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="100%">
                            <div class="skill-visiable">
                              <span class="skill-title">DHTML</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">100%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="90%">
                            <div class="skill-visiable">
                              <span class="skill-title">JavaScript/jquery</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">90%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="85%">
                            <div class="skill-visiable">
                              <span class="skill-title">CSS</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">85%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="75%">
                            <div class="skill-visiable">
                              <span class="skill-title">AngularJS</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">75%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="95%">
                            <div class="skill-visiable">
                              <span class="skill-title">Bootstrap</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">95%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="80%">
                            <div class="skill-visiable">
                              <span class="skill-title">gulp(Task runner)</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">80%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="75%">
                            <div class="skill-visiable">
                              <span class="skill-title">Java</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">75%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="80%">
                            <div class="skill-visiable">
                              <span class="skill-title">J2EE (jsp/servlet)</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">80%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="85%">
                            <div class="skill-visiable">
                              <span class="skill-title">MySQL</span>
                              <div class="hr-wrap">

                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">85%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="78%">
                            <div class="skill-visiable">
                              <span class="skill-title">Framework(Spring and Hibernate)</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">78%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->
					
					<!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="65%">
                            <div class="skill-visiable">
                              <span class="skill-title">Mean Stack (MangoDB Express Angular NodeJS)</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">65%</span>
                        </div>
                      </div>
                    </div>
					<!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="85%">
                            <div class="skill-visiable">
                              <span class="skill-title">SVN</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">85%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->
					<!-- single skill -->
                    <div class="single-skill">
                      <div class="after-li">
                        <div class="singel-hr">
                          <div class="singel-hr-inner" data-height="95%">
                            <div class="skill-visiable">
                              <span class="skill-title">git</span>
                              <div class="hr-wrap">
                                <div class="hrc"></div>
                              </div>
                            </div>
                          </div>
                          <span class="skill-count">95%</span>
                        </div>
                      </div>
                    </div>
                    <!-- /single skill-->

                    <!-- single skill -->
                  </div>
                </div>
              </div>
              <!-- /skills container -->
            </div>
          </div>
          <div class="btn-wrapp skl-ctrl">
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
            <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
          </div>
        </div>
      </div>
        <!-- .container end -->
      </section>

      <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
        <div class="container">
          <div class="row">
            <div class="experience-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head experience-text">
                    <div class="col-sm-12">
                      <h2 class="title">Experience</h2>
                      <p class="regular-text" style="display:none;">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="experienceSlider" class="clearfix card-element-wrapper">
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">December 2015 - Present</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/ghost_rider.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Executive<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Anthem Cellutions India pvt ltd</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Executive<i class="mdi-navigation-close right"></i></span>
                                  <p>Anthem Cellutions India pvt ltd</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div>
							<div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
								<div class="card">
									<div class="card-image waves-effect waves-block waves-light">
										<h2 class="left-align card-title-top">January 2015 - November 2015</h2>
										<div class="valign-wrapper card-img-wrap">
											<img class="activator" src="images/ghost_rider.jpg" alt="">
										</div>
									</div>
									<div class="card-content">
										<span class="card-title activator brand-text">Trainee<i class="mdi-navigation-more-vert right"></i></span>
										<p>Anthem Cellutions India pvt ltd</p>
									</div>
									<div class="card-reveal">
										<div class="rev-title-wrap">
											<span class="card-title activator brand-text">Trainee<i class="mdi-navigation-close right"></i></span>
											<p>Anthem Cellutions India pvt ltd</p>
										</div>
										<p class="rev-content">
											Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
										</p>
									</div>
								</div>
							</div>
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">August 2014 - December 2014</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/lion.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Full Stack Developer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Sprin Technosys</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Full Stack Developer<i class="mdi-navigation-close right"></i></span>
                                  <p>Sprin Technosys</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">January 2014 - June 2014</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/bull.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Web Developer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Cloud Dreams Technology</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">Web Developer<i class="mdi-navigation-close right"></i></span>
                                  <p>Cloud Dreams Technology</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div>
                        <!--  <div class="col-sm-4 cold-xs-12 single-card-box">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/beakers.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Windows Phone</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                  <p>Windows Phone</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4 cold-xs-12 single-card-box">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="images/kid.jpg" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Windows Phone</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                  <p>Windows Phone</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div>
                       --> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp exp-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
        <div class="container">
          <div class="row">
            <div class="education-inner">
              <div class="col-sm-12 col-md-10 card-box-wrap">
                <div class="row">
                  <div class="clearfix section-head education-text">
                    <div class="col-sm-12">
                      <h2 class="title">education</h2>
                      <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="overflow-hidden">
                      <div class="row">
                        <div id="educationSlider" class="clearfix card-element-wrapper">

                        <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2011 - 2014</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="images/grad-cap.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Masters of Computer Application<i class="mdi-navigation-more-vert right"></i></span>
                                <p>Hindusthan Institute of Technolgy Coimbatore.</p>
                              </div>
                              <!-- Reveal content-->
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
									<span class="card-title activator brand-text">Masters of Computer Application<i class="mdi-navigation-close right"></i></span>
									<p>Hindusthan Institute of Technolgy Coimbatore.</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education end -->

                          <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2008 - 2011</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="images/grad-cap.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">Bachelor of Computer Science<i class="mdi-navigation-more-vert right"></i></span>
                                <p>SriMad  Andavan Arts and Science College Trichy</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
									<span class="card-title activator brand-text">Bachelor of Computer Science<i class="mdi-navigation-close right"></i></span>
									<p>SriMad  Andavan Arts and Science College Trichy</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education -->

                        <!-- single education -->
                          <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">2007 - 2008</h2>
                                <div class="card-img-wrap">
                                  <img class="activator" src="images/grad-cap.png" alt="">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">HSC<i class="mdi-navigation-more-vert right"></i></span>
                                <p>St.Antony's Higher Secondary School</p>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">HSC<i class="mdi-navigation-close right"></i></span>
									<p>St.Antony's Higher Secondary School</p>
                                </div>
                                <p class="rev-content">
                                  Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                                </p>
                              </div>
                            </div>
                          </div> <!-- single education -->

							<!-- single education -->
							<div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
								<div class="card">
									<div class="card-image waves-effect waves-block waves-light">
										<h2 class="left-align card-title-top">2005 - 2006</h2>
										<div class="card-img-wrap">
											<img class="activator" src="images/grad-cap.png" alt="">
										</div>
									</div>
									<div class="card-content">
										<span class="card-title activator brand-text">SSLC<i class="mdi-navigation-more-vert right"></i></span>
										<p>St.Antony's Higher Secondary School</p>
									</div>
									<div class="card-reveal">
										<div class="rev-title-wrap">
											<span class="card-title activator brand-text">SSLC<i class="mdi-navigation-close right"></i></span>
											<p>St.Antony's Higher Secondary School</p>
										</div>
										<p class="rev-content">
											Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
										</p>
									</div>
								</div>
							</div> <!-- single education -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapp edu-ctrl">
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-left"><i class="mdi-navigation-chevron-left"></i></a>
                <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-right"><i class="mdi-navigation-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!-- #resume Section end -->

    <!-- Portfolio Section start -->
  <!-- <section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
      <div class="padd-tb-120 brand-bg portfolio-top">
        <div class="portfolio-inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="title">PORTFOLIO</h2>
                <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
                  <li class="active"><a href="#" data-target="*">All</a>
                  </li>
                  <li><a href="#" data-target=".category-1">Art</a>
                  </li>
                  <li><a href="#" data-target=".category-2">Accessories</a>
                  </li>
                  <li><a href="#" data-target=".category-3">Design</a>
                  </li>
                  <li><a href="#" data-target=".category-4">Fashion</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div id="portfolioModal" class="modal white">
        <div class="model-img"></div>
        <div class="modal-content">
          <h2 class="title">Lorem ipsum dolor sit fugit dolore.</h2>
          <p class="m-content">A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.</p>
        </div>

        <div class="modal-footer">
          <a href="#" target="_blank" class="waves-effect btn-flat brand-text modal-action">Live Demo</a>
          <a href="#" class="waves-effect btn-flat brand-text modal-action modal-close">cancel</a>
        </div>
      </div>

      <div class="portfolio-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ul class="clearfix protfolio-item" id="protfolio-msnry">
              
             
                <li class="single-port-item category-1 category-3">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="images/portfolio/pf1.jpg" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">item name</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
              
                <li class="single-port-item category-2 category-1">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="images/portfolio/pf2.jpg" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">item name</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
              
                <li class="single-port-item category-1 category-2">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="images/portfolio/pf3.jpg" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">item name</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
               
                <li class="single-port-item category-3">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="images/portfolio/pf4.jpg" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">item name</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
               
                <li class="single-port-item category-1 category-3 category-4">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="images/portfolio/pf5.jpg" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">item name</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
              
                <li class="single-port-item category-2 category-4">
                  <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                    <div class="protfolio-image">
                      <img src="images/portfolio/pf6.jpg" alt="portfolio">
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title">item name</h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
               

              </ul>
              
              <a id="portfolio-item-loader" href="#" class="btn-floating btn-large waves-effect waves-light brand-bg"><i class="mdi-content-add"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <!-- #portfolio Section end -->

    <!-- Team Section end -->
  <!--  <section id="team" class="scroll-section root-sec brand-bg padd-tb-120 team-wrap">
      <div class="container">
        <div class="row">
          <div class="clearfix team-inner">
            <div class="col-sm-12 col-md-10 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head team-text">
                  <div class="col-sm-12">
                    <h2 class="title">our team</h2>
                    <p class="regular-text">Our Team combines a unique combination of creativity, experience, knowledge but most of all a shared 'can do' attitude to help clients get the very best support, advice and project management to achieve business goals.</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="overflow-hidden">
                    <div class="row">
                      <div id="teamSlider" class="clearfix card-element-wrapper">
                        <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/t1.png" alt="">
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Jonh Doe<i class="mdi-navigation-more-vert right"></i></span>
                              <p>UX UI Designer</p>
                            </div>
                            <div class="card-reveal">
                              <div class="rev-title-wrap">
                                <span class="card-title activator brand-text">Jonh Doe<i class="mdi-navigation-close right"></i></span>
                                <p>UX UI Designer</p>
                              </div>
                              <p class="rev-content">
                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                              </p>
                            </div>
                          </div>
                        </div>
						  
						  
                        <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/t2.png" alt="">
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                              <p>Front End Developer</p>
                            </div>
                            <div class="card-reveal">
                              <div class="rev-title-wrap">
                                <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                                <p>Front End Developer</p>
                              </div>
                              <p class="rev-content">
                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                              </p>
                            </div>
                          </div>
                        </div> 
                        <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/t3.png" alt="">
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                              <p>Front End Developer</p>
                            </div>
                            <div class="card-reveal">
                              <div class="rev-title-wrap">
                                <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                                <p>Front End Developer</p>
                              </div>
                              <p class="rev-content">
                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                              </p>
                            </div>
                          </div>
                        </div> 
                        <div class="col-sm-4 single-card-box">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/t4.png" alt="">
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-more-vert right"></i></span>
                              <p>Front End Developer</p>
                            </div>
                            <div class="card-reveal">
                              <div class="rev-title-wrap">
                                <span class="card-title activator brand-text">Letizia Toye<i class="mdi-navigation-close right"></i></span>
                                <p>Front End Developer</p>
                              </div>
                              <p class="rev-content">
                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                              </p>
                            </div>
                          </div>
                        </div> 
                        <div class="col-sm-4 single-card-box">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/t5.png" alt="">
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-more-vert right"></i></span>
                              <p>Team Manager</p>
                            </div>
                            <div class="card-reveal">
                              <div class="rev-title-wrap">
                                <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-close right"></i></span>
                                <p>Team Manager</p>
                              </div>
                              <p class="rev-content">
                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4 single-card-box">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/t6.png" alt="">
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-more-vert right"></i></span>
                              <p>Team Manager</p>
                            </div>
                            <div class="card-reveal">
                              <div class="rev-title-wrap">
                                <span class="card-title activator brand-text">Tandi Battle<i class="mdi-navigation-close right"></i></span>
                                <p>Team Manager</p>
                              </div>
                              <p class="rev-content">
                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing. 
                              </p>
                            </div>
                          </div>
                        </div> 
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-wrapp tmu-ctrl">
              <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
              <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section>-->
    <!-- #team Section end -->

    <!-- Funfacts Section end -->
   <!-- <section id="funfacts" class="root-sec grey lighten-5 funfact-wrap">
    <div class="sec-inner padd-tb-120">
      <div class="container">
        <div class="row">
          <div class="funfact-inner">
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-editor-insert-emoticon"></i>
                      <span class="num countNumb">150</span>
                    </div>
                    <div class="context">Happy clients</div>
                  </div>
                </div>
              </div>
            </div> 
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-action-wallet-travel"></i>
                      <span class="num countNumb">230</span>
                    </div>
                    <div class="context">Project Completed</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 funfact-box">
              <div class="center-align card-panel white">
                <div class="feature-box-outer">
                  <div class="funfact-box-inner">
                    <div class="clearfix ">
                      <i class="mdi-action-wallet-giftcard"></i>
                      <span class="num countNumb">79</span>
                    </div>
                    <div class="context">Award Won</div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>

      </div>  <!-- .container end -->
    </div>
    </section>-->
    <!-- #funfacts Section end -->

    <!-- Testimonial Section end -->
    <!--<section id="testimonial" class="scroll-section root-sec brand-bg padd-tb-120 testimonial-wrap">
      <div class="container">
        <div class="row">
          <div class="testimonial-inner">
            <div class="col-sm-12 col-md-10 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head testimonial-text">
                  <div class="col-sm-12">
                    <h2 class="title">testimonial</h2>
                    <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="overflow-hidden">
                    <div class="row">
                      <div id="testimonialSlider" class="clearfix card-element-wrapper">
                        <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/client5.png" alt="">
                                <p class="saying-about">Amazing theme, amazing code and especially amazing support! I Really love your work.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Jonh Smith -</span>
                              <a href="#">CEO, Apple Inc</a>
                            </div>
                          </div>
                        </div> 
                        <div class="col-sm-6 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/client1.png" alt="">
                                <p class="saying-about">Amazing theme, amazing code and especially amazing support! I Really love your work.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Jonh Smith -</span>
                              <a href="#">CEO, Apple Inc</a>
                            </div>
                          </div>
                        </div> 
                        <div class="col-sm-6 single-card-box">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/client2.png" alt="">
                                <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Jonh Smith -</span>
                              <a href="#">CEO, Apple Inc</a>
                            </div>
                          </div>
                        </div> 
                        <div class="col-sm-6 single-card-box">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/client3.png" alt="">
                                <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Jonh Smith -</span>
                              <a href="#">CEO, Apple Inc</a>
                            </div>
                          </div>
                        </div> 
                        <div class="col-sm-6 single-card-box">
                          <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <div class="card-img-wrap">
                                <img class="activator" src="images/client4.png" alt="">
                                <p class="saying-about">Amazing theme, amazing code and especially amazing support ! I Really love your work.</p>
                              </div>
                            </div>
                            <div class="card-content">
                              <span class="card-title activator brand-text">Jonh Smith -</span>
                              <a href="#">CEO, Apple Inc</a>
                            </div>
                          </div>
                        </div> 
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-wrapp tmo-ctrl">
              <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
              <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
            </div>
          </div>
        </div>
      </div> 
    </section>-->
    <!-- #testimonial Section end -->

    <!-- Blog Section end -->
   <!-- <section id="blog" class="scroll-section root-sec grey lighten-5 padd-tb-120 blog-wrap">
      <div class="container">
        <div class="row">
          <div class="blog-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head blog-text">
                  <div class="col-sm-10">
                    <h2 class="title">Blog</h2>
                    <p class="regular-text">A Web page that serves as a publicly accessible personal journal for an individual. Typically updated daily, blogs often reflect the personality of the author.</p>
                  </div>
                </div>
                <div class="clearfix card-element-wrapper" id="blog-posts">
                  <article class="col-sm-6 col-md-4 single-card-box single-post">
                    <div class="card wow fadeInUpSmall" data-wow-duration=".7s">
                      <div class="card-image">
                        <div class="card-img-wrap">
                          <div class="blog-post-thumb waves-effect waves-block waves-light">
                            <a href="single.html"><img class="activator" src="images/blog1.jpg" alt="">
                            </a>
                          </div>
                          <div class="post-body">
                            <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Awesome Post Title</h2></a>
                            <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix card-content">
                        <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">15</span></a>
                        <a href="single.html" class="brand-text right waves-effect">Read More</a>
                      </div>
                    </div>
                  </article>
                  <article class="col-sm-6 col-md-4  single-card-box single-post">
                    <div class="card wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                      <div class="card-image">
                        <div class="card-img-wrap">
                          <div class="blog-post-thumb waves-effect waves-block waves-light">
                            <a href="single.html"><img class="activator" src="images/blog2.jpg" alt="">
                            </a>
                          </div>
                          <div class="post-body">
                            <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">An Image Post</h2></a>
                            <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix card-content">
                        <a href="#" class="left js-favorite active" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">23</span></a>
                        <a href="single.html" class="brand-text right waves-effect">Read More</a>
                      </div>
                    </div>
                  </article>
                  <article class="col-sm-6 col-md-4 single-card-box single-post">
                    <div class="card wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                      <div class="card-image">
                        <div class="card-img-wrap">
                          <div class="blog-post-thumb waves-effect waves-block waves-light">
                            <a href="single.html"><img class="activator" src="images/blog3.jpg" alt="">
                            </a>
                          </div>
                          <div class="post-body">
                            <a href="single.html" class="post-title-link brand-text"><h2 class="post-title">Another Image Post</h2></a>
                            <p class="post-content">In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris. Vestibulum fringilla pede sit amet augue. Ut varius tincidunt libero. Pellentesque dapibus hendrerit tortor. </p>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix card-content">
                        <a href="#" class="left js-favorite" title="Love this"><i class="mdi-action-favorite"></i><span class="numb">17</span></a>
                        <a href="single.html" class="brand-text right waves-effect">Read More</a>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="clearfix left-align">
                  <div class="col-sm-12">
                    <a href="blog.html" class="waves-effect waves-light btn-large load-more">See More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>-->
    <!-- #blog Section end -->

    <!-- Contact Section end -->
    <section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
      <div class="container">
        <div class="row">
          <div class="contact-inner">
            <div class="col-sm-12 card-box-wrap">
              <div class="row">
                <div class="clearfix section-head contact-text">
                  <div class="col-sm-12">
                    <h2 class="title">Contact</h2>
					  <p class="regular-text">No.7 Rajeshwari building, Next to Ragavendra Apartment,E-city, Bangalore</p>
                    <ul class="clearfix contact-info">
                      <li><a href="#">+919743637922</a>
                      </li>
                      <li><a href="#">kalaikurtis@gmail.com</a>
                      </li>
                      <li><a href="#"></a>
                      </li>
                    </ul>
                  </div>
                </div> <!-- contact text end -->

                <div class="clearfix contact-form">

                <!-- Map Start -->
                  <div class="col-sm-7">
                    <div class="map-wrapper">
                      <div id="map"></div>
                    </div>
                  </div> <!-- Map end -->

                <!-- Contact Form start -->
                  <div class="col-sm-5">
                    <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                      <form action="#" id="contactForm" novalidate>
                        <div class="input-field">
                          <input id="contact_name" type="text" name="contactName" class="validate input-box">
                          <label for="contact_name" class="input-label">Name</label>
                        </div>
                        <div class="input-field">
                          <input id="email" type="email" name="contactEmail" class="validate input-box">
                          <label for="email" class="input-label">Email</label>
                        </div>
                        <div class="input-field">
                          <input id="subject" type="text" name="contactSubject" class="validate input-box">
                          <label for="subject" class="input-label">Subject</label>
                        </div>
                        <div class="input-field textarea-input">
                          <textarea id="textarea1" name="contactMessage" class="validate materialize-textarea" style="height: 22px;"></textarea>
                          <label for="textarea1" class="input-label">Message</label>
                        </div>
                        <div class="input-field submit-wrap clearfix">
                          <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                          <div class="right form-loader-area">
                            <svg class="circular size-20" height="20" width="20">
                              <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                            </svg>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div> <!-- ./contact form end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end -->
      <div class="section-call-to-area">
        <div class="container">
          <div class="row">
            <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- #contact Section end -->

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="clearfix footer-inner">
              <ul class="left social-icons">
                <li><a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="https://in.linkedin.com/in/kalaiselvan-a-1431b08b" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                </li>
				  <li><a href="https://plus.google.com/117835471034106065850" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                </li>
                <!--<li><a href="#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                </li>
                <li><a href="#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                </li>-->
              </ul> <!-- ./social icons end -->
              <div class="right copyright">
                <p>KC &copy; All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->

  </main>
  <!-- Main Container end-->


  <!-- JavaScripts -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/detectmobilebrowser.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="assets/js/gmaps.js"></script>
  <script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
  <script src="assets/libs/materialize/js/materialize.min.js"></script>
  <script src="assets/libs/jwplayer/jwplayer.js"></script>
  <script src="assets/libs/sweetalert/sweet-alert.min.js"></script>
  <script src="assets/js/common.js"></script>
  <script src="assets/js/main.js"></script>

<script>
 /* !function() {
  var t; if (t = window.botsify = window.botsify = window.botsify || [], !t.init) 
  return t.invoked ? void (window.console && console.error && console.error("Botsify snippet included twice.")) : (
  t.load =function(e){	var o,n;	o=document.createElement("script"); e.type="text/javscript"; o.async=!0; 
  o.crossorigin="anonymous";o.src="https://botsify.com/web-bot/script/"+e+"/botsify.js";
  n=document.getElementsByTagName("script")[0];	n.parentNode.insertBefore(o,n); });
  }(); botsify.load('z02BBevkNa8WZpX8013N023ZlVaMi0dX9nsbvT7m');*/
</script>

</body>

</html>