
<nav id="menu"> 
		<ul>
			<li id='croix'><a href=''><i class="far fa-times-circle fa-lg fa-fw"></i></a></li>
		    <a href="index.php"><li <?php if ($page_en_cours == 'accueil') {echo 'class="en_cours"';} ?>><i class="fas fa-home fa-lg fa-fw"><!--Icon--></i><span>Accueil</span></li></a>
		    <a href="messagerie.php"><li <?php if ($page_en_cours == 'messagerie') {echo 'class="en_cours"';} ?>><i class="fas fa-envelope fa-lg fa-fw"> </i><span>Messages</span></li></a>	
		    <a href="assistance.php"><li <?php if ($page_en_cours == 'assistance') {echo 'class="en_cours"';} ?>><i class="far fa-question-circle fa-lg fa-fw"></i><span>Assistance</span></li></a>	
		    <a href="parametre.php"><li <?php if ($page_en_cours == 'parametre') {echo 'class="en_cours"';} ?>><i class="fas fa-cogs fa-lg fa-fw"> </i><span>Parametres</span></li></a>
		</ul>
</nav>

<div class='burger'><a href="#menu"><i class="fas fa-grip-lines fa-lg fa-3x"></i></a></div>
