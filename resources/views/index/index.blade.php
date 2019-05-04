<html>
<head>
    <title>Home</title>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <!------ js ------>
    <script src="{{ URL::asset('js') }}/jquery.min.js"> </script>
    <!------ js ------>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="{{ URL::asset('js') }}/move-top.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js') }}/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!---- start-smoth-scrolling---->
    <!--- fonts --->
    <link href='http://fonts.useso.com/css?family=Lato:100,300,400,700,900,300italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
    <!--- fonts --->
</head>
<body>
<!--- header-top ---->
<div id="home" class="header-top">
    <!--- container ---->
    <div class="container">
        <div class="header-logo">
            <a href="#"><img src="{{ URL::asset('image') }}/logo.png" alt=""/></a>
        </div>
        <div class="header-sub-text">
            <h2>北。</h2>
            <p>山一程，水一程，一片云彩爱恋一座城
                <small>努力吧，骚年.</small></p>
        </div>
        <div class="header-top-grids">
            <div class="col-md-4 about-nav4">
                <a class="scroll" href="#services"><span class="nav-icon4"> </span><label>留言</label></a>
            </div>
            <div class="col-md-4 about-nav5">
                <a class="scroll" href="#portfolio"><span class="nav-icon5"> </span><label>相册</label></a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="header-bottom-grids">
            <div class="col-md-6 left-grid text-left">
                <div class="about-nav">
                    <a class="scroll" href="#about"><span class="nav-icon"> </span><label>设置</label></a>
                </div>
                <div class="about-nav1">
                    <a class="scroll" href="#team"><span class="nav-icon1"> </span><label>好友</label></a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 right-grid text-right">
                <div class="about-nav2">
                    <a class="scroll" href="#blog"><span class="nav-icon2"> </span><label>日志</label></a>
                </div>
                <div class="about-nav3">
                    <a class="scroll" href="#contact"><span class="nav-icon3"> </span><label>联系</label></a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="arrow-grid">
            <div class="arrow">
                <a class="scroll" href="#header-nav"><span> </span></a>
            </div>
        </div>
    </div>
    <!--- container ---->
</div>
<!--- //header-top ---->
<!--- header-bottom ---->
<!-- Sticky Nav --->
<div id="header-nav" class="header-nav">
    <div class="top-nav">
        <nav>
            <div class="logo">
                <a href="#"><img src="{{ URL::asset('image') }}/logo2.png" alt=""/></a>
            </div>
            <span class="menu"></span>
            <ul>
                <li class="active"><a class="scroll" href="#home">主页</a></li>
                <li><a class="scroll" href="#about">关于</a></li>
                <li><a class="scroll" href="#team">好友</a></li>
                <li><a class="scroll" href="#services">留言</a></li>
                <li><a class="scroll" href="#portfolio">相册</a></li>
                <li><a class="scroll" href="#blog">日志</a></li>
                <li class="contact"><a class="scroll" href="#contact">联系</a></li>
                <div class="clearfix"> </div>
            </ul>
        </nav>
    </div>
    <!--script-nav-->
    <script>
        $("span.menu").click(function(){
            $(".top-nav ul").slideToggle("slow" , function(){
            });
        });
    </script>
    <!--script-nav-->
    <script src="js/myscript.js"> </script>
</div>
<!-- top-nav -->
<!-- Sticky Nav --->
<!--- content ---->
<div class="content">
    <!--- container ---->
    <div class="container">
        <div class="row">
            <div class="col-md-3 content-top-grid">
                <sub> </sub>
                <h3>Build with love</h3>
                <p>Fusce facilisis velit libero, nec
                    dignissim lacus sagittis non. <br>
                    Sed nec porta ante. Pellentesque <br>
                    habitant morbi tristique senectus et.
                </p>
            </div>
            <div class="col-md-3 content-top-grid">
                <span> </span>
                <h3>Build with love</h3>
                <p>Fusce facilisis velit libero, nec
                    dignissim lacus sagittis non. <br>
                    Sed nec porta ante. Pellentesque <br>
                    habitant morbi tristique senectus et.
                </p>
            </div>
            <div class="col-md-3 content-top-grid">
                <small> </small>
                <h3>Build with love</h3>
                <p>Fusce facilisis velit libero, nec
                    dignissim lacus sagittis non. <br>
                    Sed nec porta ante. Pellentesque <br>
                    habitant morbi tristique senectus et.
                </p>
            </div>
            <div class="col-md-3 content-top-grid">
                <big> </big>
                <h3>Build with love</h3>
                <p>Fusce facilisis velit libero, nec
                    dignissim lacus sagittis non. <br>
                    Sed nec porta ante. Pellentesque <br>
                    habitant morbi tristique senectus et.
                </p>
            </div>
        </div>
    </div>
    <!--- container ---->
