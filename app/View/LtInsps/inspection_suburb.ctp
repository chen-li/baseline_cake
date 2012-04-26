<?php echo $this->Html->script(array('jquery.fancybox', 'inspections')); ?>
<?php echo $this->Html->css(array('jquery.fancybox', 'inspections')); ?>

<h1>Open For Inspection</h1>
<?php if (sizeof($listings)): ?>

<div id="tools"> 
<p class="sort-by">Sort by: <a href="<?php echo Router::url('/', true).'LtInsps/inspection/date';?>" >Time</a> | <a href="<?php echo Router::url('/', true).'LtInsps/inspection/suburb';?>" class="active">Suburb</a></p>
</div>
    
<ul>
<?php 
	foreach($listings as $lt){//order by date 
		$details_link = Router::url('/', true).'Listings/details/'.$lt['Listing']['lt_uid'];
		$photo = Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/m-rsa.jpg";
		$address = $lt['Listing']['address'].', '.$lt['Listing']['suburb_name'];
		
		$bbc = array();
		if($lt['Listing']['bed']) {
			$bbc['bed'] = '<img src="'.Router::url('/', true).'img/bed.png" alt="bed" /> '.$lt['Listing']['bed'];
		}
		if($lt['Listing']['bath']) {
			$bbc['bath'] = '<img src="'.Router::url('/', true).'img/bath.png" alt="bath" /> '.$lt['Listing']['bath'];
		}
		if($lt['Listing']['car']) {
			$bbc['car'] = '<img src="'.Router::url('/', true).'img/car.png" alt="car" /> '.$lt['Listing']['car'];
		}
?>
		<?php if(!isset($tmp_suburb) || ($tmp_suburb<>$lt['Listing']['suburb_name'])){ ?>
			<li class="title"><h2><?php echo $lt['Listing']['suburb_name'];?></h2></li>
			<?php $tmp_suburb=$lt['Listing']['suburb_name'];
		}?>
<li>
  <p class="photo box-shadow"><a href="<?php echo $details_link;?>"><img src="<?php echo $photo;?>" alt="<?php echo $address;?>" /></a></p>
  <div class="info">
  <div class="basic">
  <p class="time"><?php echo date('h:iA', strtotime($lt['LtInsp']['insp_start']))." - ".date('h:iA', strtotime($lt['LtInsp']['insp_stop']));?></p>
  <p class="address"><?php echo $address;?></p>
  <p><?php echo $lt['Listing']['disp_price'];?></p>
  </div>
  <div class="tools">
    <p class="bbc"> <?php echo implode('&nbsp; &nbsp;', $bbc);?> </p>
    <ul>
    <li><a href="<?php echo $details_link?>"><span class="icon view"></span>View More Details</a></li>
    </ul>
  </div>
  </div>
</li>

<?php }?>
</ul>
  <div class="clear"></div>
<?php else:?>
<p class="error_msg">No Open Homes at this time, please check back again soon.</p>
<?php endif;?>