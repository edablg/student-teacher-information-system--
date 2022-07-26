
<?php   
session_start();
    include('dbconnect.php');  
    $ssn = $_POST['ssn'];  
    $password = $_POST['pass'];  
   
        $sql = "select * from userr where ssn = '$ssn' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            echo "<h1><center> Login Successful </center></h1>";  
            $_SESSION['currentid'] = $row['ssn'];
           if($row["role"] == "instructor"){
               $issn=$ssn;        
               header('location: ' . "./instructorpage.php?issn=$issn");
           }else if ($row["role"] == "student"){
               header('location: ' . "./studentpage.php");
           }
       }
       else{  
            echo "<h1> Login failed , invalid username or password.</h1>";  
        }   
        
?>