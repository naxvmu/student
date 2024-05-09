<?php
    session_start();
    $clubname="";
	$email    = "";
    $address="";
    $clubage="";
    $about="";
  
$db=mysqli_connect('localhost','root','','newsweb');

if (isset($_POST['send']))
 {
    

        $clubname = mysqli_real_escape_string($db, $_POST['clubname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$clubage = mysqli_real_escape_string($db, $_POST['clubage']);
		$about = mysqli_real_escape_string($db, $_POST['about']);
        
      
        $query="insert into clubinfo(clubname,email,address,clubage,about)Values('$clubname','$email','$address','$clubage','$about')";
        mysqli_query($db,$query);


    //   header('location: index.php');
}
?>