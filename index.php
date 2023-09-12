<!DOCTYPE html>
<?php require_once("../config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:../login.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM users WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
$username = $res['username']; 
$fname = $res['fname'];   
$lname = $res['lname'];  
$email = $res['email'];  
}
 ?> 
 <html>
    <head>
<title>G-Tour</title>

<meta name="viewport" content="width=device-width,initial-scale=1.0">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" 
integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
         integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="style.css?<?php echo time(); ?>" />

</head>

<body>
<section class="header">
    <div class="container-fluid1 ">
      
      <div class="container d-flex justify-content-between align-items-center navigation">
      <div>
        <img src="./images/logo.jpg">
      </div>
     
        <div class="nav-bar d-none d-lg-block">
          <ul class="d-flex menu-bar list-unstyled justify-content-between">
            <li class="nav-item">
              <a class="nav-link1" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link1" href="#destinations">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link1" href="#guide">Guide</a>
            </li>
            <li class="nav-item">
              <a class="nav-link1" href="#services-id">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link1" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link1" href="#contact">Contact Us</a>
            </li>
            
            
          </ul>
        </div>

        <!-- <div class="search-box d-none d-lg-block" >
          <input type="text" class="searchtext" id="search" onchange="openPage()" placeholder="type to searc.....">
          <a href="#" class="searchbtn">
            <i class="fas fa-search fa-2x"></i>
          </a>
        </div> -->

        <section class="hamburger d-lg-none">
          <i class="fas fa-bars"></i>
        </section>

<section class="menubar-ham">
        <ul class="menu-bar1 d-block d-lg-none list-unstyled ml-3 mt-2">
        <li class="nav-item">
              <a class="nav-link1" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link1" href="#destinations">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link1" href="#guide">Guide</a>
            </li>
            <li class="nav-item">
              <a class="nav-link1" href="#services-id">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link1" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link1" href="#contact">Contact Us</a>
            </li> 
                    </ul>
</section>

        <!-- <div class="search-box" >
          <input type="text" class="searchtext" id="search" onchange="openPage()" placeholder="type to searc.....">
          <a href="#" class="searchbtn">
            <i class="fas fa-search fa-2x"></i>
          </a>
        </div> -->

        <div class="loginbtn d-flex justify-content-around">
          <div>
            <a href="../login.php">
          <button type="button" class="login-btn" href="./login.html">Login</button>
          <!-- <p><a href="../logout.php"><span style="color:red; float: right;">Logout</span> </a></p> -->
          </a>
        </div>
      
       

       </div>

        
    </div>
      
        

      
        
    </div>

    


    <h1>Lets explore the world</h1>
    




<!-- -----------------------------------------------------------------------------------start of search section---------------------------------------- -->


<section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</section>

<!-- ------------------------------------------------------------------end of search section--------------------------------------------------- -->

</section>

<!-- ----------------------------------------end of header---------------------------- -->


 

<!-- ----------------------------------------------destinations------------------------------------- -->
<section class="container-fluid facilities" id="destinations">

  <section class="facilities-head"data-aos="zoom-out-up">
      <h2 class="text-center font-weight-bolder color-white">Destinations</h2>
      <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed <span class="break">eiusmod tempor incididunt utlabore et dolore magna aliqua.</span></p> -->
  </section>

  <section class="container d-md-flex justify-content-between facilities-img">
     
               <section class="indian-img">
                 <a href="./international package.html" class='text-decoration-none'><section class="container12  ">
                      <h3 class="text-center pt-4">International package</h3>
                  </section></a>
                 </section>

                 <section>
                  <a href="./indian package.html" class='text-decoration-none'><section class="container13 ">
                    <h3 class="text-center pt-4">Indian package</h3>
                </section></a>           
               </section>

               <section>
                <a href="./Special packages.html" class='text-decoration-none'><section class="container14 ">
                  <h3 class="text-center pt-4">Special package</h3>
              </section></a>
             </section>
             
 
        
    </section>
