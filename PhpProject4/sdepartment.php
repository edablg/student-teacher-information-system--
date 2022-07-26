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

    background-color: #002C91
  
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

  
  <li><a href="gradOrUgrad.php">My Status</a></li>
  <li><a href="scourses.php">My Courses</a></li>
  <li><a href="stranskript.php">The Grade Report</a></li>
  <li><a href="sweekly.php">My Weekly Schedule</a></li>
  <li><a href="sadvisor.php">My Advisor</a></li>
  <li><a href="scurricula.php">Curricula</a></li>
  <li><a class=' active'href="#sdepartment.php">My Department</a></li>
  <li><a href="ssupervisor.php">My Supervisor</a></li>  
  

</ul>
<div id="deneme">
    <?php
include './dbconnect.php';
session_start();
 $ssn =  $_SESSION['currentid'];

 $result = mysqli_query($con, " select dName from curricula c, student s where s.currCode=c.currCode and ssn='$ssn' "); 

    while ($obj = mysqli_fetch_object($result)) {
        echo ( $obj->dName);
        
    }
    ?>
</div>


