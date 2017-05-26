<!DOCTYPE html>
<head>
    <title>Dhruv Jain | Portfolio</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>


<body class = "bodyy"> 

<div class="container-fluid light-grey-background">
      
          <div class="row orange-background">
            
            <div class="col-xs-1"></div>
            <div class="col-xs-1"><img src="https://s1.postimg.org/7chyid77x/DJ_portfolio.jpg" class="img-responsive img-small" ></div>
            <div class="col-xs-4"></div>
            <nav class="btn-group-xs col-xs-6 text-center">
      
               <a href="#ABOUT" class="text-white"> <button type="text" class="btn btn-responsive orange-background"><h4><b>About</b></h4></button></a>
               <a href="#PORTFOLIO" class="text-white"><button type="text" class="btn btn-responsive orange-background"><h4><b>Portfolio</b></h4></button></a>
               <a href="#CONTACT" class="text-white"> <button type="text" class="btn btn-responsive orange-background"><h4><b>Contact</b></h4></button>    </a>
     
            </nav>
          
          </div>

    

      <div class="col-xs-12">
                    <img class="img-responsive img-circle img-padding" src="images/mypic.jpg" alt="">
                    <div class="intro-text name">
                        <h1 class="text-center text-orange nameSize"><b>Dhruv Jain</b></h1>
                        <hr class="star-light">
                        <div class="text-center text-orange"><h3>Web Developer - Graphic Designer<br></h3></div>
                    </div>
                    <div></div>
                </div>
              </div>
                <!-- About Page -->
                <div class ="container-fluid orange-background" id="ABOUT">
                    <div class ="row">
                        <h1 class="text-blue text-center portfolio"><b>About Me</b></h1>
                        <hr class="star-light">
                    </div>
                    <div class="text-center">
                        <p class="size1">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                         <div class="block-padding"> <a class="text-white"href="document/resume.pdf" download="Dhruv Jain - Resume"><button class=" btn-primary btn-lg btn-block">Download Resume</button></a>
                        </div>
                    </div>
                </div>
                <!--Portfolio Page-->
                <div class ="container-fluid light-grey-background " id="PORTFOLIO">
                    <div class ="row">
                        <h1 class="text-orange text-center portfolio"-><b>Portfolio</b></h1>
                        <hr class="star-light">
                    </div>
                    <div class="row">
                          
                          <div class="col-lg-4 portfolio-item"><img src="images/DJ.jpg" alt="" class="img-responsive center-block bottom-padding"> </div>
                          
                          <div class="col-lg-4 portfolio-item"><img src="images/item-2.jpg" alt="" class="img-responsive center-block bottom-padding"> </div>
                          
                          <div class="col-lg-4 portfolio-item"><img src="images/item-1.jpg" alt="" class="img-responsive center-block bottom-padding"> </div><br>

                          <div class="col-lg-4 portfolio-item"><img src="images/SJ.jpg" alt="" class="img-responsive center-block bottom-padding"> </div>
                          
                          <div class="col-lg-4 portfolio-item"><img src="images/thanos.jpg" alt="" class="img-responsive center-block bottom-padding"> </div>
                          
                          <div class="col-lg-4 portfolio-item"><img src="images/flash.jpg" alt="" class="img-responsive center-block bottom-padding"> </div>
                          
                    </div>
                </div>
                <!-- Contact -->
                  <div class ="container-fluid orange-background"id="CONTACT">
                    <div class ="row">
                        <h1 class="text-blue text-center portfolio"><b>Contact Me</b></h1>
                        <hr class="star-light">
                    </div>
                    <div>
                        <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name"class=" size2">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email"class=" size2">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone "class="size2">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message" class=" size2">Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row text-center">
                            <div class="form-group col-xs-12 size2">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                          
                    </div>
                </div>


<div class="text-center">&copy;
  <?php
 echo date('Y'); ?> - Dhruv</div>


</body>