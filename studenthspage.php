<?php
  
  session_start();

  if ($_SESSION['user_name']) {
    # code...





  }
  else
  {
    header("location:loginpage.php");
    echo "<script type='text/javascript'>alert('Please login first!!!');</script>";
  }

?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>

body{
    background-color: black;
    
    background-attachment: fixed;
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

#up{
  background-color: black;
  border:transparent;
}
#up:hover{
  background-color: grey;
}
#logout{
  background-color: black;
  border:transparent;
}
#logout:hover{
  background-color: grey;
}
#navbar_1{
  background-color: transparent;
}
</style>


  <title></title>
</head>
<body>

<table style="width:100%">
<tr>
<th>Fullname</th>
<th>Roll No</th>
<th>Gender</th>
<th>Stream</th>
<th>Email id</th>
<th>Mobile</th>
<th>DAY 1</th>
<th>DAY 2</th>
<th>DAY 3</th>
<th>EVENT ASSOCIATED 1</th>
<th>EVENT ASSOCIATED 2</th>
<th>EVENT ASSOCIATED 3</th>
</tr>
  
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'FMS'); // Selecting Database from Server
$eve=$_SESSION['user_event'];
$uname=$_SESSION['user_name'];
$password=$_SESSION['user_password'];



    if($eve=="hosting")
      $sql1="select * from hosting where username='".$uname."' and password='".$password."'";
    if($eve=="security")
      $sql1="select * from security where username='".$uname."' and password='".$password."'";


$result1 =mysqli_query($connection,$sql1);
  $resultCheck1 =mysqli_num_rows($result1);
  if($resultCheck1>0){
    while($row1=mysqli_fetch_assoc($result1)){
      echo "<tr><td>".$row1['full_name'] ."</td><td>".$row1['roll_no']."</td><td>".$row1['gender']."</td><td>".$row1['stream'] ."</td><td>".$row1['email']."</td><td>".$row1['mob_no']."</td><td>".$row1['day_1'] ."</td><td>".$row1['day_2']."</td><td>".$row1['day_3']."</td><td>".$row1['event_associated_1']."</td><td>".$row1['event_associated_2']."</td><td>".$row1['event_associated_3']."</td>" ;
    }
  }








mysqli_close($connection)

?>
<nav class="navbar navbar-expand-sm fixed top" id="navbar_1">

  
   
     



  
  
  <div class="navbar-collapse collapse  order-6 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        <form action="" method="post">
           
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" id="up">Update</button>
                <a href="logout.php" class="btn btn-success" role="button" id="logout">Logout</a>
            
            </form>
            
        </ul>
    </div>
    
        
    
</nav>






<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"> 
          
          <h4 class="modal-title">Update your credentials</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!--MODAL BODY-->
        <div class="modal-body">
          <form method="POST" action="studenthspage.php">
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="nm" name="name1" class="form-control" id="email">
  </div>
  <div class="form-group">

 <label class = "control-label col-sm-2" for="gender">Gender: </label>
 <div class="col-sm-8">
 
      <select class="form-control" id="gender" name="gender1" required>
        <option>Male</option>
        <option>Female</option>
        
      </select>
</div>
</div>
  <div class="form-group">

 <label class = "control-label col-sm-2" for="stream" >Stream </label>
 <div class="col-sm-8">

  
  <select class="form-control" id="stream" name="stream1">
    <option>Computers</option>
    <option>IT</option>
    <option>Mechanical</option>
    <option>Electronics</option>
    <option>EXTC</option>
  </select>
</div>
</div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email1" class="form-control" id="email">
  </div>
  <div class="form-group">

 <label class = "control-label col-sm-2" for="days">Days Available: </label>
 <div class="col-sm-8">
<div class="checkbox">
  <label><input type="checkbox" value="yes" name="day1"> Day 1</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="yes" name="day2"> Day 2</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="yes" name="day3"> Day 3</label>
</div>

        </div>
        </div>
  
</form>


        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="up" name="update" style="color:white">Update</button>
        </div>
      </div>
      
    </div>
  </div>








</body>
</html>

<?php
$connection = mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db($connection,'FMS');

if(isset($_POST['update']))
{
  $name1 = $_POST['name1'];
  $gender1 = $_POST['gender1'];
  $stream1 = $_POST['stream1'];
  $email1 = $_POST['email1'];
  $eve1=$_SESSION['user_event'];
  $uname1=$_SESSION['user_name'];
  $password1=$_SESSION['user_password'];
  $day1=isset($_POST['day1']) ? 'yes' : 'no';
  $day2=isset($_POST['day2']) ? 'yes' : 'no';
  $day3=isset($_POST['day3']) ? 'yes' : 'no'; 




  
    if($eve=="hosting")
      $s="UPDATE `hosting` SET `full_name`='".$name1."',`gender`='".$gender1."',`stream`='".$stream1."',`email`='".$email1."',day_1='".$day1."',day_2='".$day2."',day_3='".$day3."' WHERE username='".$uname1."' and password='".$password1."'";
    if($eve=="security")
      $s="UPDATE `security` SET `full_name`='".$name1."',`gender`='".$gender1."',`stream`='".$stream1."',`email`='".$email1."',day_1='".$day1."',day_2='".$day2."',day_3='".$day3."' WHERE username='".$uname1."' and password='".$password1."'";

  if(mysqli_query($connection,$s)){
  echo '<script language="javascript">';
  echo 'alert("Your data has been updated")';  //not showing an alert box.
  header("location:loginpage.php");
  echo '</script>';
  
exit;


}
else
{
  echo '<script language="javascript">';
  echo 'alert("Your records have not been updated")';  //not showing an alert box.
  echo '</script>';
  exit;
}

}
?>
