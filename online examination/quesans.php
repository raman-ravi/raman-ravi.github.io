<?php
session_start();
$cn= mysqli_connect('localhost','root','');
if (!$cn) {
  echo "unable to connect server";

}
if (!mysqli_select_db($cn,'exam')) {
  echo "database not selected";
}
$mode = $_SESSION['questionmode'];

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
  <li><a href="index.php">Home</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="feedback.php">feedback</a></li>
 <li style="float:right;"><div class="dropdown" >
    <button class="dropbtn"><?php echo $_SESSION['name']; ?> </button>
    <div class="dropdown-content">
      <a href="result.php">result</a>
      <a href="loggingout.php">logout</a>
    </div>
  </div></li> 




  
  
</ul><br><br>


<div class="title"><h1> QUESTIONS! </h1></div>
<div class="containernew" style="padding-left: 20px;">

<form method="POST" action="result1.php">
 <?php
$sql2 = "SELECT qid, question, opt1, opt2, opt3, opt4,correctans FROM questions where mode='".$mode."'";
$result = mysqli_query($cn, $sql2);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<br>";
    $nn=1;
    
    
    while($row = mysqli_fetch_assoc($result)) {

        echo "<h3>".$nn. " ) " . $row["question"]."</h3>"."<br>"."<input type='radio' name='".$row['qid']."' value='1' required>". $row["opt1"]."<input type='radio'  name='".$row['qid']."' value='2' required>". $row["opt2"]."<input type='radio' name='".$row['qid']."' value='3' required>". $row["opt3"]."<input type='radio'  name='".$row['qid']."' value='4' required>". $row["opt4"]."<br><br><br>";
           $nn++;
    }
} else {
    echo "0 results";
}
   ?>
   <center><input type="submit" class="button button1"> </center> 

 </form>


</div>





 
</body>
</html>
