<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <!--<a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>-->
      <a href="logout.php" class="btn">logout</a>
<br>
<br>
<br>
      <form action="#" class="stu">
      <label for="lang">Students</label>
      <select name="languages" id="lang">
        <option value="javascript">StudentId1</option>
        <option value="php">StudentId2</option>
        <option value="java">StudentId3</option>
        <option value="golang">StudentId3</option>
        <option value="python">StudentId4</option>
        <option value="c#">StudentId5</option>
        <option value="C++">StudentId6</option>
        <option value="erlang">StudentId7</option>
      </select>

      <label for="lang">Software</label>
      <select name="languages" id="lang">
        <option value="javascript">R studio</option>
        <option value="php">VS code</option>
        <option value="java">Android studio</option>
        <option value="golang">Turbo C/C++</option>
        <option value="python">ArgoUML</option>
        <option value="c#">NetBeans</option>
        <option value="C++">Prolog console</option>
        <option value="erlang">Notepad</option>
      </select>
      <input type="submit" class="sub" value="Submit" />
</form>
   </div>

</div>

</body>
</html>