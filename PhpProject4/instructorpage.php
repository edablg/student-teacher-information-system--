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
    </style>
    <ul>


  <li><a href="instructorcourses.php">My Courses</a></li>
  <li><a href="iweekly.php">My Weekly Schedule</a></li>
  <li><a href="iprojects.php">Projects I Manage</a></li>
  <li><a href="iprojectsw.php">Projects I Work</a></li>
  <li><a href="iadvising.php">Students I Advise</a></li>
  <li><a href="isupervising.php">Students I Supervise</a></li>
  <li><a href="ifreehours.php">Free Hours</a></li>
  <li><a href="idisplayexams.php">My Course' Exams</a></li> 
  <li><a href="iaddexam.php.php">Add Exam</a></li> 
  

</ul>

<?php
 session_start();
 $_SESSION['currentid'];
?>

