<!DOCTYPE html>
<html>


    <head>
    <title>

    </title>
</head>

<body>
        <style>
        ul {
    list-style-type: none;

    margin: 0;

    padding: 0;

    overflow: hidden;

    background-color: #002C91;
  
}

li {
    float: left;
}

li a {
    display: block;

    color: white;

    text-align: center;

    padding: 14px 16px;

    text-decoration: none;
}

li a:hover:not(.active) {

    background-color: #111;
}

.active {

   
    background-color: #ACEDED
}
#deneme {
              text-align: center;
              margin-top: 200px;
              margin-bottom: 100px;
              margin-right: 200px;
              margin-left: 300px;
            
            
        }

    </style>
    <ul>

  
  <li><a class=' active'href="gradOrUgrad.php">#My Status</a></li>
  <li><a href="scourses.php">My Courses</a></li>
  <li><a href="stranskript.php">The Grade Report</a></li>
  <li><a href="sweekly.php">My Weekly Schedule</a></li>
  <li><a href="sadvisor.php">My Advisor</a></li>
  <li><a href="scurricula.php">Curricula</a></li>
  <li><a href="sdepartment.php">My Department</a></li>
  <li><a href="ssupervisor.php">My Supervisor</a></li>  
  

</ul>
<div id="deneme">
    <?php
include './dbconnect.php';
session_start();
 $ssn =  $_SESSION['currentid'];
 
 $query = mysqli_query($con, "select gradorUgrad from student where ssn = '$ssn'");
 $result = mysqli_fetch_object($query);
 
 
        if ($result->gradorUgrad == 1){
    echo "Your status is: GRADUATED";
} else if ($result->gradorUgrad==0){
 echo 'Your status is: UNGRADUATED';
}
  
?>
</div>

