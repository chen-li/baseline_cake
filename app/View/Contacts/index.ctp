<div class="contacts index">
	<h2><?php echo __('Contacts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cid');?></th>
			<th><?php echo $this->Paginator->sort('c_uid');?></th>
			<th><?php echo $this->Paginator->sort('created_frm');?></th>
			<th><?php echo $this->Paginator->sort('share_all');?></th>
			<th><?php echo $this->Paginator->sort('c_origin');?></th>
			<th><?php echo $this->Paginator->sort('c_hvset');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('salute');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('mobile');?></th>
			<th><?php echo $this->Paginator->sort('bus_phone');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('company_name');?></th>
			<th><?php echo $this->Paginator->sort('job_position');?></th>
			<th><?php echo $this->Paginator->sort('abn_acn');?></th>
			<th><?php echo $this->Paginator->sort('trading_name');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('region_id');?></th>
			<th><?php echo $this->Paginator->sort('suburb_id');?></th>
			<th><?php echo $this->Paginator->sort('suburb_name');?></th>
			<th><?php echo $this->Paginator->sort('state_id');?></th>
			<th><?php echo $this->Paginator->sort('country_id');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th><?php echo $this->Paginator->sort('croles_txt');?></th>
			<th><?php echo $this->Paginator->sort('first_created');?></th>
			<th><?php echo $this->Paginator->sort('last_mod');?></th>
			<th><?php echo $this->Paginator->sort('mailing_set');?></th>
			<th><?php echo $this->Paginator->sort('c_status');?></th>
			<th><?php echo $this->Paginator->sort('office_id');?></th>
			<th><?php echo $this->Paginator->sort('anniv_date');?></th>
			<th><?php echo $this->Paginator->sort('c_method');?></th>
			<th><?php echo $this->Paginator->sort('rset1');?></th>
			<th><?php echo $this->Paginator->sort('rset2');?></th>
			<th><?php echo $this->Paginator->sort('rset3');?></th>
			<th><?php echo $this->Paginator->sort('rset4');?></th>
			<th><?php echo $this->Paginator->sort('rset5');?></th>
			<th><?php echo $this->Paginator->sort('rset6');?></th>
			<th><?php echo $this->Paginator->sort('rset7');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo h($contact['Contact']['cid']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['c_uid']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['created_frm']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['share_all']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['c_origin']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['c_hvset']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['title']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['salute']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['email']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['bus_phone']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['password']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['company_name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['job_position']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['abn_acn']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['trading_name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['address']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['region_id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['suburb_id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['suburb_name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['state_id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['country_id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['fax']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['notes']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['croles_txt']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['first_created']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['last_mod']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['mailing_set']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['c_status']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['office_id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['anniv_date']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['c_method']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['rset1']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['rset2']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['rset3']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['rset4']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['rset5']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['rset6']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['rset7']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contact['Contact']['cid'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contact['Contact']['cid'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contact['Contact']['cid']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['cid'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?></li>
	</ul>
</div>
