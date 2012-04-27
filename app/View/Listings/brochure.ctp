<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo Router::url('/', true);?>img/favicon.ico" type="image/x-icon" />
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true);?>css/reset.css" media="screen, projection, print" />
<link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true);?>css/global.css" media="screen, projection, print" />
<link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true);?>css/brochure.css" media="screen, projection, print" />
<!--[if lte IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true);?>css/globalIE8.css" media="screen, projection" />
	<![endif]-->
<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true);?>css/globalIE7.css" media="screen, projection" />
	<![endif]-->
<script type="text/javascript">
	window.onload = function() {
		window.print();
	}
</script>
</head>

<body class="brochure">
<a name="top"></a>
<div id="header"> <img src="<?php echo Router::url('/', true);?>img/printheader.jpg" alt="" />
  <dl>
    <dd id="address">
      <?php echo $lt['Listing']['address'];?>, <?php echo $lt['Listing']['suburb_name'];?>    </dd>
<?php
	$bbc = array();
	if($lt['Listing']['bed']) {
		$bbc['bed'] = 'Bed '.$lt['Listing']['bed'];
	}
	if($lt['Listing']['bath']) {
		$bbc['bath'] = 'Bath '.$lt['Listing']['bath'];
	}
	if($lt['Listing']['car']) {
		$bbc['car'] = 'Car '.$lt['Listing']['car'];
	}
?>
    <dd id="icons"><?php echo implode('&nbsp;|&nbsp;', $bbc);?></dd>
  </dl>
</div>
<div id="photos">
	<?php if(sizeof($lt['LtPhoto'])>=1){?>
    <img src="<?php echo Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/".eregi_replace(".jpg", "-rsc.jpg", $lt['LtPhoto'][0]['photo_loc']);?>" id="mainimg" width="413" alt="property photo" />
    <?php }?>
    <?php if(sizeof($lt['LtPhoto'])>=2){?>
    <img src="<?php echo Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/".eregi_replace(".jpg", "-rsb.jpg", $lt['LtPhoto'][1]['photo_loc']);?>" id="sub1" width="202" alt="property photo" />
    <?php }?>
    <?php if(sizeof($lt['LtPhoto'])>=3){?>
    <img src="<?php echo Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/".eregi_replace(".jpg", "-rsb.jpg", $lt['LtPhoto'][2]['photo_loc']);?>" id="sub2" width="202" alt="property photo" />
    <?php }?>
  </div>
<div class="clear"></div>
<div id="content">
  <h1><?php echo $lt['Listing']['lt_headline'];?></h1>
  <div id="left">
    <p><?php echo nl2br($lt['Listing']['lt_desp']);?></p>
  </div>
  <div id="right">
    <dl>
      <dt>Property ID:</dt>
      <dd><?php echo $lt['Listing']['lt_uid'];?></dd>
    </dl>
  <dl>
  <dt>Price: </dt>
  <dd><?php echo $lt['Listing']['disp_price'];?></dd>
  </dl>
            <dl>
      <dt>Contact:</dt>
      <?php foreach($lt['Member'] as $mem){?>
            <dd class="contact">
        <p><?php echo $mem['first_name']?> <?php echo $mem['last_name']?></p>
        <p><?php echo $mem['phone']?></p>
      </dd>
      <?php }?>
          </dl>
  </div>
  <div class="clear"></div>
</div>
<div id="footer">
  <img class="qr-code" src="http://chart.apis.google.com/chart?chs=150x150&amp;cht=qr&amp;chl=<?php echo Router::url('/', true);?>Listings/details/<?php echo $lt['Listing']['lt_uid'];?>" alt="qr code" width="150" height="150" />
  <p>
    <strong><?php echo Router::url('/', true);?></strong><br />
    Your Agency    4 Cornwallis Street    ,
    Eveleigh    , Tel:
    02 9209 4174  </p>
  <p>E. &amp; O. Whilst every care has been taken in producing the above information, no warranty is given or implied as to the accuracy. Prospective purchasers are required to take such actions as necessary to satisfy themselves in this respect. The property is subject to prior sale or withdrawal. Your Agency </p>
</div>
</body>
</html>