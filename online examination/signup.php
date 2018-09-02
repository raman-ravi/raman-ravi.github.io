
<?php 
session_start();

if (isset($_POST['usn']) && isset($_POST['name']) && isset($_POST['emailid']) && isset($_POST['gender']) && isset($_POST['contactno']) && isset($_POST['collagename']) && isset($_POST['password'])) {
  
$cn = mysqli_connect('localhost','root','');

 if (!$cn) {
   echo "unable to connect server";
 }

 if (!mysqli_select_db($cn,'exam')) {
   echo "database is not selected";
 }

  $usn = $_POST['usn'];
  $name = $_POST['name'];
  $email = $_POST['emailid'];
  $gender = $_POST['gender'];
  $contactno = $_POST['contactno'];
  $collagename = $_POST['collagename'];
  $password = $_POST['password'];


  $sql1 = "select * from users where usn = '$usn' ";


  $result = mysqli_query($cn,$sql1) or 
            die(mysqli_error($cn));
            if (mysqli_num_rows($result) == 0) {

              $sql1 = "insert into users values ('$usn','$name','$email','$gender','$contactno','$collagename','$password')";

           $result = mysqli_query($cn,$sql1) or
                    die(mysqli_error($cn));
                    $_SESSION['name']=$name;

                    header("Location:signup2.php");
                  

            }


            else
            {

              echo "already available";
              header("Location:signup.php");
            }




}



 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
<style>
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

 .placeholder{
  color: white;
 }

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


</style>
  





	<title>signup</title>

</head>


<body>
<ul> 
  <li><a href="secondpage.php">Home</a></li>
  <li><a href="resultshow.php">Result</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="feedback.php">feedback</a></li>
  
</ul><br><br>
<center><a href="index.php" style="text-decoration: none;"><div id="main2"><font color="white" size="15">playStation</font></div></a></center><br><br>

<form method="POST" action="signup.php">


  <center><font color="white">USN:</font><br>
    <input type="text" name="usn" class="tag" placeholder="enter usn" style="margin-top: 10px; ; padding-right: 100px;padding-bottom: 10px">
    
  </center><br>


   <center>
     <font color="white">Name:</font><br>
     <input type="text" name="name" class="tag" style="margin-top: 10px; ; padding-right: 100px;padding-bottom: 10px" placeholder="enter name"></center><br>

   

   <center><font color="white">Email Id:</font><br>
    <input type="text" name="emailid" class="tag" style="margin-top: 10px; ; padding-right: 100px;padding-bottom: 10px" placeholder="enter email"></center><br>


   <center><font color="white">Gender:</font><br>
      <select name="gender" class="tag" style="margin-top: 10px; ; padding-right: 100px;padding-bottom: 10px">
      <option value="male">male</option>
      <option value="female">female</option>
      <option value="other">other</option>
      </select>
    </center><br>


   
     
   

   <center><font color="white">Contact No:</font><br>
    <input type="text" name="contactno" class="tag" placeholder="enter contact no" style="margin-top: 10px; ; padding-right: 100px;padding-bottom: 10px">
      
    </center><br>



    <center><font color="white">Collage Name:</font><br>
      <input type="text" name="collagename" class="tag" placeholder="enter collagename" style="margin-top: 10px; ; padding-right: 100px;padding-bottom: 10px">
      
    </center><br>


    

    <center><font color="white">Create Password:</font><br>
      <input type="password" name="password" class="tag" placeholder="enter password" style="margin-top: 10px; ; padding-right: 100px;padding-bottom: 10px">
      
    </center><br>




    <center>
      
   <input type="submit" value="signup">

    </center><br><br>



</form>



   <center>
    <a class="spage" href="login.php"><font color="white">already have an account?</font></a>
   </center>

</body>
</html>

