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
#submit2,#mail_1,#save{
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
      <a class="nav-link" href="s_head.php">Home</a>
    </li>
    <li class="nav-item active" id="rate">
      <a class="nav-link" href="s_head1.php">Rate</a>
    </li>
    <li class="nav-item active" id="select">
      <a class="nav-link" href="#">Select</a>
    </li>
  </ul>
  <div class="navbar-collapse collapse  order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            
        </ul>
    </div>
</nav>
  <div class='container-fluid'>
  <form action="" method='post' style="width: 100%;">
     <div>
    <div>
    <table  class="table" id="studenttable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Fullname</th>
          <th scope="col">Rollno</th>
          <th scope="col">Email</th>
          <th scope="col">Strength</th>
          <th scope="col">rate</th>
          <th scope="col">Selected</th>
        </tr>
      </thead>
      <tbody>
         <?php
         echo $_SESSION['Event'];
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'fms'); // Selecting Database from Server
$sql="SELECT rate_q FROM student_head where username='".$_SESSION['user_name']."' AND password='".$_SESSION['user_password']."'";
$result=mysqli_query($connection,$sql);
$o=mysqli_fetch_assoc($result);
$ok=$o['rate_q'];
$sql1 = "SELECT * FROM ".$_SESSION['Event']." where stream='".$_SESSION['branch']."' AND rate>='$ok'"; 
$sql2="SELECT roll_no FROM ".$_SESSION['Event']." where stream='".$_SESSION['branch']."' AND rate>='$ok'"; 
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
              </td><td>
              ".$row1['email'] ." 
              </td>
              <td>  
                                    
              ".$row1['strengths'] ."                
              </td><td>                          
                ".$row1['rate'] ."           
              </td><td>
               <input type='text' name='selected[]' value='".$row1['selected'] ."'>    
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
  $k=$_POST['selected'];
  
        
      if($_SESSION['Event']=="dance")
        {         
                  
                  
                  
for($i=0;$i<$x;$i++){
      $s="UPDATE `dance` SET `selected`='".$k[$i]."' WHERE roll_no='".$ro[$i]."'";
     $result1 =mysqli_query($connection,$s);
   }
   }
      if($_SESSION['Event']=="music"){
        for($i=0;$i<$x;$i++){
      $s="UPDATE `music` SET `selected`='".$k[$i]."' WHERE roll_no='".$ro[$i]."'";
      $result1 =mysqli_query($connection,$s);
    }
  }
     
        
        $x++;
        
        
      }
        ?>
      </tbody>
    </table>
  </div>
       <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal" id="mail_1" name="mail_1">Mail</a>
       <input type="submit" id="save" name="save" value="save">
 </form></div>

 <div class="modal fade" id="myModal" role="dialog">
   
    <div class="modal-dialog modal-lg" style="width: 50%;" style="height: auto;" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Mail Body</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
          <div class="modal-body">
          <form class="form-horizontal" method="post">
           <div class="form-group">
          <div class="col-sm-offset-8 col-sm-10">
        
        </div>

<div class="form-group">

 <label class = "control-label " for="">Body: </label>
 <div class="col-sm-8">
<input type="textarea" class="form-control" id="mail_body" name="mail_body"  required>
</div>
</div>


        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info" id="mail" name="mail">Mail</button>
    </div>
  </div>
  </div>
</form>

        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div> 
</div>

  
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
  if(isset($_POST['mail']))
  {
    $sql="SELECT * FROM student_head where username='".$_SESSION['user_name']."' AND password='".$_SESSION['user_password']."'";
    $result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);
require("/Applications/XAMPP/xamppfiles/htdocs/FMS/PHPMailer/src/PHPMailer.php");
require("/Applications/XAMPP/xamppfiles/htdocs/FMS/PHPMailer/src/SMTP.php");
require("/Applications/XAMPP/xamppfiles/htdocs/FMS/PHPMailer/src/Exception.php");
$u=$row['email'];

  $mail = new PHPMailer;
      $mail->IsSMTP(); // enable SMTP

      //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
      $mail->SMTPAuth = true; // authentication enabled
      $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465; // or 587
      $mail->IsHTML(true);
      $mail->Username = ''.$row['email'].'';
      echo $mail->Username;
      $mail->Password = ''.$row['password_e'].'';
      $mail->SetFrom(''.$row['email'].'',"PARTICIPANTS OF SYMPHONY");
      $mail->Subject = "SELECTIONS";
      //$mail->AddAddress("joelmarvin.t@somaiya.edu");

      // Add recipients for the mail
      $sql1="SELECT rate_q FROM student_head where username='".$_SESSION['user_name']."' AND password='".$_SESSION['user_password']."'";
$result1=mysqli_query($connection,$sql1);
$o=mysqli_fetch_assoc($result1);
$ok=$o['rate_q'];
$sql2 = "SELECT * FROM ".$_SESSION['Event']." where stream='".$_SESSION['branch']."' AND rate>='$ok'"; 
$result2 =mysqli_query($connection,$sql2);
      $body=$_POST['mail_body'];
      
      if(mysqli_num_rows($result2) > 0 )
      {
        while($row1 = $result2->fetch_assoc())
        {         
          $email_id = $row1['email'];
          
          
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

    ?>
<!--<td>                      
              <a href='".$row1['video_upload'] ."' download>'WatchVideo'</a>'                
              </td>-->
</body>
</html> 