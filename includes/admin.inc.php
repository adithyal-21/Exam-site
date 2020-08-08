<?php
if(isset($_POST['subm'])){
    
    require 'data.inc.php';
    $use=$_POST['use'];
    $passw=$_POST['passw'];
    if(empty($use) || empty($passw) )
    {
        header("location: ../adminpage.php?error=emptyfields&uid=".$use);
exit();
    }
   
    else{
       if($use=='adithyaAd')
       {
           $sql="SELECT password FROM info WHERE user_name='adithyaAd'";
           $res=mysqli_query($conn,$sql);
           $row=mysqli_fetch_assoc($res);
           $ans=password_verify($passw,$row['password']);
           if($ans==true)
           {
            header("location: ../admin.php?login=success");
            exit();
           }
           else{
            header("location: ../adminpage.php?error=wrongpassword");
            exit();
       }
    }
       else{
        header("location: ../adminpage.php?error=nouser");
        exit();
       }
    }
}