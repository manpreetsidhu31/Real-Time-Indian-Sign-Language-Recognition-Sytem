<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Adroit - Introdcing you to the platforms' features. </title>

  <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/mobster.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-floating" >
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../assets/img/logof.png" alt="Logo" width="200">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-lg-5 mt-3 mt-lg-0">
        <li class="nav-item dropdown active">
          <a class="nav-link" href="about.html">VISUALIZATION</a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">CONCEPT THEORY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="updates.html">QUIZ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">SCOREBOARD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">CONTACT US</a>
        </li>

        <li class="nav-item">
   
                                             
                                                <a class="nav-link" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                                                    <!--img src="images/user.png" alt="" width = "30px" height = "30px" fa fa-user fa-lg"/-->
                                                    <span class="admin-name"><?php  echo $_SESSION["username_u"]; ?><i class="fa fa-search"></i></span>
                                                   
                                                </a>
                                                

                                                    <li><a class="nav-link" href="http://localhost/user/adroit/homepage.php"><span class="edu-icon edu-locked author-log-ic"></span>LogOut</a>
                                                    </li>

      </ul>
      
    </div>
  </div>
</nav>
  
<div class="page-hero-section bg-image hero-home-1" style="background-image: url(../assets/img/123.svg);">
  <div class="hero-caption pt-5">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-lg-6 wow fadeInUp">
          <div class="badge mb-2"><span class="icon mr-1"><span class="mai-globe"></span></span> An intuitive idea for learners </div>s
          <h1 class="mb-4" style="color: #6600cc">Visualization with 2D animation</h1>
          <p class="mb-4">Adroit provides you with a very interactive Visualization Feature. Algorithm visualization graphically illustrates how algorithms work and how they sort content. Specifically, visualization uses visual data to communicate information in a manner that is universal, fast, and effective.<br>This form of visual learning uses various forms of visual stimulation so that the user can interpret the information and henceforth easily memorize and understand the subject being presented to them.</p>
          
          <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="../../visualization/final/visindex.php" class="btn btn-primary rounded-pill">Check it out yourself!</a></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item " href="../../visualization/manpreet/other/sort_index.php">Sorting</a>
            <a class="dropdown-item" href="../../visualization/manpreet/other/stackmain.php">Stack:POP and PUSH</a>
            <a class="dropdown-item" href="../../visualization/manpreet/other/queue.php">Queue</a>
            <a class="dropdown-item" href="../../visualization/manpreet/dijkstra/index.php">Dijkstra's Algorithm</a>
            <a class="dropdown-item" href="../../visualization/manpreet/bst/index.php">Binary Search Tree</a>
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block wow zoomIn">
          <div class="img-place mobile-preview shadow ">
            <img src="../assets/img/visual_image_2.jpeg" alt="" >
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Clients -->
<div class="page-section mt-5" >
  <div class="container"  style="background-color :rgb(253, 255, 157)">
    <div class="row">
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="../assets/img/clients/tree-structure.png" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="../assets/img/clients/spaces_-LEybeKogIn-6VllQQKY_avatar.png" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="../assets/img/clients/ds_tdq2BPh.png" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="../assets/img/clients/828419_network_512x512.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div> <!-- End clients -->

<div class="position-realive bg-image" style="background-image: url(../assets/img/Dalmatian-Spots.svg);">

