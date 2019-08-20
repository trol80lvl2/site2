<?php
session_start();
ob_start(); 
header("Content-Type: text/html; charset=utf-8");
include('connect.php');
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
<form class="form1" form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
                  <label for="sel1">Оберіть категорію, в яку додати страву:</label>
                  <select class="form-control" id="sel1" name="categ">
                    <option value="" disabled required selected style="display: none;">Виберіть категорію</option>
                  <?php 
					          $res = mysql_query("SELECT * FROM `categories`") or die(mysql_error());
					          while($row = mysql_fetch_array($res))
						          echo("<option value=\"".$row['category_id']."\">".$row['category_name']."</option>");
                  ?>

                  </select>
                </div>
                <input type="text" name="l_name" class="form-control" placeholder="Назва страви" required>
                <input type="text" name="ingrad" class="form-control" placeholder="Інгредієнти" required>
                <div class="form-group">
                 <label for="comment">Спосіб приготування:</label>
                    <textarea name="howtodo" class="form-control" rows="5" id="comment"></textarea>
                </div>
                <div class="form-group">
                 <label for="comment">Короткий опис:</label>
                    <textarea name="dishabout" class="form-control" rows="5" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label for="dish_img">Фото страви</label>
                    <input type="file" class="form-control-file" name="dish_image" required id="dish_img">
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="send-rec">Додати</button>
                
            </form>
</body>

<?php
  if(isset($_POST['send-rec'])) {
    if(isset($_FILES['dish_image'])) {
    
    $dishname = mysql_escape_string($_POST['l_name']);
    $ingrad = mysql_escape_string($_POST['ingrad']);
    $howtodo = mysql_escape_string($_POST['howtodo']);
    $dishabout = mysql_escape_string($_POST['dishabout']);
    $dishcat = mysql_escape_string($_POST['categ']);

    $dishimg = file_get_contents($_FILES['dish_image']['tmp_name']);
    $dishimg = mysql_real_escape_string($dishimg);

    mysql_query("INSERT INTO `dish` (dish_name, dish_ingradies, dish_about, dish_howtodo, dish_img, category_id) VALUES ('$dishname','$ingrad','$dishabout','$howtodo','$dishimg','$dishcat')") or die(mysql_error());
    echo("<script>alert(\"Страву додано!\");</script>");
    header("Refresh: 0");
    }
  }
?>