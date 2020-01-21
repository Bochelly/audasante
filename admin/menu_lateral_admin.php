
<nav id="menu"> 
		<ul>
			<li id='croix'><a href=''><i class="far fa-times-circle fa-lg fa-fw"></i></a></li>
		    <a href="index.php"><li <?php if ($page_en_cours == 'accueil') {echo 'class="en_cours"';} ?>><i class="fas fa-home fa-lg fa-fw"><!--Icon--></i><span>Accueil</span></li></a>
		    <a href="dashboard.php"><li <?php if ($page_en_cours == 'dashboard') {echo 'class="en_cours"';} ?>><i class="far fa-chart-bar fa-lg fa-fw"> </i><span>Dashboard</span></li></a>
		    <a href="messagerie.php"><li <?php if ($page_en_cours == 'messagerie') {echo 'class="en_cours"';} ?>><i class="fas fa-envelope fa-lg fa-fw"> </i><span>Messages</span></li></a>	
		    <a href="patients.php"><li <?php if ($page_en_cours == 'patients') {echo 'class="en_cours"';} ?>><i class="fas fa-users fa-lg fa-fw"> </i><span>Patients</span></li></a>
		    <a href="patient_register_front.php"><li <?php if ($page_en_cours == 'add_patient') {echo 'class="en_cours"';} ?>><i class="fas fa-users fa-lg fa-fw"> </i><span>Inscrire un patient</span></li></a>
		    <a href="assistance.php"><li <?php if ($page_en_cours == 'assistance') {echo 'class="en_cours"';} ?>><i class="far fa-question-circle fa-lg fa-fw"></i><span>Assistance</span></li></a>	
		    <a href="parametre.php"><li <?php if ($page_en_cours == 'parametre') {echo 'class="en_cours"';} ?>><i class="fas fa-cogs fa-lg fa-fw"> </i><span>Parametres</span></li></a>
		</ul>
		<a id='CGUmenu' href='../cgu.php'>CGU et mentions légales</a>
</nav>



<div class='burger'><a href="#menu"><i class="fas fa-grip-lines fa-lg fa-3x"></i></a></div>
