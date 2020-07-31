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
#computers{
  background-color: transparent;
  border:transparent;
}
#computers:hover{
  background-color: grey;
}
#it{
  background-color: transparent;
  border:transparent;
}
#it:hover{
  background-color: grey;
}
#mechanical{
  background-color: transparent;
  border:transparent;
}
#mechanical:hover{
  background-color: grey;
}
#electronics{
  background-color: transparent;
  border:transparent;
}
#electronics:hover{
  background-color: grey;
}
#extc{
  background-color: transparent;
  border:transparent;
}
#extc:hover{
  background-color: grey;
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
<nav class="navbar navbar-expand-sm  fixed top" id="navbar_3">

<form action="" method="post">
     <button class="btn btn-success" type="submit" id="computers" name="button_17">Computers</button>
     </form>
     <form action="" method="post">
     <button class="btn btn-success" type="submit" id="it" name="button_18">IT</button>
     </form>
     <form action="" method="post">
     <button class="btn btn-success" type="submit" id="mechanical" name="button_19">Mechanical</button>
     </form>
     <form action="" method="post">
     <button class="btn btn-success" type="submit" id="electronics" name="button_20">Electronics</button>
     </form>
     <form action="" method="post">
     <button class="btn btn-success" type="submit" id="extc" name="button_21">EXTC</button>
     </form>
     <div class="navbar-collapse collapse  order-5 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        <form action="" method="post">
            
                <button class="btn btn-success" type="submit" id="back_1" name="all">All</button>
           
            </form>
        </ul>
    </div>

</nav>
<nav class="navbar navbar-expand-sm  fixed top" id="navbar_4">
<form action="" method="post">
     <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal" id="update_1" name="button_5">Insert</a>
     </form>
  <form action="" method="post">

     <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal1" id="update_1" name="button_6">Delete</a>
</form>
<div class="navbar-collapse collapse  order-5 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        <form action=" admin page.php" method="post">
            
                <button class="btn btn-success" type="submit" id="back_1" name="button_15">Back</button>
           
            </form>
        </ul>
    </div>
</nav>

<div class="modal fade" id="myModal" role="dialog">
   
    <div class="modal-dialog modal-lg" style="width: 50%;" style="height: auto;" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Insertion Page</h4>
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
<input type="text" class="form-control" id="roll_no" name="roll_no" placeholder= " Enter your roll number" >
</div>
</div>

<div class="form-group">

 <label class = "control-label" for="fullname">Full Name: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname" name="fullname" placeholder= " Enter your full name" value="">
</div>
</div>

<div class="form-group">

 <label class = "control-label " for="gender">Gender: </label>
 <div class="col-sm-8">
 
      <select class="form-control" id="gender" name="gender"  value="" required>
        <option>Male</option>
        <option>Female</option>
        
      </select>
</div>
</div>

<div class="form-group">

 <label class = "control-label " for="stream">Stream </label>
 <div class="col-sm-8">

  
  <select class="form-control" id="stream" name="stream" value="<">
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
<input type="Email" class="form-control" id="email" name="email" placeholder= " Enter your email address" value="">
</div>
</div>

<div class="form-group">

 <label class = "control-label " for="mob_no">Mobile number: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="mob_no" name="mob_no" placeholder= " 10 digits" value="" required>
</div>
</div>


 
        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info" id="in" name="up">INSERT</button>
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
    
      <button type="submit" class="btn btn-info" id="in" name="delete">Delete</button>
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
<th>Video</th>
<th>Strengths</th>
<th>Selected</th>
<th>Rate</th>
</tr>

<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'FMS'); // Selecting Database from Server