</section>

<!-- -----------------------------------end of destinations---------------------- -->

<!-- --------------------------- guide--------------------------- -->

<section id="guide" class="spl-guides">
  <div class="container">
    <div class="gallary-header text-center">
      <h1>
        Our Guide
      </h1>
      
    </div>
    <div class="spl-guide-content">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="single-spl-guide-item">
            <img src="./images/1.jpg" alt="package-place">
            <div class="single-spl-guide-item-txt">
              <h11>Deven Pulekar <span class="pull-right"></span></h11>
              <div class="spl-guide-para">
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> STRONG COMMUNICATION SKILLS
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> THE KNOWLEDGE OF A LOCAL
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> PERSONABLE & OUTGOING
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i>A KEEN SENSE OF DIRECTION
                  </span>
                </p>
              </div>
              <div class="spl-guide-review">
                <p>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span>2544 review</span>
                </p>
              </div>
              <div class="about-btn">
              <a href="./contact-us.php">
                <button class="about-view spl-guide-btn">Get in touch</button>
              </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="single-spl-guide-item">
            <img src="images/7.jpg" alt="package-place">
            <div class="single-spl-guide-item-txt">
              <h11>Kiran Pal <span class="pull-right"></span></h11>
              <div class="spl-guide-para">
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> STRONG COMMUNICATION SKILLS
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> THE KNOWLEDGE OF A LOCAL
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> PERSONABLE & OUTGOING
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i>A KEEN SENSE OF DIRECTION
                  </span>
                </p>
              </div>
              <div class="spl-guide-review">
                <p>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span>2544 review</span>
                </p>
              </div>
              <div class="about-btn">
              <a href="./contact-us.php">
                <button class="about-view spl-guide-btn">Get in touch</button>
              </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="single-spl-guide-item">
            <img src="images/6.jpg" alt="package-place">
            <div class="single-spl-guide-item-txt">
              <h11>Esha Patel <span class="pull-right"></span></h11>
              <div class="spl-guide-para">
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> STRONG COMMUNICATION SKILLS
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> THE KNOWLEDGE OF A LOCAL
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> PERSONABLE & OUTGOING
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i>A KEEN SENSE OF DIRECTION
                  </span>
                </p>
              </div>
              <div class="spl-guide-review">
                <p>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span>2544 review</span>
                </p>
              </div>
              <div class="about-btn">
              <a href="./contact-us.php">
                <button class="about-view spl-guide-btn">Get in touch</button>
              </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          


          <div class="row justify-content-md-center">
            <div class="col col-lg-2">
              
            </div>
            <div class="col-md-auto">
              <div class="col-md-8  text-center ">
                <a href="./guide.html">
                <button type="button" class="about-view btn-hist-1"  >see all guides</button>
              </a>
              </div>
            </div>
            <div class="col col-lg-2">
              
            </div>
          </div>

          
      </div>

       

        

      </div>
    </div>
  </div>

</section>

<!-- guide -->
<!-- <section class="container-fluid team-section bg-light">
  <section class="dot-bg row row-cols-xl-2">

  <section class="col-xl-2"data-aos="flip-up">
      <h1 class="our mt-lg-5">Our guide</h1>
      <p class="our-para mt-lg-4"><span class="tick mr-2"><i class="fas fa-check-circle"></i></span>STRONG COMMUNICATION SKILLS</p>
      <p class="our-para"><span class="tick mr-2"><i class="fa fa-check-circle"></i></span>PERSONABLE & OUTGOING</p>
      <p class="our-para"><span class="tick mr-2"><i class="fa fa-check-circle"></i></span>IMPROVISATIONAL SKILLS</p>
      <p class="our-para"><span class="tick mr-2"><i class="fa fa-check-circle"></i></span>THE KNOWLEDGE OF A LOCAL</p>
      <p class="our-para"><span class="tick mr-2"><i class="fa fa-check-circle"></i></span>A KEEN SENSE OF DIRECTION</p>
      <input class="view-btn mt-lg-4" type="button" value="Learn more">
      
  </section>

