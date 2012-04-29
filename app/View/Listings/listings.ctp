<?php echo $this->Html->script(array('tabs', 'jquery.fancybox', 'http://maps.google.com/maps/api/js?sensor=false&amp;region=AU', 'mapv3', 'listings', 'jquery.lazyload')); ?>
<?php echo $this->Html->css(array('tabs', 'jquery.fancybox', 'listings', 'fancyforms')); ?>
<h1><?php echo $search_title;?></h1>
<div class="tab-container">
<?php if(sizeof($listings) > 0){?>
<form method="post" target="_blank" id="print_prop_form" action="<?php echo Router::url('/', true);?>system/listings-print.php?mode=listings">

	<p id="tools"></p>
	
	<ul class="tabs">
		<li class="active"><a name="listview" rel="show|#print_list|#print_prop|.page-numbers|.page-records|.order-by" href="#">List View</a></li>
		<li><a name="galleryview" rel="show|#print_list|#print_prop|.page-numbers|.page-records|.order-by" href="#">Gallery View</a></li>
		<li><a name="mapview" rel="hide|#print_list|#print_prop|.page-numbers|.page-records|.order-by|mapView" href="#">Map View</a></li>
	</ul>
    
	<!-- start page navigation -->
	<dl class="listing-nav-ordering">
	<?php ob_start();?>
      <dd class="found">
		<?php echo $this->Paginator->counter(array('format'=>'{:count}')); ?> properties found
        <span class="page-records"> - 
		<?php echo $this->Paginator->counter(array('format'=>'Page {:page} of {:pages}')); ?>
        </span>
      </dd>
      <dd class="order-by">
        <select name="order_by" class="" onchange="window.location = '<?php echo '/'.$this->name.'/'.$this->action;?>'+this.value;">
            <option value="">Order By</option>
            <option value="/sort:last_mod/direction:desc">Last Updated</option>
            <option value="/sort:listing_date/direction:asc">Listing Date</option>
            <option value="/sort:price/direction:desc">Price: Highest to Lowest</option>
            <option value="/sort:price/direction:asc">Price: Lowest to Highest</option>
            <option value="/sort:suburb_name/direction:asc">Suburb: A-Z</option>
            <option value="/sort:suburb_name/direction:desc">Suburb: Z-A</option>
            <option value="/sort:bed/direction:asc">Bedrooms</option>
            <option value="/sort:bath/direction:asc">Bathrooms</option>
        </select>
      </dd>
      <dd class="page-numbers">
      	<?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled prev')); ?>
		<?php echo $this->Paginator->numbers(array('separator' => '')); ?>
		<?php //echo $this->CustomPaginator->numbers(); ?>
		<?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled next')); ?>
      </dd>
	<?php $page_order = ob_get_contents();
    ob_end_clean();
    ?>
    <?php echo $page_order;?>
	</dl>
	<!-- end page navigation -->
    
    
	<?php ob_start();?>
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
			$photo = Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/".eregi_replace(".jpg", "-rsb.jpg", $lt['LtPhoto'][0]['photo_loc']);
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
		
		$details_link = Router::url('/', true).'Listings/details/'.$lt['Listing']['lt_uid'];
	?>
	<li class="<?php echo $hv_shade;?>">
        <div class="photo box-shadow">
            <div class="status <?php echo $status_class;?>" ><img src="<?php echo Router::url('/', true);?>img/<?php echo $status_img_name;?>.png" alt="<?php echo $status_class;?>" width="67" /></div>
            <a href="<?php echo $details_link;?>"><img src="<?php echo $photo;?>" alt="<?php echo $lt['Listing']['address'];?>" width="205" border="0" title="<?php echo $lt['Listing']['address'];?><?php echo ucwords(strtolower($lt['Listing']['suburb_name']));?>" /></a>
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
            <div class="tools">
            	<p class="bbc"> <?php echo implode('&nbsp;&nbsp;', $bbc);?> </p>
                <p><?php echo $lt['PCatg']['pcatg_name'];?></p>
                <ul>
                    <li><a href="<?php echo $details_link;?>"><span class="icon view"></span>View More Details</a></li>
                </ul>
            </div>
        </div>
	</li>
	<?php
		$i++;
	}?>    
	</ul>
    <?php
	$html_output = ob_get_contents();
	ob_end_clean();
	?>
    
    <div class="tab-content listview">
    	<?php echo $html_output;?>
    </div>
    <div class="tab-content galleryview">
		<?php echo $html_output;?>
        <div class="clear"></div>
    </div>
    <div class="tab-content mapview">
		<div id="mapview-canvas">Loading Map...</div>
    </div>
    <dl class="listing-nav-ordering bottom"><?php echo $page_order;?></dl>
    <script type="text/javascript">
        var Listings = eval('(<?php echo json_encode($GetMapListingData);?>)');
    </script>
</form>
<?php }else{?>
<p class="error_msg">Search Results: Currently there are no properties that match your search criteria. Please widen your search.</p>
<?php }?>
</div>