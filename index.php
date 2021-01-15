<!DOCTYPE html>
<html lang="en">
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Resume</title>

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
   <link rel="shortcut icon" href="images/favicon.png" >
   <?php
   include('config.php');
   ?>

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a href="index2.php">Tuan</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
	         <li><a class="smoothscroll" href="#resume">Resume</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
            <li><a href="admin/info.php">Admin</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->
      
      <?php 
         $sql="SELECT * from info,link where info.id='1' AND link.id=info.id";
         $res=mysqli_query($conn,$sql);
         $datas=mysqli_fetch_all($res);
         foreach($datas as $data)
         {
         echo '<div class="row banner">';
         echo   '<div class="banner-text">';
         echo   '<h1 class="responsive-headline">'."I'm ".$data[1].'</h1>';
         echo   '<h3>'.$data[2].'<h3>';
         echo '<hr />';
         echo '<ul class="social">';
         echo '<li>'.'<a href="'.$data[7].'">'.'<i class="fa fa-facebook">'.'</i>'.'</a>'.'</li>';
         echo '<li>'.'<a href="'.$data[8].'">'.'<i class="fa fa-instagram">'.'</i>'.'</a>'.'</li>';
         echo '<li>'.'<a href="'.$data[9].'">'.'<i class="fa fa-twitter">'.'</i>'.'</a>'.'</li>';
         echo '<li>'.'<a href="'.$data[10].'">'.'<i class="fa fa-skype">'.'</i>'.'</a>'.'</li>';
         echo '</ul>';
         echo  '</div>';
         echo '</div>';

         echo '<p class="scrolldown">';
         echo   '<a class="smoothscroll" href="#about">'.'<i class="icon-down-circle">'.'</i>'.'</a>';
         echo '</p>';
         }
      ?>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>
            <?php
            $sql="SELECT * from info where id='1'";
            $res=mysqli_query($conn,$sql);
            $datas=mysqli_fetch_all($res);
            foreach($datas as $data)
            {
            echo '<p>'.$data[3].'</p>';
            }
            ?>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">
               
               <?php 
               $sql="SELECT * from education where id='1'";
               $res=mysqli_query($conn,$sql);
               $datas=mysqli_fetch_all($res);
               foreach($datas as $data)
               {
                  echo  '<h3>'.$data[2].'</h3>';
                  echo  '<p class="info">'.$data[3].'<span>'."&bull;".'</span>'.'<em class="date">'.$data[4].'</em>'.'</p>';
                  echo  '<p>'.$data[5].'</p>';
               }
               ?>

               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Education -->


      <!-- Work
      ----------------------------------------------- -->
      <div class="row work">

         <div class="three columns header-col">
            <h1><span>Work</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

               <?php 
               $sql="SELECT * from work where id='1'";
               $res=mysqli_query($conn,$sql);
               $datas=mysqli_fetch_all($res);
               foreach($datas as $data)
               {
                  echo  '<h3>'.$data[2].'</h3>';
                  echo  '<p class="info">'.$data[3].'<span>'."&bull;".'</span>'.'<em class="date">'.$data[4].'</em>'.'</p>';
                  echo  '<p>'.$data[5].'</p>';
               }
               ?>

               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Work -->


      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

            <p>If you hope to become a web developer, you must understand HTML and CSS. HTML is the most used markup language across the web, and web developers use it to create web pages on the Internet. CSS, on the other hand, is used to style the website. It's responsible for the choice of fonts, colors and layout in a website's design. Whereas HTML lays the foundation for a webpage, CSS styles it.
            </p>

				<div class="bars">

				   <ul class="skills">
						<li><span class="bar-expand css"></span><em>CSS</em></li>
						<li><span class="bar-expand html5"></span><em>HTML5</em></li>
                  <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
                  <li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
					</ul>

				</div><!-- end skill-bars -->

			</div> <!-- main-col end -->

      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>Client Testimonials</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">
                  <?php 
                  $sql="SELECT * from testimonial where id='1'";
                  $res=mysqli_query($conn,$sql);
                  $datas=mysqli_fetch_all($res);
                  foreach($datas as $data)
                  {
                     echo '<li>';
                        echo '<blockquote>';
                           echo '<p>'.$data[2].'</p>';
                           echo '<cite>'.$data[3].'</cite>';
                        echo '</blockquote>';
                     echo '</li>';
                  }
                  ?>
                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div> <!-- row ends -->

       </div>  <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->


   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <p class="lead">Thank you for your time.<br>Please feel free to contact me if you need any further information.<br>I’m looking forward to your reply.
                  </p>

            </div>

         </div>

         <div class="row">

            <div class="eight columns">

               <!-- form -->
               <form action="" method="post" id="contactForm" name="contactForm">
					<fieldset>

                  <div>
						   <label for="contactName">Name <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
						   <label for="contactSubject">Subject</label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="1" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">Submit</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

					</fieldset>
				   </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address and Phone</h4>
					   <p class="address">
						   Jonathan Doe<br>
						   1600 Amphitheatre Parkway <br>
						   Mountain View, CA 94043 US<br>
						   <span>(123) 456-7890</span>
					   </p>

				   </div>
            </aside>

      </div>

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">
            
            <?php 
            $sql="SELECT * from link where id='1'";
            $res=mysqli_query($conn,$sql);
            $datas=mysqli_fetch_all($res);
            foreach($datas as $data)
            {
               echo '<ul class="social-links">';
               echo '<li>'.'<a href="'.$data[1].'">'.'<i class="fa fa-facebook">'.'</i>'.'</a>'.'</li>';
               echo '<li>'.'<a href="'.$data[2].'">'.'<i class="fa fa-instagram">'.'</i>'.'</a>'.'</li>';
               echo '<li>'.'<a href="'.$data[3].'">'.'<i class="fa fa-twitter">'.'</i>'.'</a>'.'</li>';
               echo '<li>'.'<a href="'.$data[4].'">'.'<i class="fa fa-skype">'.'</i>'.'</a>'.'</li>';
               echo '</ul>';
            }
            ?>

            <ul class="copyright">
               <li>&copy; Project resume</li>
               <li>Design by <a href="http://www.styleshout.com/" title="Styleshout" target="_blank">Styleshout</a></li>   
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>

</html>