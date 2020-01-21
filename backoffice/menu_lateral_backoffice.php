
<nav> 
		<ul>
		    <a href="index.php"><li <?php if ($page_en_cours == 'accueil') {echo 'class="en_cours"';} ?>><i class="fas fa-home fa-lg fa-fw"><!--Icon--></i><span>Accueil</span></li></a>
		    <a href="keys.php"><li <?php if ($page_en_cours == 'keys') {echo 'class="en_cours"';} ?>><i class="fas fa-key fa-lg fa-fw"> </i><span>Clés</span></li></a>
		    <a href="users-admin.php"><li <?php if ($page_en_cours == 'users-admin') {echo 'class="en_cours"';} ?>><i class="fas fa-users fa-lg fa-fw"> </i><span>Utilisateurs</span></li></a>
		    <a href="faq-admin.php"><li <?php if ($page_en_cours == 'faq-admin') {echo 'class="en_cours"';} ?>><i class="far fa-question-circle fa-lg fa-fw"></i><span>FAQ</span></li></a>
		    <a href="sensors.php"><li <?php if ($page_en_cours == 'sensors') {echo 'class="en_cours"';} ?>><i class="fas fa-weight fa-lg fa-fw"> </i><span>Capteurs</span></li></a>
		</ul>
</nav>
