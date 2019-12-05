
<nav> 
		<ul>
		    <a href="index"><li <?php if ($page_en_cours == 'accueil') {echo 'class="en_cours"';} ?>><i class="fas fa-home fa-lg fa-fw"><!--Icon--></i><span>Accueil</span></li></a>
		    <a href="dashboard"><li <?php if ($page_en_cours == 'dashboard') {echo 'class="en_cours"';} ?>><i class="far fa-chart-bar fa-lg fa-fw"> </i><span>Dashboard</span></li></a>
		    <a href="messagerie"><li <?php if ($page_en_cours == 'messagerie') {echo 'class="en_cours"';} ?>><i class="fas fa-envelope fa-lg fa-fw"> </i><span>Messages</span></li></a>	
		    <a href="patients"><li <?php if ($page_en_cours == 'patients') {echo 'class="en_cours"';} ?>><i class="fas fa-users fa-lg fa-fw"> </i><span>Patients</span></li></a>
		    <a href="calendrier"><li <?php if ($page_en_cours == 'calendrier') {echo 'class="en_cours"';} ?>><i class="fas fa-calendar-alt fa-lg fa-fw"> </i><span>Calendrier</span></li></a>	
		    <a href="assistance"><li <?php if ($page_en_cours == 'assistance') {echo 'class="en_cours"';} ?>><i class="far fa-question-circle fa-lg fa-fw"></i><span>Assistance</span></li></a>	
		    <a href="parametre"><li <?php if ($page_en_cours == 'parametre') {echo 'class="en_cours"';} ?>><i class="fas fa-cogs fa-lg fa-fw"> </i><span>Parametres</span></li></a>
		</ul>
</nav>

<div class='burger'><a href='#'><i class="fas fa-grip-lines fa-lg fa-4x"></i></a></div>
