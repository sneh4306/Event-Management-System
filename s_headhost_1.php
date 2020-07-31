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
#submit2,#mail,#save{
  background-color: transparent;
  border:transparent;
  color: white;
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
</style>
</head>
<body>
  <nav class="navbar navbar-expand-sm  fixed top" id="navbar_3">
  <ul class="navbar-nav">
   <li class="nav-item active" id="home">
      <a class="nav-link" href="s_headhost.php">Home</a>

    </li>
    <li class="nav-item active" id="event">
      <a class="nav-link" href="#">Events</a>

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
          <th scope="col">Day 1</th>
          <th scope="col">Day 2</th>
          <th scope="col">Day 3</th>
          
          <th scope="col">Events-1</th>

          <th scope="col">Event-2</th>

          <th scope="col">Event-3</th>

          
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
      

   echo "<tr>
              <td>                                                     
              ".$row1['full_name'] ."                              
              </td>
              <td>                 
              ".$row1['roll_no'] ."                
              </td>";
                                    
              echo "<td>                      
              ".$row1['day_1'] ."                
              </td>
              <td>                      
              ".$row1['day_2'] ."                
              </td>
              <td>                      
              ".$row1['day_3'] ."                
              </td>
              <td>                          
              <input type='text' name='event_1[]' value='".$row1['event_associated_1'] ."'>                 
              </td>
              <td>                          
              <input type='text' name='event_2[]' value='".$row1['event_associated_2'] ."'>                 
              </td>
              <td>                          
              <input type='text' name='event_3[]' value='".$row1['event_associated_3'] ."'>                 
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
  $k=$_POST['event_1'];

  $j=array();
  $j=$_POST['event_2'];

  $l=array();
  $l=$_POST['event_3'];
  
        
      if($_SESSION['Event']=="hosting")
        {         
                  
                  
                  
for($i=0;$i<$x;$i++){
      $s="UPDATE `hosting` SET `event_associated_1`='".$k[$i]."' , event_associated_2='".$j[$i]."',event_associated_3='".$l[$i]."' WHERE roll_no='".$ro[$i]."'";
     $result1 =mysqli_query($connection,$s);
   }
   }
      
     
        
        $x++;
               
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
$d=0;
 
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
      $mail->SetFrom(''.$row['email'].'',"Volunteers OF SYMPHONY");
      $mail->Subject = " Your schedule for hosting ";
      //$mail->AddAddress("joelmarvin.t@somaiya.edu");

      // Add recipients for the mail
      
$sql2 = "SELECT * FROM ".$_SESSION['Event']." where stream='".$_SESSION['branch']."'"; 
$result2 =mysqli_query($connection,$sql2);
      
      
      
        while($row1 = $result2->fetch_assoc())
        { $email_id = $row1['email'];
          
          
          $mail->AddAddress($email_id);
          $body = "Your Schedule<br> on day 1:'".$row1['event_associated_1']."'<br>on day 2:'".$row1['event_associated_2']."'<br>on day 3:'".$row1['event_associated_3']."'";
          $mail->Body = $body;
          
          echo $email_id;

          
          
          
          $mail->Send();
          $mail->ClearAddresses();
          
          
        }
      

      

      
    }
    $sql12="SELECT * FROM student_head where username='".$_SESSION['user_name']."' AND password='".$_SESSION['user_password']."'";
$result12=mysqli_query($connection,$sql12);
$row12=mysqli_fetch_assoc($result12);
echo "<h6>Email:".$row12['email']."</h6>";

    ?>

</body>
</html> 