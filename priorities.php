<?php include("perch/runtime.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>oneabq</title>
  <link rel="stylesheet" href="prioritiesdesign.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <div class="navBar">
      <header>

        <nav> 
          <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
          </div>


          <div class="oneabqlogo">
            <a href="oneabqhome.php"><img src="abqhoriz.png" class="logo"></a>
          </div>
         <div class="menu">
           <ul>
              <li><a href="aboutabq.php" style=font-size:15px;>About</a></li>
              <li class="activeNav"><a href="priorities.php" style=font-size:15px;><font color="red";>Priorities</font></a></li>
              <li><a href="contactpage.php" style=font-size:15px;>Contact</a></li>
              <a href="donate.php"><button class="buttonDonate">Donate</button></a>
           </ul>
          </div>
        </nav>
      </header>
    </div>
    <div class="splashPage">
    <h1 class="heading"><b>Our Priorities</b></h1>
    <p class="text">Over the next few years, the One Albuqueque Fund<br>aims to fund critical programs to address some of the<br>
        core challenges our city faces.</p>
    </div>
    <div class="campaign">
        <div class="slideshow-container">
            <div class="mySlides">
                <img src="police-icon.png" class="policeIcon">
                <h2 class="heading2"> Officer <br>Recruitment</h2>
                <p class="text2">Meeting the needs of our community to hire
                     hundreds of new officers will require targeted
                    marketing campaigns highlighting the benefits
                    of joining a reformed Albuquerque Police
                    Department as well as the benefits of joining
                    the Albuquerque community at-large. This
                     includes partnering with local entities to entice
                    new recruits with incentives such as short-term
                    housing loans, signing bonuses, day-care
                     options, and moving support.</p>
                
            </div>
          
            <div class="mySlides">
                <img src="school-icon.png" class="school-icon">
                <h2 class="heading2"> Youth<br> Opportunity </h2>
                <p class="text2">
                  While the City has only tangential ability to
                  impact the classroom and school day, there is
                  substantial opportunity to assist with before and
                  after school programs, and summer programs.
                  Efforts on this front will focus on utilizing the
                  hundreds of programs and partnerships the city
                  is already engaged with and providing scaling
                  funds to fill out, and increase, opportunities at
                  existing programs such as swim lessons, library
                  programs, meals and nutrition, and open-space
                  activities to name a few.</p>
                
            </div>
          
            <div class="mySlides">
                <img src="work-icon.png" class="work-icon">
                <h2 class="heading2"> Workforce<br> Training </h2>
                <p class="text2">
                  To support our local small businesses, we need
                  to ensure that they have the tools necessary to
                  grow and expand. We will help establish a job-
                  training fund that local businesses can apply to
                  for assistance in hiring an additional employee
                  – growing by an “increment of one.” We will
                  also fund mentorship and advisement
                  opportunities to help support entrepreneurs get
                  off the ground, especially in the creative
                  economy, by strengthening the newly created
                  Job Training Albuquerque program and our
                  partnerships with CNM.</p>
                
            </div>

            <div class="mySlides">
                <img src="handhouse-icon.png" class="handhouse-icon">
                <h2 class="heading2"> Hosuing<br> Vouchers</h2>
                <p class="text2">
                The primary need of individuals and families
                experiencing homelessness is a home.Once
                housed, individuals and families can move
                forward with their lives. It will take
                approximately $13 million to fund enough
                housing vouchers to make a meaningful,
                permanent change in the homelessness
                epidemic. The City is already investing millions
                to help address these needs, but significant
                support from the community is needed as well
                to truly transform the current situation.</p>
                
              </div>
          
            <!-- Next/prev buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          
          <!-- Dots/bullets/indicators -->
          <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
          </div>
    </div>
<div class="footer">
  <div style="border-left: solid black; height: 150px; margin-left: -10px;">
            <div class="row">
                <div class="col-md-4">
                  <div class="contactUs">
                    <p><b>CONTACT US</b></p>
                  </div>
                  <div class="contactUs2">
                    <p><b>Steve Fitzer, Development Director<br></b>
                    +1.505.270.4079<br>
                    stevefitzer@onealbuquerque.org<br>
                    PO BOX 25125<br>
                    Albuquerque NM 87125-5125</p>
                  </div>
                </div>
                <div class="col-md-4">
                    <img src="abqhoriz2.png" class="footerLogo"> 
                </div>
                <div class="col-md-4 , links">
                    <ul>
                        <li><a href="oneabqhome.php"><b>Home</b></a></li>
                        <li><a href="aboutabq.php"><b>About</b></a></li>
                        <li><a href="priorities.php"><b>Priorities</b></li>
                        <li><a href="contactpage.php"><b>Contact</b></a></li>
                        <li><a href="donate.php"><b>Donate</b></a></li>
                    </ul>
                </div>
              </div>
<div class="row">
        <div class="col-md-2"></div>
           <div class="col-md-8 , rights">
            <p>2019 City of Albuquerque | All Rights Reserved | The offical website for the One Albuquerque Fund</p>
       </div> 
        <div class="col-md-2"></div>
        </div>
</div>    

<script src="oneabq.js"></script>   

</body>
</html>