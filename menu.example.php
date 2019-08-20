<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Українська мова</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 
</head>
<body>
<?php include 'menu.php'?>
<div class="card mb-4 shadow-sm">
  <?php
  $res = mysql_query("SELECT * FROM `dish` WHERE category_id=".$_GET['idcat']) or die(mysql_error());
  while($row = mysql_fetch_array($res)) {
  echo('
                <a class="menu_name" href="strava.example.php?iddish='.$row['dish_id'].'"><h2>'.$row['dish_name'].'</h2></a>
                <div class="menu_vib"> 
                    <img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($row['dish_img']).'">
                    <table class="table1">');
        $ingrads = explode(",", $row['dish_ingradies']);
        for($i = 0; $i < count($ingrads); $i++) 
          echo('<tr><td>'.$ingrads[$i].'</td></tr>');

        echo('  </table>
                </div>
                <div class="card-body">
                 '.$row['dish_about'].'
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
    ');
  }
  ?>       
        

</body>
</html>