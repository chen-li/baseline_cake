<?php //pr($featureProperties);?><div id="pow">
<div id="featured-box" class="box-shadow">
<div id="featured-tag"><img src="<?php echo Router::url('/', true);?>img/featured_tag.png" alt="featured tag" width="80" height="78" /></div>
<?php if(sizeof($featureProperties)):?>
    <ul>
    <?php 
		for($i=0;$i<sizeof($featureProperties);$i++){ 
			$photo = '';
			if (($featureProperties[$i]['Listing']['lt_hvset'] & 2)==2){
				$photo = Router::url('/', true)."media/lt/".$featureProperties[$i]['Listing']['office_id']."/".$featureProperties[$i]['Listing']['lt_uid']."/m-rsc.jpg";
				if (round($featureProperties[$i]['Listing']['lt_hvset'] & pow(2, 17))==pow(2, 17)){
				$photo = Router::url('/', true)."media/lt/".$featureProperties[$i]['Listing']['office_id']."/".$featureProperties[$i]['Listing']['lt_uid']."/cm-rsc.jpg";
				}
			}
		$address = $featureProperties[$i]['Listing']['address'].', ';
		if (round($featureProperties[$i]['Listing']['office_id'] & pow(2,12))==pow(2,12))
			$address = '';
		$address .= ucwords(strtolower($featureProperties[$i]['Listing']['suburb_name']));
		$price = (round($featureProperties[$i]['Listing']['office_id'] & pow(2,7))==pow(2,7))?$featureProperties[$i]['Listing']['disp_rent']:$featureProperties[$i]['Listing']['disp_price'];
	?>
        <li id="fp_<?php echo ($i+1);?>"> <a href=""><img src="<?php echo $photo;?>" alt="<?php echo $address;?>" /></a>
        <div>
        <p class="headline" title="<?php echo $featureProperties[$i]['Listing']['lt_headline'];?>"><?php echo $featureProperties[$i]['Listing']['lt_headline'];?></p>
        <p><strong>Featured:</strong> <?php echo $address;?></p>
        </div>
      </li>
    <?php }?>
    </ul>
<?php endif;?>
</div>
</div>
