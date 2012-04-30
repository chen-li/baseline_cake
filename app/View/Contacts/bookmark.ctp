<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>forgot password</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true);?>css/reset.css" media="screen, projection, print" />
<link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true);?>css/global.css" media="screen, projection, print" />
<link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true);?>css/fancyforms.css" media="screen, projection, print" />
<!--[if lte IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true);?>css/globalIE8.css" media="screen, projection" />
	<![endif]-->
<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo Router::url('/', true);?>css/globalIE7.css" media="screen, projection" />
	<![endif]-->
	
<script type="text/javascript" src="<?php echo Router::url('/', true);?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Router::url('/', true);?>js/forms.js"></script>
</head>
<body class="fancyforms">
<div id="fancyforms">
<?php if($isBookmarked):?>
<p class="success_msg">Property has been successfully bookmarked to your Property Alert account!</p>
<?php endif;?>
<?php if(!$this->Session->read('logged_in')):?>
<p>Please <a href="<?php echo Router::url('/', true);?>Contacts/propertyAlert">login</a> to Property Alert in order to bookmark this property.<br/><br/>Not a member? Register <a href="<?php echo Router::url('/', true);?>Contacts/propertyAlert">Here</a></p>
<?php endif;?>
</div>
</body>
</html>
