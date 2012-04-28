<div class="formMaintenances view">
<h2><?php  echo __('Form Maintenance');?></h2>
	<dl>
		<dt><?php echo __('Form Id'); ?></dt>
		<dd>
			<?php echo h($formMaintenance['FormMaintenance']['form_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($formMaintenance['FormMaintenance']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($formMaintenance['FormMaintenance']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($formMaintenance['FormMaintenance']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Phone'); ?></dt>
		<dd>
			<?php echo h($formMaintenance['FormMaintenance']['contact_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($formMaintenance['FormMaintenance']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manager'); ?></dt>
		<dd>
			<?php echo h($formMaintenance['FormMaintenance']['manager']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Repairs Required'); ?></dt>
		<dd>
			<?php echo h($formMaintenance['FormMaintenance']['repairs_required']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form Maintenance'), array('action' => 'edit', $formMaintenance['FormMaintenance']['form_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form Maintenance'), array('action' => 'delete', $formMaintenance['FormMaintenance']['form_id']), null, __('Are you sure you want to delete # %s?', $formMaintenance['FormMaintenance']['form_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Maintenances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Maintenance'), array('action' => 'add')); ?> </li>
	</ul>
</div>
