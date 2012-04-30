<?php echo $this->Html->script(array('tabs', 'jquery.fancybox', 'jquery.ad-gallery', 'http://maps.google.com/maps/api/js?sensor=false&amp;region=AU', 'mapv3', 'walkscore', 'details', 'forms')); ?>
<?php echo $this->Html->css(array('tabs', 'jquery.fancybox', 'jquery.ad-gallery', 'details', 'fancyforms')); ?>

<?php if (sizeof($lt)): ?>

<script type="text/javascript">
	//latlng and address
	var PropLatlng = new google.maps.LatLng("<?php echo $lt['Listing']['lt_lat'];?>", "<?php echo $lt['Listing']['lt_log'];?>"); 
	var PropAddress = "<?php echo $lt['Listing']['address']." ".$lt['Listing']['suburb_name']." ".$lt['State']['state_sname']." Australia";?>";
	<?php if(($lt['Listing']['lt_hvset']&pow(2,12))==pow(2,12)){?>var hideAddress = true;<?php }?>
</script>

<?php
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
<p class="bbc"><?php echo implode('&nbsp;&nbsp;', $bbc);?></p>
<h1><?php echo $lt['Listing']['address'];?><span><?php echo ucwords(strtolower($lt['Listing']['suburb_name']));?></span></h1>

<div class="tools">
	<ul class="links">
		<li><a href="<?php echo Router::url('/', true);?>Listings/brochure/<?php echo $lt['Listing']['lt_uid']?>" target="_blank"><span class="icon print"></span>Print This Property</a></li>
		<li><a href="<?php echo Router::url('/', true);?>Contacts/bookmark/<?php echo $lt['Listing']['lt_id']?>" target="_blank" class="bookmark"><span class="icon bookmark"></span>Bookmark Property</a></li>
	</ul>
	<p class="back"><a href="<?php echo $_SERVER['HTTP_REFERER'];?>">&laquo; Back to results</a></p>
	<div class="clear"></div>
</div>

<div id="right">
<h3><?php echo $lt['Listing']['lt_headline'];?></h3>
<div class="price">
	<?php
		if(round($lt['Listing']['lt_hvset'] & pow(2,7))==pow(2,7)){
			$price = $lt['Listing']['disp_rent'];
			$heading = 'For Sale';
		}else{
			$price = $lt['Listing']['disp_price'];
			$heading = 'For Lease';
		}
    ?>
    <h3>For <?php echo $heading;?> - <?php echo $price;?></h3>
</div>
<p class="desp"><?php echo nl2br($lt['Listing']['lt_desp']);?></p>

<div id="overview">
    <h2>Property Overview</h2>
    <dl>
      <dt>Property ID: </dt>
        <dd><?php echo $lt['Listing']['lt_uid'];?></dd>
    </dl>
<dl>
    <dt>Property Type:</dt>
    <dd><?php echo $lt['PCatg']['pcatg_name'];?></dd>
</dl>
<?php if (round($lt['Listing']['lt_hvset'] & pow(2,6))==pow(2,6)) {?>
<?php if ($lt['Listing']['land_size']) {?>
<dl>
	<dt>Land Size:</dt>
	<dd><?php echo $lt['Listing']['land_size']?> sqm</dd>
</dl>
<?php }?>
<?php if ($lt['Listing']['build_size']) {?>
<dl>
	<dt>Building Size:</dt>
	<dd><?php echo $lt['Listing']['build_size'];?>m&#0178;</dd>
</dl>
<?php }?>
<?php if ($lt['Listing']['external_size']) {?>
<dl>
	<dt>External Area:</dt>
	<dd><?php echo $lt['Listing']['external_size'];?>m&#0178;</dd>
</dl>
<?php }?>
<?php if ($lt['Listing']['frontage_size']) {?>
<dl>
	<dt>Frontage:</dt>
	<dd><?php echo $lt['Listing']['frontage_size'];?>m</dd>
</dl>
<?php }?>
<?php }?>

<?php if (round($lt['Listing']['lt_hvset'] & pow(2,7))==pow(2,7)) {?>
<?php if( $lt['Listing']['lease_start']) {?>
<dl>
    <dt>Available From:</dt>
    <dd><?php echo $lt['Listing']['lease_start'];?></dd>
</dl>
<?php }?>
<?php }?>

<?php if (sizeof($lt['LtInsp'])){?>
<dl class="times">
<dt>Inspection Times: </dt>
<?php 
$inspections = array();
foreach($lt['LtInsp'] as $insp){
	$inspections[] = '<label>'.date('d M Y', strtotime($insp['insp_start'])).'</label> '.date('h:iA', strtotime($insp['insp_start'])).' - '.date('h:iA', strtotime($insp['insp_stop']));
}
?>
<dd><?php echo implode("</dd>\r\n<dd>", $inspections)?></dd>
</dl>
<?php }?>


</div>
<?php if(true) {?>        
	<div class="tab-container">
		<ul class="tabs">
			<li class="active"><a name="google" rel="google" href="#">Map View</a></li>
			<?php if(($lt['Listing']['lt_hvset'] & pow(2,19)) != pow(2,19)) {?>
			<li><a name="streetview" rel="streetview" href="#">Street View</a></li>
			<?php }?>
			<li><a name="walkscore" title="<?php echo $lt['Listing']['address'].$lt['Listing']['suburb_name'];?>, <?php echo $lt['State']['state_sname'];?>, Australia" rel="walkscore" rev="469x400" href="#">What's Around</a></li>
		</ul>
		<!--google map-->
		<div class="tab-content google">
			<div id="google-canvas"></div>
		</div>
		<!--streetview-->
		<?php if(($lt['Listing']['lt_hvset'] & pow(2,19)) != pow(2,19)) {?>
		<div class="tab-content streetview">
			<div id="streetview-canvas"></div>
		</div>
		<?php }?>
		<!--walkscore-->
		<div class="tab-content walkscore">
			<div id="walkscore-canvas"></div>
		</div>
	</div>
<?php } ?>

