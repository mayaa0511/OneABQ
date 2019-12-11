<?php include("perch/runtime.php")?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>oneabq</title>
  <link rel="stylesheet" href="donate.css">
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
              <li><a href="priorities.php" style=font-size:15px;>Priorities</a></li>
              <li><a href="contactpage.php" style=font-size:15px;>Contact</a></li>
              <button class="buttonDonate"><b><font color="red";>Donate</font></b></button>
           </ul>
          </div>
        </nav>
      </header>
    </div>
<div class="donateSplashPage">
    <h1 class="heading"><b>Make a Donation</b></h1>
    <p class="text">Over the next few years, the One Albuquerque Fund<br>
    aims to fund critical programs to address some of the<br>
     core challenges our city faces.</p>
</div>

<div class="donateOptions">
  
  <div style="border-left: solid black; height: 425px; margin-left: 130px;">
  <div style="border-right: solid black; height: 425px; margin-right: 130px;">
    <div class="row">
      <div class="col-sm-3">
        <div class="policeIcon">
      <img src="police-icon.png" height="80px" width="80px"> 
    </div>
        </div>
        <div class="col-sm-3">
            <h2><b>Officer<br>Recruitment</b></h2>
            <p>Your donation to the officer recruitment<br>
            fund will help the Albuquerque Police<br>
            Department recruit more officers to protect the city.</p>
        </div>
        <img src="school-icon.png" height="80px" width="80px">
        <div class="col-sm-3">
            <h2><b>Youth<br>Opportunity</b></h2>
            <p>Your donation to the officer recruitment<br>
            fund will help the Albuquerque Police<br>
            Department recruit more officers to<br>
            protect the city.</p>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"> 
          <div class="workIcon">
          <img src="work-icon.png" height="80px" width="80px">
        </div>
        </div>
        <div class="col-sm-3">
                    <h2><b>Workforce<br>Training</b></h2>
                    <p>Your donation to the officer recruitment<br>
                    fund will help the Albuquerque Police<br>
                    Department recruit more officers to protect the city.</p>
        </div>
        <img src="handhouse-icon.png" height="80px" width="80px">
        <div class="col-sm-3">
                    <h2><b>Housing<br>Vouchers</b></h2>
                    <p>Your donation to the officer recruitment<br>
                    fund will help the Albuquerque Police<br>
                    Department recruit more officers to protect the city.</p>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
  </div>
  </div>
</div>
<div class="donateCta">  <button class="donating">Donate</button> </div>


<div class="footer">

                    <div style="border-left: solid black; height: 150px; margin-left: -10px;">
                    
       
        <div class="row">
            <div class="col-md-4">

                <div class="contactUs">

                  <p><b>CONTACT US</b></p>
                </div>
            <div class="contactUs2">
                <p>onealbuquerque@cabq.com</p>
                <p>+1.505.768.3000</p>
            </div>
            </div>

            <div class="col-md-4 , footerLogo" >
                <img src="abqhoriz2.png" class="footerLogo"> 
            </div>
            <div class="col-md-4 , links">
                <a href="oneabqhome.html"><p><b>Home</b></p></a>
                <a href="aboutabq.html"><p><b>About</b></p></a>
                <a href="priorities.html"><p><b>Priorities</b></p></a>
                <a href="contactpage.html"><p><b>Contact</b></p></a>
                <p><b>Donate</b></p>
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



<script type="text/javascript">

    $(document).ready(function() {
      $(".menu-icon").on("click", function() {
        $("nav ul").toggleClass("showing");
      });
    });
  
  
    $(window).on("scroll", function() {
      if($(window).scrollTop()) {
        $("nav").addClass("black");
      }
      else {
         $("nav").removeClass("black");
      }
    })
</script>
<script src="oneabq.js"></script>
</body>
</html>