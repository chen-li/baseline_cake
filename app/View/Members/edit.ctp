<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
		<legend><?php echo __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('mem_id');
		echo $this->Form->input('office_id');
		echo $this->Form->input('job_pos_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('mobile');
		echo $this->Form->input('job_position');
		echo $this->Form->input('fax');
		echo $this->Form->input('mem_photo');
		echo $this->Form->input('notes');
		echo $this->Form->input('first_created');
		echo $this->Form->input('last_mod');
		echo $this->Form->input('mem_status');
		echo $this->Form->input('mem_uid');
		echo $this->Form->input('job_title');
		echo $this->Form->input('dob');
		echo $this->Form->input('start_date');
		echo $this->Form->input('exp_date');
		echo $this->Form->input('display_set');
		echo $this->Form->input('team_set');
		echo $this->Form->input('address');
		echo $this->Form->input('profile');
		echo $this->Form->input('exval');
		echo $this->Form->input('cb_agent_id');
		echo $this->Form->input('split_pctg');
		echo $this->Form->input('sub_mem_id');
		echo $this->Form->input('Listing');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Member.mem_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Member.mem_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Listings'), array('controller' => 'listings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listing'), array('controller' => 'listings', 'action' => 'add')); ?> </li>
	</ul>
</div>