<section class="col-xl-10 d-none d-md-block">
  <section class="owl-carousel wedd-icon2"data-aos="flip-up">
              <section class="rounded col">
                  <main>
                      <figure class="figure girl-bounce bounce item img-cust">     
                          <a href=""><img class="girl-img" src="./images/p1-1-336x284.jpg"></a>
                          <figcation class="">
                              <section class="girl-con">
                                  <section class="d-flex">
                                      <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-phone-alt"></i></section>
                                      <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-envelope"></i></section>
                                 </section>
                                 <section class="pl-2 pl-lg-4 girl-border mr-lg-4">
                                  <a href=""><h3 class="emily">jhon</h3></a>
                                  <p class="cust">Customer Advisor</p>  
                                 </section>
                                  <section class="pl-2 pl-lg-4 mt-lg-2 pb-lg-3">                                                              
                                     <span class="d-block"><a class="email-para" href="mailto:email@vehica.com">jhon@gmail.com</a></span>
                                      <span class="d-block"><a class="cust" href="telto:(123)3456789">(123)3456789</a></span>                                              
                                  </section>
                          </section>
                          </figcation>
                      </figure>
                  </main>
              </section>

              <section class="rounded col">
                <main>
                    <figure class="figure ml-lg-4 girl-bounce bounce item">     
                        <a href=""><img class="girl-img" src="./images/p2-1-336x284.jpg"></a>
                        <figcation class="">
                            <section class="girl-con">
                                <section class="d-flex">
                                    <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-phone-alt"></i></section>
                                    <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-envelope"></i></section>
                               </section>
                               <section class="pl-2 pl-lg-4 girl-border mr-lg-4">
                                <a href=""><h3 class="emily">william</h3></a>
                                <p class="cust">Customer Advisor</p>  
                               </section>
                                <section class="pl-2 pl-lg-4 mt-lg-2 pb-lg-3">                                                              
                                   <span class="d-block"><a class="email-para" href="">william@gmail.com</a></span>
                                    <span class="d-block"><a class="cust" href="">(123)3456789</a></span>                                              
                                </section>
                        </section>
                        </figcation>
                    </figure>
                </main>
            </section>
            
            
            <section class="rounded col">
              <main>
                  <figure class="figure ml-lg-4 girl-bounce bounce item">     
                      <a href=""><img class="girl-img" src="./images/p3-1-336x284.jpg"></a>
                      <figcation class="">
                          <section class="girl-con">
                              <section class="d-flex">
                                  <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-phone-alt"></i></section>
                                  <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-envelope"></i></section>
                             </section>
                             <section class="pl-2 pl-lg-4 girl-border mr-lg-4">
                              <a href=""><h3 class="emily">James</h3></a>
                              <p class="cust">Customer Advisor</p>  
                             </section>
                              <section class="pl-2 pl-lg-4 mt-lg-2 pb-lg-3">                                                              
                                 <span class="d-block"><a class="email-para" href="">james@gmail.com</a></span>
                                  <span class="d-block"><a class="cust" href="">(123)3456789</a></span>                                              
                              </section>
                      </section>
                      </figcation>
                  </figure>
              </main>
          </section>




           
              <section class="rounded col">
                  <main>
                      <figure class="figure ml-lg-4 girl-bounce bounce item">     
                          <a href=""><img class="girl-img" src="./images/p4-1-336x284.jpg"></a>
                          <figcation class="">
                              <section class="girl-con">
                                  <section class="d-flex">
                                      <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-phone-alt"></i></section>
                                      <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-envelope"></i></section>
                                 </section>
                                 <section class="pl-2 pl-lg-4 girl-border mr-lg-4">
                                  <a href=""><h3 class="emily">amelia</h3></a>
                                  <p class="cust">Customer Advisor</p>  
                                 </section>
                                  <section class="pl-2 pl-lg-4 mt-lg-2 pb-lg-3">                                                              
                                     <span class="d-block"><a class="email-para" href="">amelia@gmail.com</a></span>
                                      <span class="d-block"><a class="cust" href="">(123)3456789</a></span>                                              
                                  </section>
                          </section>
                          </figcation>
                      </figure>
                  </main>
              </section>

              <section class="rounded col">
                <main>
                    <figure class="figure ml-lg-4 girl-bounce bounce item">     
                        <a href=""><img class="girl-img" src="./images/p6-1-336x284.jpg"></a>
                        <figcation class="">
                            <section class="girl-con">
                                <section class="d-flex">
                                    <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-phone-alt"></i></section>
                                    <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-envelope"></i></section>
                               </section>
                               <section class="pl-2 pl-lg-4 girl-border mr-lg-4">
                                <a href=""><h3 class="emily">Emma</h3></a>
                                <p class="cust">Customer Advisor</p>  
                               </section>
                                <section class="pl-2 pl-lg-4 mt-lg-2 pb-lg-3">                                                              
                                   <span class="d-block"><a class="email-para" href="">emma@gmail.com</a></span>
                                    <span class="d-block"><a class="cust" href="">(123)3456789</a></span>                                              
                                </section>
                        </section>
                        </figcation>
                    </figure>
                </main>
            </section>
                
            
              <section class="rounded col">
                  <main>
                      <figure class="figure ml-lg-5 girl-bounce bounce item margin-owel">     
                          <a href=""><img class="girl-img" src="./images/p7-1-336x284.jpg"></a>
                          <figcation class="">
                              <section class="girl-con">
                                  <section class="d-flex">
                                      <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-phone-alt"></i></section>
                                      <section class="girl-logo ml-2 ml-xl-4"><i class="fas fa-envelope"></i></section>
                                 </section>
                                 <section class="pl-2 pl-lg-4 girl-border mr-lg-4">
                                  <a href=""><h3 class="emily">Sophia</h3></a>
                                  <p class="cust">Customer Advisor</p>  
                                 </section>
                                  <section class="pl-2 pl-lg-4 mt-lg-2 pb-lg-3">                                                              
                                     <span class="d-block"><a class="email-para" href="">sophia@gmail.com</a></span>
                                      <span class="d-block"><a class="cust" href="">(123)3456789</a></span>                                              
                                  </section>
                          </section>
                          </figcation>
                      </figure>
                  </main>
              </section>

  </section>

