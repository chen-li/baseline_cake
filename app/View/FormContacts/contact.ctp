<?php echo $this->Html->css(array('forms', 'tabs', 'jquery.fancybox', 'contact')); ?>
<?php echo $this->Html->script(array('tabs', 'jquery.fancybox', 'http://maps.google.com/maps/api/js?sensor=false&amp;region=AU', 'mapv3', 'forms', 'contact')); ?>

<?php $full_address = $office['Office']['address'].", ".$office['Office']['suburb_name'].", ".$office['State']['state_sname']." ".$office['Suburb']['postcode']." Australia";?>
<h1>Contact Us</h1>
<div id="left">
<h2>Contact Details &amp; Enquiry Form</h2>
<div id="contact-form">
<div class="office">
	<dl>
        <dt><label>Address: </label></dt><dd><?php echo $full_address?></dd> 
        <dt><label>Telephone: </label></dt><dd><?php echo $office['Office']['phone']?></dd>
        <dt><label>Fax: </label></dt><dd><?php echo $office['Office']['fax']?></dd>
    </dl>
</div>

<?php echo $this->Form->create('FormContact', array('url' => array('controller' => 'FormContacts', 'action' => 'contact'))); ?>	
  <p class="title">Please fill in the form below for your enquiries:</p>
  <?php echo $msg;?>


    <?php echo $this->Form->input('regarding', array('options' => array(
			'General Sales Enquiry' => 'General Sales Enquiry',
			'General Rental Enquiry' => 'General Rental Enquiry',
			'General Enquiry' => 'General Enquiry'
	), 'empty' => 'Select a department', 'error' => false)); ?>

    <?php echo $this->Form->input('name', array('label' => 'Name', 'error' => false)); ?>

    <?php echo $this->Form->input('email', array('label' => 'Email', 'error' => false)); ?>

    <?php echo $this->Form->input('phone', array('label' => 'Phone', 'error' => false)); ?>

    <?php echo $this->Form->input('comments', array('label' => 'Enquiry', 'error' => false)); ?>
    
	<?php echo $this->Form->input('Submit', array('type' => 'submit', 'class' => 'submit_btn', 'value'=>'Submit', 'label'=>'&nbsp;')); ?>

<?php echo $this->Form->end(null); ?>
</div>
</div>
<script type="text/javascript">
	var PropAddress = "<?php echo $full_address;?>";
</script>
<div id="right">
<div id="free-text">
 <img src="<?php echo Router::url('/', true).'img/contact-us-default.jpg';?>">
</div>
<div class="tab-container">
    <ul class="tabs">
        <li class="active"><a name="google" rel="google" href="#">Google Map</a></li>
        <li><a name="streetview" rel="streetview" href="#">Street View</a></li>
    </ul>
    <!--google map-->
    <div class="tab-content map">
        <div id="google-canvas"></div>
    </div>
    <!--streetview-->
    <div class="tab-content streetview">
        <div id="streetview-canvas"></div>
    </div>
</div>

</div>
<div class="clear"></div>