<!DOCTYPE html>
<html lang="en">
<head>

  <!--MetaData for the page-->
  <meta charset="UTF-8">
  <meta name="Description" content="Simple Layout">
  <!--Title-->
  <title>login</title>
  <!--Css styles for layout-->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--JavaScript for responsive-->
  <script type="bootstrap.min.js"></script>
  <script type="html5shiv.min.js"></script>

</head>
  <!--Body Background-->
<body background="images/un.jpg">
  <div class="wrapper">
  <form class="login" action="tasks.php" method="post" name="myForm">
    <p class="title">Log in</p>
    <input type="text" placeholder="Your ID" name="stdId" required />
    <i class="fa fa-user"></i>
    <input type="Password" placeholder="Your Password" name="stdPass" required/>
    <i class="fa fa-key"></i>
    <a href="register.php" id="logpage">Register</a>
    <button>
      <i class="spinner"></i>
      <span class="state" onclick="validate.js">Submit</span>
    </button>
  </form>
  <footer><a target="self" href="#">Zero Day Team</a></footer>
  </p>
</div>
    <script  src="js/actions.js"></script>

</body>
</html>
