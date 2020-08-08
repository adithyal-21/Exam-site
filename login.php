<!DOCTYPE html>
    <html lang="en">
      <head>
          <title>Login page</title>
          <link rel="icon" href="as.png" type="image/x-icon" />
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      
          
            </style>
       </head>


    
<body style="background: url(adi.jpg)no-repeat;background-position: center;background-size: cover;">
  <form action="includes/login.inc.php" method="POST">
  <div class="container" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;  ;color:whitesmoke;text-align:center;height:600px;width:450px;border:solid 2px black; border-radius: 18px;margin-top: 70px;
  -webkit-box-shadow:-1px 4px 26px 11px black;-maz-box-shadow:-10px 4px 26px 15px  black;box-shadow:  -1px 3px 26px 18px  black;">
    <div class="row">
        <div class="col-sm-12">
            <h1 style="font-style:italic">Login</h1>
          <img src="logo.png" style="max-width: 120px; border-radius: 60px;">
          <hr style="border-bottom: solid 1px black;border-color: whitesmoke;">
        </div>
    </div>
  <br>
  <?php
  if(isset($_GET['error']))
  {
    if($_GET['error']=="emptyfields")
    {
      echo'<p style="text-align:center;color:red;font-size:21px;font-weight:550;font-style:italic">All fields are empty!</p>';
    }
   else if($_GET['error']=="usernotfound")
    {
      echo'<p  style="color:red;text-align:center;font-size:21px;font-weight:550;font-style:italic">No user name!</p>';
    }
   else if($_GET['error']=="wrongpassword")
    {
      echo'<p  style="color:red;text-align:center;font-size:21px;font-weight:550;font-style:italic">Wrong password!</p>';
    }
    
  }
  ?>
   <div class="row">
    <div class="col-sm-5">
      
      <img src="https://img.icons8.com/android/24/000000/user.png">
&nbsp;&nbsp;<label>User Name</label>
    </div>
       
       <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="user name" name="uid" >
  
      </div>
    </div><br>

      <div class="row">
        <div class="col-sm-5">
            <img src="https://img.icons8.com/material-rounded/24/000000/password.png">&nbsp;&nbsp;&nbsp;&nbsp;<label>Password</label>
      </div>
       <div class="col-sm-6">
            <input type="password" class="form-control" placeholder="password" name="pwd">
      
      </div>
    </div><br>
    <div class="row">
      &nbsp;&nbsp; &nbsp;&nbsp; <div class="col-sm-12" style="font-size:18px;margin-left: -35%;">
        <input type="checkbox"   value="remenber">&nbsp;&nbsp;Remember me 
      </div>
    </div>
<br>
      <div class="row" >
      <div class="col-sm-12">
      <input type="submit" value="                 Login                 " class="btn btn-dark" name="submit-success">
        
</div>
      </div><br>
      <div class="row" >
        <div class="col-sm-12">
     <a href="forget.php" style="font-style:italic;margin-left:-50%;font-size: 14px;color: black;color:whitesmoke">Forgot your password/User name ?</a>
     </div>
     </div>
     <div class="row" >
      <div class="col-sm-12">
   <a href="signup.php" style="font-style:italic;margin-left:-54%;font-size: 14px;color: black;color:whitesmoke">Dont have account/register now</a>
    </div>
    </div>
    </div>
  </form>
        </body>
    </html>


