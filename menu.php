<link rel="stylesheet" href="css/index_sheet.css">
<link rel="stylesheet" href="css/menu.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">

<!-- Menu de navigation -->

<?php session_start(); ?>

<nav>
          <ul>
           
                <li class="Accueil"><a class="index" href="index.php" >Accueil</a></li>
                <li class="menu-matieres"><a href=>Matières</a>
                <ul class="submenu">
                        <li><a href="/projets/SI6">SI6</a></li>
                        <li><a href="/projets/SLAM2">SLAM 2</a></li>
                        <li><a href="/projets/m2l_proj">M2L</a></li>
                        <li><a href="/projets/Divers">Divers</a></li>
                        
                </ul>
            </li>
            <li class='menu-phpmyadmin'><a href='../../phpmyadmin'>PhpMyAdmin</a></li>
            
            <?php
              if (!isset($_SESSION['pseudo'])){
              echo "<li class='menu-register'><a href='register.php'>Inscription</a></li>";
              echo "<li class='menu-login'><a href='login.php'>Connexion</a></li>";}
              else {echo "<li class='menu-logout'><a href='logout.php'>".$_SESSION['pseudo']." : Déconnexion</a></li>";}
              ?>
              
              
          </ul>
      </nav>
      

<!-- Menu de navigation FIN -->