if(isset($_POST['button_2'])){
  $k=2;
  $sql2 = "SELECT * FROM music "; 
  $result2 =mysqli_query($connection,$sql2);
  $resultCheck2 =mysqli_num_rows($result2);
  if($resultCheck2>0){
    while($row2=mysqli_fetch_assoc($result2)){
      echo "<tr><td>".$row2['full_name'] ."</td><td>".$row2['roll_no']."</td><td>".$row2['gender']."</td><td>".$row2['stream'] ."</td><td>".$row2['email']."</td><td>".$row2['mob_no']."</td><td>".$row2['video_upload'] ."</td><td>".$row2['strengths']."</td><td>".$row2['selected']."</td><td>".$row2['rate']."</td>" ;
    }
  }
}
if(isset($_POST['button_17'])){
  $sql17 = "SELECT * FROM music where stream ='Computers' "; 
  $result17 =mysqli_query($connection,$sql17);
  $resultCheck17 =mysqli_num_rows($result17);
  if($resultCheck17>0){
    while($row17=mysqli_fetch_assoc($result17)){
      echo "<tr><td>".$row17['full_name'] ."</td><td>".$row17['roll_no']."</td><td>".$row17['gender']."</td><td>".$row17['stream'] ."</td><td>".$row17['email']."</td><td>".$row17['mob_no']."</td><td>".$row17['video_upload'] ."</td><td>".$row17['strengths']."</td><td>".$row17['selected']."</td><td>".$row17['rate']."</td>" ;
    }
  }
}

if(isset($_POST['button_18'])){
  $sql18 = "SELECT * FROM music where stream ='IT' "; 
  $result18 =mysqli_query($connection,$sql18);
  $resultCheck18 =mysqli_num_rows($result18);
  if($resultCheck18>0){
    while($row18=mysqli_fetch_assoc($result18)){
      echo "<tr><td>".$row18['full_name'] ."</td><td>".$row18['roll_no']."</td><td>".$row18['gender']."</td><td>".$row18['stream'] ."</td><td>".$row18['email']."</td><td>".$row18['mob_no']."</td><td>".$row18['video_upload'] ."</td><td>".$row18['strengths']."</td><td>".$row18['selected']."</td><td>".$row18['rate']."</td>" ;
    }
  }
}

if(isset($_POST['button_19'])){
  $sql19 = "SELECT * FROM music where stream ='Mechanical' "; 
  $result19 =mysqli_query($connection,$sql19);
  $resultCheck19 =mysqli_num_rows($result19);
  if($resultCheck19>0){
    while($row19=mysqli_fetch_assoc($result19)){
      echo "<tr><td>".$row19['full_name'] ."</td><td>".$row19['roll_no']."</td><td>".$row19['gender']."</td><td>".$row19['stream'] ."</td><td>".$row19['email']."</td><td>".$row19['mob_no']."</td><td>".$row19['video_upload'] ."</td><td>".$row19['strengths']."</td><td>".$row19['selected']."</td><td>".$row19['rate']."</td>" ;
    }
  }
}
if(isset($_POST['button_20'])){
  $sql20 = "SELECT * FROM music where stream ='Electronics' "; 
  $result20 =mysqli_query($connection,$sql20);
  $resultCheck20 =mysqli_num_rows($result20);
  if($resultCheck20>0){
    while($row20=mysqli_fetch_assoc($result20)){
      echo "<tr><td>".$row20['full_name'] ."</td><td>".$row20['roll_no']."</td><td>".$row20['gender']."</td><td>".$row1['stream'] ."</td><td>".$row20['email']."</td><td>".$row20['mob_no']."</td><td>".$row20['video_upload'] ."</td><td>".$row20['strengths']."</td><td>".$row20['selected']."</td><td>".$row20['rate']."</td>" ;
    }
  }
}

