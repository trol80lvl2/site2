<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Математика</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="math_test/gen_test.js"></script>
<link rel="stylesheet" type="text/css" href="math/gen_test.css">
 
</head>
<body>
<?php include 'menu.php'?>

<?php
$res = mysql_query("SELECT * FROM `dish` WHERE dish_id=".$_GET['iddish']) or die(mysql_error());
$row = mysql_fetch_array($res);
echo('
        <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-7">
                        <h2 class="nazva">'.$row['dish_name'].'</h2>
                        <div class="img"><img class="img1" src="data:image/jpeg;base64,'.base64_encode($row['dish_img']).'"></div>
                        <div class="opis">'.$row['dish_howtodo'].'</div>
                </div>
                <div class="col-sm-3">
                <table class="table">');
                $ingrads = explode(",", $row['dish_ingradies']);
                for($i = 0; $i < count($ingrads); $i++) 
                  echo('<tr><td>'.$ingrads[$i].'</td></tr>');
        echo('
            </table></div>
            </div>
');
?>        

</body>
</html>