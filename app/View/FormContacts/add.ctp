<div class="formContacts form">
<?php echo $this->Form->create('FormContact');?>
	<fieldset>
		<legend><?php echo __('Add Form Contact'); ?></legend>
	<?php
		echo $this->Form->input('regarding');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Form Contacts'), array('action' => 'index'));?></li>
	</ul>
</div>
