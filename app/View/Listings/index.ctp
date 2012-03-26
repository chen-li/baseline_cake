<div class="listings index">
	<h2><?php echo __('Listings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('lt_id');?></th>
			<th><?php echo $this->Paginator->sort('office_id');?></th>
			<th><?php echo $this->Paginator->sort('lt_uid');?></th>
			<th><?php echo $this->Paginator->sort('pj_id');?></th>
			<th><?php echo $this->Paginator->sort('db_status');?></th>
			<th><?php echo $this->Paginator->sort('lt_status');?></th>
			<th><?php echo $this->Paginator->sort('lt_catg');?></th>
			<th><?php echo $this->Paginator->sort('lt_trade');?></th>
			<th><?php echo $this->Paginator->sort('lt_hvset');?></th>
			<th><?php echo $this->Paginator->sort('lv_num');?></th>
			<th><?php echo $this->Paginator->sort('lot_num');?></th>
			<th><?php echo $this->Paginator->sort('unit_num');?></th>
			<th><?php echo $this->Paginator->sort('suite_num');?></th>
			<th><?php echo $this->Paginator->sort('street_num');?></th>
			<th><?php echo $this->Paginator->sort('street_name');?></th>
			<th><?php echo $this->Paginator->sort('street_type');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('suburb_id');?></th>
			<th><?php echo $this->Paginator->sort('suburb_name');?></th>
			<th><?php echo $this->Paginator->sort('region_id');?></th>
			<th><?php echo $this->Paginator->sort('state_id');?></th>
			<th><?php echo $this->Paginator->sort('lt_lat');?></th>
			<th><?php echo $this->Paginator->sort('lt_log');?></th>
			<th><?php echo $this->Paginator->sort('bed');?></th>
			<th><?php echo $this->Paginator->sort('bath');?></th>
			<th><?php echo $this->Paginator->sort('car');?></th>
			<th><?php echo $this->Paginator->sort('lt_facing');?></th>
			<th><?php echo $this->Paginator->sort('deposit_fee');?></th>
			<th><?php echo $this->Paginator->sort('deposit_pctg');?></th>
			<th><?php echo $this->Paginator->sort('deposit_type');?></th>
			<th><?php echo $this->Paginator->sort('land_size');?></th>
			<th><?php echo $this->Paginator->sort('build_size');?></th>
			<th><?php echo $this->Paginator->sort('external_size');?></th>
			<th><?php echo $this->Paginator->sort('frontage_size');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th><?php echo $this->Paginator->sort('rent_week');?></th>
			<th><?php echo $this->Paginator->sort('disp_price');?></th>
			<th><?php echo $this->Paginator->sort('disp_rent');?></th>
			<th><?php echo $this->Paginator->sort('landtax_pq');?></th>
			<th><?php echo $this->Paginator->sort('strata_pq');?></th>
			<th><?php echo $this->Paginator->sort('council_pq');?></th>
			<th><?php echo $this->Paginator->sort('water_pq');?></th>
			<th><?php echo $this->Paginator->sort('app_price');?></th>
			<th><?php echo $this->Paginator->sort('sold_price');?></th>
			<th><?php echo $this->Paginator->sort('comis_fee');?></th>
			<th><?php echo $this->Paginator->sort('comis_pctg');?></th>
			<th><?php echo $this->Paginator->sort('lt_headline');?></th>
			<th><?php echo $this->Paginator->sort('lt_features');?></th>
			<th><?php echo $this->Paginator->sort('lt_desp');?></th>
			<th><?php echo $this->Paginator->sort('lt_exp');?></th>
			<th><?php echo $this->Paginator->sort('lease_start');?></th>
			<th><?php echo $this->Paginator->sort('lease_end');?></th>
			<th><?php echo $this->Paginator->sort('auction_date');?></th>
			<th><?php echo $this->Paginator->sort('contract_expiry_date');?></th>
			<th><?php echo $this->Paginator->sort('listing_date');?></th>
			<th><?php echo $this->Paginator->sort('uncond_exchg_date');?></th>
			<th><?php echo $this->Paginator->sort('cond_exchg_date');?></th>
			<th><?php echo $this->Paginator->sort('contract_date');?></th>
			<th><?php echo $this->Paginator->sort('sold_date');?></th>
			<th><?php echo $this->Paginator->sort('settle_date');?></th>
			<th><?php echo $this->Paginator->sort('leased_date');?></th>
			<th><?php echo $this->Paginator->sort('cooling_off_date');?></th>
			<th><?php echo $this->Paginator->sort('on_market');?></th>
			<th><?php echo $this->Paginator->sort('off_market');?></th>
			<th><?php echo $this->Paginator->sort('first_created');?></th>
			<th><?php echo $this->Paginator->sort('last_mod');?></th>
			<th><?php echo $this->Paginator->sort('palert_mod');?></th>
			<th><?php echo $this->Paginator->sort('online_reason');?></th>
			<th><?php echo $this->Paginator->sort('offline_reason');?></th>
			<th><?php echo $this->Paginator->sort('exp_set');?></th>
			<th><?php echo $this->Paginator->sort('oexp_set');?></th>
			<th><?php echo $this->Paginator->sort('fset1');?></th>
			<th><?php echo $this->Paginator->sort('fset2');?></th>
			<th><?php echo $this->Paginator->sort('fset3');?></th>
			<th><?php echo $this->Paginator->sort('fset4');?></th>
			<th><?php echo $this->Paginator->sort('fset5');?></th>
			<th><?php echo $this->Paginator->sort('fset6');?></th>
			<th><?php echo $this->Paginator->sort('fset7');?></th>
			<th><?php echo $this->Paginator->sort('fset8');?></th>
			<th><?php echo $this->Paginator->sort('fset9');?></th>
			<th><?php echo $this->Paginator->sort('fset10');?></th>
			<th><?php echo $this->Paginator->sort('lt_catg_add');?></th>
			<th><?php echo $this->Paginator->sort('cset1');?></th>
			<th><?php echo $this->Paginator->sort('cset2');?></th>
			<th><?php echo $this->Paginator->sort('cset3');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($listings as $listing): ?>
	<tr>
		<td><?php echo h($listing['Listing']['lt_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($listing['Office'][''], array('controller' => 'offices', 'action' => 'view', $listing['Office']['id'])); ?>
		</td>
		<td><?php echo h($listing['Listing']['lt_uid']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['pj_id']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['db_status']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lt_status']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lt_catg']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lt_trade']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lt_hvset']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lv_num']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lot_num']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['unit_num']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['suite_num']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['street_num']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['street_name']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['street_type']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['address']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($listing['Suburb'][''], array('controller' => 'suburbs', 'action' => 'view', $listing['Suburb']['id'])); ?>
		</td>
		<td><?php echo h($listing['Listing']['suburb_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($listing['Region'][''], array('controller' => 'regions', 'action' => 'view', $listing['Region']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($listing['State'][''], array('controller' => 'states', 'action' => 'view', $listing['State']['id'])); ?>
		</td>
		<td><?php echo h($listing['Listing']['lt_lat']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lt_log']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['bed']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['bath']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['car']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lt_facing']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['deposit_fee']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['deposit_pctg']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['deposit_type']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['land_size']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['build_size']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['external_size']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['frontage_size']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['price']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['rent_week']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['disp_price']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['disp_rent']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['landtax_pq']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['strata_pq']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['council_pq']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['water_pq']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['app_price']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['sold_price']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['comis_fee']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['comis_pctg']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lt_headline']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lt_features']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lt_desp']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lt_exp']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lease_start']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lease_end']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['auction_date']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['contract_expiry_date']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['listing_date']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['uncond_exchg_date']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['cond_exchg_date']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['contract_date']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['sold_date']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['settle_date']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['leased_date']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['cooling_off_date']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['on_market']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['off_market']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['first_created']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['last_mod']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['palert_mod']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['online_reason']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['offline_reason']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['exp_set']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['oexp_set']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['fset1']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['fset2']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['fset3']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['fset4']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['fset5']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['fset6']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['fset7']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['fset8']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['fset9']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['fset10']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['lt_catg_add']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['cset1']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['cset2']); ?>&nbsp;</td>
		<td><?php echo h($listing['Listing']['cset3']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $listing['Listing']['lt_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $listing['Listing']['lt_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $listing['Listing']['lt_id']), null, __('Are you sure you want to delete # %s?', $listing['Listing']['lt_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Listing'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Suburbs'), array('controller' => 'suburbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Suburb'), array('controller' => 'suburbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
	</ul>
</div>
