<?php 
 require "home.php";
 ?>
     
 <main>
     <?php
     if(isset($_SESSION['userid']))
     {
         echo '<p style="color:white;text-align:center; position: relative;font-size:22px;color:greenyellow;font-weight:900"><marquee behavior="scroll" direction="left">You are Logged In</marquee></p>';

     }
     else{
        echo '<p style="color:white;text-align:center; position: relative;font-size:22px;color:red;font-weight:900"><marquee behavior="scroll" direction="left">You are Logged Out</marquee></p>';
     }
     ?>
     </main>
    