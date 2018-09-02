<?php
session_start();
$_SESSION['name']='';
if (isset($_POST['usn']) && isset($_POST['contact'])) {
  
$cn = mysqli_connect('localhost','root','');
if (!$cn) {
  echo 'Unable to connect to server';
}
if (!mysqli_select_db($cn, 'exam')) {
  echo 'Database not selected';
}


$usn = $_POST['usn'];

$contact = $_POST['contact'];

//$sql = "INSERT INTO studentdetails VALUES ('$username', '$usn', '$email' , '$pass' , '$phone')";
$sql = "SELECT * from users where usn = '$usn' and contact = '$contact'";

$result = mysqli_query($cn, $sql) or
  die(mysqli_error($cn));
  if(mysqli_num_rows($result) > 0)
  {
    

     
    while($row = mysqli_fetch_assoc($result)) {
        $password = $row["password"];
        $_SESSION['forgotpassword']=$password;
        
        
    }


  }
  else
  {
    
    echo 'Wrong Details';
  }
  header("Location:forgotans.php");
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
    background-color: #b30059;
    color:black;
    size: 7;

}
  
 .tag:focus{
  border: 3px solid #555;
 }



        .a
    {
      box-shadow: 0 15px 40px rgba(0,0,0,.5);
      height: 40px;
      width: 300px;
      margin-top: 25px;
      margin-left: 45px;
      border-radius: 10px;
    }

</style>
  


  <title>second</title>

</head>


<body>
<ul> 
  <li><a href="secondpage.php">Home</a></li>
  <li><a href="resultshow.php">Result</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.asp">About</a></li>
  <li><a href="feedback.php">feedback</a></li>
  
</ul><br><br>


<div class="containernew" style="padding-left: 20px;">
  <div class="title"><h2>Forgot Password</h2></div>
  <div id="form">
    <form method="POST" action="forgotpass1.php">
      
     <center> <input class="a" type="text" name="usn" placeholder=" Enter Usn"/>
      <input class="a" type="text" name="contact" placeholder=" Enter phone"/></center>
      <center><input class="a" type="submit" value="Get password " /></center>
      
     </form>
  </div>
</div>

</body>
</html>

