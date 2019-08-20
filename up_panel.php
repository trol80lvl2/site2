<?php 
include('connect.php');
header("Content-Type: text/html; charset=utf-8");
          if (isset($_SESSION['username'])){
           $name=$_SESSION['username'];
            echo('<form class="form-inline form" method="POST">
           <button type="submit" name ="submit1" class="btn btn-primary mb-2 class2">Вийти</button>
           </form>'
         );
           if(isset($_POST['submit1'])){
            include 'logout.php';
           }
         }
         else{
           echo('<form class="form-inline form" method="POST">
           <div class="form-group mx-sm-1 mb-2 dib">
              <input type="text" name="username" class="class" placeholder="Логін" required>
              <input type="password" name="password" class="class" id="inputPassword2" placeholder="Пароль" required>
           </div>
           <button type="submit" name ="submit" class="btn btn-primary mb-2 class1" ">Увійти</button>
           <a href="registration.php" class="btn btn-link mb-2 link" >Реєстрація</a>
          </form>');
       

          
            }
         ?>