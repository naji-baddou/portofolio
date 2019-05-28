
<!------------------------------------------------------------  Included language translation  ---------------------------------------------------------->
<?php
    require "php/core/init.php";
?>

<!------------------------------------------------------------------  HMTL FULL BODY  ---------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
            <!-- Required meta tags -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- StyleSheet css  -->
            <link rel="stylesheet" href="CSS/new.css">
            <link rel="stylesheet" type="text/css" href="timeLine.css">


        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Dancing+Script|Roboto'>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <!-- Portfolio font-awesonme boostrap cdn link -->
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'> 
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <!-- JavaScript link -->
            <script src="myJS.js"></script>
            
                                                <title> MY PORTFOLIO </title>
</head>
<body>  
  

<!-------------------------------------------------------------------  Main Header  ---------------------------------------------------------------------------> 
     	
    <section class="fa-nav">
		
            <nav class="navbar navbar-expand-md navbar-light bg-light p-2 mb-1 bg-secondary text-white" class="fixed">
                <a class="logo-brand" class="navbar-brand" href="#"><i>Naji</i><sup>Baddou</sup></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="#Home">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT</a>
                        <li class="nav-item">
                        <a class="nav-link" href="#services">Service</a> 
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " href="#Portfolio" tabindex="-1" aria-disabled="true">PORTFOLIO</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#contact">CONTACT</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#Admin">ADMIN</a>
                        </li>
                </ul>
            </div>  
                
                <!-- <ul  class="selectpicker" >
                    <form methor="get"  class="dd"> 
                        <select  class="btn btn-light text-secondary" name="lang" onchange="this.form.submit()" >
                        <option value="en" <?= $enselecetd?> >English</option>
                        <option value="fr" <?= $frselecetd?>> French</option>
                        </select>
                    </form>
                </ul> -->
            </nav>
    </section>  
    
        

<!---------------------------------------------------------------------  hero image   ------------------------------------------------------------------>

<section id="Home" class="hero-general">

       <div >
           <div class="hero-content">
               <img src="img/naji.jpg" class="img">
                 <!-- hi! i'm naji -->
                    <div class="demo">
                      <div> <h1 style="color:#fff;"><?= $lang[$_SESSION['language']]['greet']?></h1> </div>
                      </div>
                     <!-- web design/ web development -->
                      <h3 id="hero-text-animation" style="color:rgb(121, 121, 121);"><?= $lang[$_SESSION['language']]['firstinfo']?></h3>
                      <!-------------------Download button------------------->
                    
           </div>
     </div>

         
</section>
 
<!-------------------------------------------------------------------  ABOUT ME  ------------------------------------------------------------------>
       <section id="about">
        <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-titles mb-50"  class="section-title" >
                     <h4>About <span class="accent-text" >Me</span></h4>
                  </div>
               </div>
            </div>

            <div class="row left-xs left-sm left-md left-lg">
                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="about-text">
                             <!--HI, I'm Naji-->
                        <div  > <h2 <?= $lang[$_SESSION['language']]['first']?> <span class="accent-text" style="font-size: larger"><?= $lang[$_SESSION['language']]['last']?> </span></h2> </div>
                                <!-- A 23 years old men who seek for  -->
                            <p> <?=  $lang[$_SESSION['language']]['about'];?></p>
                            <!-- a simle happy life within his -->
                            <p><?=  $lang[$_SESSION['language']]['me'];?> </p>
                          <ul class="about-social">
                                 <!--Social icons for the about section-->
                                <!--These icons are font-awesome icons and more can be looked up at https://fontawesome.com/icons?d=gallery-->
                                    <li><a href="http://www.google.com"><i class="fab fa-linkedin"></i></a></li>
                                <!--Simply replace the google link with your social media link-->
                                <li><a href="http://www.google.com"><i class="far fa-envelope"></i></a></li>
                                    <li><a href="http://www.google.com"><i class="fab fa-github"></i></a></li> 
                         </ul>
                   </div>
            </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="about-resume">
                            <div class="skills">
                                <!-- My Skills -->
                                <h2><?=  $lang[$_SESSION['language']]['skills'];?></h2>
                                    
                                <div class="skill-progress-container">
                                    <!-- Web Development -->
                                <p><?=  $lang[$_SESSION['language']]['web dev'];?></p>
                                    <div class="skill-bar">
                                        <div class="progress" style="height:7px;">
                                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%; height:9px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="bar-percent development" class="inner-percent"></div>
                                    </div>
                                </div>
                                    
                                <div class="skill-progress-container" >
                                    <!-- Web Design -->
                                    <p><?=  $lang[$_SESSION['language']]['web des'];?></p>
                                    <div class="skill-bar">
                                            <div class="progress" style="height:7px;">
                                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>                                    </div>
                                </div>
                                    
                                <div class="skill-progress-container">
                                    <!-- Management -->
                                    <p><?=  $lang[$_SESSION['language']]['manage'];?></p>
                                    <div class="skill-bar">
                                            <div class="progress" style="height:7px;">
                                         <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                
                                </div>
                            </div>
                                
                            <div class="education">
                                    <!-- My Education -->
                                    <h2><?=  $lang[$_SESSION['language']]['Education'];?></h2>
                                 <div class="eduction-block">

                                    <!-- baccalaureat in physics science -->
                                    <p><?=  $lang[$_SESSION['language']]['bach'];?></p>
                                     <!-- diploma of technician specialized in business management -->
                                    <p><?=  $lang[$_SESSION['language']]['diploma'];?></p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
