<?php 	require('../config.php');	
		$profil = $bdd->query('SELECT * FROM user WHERE n_secu='.$_SESSION["n_secu"].'');
		$data = $profil->fetch();
?>

<div id='top-bar'>
	<ul>
		<form autocomplete="off" method="POST" action="find.php" >
			<div class="autocomplete">
				<li id="search-field"><i class="fas fa-search" style="color:#A5A4BF;"></i>
					<input id="search-text" type="text" name="search-text" placeholder="Recherchez un patient, un test ou un message">
					<input type="submit" hidden>
				</li>
			</div>
		</form>
		<li id="top-photo"><a href="#menu_profil"> <div id='nom'><?php echo $data['first_name'].' '.$data['last_name']; ?></div>		

			<?php 
				if(!empty($data['photo']))
				{
			?>
				<img id='photo_profil' src="../images/images_profil/<?php echo $data['photo']; ?>">
			<?php		
				}
			?>


			</a>



			 <div id="menu_profil">
					<ul>
						<a class='noTransition' href="profil.php"><li> Profil  </li></a>
						<a class='noTransition' href="disconnect.php"><li> Déconnexion  </li></a>
					</ul>
			</div>
		</li>
		<li id="top-assist"> <a href="assistance"><i class="far fa-question-circle fa-lg fa-fw" style="color:#A5A4BF;" title="assistance"> </i></a> </li>
		<li id="top-messagerie"><a href="messagerie"><i class="fas fa-envelope fa-lg fa-fw" style="color:#A5A4BF;" title="messagerie"> </i></a> </li>

	</ul>
</div>
