<?php

session_start();
$mode = $_SESSION['questionmode'];
$usn=$_SESSION['usn'];
$cn= mysqli_connect('localhost','root','');
if (!$cn) {
  echo "unable to connect server";

}
if (!mysqli_select_db($cn,'exam')) {
  echo "database not selected";
}

$sql2 = "SELECT qid,correctans FROM questions where mode='".$mode."'";
$result = mysqli_query($cn, $sql2);
$crr=0;
$total=0;
if (mysqli_num_rows($result) > 0) {
    
    
    while($row = mysqli_fetch_assoc($result)) {
    	$total++;
    	if($row["correctans"]==$_POST[$row["qid"]]){
    		$crr++;

    	}
        
          
    }
    

    $sql3 = "INSERT INTO result VALUES('$usn','$crr','$total','$mode')";
$result3 = mysqli_query($cn, $sql3);

header("Location:disp_res.php?sc='$crr'&tot='$total'");


} else {
    echo "0 results";
    header("Location:quesans.php");
}
?>