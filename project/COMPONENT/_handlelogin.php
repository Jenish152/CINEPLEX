<?php
include '_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $useremail=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="SELECT * FROM `registration` WHERE email='$useremail'"; 
    $result=mysqli_query($connect,$sql);
    $row=mysqli_num_rows($result);

    if ($row==1) {
        $row=mysqli_fetch_assoc($result);
        if ($pass==$row['password']) {
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$row['username'];
            $_SESSION['sno']=$row['id_no'];
           
          

             header("Location: /project/PAGES/home.php");
        }
        else{
            echo " <script>
            alert('WRONG PASSWORD');
            location.replace('../PAGES/login.php');
        </script>";
        }
    }
    else{
        echo " <script>
            alert('USER DOES NOT EXITES');
            location.replace('../PAGES/login.php');
        </script>";
        }
    }

?>