</section>
<section class=" d-none d-lg-flex mt-lg-5 mb-lg-5"data-aos="flip-up">
  <a href=""><section class="pop-arrow ml-lg-3"><i class="fas fa-chevron-left"></i></section></a>
  <a href=""><section class="pop-arrow ml-3"><i class="fas fa-chevron-right"></i></section></a>
</section>
</section>
</section> -->
<section class="container d-md-flex support justify-content-md-center justify-content-md-around"></section>







<!-- 
        <div class="col-md-4 col-sm-6">
          <div class="single-spl-guide-item">
            <img src="images/guy.png" alt="package-place">
            <div class="single-spl-guide-item-txt">
              <h11>Might Guy <span class="pull-right"></span></h11>
              <div class="spl-guide-para">
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> STRONG COMMUNICATION SKILLS
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> THE KNOWLEDGE OF A LOCAL
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i> PERSONABLE & OUTGOING
                  </span>
                </p>
                <p>
                  <span>
                    <i class="fa fa-angle-right"></i>A KEEN SENSE OF DIRECTION
                  </span>
                </p>
              </div>
              <div class="spl-guide-review">
                <p>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <span>2544 review</span>
                </p>
              </div>
              <div class="about-btn">
                <button class="about-view spl-guide-btn">Get in touch</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          


          <div class="row justify-content-md-center">
            <div class="col col-lg-2">
              
            </div>
            <div class="col-md-auto">
              <div class="col-md-8 btn-hist-1 text-center ">
                <div><a  >see all guides</a></div>
              </div>
            </div>
            <div class="col col-lg-2">
              
            </div>
          </div> -->

          
      </div>

       

        

      </div>
    </div>
  

