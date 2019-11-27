
<nav> 
		<ul>
		    <a href="index"><li <?php if ($page_en_cours == 'accueil') {echo 'class="en_cours"';} ?>><i class="fas fa-home fa-lg fa-fw"><!--Icon--></i><span>Home</span></li></a>
		    <a href="dashboard"><li <?php if ($page_en_cours == 'dashboard') {echo 'class="en_cours"';} ?>><i class="far fa-chart-bar fa-lg fa-fw"> </i><span>Dashboard</span></li></a>
		    <a href="messagerie"><li <?php if ($page_en_cours == 'messagerie') {echo 'class="en_cours"';} ?>><i class="fas fa-users fa-lg fa-fw"> </i><span>Users</span></li></a>	
		    <a href="assistance"><li <?php if ($page_en_cours == 'assistance') {echo 'class="en_cours"';} ?>><i class="far fa-question-circle fa-lg fa-fw"></i><span>FAQ admin</span></li></a>	
		    <a href="parametre"><li <?php if ($page_en_cours == 'parametre') {echo 'class="en_cours"';} ?>><i class="fas fa-cogs fa-lg fa-fw"> </i><span>Settings</span></li></a>
		</ul>
</nav>
