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

#del_1{
  background-color: transparent;
  border:transparent;
}
#del_1:hover{
  background-color: grey;
}

#add{
  background-color: black;
  border:transparent;
}
#add:hover{
  background-color: grey;
}
</style>
	<title></title>
</head>
<body>
<nav class="navbar navbar-expand-sm  fixed top" id="navbar_4">
<form action="" method="post">
     <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal1" id="update_1" name="day1">DAY1</a>
     </form>
  <form action="" method="post">

     <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal2" id="update_1" name="day2">DAY2</a>
</form>
 <form action="" method="post">

     <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal3" id="update_1" name="day3">DAY3</a>
</form>
<form action="" method="post">

     <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal4" id="del_1" name="day3">Delete Event</a>
</form>
<div class="navbar-collapse collapse  order-6 dual-collapse2">
            <ul class="navbar-nav ml-auto">
               <form action="" method="post">           
                  <a href="admin page.php"  id="back_1" class="btn btn-success" role="button">Back</a>            
               </form>            
            </ul>
        </div>   
</nav>
<div class="modal fade" id="myModal1" role="dialog">
   
    <div class="modal-dialog modal-lg" style="width: 50%;" style="height: auto;" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Add Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
          <div class="modal-body">
          <form class="form-horizontal" method="post" enctype="multipart/form-data">
           <div class="form-group">
          <div class="col-sm-offset-8 col-sm-10">
        
        </div>

<div class="form-group" >

 <label class = "control-label " for="roll_no">Event Name </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="event_name"  required>
</div>
</div>

<div class="form-group" >

 <label class = "control-label " for="roll_no">Event Description </label>
 <div class="col-sm-8">
<input type="textarea" class="form-control" id="roll_no" name="event_desc"  required>
</div>
</div>
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label " for="roll_no">Event Time </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="event_time"  required>
</div>
</div>

<div class="form-group" >

 <label class = "control-label " for="roll_no">Event Image </label>
 <div class="col-sm-8">
<input type="file" class="form-control" id="Video" name="event_image" placeholder= " " >
</div>
</div>


        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info"  id="add" name="add1">ADD</button>
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

<div class="modal fade" id="myModal2" role="dialog">
   
    <div class="modal-dialog modal-lg" style="width: 50%;" style="height: auto;" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Add Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
          <div class="modal-body">
          <form class="form-horizontal" method="post"  enctype="multipart/form-data">
           <div class="form-group">
          <div class="col-sm-offset-8 col-sm-10">
        
        </div>

<div class="form-group">

 <label class = "control-label " for="roll_no">Event Name </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="event_name" required>
</div>
</div>

<div class="form-group">

 <label class = "control-label " for="roll_no">Event Description </label>
 <div class="col-sm-8">
<input type="textarea" class="form-control" id="roll_no" name="event_desc" required>
</div>
</div>
<div class="form-group">

 <label class = "control-label " for="roll_no">Event Time </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="event_time" required>
</div>
</div>

<div class="form-group">

 <label class = "control-label " for="roll_no">Event Image </label>
 <div class="col-sm-8">
<input type="file" class="form-control" id="Video"  name="event_image" placeholder= " " >
</div>
</div>


        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info"  id="add" name="add2">ADD</button>
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

<div class="modal fade" id="myModal3" role="dialog">
   
    <div class="modal-dialog modal-lg" style="width: 50%;" style="height: auto;" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Add Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
          <div class="modal-body">
          <form class="form-horizontal" method="post"  enctype="multipart/form-data">
           <div class="form-group">
          <div class="col-sm-offset-8 col-sm-10">
        
        </div>

<div class="form-group">

 <label class = "control-label " for="roll_no">Event Name </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="event_name" required>
</div>
</div>

<div class="form-group">

 <label class = "control-label " for="roll_no">Event Description </label>
 <div class="col-sm-8">
<input type="textarea" class="form-control" id="roll_no"  name="event_desc" required>
</div>
</div>
<div class="form-group">

 <label class = "control-label " for="roll_no">Event Time </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="event_time"  required>
</div>
</div>

<div class="form-group">

 <label class = "control-label " for="roll_no">Event Image </label>
 <div class="col-sm-8">
<input type="file" class="form-control" id="Video" name="event_image" placeholder= " " >
</div>
</div>


        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info" id="add" name="add3">ADD</button>
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

<div class="modal fade" id="myModal4" role="dialog">
   
    <div class="modal-dialog modal-lg" style="width: 50%;" style="height: auto;" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Delete Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
          <div class="modal-body">
          <form class="form-horizontal" method="post"  enctype="multipart/form-data">
           <div class="form-group">
          <div class="col-sm-offset-8 col-sm-10">
        
        </div>

<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="stream">Event Name </label>
 <div class="col-sm-8">

  
  <select class="form-control" id="stream" name="event_name">
  <?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'fms'); // Selecting Database from Server