</section>


<!-- testemonial Start -->
<section id="review" class="review">

  <h1 class="heading">
    <h2 class="text-center">
    review
</h2>
</h1>
  
  
  <div class="box-container">
  
      <div class="box">
          <div class="image">
              <img src="images/1a.jpg" alt="">
          </div>
          <div class="content">
              <h3>Vishal Singh, Mumbai, India</h3>
              <p>It was a wonderful experience for us. All your arrangements were up to the mark.
All hotels and transportation arrangements were excellent. Though we had faced some problems with hotel at Kedarnath you handled it swiftly and efficiently. Thanks for your support and prompt response.</p>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
              </div>
          </div>
      </div>
  
      <div class="box">
          <div class="image">
              <img src="images/1b.jpg" alt="">
          </div>
          <div class="content">
              <h3>Vandana Yadav, Pune ,India</h3>
              <p>How are you doing? Hope you are doing well.
We had a great trip in India for 6days
And my family and I we can say that we have received a great service from your team.
All the hotels we stayed are very nice clean, staff served us the best including the clean and yummy food!</p>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="far fa-star"></i>
              </div>
          </div>
      </div>
  
      <div class="box">
          <div class="image">
              <img src="images/1c.jpg" alt="">
          </div>
          <div class="content">
              <h3>Shruti Sawant, Goa, India</h3>
              <p>We were so pleased with our trip that you organised. The guide, Ravy also a good person who always provided our need during this traveling. We had a low expectation before the trip but you have gave us the best service.</p>
              <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="far fa-star"></i>
              </div>
          </div>
      </div>
  
  </div>
  
  </section>	
<!-- testemonial End -->


<!-- services section starts  -->

<section class="services" id="services-id">

  <div class="heading mb-5">
     <h1>
       Services
  
  </h1>
  </div>

  <div class="box-container">

      <div class="box">
          <i class="fas fa-hotel"></i>
          <h3>Affordable Hotels</h3>
          <p style='font-size:20px'>We will provide you the best hotels for staying at a reasonable price with all the facilities.</p>
      </div>
      <div class="box">
          <i class="fas fa-utensils"></i>
          <h3>Food and Drinks</h3>
          <p style='font-size:20px'>The best qualities of food and drinks will be provided to you. The breakfast, lunch and dinner will be prepared by our top chefs.</p>
      </div>
      <div class="box">
          <i class="fas fa-bullhorn"></i>
          <h3>Safty Guide</h3>
          <p style='font-size:20px'>Our guides are worlds best guides. They have the best knowledge of all the places and they are well behaved.</p>
      </div>
      <div class="box">
          <i class="fas fa-globe-asia"></i>
          <h3>Around the World</h3>
          <p style='font-size:20px'>We provide the tour around all over the world. We have the best experience in world tours and other festival tours as well.</p>
      </div>
      <div class="box">
          <i class="fas fa-plane"></i>
          <h3>Fastest Travel</h3>
          <p style='font-size:20px'>We respect your time and that is the reason we provide travel facilities with great experience to our customers. </p>
      </div>
      <div class="box">
          <i class="fas fa-hiking"></i>
          <h3>Adventures</h3>
          <p style='font-size:20px'>Our one of the specialties is adventure tours. Customers who want some wild experience and want to do something can join us in the adventure tours.</p>
      </div>

  </div>

</section>

<!-- services section ends -->

<!-- ------------------------------call to action----------------------- -->
<section class="cta" id="contact">
  <h1>If you have any query, any kind of problem in planning your tour or any Question. Do not worry. Just fill in your details.</h1>
  <div class="">
  <a href="./contact-us.php">
    <button type="button" class="about-view btn3"  >Contact-Us</button>
    </a>
