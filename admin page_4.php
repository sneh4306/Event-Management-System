<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>

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
#update_1{
  background-color: transparent;
  border:transparent;
}
#update_1:hover{
  background-color: grey;
}
#back_1{
  background-color: transparent;
  border:transparent;
}
#back_1:hover{
  background-color: grey;
}
#in{
  background-color: black;
  border:transparent;
}
#in:hover{
  background-color: grey;
}

</style>
	<title></title>
</head>
<body>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

?>
<nav class="navbar navbar-expand-sm  fixed top" id="navbar_5">
<form action="" method="post">

     <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal2" id="update_1" name="button_7">Insert</a>
     </form>
      <form action="" method="post">

     <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal1" id="update_1" name="button_6">Delete</a>
</form>
<div class="navbar-collapse collapse  order-5 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        <form action=" admin page.php" method="post">
            
                <button class="btn btn-success" type="submit" id="back_1" name="button_16">Back</button>
            
            </form>
        </ul>
    </div>


</nav>
<!--navbar for dance and music-->




 
 <div class="modal fade" id="myModal2" role="dialog">
   
    <div class="modal-dialog modal-lg" style="width:50%; " style="height: auto;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Insertion Page</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
          <div class="modal-body">
          <form class="form-horizontal"method="post">
           <div class="form-group">
          <div class="col-sm-offset-8 col-sm-10">
        
        </div>

<div class="form-group">

 <label class = "control-label" for="roll_no">Roll No: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="roll_no"placeholder= " Enter your roll number" >
</div>
</div>
<div class="form-group">

 <label class = "control-label " for="fullname">Full Name: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname" name="fullname"placeholder= " Enter your full name" >
</div>
</div>

<div class="form-group">

 <label class = "control-label " for="gender">Gender: </label>
 <div class="col-sm-8">
 
      <select class="form-control" id="gender" name="gender" required>
        <option>Male</option>
        <option>Female</option>
        
      </select>
</div>
</div>

<div class="form-group">

 <label class = "control-label" for="stream">Stream </label>
 <div class="col-sm-8">

  
  <select class="form-control" id="stream" name="stream">
    <option>Computers</option>
    <option>IT</option>
    <option>Mechanical</option>
    <option>Electronics</option>
    <option>EXTC</option>
  </select>
</div>
</div>


<div class="form-group">

 <label class = "control-label " for="email">Email: </label>
 <div class="col-sm-8">
<input type="Email" class="form-control" id="email" name="email"placeholder= " Enter your email address" >
</div>
</div>

<div class="form-group">

 <label class = "control-label " for="mob_no">Mobile number: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="mob_no" name="mob_no"placeholder= " 10 digits" required>
</div>
</div>
<div class="form-group">

 <label class = "control-label " for="days">Days Available: </label>
 <div class="col-sm-8">
<div class="checkbox">
  <label><input type="checkbox" value="" name="day_1"> Day 1</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="" name="day_2"> Day 2</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="" name="day_3"> Day 3</label>
</div>

        </div>
        </div>
        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info" id="in" name="up">Insert</button>
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

<div class="modal fade" id="myModal1" role="dialog">
   
    <div class="modal-dialog modal-lg" style="width: 50%;" style="height: auto;" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Deletion Page</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
          <div class="modal-body">
          <form class="form-horizontal" method="post">
           <div class="form-group">
          <div class="col-sm-offset-8 col-sm-10">
        
        </div>

<div class="form-group">

 <label class = "control-label " for="roll_no">Roll No: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="roll_no" placeholder= " Enter your roll number" required>
</div>
</div>


        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info"  id="in" name="delete">Delete</button>
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
<table style="width:100%">
<tr>
<th>Fullname</th>
<th>Roll No</th>
<th>Gender</th>
<th>Stream</th>
<th>Email id</th>
<th>Mobile</th>
<th>Day1</th>
<th>Day2</th>
<th>Day3</th>
<th>Events on day 1</th>
<th>Events on day 2</th>
<th>Events on day 3</th>
</tr>
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'FMS'); // Selecting Database from Server