$r="SELECT name from event";
$query_run2=mysqli_query($connection,$r);
while($row14=mysqli_fetch_assoc($query_run2)){
  echo"<option> ".$row14['name']." </option>";
}

  ?>
  </select>
</div>
</div>





        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info"  id="add" name="delete">Delete</button>
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


<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'fms'); // Selecting Database from Server


if(isset($_POST['add1'])){

  $name = $_POST['event_name'];
$desc = $_POST['event_desc'];
$time = $_POST['event_time'];
$k="day1";
$target = "image_uploads/"; //folder where to save the uploaded file/video
 $allowedExts = array("png","jpg","jpeg");
$extension = pathinfo($_FILES['event_image']['name'], PATHINFO_EXTENSION);

  if ($_FILES["event_image"]["type"] == "image/png" || $_FILES["event_image"]["type"] == "image/jpg" || $_FILES["event_image"]["type"] == "image/jpeg" && in_array($extension, $allowedExts)){

  $target = $target . basename( $_FILES['event_image']['name']) ; //gets the name of the upload file 
 move_uploaded_file($_FILES['event_image']['tmp_name'], $target) ;
$sql3 = "INSERT INTO event (day,name,description,time_1,image) VALUES ('$k','$name','$desc','$time','$target')";
$query_run1=mysqli_query($connection,$sql3);

  if($query_run1){
echo '<script language="javascript">';
  echo 'alert("Event added")';  //not showing an alert box.
  echo '</script>';
  exit;
 }
}
 else{
  echo '<script language="javascript">';
  echo 'alert("upload valid image")';  //not showing an alert box.
  echo '</script>';
  exit;

 }



}

if(isset($_POST['add2'])){
	
  $name = $_POST['event_name'];
$desc = $_POST['event_desc'];
$time = $_POST['event_time'];
$k="day2";
$target = "image_uploads/"; //folder where to save the uploaded file/video
  $allowedExts = array("png","jpg","jpeg");
$extension = pathinfo($_FILES['event_image']['name'], PATHINFO_EXTENSION);

  if ($_FILES["event_image"]["type"] == "image/png" || $_FILES["event_image"]["type"] == "image/jpg" || $_FILES["event_image"]["type"] == "image/jpeg" && in_array($extension, $allowedExts)){

  $target = $target . basename( $_FILES['event_image']['name']) ; //gets the name of the upload file 
 move_uploaded_file($_FILES['event_image']['tmp_name'], $target) ;
$sql3 = "INSERT INTO event (day,name,description,time_1,image) VALUES ('$k','$name','$desc','$time','$target')";
$query_run1=mysqli_query($connection,$sql3);

  if($query_run1){
echo '<script language="javascript">';
  echo 'alert("Event added")';  //not showing an alert box.
  echo '</script>';
  exit;
 }
}
 else{
  echo '<script language="javascript">';
  echo 'alert("upload valid image file")';  //not showing an alert box.
  echo '</script>';
  exit;



}
}

if(isset($_POST['add3'])){
	
  $name = $_POST['event_name'];
$desc = $_POST['event_desc'];
$time = $_POST['event_time'];
$k="day3";
$target = "image_uploads/"; //folder where to save the uploaded file/video
  $allowedExts = array("png","jpg","jpeg");
$extension = pathinfo($_FILES['event_image']['name'], PATHINFO_EXTENSION);

  if ($_FILES["event_image"]["type"] == "image/png" || $_FILES["event_image"]["type"] == "image/jpg" || $_FILES["event_image"]["type"] == "image/jpeg" && in_array($extension, $allowedExts)){

  $target = $target . basename( $_FILES['event_image']['name']) ; //gets the name of the upload file 
 move_uploaded_file($_FILES['event_image']['tmp_name'], $target) ;
$sql3 = "INSERT INTO event (day,name,description,time_1,image) VALUES ('$k','$name','$desc','$time','$target')";
$query_run1=mysqli_query($connection,$sql3);

  if($query_run1){
echo '<script language="javascript">';
  echo 'alert("Event added")';  //not showing an alert box.
  echo '</script>';
  exit;
 }
}
 else{
  echo '<script language="javascript">';
  echo 'alert("upload valid image file")';  //not showing an alert box.
  echo '</script>';
  exit;

 }



}
if(isset($_POST['delete'])){
$name = $_POST['event_name'];
$sql15="SELECT * from event where name='$name'";
$query_run2=mysqli_query($connection,$sql15);
$row14=mysqli_fetch_assoc($query_run2);
$resultCheck2 =mysqli_num_rows($query_run2);
if($resultCheck2>0){
unlink("$row14[image]");
$sql14=" DELETE from event where name='$name'";
if($query_run1=mysqli_query($connection,$sql14)){
echo '<script language="javascript">';
  echo 'alert("Event deleted successfully")';  //not showing an alert box.
  echo '</script>';
}
else
{
  echo '<script language="javascript">';
  echo 'alert("Event not  deleted")';  //not showing an alert box.
  echo '</script>';
}
}
}

?>

</body>
</html>