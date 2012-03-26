<div class="listings form">
<?php echo $this->Form->create('Listing');?>
	<fieldset>
		<legend><?php echo __('Add Listing'); ?></legend>
	<?php
		echo $this->Form->input('office_id');
		echo $this->Form->input('lt_uid');
		echo $this->Form->input('pj_id');
		echo $this->Form->input('db_status');
		echo $this->Form->input('lt_status');
		echo $this->Form->input('lt_catg');
		echo $this->Form->input('lt_trade');
		echo $this->Form->input('lt_hvset');
		echo $this->Form->input('lv_num');
		echo $this->Form->input('lot_num');
		echo $this->Form->input('unit_num');
		echo $this->Form->input('suite_num');
		echo $this->Form->input('street_num');
		echo $this->Form->input('street_name');
		echo $this->Form->input('street_type');
		echo $this->Form->input('address');
		echo $this->Form->input('suburb_id');
		echo $this->Form->input('suburb_name');
		echo $this->Form->input('region_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('lt_lat');
		echo $this->Form->input('lt_log');
		echo $this->Form->input('bed');
		echo $this->Form->input('bath');
		echo $this->Form->input('car');
		echo $this->Form->input('lt_facing');
		echo $this->Form->input('deposit_fee');
		echo $this->Form->input('deposit_pctg');
		echo $this->Form->input('deposit_type');
		echo $this->Form->input('land_size');
		echo $this->Form->input('build_size');
		echo $this->Form->input('external_size');
		echo $this->Form->input('frontage_size');
		echo $this->Form->input('price');
		echo $this->Form->input('rent_week');
		echo $this->Form->input('disp_price');
		echo $this->Form->input('disp_rent');
		echo $this->Form->input('landtax_pq');
		echo $this->Form->input('strata_pq');
		echo $this->Form->input('council_pq');
		echo $this->Form->input('water_pq');
		echo $this->Form->input('app_price');
		echo $this->Form->input('sold_price');
		echo $this->Form->input('comis_fee');
		echo $this->Form->input('comis_pctg');
		echo $this->Form->input('lt_headline');
		echo $this->Form->input('lt_features');
		echo $this->Form->input('lt_desp');
		echo $this->Form->input('lt_exp');
		echo $this->Form->input('lease_start');
		echo $this->Form->input('lease_end');
		echo $this->Form->input('auction_date');
		echo $this->Form->input('contract_expiry_date');
		echo $this->Form->input('listing_date');
		echo $this->Form->input('uncond_exchg_date');
		echo $this->Form->input('cond_exchg_date');
		echo $this->Form->input('contract_date');
		echo $this->Form->input('sold_date');
		echo $this->Form->input('settle_date');
		echo $this->Form->input('leased_date');
		echo $this->Form->input('cooling_off_date');
		echo $this->Form->input('on_market');
		echo $this->Form->input('off_market');
		echo $this->Form->input('first_created');
		echo $this->Form->input('last_mod');
		echo $this->Form->input('palert_mod');
		echo $this->Form->input('online_reason');
		echo $this->Form->input('offline_reason');
		echo $this->Form->input('exp_set');
		echo $this->Form->input('oexp_set');
		echo $this->Form->input('fset1');
		echo $this->Form->input('fset2');
		echo $this->Form->input('fset3');
		echo $this->Form->input('fset4');
		echo $this->Form->input('fset5');
		echo $this->Form->input('fset6');
		echo $this->Form->input('fset7');
		echo $this->Form->input('fset8');
		echo $this->Form->input('fset9');
		echo $this->Form->input('fset10');
		echo $this->Form->input('lt_catg_add');
		echo $this->Form->input('cset1');
		echo $this->Form->input('cset2');
		echo $this->Form->input('cset3');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Listings'), array('action' => 'index'));?></li>
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
