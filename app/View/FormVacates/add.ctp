<div class="formVacates form">
<?php echo $this->Form->create('FormVacate');?>
	<fieldset>
		<legend><?php echo __('Add Form Vacate'); ?></legend>
	<?php
		echo $this->Form->input('tenant_name');
		echo $this->Form->input('property_address');
		echo $this->Form->input('vacate_date');
		echo $this->Form->input('are_breaking_lease');
		echo $this->Form->input('contact_phone');
		echo $this->Form->input('email');
		echo $this->Form->input('reason_for_notice');
		echo $this->Form->input('forward_address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Form Vacates'), array('action' => 'index'));?></li>
	</ul>
</div>
