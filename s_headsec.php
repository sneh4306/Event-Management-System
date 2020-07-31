
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
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="s_head.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
body{
    background-color: black;
    background-size: cover; 
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
h2{
  color: white;
  text-align: center;
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
#mail{
  background-color: transparent;
  border:transparent;
}
#mail:hover{
  background-color: grey;}
</style>
</head>
<body>
  <nav class="navbar navbar-expand-sm  fixed top" id="navbar_3">
  <ul class="navbar-nav">
   <li class="nav-item active" id="home">
      <a class="nav-link" href="#">Home</a>

    </li>
    <li class="nav-item active" id="event">
      <a class="nav-link" href="s_headsec_1.php">Events</a>

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

  <div class='container-fluid' style="width:100%">
  <h2><?php echo $branch?></h2>
<table style="width:100%">
<tr>
<th>Fullname</th>
<th>Roll No</th>
<th>Gender</th>
<th>Stream</th>
<th>Email id</th>
<th>Mobile</th>
<th>day_1</th>
<th>day_2</th>
<th>day_3</th>
<th>events_1</th>
<th>events_2</th>
<th>events_3</th>
</tr>
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'fms'); // Selecting Database from Server
$sql1 = "SELECT * FROM ".$_SESSION['Event']." where stream='".$_SESSION['branch']."'"; 
  $result1 =mysqli_query($connection,$sql1);
  $resultCheck1 =mysqli_num_rows($result1);
  if($resultCheck1>0){
    while($row1=mysqli_fetch_assoc($result1)){
      echo "<tr><td>".$row1['full_name'] ."</td><td>".$row1['roll_no']."</td><td>".$row1['gender']."</td><td>".$row1['stream'] ."</td><td>".$row1['email']."</td><td>".$row1['mob_no']."</td><td>".$row1['day_1'] ."</td><td>".$row1['day_2']."</td><td>".$row1['day_3']."</td><td>".$row1['event_associated_1']."</td><td>".$row1['event_associated_2']."</td><td>".$row1['event_associated_3']."</td>" ;
    
    }}
    echo "</table>"
  
  ?>
  
 


     
</body>
</html> 