if(isset($_POST['button_4'])){
  $k=4;
  $sql4 = "SELECT * FROM security "; 
  $result4 =mysqli_query($connection,$sql4);
  $resultCheck4 =mysqli_num_rows($result4);
  if($resultCheck4>0){
    while($row4=mysqli_fetch_assoc($result4)){
      echo "<tr><td>".$row4['full_name'] ."</td><td>".$row4['roll_no']."</td><td>".$row4['gender']."</td><td>".$row4['stream'] ."</td><td>".$row4['email']."</td><td>".$row4['mob_no']."</td><td>".$row4['day_1'] ."</td><td>".$row4['day_2']."</td><td>".$row4['day_3']."</td><td>".$row4['event_associated_1']."</td><td>".$row4['event_associated_2']."</td><td>".$row4['event_associated_3']."</td>" ;
    }
  }
}
if(isset($_POST['delete'])){
	$r=$_POST['roll_no'];
	$sql15="SELECT * from security where roll_no='$r'";
	$query_run2=mysqli_query($connection,$sql15);
	$row14=mysqli_fetch_assoc($query_run2);
	$to=$row14['email'];
	
	
	$resultCheck2 =mysqli_num_rows($query_run2);
	if($resultCheck2>0){
	$sql14=" DELETE from security where roll_no=$r'";
	if($query_run1=mysqli_query($connection,$sql14)){
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
    $mail->Username = 'your mail id';
    $mail->Password = 'your password';
    $mail->SetFrom("your mail id","ADMIN FROM SYMPHONY");
    $mail->Subject = " DELETION OF RECORDS";
    $mail->Body = "Your records have been deleted";
    $email = $to;
    $mail->AddAddress($email); // Add recipients

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }



    echo '<script language="javascript">';
  echo 'alert("Record deleted successfully")';  //not showing an alert box.
  echo '</script>';
		echo '<script language="javascript">';
  echo 'alert("Record deleted successfully")';  //not showing an alert box.
  echo '</script>';
  $sql4 = "SELECT * FROM security "; 
  $result4 =mysqli_query($connection,$sql4);
  $resultCheck4 =mysqli_num_rows($result4);
  if($resultCheck4>0){
    while($row4=mysqli_fetch_assoc($result4)){
      echo "<tr><td>".$row4['full_name'] ."</td><td>".$row4['roll_no']."</td><td>".$row4['gender']."</td><td>".$row4['stream'] ."</td><td>".$row4['email']."</td><td>".$row4['mob_no']."</td><td>".$row4['day_1'] ."</td><td>".$row4['day_2']."</td><td>".$row4['day_3']."</td><td>".$row4['event_associated_1']."</td><td>".$row4['event_associated_2']."</td><td>".$row4['event_associated_3']."</td>" ;
    }
  }

	}
	else
	{
		echo '<script language="javascript">';
  echo 'alert("Record not deleted successfully")';  //not showing an alert box.
  echo '</script>';
	}
}
else
{
	

  echo '<script language="javascript">';
  echo 'alert("No Such Record Found")';  //not showing an alert box.
  echo '</script>';
  $sql4 = "SELECT * FROM security "; 
  $result4 =mysqli_query($connection,$sql4);
  $resultCheck4 =mysqli_num_rows($result4);
  if($resultCheck4>0){
    while($row4=mysqli_fetch_assoc($result4)){
      echo "<tr><td>".$row4['full_name'] ."</td><td>".$row4['roll_no']."</td><td>".$row4['gender']."</td><td>".$row4['stream'] ."</td><td>".$row4['email']."</td><td>".$row4['mob_no']."</td><td>".$row4['day_1'] ."</td><td>".$row4['day_2']."</td><td>".$row4['day_3']."</td><td>".$row4['event_associated_1']."</td><td>".$row4['event_associated_2']."</td><td>".$row4['event_associated_3']."</td>" ;
    }
  }
}
}
if(isset($_POST['up']))
{
  $name = $_POST['fullname'];
$roll_no = $_POST['roll_no'];
$gender = $_POST['gender'];
$stream = $_POST['stream'];
$email = $_POST['email'];
$mob_no = $_POST['mob_no'];
$day1=isset($_POST['day_1']) ? 'yes' : 'no';
$day2=isset($_POST['day_2']) ? 'yes' : 'no';
$day3=isset($_POST['day_3']) ? 'yes' : 'no'; 

$sql2 = "INSERT INTO security (full_name,roll_no,gender,stream,email,mob_no,day_1,day_2,day_3) VALUES ('$name','$roll_no','$gender','$stream','$email ','$mob_no','$day1','$day2','$day3')";
if(mysqli_query($connection,$sql2)){
  echo '<script language="javascript">';
  echo 'alert("Student has been registered")';  //not showing an alert box.
  echo '</script>';
  
}
else
{
  echo '<script language="javascript">';
  echo 'alert("Student has not been registered")';  //not showing an alert box.
  echo '</script>';
  
}
$sql3 = "SELECT * FROM security "; 
  $result3 =mysqli_query($connection,$sql3);
  $resultCheck3 =mysqli_num_rows($result3);
  if($resultCheck3>0){
    while($row3=mysqli_fetch_assoc($result3)){
      echo "<tr><td>".$row3['full_name'] ."</td><td>".$row3['roll_no']."</td><td>".$row3['gender']."</td><td>".$row3['stream'] ."</td><td>".$row3['email']."</td><td>".$row3['mob_no']."</td><td>".$row3['day_1'] ."</td><td>".$row3['day_2']."</td><td>".$row3['day_3']."</td><td>".$row3['event_associated_1']."</td><td>".$row3['event_associated_2']."</td><td>".$row3['event_associated_3']."</td>" ;
    }
  }
}

echo "</table>"
?>
</body>
</html>