<?php
include('../COMPONENT/_dbconnect.php');
session_start();
$user_id=$_SESSION['sno'];
$sql="SELECT * FROM `registration` WHERE id_no='$user_id'"; 
    $result=mysqli_query($connect,$sql);
    $row=mysqli_num_rows($result);

    if ($row==1) {
        $row=mysqli_fetch_assoc($result);
        $username=$row['username'];
        $mobile_no=$row['mobile_no'];
        $email=$row['email'];
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      /* color
 #46E097
#DAF9F6
#FBFEFF


*/
      @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,400&display=swap");

      body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: "Roboto", sans-serif;
      }

      .main-box {
        width: 300px;
        height: 400px;
        box-shadow: 2px 4px 2px 4px rgba(70, 224, 151, 0.65);
        border-radius: 10px;
        text-align: center;
        padding: 20px 0;
      }

      .big-circle {
        width: 150px;
        height: 150px;
        border: 10px solid #46e097;
        border-radius: 50%;
        margin: auto;
        position: relative;
      }
      .small-circle {
        width: 140px;
        height: 140px;
        border: 10px solid #daf9f6;
        border-radius: 50%;
        position: absolute;
        top: -5px;
        left: -5px;
        background-image: url("profile-image.jpg");
        background-position: center;
        background-size: cover;
      }

      .heading-name {
        margin: 3px 0;
      }

      .heading-work {
        color: #46e097;
        font-weight: 300;
        margin: 3px 0;
      }
      p {
        padding: 0 20px;
        margin-bottom: 25px;
      }

      .follow_btn {
        text-decoration: none;
        background: #46e097;
        color: #fff;
        padding: 10px 20px;
        border-radius: 20px;
        box-shadow: 2px 2px 1px 1px rgba(70, 224, 151, 0.65);
      }

      .follow_btn:hover {
        color: #46e097;
        background: #daf9f6;
        font-weight: 600;
      }
      .im {
        width: 127px;
        height: 144px;
        clip-path: circle(50%);
      }
    </style>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>profile card using html and css</title>
      </head>
      <body>
        <div class="main-box">
          <div class="big-circle">
            <div class="small-circle">
              <img class="im" src="../IMAGES/aa.png" alt="" />
            </div>
          </div>
          <h2 class="heading-name"><?php echo $username;?></h2>
          <!-- <h3 class="heading-work"></h3> -->
          <!-- <p class="info">Username:- :-</p> -->
          <p class="info">Phone No.:-<?php echo $mobile_no;?></p>
          <p class="info">Email:-<?php echo $email;?></p>
          <a href="#" onclick="fun()" class="follow_btn">GO BACK</a>
        </div>
        <script>
            function fun(params) {
                window.location.assign('home.php');
            }
        </script>
      </body>
    </html>