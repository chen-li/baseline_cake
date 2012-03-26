<div class="listings view">
<h2><?php  echo __('Listing');?></h2>
	<dl>
		<dt><?php echo __('Lt Id'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Office'); ?></dt>
		<dd>
			<?php echo $this->Html->link($listing['Office'][''], array('controller' => 'offices', 'action' => 'view', $listing['Office']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Uid'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_uid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pj Id'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['pj_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Db Status'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['db_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Status'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Catg'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_catg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Trade'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_trade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Hvset'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_hvset']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lv Num'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lv_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lot Num'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lot_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Num'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['unit_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suite Num'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['suite_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Num'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['street_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Name'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['street_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Type'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['street_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo $this->Html->link($listing['Suburb'][''], array('controller' => 'suburbs', 'action' => 'view', $listing['Suburb']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb Name'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['suburb_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo $this->Html->link($listing['Region'][''], array('controller' => 'regions', 'action' => 'view', $listing['Region']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo $this->Html->link($listing['State'][''], array('controller' => 'states', 'action' => 'view', $listing['State']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Lat'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Log'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_log']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bed'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['bed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bath'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['bath']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Car'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['car']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Facing'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_facing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deposit Fee'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['deposit_fee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deposit Pctg'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['deposit_pctg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deposit Type'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['deposit_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Land Size'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['land_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Build Size'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['build_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('External Size'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['external_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Frontage Size'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['frontage_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rent Week'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['rent_week']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disp Price'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['disp_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disp Rent'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['disp_rent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Landtax Pq'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['landtax_pq']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Strata Pq'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['strata_pq']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Council Pq'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['council_pq']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Water Pq'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['water_pq']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('App Price'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['app_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sold Price'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['sold_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comis Fee'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['comis_fee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comis Pctg'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['comis_pctg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Headline'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_headline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Features'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_features']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Desp'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_desp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Exp'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_exp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lease Start'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lease_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lease End'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lease_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Auction Date'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['auction_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contract Expiry Date'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['contract_expiry_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Listing Date'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['listing_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uncond Exchg Date'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['uncond_exchg_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cond Exchg Date'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['cond_exchg_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contract Date'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['contract_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sold Date'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['sold_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Settle Date'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['settle_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leased Date'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['leased_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cooling Off Date'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['cooling_off_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('On Market'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['on_market']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Off Market'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['off_market']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Created'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['first_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Mod'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['last_mod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Palert Mod'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['palert_mod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Online Reason'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['online_reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Offline Reason'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['offline_reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exp Set'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['exp_set']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oexp Set'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['oexp_set']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fset1'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['fset1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fset2'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['fset2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fset3'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['fset3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fset4'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['fset4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fset5'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['fset5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fset6'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['fset6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fset7'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['fset7']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fset8'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['fset8']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fset9'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['fset9']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fset10'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['fset10']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lt Catg Add'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['lt_catg_add']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cset1'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['cset1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cset2'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['cset2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cset3'); ?></dt>
		<dd>
			<?php echo h($listing['Listing']['cset3']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Listing'), array('action' => 'edit', $listing['Listing']['lt_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Listing'), array('action' => 'delete', $listing['Listing']['lt_id']), null, __('Are you sure you want to delete # %s?', $listing['Listing']['lt_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Listings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listing'), array('action' => 'add')); ?> </li>
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
