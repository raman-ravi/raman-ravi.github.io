<?php

session_start();
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
 <div class="title"><h1>your password is <?php echo $_SESSION['forgotpassword']; 
  $_SESSION['forgotpassword']='';?></h1></div>
   <center><a class="spage" href="login.php">Login again</a>
</center>
  

</body></html>