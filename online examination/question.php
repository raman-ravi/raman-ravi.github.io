<?php
session_start();

if (isset($_POST['mode']) && isset($_POST['question']) && isset($_POST['opt1']) && isset($_POST['opt2']) && isset($_POST['opt3']) && isset($_POST['opt4']) && isset($_POST['corans'])) {
  
$cn = mysqli_connect('localhost','root','');

 if (!$cn) {
   echo "unable to connect server";
 }

 if (!mysqli_select_db($cn,'exam')) {
   echo "database is not selected";
 }
  $mode = $_POST['mode'];
  $ques = $_POST['question'];
  $opt1 = $_POST['opt1'];
  $opt2 = $_POST['opt2'];
  $opt3 = $_POST['opt3'];
  $opt4 = $_POST['opt4'];
  $corans = $_POST['corans'];
  $qid = hash("adler32",$mode.$ques.$corans);


  $sql1 = "select * from questions where question = '$ques' ";
  $result = mysqli_query($cn,$sql1) or 
            die(mysqli_error($cn));
            if (mysqli_num_rows($result) == 0) {

              $sql1 = "insert into questions values ('$qid','$mode','$ques','$opt1','$opt2','$opt3','$opt4','$corans')";

           $result = mysqli_query($cn,$sql1) or
                    die(mysqli_error($cn));
                    echo "submitted successfully";
                    

            }


            else
            {

              echo "already available";
             
            }




}



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

 .placeholder{
  color: white;
 }


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
  <li><a href="question.php">add question</a></li>
 <li style="float:right;"><div class="dropdown" >
    <button class="dropbtn"><?php echo $_SESSION['name']; ?> </button>
    <div class="dropdown-content">
      <a href="result.php">result</a>
      <a href="loggingout.php">logout</a>
    </div>
  </div></li> 

</ul>



<form method="POST" action="question.php">

<br><br>
<center> <input type="number" name="mode" placeholder="enter mode"></center><br>
  <center>
    
  </center><br>


   <center>
    <input type="text" name="question" class="tag" placeholder="enter the question">
  </center>
<br>

   <center>
    <input type="text" name="opt1" class="tag" placeholder="enter first option">
  </center>

   <center>
    <input type="text" name="opt2" class="tag" placeholder="enter second option">
  </center>

   <center>
    <input type="text" name="opt3" class="tag" placeholder="enter third option">
  </center>

   <center>
    <input type="text" name="opt4" class="tag" placeholder="enter fourth option">
  </center>

 <center>Enter correct answer
    <select name="corans">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>
  </center>


<br>

    <center>
      
   <input type="submit" value="submit">

    </center><br><br>







 
</body>
</html>
