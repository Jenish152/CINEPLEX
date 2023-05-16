<?php
  session_start();
  echo"wait";
  session_destroy();
  header("Location: /project/PAGES/home.php");
  ?>