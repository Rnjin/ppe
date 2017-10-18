 <div id="contenu">
      <h2>Liste visiteur</h2>
      <h3>Visiteurs à selectionner : </h3>
      <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstMois" accesskey="n">Visiteur : </label>
        <select id="lstMois" name="lstMois">
            <?php
			foreach ($listeVisiteur as $unVisiteur)
			{
			    $listeVisiteur = $unVisiteur['id'];
				$nomVisiteur =  $unVisiteur['nom'];
				$prenomVisiteur =  $unVisiteur['prenom'];
				if($listeVisiteur == $visiteurASelectionner){
				?>
				<option selected value="<?php echo $listeVisiteur ?>"><?php echo  $nom."/".$prenom ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $listeVisiteur ?>"><?php echo  $nom."/".$prenom ?> </option>
				<?php 
				}
			
			}
           
		   ?>
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>