<?php
include('../COMPONENT/_dbconnect.php');
session_start();
$user_id=$_SESSION['sno'];
$movie_id=$_SESSION['mid'];
$slott=$_SESSION['tst'];

$sql="SELECT * FROM `registration` WHERE id_no='$user_id'"; 
    $result=mysqli_query($connect,$sql);
    $row=mysqli_num_rows($result);

    if ($row==1) {
        $row=mysqli_fetch_assoc($result);
        $username=$row['username'];
        $mobile_no=$row['mobile_no'];
        $email=$row['email'];
    }

$sql2="SELECT * FROM `movies` WHERE movie_id='$movie_id'";
        $result2=mysqli_query($connect,$sql2);
        $row2=mysqli_fetch_assoc($result2);
        
        if(mysqli_num_rows($result2)==1){
           $movie_name=$row2['movie_name'];
           $price_of_movie=$row2['prize'];
        }
$sql2="SELECT * FROM `booked_seat` WHERE movie_id='$movie_id' && `user_id`='$username' && slott='$slott'";
        $result3=mysqli_query($connect,$sql2);
        
       $seat="";
       $ts=0;
        if(mysqli_num_rows($result3)>0){
            
            while ($row2=mysqli_fetch_assoc($result3)) {
                $time_of_movie=$row2['slott'];
               $seat =$seat.$row2['seat_number'].",";
               $ts++;
            }
        }
        else{
            echo"<script>
            alert('no ticket booking by this user');
            </script>";
        }
        
$name_of_cinema='CINEPLEX';
$place='Dumas Road, Surat - 395007, Opposite Iskon Mall';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket</title>
    <style>
        .ticket {
            width: 800px;
            height: auto;
            margin: auto;
            background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaeetkG6RY5nK9b9kW6aHWLCy_h6t_chu3mA&usqp=CAU');
            background-repeat: no-repeat;
            border: 2px solid blue;
            background-size: cover;
            /* border-radius: 15px; */
            opacity: 0.80;
            outline: 20px solid pink;
            outline-style: groove;
        }

        .ticket .top {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            width: 100%;
            height: auto;
        }

        .ticket .top>div {
            height: 100px;
        }

        .ticket .top .date {
            display: inline;
            width: 100%;
            height: auto;
        }

        .ticket .name {
            width: 100%;
            height: auto;
            /* border: 1px solid green; */
        }

        .ticket .top .time {
            float: right;
            width: 100%;
            height: auto;
            /* border: 1px solid yellow; */
        }

        .ticket .detail {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            width: 100%;
            height: auto;
            /* border: 1px solid gray; */
        }

        .ticket .detail>div {
            height: auto;
        }

        .ticket .uname {
            width: 100%;
            height: auto;
        }

        .ticket .mail {
            width: 100%;
            height: auto;
            /* border: 1px solid green; */
        }

        .ticket .idno {
            width: 100%;
            height: auto;
            /* border: 1px solid green; */
        }

        .ticket .mname {
            width: 100%;
            height: auto;
            /* border: 1px solid green; */
        }

        .ticket .bookedseat {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            width: 100%;
            height: auto;
            /* border: 1px solid gray; */
        }

        .ticket .bookedseat>div {
            /* width: 100px; */
            height: auto;
            /* border: 2px dashed red; */
        }

        .ticket .book {
            width: 100%;
            height: auto;
            /* border: 1px solid green; */
        }

        .ticket .price {
            width: 100%;
            height: auto;
            /* border: 1px solid red; */
        }

        .ticket .slotp {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            width: 100%;
            height: auto;
            /* border: 1px solid gray; */
        }

        .ticket .slotp>div {
            /* width: 100px; */
            height: auto;
            /* border: 2px dashed red; */
        }

        .ticket .slotp .slot {
            width: 100%;
            height: auto;
            /* border: 1px solid red; */
        }

        .ticket .slotp .tprice {
            width: 100%;
            height: auto;
            /* border: 1px solid red; */
        }

        .ticket .place {
            width: 100%;
            height: auto;
            /* border: 1px solid yellow; */
        }

        hr {
            border-top: 2px dashed red;
        }

        input[type="button"] {
            width: 160px;
            padding: 10px;
            background-color: black;
            border-radius: 10px;
            color: white;
            font-size: large;
            font-weight: bold;
        }

        input[type="button"]:hover {
            background-image: radial-gradient(rgba(221, 223, 237), rgba(129, 148, 240));
            color: black;
            font-weight: bolder;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <br><br><br><br><br><br><br>
    <div class="ticket">
        <div class="name">
            <h1>
                <center><?php echo $name_of_cinema; ?></center>
            </h1>
        </div>
        <div class="top">
             
            <div class="time">
                <center>
                    <font color="black" face="verdana"><big><b>Time :- </b></big><?php echo $time_of_movie; ?> </font>
                </center>
            </div>
        </div>
        <br>
        <div class="detail">
            <div class="uname">
                <center>
                    <font color="black" face="verdana"><b>User Name :- </b><?php echo $username; ?></font>
                </center>
            </div>
            <div class="mail">
                <center>
                    <font color="black" face="verdana"><b>Email :- </b><?php echo $email; ?></font>
                </center>
            </div>
            
        </div>
        <hr>
        <div class="mname">
            <center>
                <font color="black" face="verdana" size="6px"><?php echo $movie_name; ?></font>
            </center>
        </div>
        <br>
        <div class="bookedseat">
            <div class="book">
                <center>
                    <font color="black" face="verdana"><big><b>Total Booked Seat :- </b></big><?php echo $ts; ?></font>
                </center>
            </div>
            <div class="price">
                <center>
                    <font color="black" face="verdana"><big><b>Price per Person :- </b></big><?php echo $price_of_movie; ?></font>
                </center>
            </div>
        </div>
        <br>
        <div class="slotp">
            <div class="tprice">
                <center>
                    <font color="black" face="verdana"><big><b>Total Payment :- </b></big><?php echo  ($ts * $price_of_movie); ?></font>
                </center>
            </div>
            <br>
            <div class="slot">
                <center>
                    <font color="black" face="verdana"><big><b>Taken Slot :- </b></big><?php echo $seat; ?></font>
                </center>
            </div>
        </div>
        <br>
        <div class="place">
            <center>
                <font color="black" face="verdana"><big><b>Place :- </b></big><?php echo $place; ?></font>
            </center>  
        </div>
        <br>
    </div>
    <br><br><br>

    <center><input type="button" value="Download Ticket" onclick="myFunctionPrint()"></center>
</body>
<script>
    function myFunctionPrint() {
        var r = confirm("Don't forgot to print this ticket !!");
        if (r == true) {
            window.print();
            window.location.href = "home.php";
        } else {
            window.location.href = "ticket.php";
        }
    }
</script>
</body>

</html>