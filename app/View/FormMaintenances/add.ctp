<div class="formMaintenances form">
<?php echo $this->Form->create('FormMaintenance');?>
	<fieldset>
		<legend><?php echo __('Add Form Maintenance'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('contact_phone');
		echo $this->Form->input('email');
		echo $this->Form->input('manager');
		echo $this->Form->input('repairs_required');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Form Maintenances'), array('action' => 'index'));?></li>
	</ul>
</div>
