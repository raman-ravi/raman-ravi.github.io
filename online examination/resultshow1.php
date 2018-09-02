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

 .button {
    background-color: #1B711E; /* Green */
    border: none;
    color: white;
    padding:19px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    
    cursor: pointer;

}

.button1{
    
    border-radius: 8px;
}
.button3 {border-radius: 8px;}


</style>
  


	<title>second</title>

</head>


<body>
<ul> 
  <li><a href="secondpage.php">Home</a></li>
  <li class="active"><a href="resultshow.php">Result</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.asp">About</a></li>
  <li><a href="feedback.php">feedback</a></li>
  
</ul><br><br>
<div class="title" style=" padding-right: 20px; " ><h2>SELECT THE ONE !</h2></div>


<div class="containernew"><center>
<a href="individualresult.php"><button class="button button1" style="margin-left: 50px;">Result by USN</button></a>
<a href="everyoneresult.php"><button class="button button3">Everyone's Result</button></a></center>

</div>





</body></html>