<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 py-3">
        <div class="img-place mobile-preview shadow wow zoomIn">
          <img src="../assets/img/visual_image_3.jpg" alt="" style="width: 550px">
        </div>
      </div>
      <div class="col-lg-6 py-3 mt-lg-5">
        <div class="iconic-list">
          <div class="iconic-item wow fadeInUp">
            <div class="iconic-md iconic-text bg-warning fg-white rounded-circle">
              <span class="mai-cube"></span>
            </div>
            <div class="iconic-content">
              <h1 style="color: #800080">Concept Theory</h1>
              <p style = "font-size: 16px">Theories help to organize relevant empirical facts (empirical means they can be observed or measured) in order to create a context for understanding phenomena.  Theories are not meant to be eternal entities. They are designed to exist only as long as they continue to explain facts or connect the relevant data dots. When an abundance of new data are shown to conflict with established theories, they are discounted or restructured. </p>
            </div>
          </div>
          </div>
          <div class="iconic-item wow fadeInUp">
            <div class="iconic-md iconic-text bg-indigo fg-white rounded-circle">
              <span class="mai-desktop-outline"></span>
            </div>
            <div class="iconic-content">
              <h5>Easy Access</h5>
              <p class="fs-small">You simple need a good working computer screen to access the features of this website and you're ready to experience the wonders of learning algorithms through visualization.</p>
               
               <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="#" class="btn btn-primary rounded-pill">Theorize your concepts</a></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item " href="concept/sort.php">Sorting</a>
            <a class="dropdown-item" href="concept/stack.php">Stack: POP and PUSH</a>
            <a class="dropdown-item" href="concept/queue.php">Queue </a>
            <a class="dropdown-item" href="concept/dijkstra.php">Dijkstra's Algorithm</a>
            <a class="dropdown-item" href="concept/bst.php">Binary search tree</a>
            
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Clients -->
<div class="page-section mt-5">
  <div class="container"  style="background-color :rgb(253, 255, 157)">
    <div class="row">
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="../assets/img/clients/828419_network_512x512.png" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="../assets/img/clients/ds_tdq2BPh.png" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="../assets/img/clients/spaces_-LEybeKogIn-6VllQQKY_avatar.png" alt="">
        </div>
      </div>
      <div class="col-sm-6 col-lg-3 py-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="../assets/img/clients/tree-structure.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div> <!-- End clients -->

<div class="position-realive bg-image" style="background-image: url(../assets/img/Dalmatian-Spots.svg);">
<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1 py-3 mt-lg-5 wow fadeInUp">
        <h1 class="mb-4" style="color: #800080">Quiz for thought!</h1>
        <p class="mb-4"> In the world of education there are many different ways to teach and to consolidate what has been learned. In years gone by, children were expected to memorise dates, formulae and figures by rote. But this method of teaching can be quite dull, to say the least! One tool becoming more common, especially in online education, is quizzes. They help with concentration, identify gaps in knowledge, build confidence and help children retain information. What's more - they're fun! We have generated various Quizzes ourselves based on the visualization of 
          topics as mentioned above. Do give them a shot!</p>
       
        <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <a href="http://localhost/user/select_exam.php" class="btn btn-outline-primary rounded-pill">Challenge yourself!!</a></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item " href="G:/college/6th Semester/FINAL YEAR PROJECT STUFF/Project Folder/quiz/index.html">Algorithms</a>
            <a class="dropdown-item" href="index-2.html">Stack: POP and PUSH</a>
            <a class="dropdown-item" href="index-2.html">Binary search tree</a>
            <a class="dropdown-item" href="index-2.html">Sorting</a>
          </div>
      </div>
      <div class="col-lg-5 py-3">
        <div class="img-place mobile-preview shadow wow zoomIn">
          <img src="../assets/img/quiz-img.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<div class="page-section bg-dark fg-white">
  <div class="container">
    <h1 class="text-center">Why Choose AdroIT</h1>

    <div class="row justify-content-center mt-5">
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn">
          <div class="mb-3">
            <img src="../assets/img/icons/rocket.svg" alt="">
          </div>
          <p class="fs-large">Fast enough</p>
          <p class="fs-small fg-grey">Our animations are aimed not taking up too much of your time.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="200ms">
          <div class="mb-3">
            <img src="../assets/img/icons/testimony.svg" alt="">
          </div>
          <p class="fs-large">Satisfied User</p>
          <p class="fs-small fg-grey">Our drive to give you our best performnace and have you happy with the outcome!!</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="400ms">
          <div class="mb-3">
            <img src="../assets/img/icons/promotion.svg" alt="">
          </div>
          <p class="fs-large">Interactive Quiz</p>
          <p class="fs-small fg-grey">Our Idea to provide you with a quiz system helps you voice out any doubts!!</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="600ms">
          <div class="mb-3">
            <img src="../assets/img/icons/coins.svg" alt="">
          </div>
          <p class="fs-large">Save Money</p>
          <p class="fs-small fg-grey">You do not need to pay for anny feature on this website as such!!</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="800ms">
          <div class="mb-3">
            <img src="../assets/img/icons/support.svg" alt="">
          </div>
          <p class="fs-large">24/7 Support</p>
          <p class="fs-small fg-grey">Our Admins will be with you almost at all times!
          !</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 py-3">
        <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="1000ms">
          <div class="mb-3">
            <img src="../assets/img/icons/laptop.svg" alt="">
          </div>
          <p class="fs-large">Full Features</p>
          <p class="fs-small fg-grey">Settle down,have fun and play around with all the features
          !!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section bg-image" style="background-image: url(../assets/img/Flat-Mountains.svg);">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-5 mb-5 mb-lg-0 wow fadeInUp">
        <h1 class="mb-4">ScoreBoard</h1>
        <p class="mb-5">to be made</p>
        <a href="http://localhost/user/sc.php" class="btn btn-gradient btn-split-icon rounded-pill">
          <span class="icon mai-calendar-outline"></span> Access the Scores
        </a>
      </div>
      <div class="col-lg-5 py-3">
        <div class="img-place mobile-preview shadow wow zoomIn">
          <img src="../assets/img/scoreboard_img.jpg" alt="">
        </div>
      </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section bg-image bg-image-overlay-dark" style="background-image: url(../assets/img/front.png);">
  <div class="container fg-white">
    <div class="row">
      <div class="col-md-8 col-lg-6 offset-lg-1 wow fadeInUp">
        <h2 class="mb-5 fg-white fw-normal">Visual Learning</h2>
        <p class="fs-large font-italic">Visual learning helps you to see the information to learn it. It captures the image of what it sees, based on spatial awareness, images, colour, brightness, or any other visual information.They can help you achieve and manage learning objectives. It helps you to think critically and develop skills such as problem-solving, decision making and better understanding.Visual content plays a very important part of human life. Visual learners account for around 65% of the population. Much research has been conducted to prove the effectiveness of visual learning. It is more appealing than hearing. Visual learners respond to information faster compared to textual information. </p>
        <p class="fs-large fg-grey fw-medium mb-5">Admins of Adroit</p>

        <a href="#" class="btn btn-outline-light rounded-pill">Read Stories <span class="mai-chevron-forward"></span></a>
      </div>
    </div>
  </div>