if(isset($_POST['button_21'])){
  $sql21 = "SELECT * FROM music where stream ='EXTC' "; 
  $result21 =mysqli_query($connection,$sql21);
  $resultCheck21 =mysqli_num_rows($result21);
  if($resultCheck21>0){
    while($row21=mysqli_fetch_assoc($result21)){
      echo "<tr><td>".$row21['full_name'] ."</td><td>".$row21['roll_no']."</td><td>".$row21['gender']."</td><td>".$row21['stream'] ."</td><td>".$row21['email']."</td><td>".$row21['mob_no']."</td><td>".$row21['video_upload'] ."</td><td>".$row21['strengths']."</td><td>".$row21['selected']."</td><td>".$row21['rate']."</td>" ;
    }
  }
}
if(isset($_POST['delete'])){
	$r=$_POST['roll_no'];
	$sql15="SELECT * from music where roll_no='$r'";
	$query_run2=mysqli_query($connection,$sql15);
	$row14=mysqli_fetch_assoc($query_run2);
	$to=$row14['email'];
	
	
	$resultCheck2 =mysqli_num_rows($query_run2);
	if($resultCheck2>0){
		unlink("$row14[video_upload]");
	$sql14=" DELETE from music where roll_no='$r'";
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
  $sql2 = "SELECT * FROM music "; 
  $result2 =mysqli_query($connection,$sql2);
  $resultCheck2 =mysqli_num_rows($result2);
  if($resultCheck2>0){
    while($row2=mysqli_fetch_assoc($result2)){
      echo "<tr><td>".$row2['full_name'] ."</td><td>".$row2['roll_no']."</td><td>".$row2['gender']."</td><td>".$row2['stream'] ."</td><td>".$row2['email']."</td><td>".$row2['mob_no']."</td><td>".$row2['video_upload'] ."</td><td>".$row2['strengths']."</td><td>".$row2['selected']."</td><td>".$row2['rate']."</td>" ;
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
  $sql2 = "SELECT * FROM music "; 
  $result2 =mysqli_query($connection,$sql2);
  $resultCheck2 =mysqli_num_rows($result2);
  if($resultCheck2>0){
    while($row2=mysqli_fetch_assoc($result2)){
      echo "<tr><td>".$row2['full_name'] ."</td><td>".$row2['roll_no']."</td><td>".$row2['gender']."</td><td>".$row2['stream'] ."</td><td>".$row2['email']."</td><td>".$row2['mob_no']."</td><td>".$row2['video_upload'] ."</td><td>".$row2['strengths']."</td><td>".$row2['selected']."</td><td>".$row2['rate']."</td>" ;
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

$sql1 = "INSERT INTO music (full_name,roll_no,gender,stream,email,mob_no) VALUES ('$name','$roll_no','$gender','$stream','$email','$mob_no')";
$query_run1=mysqli_query($connection,$sql1);
if($query_run1){
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
$sql1 = "SELECT * FROM music "; 
  $result1 =mysqli_query($connection,$sql1);
  $resultCheck1 =mysqli_num_rows($result1);
  if($resultCheck1>0){
    while($row1=mysqli_fetch_assoc($result1)){
      echo "<tr><td>".$row1['full_name'] ."</td><td>".$row1['roll_no']."</td><td>".$row1['gender']."</td><td>".$row1['stream'] ."</td><td>".$row1['email']."</td><td>".$row1['mob_no']."</td><td>".$row1['video_upload'] ."</td><td>".$row1['strengths']."</td><td>".$row1['selected']."</td><td>".$row1['rate']."</td>" ;
    }
  }

}
if(isset($_POST['all']))
{
 $sql1 = "SELECT * FROM music "; 
  $result1 =mysqli_query($connection,$sql1);
  $resultCheck1 =mysqli_num_rows($result1);
  if($resultCheck1>0){
    while($row1=mysqli_fetch_assoc($result1)){
      echo "<tr><td>".$row1['full_name'] ."</td><td>".$row1['roll_no']."</td><td>".$row1['gender']."</td><td>".$row1['stream'] ."</td><td>".$row1['email']."</td><td>".$row1['mob_no']."</td><td>".$row1['video_upload'] ."</td><td>".$row1['strengths']."</td><td>".$row1['selected']."</td><td>".$row1['rate']."</td>" ;
    }
  } 
}
echo "</table>"


?>
</body>
</html>