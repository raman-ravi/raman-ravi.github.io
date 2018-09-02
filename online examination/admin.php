<?php
session_start();
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
  </style>
  


	<title>signup</title>

</head>


<body>
<ul> 
  <li><a href="secondpage.php">Home</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="question.php">add question</a></li>
 <li style="float:right;"><div class="dropdown" >
    <button class="dropbtn"><?php echo $_SESSION['name']; ?> </button>
    <div class="dropdown-content">
      <a href="result.php">result</a>
      <a href="loggingout.php">logout</a>
    </div>
  </div></li> 




  
  
</ul><br><br>
<center><h2>Welcome <?php echo $_SESSION['name'];  ?>!</h2></center>






 
</body>
</html>
