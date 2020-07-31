<!DOCTYPE html>
<html>
<head><meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> <!--cards-->

  

   <link rel="stylesheet" href="registration.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>





body{
    background-color: black;
    background-size: cover; 
}
#home{
  background-color: transparent;
  border:transparent;
}
#home:hover{
  background-color: grey;
}
#in{
  background-color: black;
  border:transparent;
}
#in:hover{
  background-color: grey;
}
#reg{
  background-color: black;
  border:transparent;
}
#reg:hover{
  background-color: grey;
}
.invalid{
  color:red;
}

#dance_card {
  width:15%;
}
#music_card {
  width:15%;
}
#hosting_card {
  width:15%;
}
#security_card {
  width:15%;
}



@media only screen and (max-width: 600px)
{
  #dance_card {
      position: absolute;
      top: 40%;
      width:40%;
      left: 8%; 
}

#music_card {
      position: absolute;
      top: 40%;
      width:40%;
}

#security_card {
      position: absolute;
      top: 70%;
      width:40%;
      left: 50%;
}

#hosting_card {
      position: absolute;
      top: 70%;
      width:40%;
}


}



</style>




</head>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box


// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 5) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

function nospaces(t){
if(t.value.match(/\s/g)){
alert('Sorry, you are not allowed to enter any spaces');
t.value=t.value.replace(/\s/g,'');
}
}


</script>
<body>
<div class="container"> 
 <div class="container" id=container_1>
<nav class="navbar navbar-inverse" id="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">REGISTRATIONS</a>
    </div>
    <ul class="nav navbar-nav">
      <li id="home"><a href="loginpage.php">Home</a></li>
      
    </ul>
  </div>
</nav>
  <div id="myCarousel" class="carousel slide " data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="4.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="5.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="6.jpg".jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!--dance-->

  <div class="card text-white bg-dark mb-3 col-sm-2" id="dance_card" >
    <img class="card-img-top" src="hosting1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">DANCE</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" id="reg">Register</a>
      
    </div>
  </div>

  <br>
  
  
 <div class="modal fade" id="myModal1" role="dialog">
   
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Registration Page</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
          <div class="modal-body">
          <form class="form-horizontal"  enctype="multipart/form-data"  method="post" action="">
           <div class="form-group">
          <div class="col-sm-offset-8 col-sm-10">
        
        </div>
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="fullname">Full Name: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname" name="fullname"placeholder= " Enter your full name" required>
</div>
</div>
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="roll_no">Roll No: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="roll_no"placeholder= " Enter your roll number" required>
</div>
</div>

<label class = "control-label col-sm-2" for="roll_no">Username: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname"  name="username" onkeyup="nospaces(this)" required>
</div>
</div>
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="roll_no">Password: </label>
 <div class="col-sm-8">
<input type="password" class="form-control" id="psw"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required>
</div>
</div>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>5 characters</b></p>
</div>

<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="gender">Gender: </label>
 <div class="col-sm-8">
 
      <select class="form-control" id="gender" name="gender" required>
        <option>Male</option>
        <option>Female</option>
        
      </select>
</div>
</div>

<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="stream">Stream </label>
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


<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="email">Email: </label>
 <div class="col-sm-8">
<input type="Email" class="form-control" id="email" name="email"placeholder= " Enter your email address" required>
</div>
</div>
 
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="mob_no">Mobile number: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="mob_no" name="mob_no" placeholder= " 10 digits"  required>
</div>
</div>
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="roll_no">Video Upload: </label>
 <div class="col-sm-8">
<input type="file" class="form-control" id="Video" placeholder= " Maximum 100mb" name = "Video" required>
</div>
</div>

<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="roll_no">Strengths: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname" placeholder= " Any particular dance type" name="strength" required>
</div>
</div>
<div class="form-group" enctype="multipart/form-data">

 
        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info"  id="in" name="submit1">Submit</button>
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

<!--hosting-->
 <div class="card text-white bg-dark mb-3 col-sm-5" id="hosting_card"  >
    <img class="card-img-top" src="hosting1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">HOSTING</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" id="reg">Register</a>
      
    </div>
  </div>

  <br>
  
  
 <div class="modal fade" id="myModal2" role="dialog">
   
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Registration Page</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
          <div class="modal-body">
          <form class="form-horizontal"method="post">
           <div class="form-group">
          <div class="col-sm-offset-8 col-sm-10">
        
        </div>
<div class="form-group">

 <label class = "control-label col-sm-2" for="fullname">Full Name: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname" name="fullname"placeholder= " Enter your full name" required>
</div>
</div>
<div class="form-group">

 <label class = "control-label col-sm-2" for="roll_no">Roll No: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="roll_no"placeholder= " Enter your roll number" required>
</div>
</div>

