<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAVBAR</title>
    <link rel="stylesheet" href="../CSS/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .login{
            visibility: hidden;
        }
    </style>
    </head>
<body>
    <?php
    session_start(); 
    
    echo '<div class="navbar">
    
    <div class="navbar-container">
        <div class="logo"><div class="logo-tit" style="color: green;">CINEPLAX</div></div>
        <div class="menu">
            <ul class="list">
                <li class="list-item" style=" margin-left: 9px;
                font-weight:bold;">HOME</li>
                <li class="list-item"><a href="/project/PAGES/rev.php">REVIEW</a></li>' ;
                if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) {
                    echo'<li class="list-item"><a href="/project/COMPONENT/_handlelogout.php">LOG OUT</a></li>
                    <li class="list-item login"><a href="/project/PAGES/login.php">LOG-IN</a></li>
                </ul>
            </div>
            <div class="profile">
              <div class="user-name">
                  <img src="https://cdn.imgbin.com/6/25/24/imgbin-user-profile-computer-icons-user-interface-mystique-aBhn3R8cmqmP4ECky4DA3V88y.jpg" alt="">
                  <h6 >'.$_SESSION['username'].'</h6>
              </div>';
                }else{
                echo'<li class="list-item"><a href="/project/PAGES/registration.php">REGISTRATION</a></li>
                <li class="list-item"><a href="/project/PAGES/login.php">LOG-IN</a></li>
            </ul>
        </div>
        <div class="profile">
          <div class="user-name">
              <img src="https://cdn.imgbin.com/6/25/24/imgbin-user-profile-computer-icons-user-interface-mystique-aBhn3R8cmqmP4ECky4DA3V88y.jpg" alt="">
              <h6 >USERNAME</h6>
          </div>';
                }
         echo '<div class="toggle">
              <i class="fa-solid fa-moon toggle-icon" ></i>
              <i class="fa-regular fa-sun toggle-icon"></i>
              <div class="toggle-ball"></div>
              </div>
              <i class="fa-solid fa-arrow-up-left-from-circle sidebar-icon"></i>
        </div>
    </div>
  </div>';
    ?>
    
    
    
    
    <script src="./movie.js"></script>
</body>
</html>