<!-- --------------------------------------------------------------  Timeline -------------------------------------------- -->
     
     
<!----------------------------------------------------------------   My Services ----------------------------------------------------------------->
<section class="services pt-100 pb-50" id="services">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center"  class="ml10"  class="letters" >
                  <div class="section-title mb-50"  class="text-wrapper" >
                     <p>what i can do</p> 
                     <h4>my <span>services</span></h4>
                  </div>
               </div>
            </div>
            
  

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

        <div class="row">
               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-laptop"></i>
                     <!-- Web Design -->
                     <h4><?=  $lang[$_SESSION['language']]['web design'];?> </h4>
                     <!-- i can manage creating a simple web design based on your thoughts -->
                     <p><?=  $lang[$_SESSION['language']]['design'];?></p>
                  </div>
                </div>

        <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-gears"></i>
                     <!-- Web Development -->
                     <h4><?=  $lang[$_SESSION['language']]['web development'];?></h4>
                     <!--  -->
                     <p><?=  $lang[$_SESSION['language']]['web text'];?> </p>
                  </div>
               </div>

        <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-mobile"></i>
                     <!-- Responsive Design -->
                     <h4><?=  $lang[$_SESSION['language']]['responsive'];?></h4>
                     <p><?=  $lang[$_SESSION['language']]['web responsive'];?> </p>
                  </div>
               </div>

        <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-magic"></i>
                     <!-- clean -->
                     <h4><?=  $lang[$_SESSION['language']]['clean'];?></h4>
                     <!-- code -->
                     <p><?=  $lang[$_SESSION['language']]['code'];?></p>
                  </div>
               </div>

        <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-pencil"></i>
                     <!-- Custom Support -->
                     <h4><?=  $lang[$_SESSION['language']]['custom'];?></h4>
                     <p><?=  $lang[$_SESSION['language']]['support'];?> </p>
                  </div>
               </div>

        <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-fa fa-lightbulb-o"></i>
                     <!-- Branding -->
                     <h4><?=  $lang[$_SESSION['language']]['branding'];?></h4>
                     <p> <?=  $lang[$_SESSION['language']]['branding text'];?></p>
                  </div>
               </div>
            </div>
         </div>
</section>
<!----------------------------------------------------------------   PORTFOLIO   ----------------------------------------------------------------->
    <!-- <iframe id="Portfolio" src="ok/index.html" frameborder="0" style="width:110%; height: 450px;"></iframe>          -->
<div id="Portfolio" class="container">
<div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-titles mb-50"  class="section-title" >
                     <h4>My<span class="accent-text" > Portfolio</span></h4>
                  </div>
               </div>
            </div>
    <div class="row">
       
        <div class="col-md-4 col-sm-6">
            <div class="box">
                <img src="img/youcode.PNG" alt="">
                <div class="box-content">
                    <h3 class="title">Site Youcode</h3>
                    <span class="post">Web developer</span>
                    <ul class="icon">
                        <li><a href="#"><i class="fab fa-gitlab"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="box">
                <img src="img/b.PNG" alt="">
                <div class="box-content">
                    <h3 class="title">SLACK</h3>
                    <span class="post">Web developer</span>
                    <ul class="icon">
                        <li><a href="#"><i class="fab fa-gitlab"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="box">
                <img src="img/clock.PNG" width="30px" height="30px" alt="">
                <div class="box-content">
                    <h3 class="title">Clock</h3>
                    <span class="post"></span>
                    <ul class="icon">
                        <li><a href="#"><i class="fab fa-gitlab"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="box">
                <img src="img/d.PNG" width="30px" height="30px" alt="">
                <div class="box-content">
                    <h3 class="title">Home Page</h3>
                    <span class="post"></span>
                    <ul class="icon">
                        <li><a href="#"><i class="fab fa-gitlab"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------------------------------------------------CONTACT SECTION-------------------------------------------------------------->
<!-- <?php
    // if (
    // mail('aadambaddou123@gmail.com','','first',' '))
    // echo "msg send";
    