</div>
<!--- content ---->
<!--- content-about ---->
<div id="about" class="content-about">
    <!--- container ---->
    <div class="container">
        <div class="content-about-text">
            <h2>About <small>us</small></h2>
            <span> </span>
        </div>
        <div class="row">
            <div class="col-md-6 content-about-grid-left">
                <img src="{{ URL::asset('image') }}/screen1.png">
            </div>
            <div class="col-md-6 content-about-grid-right">
                <p>Aliquam metus neque, bibendum sit amet porta at, consequat et
                    enim. In ut turpis non ipsum rhoncus porttitor vel ac nunc.
                    Maecenas interdum dignissim lorem quis auctor. Donec sit amet
                    nulla nisl, aliquam pretium ipsum. Pellentesque sodales ipsum et
                    enim rutrum adipiscing. Quisque tincidunt mattis sapien,
                    vel posuere.
                </p>
                <div class="learn">
                    <a href="#">Learn more</a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--- container ---->
    <div class="content-about-bottom">
        <div class="content-about-bottom-text">
            <img src="{{ URL::asset('image') }}/quote.png">
            <p>We lorem and ipsum your aliquam</p>
        </div>
    </div>
</div>
<!--- content-about ---->
<!--- content-team ---->
<div id="team" class="content-team">
    <!--- container ---->
    <div class="container">
        <div class="content-team-text">
            <h2>Our <small>team</small></h2>
            <span> </span>
        </div>
        <div class="arrows">
            <div class="left-arrow"> </div>
            <div class="right-arrow"> </div>
            <div class="clearfix"> </div>
        </div>
        <div class="row">
            <!-- requried-jsfiles-for owl -->
            <script>
                $(document).ready(function() {
                    $("#owl-demo1").owlCarousel({
                        items : 3,
                        lazyLoad : true,
                        autoPlay : true,
                        navigation : true,
                        navigationText :  true,
                        pagination : false,
                    });
                });
            </script>
            <!-- //requried-jsfiles-for owl -->
            <!-- start content_slider -->
            <div id="owl-demo1" class="owl-carousel">

                <div class="item">
                    <div class="team-left-grid">
                        <img src="{{ URL::asset('image') }}/team4.jpg">
                        <h2>ANNE HATHAWAY</h2>
                        <p>CEO / Marketing Guru</p>
                        <div class="team-icon-grid">
                            <div class="col-md-6 f-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="col-md-6 g-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-left-grid">
                        <img src="{{ URL::asset('image') }}/team5.jpg">
                        <h2>ANNE HATHAWAY</h2>
                        <p>CEO / Marketing Guru</p>
                        <div class="team-icon-grid">
                            <div class="col-md-6 f-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="col-md-6 g-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-left-grid">
                        <img src="{{ URL::asset('image') }}/team6.jpg">
                        <h2>ANNE HATHAWAY</h2>
                        <p>CEO / Marketing Guru</p>
                        <div class="team-icon-grid">
                            <div class="col-md-6 f-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="col-md-6 g-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-left-grid">
                        <img src="{{ URL::asset('image') }}/team4.jpg">
                        <h2>ANNE HATHAWAY</h2>
                        <p>CEO / Marketing Guru</p>
                        <div class="team-icon-grid">
                            <div class="col-md-6 f-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="col-md-6 g-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-left-grid">
                        <img src="{{ URL::asset('image') }}/team5.jpg">
                        <h2>ANNE HATHAWAY</h2>
                        <p>CEO / Marketing Guru</p>
                        <div class="team-icon-grid">
                            <div class="col-md-6 f-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="col-md-6 g-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-left-grid">
                        <img src="{{ URL::asset('image') }}/team6.jpg   ">
                        <h2>ANNE HATHAWAY</h2>
                        <p>CEO / Marketing Guru</p>
                        <div class="team-icon-grid">
                            <div class="col-md-6 f-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="col-md-6 g-icon">
                                <a href="#"><span> </span></a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- container ---->
    </div>
    <!--- content-team ---->
