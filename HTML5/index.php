<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crawler of Stack Overflow</title>

    <!-- load stylesheets -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"> -->
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">                              
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/tooplate-style.css">                                   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        
        <!-- Content -->
        <div class="cd-hero">

            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <nav class="navbar">
                    <div class="tm-navbar-bg">
                        
                        <a class="navbar-brand text-uppercase" href="#"><i class="fa fa-gears tm-brand-icon"></i>Little Crawler of Stack Overflow</a>

                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active selected">
                                    <a class="nav-link" href="#0" data-no="1">Requirement One <span class="sr-only">(current)</span></a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="2">Requirement Two</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="3">New Feature</a>
                                </li>
                            </ul>
                        </div>                        
                    </div>

                </nav>
            </div> 

            <ul class="cd-hero-slider">

                <!-- Page 1 Gallery One -->
                <li class="selected">                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one">
                                <!-- Gallery One pop up connected with JS code below -->                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title tm-white"><span class="tm-white">Requirement One</span></h2>
                                        <p class="tm-text">10 newest Android-related questions posted in the past week.
                                        </p>
                                    </div>
                                    <?php
                                    //引用conn.php文件
                                        require 'conn.php';
                                        //查询数据表中的数据
                                        $sql = mysql_query("select * from newest");
                                        $datarow = mysql_num_rows($sql); //长度    
                                        for($i=0;$i<$datarow;$i++){
                                            $sql_arr = mysql_fetch_assoc($sql);
                                            $title[$i] = $sql_arr['title'];
                                            $url[$i] = "https://stackoverflow.com".$sql_arr['url'];
                                        }            
                                    ?>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-01-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[0]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[0]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-02-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[1]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[1]'>View more</a>";
                                                ?>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-03-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[2]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[2]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-04-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[3]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[3]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-05-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[4]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[4]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-06-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[5]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[5]'>View more</a>";
                                                ?>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-07-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[6]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[6]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-08-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[7]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[7]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>   
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-09-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[8]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[8]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-10-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[9]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[9]'>View more</a>";
                                                ?>
                                            </figcaption>
                                        </figure>
                                    </div>                                                                      
                                </div>                                 
                            </div>
                        </div>                                                    
                    </div>                    
                </li>
                <div class="tlinks">Collect from <a href="http://www.mycodes.net/" >网页模板</a></div>

                <!-- Page 2 Gallery Two -->
                <li>                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="2" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-two">
                                <!-- Gallery Two pop up connected with JS code below -->
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">Requiremen Two</span></h2>
                                        <p class="tm-text"><span class="tm-white">10 most voted Android-related questions posted in the past week.</span>
                                        </p>
                                    </div>
                                    <?php
                                    //引用conn.php文件
                                        require 'conn.php';
                                        //查询数据表中的数据
                                        $sql = mysql_query("select * from votes");
                                        $datarow = mysql_num_rows($sql); //长度    
                                        for($i=0;$i<$datarow;$i++){
                                            $sql_arr = mysql_fetch_assoc($sql);
                                            $title[$i] = $sql_arr['title'];
                                            $url[$i] = "https://stackoverflow.com".$sql_arr['url'];
                                        }            
                                    ?>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-12-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[0]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[0]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-11-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[1]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[1]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-10-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[2]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[2]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-09-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[3]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[3]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-08-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[4]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[4]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-07-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[5]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[5]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-06-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[6]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[6]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-05-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[7]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[7]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-04-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[8]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[8]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-bubba">
                                            <img src="img/tm-img-03-tn.jpg" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <?php
                                                echo "<p class='tm-figure-description'>$title[9]</p>";
                                                ?>
                                                <?php
                                                echo "<a href='$url[9]'>View more</a>";
                                                ?>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                </div>                                 
                            </div>
                        </div>                      
                    </div>
                </li>

                <!-- Page 3 Gallery Three -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="3" data-page-type="gallery">                        
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-three">
                                <!-- Gallery Two pop up connected with JS code below -->
                                    
                                    <div class="tm-img-gallery-info-container">                                    
                                        <h2 class="tm-text-title tm-gallery-title"><span class="tm-white">New feature: input a keyword and get related questions</span></h2>
                                        <form action="post.php" method="post">
                                        Keyword: <input type="text" name="keyword" ><br>
                                        <input type="submit" value="Submit">
                                        </p>                                                                                                                                     
                                </div>                                 
                            </div> <!-- .tm-img-gallery-container -->
                        </div>         
                    </div>  
                </li>

            </ul> <!-- .cd-hero-slider -->
            
            <footer class="tm-footer">
            
                <!--<div class="tm-social-icons-container text-xs-center">
                    <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
                </div>--> 
                
                <p class="tm-copyright-text">Linfeng Shen's website.</p>
            
            </footer>
                    
        </div> <!-- .cd-hero -->
        

        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) --> 
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        
        <script>

            function adjustHeightOfPage(pageNo) {

                var offset = 80;
                var pageContentHeight = 0;

                var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                if( pageType != undefined && pageType == "gallery") {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                }
                else {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                }

                if($(window).width() >= 992) { offset = 120; }
                else if($(window).width() < 480) { offset = 40; }
               
                // Get the page height
                var totalPageHeight = $('.cd-slider-nav').height()
                                        + pageContentHeight + offset
                                        + $('.tm-footer').height();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery One pop up
                -----------------------------------------*/
                $('.gallery-one').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
				
				/* Gallery Two pop up
                -----------------------------------------*/
				$('.gallery-two').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Gallery Three pop up
                -----------------------------------------*/
                $('.gallery-three').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });

                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    
                    // wait 3 seconds
                    setTimeout(function() {
                        adjustHeightOfPage( currentPageNo );
                    }, 1000);
                    
                });
        
                // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                $('body').addClass('loaded');
                           
            });

           

        </script>            

</body>
</html>