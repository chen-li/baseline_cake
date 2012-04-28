<div class="formVacates index">
	<h2><?php echo __('Form Vacates');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('form_id');?></th>
			<th><?php echo $this->Paginator->sort('tenant_name');?></th>
			<th><?php echo $this->Paginator->sort('property_address');?></th>
			<th><?php echo $this->Paginator->sort('vacate_date');?></th>
			<th><?php echo $this->Paginator->sort('are_breaking_lease');?></th>
			<th><?php echo $this->Paginator->sort('contact_phone');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('reason_for_notice');?></th>
			<th><?php echo $this->Paginator->sort('forward_address');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($formVacates as $formVacate): ?>
	<tr>
		<td><?php echo h($formVacate['FormVacate']['form_id']); ?>&nbsp;</td>
		<td><?php echo h($formVacate['FormVacate']['tenant_name']); ?>&nbsp;</td>
		<td><?php echo h($formVacate['FormVacate']['property_address']); ?>&nbsp;</td>
		<td><?php echo h($formVacate['FormVacate']['vacate_date']); ?>&nbsp;</td>
		<td><?php echo h($formVacate['FormVacate']['are_breaking_lease']); ?>&nbsp;</td>
		<td><?php echo h($formVacate['FormVacate']['contact_phone']); ?>&nbsp;</td>
		<td><?php echo h($formVacate['FormVacate']['email']); ?>&nbsp;</td>
		<td><?php echo h($formVacate['FormVacate']['reason_for_notice']); ?>&nbsp;</td>
		<td><?php echo h($formVacate['FormVacate']['forward_address']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formVacate['FormVacate']['form_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formVacate['FormVacate']['form_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formVacate['FormVacate']['form_id']), null, __('Are you sure you want to delete # %s?', $formVacate['FormVacate']['form_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Form Vacate'), array('action' => 'add')); ?></li>
	</ul>
</div>
