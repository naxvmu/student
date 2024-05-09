<?php 

	$db = mysqli_connect('localhost', 'root', '', 'newsweb');?>

<!DOCTYPE html>
<html>
   <head>
      
      <title>نادي ديالى</title>
      <link rel="stylesheet" type="text/css" href="style1.css">
   </head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
 
}

.background{
     background-image: url("img/bg.jpg");
     width:80%;
     height:1000px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
 font-size:x-large;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  font-size:x-large;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
  font-size:x-large;
}
</style>
   <body>
        <div class="headerhome">
		<h2>من نحن</h2>
	</div>
     
    <form method="post" action="about.php">
<div class="topnav">
  <a class="active" href="homepage.php">الرئيسية</a>
  <a href="index1.php">كرة القدم</a>
  <a href="swiming.php">السباحة</a>
  <a href="about.php">من نحن</a>
   <a href="callus.php">اتصل بنا</a>
   <a href="login.php">صفحة الأدمن</a>
</div>


<table dir="rtl" style="font-size: 30px;width:100%">
  <tr>
    <th > اسم النادي</th>
    <th>البريد الالكتروني</th>
    <th>العنوان </th>
    <th>تأسس سنة </th>
    <th>نبذة عن النادي </th> 
  </tr>
  <td> <?php
      
                       $query= "select * from clubinfo ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['clubname'].'</li>';
                            }?></td>

 
     <td> <?php
      
                       $query= "select * from clubinfo ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['email'].'</li>';
                            }?></td>

     <td> <?php
      
                       $query= "select * from clubinfo ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['address'].'</li>';
                            }?></td>

     <td> <?php
      
                       $query= "select * from clubinfo ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['clubage'].'</li>';

                            }?></td>

    <td> <?php
      
                       $query= "select * from clubinfo ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['about'].'</li>';

                            }?></td>

     <tr>
        <td>
        </td>  

	</form>
    <h2><a href="homepage.php">الرجوع الى الصفحة الرئيسية</a></h2>

   </body>


</html>

