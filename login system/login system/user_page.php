<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <!--<a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>-->
      <a href="logout.php" class="btn">logout</a>
      <br>
      <br>
      <br>
      <h2>Assigned Software for You</h2>
      <br>
<button onclick="openFullscreen();"><img src="https://codersera.com/blog/wp-content/uploads/2019/08/visual-studio-code-codersera.jpg"> </button>
<!--<button onclick="closeFullscreen();">Close Fullscreen</button>-->

<script>
var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}

document.addEventListener('visibilitychange',function()){
   document.title = document.visibilitychange;
   console.log(document.visibilitychange)
};
</script>
<br>
<br>
<i>Note: If You click software it will enter into fullscreen you can't navigate.</i>

   </div>

</div>

</body>
</html>