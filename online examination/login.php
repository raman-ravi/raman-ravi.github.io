<?php
session_start();
if(isset($_POST['usn']) && isset($_POST['password']))
{
$cn = mysqli_connect('localhost','root','');

 if (!$cn) {
   echo "unable to connect server";
 }

 if (!mysqli_select_db($cn,'exam')) {
   echo "database is not selected";
 }

 $usn=$_POST['usn'];
 $pass=$_POST['password'];
$sql="SELECT * FROM users WHERE usn='$usn' and password='$pass'";
$result = mysqli_query($cn,$sql) or 
            die(mysqli_error($cn));
if(mysqli_num_rows($result) >0)
{
  echo "available";
 

  while($row =mysqli_fetch_assoc($result))
  {

    $_SESSION['usn'] = $row['usn'];
    $_SESSION['name'] = $row['name'];

    if ($usn=='1jb15cs135') {
      header("location:admin.php");
    }
    else{
    header("location:signup2.php");}
  }

  
}
else
{
  echo "not available";
}



}
  ?>


<!DOCTYPE html>
<html>


<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
  <style>
  .spage{
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 5px;
    font-family: calibri;
    font-size: 15pt;
}




.spage:hover{
    background-color: #f44336;
    box-shadow: 0px 5px 5px 1px rgba(0,0,0,0.1);
    transform: scale(1.05);
}



  .tag{

      border: 2px solid red;
    border-radius: 6px;
    background-color: white;
    color:black;
    size: 7;

}
  
 .tag:focus{
  border: 3px solid #555;
 }


</style>
  


	<title>second</title>

</head>


<body>
<ul> 
  <li><a href="secondpage.php">Home</a></li>
  <li><a href="resultshow.php">Result</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="feedback.php">feedback</a></li>
  
</ul><br><br>
<center><a href="index.php" style="text-decoration: none;"><div id="main2"><font color="white" size="15">playStation</font></div></a></center>

<form method="POST" action="login.php">
  
   <center>
    
     <input type="text" name="usn" placeholder="USN*"  class="tag" style="margin-top: 20px; ; padding-right: 100px;padding-bottom: 10px"><br></center>

     <center>
     
     <input type="Password" name="password" placeholder="PASSWORD*"  class="tag" style="margin-top: 30px; ; padding-right: 100px;padding-bottom: 10px" ><br></center><br>
     <center>
       <input type="submit" name="chk" value="login">
     </center><br>
   <center><a href="forgotpass1.php"><font color="white">forgot password?</font> </a></center>  



     <br><br><br>
 <center><a class="spage" href="signup.php">I dont have an account</a>
</center>

</form>




</body>
</html>