<label class = "control-label col-sm-2" for="roll_no">Username: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname"  name="username" onkeyup="nospaces(this)" required>
</div>
</div>
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="roll_no">Password: </label>
 <div class="col-sm-8">
<input type="password" class="form-control" id="psw"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required>
</div>
</div>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>5 characters</b></p>
</div>

<div class="form-group">

 <label class = "control-label col-sm-2" for="gender">Gender: </label>
 <div class="col-sm-8">
 
      <select class="form-control" id="gender" name="gender" required>
        <option>Male</option>
        <option>Female</option>
        
      </select>
</div>
</div>

<div class="form-group">

 <label class = "control-label col-sm-2" for="stream" >Stream </label>
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

 <label class = "control-label col-sm-2" for="email">Email: </label>
 <div class="col-sm-8">
<input type="Email" class="form-control" id="email" name="email"placeholder= " Enter your email address" required>
</div>
</div>

<div class="form-group">

 <label class = "control-label col-sm-2" for="mob_no">Mobile number: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="mob_no" name="mob_no"placeholder= " 10 digits"  required>
</div>
</div>
<div class="form-group">

 <label class = "control-label col-sm-2" for="days">Days Available: </label>
 <div class="col-sm-8">
<div class="checkbox">
  <label><input type="checkbox" value="yes" name="day_1"> Day 1</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="yes" name="day_2"> Day 2</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="yes" name="day_3"> Day 3</label>
</div>

        </div>
        </div>
        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info" id="in" name="submit2">Submit</button>
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


<!--music-->

 
  <div class="card text-white bg-dark mb-3 col-sm-11" id="music_card" >
    <img class="card-img-top" src="hosting1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">MUSIC</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal3" id="reg">Register</a>
      
    </div>
  </div>

  <div class="modal fade" id="myModal3" role="dialog">
   
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Registration Page</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
          <div class="modal-body">
          <form class="form-horizontal"  enctype="multipart/form-data"  method="post" action="">
           <div class="form-group">
          <div class="col-sm-offset-8 col-sm-10">
        
        </div>
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="fullname">Full Name: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname" name="fullname"placeholder= " Enter your full name" required>
</div>
</div>
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="roll_no">Roll No: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="roll_no"placeholder= " Enter your roll number" required>
</div>
</div>

<label class = "control-label col-sm-2" for="roll_no">Username: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname"  name="username" onkeyup="nospaces(this)" required>
</div>
</div>
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="roll_no">Password: </label>
 <div class="col-sm-8">
<input type="password" class="form-control" id="psw"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required>
</div>
</div>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>5 characters</b></p>
</div>

<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="gender">Gender: </label>
 <div class="col-sm-8">
 
      <select class="form-control" id="gender" name="gender" required>
        <option>Male</option>
        <option>Female</option>
        
      </select>
</div>
</div>

<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="stream">Stream </label>
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


<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="email">Email: </label>
 <div class="col-sm-8">
<input type="Email" class="form-control" id="email" name="email"placeholder= " Enter your email address" required>
</div>
</div>
 
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="mob_no">Mobile number: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="mob_no" name="mob_no"placeholder= " 10 digits"  required>
</div>
</div>
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="roll_no">Video Upload: </label>
 <div class="col-sm-8">
<input type="file" class="form-control" id="Video" placeholder= " Maximum 100mb" name = "Video" required>
</div>
</div>

<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="roll_no">Strengths: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname" placeholder= " Any particular dance type" name="strength" required>
</div>
</div>
        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info" id="in" name="submit4">Submit</button>
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
<!--security-->
<div class="card text-white bg-dark mb-3 col-sm-8" id="security_card" >
    <img class="card-img-top" src="hosting1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">SECURITY</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal4" id="reg">Register</a>
      
    </div>
  </div>
  <div class="modal fade" id="myModal4" role="dialog">
   
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Registration Page</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
          <div class="modal-body">
          <form class="form-horizontal"method="post">
           <div class="form-group">
          <div class="col-sm-offset-8 col-sm-10">
        
        </div>
<div class="form-group">

 <label class = "control-label col-sm-2" for="fullname">Full Name: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname" name="fullname"placeholder= " Enter your full name" required>
</div>
</div>
<div class="form-group">

 <label class = "control-label col-sm-2" for="roll_no">Roll No: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="roll_no" name="roll_no"placeholder= " Enter your roll number" required>
</div>
</div>

<label class = "control-label col-sm-2" for="roll_no">Username: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="fullname"  name="username" onkeyup="nospaces(this)" required>
</div>
</div>
<div class="form-group" enctype="multipart/form-data">

 <label class = "control-label col-sm-2" for="roll_no">Password: </label>
 <div class="col-sm-8">
<input type="password" class="form-control" id="psw"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required>
</div>
</div>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>5 characters</b></p>
</div>

