<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SEAT_BOOKING</title>
    <style>
    .seates {
        display: flex;
        justify-content: center;
        margin-top: 10px;

    }

    .btn-group {
        display: flex;
        justify-content: center;
    }

    .btn {
        width: 70px;
        height: 40px;
    }
    </style>
</head>

<body>
    <?php
    include "../COMPONENT/_dbconnect.php";
    ?>
    <div class="container">
        <?php
        
         $movie=$_GET['movie_name'];
         echo'<h1 class="text-center m-3">'.$movie.'</h1>';

         
 
         echo'<form action="/project/PAGES/seat_booking.php?movie_name='.$movie.'" method="post">
         Item: 
         <select id="item" name="time" onchange="update();">
             <option value="10AM">10AM</option>
             <option value="4PM">4PM</option>
             <option value="8PM">8PM</option>
         </select><br>
         <button type="submit" class="btn btn-success">FIND</button>
     </form>';
    
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    session_start();
    $slott=$_POST['time'];
    $_SESSION['tst']=$slott;
    
    $sql2="SELECT * FROM `movies` WHERE movie_name='$movie'";
         $result2=mysqli_query($connect,$sql2);
         $row2=mysqli_fetch_assoc($result2);
    if(mysqli_num_rows($result2)==1){
        $id=$row2['movie_id'];
        $_SESSION['mid']=$id;
        $sql="SELECT * FROM `booked_seat` WHERE movie_id='$id' && slott='$slott'";
        $result=mysqli_query($connect,$sql);
        $book_seat=mysqli_num_rows($result);

        echo "<h6>TOTAL SEAT-48</h6>";
        echo "<h6>REMAIN SEAT-".(48-$book_seat)."</h6>";

        echo'
        <div class="container">
        <div class="seates">';
        for ($i=1; $i<12 ; $i++) { 
            $sql2="SELECT * FROM `booked_seat` WHERE (movie_id='$id' && seat_number='$i' && slott='$slott')";
            $result2=mysqli_query($connect,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            if(mysqli_num_rows($result2)==1){
                echo '<input type="checkbox" class="btn-check mr-3" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary disabled" for="btncheck1" style="
                margin-right: 30px; ">A-'.$i.'</label>';
            }
            else{
                echo '<input type="checkbox" class="btn-check mr-3" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck1" style="
                margin-right: 30px; ">A-'.$i.'</label>';
            }
        }
        echo'</div>
        <div class="seates">';
        for ($i=12; $i<23 ; $i++) { 
            $sql2="SELECT * FROM `booked_seat` WHERE movie_id='$id' && seat_number='$i' && slott='$slott'";
            $result2=mysqli_query($connect,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            if(mysqli_num_rows($result2)==1){
                echo '<input type="checkbox" class="btn-check mr-3" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary disabled" for="btncheck1" style="
                margin-right: 30px; ">B-'.$i.'</label>';
            }
            else{
                echo '<input type="checkbox" class="btn-check mr-3" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck1" style="
                margin-right: 30px; ">B-'.$i.'</label>';
            }
        }
        echo'</div>
        <div class="seates">';
        for ($i=23; $i<34 ; $i++) { 
            $sql2="SELECT * FROM `booked_seat` WHERE movie_id='$id' && seat_number='$i' && slott='$slott'";
            $result2=mysqli_query($connect,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            if(mysqli_num_rows($result2)==1){
                echo '<input type="checkbox" class="btn-check mr-3" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary disabled" for="btncheck1" style="
                margin-right: 30px; ">C-'.$i.'</label>';
            }
            else{
                echo '<input type="checkbox" class="btn-check mr-3" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck1" style="
                margin-right: 30px; ">C-'.$i.'</label>';
            }
        }
        echo'</div>
        <div class="seates">';
        for ($i=34; $i<45 ; $i++) { 
            $sql2="SELECT * FROM `booked_seat` WHERE movie_id='$id' && seat_number='$i' && slott='$slott'";
            $result2=mysqli_query($connect,$sql2);
            $row2=mysqli_fetch_assoc($result2);
            if(mysqli_num_rows($result2)==1){
                echo '<input type="checkbox" class="btn-check mr-3" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary disabled" for="btncheck1" style="
                margin-right: 30px; ">D-'.$i.'</label>';
            }
            else{
                echo '<input type="checkbox" class="btn-check mr-3" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck1" style="
                margin-right: 30px; ">D-'.$i.'</label>';
            }
        }
        
        echo'</div> 
        </div> 
        ';
    }
    echo'<div class="container" style="margin-top: 20px;">
    <form action="/project/COMPONENT/_handlebooking.php?slot='.$slott.'" method="post">
        <div class="mb-3">
            <label for="exampleInputseat1" class="form-label">ENTER SEAT-1</label>
            <input type="number" name="s1"pattern="[0-9][0-9]" title="please enter valid number" class="form-control" id="exampleInputseat1" aria-describedby="emailHelp"
                style="width:97%;">
        </div>
        <div class="mb-3">
            <label for="exampleInputseat2" class="form-label">ENTER SEAT-2</label>
            <input type="number" name="s2" pattern="[0-9][0-9]" title="please enter valid number" class="form-control" id="exampleInputseat2" style="width:97%;">
        </div>
        <div class="mb-3">
            <label for="exampleInputseat3" class="form-label">ENTER SEAT-3</label>
            <input type="number" name="s3" pattern="[0-9][0-9]" title="please enter valid number" class="form-control" id="exampleInputseat3" style="width:97%;">
        </div>
        <div id="emailHelp" class="form-text mb-3">Not Require Fill All Three Seat And Maximum Three Seat Book At One
            Time</div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> ';
    }


    ?>





    </div>



</body>

</html>