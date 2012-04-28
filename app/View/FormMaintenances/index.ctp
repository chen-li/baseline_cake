<div class="formMaintenances index">
	<h2><?php echo __('Form Maintenances');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('form_id');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('contact_phone');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('manager');?></th>
			<th><?php echo $this->Paginator->sort('repairs_required');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($formMaintenances as $formMaintenance): ?>
	<tr>
		<td><?php echo h($formMaintenance['FormMaintenance']['form_id']); ?>&nbsp;</td>
		<td><?php echo h($formMaintenance['FormMaintenance']['date']); ?>&nbsp;</td>
		<td><?php echo h($formMaintenance['FormMaintenance']['name']); ?>&nbsp;</td>
		<td><?php echo h($formMaintenance['FormMaintenance']['address']); ?>&nbsp;</td>
		<td><?php echo h($formMaintenance['FormMaintenance']['contact_phone']); ?>&nbsp;</td>
		<td><?php echo h($formMaintenance['FormMaintenance']['email']); ?>&nbsp;</td>
		<td><?php echo h($formMaintenance['FormMaintenance']['manager']); ?>&nbsp;</td>
		<td><?php echo h($formMaintenance['FormMaintenance']['repairs_required']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formMaintenance['FormMaintenance']['form_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formMaintenance['FormMaintenance']['form_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formMaintenance['FormMaintenance']['form_id']), null, __('Are you sure you want to delete # %s?', $formMaintenance['FormMaintenance']['form_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Form Maintenance'), array('action' => 'add')); ?></li>
	</ul>
</div>