<div class="form-group">

 <label class = "control-label col-sm-2" for="gender">Gender: </label>
 <div class="col-sm-8">
 
      <select class="form-control" id="gender" name="gender" required>
        <option>Male</option>
        <option>Female</option>
        
      </select>
</div>
</div>

<div class="form-group">

 <label class = "control-label col-sm-2" for="stream" >Stream </label>
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

 <label class = "control-label col-sm-2" for="email">Email: </label>
 <div class="col-sm-8">
<input type="Email" class="form-control" id="email" name="email"placeholder= " Enter your email address" required>
</div>
</div>

<div class="form-group">

 <label class = "control-label col-sm-2" for="mob_no">Mobile number: </label>
 <div class="col-sm-8">
<input type="text" class="form-control" id="mob_no" name="mob_no"placeholder= " 10 digits"  required>
</div>
</div>
<div class="form-group">

 <label class = "control-label col-sm-2" for="days">Days Available: </label>
 <div class="col-sm-8">
<div class="checkbox">
  <label><input type="checkbox" value="yes" name="day_1"> Day 1</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="yes" name="day_2"> Day 2</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="yes" name="day_3"> Day 3</label>
</div>

        </div>
        </div>
        <div class="form-group"> 
        <div class="col-sm-offset-8 col-sm-12">
    
      <button type="submit" class="btn btn-info" id="in" name="submit3">Submit</button>
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
  
  

</div> 
</div>
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'FMS'); // Selecting Database from Server
 // Fetching variables of the form which travels in URL
if(isset($_POST['submit2'])){
$name = $_POST['fullname'];
$roll_no = $_POST['roll_no'];
$gender = $_POST['gender'];
$stream = $_POST['stream'];
$email = $_POST['email'];
$mob_no = $_POST['mob_no'];
$username=$_POST['username'];
$password=$_POST['password'];
$day1=isset($_POST['day_1']) ? 'yes' : 'no';
$day2=isset($_POST['day_2']) ? 'yes' : 'no';
$day3=isset($_POST['day_3']) ? 'yes' : 'no'; 
  $check="SELECT * from dance where roll_no='$roll_no'";
  $check_1="SELECT * from music where roll_no='$roll_no'";
  $c=mysqli_query($connection,$check);
  $c_1=mysqli_query($connection,$check_1);
  $cr=mysqli_num_rows($c);
  $cr_1=mysqli_num_rows($c_1);
  
if( $cr==''&&$cr_1==''){


//Insert Query of SQL
$sql = "INSERT INTO hosting (full_name,roll_no,gender,stream,email,mob_no,day_1,day_2,day_3,username,password) VALUES ('$name','$roll_no','$gender','$stream','$email ','$mob_no','$day1','$day2','$day3','$username','$password')";
if(mysqli_query($connection,$sql)){
  echo '<script language="javascript">';
  echo 'alert("You have been registered")';  //not showing an alert box.
  echo '</script>';
  exit;
}
else
{
  echo '<script language="javascript">';
  echo 'alert("You have not been registered")';  //not showing an alert box.
  echo '</script>';
  exit;
}
}
else
{
  echo '<script language="javascript">';
  echo 'alert("You have already been registered for one of the participation events")';  //not showing an alert box.
  echo '</script>';
  exit;
}
}

if(isset($_POST['submit1'])){
  $name = $_POST['fullname'];
$roll_no = $_POST['roll_no'];
$gender = $_POST['gender'];
$stream = $_POST['stream'];
$email = $_POST['email'];
$mob_no = $_POST['mob_no'];
$username=$_POST['username'];
$password=$_POST['password'];
$target = "dance_uploads/"; //folder where to save the uploaded file/video
 

 

$strength = $_POST['strength'];
$check="SELECT * from hosting where roll_no='$roll_no'";
  $check_1="SELECT * from security where roll_no='$roll_no'";
  $c=mysqli_query($connection,$check);
  $c_1=mysqli_query($connection,$check_1);
  $cr=mysqli_num_rows($c);
  $cr_1=mysqli_num_rows($c_1);
if( $cr==''&&$cr_1==''){
   $allowedExts = array("mp4");
$extension = pathinfo($_FILES['Video']['name'], PATHINFO_EXTENSION);

  if ($_FILES["Video"]["type"] == "video/mp4" && in_array($extension, $allowedExts)){
  $target = $target . basename( $_FILES['Video']['name']) ; //gets the name of the upload file
 $ok=1; 
 move_uploaded_file($_FILES['Video']['tmp_name'], $target) ;
 
$sql1 = "INSERT INTO dance (full_name,roll_no,gender,stream,email,mob_no,video_upload,strengths,username,password) VALUES ('$name','$roll_no','$gender','$stream','$email','$mob_no','$target','$strength','$username','$password')";
$query_run1=mysqli_query($connection,$sql1);
if($query_run1){
  echo '<script language="javascript">';
  echo 'alert("You have been registered")';  //not showing an alert box.
  echo '</script>';
  exit;
}
else
{
  echo '<script language="javascript">';
  echo 'alert("You have not been registered")';  //not showing an alert box.
  echo '</script>';
  exit;
}
}
else
{
  echo '<script language="javascript">';
  echo 'alert("upload suitable file")';  //not showing an alert box.
  echo '</script>';
  
}
 
}
else
{
  echo '<script language="javascript">';
  echo 'alert("You have already been registered for one of the volunteering events")';  //not showing an alert box.
  echo '</script>';
  exit;
}
}

