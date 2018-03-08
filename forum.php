<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" /> 
    <link rel="stylesheet" href="style.css" type="text/css" />    
  </head>
   <body>
	  <div class="div_principale">
      <h1>Arkanoid</h1>
       
       <?php
         date_default_timezone_set('Europe/Paris');
         echo date('H:i:s');
       
       ?>
       <ul class="menu">
         <li><a href="index.php" class="menu_lien"><div class="triangleD_menu">&#x2662 </div> <div class="triangleB_menu">&#9660  </div>Accueil</a></li>
         <li><div class="triangleD_menu">&#x2662 </div> <div class="triangleB_menu">&#9660  </div>Le Jeu
           <ul>
             <li><a href="jouer.php" class="menu_lien">Jouer</a></li>
             <li><a href="regles.php" class="menu_lien">Règles</a></li>
             <li><a href="meilleurs_scores.php" class="menu_lien">Meilleurs scores</a></li>
           </ul>
         </li>
         <li><div class="triangleD_menu">&#x2662 </div> <div class="triangleB_menu">&#9660  </div>Autour du jeu
           <ul>
             <li><a href="tutoriel_astuces.php" class="menu_lien">Tutoriel et Astuces</a></li>
             <li><a href="forum.php" class="menu_lien">Forum</a></li>
           </ul>
         </li>
         <li><div class="triangleD_menu">&#x2662 </div> <div class="triangleB_menu">&#9660  </div>Source
           <ul>
             <li><a href="code_source.php" class="menu_lien">Code source</a></li>
             <li><a href="credit.php" class="menu_lien">Crédit</a></li>
           </ul>
         </li>
       </ul>
       
      <h2>Tchat</h2>
      
      <div class="division_centrale">
		<h3>Tchat</h3>
		<div class="division_secondaire">
			<div class="boite_tchat">
       <?php
          $chaine = fopen('Tchat/tchat.txt', 'r+');
         while (!feof ($chaine)) {
			 $ligne = fgets($chaine);
			 echo "<div classe='message_tchat'>$ligne</div>";
		 }
         fclose($chaine); 
       ?>
       </div>
       <form action="trait_forum.php" method="POST">
		  <div class="envoi_message">
         Pseudo : <input  id="barre_pseudo" type="text" name="pseudo">
         Message : <input id="barre_message" type="text" name="message">
         <input class="boutton" type="submit" name="valider" value="Envoyer">
         </div>
       </form>
       </div>
      </div>
      
      <h2>.</h2>
      </div>
       
   </body>
</html>
   
   
   
