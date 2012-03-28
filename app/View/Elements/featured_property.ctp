<?php //pr($featureProperties);?><div id="pow">
<div id="featured-box" class="box-shadow">
<div id="featured-tag"><img src="<?php echo Router::url('/', true);?>img/featured_tag.png" alt="featured tag" width="80" height="78" /></div>
<?php if(sizeof($featureProperties)):?>
    <ul>
    <?php 
		$cnt = 0;
		foreach($featureProperties as $feat):
			$cnt++;
	?>
        <li id="fp_<?php echo $cnt;?>"> <a href=""><img src="<?php echo $feat['Listing']['photo_path'];?>" alt="<?php echo $feat['Listing']['web_address'];?>" /></a>
        <div>
        <p class="headline" title="<?php echo $feat['Listing']['lt_headline'];?>"><?php echo $feat['Listing']['lt_headline'];?></p>
        <p><strong>Featured:</strong> <?php echo $feat['Listing']['web_address'];?></p>
        </div>
      </li>
    <?php endforeach;?>
    </ul>
<?php endif;?>
</div>
</div>
