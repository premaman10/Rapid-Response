<?php
    $loggedIn = false;
    $user = "";
    if(isset($_COOKIE["login"]))
    {
        $user = $_COOKIE["login"];
        $loggedIn = true;
    }
?>
<html lang="en">
<head>
    <title>RAPID RESPONSE</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" integrity="sha512-eYSzo+20ajZMRsjxB6L7eyqo5kuXuS2+wEbbOkpaur+sA2shQameiJiWEzCIDwJqaB0a4a6tCuEvCOBHUg3Skg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
        function LogOut()
        {
          console.log("clicked logout button")
          $.post("backend_logout.php",{},function(res)
            {
                console.log(res);
                window.location.reload();
            },"text")
        }
  </script>
</head>
<body>
<section class="header">

<a href="home.php" class="logo"><img class="logo" src="img/logo.png"></a>

<nav class="navbar">
   <a href="home.php">home</a>
   <a href="about.php">about</a>
   <a href="htmlServices.php">booking history</a>

   <div id="menu-btn" class="fas fa-bars"></div>
            <?php if(!$loggedIn)
            {
                echo '<a href="htmlLogin.php">Login</a><br>';
            }
            else
            {
                echo '<a href="javascript:void(0);">Hello '.$user.'</a>';
                echo '<a href="javascript:void(0);" id="logout" onclick="return LogOut();">Logout</a>';
            }?>

        </ul>
    </div>
    </nav>
    </div>

</section>
    
 