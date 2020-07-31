<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
  session_start();
  if ($_SESSION['user_name']) {
    # code...
  }
  else
  {
    header("location:loginpage.php");
  }
?>

<?php
$branch = $_SESSION['branch'];
$event= $_SESSION['Event'];
$user=$_SESSION['user_name'];
$pass=$_SESSION['user_password'];
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="s_head.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
h2,h6{
  color: white;
}
a{
  background-color: transparent;
  border:transparent;
  color: white;
}
a:hover{
    background-color: transparent;
    color: grey;
    
}
#submit2,#submit1,#mail,#save{
  background-color: transparent;
  border:transparent;
  color: white;
}
#save:hover{
  background-color: transparent;
  border:transparent;
  color: grey;
}
#mail:hover
{
  color: grey;
}
#submit1:hover{
  color: grey;
}
#submit2:hover{
  color: grey;
}
label{
  color: white;
}
body{
    background-color: black;
    background-size: cover; 
}

table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    max-width: 10%;
    padding: 15px;
    text-align: left;
}
table tr:nth-child(even) {
    background-color: #eee;
}
table tr:nth-child(odd) {
   background-color: #fff;
}
table th {
    background-color: black;
    color: white;
}
form {width:80%;}
#watch{
  color:black;
}
</style>
</head>
<body>
  <nav class="navbar navbar-expand-sm  fixed top" id="navbar_3">
  <ul class="navbar-nav">
   <li class="nav-item active" id="home">
      <a class="nav-link" href="s_head.php">Home</a>
    </li>
    <li class="nav-item active" id="rate">
      <a class="nav-link" href="#">Rate</a>
    </li>
    <li class="nav-item active" id="select">
      <a class="nav-link" href="s_head2.php">Select</a>
    </li>
  </ul>
  <div class="navbar-collapse collapse  order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="loginpage.php">Logout</a>
            </li>
            
        </ul>
    </div>
</nav>
  <div class='container-fluid'>
  <form action="" method='post' style="width: 100%;">
     <div>
    <div >
      <label class="form-check-label" for="selectqual">Rate for Qualification</label>
      <input type="number" name="MinRate" min="1" max="10" value="">
      <label class="form-check-label" for="Pcount">Audition dates</label>
      <input type="text" name="Date" value="">
      <input type="submit" name="submit1" value="Submit" id="submit1">
      <br>
      <br>
      <label class="form-check-label" >Email</label>
      <input type="email" name="email" value="">
      <label class="form-check-label" >Password</label>
      <input type="password" name="password" value="">
      <input type="submit" name="submit2" value="Submit" id="submit2">
      <br>
      <br>
    </div>
    <?php
    $connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'fms'); // Selecting Database from Server
    if(isset($_POST['submit1'])){
      
      $m=$_POST['MinRate'];
      $d=$_POST['Date'];
      
      $sql1= "UPDATE student_head SET rate_q='$m' where username='".$_SESSION['user_name']."' AND password='".$_SESSION['user_password']."'";
      $result1 =mysqli_query($connection,$sql1);
      $sql2= "UPDATE student_head SET audition_date='$d' where username='".$_SESSION['user_name']."' AND password='".$_SESSION['user_password']."'";
      $result2 =mysqli_query($connection,$sql2);

    }
    if(isset($_POST['submit2'])){
      $e=$_POST['email'];
      $p=$_POST['password'];
      
      $sql1= "UPDATE student_head SET email='$e' where username='".$_SESSION['user_name']."' AND password='".$_SESSION['user_password']."'";
      $result1 =mysqli_query($connection,$sql1);
      $sql2= "UPDATE student_head SET password_e='$p' where username='".$_SESSION['user_name']."' AND password='".$_SESSION['user_password']."'";
      $result2 =mysqli_query($connection,$sql2);


    }
    ?>
    <div>
    <table  class="table" id="studenttable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Fullname</th>
          <th scope="col">Rollno</th>
          <th scope="col">video</th>
          <th scope="col">Strength</th>
          <th scope="col">rate</th>
          
        </tr>
      </thead>
      <tbody>
<h2><?php echo $event?></h2>

         <?php

$sql1 = "SELECT * FROM ".$_SESSION['Event']." where stream='".$_SESSION['branch']."'"; 
$sql2="SELECT roll_no FROM ".$_SESSION['Event']." where stream='".$_SESSION['branch']."'"; 
$result2 =mysqli_query($connection,$sql2);

  $result1 =mysqli_query($connection,$sql1);
  $resultCheck1 =mysqli_num_rows($result1);
  
  $x=0;
   if($resultCheck1>0){
    while($row1=mysqli_fetch_assoc($result1)){
      $video_path=$row1['video_upload'];
      $video_name= substr($video_path, strpos($video_path, "/") + 1);
       // echo '<video width="190" height="200" controls>
        //<source src= "'.$video_path.'" type="video/mp4"';
      

   echo "<tr>
              <td>                                                     
              ".$row1['full_name'] ."                              
              </td>
              <td>                 
              ".$row1['roll_no'] ."                
              </td>";
          echo "<td>                      
              <a href='".$row1['video_upload'] ."' download id='watch'>'WatchVideo'</a>'                
              </td> "; 
                                    
              echo "<td>                      
              ".$row1['strengths'] ."                
              </td><td>                          
              <input type='text' name='rating[]' value='".$row1['rate'] ."'>                 
              </td>
              <tr>";
              


           
     $x++;
      }
        
      }

