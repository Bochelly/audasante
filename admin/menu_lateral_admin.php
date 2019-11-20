<nav> 
		<ul>
		    <a href="index"><li  <?php if ($page_en_cours == 'accueil') {echo ' class="en-cours"';}?>><i class="fas fa-home fa-lg fa-fw" style="color:#A3A0FB;"><!--Icon--></i><span>Accueil</span></li></a>
		    <a href="dashboard"><li <?php if ($page_en_cours == 'dashboard') {echo ' class="en-cours"';}?>><i class="far fa-chart-bar fa-lg fa-fw" style="color:#A5A4BF;"> </i><span>Dashboard</span></li></a>
		    <a href="messagerie"><li <?php if ($page_en_cours == 'messagerie') {echo ' class="en-cours"';}?>><i class="fas fa-envelope fa-lg fa-fw" style="color:#A5A4BF;"> </i><span>Messages</span></li></a>	
		    <a href="Patients.html"><li <?php if ($page_en_cours == 'patients') {echo ' class="en-cours"';}?>><i class="fas fa-users fa-lg fa-fw" style="color:#A5A4BF;"> </i><span>Patients</span></li></a>
		    <a href="calendrier"><li <?php if ($page_en_cours == 'calendrier') {echo ' class="en-cours"';}?>><i class="fas fa-calendar-alt fa-lg fa-fw" style="color:#A5A4BF;"> </i><span>Calendrier</span></li></a>	
		    <a href="assistance"><li <?php if ($page_en_cours == 'assistance') {echo ' class="en-cours"';}?>><i class="far fa-question-circle fa-lg fa-fw" style="color:#A5A4BF;"></i><span>Assistance</span></li></a>	
		    <a href="parametre"><li <?php if ($page_en_cours == 'parametre') {echo ' class="en-cours"';}?>><i class="fas fa-cogs fa-lg fa-fw" style="color:#A5A4BF;"> </i><span>Parametres</span></li></a>
		</ul>
</nav>
