<div class="formAppraisals index">
	<h2><?php echo __('Form Appraisals');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('form_id');?></th>
			<th><?php echo $this->Paginator->sort('appraisal_type');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('day_time_phone');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('mobile');?></th>
			<th><?php echo $this->Paginator->sort('street_unit_number');?></th>
			<th><?php echo $this->Paginator->sort('street_name');?></th>
			<th><?php echo $this->Paginator->sort('state');?></th>
			<th><?php echo $this->Paginator->sort('property_type');?></th>
			<th><?php echo $this->Paginator->sort('age');?></th>
			<th><?php echo $this->Paginator->sort('number_bedrooms');?></th>
			<th><?php echo $this->Paginator->sort('living_areas');?></th>
			<th><?php echo $this->Paginator->sort('suburb');?></th>
			<th><?php echo $this->Paginator->sort('property_status');?></th>
			<th><?php echo $this->Paginator->sort('construction_type');?></th>
			<th><?php echo $this->Paginator->sort('number_bathrooms');?></th>
			<th><?php echo $this->Paginator->sort('outdoor_living_areas');?></th>
			<th><?php echo $this->Paginator->sort('parking');?></th>
			<th><?php echo $this->Paginator->sort('air_conditioning');?></th>
			<th><?php echo $this->Paginator->sort('property_condition');?></th>
			<th><?php echo $this->Paginator->sort('pool');?></th>
			<th><?php echo $this->Paginator->sort('property_renovated');?></th>
			<th><?php echo $this->Paginator->sort('property_description');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($formAppraisals as $formAppraisal): ?>
	<tr>
		<td><?php echo h($formAppraisal['FormAppraisal']['form_id']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['appraisal_type']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['title']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['day_time_phone']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['email']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['street_unit_number']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['street_name']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['state']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['property_type']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['age']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['number_bedrooms']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['living_areas']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['suburb']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['property_status']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['construction_type']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['number_bathrooms']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['outdoor_living_areas']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['parking']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['air_conditioning']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['property_condition']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['pool']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['property_renovated']); ?>&nbsp;</td>
		<td><?php echo h($formAppraisal['FormAppraisal']['property_description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formAppraisal['FormAppraisal']['form_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formAppraisal['FormAppraisal']['form_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formAppraisal['FormAppraisal']['form_id']), null, __('Are you sure you want to delete # %s?', $formAppraisal['FormAppraisal']['form_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Form Appraisal'), array('action' => 'add')); ?></li>
	</ul>
</div>
