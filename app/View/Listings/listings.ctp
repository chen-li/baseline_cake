<?php echo $this->Html->script(array('tabs', 'jquery.lazyload', 'jquery.fancybox', 'mapv3', 'http://maps.google.com/maps/api/js?sensor=false&region=AU', 'listings')); ?>
<?php echo $this->Html->css(array('tabs', 'jquery.fancybox', 'listings', 'fancyforms')); ?>
<h1><?php echo $search_title;?></h1>
<form method="post" target="_blank" id="print_prop_form" action="<?php echo Router::url('/', true);?>system/listings-print.php?mode=listings">
<div class="tab-container">

	<p id="tools"></p>
	
	<ul class="tabs">
		<li class="active"><a name="listview" rel="show|#print_list|#print_prop|.page-numbers|.page-records|.order-by" href="#">List View</a></li>
		<li><a name="galleryview" rel="show|#print_list|#print_prop|.page-numbers|.page-records|.order-by" href="#">Gallery View</a></li>
		<li><a name="mapview" rel="hide|#print_list|#print_prop|.page-numbers|.page-records|.order-by|mapView" href="#">Map View</a></li>
	</ul>
	
	<!-- start page navigation -->
	<dl class="listing-nav-ordering">
	</dl>
	<!-- end page navigation -->
	
	<ul>
	<?php
	//property list view
	$i = 0;
	foreach($listings as $lt){
		$hv_shade = '';
		if (!is_int($i/2)) {$hv_shade = 'list-odd';}
		if (floor($i/3) % 2) { $hv_shade .= ' gallery-odd';}
		//corner status img
		switch($lt['Listing']['lt_status']) {
			case 2:
				$status_img_name = "sold";
				$status_class = "";
				$prop_status = "<strong>Sold</strong>";
			break;
			case 3:
				$status_img_name = "leased";
				$status_class = "";
				$prop_status = "<strong>Leased</strong>";	
			break;
			case 4:
				$status_img_name = "deposit_taken";
				$status_class = "";
				$prop_status = "Deposit Taken";
			break;
			case 5:
				$status_img_name = "exchanged";
				$status_class = "";
				$prop_status = "Exchanged";
			break;
			case 8:
				$status_img_name = "under_offer";
				$status_class = "";
				$prop_status = "Under Offer";
			break;
			case 9:
				$status_img_name = "under_contract";
				$status_class = "";		
				$prop_status = "Under Contract";	
			break;
			default:
				$status_img_name = "1px";
				$status_class = "hidden";
				$prop_status = "For ".$heading;
			break;
		}
			
		$photo = Router::url('/', true).'img/galleryview_nophoto.gif';
		if(is_array($lt['LtPhoto']) && sizeof($lt['LtPhoto'])){
			$photo = Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/".$lt['LtPhoto'][0]['photo_loc'];
		}
		
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
		}
	?>
	<li class="<?php echo $hv_shade;?>">
        <div class="photo box-shadow">
            <div class="status <?php echo $status_class;?>" ><img src="<?php echo Router::url('/', true);?>img/<?php echo $status_img_name;?>.png" alt="<?php echo $status_class;?>" width="67" /></div>
            <a href=""><img src="<?php echo $photo;?>" alt="<?php echo $lt['Listing']['address'];?>" width="205" border="0" title="<?php echo $lt['Listing']['address'];?><?php echo ucwords(strtolower($lt['Listing']['suburb_name']));?>" /></a>
        </div>
        <div class="info">
            <div class="basic">
                <p class="address"><?php echo $lt['Listing']['address'];?><?php echo ucwords(strtolower($lt['Listing']['suburb_name']));?></p>
                <div class="headline-price">
                	<p><?php echo $lt['Listing']['lt_headline'];?></p>
                	<p><strong><?php echo $lt['Listing']['web_price'];?></strong></p>
                </div>
                <p class="desc"><?php echo $lt['Listing']['lt_desp'];?></p>
                <p>Contact: <?php //echo $fullname;?> <?php //echo $contact_phone;?></p>
            </div>
            <!--<p><?php echo $prop_status;?></p>-->
            <div class="tools">
            	<p class="bbc"> <?php echo implode('&nbsp;&nbsp;', $bbc);?> </p>
                <ul>
					<!--<? if(!$staff_listings && $site_func['listing_print']['active']) {?>
                    <li class="print_prop"><label>
                    <? if($site_func['listing_print']['selected']) {?>
                    <span class="icon print"></span><span>Add to Print List</span> <input type="checkbox" name="prop_to_print[]" value="<?php echo $lt['lt_uid'][$i];?>" />
                    <? }?>
                    <? if($site_func['listing_print']['all']) {?>
                    <input type="hidden" name="print_all[]" value="<?php echo $lt['lt_uid'][$i];?>" />
                    <? }?>
                    </label></li>
                    <? }?>
                    <li><a href="<?php echo $bookmark_link;?>" class="bookmark"><span class="icon bookmark"></span>Bookmark Property</a></li>-->
                    <li><a href="<?php //echo $details_link;?>"><span class="icon view"></span>View More Details</a></li>
                </ul>
            </div>
        </div>
	</li>
	<? 
		$i++;
	}?>    
	</ul>
</div>
</form>