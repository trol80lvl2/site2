<?php
  include('connect.php');
?>

<nav class="navbar navbar-expand-md">
<a class="navbar-brand" href="index.php"><img src="logo.svg"></a>
    <div class="navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Головна</a>
                </li>
              <?php
              $res = mysql_query("SELECT * FROM `categories`") or die(mysql_error());
              while($row = mysql_fetch_array($res))
              echo('
              <li class="nav-item">
                <a class="nav-link" href="menu.example.php?idcat='.$row['category_id'].'">'.$row['category_name'].'</a>
              </li>
              ');
              ?>

            </ul>
            
          </div> 
         <?php 
            include 'up_panel.php';
         ?>
            
        </nav>