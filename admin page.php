<?php
  
  session_start();

  if ($_SESSION['user_name']) {
    # code...





  }
  else
  {
    header("location:loginpage.php");
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

@media only screen and (max-width: 600px)
{



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
.jumbotron {
  margin-top: 50px;
  margin-left: 75px;
  background-color: rgba(255,255,255,0.5);
  font-weight: bold;
  overflow-y: scroll;
  width: 90%;

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

* {
    box-sizing: border-box;
}

.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
#dance  {
  background-color: transparent;
  border: transparent;

}
#dance:hover{
  background-color: grey;

}
#music  {
  background-color: transparent;
  border: transparent;

}
#music:hover{
  background-color: grey;

}
#hosting  {
  background-color: transparent;
  border: transparent;

}
#hosting:hover{
  background-color: grey;

}
#security  {
  background-color: transparent;
  border: transparent;

}
#security:hover{
  background-color: grey;

}
#navbar_1{
  background-color: transparent;
}
#logout{
  background-color: transparent;
  border:transparent;
}
#logout:hover{
  background-color: grey;
}
#accordionExample{
  background-color: transparent;
  border:transparent;
}
#container{
  background-color: transparent;
  border:transparent;
}
#card:hover{
  background-color: grey;
}

</style>


  <title></title>
</head>
<body>
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection,'FMS'); // Selecting Database from Server
?>
<nav class="navbar navbar-expand-sm fixed top" id="navbar_1">

  
     <form action=" admin page_1.php" method="post">
     <button class="btn btn-success" type="submit" id="dance" name="button_1" >Dance</button>
     </form>
     <form action=" admin page_2.php" method="post">
     <button class="btn btn-success" type="submit" id="music" name="button_2">Music</button>
     </form>
     <form action=" admin page_3.php" method="post">
     <button class="btn btn-success" type="submit" id="hosting" name="button_3">Hosting</button>
     </form>
     <form action=" admin page_4.php" method="post">
     <button class="btn btn-success" type="submit" id="security" name="button_4">Security</button>
     </form>
     <form action=" admin page_5.php" method="post">
     <button class="btn btn-success" type="submit" id="security" name="button_5">Add Events</button>
     </form>
        <div class="navbar-collapse collapse  order-6 dual-collapse2">
            <ul class="navbar-nav ml-auto">
               <form action="" method="post">           
                  <a href="logout.php" class="btn btn-success" role="button" id="logout">Logout</a>            
               </form>            
            </ul>
        </div>   

</nav>
<div class="container" id="container">
<div class="jumbotron" style="background-color: transparent;">
<div class="accordion" id="accordionExample" >
    <div class="card" id="card" >
        <div class="card-header" id="headingOne">
   			<H3 align='center' >AUDITION DATES</H3>
        	<div class="row">
        		<div class="column">
        			<div class="container2">
                  		<img src="Computers.jpg" alt="Avatar" class="image">
                    	<div class="overlay">
              				<div class="text">
              					<?php
              						$sql="SELECT * from student_head where branch='Computers'";
									$query_run3=mysqli_query($connection,$sql);
									echo "<br>";
                  echo "<br>";
                  echo "<br>";
									echo "      Computers"."<br>";
									while($row15=mysqli_fetch_assoc($query_run3)){
									echo "      ".$row15['event'].":".$row15['audition_date']."<br>";
								    }
              					?>
              				</div>
              			</div>
              		</div>
              	</div>
        		<div class="column">
        			<div class="container2">
                  		<img src="IT.jpg" alt="Avatar" class="image">
                    	<div class="overlay">
              				<div class="text">
              					<?php
              						$sql="SELECT * from student_head where branch='IT'";
									$query_run3=mysqli_query($connection,$sql);
									echo "<br>";
                  echo "<br>";
                  echo "<br>";
									echo "      IT"."<br>";
									while($row15=mysqli_fetch_assoc($query_run3)){
									echo "      ".$row15['event'].":".$row15['audition_date']."<br>";
								    }
              					?>
              				</div>
              			</div>
              		</div>
              	</div>
              	<div class="column">
        			<div class="container2">
                  		<img src="Mechanical.jpg" alt="Avatar" class="image">
                    	<div class="overlay">
              				<div class="text">
              					<?php
              						$sql="SELECT * from student_head where branch='Mechanical'";
									$query_run3=mysqli_query($connection,$sql);
									echo "<br>";
                  echo "<br>";
                  echo "<br>";
									echo "      Mechanical"."<br>";
									while($row15=mysqli_fetch_assoc($query_run3)){
									echo "      ".$row15['event'].":".$row15['audition_date']."<br>";
								    }
              					?>
              				</div>
              			</div>
              		</div>
              	</div>
        	
        	</div>
        	  	<div class="row">
        		<div class="column">
        			<div class="container2">
                  		<img src="Electronics.jpg" alt="Avatar" class="image">
                    	<div class="overlay">
              				<div class="text">
              					<?php
              						$sql="SELECT * from student_head where branch='Electronics'";
									$query_run3=mysqli_query($connection,$sql);
									echo "<br>";
                  echo "<br>";
                  echo "<br>";
									echo "      Electronics"."<br>";
									while($row15=mysqli_fetch_assoc($query_run3)){
									echo "      ".$row15['event'].":".$row15['audition_date']."<br>";
								    }
              					?>
              				</div>
              			</div>
              		</div>
              	</div>
        		<div class="column">
        			<div class="container2">
                  		<img src="Extc.jpg" alt="Avatar" class="image">
                    	<div class="overlay">
              				<div class="text">
              					<?php
              						$sql="SELECT * from student_head where branch='EXTC'";
									$query_run3=mysqli_query($connection,$sql);
									echo "<br>";
                  echo "<br>";
                  echo "<br>";
									echo "      EXTC"."<br>";
									while($row15=mysqli_fetch_assoc($query_run3)){
									echo "      ".$row15['event'].":".$row15['audition_date']."<br>";
								    }
              					?>
              				</div>
              			</div>
              		</div>
              	</div>                   	
        	</div>
		</div>
	</div>	
</div>
</div>
</div>
</body>
</html>