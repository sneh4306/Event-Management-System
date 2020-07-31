<?php



$host="localhost";
$user="root";
$password="";
$db="fms";

$conn=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['username']))
{
  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from admin where username='".$uname."' and password='".$password."'";
    $result=mysqli_query($conn,$sql);

    $sql1="select * from student_head where username='".$uname."' and password='".$password."'";
$result1=mysqli_query($conn,$sql1);
  $result2= mysqli_fetch_array($result1);


  if(mysqli_num_rows($result)==1)  #if admin enters
  {
    
    session_start();
    $_SESSION['user_name']=$_POST['username'];
    $_SESSION['user_password']=$_POST['password'];
    $_SESSION['status']="loggedin";
      header("location:admin%20page.php");

    echo '<script language="javascript">';
  echo 'alert("You have logged in")';  //not showing an alert box.
  echo '</script>';
  exit;
  }
  if(mysqli_num_rows($result1)==1)
  {
    session_start();
    $_SESSION['user_name']=$_POST['username'];
    $_SESSION['user_password']=$_POST['password'];
    $_SESSION['status']="loggedin";
    $_SESSION['branch']=$result2['branch'];
    $_SESSION['Event']=$result2['event'];
      if($_SESSION['Event']=='dance' || $_SESSION['Event']=='music'){
        
      header("location:s_head.php");}
      elseif ($_SESSION['Event']=='security' ) {
        header("location:s_headsec.php");
      }
      elseif ($_SESSION['Event']=='hosting' ) {
        header("location:s_headhost.php");
      }

    echo "YOU HAVE SUCCESSFULLY LOGGED IN!!!";
    exit();
  }

  else if(mysqli_num_rows($result)==0)    #check in music,dance,security,hosting
  {
    
  	
  	$eve=$_POST['event'];
  	$rnum=$_POST['rollnumber'];

    if($eve=="dance")
    	$sql="select * from dance where username='".$uname."' and password='".$password."' and roll_no='".$rnum."'";
    if($eve=="music")
    	$sql="select * from music where username='".$uname."' and password='".$password."' and roll_no='".$rnum."'";
    if($eve=="hosting")
    	$sql="select * from hosting where username='".$uname."' and password='".$password."' and roll_no='".$rnum."'";
    if($eve=="security")
    	$sql="select * from security where username='".$uname."' and password='".$password."' and roll_no='".$rnum."'";


  	$result=mysqli_query($conn,$sql);

  	if((mysqli_num_rows($result)==1)&&(($eve=="dance")||($eve=="music")))  #if music and dance enter
  	{
    
    	session_start();
    	$_SESSION['user_name']=$_POST['username'];
    	$_SESSION['user_password']=$_POST['password'];
    	$_SESSION['roll_number']=$_POST['rollnumber'];
    	$_SESSION['user_event']=$_POST['event'];
    	$_SESSION['status']="loggedin";
    	header("location:studentmdpage.php");
    	exit();
  	}
    else if((mysqli_num_rows($result)==1)&&(($eve=="hosting")||($eve=="security")))  #if hosting and security enter
    {
    
      session_start();
      $_SESSION['user_name']=$_POST['username'];
      $_SESSION['user_password']=$_POST['password'];
      $_SESSION['roll_number']=$_POST['rollnumber'];
      $_SESSION['user_event']=$_POST['event'];
      $_SESSION['status']="loggedin";
      header("location:studenthspage.php");
      exit();
    }
  	else if(mysqli_num_rows($result)==0)
  	{

    	echo"Enter correct credentials";
  exit;
  	}
    
  }
    
}



?>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

@media only screen and (max-width: 600px)
{

#newnew {

	width:100px;
}

.jumbotron {
    background-color: white;
    font-weight: bold;
    width: 100%;
    overflow-y: scroll;
    height: 300px;
}

}


body{
    background-color: black;
    
    background-attachment: fixed;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0px;
    overflow: hidden;
    background-color: rgba(255,255,255,0);
    font-family: Arial Black;
    font-size: 20px;

}

li {
    float: right;
}

li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    color: grey;
}


li button {
    font-family: arial;
}



.newbox {
    margin-top: 80px;
    margin-bottom: 80px;
    margin-left: 200px;
    margin-right: 200px;
    height: 300px;
    padding: 15px;
    background-color: rgba(255,255,255,0.2);
}

