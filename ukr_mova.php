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
                <a class="menu_name" href="#">Назва блюдца</a>
                <div class="menu_vib"> 
                    <img class="card-img-top" src="bg.jpg">
                    <table>
                        <tr>
                            <td>ЗАЗ</td>
                         </tr>
                         <tr>
                             <td>2л</td>
                         <tr>
                             <td>30 к.с.</td>
                         </tr>
                        <tr>
                          <td>330 л/км</td>
                         </tr>
                         <tr>
                              <td>Себек</td>
                         </tr>
                    </table>
                </div>
                <div class="card-body">
                 Коротенький описець.
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
        
        

</body>
</html>