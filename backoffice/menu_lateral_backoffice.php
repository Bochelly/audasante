
<nav> 
		<ul>
		    <a href="index.php"><li <?php if ($page_en_cours == 'accueil') {echo 'class="en_cours"';} ?>><i class="fas fa-home fa-lg fa-fw"><!--Icon--></i><span>Home</span></li></a>
		    <a href="dashboard"><li <?php if ($page_en_cours == 'dashboard') {echo 'class="en_cours"';} ?>><i class="far fa-chart-bar fa-lg fa-fw"> </i><span>Dashboard</span></li></a>
		    <a href="users-admin.php"><li <?php if ($page_en_cours == 'users-admin') {echo 'class="en_cours"';} ?>><i class="fas fa-users fa-lg fa-fw"> </i><span>Users</span></li></a>	
		    <a href="faq-admin.php"><li <?php if ($page_en_cours == 'faq-admin') {echo 'class="en_cours"';} ?>><i class="far fa-question-circle fa-lg fa-fw"></i><span>FAQ admin</span></li></a>	
		    <a href="parametre"><li <?php if ($page_en_cours == 'parametre') {echo 'class="en_cours"';} ?>><i class="fas fa-cogs fa-lg fa-fw"> </i><span>Settings</span></li></a>
		</ul>
</nav>