.btn-group-lg>.btn, .btn-lg {
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;
    color: white;
    background-color: rgba(255,255,255,0);
 }

#buttons {
  margin-top: 25px;
}

.jumbotron {
  margin-top: 50px;
  margin-left: 75px;
  background-color: white;
  font-weight: bold;
  width: 90%;
  overflow-y:scroll;
  height: 500px;

}


.jumbotron::-webkit-scrollbar-track
{
  border-radius: 5px;
  background-color: #eaeaea;
}

.jumbotron::-webkit-scrollbar
{
  height: 10px;
  width: 10px;
  background-color: #eaeaea;
}

.jumbotron::-webkit-scrollbar-thumb
{
  background-color: #ffc312;
  border-radius: 2px;
}

.navbar-inverse {
     background-color: rgba(255,255,255,0); 
     border-color: rgba(255,255,255,0);
}



.btn-link, .btn-link:active, .btn-link:focus {
    color: black;
    border-radius: 10px;
    border-width: 2px;
    font-weight: bold;
}

.btn-link:hover {
    border-color: black;
    color: black;
    background-color: rgba(255,255,255,0.4);
    border-radius: 10px;
}

#two, #three, #four {
  margin-left: 80px;
}





.container2 {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 300px;
  height: 200px;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0,0,0,0.5);

  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .5s ease;
  transition: .5s ease;
}

.container2:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: auto;
  width: 300px;
}


.text {
  color: white;
  font-size: 15px;
  font-family: Comic Sans MS;
  position: absolute;
  top: 10%;
  left: 25%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: left;
}


.column {
    float: left;
    width: 33.33%;
    padding: 20px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
#accordionExample{
  background-color: transparent;
  border:transparent;
}
#container{
  background-color: transparent;
  border:transparent;
}

.text{
  color:white;
}







</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">


<ul class="nav navbar-nav" id='newnew'>
      <li><a href="#"><img src="abc.png"></a></li>
    </ul>


    <ul class="nav navbar-nav navbar-right" id="buttons">
      <li><button type="button" class="btn btn-lg btn-outline-dark" data-toggle="modal" data-target="#myModal">Student head/Admin Login</button></li>
      <li><button type="button" class="btn btn-lg btn-outline-dark" data-toggle="modal" data-target="#myModal2" >Student Login</button></li>    
    </ul>
  </div>
</nav>


 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"> 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enter your login credentials</h4>
        </div>

        <!--MODAL BODY-->
        <div class="modal-body">
          <form method="POST" action="loginpage.php">
  <div class="form-group">
    <label for="un">Username:</label>
    <input type="usern" name="username" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>





<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"> 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enter your login credentials</h4>
        </div>

        <!--MODAL BODY-->
        <div class="modal-body">
          <form method="POST" action="loginpage.php">

  <div class="form-group">
    <label for="email">Roll number:</label>
    <input type="rn" name="rollnumber" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="usern" name="username" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd">
  </div>

  <div class="form-group">
    <label for="event">Event:</label>
   <select class="form-control" name="event" id="exampleFormControlSelect1">
      <option value="music">music</option>
      <option value="dance">dance</option>
      <option value="hosting">hosting</option>
      <option value="security">security</option>
    </select>
  </div>


  <div class="form-group">
    <label for="newregistrations">For new registrations:</label>
    <button type="button" class="btn btn-default" onclick="window.location='http://localhost/FMS/Registration Page.php'">click here</button>
  </div>

  <div class="checkbox">
    <label><input type="checkbox">Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>




































<div class="container">
  <div class="jumbotron">
  <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
        	<div class="row">
        	<h3 >DAY 1</h3>


    <?php
    
    $host="localhost";
	$user="root";
	$password="";
	$db="fms";

	$conn=mysqli_connect($host,$user,$password,$db);



    $folderis="image_uploads/*.*";
    
    $files=glob($folderis);
    
     
      # code...
      

      


      $sql2="select * from event where day='day1'";

      $result2=mysqli_query($conn,$sql2);


  	if(mysqli_num_rows($result2)>0)
  	{  
  		while($row2=mysqli_fetch_assoc($result2))  
  		{
    		for ($i=0; $i<count($files) ; $i++) 
    		{ 
      			# code...
      			$num=$files[$i];
      			$num1=str_replace("image_uploads/", "", "$num");
      			if($row2['image']==$num)
      			{
      				list($width, $height)=getimagesize($num);
      			
      				echo"<img src='".$num."' title='' alt='Avatar' class='image'><br><br>";
      				$sql="SELECT * from event where day='day1' and image='".$num."'";
									$query_run3=mysqli_query($conn,$sql);
									while($row15=mysqli_fetch_assoc($query_run3))
									{ echo "Name:         ".$row15['name']."<br>";
										echo "Description:         ".$row15['description']."<br>";
										echo "Time:         ".$row15['time_1']."<br><br>";
								    }
					#echo "</div>";
      			}
      		}
    	}

  	}
  	else
  		echo "NO EVENT ADDED YET";

    
