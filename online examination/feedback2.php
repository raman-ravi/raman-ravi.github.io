 <?php
 session_start();
 $_SESSION['name']='';
 ?>
 <html>


<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
  <style>
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

   .spage{
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 5px;
    font-family: calibri;
    font-size: 10pt;
}




.spage:hover{
    background-color: #f44336;
    box-shadow: 0px 5px 5px 1px rgba(0,0,0,0.1);
    transform: scale(1.05);
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
  <li class="active"><a href="feedback.php">feedback</a></li>
  
  
</ul><br><br>
<center><div id="main2"><font color="white" size="15">your feedback is successfully submitted!</font></div></a></center><br><br>


<center><a class="spage" href="feedback.php"><font color="white" size="5px">give another feedback</font></a></font></center>

</body>
</html>

