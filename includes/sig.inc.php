<?php
if(isset($_POST['submit'])){
    
    require 'data.inc.php';

$name=$_POST['name'];
$date=$_POST['date'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$college=$_POST['college'];
$address=$_POST['address'];
$subject=$_POST['subject'];
$sem=$_POST['sem'];
$usn=$_POST['usn'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$city=$_POST['city'];
$state=$_POST['state'];
$gender=$_POST['gender'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

if(empty($name)||empty($date)||empty($phone)||empty($email)||empty($college)||empty($address)||empty($subject)||empty($sem)||empty($usn)||empty($course)||empty($branch)||empty($city)||empty($state)||empty($gender)||empty($user_name)||empty($password)||empty($repassword))
{
header("location: ../signup.php?error=emptyfields&uid=".$user_name);
exit();
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $user_name))
{
    header("location: ../signup.php?error=invalidmailidandusername");
    exit();
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    header("location: ../signup.php?error=invalidemail&user_name=".$user_name);
exit();
}
else if(!preg_match("/^[a-zA-Z0-9]*$/", $user_name))
{
    header("location: ../signup.php?error=invalidusername");
    exit();
}
else if($password!==$repassword)
{
    header("location: ../signup.php?error=checkpass&user_name=".$user_name);
exit();
}
else{
    $sql="SELECT * FROM info WHERE user_name='$user_name'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0)
    {
        header("location: ../signup.php?error=usernametaken");
        exit();
    
    }


else
{
    $hashedpass=password_hash($password,PASSWORD_DEFAULT);
$sql="INSERT INTO info(name,date,phone,email,college,address,subject,sem,usn,course,branch,city,state,gender,user_name,password,repassword)VALUES('$name','$date','$phone','$email','$college','$address','$subject','$sem','$usn','$course','$branch','$city','$state','$gender','$user_name','$hashedpass','$hashedpass');";
mysqli_query($conn,$sql);

header("Location: ../signup.php?error=success");
}
}
}



