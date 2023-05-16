<?php
include('../COMPONENT/_dbconnect.php');
$method=$_SERVER['REQUEST_METHOD'];
$showalrt=false;
session_start();
$user_id=$_SESSION['sno'];
if ($method=='POST') {
    
    $com=$_POST['comment'];
   $sql="INSERT INTO `commentes` ( `comment`, `commenttime`, `commentby`) VALUES ('$com', current_timestamp(), '$user_id')";
   $resultofinsert=mysqli_query($connect,$sql); 
   if (!$resultofinsert) {
        
       echo "<script>
       alert('some error exites in server please try again later!');
       location.replace('review.php');
   </script>";
   }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>REVIEW</title>
    <style>
    .comment {
        border: 1px solid black;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <?php
         if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) {
           echo'<div class="container">
           <h1>POST REVIEW</h1>
           <form action="rev.php" method="post">
               <div class="mb-3">
                   
                   <textarea class="form-control" placeholder="Leave a comment here" id="inputcom" name="comment"
                   style="height: 100px"></textarea>
                 </div>
                 <button type="submit" class="btn btn-success my-4">POST COMMENT</button>
             </form>
         </div>';
         }
         else{
          header("Location:login.php");
         }
    ?>

    <div class="container">
        <h1>REVIEWES</h1>
        <?php
        $sql="SELECT * FROM `commentes`";
        $result=mysqli_query($connect,$sql);
        while ($com=mysqli_fetch_assoc($result)) {
            $userid=$com['commentby'];
            $sql2="SELECT * FROM `registration` WHERE id_no='$userid'"; 
            $result2=mysqli_query($connect,$sql2);
            $row=mysqli_num_rows($result2);
            
            if ($row==1) {
                $row=mysqli_fetch_assoc($result2);
                $username=$row['username'];
                $mobile_no=$row['mobile_no'];
                $email=$row['email'];
            }
          echo '<div class="media d-flex my-4 comment">
          <div class="media-body">
              <p class="my-0">post by <b>'.$row['username'].'</b></p>
              '.$com['comment'].'
          </div>

      </div>';
        }
        ?>
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>