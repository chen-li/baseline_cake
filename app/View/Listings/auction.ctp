<?php echo $this->Html->script(array('jquery.fancybox', 'inspections')); ?>
<?php echo $this->Html->css(array('jquery.fancybox', 'inspections')); ?>

<h1>Auction Timetables</h1>
<?php if (sizeof($listings)): ?>

<ul>
<?php 
	foreach($listings as $lt){
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
    <li>
    <p class="photo box-shadow"> <a href="<?php echo $details_link;?>"><img src="<?php echo $photo;?>" alt="<?php echo $address;?>" border="0" /> </a> </p>
    <div class="info">
        <div class="basic">
            <p class="address"><?php echo $address;?></p>
            <dl>
                <dt>Auction:</dt>
                <dd><?php echo date('d M Y', strtotime($lt['Listing']['auction_date']));?> <?php echo date('h:iA', strtotime($lt['Listing']['auction_date']));?></dd>
            </dl>
            <dl>
                <dt>Price Guide:</dt>
                <dd><?php echo $lt['Listing']['disp_price'];?></dd>
            </dl>
        </div>
        <div class="tools">
            <p class="bbc"><?php echo implode('&nbsp; &nbsp;', $bbc);?></p>
            <dl>
            <?php if(sizeof($lt['Member'])) {
				foreach($lt['Member'] as $mem) { 
				?>
				<dt>Contact:</dt>
				  <dd><?php echo $mem['first_name']." ".$mem['last_name']." ".$mem['phone'];?></dd>
				<?php
				}
            }else {?>
            	<dt>&nbsp;</dt><dd>&nbsp;</dd>
            <?php }?>
            </dl>
            
            <ul>
            <li><a href="<?php echo $details_link;?>"><span class="icon view"></span>View More Details</a></li>
            </ul>
        </div>
    </div>
    </li>
<?php }?>
</ul>

<?php else:?>
<p class='error_msg'>No Auctions at this time, please check back again soon.</p>
<?php endif;?>