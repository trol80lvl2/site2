<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Реєстрація</title>
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
      
        <div class="container">
            <form class="form-signin" method="POST">
                <input type="text" name="l_name" class="form-control" placeholder="Прізвище" required>
                <input type="text" name="f_name" class="form-control" placeholder="Ім'я" required>
                <input type="text" name="fth_name" class="form-control" placeholder="По-батькові" required>
                <input type="email" name="email" class="form-control" placeholder="Електронна пошта" required>
                <input type="text" name="phone" class="form-control" placeholder="Номер мобільного телефону" required>
                <input type="text" name="username" class="form-control" placeholder="Логін" required>
                <input type="password" name="password" class="form-control" placeholder="Пароль" required>
                <div class="form-group">
                  <label for="sel1">Оберіть приорітетну спеціальність:</label>
                  <select class="form-control" id="sel1" name="spec">
                    <option>Фізична культура і спорт</option>
                    <option>Економіка</option>
                    <option>Облік і оподаткування</option>
                    <option>Право</option>
                    <option>Інженерія програмного забезпечення</option>
                    <option>Галузеве машинобудування</option>
                    <option>Металургія</option>
                  </select>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit2">Зареєструватися</button>
                
            </form>
        </div>
        <?php
    date_default_timezone_set('Europe/Kiev');
//require('index.php');
if (isset($_POST['submit2'])){
$pib=$_POST['l_name'].' '.$_POST['f_name'].' '.$_POST['fth_name']."\r\n";
$email=$_POST['email']."\r\n";
$phone=$_POST['phone']."\r\n";
$login=$_POST['username']."\r\n";
$password=$_POST['password']."\r\n";
$spec=$_POST['spec']."\r\n";;
$script_tz = date('l jS \of F Y h:i:s A');;
$fp = fopen("all_info.txt", "a+");
$save = fwrite($fp,$login);
$save = fwrite($fp,$password);
$save = fwrite($fp,$pib);
$save = fwrite($fp,$email);
$save = fwrite($fp,$phone);
$save = fwrite($fp,$spec);
$save = fwrite($fp,$script_tz);
$save = fwrite($fp,"------------------------------------"."\r\n");
 if ($save) 
{echo "<script>alert(\"Ви успішно зареєструвались\");</script>";
  header("Refresh:0");
}
else echo "<script>alert(\"Помилка реєстрації\");</script>";
    fclose($fp); //�������� �����
}
?>
</body>
</html>