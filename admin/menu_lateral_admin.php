<?php
if ($page_en_cours == 'accueil') {
$class = '"en-cours"';
}
elseif ($page_en_cours == 'dashboard') {
$class = '"en-cours"';
}
elseif ($page_en_cours == 'messagerie') {
$class = '"en-cours"';
}
elseif ($page_en_cours == 'calendrier') {
$class = '"en-cours"';
}
elseif ($page_en_cours == 'patients') {
$class = '"en-cours"';
}
elseif ($page_en_cours == 'parametre') {
$class = '"en-cours"';
}
elseif ($page_en_cours == 'assistance') {
$class = '"en-cours"';
}

?>

<nav> 
		<ul>
		    <a href="index"><li  class=<?php echo $page_en_cours; ?> ><i class="fas fa-home fa-lg fa-fw" style="color:#A3A0FB;"><!--Icon--></i><span>Accueil</span></li></a>
		    <a href="dashboard"><li class=<?php echo $page_en_cours; ?> ><i class="far fa-chart-bar fa-lg fa-fw" style="color:#A5A4BF;"> </i><span>Dashboard</span></li></a>
		    <a href="messagerie"><li class=<?php echo $page_en_cours; ?> ><i class="fas fa-envelope fa-lg fa-fw" style="color:#A5A4BF;"> </i><span>Messages</span></li></a>	
		    <a href="Patients.html"><li class=<?php echo $page_en_cours; ?> ><i class="fas fa-users fa-lg fa-fw" style="color:#A5A4BF;"> </i><span>Patients</span></li></a>
		    <a href="calendrier"><li class=<?php echo $page_en_cours; ?> <i class="fas fa-calendar-alt fa-lg fa-fw" style="color:#A5A4BF;"> </i><span>Calendrier</span></li></a>	
		    <a href="assistance"><li class=<?php echo $page_en_cours; ?> ><i class="far fa-question-circle fa-lg fa-fw" style="color:#A5A4BF;"></i><span>Assistance</span></li></a>	
		    <a href="parametre"><li class=<?php echo $page_en_cours; ?> ><i class="fas fa-cogs fa-lg fa-fw" style="color:#A5A4BF;"> </i><span>Parametres</span></li></a>
		</ul>
</nav>
