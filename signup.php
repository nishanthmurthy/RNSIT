<?php $dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(header("Location: http://localhost/RNSIT/sign.php"));
  
    $fname=$_GET['fname'];  
    $lname=$_GET['lname'];
    $usn=$_GET['usn'];
    $email=$_GET['email'];
	$loc=0;
    $ccode=rand(1000,9999);
  
  if($dbconn==true)
  {  
    $sql = "INSERT INTO stemp(firstname,lastname,usn,email,ccode)
    VALUES ('$fname','$lname','$usn','$email','$ccode')";
	if ($dbconn->query($sql) === TRUE) {}
 	else 
	{ $loc=1;
      header("Location: http://localhost/RNSIT/pop2.php");
    }

    $dbconn->close();
  }
  if($loc==0)
   header("Location: http://localhost/RNSIT/rccode.php");
?>