</div>

<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 py-3 mb-5 mb-lg-0">
        <div class="img-place w-lg-75 wow zoomIn">
          <img src="../assets/img/illustration_contact.svg" alt="">
        </div>
      </div>
      <div class="col-lg-5 py-3">
        <h1 class="wow fadeInUp">Need a help? <br>
        Don't worry just contact us</h1>

        <form method="POST" class="mt-5">
          <div class="form-group wow fadeInUp">
            <label for="name" class="fw-medium fg-grey">Fullname</label>
            <input type="text" class="form-control" id="name">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="email" class="fw-medium fg-grey">Email</label>
            <input type="text" class="form-control" id="email">
          </div>

          <div class="form-group wow fadeInUp">
            <label for="message" class="fw-medium fg-grey">Message</label>
            <textarea rows="6" class="form-control" id="message"></textarea>
          </div>

          <div class="form-group mt-4 wow fadeInUp">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="page-footer-section bg-dark fg-white">
  <div class="container">
    <div class="row mb-5 py-3">
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">Pages</h5>
        <ul class="menu-link">
          <li><a href="#" class="">Home</a></li>
          <li><a href="#" class="">Introduction</a></li>
          <li><a href="#" class="">Quizzes</a></li>
          <li><a href="#" class="">Scoreboard</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">AdroIT</h5>
        <ul class="menu-link">
          <li><a href="#" class="">About</a></li>
          <li><a href="#" class="">Admins</a></li>
          <li><a href="#" class="">References</a></li>
          
        </ul>
      </div>
      <div class="col-md-6 col-lg-4 py-3">
        <h5 class="mb-3">Contact</h5>
        <ul class="menu-link">
          <li><a href="#" class="">Contact Us</a></li>
          <li><a href="#" class="">Our workstation</a></li>
          <li><a href="#" class="">hello@adroit.com</a></li>
          <li><a href="#" class="">support@adroit.com</a></li>
          <li><a href="#" class="">+91 8379802925</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-4 py-3">
        <h5 class="mb-3">Subscribe to AdroIT for Premium Features!!</h5>
        <p>Get some offers, news, or update features of application</p>
        <form method="POST">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Your email..">
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary"><span class="mai-send"></span></button>
            </div>
          </div>
        </form>

        <!-- Social Media Button -->
        <div class="mt-4">
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-facebook"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-twitter"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-instagram"></span></a>
          <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-google"></span></a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 py-2">
        <img src="../assets/favicon.png" alt="" width="40">
        <!-- Please don't remove or modify the credits below -->
        <p class="d-inline-block ml-2">Copyright &copy; <a href="#" class="fg-white fw-medium">AdroIT ID</a>. All rights reserved</p>
      </div>
      <div class="col-12 col-md-6 py-2">
        <ul class="nav justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link">Terms of Use</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Privacy Policy</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Cookie Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

</body>
</html>



