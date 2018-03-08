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
       
      <h2>Règles</h2>
      
      <div class="division_centrale">
       <p>
         Le jeu consiste à contrôler une barre de droite à gauche, positionnée au bas de l'écran afin de faire rebondir une balle sur les rebords pour détruire des blocs à l'autre extrémité, et ainsi gagner des points. Le joueur perd une vie lorsqu'il laisse passer la balle au bas de l'écran. On passe au niveau suivant lorsque tous les blocs sont détruits à l'écran (excepté les blocs indestructibles).</br></br>
         Il existe plusieurs types de briques. En cassant les briques, on peut obtenir des bonus ou des malus.</br></br>
         
       </p>
       <h3>Les briques</h3>
       <div class="division_secondaire">
         <p class="p_secondaire">
             <img class="icone" src="Images/Briques/brique_basique1.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique2.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique3.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique4.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique5.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique6.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique7.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique8.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique9.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique10.jpg" alt="Brique basique">Les blocks basiques </br></br>
             <img class="icone" src="Images/Briques/roche_casse1.jpg" alt="Block rocheux"><img class="icone" src="Images/Briques/roche_casse2.jpg" alt="Bloc rocheux"><img class="icone" src="Images/Briques/roche_casse3.jpg" alt="Bloc rocheux"><img class="icone" src="Images/Briques/roche_casse4.jpg" alt="Bloc rocheux">Les Blocks rocheux</br></br>
             <img class="icone" src="Images/Briques/brique_dure1.jpg" alt="Block dure"><img class="icone" src="Images/Briques/brique_dure2.jpg" alt="Block dure"><img class="icone" src="Images/Briques/brique_dure3.jpg" alt="Block dure"><img class="icone" src="Images/Briques/brique_dure4.jpg" alt="Block dure">Les Blocks durs</br></br>
             <img class="icone" src="Images/Briques/brique_bombe1.jpg" alt="Block explosif"><img class="icone" src="Images/Briques/brique_bombe2.jpg" alt="Block explosif">Les Blocks explosifs</br></br>
             <img class="icone" src="Images/Briques/indestructible1.jpg" alt="Block indestructible"><img class="icone" src="Images/Briques/indestructible2.jpg" alt="Block indestructible">Les Blocks indestructibles</br></br>
         </p>
       </div>
       <h3>Les bonus et les malus</h3>
       <div class="division_secondaire">
         <p class="p_secondaire">
             <img class="icone" src="Images/Bonus/plus_vite.jpg" alt="Malus qui augmente la vitesse de la balle">Augmente la vitesse de la balle</br></br>
             <img class="icone" src="Images/Bonus/petite_bille.jpg" alt="Malus qui diminue la taille de la balle">Diminue la taille de la balle</br></br>
             <img class="icone" src="Images/Bonus/grosse_bille.jpg" alt="Bonus qui augmente la taille de la balle">Augmente la taille de la balle</br></br>
             <img class="icone" src="Images/Bonus/petite_barre.jpg" alt="Malus qui diminue la taille de la barre">Diminue la taille de la barre</br></br>
             <img class="icone" src="Images/Bonus/grande_barre.jpg" alt="Bonus qui augmente la taille de la barre">Augmente la taille de la barre</br></br></br>
             
             <img class="icone" src="Images/Bonus/1000points.jpg" alt="1000 points">Le joueur gagne 1000 points</br></br>
             <img class="icone" src="Images/Bonus/1balle.jpg" alt="Une balle en plus">Une balle s'ajoute au jeu</br></br>
             <img class="icone" src="Images/Bonus/2balles.jpg" alt="Deux balles en plus">Deux balles s'ajoutent au jeu</br></br>
             <img class="icone" src="Images/Bonus/balle_feu.jpg" alt="Bonus balle en feu">La  balle prend feu</br></br>
             <img class="icone" src="Images/Bonus/superball.jpg" alt="Bonus Superballe">La balle devient une Superball</br></br></br>
             
             <img class="icone" src="Images/Bonus/laser.jpg" alt="Bonus laser">Un pistolet laser apparait sur la barre</br></br>
             <img class="icone" src="Images/Bonus/armure.jpg" alt="Bonus armure">Une armure apparait</br></br>
             <img class="icone" src="Images/Bonus/vie.jpg" alt="Bonus vie">Le joueur obtient une vie en plus</br></br>
             <img class="icone" src="Images/Bonus/next_level.jpg" alt="Bonus niveau suivant">Le joueur est transférer au niveau suivant</br></br>
             <img class="icone" src="Images/Bonus/mort.jpg" alt="Malus mort">Le joueur perd une vie</br></br>
         </p>
       </div>
      </div>
      
      <h2>.</h2>
      </div>
       
   </body>
</html>
   
   
   
