<!DOCTYPE html>
        <html lang="en">
        <head>
          <title>Forgot password</title>
          <link rel="icon" href="forgot.png" type="image/x-icon" />
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
          <link href="edit.css" rel="stylesheet">
          <style>
              label{
                  color:whitesmoke;
              }
              </style>
    </head>
    <body style="background:url('abo.jpeg')no-repeat;background-position:center;background-size: cover"><br>
    <form action="includes/forgot.inc.php" method="POST">
    <div class="container" style="text-align:center;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-style:italic">
    <div class="row">
    <div class="col-sm-12">
<h1 style="color:whitesmoke;font-size:50px;font-style:oblique;font-family:'Courier New', Courier, monospace">RESET PASSWORD</h1>

    </div>
    </div>
    </div>
    <hr style="border-bottom: solid 3px black;border-color: whitesmoke">
  
    <div class="container" style="height:470px;width:450px;border:solid 2px black; border-radius: 18px;margin-top: 50px;-webkit-box-shadow:-1px 4px 26px 11px black;-maz-box-shadow:-10px 4px 26px 15px  black;box-shadow:  -1px 1px 10px 18px  black;">
    <div class="row" style="text-align:center;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-style:italic"> 
<div class="col-sm-12"><br>
    <h1  style="color:whitesmoke;font-size:40px;font-style:oblique;font-family:'Courier New', Courier, monospace" >Details</h1>
</div>
</div>
<hr style="border-bottom: solid 2px black;border-color: whitesmoke">
<?php
if(isset ($_GET['error']))
{
if ($_GET['error']=="emptyfields")
{
    echo'<p style="text-align:center;color:red;font-size:20px">All Fields are empty!</p>';
}
else if ($_GET['error']=="invalidusername")
{
    echo'<p style="text-align:center;color:red;font-size:20px">Invalid user!</p>';
}
else if ($_GET['error']=="passwordnotmatch")
{
    echo'<p style="text-align:center;color:red;font-size:20px">Password does not match!</p>';
}
else if ($_GET['error']=="wrongpassword")
{
    echo'<p style="text-align:center;color:red;font-size:20px">Password incorrect!</p>';
}
else if ($_GET['error']=="nousername")
{
    echo'<p style="text-align:center;color:red;font-size:20px"> No username!</p>';
}
else if ($_GET['error']=="success")
{
    echo'<p style="text-align:center;color:greenyellow;font-size:20px"> Successfully changed</p>';
}
}
?>
    <div class="row">
<div class="col-sm-5">
    <label>User Name:</label>
</div>
<div class="col-sm-6">
    <input type="text" class="form-control" placeholder="username" name="user">
</div>
  
</div>
<br>
<div class="row">
<div class="col-sm-5">
    <label>Old Password:</label>
</div>
<div class="col-sm-6">
    <input type="password" class="form-control" placeholder="old password" name="old">
</div>
  
</div>
<br>
<div class="row">
<div class="col-sm-5">
    <label>New Password:</label>
</div>
<div class="col-sm-6">
    <input type="password" class="form-control" placeholder="new password" name="pass">
</div>
  
</div>
<br>
<div class="row">
<div class="col-sm-5">
    <label>Re-enter Pass: </label>
</div>
<div class="col-sm-6">
    <input type="password" class="form-control" placeholder="re-enter password" name="repass">
</div>
</div>
<br>
<div class="row" style="margin-left:30%;">
        <div class="col-sm-12">
        <input type="submit" value="    Submit    " class="btn btn-secondary" name="sub">
</div>
</div>
    </div>
</form>
    </body>
    </html>
        
 