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
              margin-left: 600px;
            
            
        }

    </style>
    <ul>

  
  <li><a  href="gradOrUgrad.php">My Status</a></li>
  <li><a  href="scourses.php">My Courses</a></li>
  <li><a href="stranskript.php">The Grade Report</a></li>
  <li><a class=' active'href="#sweekly.php">My Weekly Schedule</a></li>
  <li><a href="sadvisor.php">My Advisor</a></li>
  <li><a href="scurricula.php">Curricula</a></li>
  <li><a href="sdepartment.php">My Department</a></li>
  <li><a href="ssupervisor.php">My Supervisor</a></li>  
  

</ul>
<div id="deneme">
    <?php
include 'dbconnect.php';
session_start();
 $ssn =  $_SESSION['currentid'];

 $result = mysqli_query($con, "select e.courseCode, e.sectionId,w.yearr, w.semester, w.dayy,w.hourr from enrollment e,weeklyschedule w where e.courseCode = w.courseCode and e.sectionId=w.sectionId and sssn = '$ssn'"); 

    
    echo "<table style='border: solid 1px black;'>";
                echo "<tr><th>Course Code</th><th>Section</th><th>Year</th><th>Semester</th><th>Day</th><th>Hour</th></tr>";
                if (mysqli_num_rows($result)>0) {
                    while ($obj = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $obj["courseCode"] . "</td><td>" . $obj["sectionId"] . "</td> <td>" . $obj["yearr"] . "</td><td>" . $obj["semester"] . "</td><td>" . $obj["dayy"] . "</td><td>" . $obj["hourr"] . "</td></tr> ";
                    }
                }
                ?>
</div>


               