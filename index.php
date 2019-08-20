<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Головна</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 
</head>
<body>
<?php include 'menu.php'?>
      
        
        <div class="row">
  <div class="col-sm-2">
            </div>
  <div class="col-sm-8">
  <div class="main">
  <img class="main1" src="1.jpg">
  <div class="welcome"><h2>Вітаємо на кулінарному сайті</h2><h6>Тут ви знайдете найкращі рецепти</h6>
  <?php
  $_SESSION['username'] = 'admin';
if(isset($_SESSION['username'])&&$_SESSION['username']=='admin'){
  echo('<a href="admin.php" class="btn btn-primary mb-2 class2">Додати рецепт</a>');
}
?></div></div>

    
  </div>
  <div class="col-sm-2"></div>
</div>

</body>
</html>