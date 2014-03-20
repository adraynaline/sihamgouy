	<header>
		<p><a href="?appli=home&action=home">Siham Gouy</a></p>
	</header>
	<a href="javascript:history.back()">Back</a>
	Les images
<div id="content_img">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    
  <!-- Wrapper for slides -->
 	
  <div class="carousel-inner">	
    <?php foreach ($images as $images): ?>
    <div class="item">
    		
      <center><img height="500" src="<?php echo $images['Nom'];?>" alt="..."></center>
     
      <div class="carousel-caption">
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
