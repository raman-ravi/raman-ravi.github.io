<?php 

session_start();
$mode=$_SESSION['questionmode'];
$cn = mysqli_connect('localhost','root','');
if (!$cn) {
    echo 'Unable to connect to server';
}
if (!mysqli_select_db($cn, 'exam')) {
    echo 'Database not selected';
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


</style>
  


  <title>second</title>

</head>


<body>
<ul> 
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="resultshow.php">Result</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.asp">About</a></li>
  <li><a href="feedback.php">feedback</a></li>
  
</ul><br><br>



<div class="title"><h1>ALL RESULTS! </h1></div>
<div class="containernew" style="padding-left: 20px;">


 
<table style="width: 70%;margin-top: 10px;margin-bottom: 10px;margin-left: 100px;">
  <tr>
    <th>FIELD</th>
    <th>Name</th>
    <th>USN</th> 
    <th>MARKS</th>
  </tr>


<?php

$sql2 =  "SELECT mode,name,result.usn,score 
         FROM result, users
        where result.usn=users.usn and mode='$mode'";
$result = mysqli_query($cn, $sql2);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {

          
             
          switch ($row['mode']) {
            case 1:
                $field="technical";
                break;
            case 2:
                $field="nontechnical";
                break;
            
          }

           echo "<tr>"."<td>".$field."</td>"."<td>".$row['name']."</td>"."<td>".$row['usn']."</td>"."<td>".$row['score']."</td>"."</tr>";
        
            
           

    }
} else {
    echo "0 results";
}


  ?>











</table></div></body></html>