</div>
</section>

<!-- ---------------------------------------gallery------------------------------ -->




<section id="guide" class="spl-guides">
  <div class="container">
    <div class="gallary-header text-center">
      <h1>
      Gallery
      </h1>
      
    </div>
    <div class="spl-guide-content">
      <div class="row">
        <div class="col-6">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <h1>Some memories captured by our customers</h1>
          <div class="spl-guide-para">
            <!--  -->
          </div>
        </div>

        <div class="col-6">
         <div class="myhover">
            <div class="circle">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non laudantium quia suscipit sequi eveniet! Sapiente maiores nesciunt quae, aliquam sunt amet dignissimos itaque esse sit reiciendis, provident rerum, similique soluta.
              </p>
            </div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
          </div>
  
        </div>
          
      </div>

       

        

      </div>
    </div>
  

</section>
<!-- -------------------------footer-------------------------- -->
<footer>
  <section class="container-fluid last-section d-md-flex flex-md-wrap justify-content-md-center justify-content-md-between justify-content-lg-around">

      <section class="about-1"data-aos="zoom-out-up">
          <h3>About Us</h3>
          <p>G-Tour is a tourism company. We provide tour all over the world. Our mission is to make memories that our customers will always remember.</p>
      </section>

      <section class="about-1 news-sectio"data-aos="zoom-out-up">
          <h3>Newsletter</h3>
          <p>Stay update with our latest</p>
          <input class="email-box pl-2" type="email" placeholder="Enter Email">
          <section class="email-arrow">
             
          </section>
          <span class="e-arrow">Enter</span>
      </section>

      <section class="about-1"data-aos="zoom-out-up">
          
             <h3 class="ml-md-2">Instragram Feed</h3>
          

          <section class="ml-md-2 insta-img row row-cols-5 row-cols-md-7 row-cols-lg-6 row-cols-xl-5">
             
              <section class="insta1 col"></section>
              <section class="insta2 col"></section>
              <section class="insta3 col"></section>
              <section class="insta4 col"></section>
              <section class="insta5 col"></section>
              <section class="insta6 col"></section>
              <section class="insta7 col"></section>
              <section class="insta8 col"></section>
              <section class="insta9 col"></section>
              <section class="insta10 col"></section>
            
          </section>
      </section>

      <section class="about-1"data-aos="zoom-out-up">
          <h3 >Follow Us</h3>
          <p>Let us be social</p>
              <a href="https://www.linkedin.com/in/gyandeep-yadav-b11230220/"><i class="fab fa-facebook-f"></i></a>
             <a href="https://www.linkedin.com/in/gyandeep-yadav-b11230220/"><i class="fab fa-twitter"></i></a>
              <a href="https://www.linkedin.com/in/gyandeep-yadav-b11230220/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/gyandeep-yadav-b11230220/"><i class="fab fa-pinterest-p"></i></a>
      </section>

     
  </section>
  <section class="copy-right">
      <p class="text-center text-lg-center"> Created By GYANDEEP YADAV</p>
  </section>
</footer>

<!-- -----------------------------------------end of footer-------------------------------- -->


<!-- 
<script>
  var x=document.getElementById('login');
  var y=document.getElementById('register');
  var z=document.getElementById('btn');
  function register()
  {
    x.style.left='400px';
    y.style.left='50px';
    z.style.left='110px';
  }
  function login()
  {
    x.style.left='50px';
    y.style.left='450px';
    z.style.left='0px';
  }

</script>

<script>
  var modal = document.getElementById('lsogin-form');
  window.onclick = function(event)
  {
    if (enent.target == model)
    {
      model.style.display = "none";

    }
  }
</script>  -->


  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
 integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->

 

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
 integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
<script src="js.js"></script>


    </body>
   
</html>