?>

      

  			</div>


<div class="row">
        	<h3 >DAY 2</h3>

    <?php
    
    $host="localhost";
	$user="root";
	$password="";
	$db="fms";

	$conn=mysqli_connect($host,$user,$password,$db);



    $folderis="image_uploads/*.*";
    
    $files=glob($folderis);
    
     
      # code...
      

      


      $sql2="select * from event where day='day2'";

      $result2=mysqli_query($conn,$sql2);


  	if(mysqli_num_rows($result2)>0)
  	{  
  		while($row2=mysqli_fetch_assoc($result2))  
  		{
    		for ($i=0; $i<count($files) ; $i++) 
    		{ 
      			# code...
      			$num=$files[$i];
      			$num1=str_replace("image_uploads/", "", "$num");
      			if($row2['image']==$num)
      			{
      				list($width, $height)=getimagesize($num);
      			
      				echo"<img src='".$num."' title='' alt='Avatar' class='image'><br><br>";
      				$sql="SELECT * from event where day='day2' and image='".$num."'";
									$query_run3=mysqli_query($conn,$sql);
									while($row15=mysqli_fetch_assoc($query_run3))
									{ echo "Name:         ".$row15['name']."<br>";
										echo "Description:         ".$row15['description']."<br>";
										echo "Time:         ".$row15['time_1']."<br><br>";
								    }
					#echo "</div>";
      			}
      		}
    	}

  	}
  	else
  		echo "NO EVENT ADDED YET";

    
?>

      

  			</div>



  			<div class="row">
        	<h3 >DAY 3</h3>

    <?php
    
    $host="localhost";
	$user="root";
	$password="";
	$db="fms";

	$conn=mysqli_connect($host,$user,$password,$db);



    $folderis="image_uploads/*.*";
    
    $files=glob($folderis);
    
     
      # code...
      

      


      $sql2="select * from event where day='day3'";

      $result2=mysqli_query($conn,$sql2);


  	if(mysqli_num_rows($result2)>0)
  	{  
  		while($row2=mysqli_fetch_assoc($result2))  
  		{
    		for ($i=0; $i<count($files) ; $i++) 
    		{ 
      			# code...
      			$num=$files[$i];
      			$num1=str_replace("image_uploads/", "", "$num");
      			if($row2['image']==$num)
      			{
      				list($width, $height)=getimagesize($num);
      			
      				echo"<img src='".$num."' title='' alt='Avatar' class='image'><br><br>";
      				$sql="SELECT * from event where day='day3' and image='".$num."'";
									$query_run3=mysqli_query($conn,$sql);
									while($row15=mysqli_fetch_assoc($query_run3))
									{ echo "Name:         ".$row15['name']."<br>";
										echo "Description:         ".$row15['description']."<br>";
										echo "Time:         ".$row15['time_1']."<br><br>";
								    }
					#echo "</div>";
      			}
      		}
    	}

  	}
  	else
  		echo "NO EVENT ADDED YET";

    
?>

      

  			</div>







        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

    <div style="background-color: white;">
      
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold" style="color:white">About Website</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 30%;">
          <p style="color: white">This website has been created for internal management of symphony.</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold" style="color: white">About Us</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 30%;">
          <p style="color: white">
            Website created by:<br>
            Rohan Solsi<br>
            Sneh Chitalia<br>
            Neelay Gosar
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold" style="color: white">Help</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 30%;">
          <p style="color: white">
            Click on student login modal for new registrations or to view your information.<br>
            Mail updates will be provided for auditions and further schedule.
            For deletion of records due to unavailability, contact admin.
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold" style="color: white">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 30%;">
 
          <p style="color: white">
            <i class="fa fa-envelope mr-3"></i>Admin:abcd@gmail.com</p>
          <p style="color: white">
            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
          <p style="color: white">
            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


</body>
</html>