$y=0;
while($r=mysqli_fetch_assoc($result2)){
$ro[$y]=$r['roll_no'];
$y++;
}




if(isset($_POST['save']))
        {
  $k=array();
  $k=$_POST['rating'];
  
        
      if($_SESSION['Event']=="dance")
        {                                            
for($i=0;$i<$x;$i++){
  if($k[$i]<=10 && $k[$i]>=1)
  {
      $s="UPDATE `dance` SET `rate`='".$k[$i]."' WHERE roll_no='".$ro[$i]."'";
     $result1 =mysqli_query($connection,$s);}
     else{
      echo "blah blah";
     }
   }
   }
      if($_SESSION['Event']=="music"){
        for($i=0;$i<$x;$i++){
      $s="UPDATE `music` SET `rate`='".$k[$i]."' WHERE roll_no='".$ro[$i]."'";
      $result1 =mysqli_query($connection,$s);
    }
  }
     
        
        $x++;
        echo $x;
        
      }
      
        ?>
      </tbody>
    </table>
  </div>
       <input type="submit" id="mail" name="mail" value="Mail">
       <input type="submit" id="save" name="save" value="Save">
       <br>
       <br>
 </form></div>
<!--?php
if(isset($_POST['save']))
  {
    $x=$_POST["MinRate"];
$minsql1 = "SELECT * FROM ".$_SESSION['Event']." "; 
  $minresult1 =mysqli_query($connection,$sql1);
  $minresultCheck1 =mysqli_num_rows($minresult1);
   if($minresultCheck1>0){
    while($row1=mysqli_fetch_assoc($result1)){
      $minsql2="UPDATE ".$_SESSION['Event']." SET rate=".$.""
  }?-->

<div id="selectbuts">
<form action="" method="post">
     </form>

</div>
</div>
<?php 
$minr="";
$d="";
 
  if(isset($_POST['mail']))
  {
    $sql="SELECT * FROM student_head where username='".$_SESSION['user_name']."' AND password='".$_SESSION['user_password']."'";
    $result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);
require("/Applications/XAMPP/xamppfiles/htdocs/FMS/PHPMailer/src/PHPMailer.php");
require("/Applications/XAMPP/xamppfiles/htdocs/FMS/PHPMailer/src/SMTP.php");
require("/Applications/XAMPP/xamppfiles/htdocs/FMS/PHPMailer/src/Exception.php");

  $mail = new PHPMailer;
      $mail->IsSMTP(); // enable SMTP

      //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
      $mail->SMTPAuth = true; // authentication enabled
      $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465; // or 587
      $mail->IsHTML(true);
      $mail->Username = ''.$row['email'].'';
      $mail->Password = ''.$row['password_e'].'';
      $mail->SetFrom(''.$row['email'].'',"PARTICIPANTS OF SYMPHONY");
      $mail->Subject = "Auditions on ".$_POST['Date'];
      //$mail->AddAddress("joelmarvin.t@somaiya.edu");

      // Add recipients for the mail
      $sql1="SELECT rate_q FROM student_head where username='".$_SESSION['user_name']."' AND password='".$_SESSION['user_password']."'";
$result1=mysqli_query($connection,$sql1);
$o=mysqli_fetch_assoc($result1);
$ok=$o['rate_q'];
$sql2 = "SELECT * FROM ".$_SESSION['Event']." where stream='".$_SESSION['branch']."' AND rate>='$ok'"; 
$result2 =mysqli_query($connection,$sql2);
      $body="";
      
      if(mysqli_num_rows($result2) > 0 )
      {
        while($row1 = $result2->fetch_assoc())
        {         
          $email_id = $row1['email'];
          
          $body = "You have been selected for audition<br> congrats";
          $mail->Body = $body;
          $mail->AddAddress($email_id);
        }
      }

      

      if(!$mail->Send()) {
        echo "<script type='text/javascript'>
                  alert('An Error occurred while sending mail: ". $mail->ErrorInfo ." ');
                </script>";
     } 
    }

    $sql12="SELECT * FROM student_head where username='".$_SESSION['user_name']."' AND password='".$_SESSION['user_password']."'";
$result12=mysqli_query($connection,$sql12);
$row12=mysqli_fetch_assoc($result12);
echo "<h6>Rate for qualification:".$row12['rate_q']."</h6> <br>";
echo "<h6>Audition Date:".$row12['audition_date']." </h6><br>";
echo "<h6>Email:".$row12['email']." </h6>";

    ?>

</body>
</html> 