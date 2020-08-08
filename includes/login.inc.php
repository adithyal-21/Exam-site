<?php 
if(isset($_POST['submit-success']))
{
    require 'data.inc.php';
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

    if(empty($uid) || empty($pwd))
    {
        header("Location: ../login.php?error=emptyfields");
        exit();

    }

    else
    {
        $sql="SELECT * FROM info WHERE user_name='$uid'";
        $conne=mysqli_query($conn,$sql);
        if(mysqli_num_rows($conne)==1)
        {
            $server=mysqli_query($conn,"SELECT * FROM info WHERE user_name='$uid'");
            $row=mysqli_fetch_assoc($server);
            $connect=password_verify($pwd,$row['password']);
            if($connect==true)
            {
                session_start();
                $_SESSION['userid']=$row['idusers'];
                $_SESSION['useruid']=$row['user_name'];
                header("Location: ../index.php?login=success");
                exit();
            }
            else
            {
                header("Location: ../login.php?error=wrongpassword");
                exit();
           }
        }
            
            else
            {
                header("Location: ../login.php?error=usernotfound");
                exit();
            }
        }
    }  

   