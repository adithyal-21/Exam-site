<!DOCTYPE html>
        <html lang="en">
        <head>
          <title>Registration Form</title>
          <link rel="icon" href="sig.jpeg" type="image/x-icon" />
       <link href="edit.css" rel="stylesheet">
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
         
        </head>
      
    <body style="background: url(reg.jpg)no-repeat;background-position: center;background-size: cover;">
      <form action="includes/sig.inc.php" method="POST">
         
       <br>
        <div class="container" style="text-align: center;color:whitesmoke">
            <div class="row">
                <div class="col-sm-12">
                <h1 style=" font-family: 'Courier New', Courier, monospace; font-size: 55px;">REGISTRATION FORM </h1>
                </div>
            </div>
        </div>
        
        <div class="b"><hr width="100%" style="border-bottom: solid 1px black;border-color: whitesmoke;">Personal Details<hr style="border-bottom: solid 1px black;border-color: whitesmoke;"></div>
     
          <?php
          if(isset($_GET['error'])){
              if($_GET['error']=="emptyfields")
              {
                  echo '<p style="text-align:center;color:red;font-size:20px">All Fields are empty!</p>';
              }
              else if($_GET['error']=="invalidmailidandusername")
              {
                  echo '<p  style="text-align:center;color:red;font-size:20px">Invalid Username or Email-id!</p>';

              }
              else if($_GET['error']=="success")
              {
                  echo '<p  style="text-align:center;color:greenyellow;font-size:20px">successfully signed</p>';

              }
            }
    ?>
    <div class="container" style=" margin-right:25%;text-align: left;margin-left: 1%;color:whitesmoke">
           <div class="row" >
                <div class="col-sm-2">
                    <label>Full Name:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Full Name" name="name" >
               </div> 
            </div><br>
            <div class="row" >
                <div class="col-sm-2">
                    <label>D.O.B:</label>
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="date" >
               </div>
            </div><br>
            <div class="row" >
                <div class="col-sm-2">
                    <label> Phone No.:</label>
                </div>
                <div class="col-sm-4">
                    <input type="number" class="form-control" placeholder="Phone Number" name="phone" >
               </div>
            </div><br>
            <div class="row" >
                <div class="col-sm-2">
                    <label> E-Mail:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="example@gmail.com" name="email" >
                    <?php
                     if(isset($_GET['error'])){
                     if($_GET['error']=="invalidemail")
              {
                  echo '<p style="color:red;text-align:center;font-size:20px">Invalid Email-id!</p>';
                  
              }
            }
            ?>
               </div>
            </div><br>
            <div class="row" >
                <div class="col-sm-2">
                    <label> College:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="college name" name="college" >
               </div>
            </div><br>
            <div class="row" >
                <div class="col-sm-2">
                    <label> Address:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Home Address" name="address" >
               </div>
            </div><br>
            <div class="row" >
                <div class="col-sm-2">
                    <label>Subject:</label>
                </div>
                <div class="col-sm-4">
                  <select class="form-control" name="subject" class="reg"  required>
                      <option> Introduction to java</option>
                      <option>Introduction to c language </option>
                      <option>  About javascript</option>
                      <option>  Introduction to c++</option>
                      <option> About python </option>
                      <option>  HTML and css</option>
                  </select>
               </div>
            </div><br>
              
           
            <div class="row" >
                <div class="col-sm-2">
                    <label> Semister:</label>
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" placeholder="sem" name="sem" >
               </div>
               <div class="col-sm-2">
                <label> Register No.:</label>
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="USN" name="usn" >
           </div>
            </div><br>
           
            <div class="row" >
                <div class="col-sm-2">
                    <label>Course:</label>
                </div>
                <div class="col-sm-3">
                  <select class="form-control" name="course">
                      <option>Engineering</option>
                  </select>
               </div>
               <div class="col-sm-2">
                <label>Branch:</label>
            </div>
            <div class="col-sm-3">
              <select class="form-control" name="branch">
                  <option>Computer science</option>
                  <option>Information science</option>
                  <option>Electronics and communication</option>
                  <option>Mechanical Engineering</option>
                  <option>Civil Engineering</option>
              </select>
           </div>
               </div><br>
              
               <div class="row" >
                <div class="col-sm-2">
                    <label> City:</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="City Name" name="city" >
               </div>
               <div class="col-sm-2">
                <label> State:</label>
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control" placeholder="State" name="state" >
           </div>
               </div><br>
               
            <div class="row" >
                <div class="col-sm-2">
                    <label> Gender:</label>
                </div>
                <div class="col-sm-2" >
                <select  class="form-control" name="gender" >
                  
                <option>Male</option>
                <option>Female</option>
                </select>
               </div>
            </div>
        </div>
      <div class="b" > <hr width="100%" style="border-bottom: solid 1px black;border-color: whitesmoke;"> Login Details<hr style="border-bottom: solid 1px black;border-color: whitesmoke;">
      </div>
        <div class="container" style=" margin-right:25%;text-align: left;margin-left: 1%;color:whitesmoke">
            <div class="row">
                <div class="col-sm-2">
                    <label>User Name:</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="user name" name="user_name" >
                    <?php
                     if(isset($_GET['error'])){
                     if($_GET['error']=="usernametaken")
                     {
                         echo '<p  style="color:red;text-align:center;font-size:20px">User name taken!</p>';
                         
                     }
                     else  if($_GET['error']=="invalidusername")
                     {
                         echo '<p  style="color:red;text-align:center;font-size:20px">Invalid user name!</p>';
                         
                     }
                    }
                     ?>
                  </div>
                  </div><br>
            <div class="row" >
                <div class="col-sm-2">
                    <label>New password:</label>
                </div>
                <div class="col-sm-3">
                    <input type="password" class="form-control" placeholder="New password" name="password" >
               </div> 
            </div><br>
            <div class="row" >
                <div class="col-sm-2">
                    <label>Enter password:</label>
                </div>
                <div class="col-sm-3">
                    <input type="password" class="form-control" placeholder="Re-enter password" name="repassword" >
                    <?php
                     if(isset($_GET['error'])){
                    if($_GET['error']=="checkpass")
              {
                  echo '<p  style="color:red;text-align:center;font-size:20px">Password does not match!</p>';
                  
              }
            }
              ?>
               </div> 
            </div>
        </div>
        <hr width="100%" style="border-bottom: solid 1px black;border-color: whitesmoke;">
        <div class="container">
          
            <div class="row">
                <div class="col-sm-8" style="margin-left:40%;">
                    <input type="submit" value="Register" class="btn btn-secondary" name="submit">&nbsp;&nbsp;&nbsp;
                    <input type="reset" name="reset" class="btn btn-secondary">
                    
                    </div>
                    
            </div>
         </div>
         
    </div>
            </form>

         </body>


</html>