?>   -->
    <?php
if (isset($_POST['submit']))
{
        if(mail("aadambaddou123@gmail.com",$_POST['Subject'],"From :"."<".$_POST['email'].">"." "."Message :"." ".$_POST['message']))
        {
    
   }
}
      
 ?>
 <script>$( document ).ready(function(){
        $('#alert').fadeIn('slow', function(){
            $('#alert').delay(5000).fadeOut(); 
        });
    });</script>

   <section id="contact">
        <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-titles mb-50"  class="section-title" >
                    <h4>Contact <span  >Me</span></h4>
              </div>
         </div>
            
            <div class="row center-xs center-sm center-md center-lg">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="contact-info">
                        
                        <div class="contact-block">
                            <i class="fas fa-mobile-alt"></i>
                            <div class="contact-text">
                                <p> <?= $lang[$_SESSION['language']]['call']?></p>
                                <p>+212-629689143</p>
                            </div>
                        </div>
                        
                        <div class="contact-block">
                            <i class="far fa-envelope"></i>
                            <div class="contact-text">
                                <p>Email</p>
                                <p>najibaddou233@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-block">
                            <i class="fas fa-location-arrow"></i>
                            <div class="contact-text">
                                <p><?= $lang[$_SESSION['language']]['address']?></p>
                                <p>QU SMARA RUE TANSIFT N°10</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <form id="contact-form" method="POST">
                        <div class="field">
                        <?= $lang[$_SESSION['language']]['name']?><br>
                            <input type="text" name='name' id="name"  placeholder="name" required>
                        </div>
                        <div class="field">
                            Email<br>
                            <input type="text" name='email' id="email"  placeholder="name@gmail.com" required>
                        </div>
                        <div class="field">
                        <?= $lang[$_SESSION['language']]['subject']?><br>
                            <input type="text" name='Subject'id="subject"  placeholder="Your Subject" required>
                        </div>
                        <div class="field">
                        <?= $lang[$_SESSION['language']]['Message']?><br>
                            <textarea id="message" name="message" rows="10" cols="75" required placeholder="write somthing."></textarea>
                        </div>
                        <div class="field">
                            <input type="submit" name='submit'id="contact-submit" value="Send"><span id="status"></span>
                        </div>
                    </form>
                </div>
            
            </div>
        </div> 
       
             <!-- <div  id="alert" class="alert alert-primary" role="alert">
             message envoyer!
           </div> -->
         
        
        <div class="container">
	<div class="row-fluid">
        <div class="span8">
        	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13498.247752107027!2d-8.51877605367431!3d32.242959713836086!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1558625676819!5m2!1sfr!2sma"></iframe>
    	</div> 	
    </div>
</div>
    </section>

<!----------------------------------------------------------FOOTER SECTION------------------------------------------------------------------>

<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4"> view Cv</h5>
          <a download href="CV Downloaded.pptx" data-toggle="tooltip" title="Download My CV" class="paperclip" ><i class="fas fa-paperclip"></i></a>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#Portfolio">PROJECTS</a>
          </p>
          </li>
          <li>
            <p>
              <a href="#about">ABOUT Me</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#contact">contact</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#Home">Home </a>
          </p>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
            <i class="fas fa-home mr-3"></i> QU SMARA RUE TANSIFT N°20 EL YOUSSOUFIA MOROCCO</p>
          </li>
          <li>
            <p>
            <i class="fas fa-envelope mr-3"></i> najibaddou233@gmail.com</p>
          </li>
          <li>
            <p>
            <i class="fas fa-phone mr-3"></i></i> 212+ 0629689143</p>
          </li>
        </ul>

          </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

        <!-- linkedIn -->
        <ul class="icon">
             <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              
         </ul>
        <!-- gitlab -->
        <ul class="icon">
            <li><a href="#"><i class="fab fa-gitlab"></i></a></li>
         
        </ul>
        <!-- github -->
        <ul class="icon">
            <li><a href="#"><i class="fab fa-github"></i></a></li>
          
         </ul>
        
                          
                                            
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
  
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"> YOUCODE © 2018 Copyright: <span>MADE WITH LOVE</span>
    <a href=""> Youcode Students</a><div>&&</div><a href="">Naji Baddou</a>All Rights Reservces
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  
  <section class="culom">
            <div class="flgs">
  <a href="http://localhost/portfolio/?lang=en#"><img src="img/united-kingdom.png" class="flag"></a>
  <a href="http://localhost/portfolio/?lang=fr#"><img src="img/france.png" class="flag"></a>
  </div>
    
            </section>
          
<!-- Footer -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="js/particles.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/scrollmagic/minified/ScrollMagic.min.js"></script>
<script src="js/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.2/ScrollMagic.min.js'></script>
<script>$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});</script>
</body>
</html>