if(isset($_POST['submit3'])){
$name = $_POST['fullname'];
$roll_no = $_POST['roll_no'];
$gender = $_POST['gender'];
$stream = $_POST['stream'];
$email = $_POST['email'];
$mob_no = $_POST['mob_no'];
$day1=isset($_POST['day_1']) ? 'yes' : 'no';
$day2=isset($_POST['day_2']) ? 'yes' : 'no';
$day3=isset($_POST['day_3']) ? 'yes' : 'no'; 
$username=$_POST['username'];
$password=$_POST['password'];

  
$check="SELECT * from dance where roll_no='$roll_no'";
  $check_1="SELECT * from music where roll_no='$roll_no'";
  $c=mysqli_query($connection,$check);
  $c_1=mysqli_query($connection,$check_1);
  $cr=mysqli_num_rows($c);
  $cr_1=mysqli_num_rows($c_1);
if( $cr==''&&$cr_1==''){
//Insert Query of SQL
$sql2 = "INSERT INTO security (full_name,roll_no,gender,stream,email,mob_no,day_1,day_2,day_3,username,password) VALUES ('$name','$roll_no','$gender','$stream','$email ','$mob_no','$day1','$day2','$day3','$username','$password')";
if(mysqli_query($connection,$sql2)){
  echo '<script language="javascript">';
  echo 'alert("You have been registered")';  //not showing an alert box.
  echo '</script>';
  exit;
}
else
{
  echo '<script language="javascript">';
  echo 'alert("You have not been registered")';  //not showing an alert box.
  echo '</script>';
  exit;
}
}
else{
  echo '<script language="javascript">';
  echo 'alert("You have already been registered for one of the participation events")';  //not showing an alert box.
  echo '</script>';
  exit;
}
}

if(isset($_POST['submit4'])){
  $name = $_POST['fullname'];
$roll_no = $_POST['roll_no'];
$gender = $_POST['gender'];
$stream = $_POST['stream'];
$email = $_POST['email'];
$mob_no = $_POST['mob_no'];
$username=$_POST['username'];
$password=$_POST['password'];
$target = "music_uploads/"; //folder where to save the uploaded file/video
 
 

 

$strength = $_POST['strength'];
$check="SELECT * from hosting where roll_no='$roll_no'";
  $check_1="SELECT * from security where roll_no='$roll_no'";
  $c=mysqli_query($connection,$check);
  $c_1=mysqli_query($connection,$check_1);
  $cr=mysqli_num_rows($c);
  $cr_1=mysqli_num_rows($c_1);
if( $cr==''&&$cr_1==''){
  $allowedExts = array("mp4");
$extension = pathinfo($_FILES['Video']['name'], PATHINFO_EXTENSION);

  if ($_FILES["Video"]["type"] == "video/mp4" && in_array($extension, $allowedExts)){
  $target = $target . basename( $_FILES['Video']['name']) ; //gets the name of the upload file
 $ok=1; 
 move_uploaded_file($_FILES['Video']['tmp_name'], $target) ;
$sql3 = "INSERT INTO music (full_name,roll_no,gender,stream,email,mob_no,video_upload,strengths,username,password) VALUES ('$name','$roll_no','$gender','$stream','$email','$mob_no','$target','$strength','$username','$password')";
$query_run1=mysqli_query($connection,$sql3);
  if($query_run1){
echo '<script language="javascript">';
  echo 'alert("You have been registered")';  //not showing an alert box.
  echo '</script>';
  exit;
 }
 else{
  echo '<script language="javascript">';
  echo 'alert("You have not been registered")';  //not showing an alert box.
  echo '</script>';
  exit;
 }

}

else{
  echo '<script language="javascript">';
  echo 'alert("upload suitable file")';  //not showing an alert box.
  echo '</script>';
  
}
}
else
{
  echo '<script language="javascript">';
  echo 'alert("You have already been registered for one of the volunteering events")';  //not showing an alert box.
  echo '</script>';
  exit;
}
}

mysqli_close($connection)
// Closing Connection with Server
?>
</body>
</html>