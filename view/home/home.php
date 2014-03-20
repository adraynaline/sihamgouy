	<header>
		<p><a href="?appli=home&action=home">Siham Gouy</a></p>
	</header>
<div id="content">
	<aside>
		<ul>
			<?php foreach ($cat as $cat): ?>
				<li><a href="?appli=home&action=serie&categorie=<?php echo $cat['Nom']; ?>"><?php echo $cat['Nom']; ?></a></li>
			<?php endforeach; ?>
			<!-- menu display block -->
		</ul>
	</aside>
	<div id="content">

		<!-- SLIDER DERNIERE NOUVEAUTÉ - LIMIT 5 -->
	</div>
</div>
