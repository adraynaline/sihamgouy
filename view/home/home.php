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
	<div id="content_slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" height="500px">
    
  <!-- Wrapper for slides -->
 	
  <div class="carousel-inner">	
    <?php foreach ($imageshome as $images): ?>
	    <div class="item">
	    		
	      <center><img height="400px" src="<?php echo $images['Illustration'];?>" alt="..."></center>
	     
	      <div class="carousel-caption">
<p><?php echo $images['Nom'] ?></p>

	      </div>
	    </div>
	     <?php endforeach; ?>
	  </div>
	 
	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
	    
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
	    
	  </a>
	</div>
	</div>
	<div class="clear"></div>
</div>
