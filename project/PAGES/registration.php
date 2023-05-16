<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>REGISTRATION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="../CSS/regpage.css">
</head>
<body>
    <div class="container">
        <div class="back">
        <a href="/project/PAGES/home.php"><i class="fa-solid fa-angle-left arrow"></i> BACK</a>
    </div>
        <div class="toggle">
            <i class="fa-solid fa-moon toggle-icon" ></i>
            <i class="fa-regular fa-sun toggle-icon"></i>
            <div class="toggle-ball"></div>
        </div>
        <h1 style="margin-top: 20px; margin-bottom: 20px;">REGISTRATION FORM</h1>
        <div class="conatainer-contact">
        <form action="/project/COMPONENT/_handlesignup.php" method="post">
            <div class="div">
              <label for="username" class="label">USERNAME</label>
              <br>
              <input type="text" name="username"  pattern="[a-z][a-z0-9]{3,9}" title="Username should be started with lowercase letters and it only contain lowercase letters and digit and should be less than 9 character. e.g. rocky09" class="input" id="username" placeholder="Enter USERNAME" require>
            </div>
            <div class="div">
                <label for="phn" class="label">Mobile No </label>
                <br>
                <input type="tel" name="phnno" class="input" id="phn" placeholder="Enter Mobile No" pattern="[6789][0-9]{9}" title="mobile number should be 10 digit only and started with 6,7,8 or 9 digit otherwise not valid" required >
            </div>
            <div class="div">
                <label for="email" class="label">Email Address</label>
                <br>
                <input type="email" name="mail" class="input" id="email" placeholder="Enter Email Id"> 
                <div id="noteofemail" class="note">We'll never share your email with anyone else.</div>
            </div>
            <!-- <div class="div">
                <label for="profile" class="label">Profile</label>
                
                <input type="file" class="input" id="profile" placeholder="Enter Email Id"> 
                
            </div> -->
            <div class="div">
                <label for="password" class="label">PASSWORD</label>
                <br>
                <input type="password" name="pass" class="input" id="password" placeholder="Enter PASSWORD" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password should contain minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character" required>
              </div>
            <div class="div">
              <label for="confirmpassword" class="label">CONFIRM PASSWORD</label>
              <br>
              <input type="password" name="cpass" class="input" id="confirmpassword" placeholder="ReEnter PASSWORD" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password should contain minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character" required>
            </div>
            <button type="submit" class="btn">SIGN-UP</button>
          </form>
        </div>
        <p>If you have already account <a href="login.php">LOG-IN</a> ?</p>
    </div>
    <script >
        const toggle=document.querySelector(".toggle");
        const container=document.querySelector(".container");
        const ball=document.querySelector(".toggle-ball");
        ball.addEventListener("click",()=>{
    container.classList.toggle("active");
    toggle.classList.toggle("active-toggle");
});

    </script>
</body>
</html>