<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
  <style>

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
  </style>
  


	<title>signup</title>

</head>


<body>
<ul> 
  <li><a href="secondpage.php">Home</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="feedback.php">feedback</a></li>
 <li style="float:right;"><div class="dropdown" >
    <button class="dropbtn"><?php echo $_SESSION['name']; ?> </button>
    <div class="dropdown-content">
      <a href="resultshow.php">result</a>
      <a href="loggingout.php">logout</a>
    </div>
  </div></li> 




  
  
</ul><br><br>
<div class="title"><h2>hello <?php echo $_SESSION['name'];  ?> select your question field!</h2></div>

<div class="containernew" style="padding-left: 20px; padding-top: 50px; padding-right: 20px;padding-bottom: 50px;">
<center>
<a href="mode1.php"><button class="button button1">Technical</button></a>
<a href="mode2.php"><button class="button button1">Non Technical</button></a></center>
</div>




 
</body>
</html>