</div>

<div id="left">

	<?php 
	//corner status img
	switch($lt['Listing']['lt_status']) {
		case 2:
			$status_img_name = "d_sold";
			$status_class = "";
			$prop_status = "<strong>Sold</strong>";
		break;
		case 3:
			$status_img_name = "d_leased";
			$status_class = "";
			$prop_status = "<strong>Leased</strong>";	
		break;
		case 4:
			$status_img_name = "d_deposit_taken";
			$status_class = "";
			$prop_status = "Deposit Taken";
		break;
		case 5:
			$status_img_name = "d_exchanged";
			$status_class = "";
			$prop_status = "Exchanged";
		break;
		case 8:
			$status_img_name = "d_under_offer";
			$status_class = "";
			$prop_status = "Under Offer";
		break;
		case 9:
			$status_img_name = "d_under_contract";
			$status_class = "";		
			$prop_status = "Under Contract";	
		break;
		default:
			$status_img_name = "1px";
			$status_class = "hidden";
			$prop_status = "For ".$heading;
		break;
	}
	
	if(is_array($lt['LtPhoto']) && sizeof($lt['LtPhoto'])){
		$display = (sizeof($lt['LtPhoto']) == 1)?" hidden":"";
		$photo = Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/".eregi_replace(".jpg", "-rsc.jpg", $lt['LtPhoto'][0]['photo_loc']);
		?>
    <div class="ad-gallery box-shadow">
    	<div class="status <?php echo $status_class;?>" ><img src="<?php echo Router::url('/', true);?>img/<?php echo $status_img_name;?>.png" alt="<?php echo $status_class;?>" /></div>
       <div class="ad-image-wrapper">
	   <img src="<?php echo $photo;?>" alt="<?php echo $lt['Listing']['address'];?>" width="402" height="268" />
	   </div>
        <div class="ad-nav<?php echo $display?>">
        <div class="ad-thumbs">
            <ul class="ad-thumb-list">
            <?php
    $gallery_photos = 0;
	//property photos
    for ($i = 0; $i < sizeof($lt['LtPhoto']); $i++) {
        
		$photo = Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/".eregi_replace(".jpg", "-rsc.jpg", $lt['LtPhoto'][$i]['photo_loc']);
		$thumb = Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/".eregi_replace(".jpg", "-rsa.jpg", $lt['LtPhoto'][$i]['photo_loc']);
		$title = $lt['LtPhoto'][$i]['photo_title'];
		$full_size = '';//eregi_replace("-rsa.jpg", "-rsd.jpg", $thumb);
        $class_addon = "";
        if (($i + 1 == sizeof($lt['LtPhoto']))) {
            $class_addon = ' class="last"';
        }
        $gallery_photos++;
    ?>
    <li<?php echo $class_addon;?>><a href="<?php echo $photo;?>"> <img src="<?php echo $thumb;?>" alt="<?php echo $title;?>" title="<?php echo $title;?>" longdesc="<?php echo $full_size;?>" /></a></li>
    <?php }?>
      </ul>
<script type="text/javascript">
	var autostart = true;
	var display_next_and_prev = true;
    var display_back_and_forward = true;
<?php if ($gallery_photos < 5) {
	if($gallery_photos == 1) {?>
	autostart = false;
	display_next_and_prev = false;
	<?php }?>
    display_back_and_forward = false;
<?php } ?>
</script>
      </div>
      </div>
      </div>
    <?php }else {?>
  <script type="text/javascript">
	var display_back_and_forward = false;
  </script>
<?php }?>
<div id="agent-contact" class="box-shadow">
<h2>Agent Contact</h2>
    <div id="office">
    <h3>Office details</h3>
    <p>
        <strong><?php echo $lt['Office']['office_name']?></strong><br />
        <?php if($lt['Office']['address']) {?><?php echo $lt['Office']['address']?>,<br /><?php }?>
        <?php if($lt['Office']['suburb_name']) {?><?php echo $lt['Office']['suburb_name']?>,<?php }?>
        NSW 2015
    </p>
    <p>
        <?php if($lt['Office']['phone']) {?><strong>Phone:</strong> <?php echo $lt['Office']['phone'];?><br /><?php }?>
        <?php if($lt['Office']['fax']) {?><strong>Fax:</strong> <?php echo $lt['Office']['fax'];?><br /><?php }?>
        <?php if($lt['Office']['site_url']) {?><strong>Web:</strong> <a href="<?php echo Router::url('/', true);?>"><?php echo $lt['Office']['site_url'];?></a><br /><?php }?>
    </p>
    <div class="clear"></div>
    </div>
	<?php //include('agent_contact_inc.php');?>
	<?php //include('agent_contact_form_inc.php');?>
</div>


</div>


<div>
<?php if (sizeof($lt['LtPhoto'])){
    $gallery_photos = 0;
    for ($i = 0; $i < sizeof($lt['LtPhoto']); $i++) {
		$full_size = Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/".eregi_replace(".jpg", "-rsd.jpg", $lt['LtPhoto'][$i]['photo_loc']);
		$title = $lt['LtPhoto'][$i]['photo_title'];
        $gallery_photos++;
    ?>
    <a href="<?php echo $full_size;?>" class="full-size" rel="photo_group"> </a>
    <?php }?>
	<?php }?>
</div>

<?php else: ?>
	<p class="ereor_msg">Search Results: Currently there are no property that match your search criteria. Please return to the <a href="<?php echo Router::url('/', true)?>Listings/index">listings page</a> if you wish to widen your search.</p>
<?php endif;?>