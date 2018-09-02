<?php
error_reporting(0);
session_start(); 
if (isset($_POST['name']) && isset($_POST['usn']) && isset($_POST['feedback'])) {
  $cn = mysqli_connect('localhost','root','');

 if (!$cn) {
   echo "unable to connect server";
 }

 if (!mysqli_select_db($cn,'exam')) {
   echo "database is not selected";
 }
$name=$_POST['name'];
$usn=$_POST['usn'];
$feedback=$_POST['feedback'];
$sql="INSERT INTO feedback VALUES ('$name','$usn','$feedback')";
$result = mysqli_query($cn,$sql) or 
            die(mysqli_error($cn));
           header("location:feedback2.php");

}
$_SESSION['name']='';
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
  <style>
    .dropdown{
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn{
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
    }

    .dropdown-content{
      display: none;
      position: absolute;
      background-color: #252525;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a{
      font-style: sans-serif;
      float: none;
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;


    }

   .dropdown-content a:hover{
    background-color: #ddd;
   }

   .dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
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
  


	<title>signup</title>

</head>


<body>
<ul> 
  <li><a href="secondpage.php">Home</a></li>
  <li><a href="resultshow.php">Result</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li class="active"><a href="feedback.php">feedback</a></li>
 
  
</ul><br><br>


<center><font color="white" size="15">FEEDBACK</font></center><br><br>
<form method="POST" action="feedback.php">
<center><input type="text" name="name" placeholder="enter name" style="margin-top: 10px; ; padding-right: 100px;padding-bottom: 10px" class="tag"></center><br>
<center><input type="text" name="usn" placeholder="enter usn" style="margin-top: 10px; ; padding-right: 100px;padding-bottom: 10px" class="tag"></center><br>
<center><input type="text" name="feedback" placeholder="enter your feedback" style="margin-top: 10px; ; padding-right: 100px;padding-bottom: 10px" class="tag"></center><br>
<center><input type="submit" value="feedback"></center>

</form>



 
</body>
</html>
