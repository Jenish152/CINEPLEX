<?php
include '_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
  
    if ($password!=$cpassword) {
        echo " <script>
            alert('please re-enter password correctly');
            location.replace('../PAGES/registration.php');
        </script>";
    } else {
        $name = $_POST['username'];
        $email = $_POST['mail'];
        $phone = $_POST['phnno'];
        $sql="SELECT * FROM `registration` WHERE email='$email'"; 
    $result=mysqli_query($connect,$sql);
    $row=mysqli_num_rows($result);
    if ($row>0) {
        echo " <script>
            alert('this user also exit');
            location.replace('../PAGES/home.php');
        </script>";
    } else {
        # code...
    
    
        $sql="INSERT INTO `registration` (`username`, `mobile_no`, `email`, `password`, `registration_time`, `profile`) VALUES ('$name', '$phone', '$email', '$password', current_timestamp(), 'default.png')";
        $result=mysqli_query($connect,$sql);
        if($result){
            header("Location: /project/PAGES/login.php");
        }
        else{
            echo " <script>
            alert('some error exites in server please try again later!');
            location.replace('../PAGES/registration.php');
        </script>";
        }
    } 
    }
}
?>