</div>
<!--- content-skills ---->
<div id="services" class="content-skills">
    <!--- container ---->
    <div class="container">
        <div class="content-skills-text">
            <h2>Our <small>skills</small></h2>
            <span> </span>
        </div>
        <div class="col-md-6">
            <div class="progress-head">
                <h3>WEB DESIGN</h3>
                <p class="percent">90%</p>
                <div class="clearfix"></div>
                <div class="progressy1"><p></p></div>
            </div>
            <div class="progress-head">
                <h3>GRAPHIC DESIGN</h3>
                <p class="percent">75%</p>
                <div class="clearfix"></div>
                <div class="progressy2"><p></p></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="progress-head">
                <h3>HTML/CSS</h3>
                <p class="percent">70%</p>
                <div class="clearfix"></div>
                <div class="progressy3"><p></p></div>
            </div>
            <div class="progress-head">
                <h3>UI/UX</h3>
                <p class="percent">85%</p>
                <div class="clearfix"></div>
                <div class="progressy4"><p></p></div>
            </div>
        </div>



    </div>
</div>


</div>
<!--- container ---->
<div class="content-about-bottom">
    <div class="content-services-bottom-text">

        <img src="{{ URL::asset('image') }}/service.png">
        <p class="bottom-text">Our services will lorem and ipsum
            your aliquam
        </p>
    </div>
</div>
</div>
<!--- content-skills ---->
<!--- content-services ---->
<div id="blog" class="content-services">
    <!--- container ---->
    <div class="container">
        <div class="services-grids">
            <div class="col-md-3 service-grid">
                <h2>365</h2>
                <p>Lorem ipsum</p>
            </div>
            <div class="col-md-3 service-grid">
                <h2>98%</h2>
                <p>Lorem ipsum</p>
            </div>
            <div class="col-md-3 service-grid">
                <h2>69</h2>
                <p>Lorem ipsum</p>
            </div>
            <div class="col-md-3 service-grid">
                <h2>1,642</h2>
                <p>Lorem ipsum</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- requried-jsfiles-for owl -->
        <link href="{{ URL::asset('css') }}/owl.carousel.css" rel="stylesheet">
        <script src="{{ URL::asset('js') }}/owl.carousel.js"></script>
        <script>
            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    items : 1,
                    lazyLoad : true,
                    autoPlay : true,
                    navigation : false,
                    navigationText :  false,
                    pagination : true,
                });
            });
        </script>
        <!-- //requried-jsfiles-for owl -->
        <div id="owl-demo" class="owl-carousel">
            <div class="item">
                <div class="image-grid">
                    <img src="{{ URL::asset('image') }}/n1.jpg">
                </div>
                <div class="services-text">
                    <p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum. Duis mollis, est non commodo luctus, nisi erat "
                    </p>
                </div>
                <div class="services-bottom-text">
                    <p>LESALE CHRISTOPER, PINTEREST</p>
                </div>
            </div>
            <div class="item">
                <div class="image-grid">
                    <img src="{{ URL::asset('image') }}/n2.jpg">
                </div>
                <div class="services-text">
                    <p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum. Duis mollis, est non commodo luctus, nisi erat "
                    </p>
                </div>
                <div class="services-bottom-text">
                    <p>LESALE CHRISTOPER, PINTEREST</p>
                </div>
            </div>
            <div class="item">
                <div class="image-grid">
                    <img src="{{ URL::asset('image') }}/n3.jpg">
                </div>
                <div class="services-text">
                    <p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum. Duis mollis, est non commodo luctus, nisi erat "
                    </p>
                </div>
                <div class="services-bottom-text">
                    <p>LESALE CHRISTOPER, PINTEREST</p>
                </div>
            </div>
            <div class="item">
                <div class="image-grid">
                    <img src="{{ URL::asset('image') }}/n4.jpg">
                </div>
                <div class="services-text">
                    <p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum. Duis mollis, est non commodo luctus, nisi erat "
                    </p>
                </div>
                <div class="services-bottom-text">
                    <p>LESALE CHRISTOPER, PINTEREST</p>
                </div>
            </div>
            <div class="item">
                <div class="image-grid">
                    <img src="{{ URL::asset('image') }}/n5.jpg">
                </div>
                <div class="services-text">
                    <p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum. Duis mollis, est non commodo luctus, nisi erat "
                    </p>
                </div>
                <div class="services-bottom-text">
                    <p>LESALE CHRISTOPER, PINTEREST</p>
                </div>
            </div>
            <div class="item">
                <div class="image-grid">
                    <img src="{{ URL::asset('image') }}/n1.jpg">
                </div>
                <div class="services-text">
                    <p>"Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum. Duis mollis, est non commodo luctus, nisi erat "
                    </p>
                </div>
                <div class="services-bottom-text">
                    <p>LESALE CHRISTOPER, PINTEREST</p>
                </div>
            </div>
        </div>
        <div class="services-bottom-text"><a href="{{url('/blog')}}" class="go-icon">MORE</a></div>
    </div>
    <!--- container ---->
