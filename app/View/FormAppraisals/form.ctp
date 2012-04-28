<?php echo $this->Html->script(array('forms')); ?>
<?php echo $this->Html->css(array('forms')); ?>

<h1>Market Appraisal</h1>
<div id="free-text">
	<p>I wish to be contacted for a Free Market Appraisal:</p>
</div>

<?php echo $this->Form->create(null, array('url' => array('controller' => 'FormAppraisals', 'action' => 'form'))); ?>
	<?php echo $this->Form->hidden('appraisal_type', array('value'=>'Sales Appraisal')); ?>
<div class="flow-cont">
	<?php echo $this->Form->input('title', array('label' => 'Title', 'class' => 'short', 'error' => false)); ?>
    <?php echo $this->Form->input('first_name', array('label' => 'First Name', 'class' => 'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('day_time_phone', array('label' => 'Daytime Phone Number', 'class' => 'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('email', array('label' => 'Email', 'class' => 'mid', 'error' => false)); ?>
</div>

<div class="flow-cont">
	<div class="input text">&nbsp;</div>
    <?php echo $this->Form->input('last_name', array('label' => 'Last Name', 'class' => 'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('mobile', array('label' => 'Mobile Number', 'class' => 'mid', 'error' => false)); ?>
</div>

<h2>Property Details</h2>
<div class="flow-cont">
    <?php echo $this->Form->input('street_unit_number', array('label' => 'Unit / Street Number', 'class' => 'short', 'error' => false)); ?>
    <?php echo $this->Form->input('street_name', array('label' => 'Street Name', 'class' => 'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('state', array('options' => array(
			'NSW' => 'NSW',
			'QLD' => 'QLD',
			'VIC' => 'VIC',
			'SA' => 'SA',
			'NT' => 'NT',
			'WA' => 'WA',
			'TAS' => 'TAS'
	), 'empty' => '', 'class'=>'mid', 'error' => false)); ?>
    <?php
		$catg = array();
		foreach($catgs as $c){
			$catg[$c['PCatg']['pcatg_name']] = $c['PCatg']['pcatg_name'];
		}
	?>
    <?php echo $this->Form->input('property_type', array('options' => $catg, 'empty' => '', 'class'=>'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('age', array('options' => array(
			'1-5 years' => '1-5 years',
			'6-10 years' => '6-10 years',
			'11-25 years' => '11-25 years',
			'Over 25 years' => 'Over 25 years'
	), 'empty' => '', 'class'=>'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('number_bedrooms', array('options' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'5+' => '5+'
	), 'empty' => '', 'class'=>'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('living_areas', array('options' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'3+' => '3+',
	), 'empty' => '', 'class'=>'mid', 'error' => false)); ?>
</div>

<div class="flow-cont">
	<div class="input text">&nbsp;</div>
    <?php echo $this->Form->input('suburb', array('label' => 'Suburb', 'class' => 'mid', 'error' => false)); ?>
	<div class="input text">&nbsp;</div>
    <?php echo $this->Form->input('property_status', array('options' => array(
			'Vacant' => 'Vacant',
			'Tenanted' => 'Tenanted',
			'Owner Occupied' => 'Owner Occupied'
	), 'empty' => '', 'class'=>'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('construction_type', array('options' => array(
			'Brick' => 'Brick',
			'Brick Veneer' => 'Brick Veneer',
			'Rendered Brick' => 'Rendered Brick',
			'Clad' => 'Clad',
			'Fibro' => 'Fibro',
			'Timber' => 'Timber',
			'Other' => 'Other'
	), 'empty' => '', 'class'=>'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('number_bathrooms', array('options' => array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'3+' => '3+'
	), 'empty' => '', 'class'=>'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('outdoor_living_areas', array('options' => array(
			'None' => 'None',
			'Balcony' => 'Balcony',
			'Deck' => 'Deck',
			'Courtyard' => 'Courtyard',
			'Verandah' => 'Verandah'
	), 'empty' => '', 'class'=>'mid', 'error' => false)); ?>
</div>

<div class="clear"></div>
    <?php echo $this->Form->input('parking', array('label' => 'Parking: <span class="icon question"></span><span class="tooltip">Specify the number of parking spaces at the property including Garage, Carport and/or Car Spaces</span>', 'class' => 'long', 'error' => false)); ?>
    
<div class="flow-cont">
    <?php echo $this->Form->input('air_conditioning', array('options' => array(
			'Yes' => 'Yes',
			'No' => 'No'
	), 'type' => 'radio', 'error' => false));?>
    <?php echo $this->Form->input('property_condition', array('options' => array(
			'Poor' => 'Poor',
			'Average' => 'Average',
			'Good' => 'Good',
			'Excellent' => 'Excellent'
	), 'empty' => '', 'class'=>'mid', 'error' => false)); ?>
</div>

<div class="flow-cont">
    <?php echo $this->Form->input('pool', array('options' => array(
			'Yes' => 'Yes',
			'No' => 'No'
	), 'type' => 'radio', 'error' => false));?>
    <?php echo $this->Form->input('property_renovated', array('options' => array(
			'No, it is a new property' => 'No, it is a new property',
			'In the last 3 years' => 'In the last 3 years',
			'In the last 5-10 years' => 'In the last 5-10 years',
			'In the last 11-20 years' => 'In the last 11-20 years',
			'No, it is in original condition' => 'No, it is in original condition'
	), 'empty' => '', 'class'=>'mid', 'error' => false)); ?>
</div>

<div class="clear"></div>
<div class="input">
	<label for="SiteFormsHistPropertyDescription">Additional Features: <span class="icon question"></span><span class="tooltip">include any additional items that may be relevant to the value of your property eg. city views, security, ceiling fans etc</span></label>
    <?php echo $this->Form->textarea('property_description', array('class' => 'long', 'error' => false)); ?>
</div>

	<label>&nbsp;</label>
	<?php echo $this->Form->input('Submit', array('type' => 'submit', 'class' => 'submit_btn', 'value'=>'Submit', 'label'=>false)); ?>
	<?php echo $this->Form->input('Reset', array('type' => 'reset', 'class' => 'reset_btn', 'value'=>'Reset', 'label'=>false)); ?>
    
<?php echo $this->Form->end(null); ?>