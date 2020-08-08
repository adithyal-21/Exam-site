<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page</title>
  <link rel="icon" href="do.jpeg" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .carousel-caption h3{
      color:linen;
      position:absolute;
     top:-210px;
     left: 65px;
     font-size: 42px;
     font-style: oblique;
     font-weight: 550;
    }
   
    p{
      color:whitesmoke;
      font-style: italic;
      font-family:'Courier New', Courier, monospace;
    }
    
    .active{
      font-style:oblique;
      font-family:'Courier New', Courier, monospace;
      font-size:15px;
      font-weight: 530;
      color:lightyellow;
      position:relative;
     
    }
    .actives{
      font-style:oblique;
      font-family:'Courier New', Courier, monospace;
      font-size:15px;
      font-weight: 530;
      color:lightyellow;
      position:relative;
     
    }
    
    

    </style>
</head>

<body style="background:url(adi.jpg)no-repeat;background-position: center;background-size: cover;height: 100%;">

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:white;font-style:italic;  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-weight:600px"><span class="glyphicon glyphicon-education"></span>&nbsp;Exam-site</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
        <li class="active"><a href="adout.html"><i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;About</a></li>
        <li class="active"><a href="contact.html"> <i class="glyphicon glyphicon-earphone"></i>&nbsp;Contact-us</a></li>
    
      </ul>
     
    
      <ul class="nav navbar-nav navbar-right">
        <li  class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li  class="active"><a href="adminpage.php"><span class="glyphicon glyphicon-book"></span> Admin</a></li>
        </ul>
        <?php
        if(isset($_SESSION['useruid']))
     {
       echo'<ul class="nav navbar-nav navbar-right">
       <li  class="active"><a href="includes/logout.inc.php" style="color:red"><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li>
    </ul>';
     }
     else{
       echo'<ul class="nav navbar-nav navbar-right">
       <li  class="active" ><a href="login.php" style="color:greenyellow"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
       </ul>';
     }
       ?>
    
   </div>
  </nav>
  <?php
     if(isset($_SESSION['userid']))
     {
       echo'<p style="color:greenyellow;font-family:Zapf Chancery, cursive;font-size:23px;postion:absolute;text-align:center">'.$_SESSION['useruid'].'</p>';
     }
     else
     {
echo"<script>alert('Logged out')</script>";
     }
     ?>
  
  <div class="container" >
    <div class="row">
      <div class="col-sm-8">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
    
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="ZUdkQ2pddA.jpg" style="filter: blur(3px);">
              <div class="carousel-caption">
                <h3>Online Courses</h3>
                
              </div>      
            </div>
    
            <div class="item">
              <img src="ZUFmQmZQcg.jpg" style="filter: blur(5px);">
              <div class="carousel-caption">
                <h3>Register Now</h3>
              
              </div>      
            </div>
            
            <div class="item">
              <img src="ad.jpg" style="filter: blur(5px);">
              <div class="carousel-caption">
                <h3>Get certified</h3>
              
              </div>      
            </div>

          </div>
    
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
<div class="col-sm-3" style="border:solid 2px black;height:465px;width:390px;border-radius: 8px;border-color: whitesmoke;;background: url(adi.jpg);border-style:ridge;border-width: 3px;"><br>
  <img src="https://img.icons8.com/nolan/64/saving-book.png">&nbsp;&nbsp;&nbsp;<label style="color:whitesmoke;font-size:25px;font-family:'Courier New', Courier, monospace ;font-style: italic;">COURSES OFFERED</label>
  <hr  width="100%" style="border-bottom: solid 1px black;border-color: whitesmoke;">
  <p>
    * Introduction to java<br>
    * Introduction to c language<br>
    * About javascript<br>
    * Introduction to c++<br>
    * About python<br>
    * HTML and css<br>
    * Data structres<br>
    * Machine Learning
  </p>
  <h3 style="color:white;text-align: center;">*******</h3>
</div>
      </div>
      </div>
      <br>
      <div class="row" style="padding: 0px;">
        <div class="col-sm-3">
        <div class="well"  style="border-radius: 8px;border-color: whitesmoke;background: url(adi.jpeg);border-style:ridge;border-width: 3px;">
          
          <center><img src="https://img.icons8.com/officel/80/000000/saving-book.png"></center>
          <p>We provide the best Examination tips and Shortcut to solve the problems so that you can crack any type of exam easily.</p>
         
        </div>

      </div>
      <div class="col-sm-3" >
        <div class="well"  style="border-radius: 8px;border-color: whitesmoke;background: url(adi.jpg);border-style:ridge;border-width: 3px;">
         <center> <img src="https://img.icons8.com/dusk/64/000000/classroom.png"></center><br>
          <p>We provide the courses which will help you too crack questions based on it and we provide you the most experinced lectures </p>
        </div>

      </div>
      <div class="col-sm-3">
        <div class="well" style="border-radius: 8px;border-color: whitesmoke;background: url(adi.jpg);border-style:ridge;border-width: 3px;">
          <center><img src="https://img.icons8.com/dusk/64/000000/membership-card.png"></center><br>
          <p>You can register to any of the courses learn it and there will be weekly assesment on it so that you can get a clear picture of the course</p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="well" style="border-radius: 8px;border-color: whitesmoke;background: url(adi.jpg);border-style:ridge;border-width: 3px;">
         <center> <img src="https://img.icons8.com/dusk/64/000000/medal.png"></center><br>
          <p>After all the assesment and tutorial there will be a exam on it where you can register and get a certificate of that course</p>
      </div>
      </div>
    
  
</body>
</html>
