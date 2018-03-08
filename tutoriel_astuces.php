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
       
      <h2>Tutoriel et Astuces</h2>
      
      <div class="division_centrale">
       <p>
         Vous verrez ici, comment jouer à Arkanoid.</br>
         La version présenté ici, est la version 7 d'Arkanoid.</br></br>
       </p>
       
       <ul class="sous_menu">
       <li><a href="#Lancement_jeu" class="menu_lien">Lancement du jeu</a></li>
       <li><a href="#bases" class="menu_lien">Les bases</a></li>
       <li><a href="#briques" class="menu_lien">Les Briques</a></li>
       <li><a href="#bonus" class="menu_lien">Bonus/Malus</a></li>
       </ul>
       
       <h3 id="Lancement_jeu">Lancement du jeu</h3>
       <div class="division_secondaire">
         <p class="p_secondaire">
             <img class="images" src="Images/ScreenShots/menuA.jpg" alt="Screen-shot du menu du jeu">
             Voici le menu, vous pouvez :</br>
             - Activer/désactiver le son.</br>
             - Lancer une partie du début.</br>
             - Lancer une partie au hasard.</br>
             - Créer vos propres terrains.</br>
         </p>
       </div>
       
       <h3 id="bases">Les bases</h3>
       <div class="division_secondaire">
         <p class="p_secondaire">
             <img class="images" src="Images/ScreenShots/sca2.jpg" alt="Screen-shot du jeu"></br>
             <img class="icone" src="Images/souris.png" alt="Souris">Vous pouvez controler la barre à l'aide de la souris. Cliquer pour lancer la bille.</br>
             En bas, à gauche, vous pouvez voir votre niveau, votre score, et vos vies.</br>
             Il ne vous reste plus qu'à faire rebondir votre balle sur votre planche afin de casser des briques.</br></br>
             <img class="images" src="Images/ScreenShots/sca3.jpg" alt="Screen-shot du jeu"></br>
             Défois, des bonus, ou des malus apparaissent après avoir casser une brique.</br>
         </p>
       </div>
       
       <h3 id="briques">Les briques</h3>
       <div class="division_secondaire">
         <p class="p_secondaire">
             <img class="icone" src="Images/Briques/brique_basique1.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique2.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique3.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique4.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique5.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique6.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique7.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique8.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique9.jpg" alt="Brique basique"><img class="icone" src="Images/Briques/brique_basique10.jpg" alt="Brique basique">Les blocks basiques. Quand ils sont cassés, ils peuvent libérer un bonus ou un malus.</br></br>
             <img class="icone" src="Images/Briques/roche_casse1.jpg" alt="Block rocheux"><img class="icone" src="Images/Briques/roche_casse2.jpg" alt="Bloc rocheux"><img class="icone" src="Images/Briques/roche_casse3.jpg" alt="Bloc rocheux"><img class="icone" src="Images/Briques/roche_casse4.jpg" alt="Bloc rocheux">Les Blocks rocheux, ils sont détruits en deux coups.</br></br>
             <img class="icone" src="Images/Briques/brique_dure1.jpg" alt="Block dure"><img class="icone" src="Images/Briques/brique_dure2.jpg" alt="Block dure"><img class="icone" src="Images/Briques/brique_dure3.jpg" alt="Block dure"><img class="icone" src="Images/Briques/brique_dure4.jpg" alt="Block dure">Les Blocks durs, ils sont détruits en trois coups.</br></br>
             <img class="icone" src="Images/Briques/brique_bombe1.jpg" alt="Block explosif"><img class="icone" src="Images/Briques/brique_bombe2.jpg" alt="Block explosif">Les Blocks explosifs, ils explosent tout les autres blocks explosifs aux alentours.</br></br>
             <img class="icone" src="Images/Briques/indestructible1.jpg" alt="Block indestructible"><img class="icone" src="Images/Briques/indestructible2.jpg" alt="Block indestructible">Les Blocks indestructibles, aucun pouvoir ne permet de les détruire.</br></br>
         </p>
       </div>
       
       <h3 id="bonus">Les bonus ou malus</h3>
       <div class="division_secondaire">
         <p class="p_secondaire">
             <img class="icone" src="Images/Bonus/plus_vite.jpg" alt="Malus qui augmente la vitesse de la balle">La vitesse de la balle est accélérée.</br></br>
             <img class="icone" src="Images/Bonus/petite_bille.jpg" alt="Malus qui diminue la taille de la balle">La taille de la balle est diminuée.</br></br>
             
             <img class="images" src="Images/ScreenShots/sca4.jpg" alt="Screen-shot du jeu"></br>
             
             <img class="icone" src="Images/Bonus/grosse_bille.jpg" alt="Bonus qui augmente la taille de la balle">La taille de la balle est augmentée.</br></br>
             
             <img class="images" src="Images/ScreenShots/sca5.jpg" alt="Screen-shot du jeu"></br>
             
             <img class="icone" src="Images/Bonus/petite_barre.jpg" alt="Malus qui diminue la taille de la barre">La taille de la barre est diminuée.</br></br>
             
             <img class="images" src="Images/ScreenShots/sca6.jpg" alt="Screen-shot du jeu"></br>
             
             <img class="icone" src="Images/Bonus/grande_barre.jpg" alt="Bonus qui augmente la taille de la barre">La taille de la barre est augmentée.</br></br>
             
             <img class="images" src="Images/ScreenShots/sca7.jpg" alt="Screen-shot du jeu"></br>
             
             <img class="icone" src="Images/Bonus/1000points.jpg" alt="1000 points">Le joueur gagne 1000 points.</br></br>
             
             <img class="images" src="Images/ScreenShots/sca8.jpg" alt="Screen-shot du jeu"></br>
             
             <img class="icone" src="Images/Bonus/1balle.jpg" alt="Une balle en plus">Une balle s'ajoute au jeu. Elle conserve les mêmes caractéristiques que la balle précedénte.</br></br>
             
             <img class="images" src="Images/ScreenShots/sca9.jpg" alt="Screen-shot du jeu"></br>
             
             <img class="icone" src="Images/Bonus/2balles.jpg" alt="Deux balles en plus">Deux balles s'ajoutent au jeu. Elles conservent les mêmes caractéristiques que la balle précedénte.</br></br>
             
             <img class="images" src="Images/ScreenShots/sca10.jpg" alt="Screen-shot du jeu"></br>
             
             <img class="icone" src="Images/Bonus/balle_feu.jpg" alt="Bonus balle en feu">La  balle prend feu, elle inflige plus de dégâts.</br></br>
             
             <img class="images" src="Images/ScreenShots/sca11.jpg" alt="Screen-shot du jeu"></br>
             
             <img class="icone" src="Images/Bonus/superball.jpg" alt="Bonus Superballe">La balle devient une Superball. Elle détruit les blocks sans rebondir dessus.</br></br>
             
             <img class="images" src="Images/ScreenShots/sca12.jpg" alt="Screen-shot du jeu"></br>
             
             <img class="icone" src="Images/Bonus/laser.jpg" alt="Bonus laser">Un pistolet laser apparait sur la barre. Le joueur, en cliquant, peut lancer des lasers qui infligeront des dégats sur les blocks qu'ils toucheront.</br></br>
             
             <img class="images" src="Images/ScreenShots/sca13.jpg" alt="Screen-shot du jeu"></br>
             
             <img class="icone" src="Images/Bonus/armure.jpg" alt="Bonus armure">Une armure (verte) apparait sous la barre, elle permet de rattrapper une balle, que le joueur n'aurait pas réussi à rattrapper.</br></br>
             
             <img class="images" src="Images/ScreenShots/sca14.jpg" alt="Screen-shot du jeu"></br>
             
             <img class="icone" src="Images/Bonus/vie.jpg" alt="Bonus vie">Le joueur obtient une vie en plus.</br></br>
             <img class="icone" src="Images/Bonus/next_level.jpg" alt="Bonus niveau suivant">Le joueur est transférer au niveau suivant.</br></br>
             <img class="icone" src="Images/Bonus/mort.jpg" alt="Malus mort">Le joueur perd une vie.</br></br>
         </p>
       </div>
      </div>
      
      <h2>.</h2>
      </div>
   </body>
</html>
   
   
   
