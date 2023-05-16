<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LOGIN</title>
    <link rel="stylesheet" href="../CSS/loginpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


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
        <h1 style="margin-top: 100px; margin-bottom: 20px;">LOG-IN</h1>
        <div class="conatainer-contact">
        <form action="/project/COMPONENT/_handlelogin.php" method="post">
            <div class="div">
              <label for="username" class="label">EMAIL ID</label>
              <br>
              <input type="email" name="email" class="input" id="username" placeholder="Enter USERNAME">
            </div>
            <div class="div">
              <label for="password" class="label">PASSWORD</label>
              <br>
              <input type="password" name="pass" class="input" id="password" placeholder="Enter PASSWORD" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password should contain minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character" required>
              <!-- <div id="noteofemail" class="note">We'll never share your email with anyone else.</div> -->
              <div id="noteofemail" class="note">please enter valid password that's match with username</div>
            </div>
            <button type="submit" class="btn">LOG-IN</button>
          </form>
        </div>
        <p>CREATE ACOUNT <a href="">SIGN-UP</a>?</p>
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