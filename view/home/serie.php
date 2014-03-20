<header>
	<p><a href="?appli=home">Siham G </a></p>
</header>
	<!--<a href="javascript:history.back()">Back</a>-->
	<div id="content">
		<?php foreach ($serie as $serie): ?>
		<div class="serie">
			<img src="<?php echo $serie['Illustration']; ?>">
			<div class="description">
				<a class="goto" href="?appli=home&action=images&serie=<?php echo $serie['Nom'] ?>">
				<table width="100%" height="100%">
					<tr height="100%">
						<td width="100%" align="center">
							<?php echo $serie['Nom']; ?>
						</td>
					</tr>
				</table>
				</a>
			</div>
			
		</div>
		<?php endforeach; ?>
	</div>

	