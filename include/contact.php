<?php

    include_once("include/validation.php");

?>



			<!-- Formulaire 
		
					
					<label for="email">Courriel: </label>
					<span class="required">*</span><span class="required" id="errcourriel"> 						
					</span><br/>
					<input type="email" name="courriel"  value="<?php //if (isset ($_POST['courriel'])){ echo $courriel;} ?>" />
					
					<label for="probleme">Message: </label>	
					<span class="required">*</span><span class="required" id="errprobleme"> 					
					<textarea name="probleme"  id="probleme" cols="30" rows="10" ></textarea>
					<br/>						
					<input type="submit" value="Envoyer" class="send" name="send" id="BoutonEnvoyer" />		-->							


	 	<!-- gestion des erreurs -->
				<?php	if (isset ($_POST['nom'])){
					$nom = $_POST['nom'];
					if( strlen($nom) < 2){ 
						$erreur = true;
						echo  '<span>Vous devez entrer un nom.</span>';
					}
				}
				 	if (isset ($_POST['courriel'])){
					$courriel = $_POST['courriel'];
					if( strlen($courriel) < 2){ 
						$erreur = true;
						echo  '<span>Vous devez entrer un courriel.</span>';
					}
				}
				 	if (isset ($_POST['message'])){
					$message = $_POST['message'];
					if( strlen($message) < 2){ 
						$erreur = true;
						echo  '<span>Vous devez entrer un message.</span>';
					}
				}?>


	 	<footer id="contact">
			<div class="sectionTitre center-align">
				<h3>  CONTACT</h3>
				<div class="divider"></div>
			</div>
		
			<div class="row bgcontact">
			  <form method="POST" action="#">
			    <div class="row container">
					<div class="input-field col s12 m6 l6">
						<i class="mdi-action-account-circle prefix"></i>
						<input type="text" name="nom" id="icon_prefix" class="validate" value="<?php if (isset ($_POST['nom'])){ echo $nom;} ?>" />
						<label for="icon_prefix">Nom:</label>
					</div>
					<div class="input-field col s12 m6 l6">
						<i class="mdi-content-mail prefix"></i>
						<input type="email" name="courriel" id="icon_prefix2" class="validate" value="<?php if (isset ($_POST['courriel'])){ echo $courriel;} ?>" /  >
						<label for="icon_prefix">Courriel:</label>
					</div>
					<div class="input-field col s12 m12 l12">
						<i class="mdi-content-create prefix"></i>
						<textarea id="icon_prefix3" class="materialize-textarea validate" name="message"></textarea>
						<label for="icon_prefix">Message:</label>
					</div>
					<div class="center-align">
					<input class="waves-effect waves-red envoyer" type="submit" name="envoyer" id="BoutonEnvoyer" value="Envoyer"/>
					</div>
				</div>
			  </form>
										
				<div class="footerReseau container center-align">
					<div><a href="https://lnkd.in/7ktm9w"><i class="fa fa-linkedin fa-3x"></i> </a></div>
					
				</div>	
				
			</div>
			<p class="center-align signature">@Karine Boisvert 2015</p>		
		</footer> 


