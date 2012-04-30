<div class="tab-content">
<div id="stepa">
<?php if (sizeof($contact['Listing'])){?>
<ul>
	<?php foreach($contact['Listing'] as $lt){
		$photo = Router::url('/', true).'img/printview_nophoto.gif';;
		if (round($lt['lt_hvset'] & 2)==2){
			$photo = Router::url('/', true)."media/lt/".$lt['office_id']."/".$lt['lt_uid']."/m-rsa.jpg";
		}
		$address = $lt['address'].', '.$lt['suburb_name'];
		$details_link = Router::url('/', true).'Listings/details/'.$lt['lt_uid'];
		
		$bbc = array();
		if($lt['bed']) {
			$bbc['bed'] = '<img src="'.Router::url('/', true).'img/bed.png" alt="bed" /> '.$lt['bed'];
		}
		if($lt['bath']) {
			$bbc['bath'] = '<img src="'.Router::url('/', true).'img/bath.png" alt="bath" /> '.$lt['bath'];
		}
		if($lt['car']) {
			$bbc['car'] = '<img src="'.Router::url('/', true).'img/car.png" alt="car" /> '.$lt['car'];
		}

?>
<li>
	<p class="photo"><a href="<?php echo $details_link;?>"><img src="<?php echo $photo;?>" alt="<?php echo $address;?>" border="0" /></a></p>
  <div class="info">
  <div class="basic">
  <p class="address"><?php echo $address;?></p>
  <p><?php echo $lt['disp_price'];?></p>
  </div>
  <div class="tools">
    <p class="bbc"> <?php echo implode('&nbsp; &nbsp;', $bbc);?> &nbsp;</p>
    <ul>
    <li><span class="icon view"></span><a href="<?php echo $details_link;?>">View More Details</a></li>
    <li><span class="icon delete"></span><?php echo $this->Form->postLink('Delete Property', array('action' => 'deleteProperty', $lt['lt_id']), array('confirm'=>'Are you sure you want to delete that user?')); ?></li>
    </ul>
  </div>
  </div>
</li>
<?php } ?>
   </ul> 
<?php }else{?>
<p class="error_msg">You currently have no saved properties.</p>
<?php }?>
</div>
</div>
</div>