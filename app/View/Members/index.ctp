<div class="members index">
	<h2><?php echo __('Members');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('mem_id');?></th>
			<th><?php echo $this->Paginator->sort('office_id');?></th>
			<th><?php echo $this->Paginator->sort('job_pos_id');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('mobile');?></th>
			<th><?php echo $this->Paginator->sort('job_position');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('mem_photo');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th><?php echo $this->Paginator->sort('first_created');?></th>
			<th><?php echo $this->Paginator->sort('last_mod');?></th>
			<th><?php echo $this->Paginator->sort('mem_status');?></th>
			<th><?php echo $this->Paginator->sort('mem_uid');?></th>
			<th><?php echo $this->Paginator->sort('job_title');?></th>
			<th><?php echo $this->Paginator->sort('dob');?></th>
			<th><?php echo $this->Paginator->sort('start_date');?></th>
			<th><?php echo $this->Paginator->sort('exp_date');?></th>
			<th><?php echo $this->Paginator->sort('display_set');?></th>
			<th><?php echo $this->Paginator->sort('team_set');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('profile');?></th>
			<th><?php echo $this->Paginator->sort('exval');?></th>
			<th><?php echo $this->Paginator->sort('cb_agent_id');?></th>
			<th><?php echo $this->Paginator->sort('split_pctg');?></th>
			<th><?php echo $this->Paginator->sort('sub_mem_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($members as $member): ?>
	<tr>
		<td><?php echo h($member['Member']['mem_id']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['office_id']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['job_pos_id']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['email']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['phone']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['job_position']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['fax']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['mem_photo']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['notes']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['first_created']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['last_mod']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['mem_status']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['mem_uid']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['job_title']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['dob']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['exp_date']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['display_set']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['team_set']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['address']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['profile']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['exval']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['cb_agent_id']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['split_pctg']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['sub_mem_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['mem_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['mem_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['mem_id']), null, __('Are you sure you want to delete # %s?', $member['Member']['mem_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Listings'), array('controller' => 'listings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listing'), array('controller' => 'listings', 'action' => 'add')); ?> </li>
	</ul>
</div>
