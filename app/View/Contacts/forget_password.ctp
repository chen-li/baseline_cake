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
<h3>Forgot Password</h3>
<?php echo $this->Session->flash(); ?>
<form method="post" action="<?php echo Router::url('/', true);?>Contacts/forgetPassword">
    <p class="first"><label for="email" >Enter your email:</label><input type="text" name="email" id="email" value="" /></p>
    <p><label>&nbsp;</label><input type="submit" name="Submit" value="Submit" class="submit_btn curvy-all" /></p>
</form>
<input type="hidden" id="fancyform-height" value="95" />
</div>
</body>
</html>
