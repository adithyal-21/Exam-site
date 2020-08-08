<html>
<head>
<title>data</title>
<link rel="icon" href="data.jpeg" type="image/x-icon" />
</head>
<body style="position:relative;left:25%;top:10%">


<table border="1" cellspacing="0"  style="text-align:center;">
<tr>
<th colspan="6"><h2>USER DETAILS</h2></th>
</tr>
<tr>
<th><h3>User name</h3></th>
<th><h3>email</h3></th>
<th><h3>date of birth</h3></th>
<th><h3>course</h3></th>
<th><h3>state</h3></th>
<th><h3>gender</h3></th>

</tr>
<?php
$servername="localhost";
$dBusername="root";
$dBpassword="";
$dBname="eams";
$conn=mysqli_connect($servername,$dBusername,$dBpassword,$dBname);
if(!$conn)
{
    die("connection failed" .mysqli_connect_error());
}

$sql="SELECT * FROM info";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0) 
{
    while($row=mysqli_fetch_assoc($result))
   {
       echo "<tr><td>".$row["user_name"]."</td><td>".$row["email"]."</td><td>".$row["date"]."</td><td>".$row["subject"]."</td><td>".$row["state"]."</td><td>".$row["gender"]."</td></tr>";
   }
   echo "</tabel>";
}
else{
    echo "result 0";
}
?>
</body>
</html>