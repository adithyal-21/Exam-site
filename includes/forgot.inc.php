<?php
if(isset($_POST['sub']))
{

    require 'data.inc.php';

$user=$_POST['user'];
$old=$_POST['old'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];

if(empty($user) || empty($old) || empty($pass) || empty($repass))
{
    header("Location: ../forget.php?error=emptyfields");
    exit();

}
else if(!preg_match("/^[a-zA-Z0-9]*$/", $user))
{
    header("Location: ../forget.php?error=invalidusername");
    exit();
}
else if($pass!==$repass)
{
    
    header("Location: ../forget.php?error=passwordnotmatch");
    exit();
}

else{

$sql="SELECT * FROM info WHERE user_name='$user'";
$conne=mysqli_query($conn,$sql);
if(mysqli_num_rows($conne)==1)
{
  $check=mysqli_query($conn,"SELECT password FROM info WHERE user_name='$user'");
  $row=mysqli_fetch_assoc($check);
  $ans=password_verify($old,$row['password']);
  if($ans==true)
  {
      $hash=password_hash($pass,PASSWORD_DEFAULT);
      $sql=mysqli_query($conn,"UPDATE info SET password='$hash' WHERE user_name='$user'");

      header("Location: ../forget.php?error=success");
      exit();

  }
else{
    header("Location: ../forget.php?error=wrongpassword");
    exit();
}
}
else{
    
    header("Location: ../forget.php?error=nousername");
    exit();
}
}
}

 

   