</div>
<!--- content-services ---->
<!--- content-portfolio ---->
<!--- container ---->
<div class="container">
    <div id="portfolio" class="portfolio">
        <div class="port-text">
            <h2>Our <small>portfolio</small></h2>
            <span class="folio"> </span>
        </div>
        <div  class="section" id="section-3">
            <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
                <li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
                <li><span class="filter" data-filter="app">WEB</span></li>
                <li><span class="filter" data-filter="card">APPS</span></li>
                <li><span class="filter" data-filter="fun">ICON</span></li>
            </ul>
            <div id="portfoliolist">
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="{{ URL::asset('image') }}/t1.jpg" class="img-responsive" alt=""/></a>
                        <p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
                        <div class="tour-caption">
                            <span> </span>
                        </div>

                    </div>
                </div>
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="{{ URL::asset('image') }}/t2.jpg" class="img-responsive" alt=""/></a>
                        <p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
                        <div class="tour-caption">
                            <span> </span>
                        </div>

                    </div>
                </div>
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="{{ URL::asset('image') }}/t3.jpg" class="img-responsive" alt=""/></a>
                        <p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
                        <div class="tour-caption">
                            <span> </span>
                        </div>
                    </div>
                </div>
                <div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="{{ URL::asset('image') }}/t4.jpg" class="img-responsive" alt=""/></a>
                        <p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
                        <div class="tour-caption">
                            <span> </span>
                        </div>
                    </div>
                </div>
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="{{ URL::asset('image') }}/t5.jpg" class="img-responsive" alt=""/></a>
                        <p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
                        <div class="tour-caption">
                            <span> </span>
                        </div>
                    </div>
                </div>
                <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="{{ URL::asset('image') }}/t6.jpg" class="img-responsive" alt=""/></a>
                        <p>Neque Porro Quisquam</p><h3>apps, icons, ui</h3>
                        <div class="tour-caption">
                            <span> </span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="watchmore">
                    <a href="#">Watch more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script for gallery Here-->
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var filterList = {
                init: function () {
// MixItUp plugin
// http://mixitup.io
                    $('#portfoliolist').mixitup({
                        targetSelector: '.portfolio',
                        filterSelector: '.filter',
                        effects: ['fade'],
                        easing: 'snap',
                        // call the hover effect
                        onMixEnd: filterList.hoverEffect()
                    });
                },
                hoverEffect: function () {
// Simple parallax effect
                    $('#portfoliolist .portfolio').hover(
                        function () {
                            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                        },
                        function () {
                            $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                        }
                    );
                }
            };
// Run the show!
            filterList.init();
        });
    </script>
    <!--Gallery Script Ends-->
</div>
<!--- container ---->
<!--- content-portfolio ---->
<!--- content-Get-in-touch ---->
<div id="contact" id="arrow" class="content-Get-in-touch">
    <!--- container ---->
    <div class="container">
        <div class="Get-in-touch-text">
            <h2>Get <small>in touch</small></h2>
            <span class="portfolio"> </span>
        </div>
        <div class="Get-in-touch-grids">
            <div class="col-md-6">
                <form>
                    <input type="text" maxlength="20" value="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}">
                    <input type="text" maxlength="20" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
                    <textarea value="Your Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Message';}"></textarea>
                    <div class="clearfix"></div>
                    <div class="email">
                        <a href="#">Send email</a>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="Get-in-touch-right-grid">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                        Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
                    </p>
                    <h4> 1600 Pennsylvania Ave NW, Washington,
                        DC 20500, United States of America.
                    </h4>
                    <span>T: (202) 456-1111</span>
                    <small>M: (202) 456-1212</small>
                    <div class="Get-in-touch-icons">
                        <a href="#"><span class="icon1"> </span></a>
                        <a href="#"><span class="icon2"> </span></a>
                        <a href="#"><span class="icon3"> </span></a>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="content-portfolio">
            <a href="#"><img src="{{ URL::asset('image') }}/ftr.png"></a>
            <p>Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://www.freemoban.com/">www.freemoban.com</a></p>
        </div>
    </div>
    <!--- container ---->
</div>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!--- content-Get-in-touch ---->

</body>
</html>