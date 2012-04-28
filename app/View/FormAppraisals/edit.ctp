<div class="formAppraisals form">
<?php echo $this->Form->create('FormAppraisal');?>
	<fieldset>
		<legend><?php echo __('Edit Form Appraisal'); ?></legend>
	<?php
		echo $this->Form->input('form_id');
		echo $this->Form->input('appraisal_type');
		echo $this->Form->input('title');
		echo $this->Form->input('first_name');
		echo $this->Form->input('day_time_phone');
		echo $this->Form->input('email');
		echo $this->Form->input('last_name');
		echo $this->Form->input('mobile');
		echo $this->Form->input('street_unit_number');
		echo $this->Form->input('street_name');
		echo $this->Form->input('state');
		echo $this->Form->input('property_type');
		echo $this->Form->input('age');
		echo $this->Form->input('number_bedrooms');
		echo $this->Form->input('living_areas');
		echo $this->Form->input('suburb');
		echo $this->Form->input('property_status');
		echo $this->Form->input('construction_type');
		echo $this->Form->input('number_bathrooms');
		echo $this->Form->input('outdoor_living_areas');
		echo $this->Form->input('parking');
		echo $this->Form->input('air_conditioning');
		echo $this->Form->input('property_condition');
		echo $this->Form->input('pool');
		echo $this->Form->input('property_renovated');
		echo $this->Form->input('property_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FormAppraisal.form_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FormAppraisal.form_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Form Appraisals'), array('action' => 'index'));?></li>
	</ul>
</div>
