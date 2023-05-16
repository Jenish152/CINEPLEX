<?php
include '_dbconnect.php';
session_start();

if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) {
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $slott=$_GET['slot'];
    $_SESSION['tst']=$slott;
    $username=$_SESSION['username'];
    $mid=$_SESSION['mid'];
    
    $seat1 = $_POST['s1'];
    $seat2 = $_POST['s2'];
    $seat3 = $_POST['s3'];
    echo $slott;
    $result1 =true;
    $result2 =true;
    $result3 =true;
    $sql2="SELECT * FROM `booked_seat` WHERE movie_id='$mid' and (seat_number='$seat1' || seat_number='$seat2' || seat_number='$seat3') && slott='$slott'";
            $result2=mysqli_query($connect,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            $total_seat=0;
            if(mysqli_num_rows($result2)>0){

                header("Location: /project/PAGES/home.php");
            }
            else{
                if(($seat1 != $seat2) && ($seat1 != $seat3) && ($seat2 != $seat3)){
                    
                    if ($seat1 != 0) {
                        # code...
                        $sql1="INSERT INTO `booked_seat`(`movie_id`,`seat_number`,`user_id`,`slott`)VALUES('$mid','$seat1','$username','$slott')";
                        $result1=mysqli_query($connect,$sql1);
                        $total_seat++;
                    }
                    if ($seat2 != 0) {
                        # code...
                        $sql2="INSERT INTO `booked_seat`(`movie_id`,`seat_number`,`user_id`,`slott`)VALUES('$mid','$seat2','$username','$slott')";
                        $result2=mysqli_query($connect,$sql2);
                        $total_seat++;
                    }
                    if ($seat3 != 0) {
                        # code...
                        $sql3="INSERT INTO `booked_seat`(`movie_id`,`seat_number`,`user_id`,`slott`)VALUES('$mid','$seat3','$username','$slott')";
                        $result3=mysqli_query($connect,$sql3);
                        $total_seat++;
                    }
                    if($result1 && $result2 && $result3){
                       
                        echo"<script>
                        
                        location.replace('../PAGES/atm.php?total_seat=$total_seat'); 
                        </script>";
                    }
                    else{
                        echo"<script>
                        alert('please enter valid detail and rebook your ticket');
                        location.replace('../PAGES/home.php');
                    </script>";
                    }



                }
            }
}
}
else {
    echo"<script>
         location.replace('../PAGES/login.php');
         </script>";
}
?>
