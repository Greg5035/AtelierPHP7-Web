<div id="bannermenu">
    <?php
          session_start();
          if ($_SESSION != null) {
          echo $_SESSION["utilConnecte"];
          }
    ?>
    <a href="./front_controleur.php?action=liste_films" >Films</a>
    <a href="./front_controleur.php?action=liste_series" >Séries</a>
     <?php
  
     if ($_SESSION != null) {
        if ($_SESSION["utilConnecte"] =="admin") {
     ?>
            <a href="./front_controleur.php?action=logout" >Logout</a>
     <?php
        } else {
     ?>
            <a href="./front_controleur.php?action=login" >Login</a>
      <?php
        }
     }else {
         ?>
              <a href="./front_controleur.php?action=login" >Login</a>
          <?php
         
     }
     
      ?>
        
    
</div>