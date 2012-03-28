<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset(); ?>
<?php 
	echo $this->Html->meta('icon');
	echo $this->Html->meta(
		'favicon.ico',
		'/img/apple-touch-icon.png',
		array('type' => 'icon', 'rel' => 'apple-touch-icon-precomposed')
	);
	echo $this->Html->meta(
		'keywords',
		'Agentbox, Real Estate, Sydney'
	);
	echo $this->Html->meta(
		'description',
		'Your Agency helps you inspect the homes available in New South Wales (NSW), Queensland (QLD), Australian Capital Territory (ACT), Victoria (VIC), Tasmania (TAS), South Australia (SA), Northern Territory (NT), Western Australia (WA), Northern Beaches, Inner West, Central West Slopes, Cairns &amp; Region, Gold Coast &amp; Hinterland, Woden Valley, Bayside, Hobart &amp; Southern, Western &amp; Beach Suburbs, Darwin Area and Perth City. Home Page specialises in real estate in New South Wales (NSW), Queensland (QLD), Australian Capital Territory (ACT), Victoria (VIC), Tasmania (TAS), South Australia (SA), Northern Territory (NT), Western Australia (WA).'
	);
?>
<title><?php echo $title_for_layout?></title>
<?php echo $this->Html->css(array('reset', 'global', 'menu_base', 'jquery.autocomplete')); ?>
<script type="text/javascript">
	var SITE_PATH = '<?php echo Router::url('/', true);?>';
	var WSID = '664b6819212c3fa5e316587d6695aed7';
	var start_idx = 0;
</script>
<?php echo $this->Html->script(array('jquery.min', 'actions', 'jquery.autocomplete', 'jquery.cycle.lite.min')); ?>
<!--[if lte IE 8]>
        <?php echo $this->Html->css('globalIE8'); ?>
	<![endif]-->
<!--[if IE 7]>
		<?php echo $this->Html->css('globalIE7'); ?>
	<![endif]-->
</head>

<body class="home listings">
<?php echo $this->element('sql_dump'); ?>
<input type="hidden" id="folder_name" value="" />
<input type="hidden" id="request_uri" value="index.php" />
<div id="wrapper">
<a name="top"></a>
<div id="header-wrap">
  <div id="header">
    <div id="fast-search">
    <form id="fast_search_form" method="post" action="/system/form.php">
    <p><label><input type="radio" name="fs_type" value="buying/listings.php" checked="checked" /> Buy</label>
    <label><input type="radio" name="fs_type" value="renting/rental-listings.php" /> Rent</label>
    <input id="fsearch" name="Keyword" type="text" value="street, suburb, post code or id" />
    <input id="suburb_id" type="hidden" value="" name="suburb_id" />
    <input type="submit" class="go_btn curvy-all" value="GO" /></p>
</form>    </div>
    <div id="header-logo">
    <?php
		echo $this->Html->image("header-logo.png", array(
		"alt" => "Your Agency",
		"title" => "Your Agency",
		'url' => array('controller' => 'pages', 'action' => 'initialization')
	));
	?> 
    </div>
        <div id="nav" class="container-shadow">
	<?php echo $this->element('nav_inc'); ?>
    </div>  </div>
</div>
<div id="wrap">
<div id="main">
<div id="content" class="container-shadow">