<?php echo $this->Html->script(array('cms')); ?>
<?php echo $this->Html->css(array('cms')); ?>

<h1>Tenancy Application</h1>
<div class="free-text">
<p>Please read the following steps carefully to apply for the rental property you're interested in.</p>
<dl id="tenancy_steps_list">
  <dt>step 1.</dt>
  <dd><img src="<?php echo Router::url('/', true);?>img/pdficon.gif" alt="pdf icon" border="0" /> <a href="<?php echo Router::url('/', true);?>files/TenancyApplication.pdf" target="_blank">Download the rental application document</a></dd>
  <dt>step 2.</dt>
  <dd>Fill out your information</dd>
  <dt>step 3.</dt>
  <dd>Print and sign the application form</dd>
  <dt>step 4.</dt>
  <dd>Fax to <?php echo $office['Office']['fax'];?> or post it to us at<br />
  <?php echo $office['Office']['address'];?><br />
	<?php echo $office['Office']['suburb_name'];?>
  </dd>
  </dl>
</div>
<p><b>Please note</b> that the application above is in PDF Format. If you do not already have the free Acrobat Reader application installed on your computer, you will first need to download it before viewing this Tenancy Application.</p>

<p><a target="_blank" href="http://get.adobe.com/reader/"><img src="<?php echo Router::url('/', true);?>img/get_adobe_reader.png" alt="Adobe Reader icon" border="0" /></a></p>