<div class="members view">
<h2><?php  echo __('Member');?></h2>
	<dl>
		<dt><?php echo __('Mem Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['mem_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Office Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['office_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Pos Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['job_pos_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($member['Member']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($member['Member']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Position'); ?></dt>
		<dd>
			<?php echo h($member['Member']['job_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($member['Member']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mem Photo'); ?></dt>
		<dd>
			<?php echo h($member['Member']['mem_photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($member['Member']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Created'); ?></dt>
		<dd>
			<?php echo h($member['Member']['first_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Mod'); ?></dt>
		<dd>
			<?php echo h($member['Member']['last_mod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mem Status'); ?></dt>
		<dd>
			<?php echo h($member['Member']['mem_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mem Uid'); ?></dt>
		<dd>
			<?php echo h($member['Member']['mem_uid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Title'); ?></dt>
		<dd>
			<?php echo h($member['Member']['job_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob'); ?></dt>
		<dd>
			<?php echo h($member['Member']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($member['Member']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exp Date'); ?></dt>
		<dd>
			<?php echo h($member['Member']['exp_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Set'); ?></dt>
		<dd>
			<?php echo h($member['Member']['display_set']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Set'); ?></dt>
		<dd>
			<?php echo h($member['Member']['team_set']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($member['Member']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile'); ?></dt>
		<dd>
			<?php echo h($member['Member']['profile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exval'); ?></dt>
		<dd>
			<?php echo h($member['Member']['exval']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cb Agent Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['cb_agent_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Split Pctg'); ?></dt>
		<dd>
			<?php echo h($member['Member']['split_pctg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Mem Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['sub_mem_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['mem_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['mem_id']), null, __('Are you sure you want to delete # %s?', $member['Member']['mem_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Listings'), array('controller' => 'listings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listing'), array('controller' => 'listings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Listings');?></h3>
	<?php if (!empty($member['Listing'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Lt Id'); ?></th>
		<th><?php echo __('Office Id'); ?></th>
		<th><?php echo __('Lt Uid'); ?></th>
		<th><?php echo __('Pj Id'); ?></th>
		<th><?php echo __('Db Status'); ?></th>
		<th><?php echo __('Lt Status'); ?></th>
		<th><?php echo __('Lt Catg'); ?></th>
		<th><?php echo __('Lt Trade'); ?></th>
		<th><?php echo __('Lt Hvset'); ?></th>
		<th><?php echo __('Lv Num'); ?></th>
		<th><?php echo __('Lot Num'); ?></th>
		<th><?php echo __('Unit Num'); ?></th>
		<th><?php echo __('Suite Num'); ?></th>
		<th><?php echo __('Street Num'); ?></th>
		<th><?php echo __('Street Name'); ?></th>
		<th><?php echo __('Street Type'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Suburb Id'); ?></th>
		<th><?php echo __('Suburb Name'); ?></th>
		<th><?php echo __('Region Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Lt Lat'); ?></th>
		<th><?php echo __('Lt Log'); ?></th>
		<th><?php echo __('Bed'); ?></th>
		<th><?php echo __('Bath'); ?></th>
		<th><?php echo __('Car'); ?></th>
		<th><?php echo __('Lt Facing'); ?></th>
		<th><?php echo __('Deposit Fee'); ?></th>
		<th><?php echo __('Deposit Pctg'); ?></th>
		<th><?php echo __('Deposit Type'); ?></th>
		<th><?php echo __('Land Size'); ?></th>
		<th><?php echo __('Build Size'); ?></th>
		<th><?php echo __('External Size'); ?></th>
		<th><?php echo __('Frontage Size'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Rent Week'); ?></th>
		<th><?php echo __('Disp Price'); ?></th>
		<th><?php echo __('Disp Rent'); ?></th>
		<th><?php echo __('Landtax Pq'); ?></th>
		<th><?php echo __('Strata Pq'); ?></th>
		<th><?php echo __('Council Pq'); ?></th>
		<th><?php echo __('Water Pq'); ?></th>
		<th><?php echo __('App Price'); ?></th>
		<th><?php echo __('Sold Price'); ?></th>
		<th><?php echo __('Comis Fee'); ?></th>
		<th><?php echo __('Comis Pctg'); ?></th>
		<th><?php echo __('Lt Headline'); ?></th>
		<th><?php echo __('Lt Features'); ?></th>
		<th><?php echo __('Lt Desp'); ?></th>
		<th><?php echo __('Lt Exp'); ?></th>
		<th><?php echo __('Lease Start'); ?></th>
		<th><?php echo __('Lease End'); ?></th>
		<th><?php echo __('Auction Date'); ?></th>
		<th><?php echo __('Contract Expiry Date'); ?></th>
		<th><?php echo __('Listing Date'); ?></th>
		<th><?php echo __('Uncond Exchg Date'); ?></th>
		<th><?php echo __('Cond Exchg Date'); ?></th>
		<th><?php echo __('Contract Date'); ?></th>
		<th><?php echo __('Sold Date'); ?></th>
		<th><?php echo __('Settle Date'); ?></th>
		<th><?php echo __('Leased Date'); ?></th>
		<th><?php echo __('Cooling Off Date'); ?></th>
		<th><?php echo __('On Market'); ?></th>
		<th><?php echo __('Off Market'); ?></th>
		<th><?php echo __('First Created'); ?></th>
		<th><?php echo __('Last Mod'); ?></th>
		<th><?php echo __('Palert Mod'); ?></th>
		<th><?php echo __('Online Reason'); ?></th>
		<th><?php echo __('Offline Reason'); ?></th>
		<th><?php echo __('Exp Set'); ?></th>
		<th><?php echo __('Oexp Set'); ?></th>
		<th><?php echo __('Fset1'); ?></th>
		<th><?php echo __('Fset2'); ?></th>
		<th><?php echo __('Fset3'); ?></th>
		<th><?php echo __('Fset4'); ?></th>
		<th><?php echo __('Fset5'); ?></th>
		<th><?php echo __('Fset6'); ?></th>
		<th><?php echo __('Fset7'); ?></th>
		<th><?php echo __('Fset8'); ?></th>
		<th><?php echo __('Fset9'); ?></th>
		<th><?php echo __('Fset10'); ?></th>
		<th><?php echo __('Lt Catg Add'); ?></th>
		<th><?php echo __('Cset1'); ?></th>
		<th><?php echo __('Cset2'); ?></th>
		<th><?php echo __('Cset3'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['Listing'] as $listing): ?>
		<tr>
			<td><?php echo $listing['lt_id'];?></td>
			<td><?php echo $listing['office_id'];?></td>
			<td><?php echo $listing['lt_uid'];?></td>
			<td><?php echo $listing['pj_id'];?></td>
			<td><?php echo $listing['db_status'];?></td>
			<td><?php echo $listing['lt_status'];?></td>
			<td><?php echo $listing['lt_catg'];?></td>
			<td><?php echo $listing['lt_trade'];?></td>
			<td><?php echo $listing['lt_hvset'];?></td>
			<td><?php echo $listing['lv_num'];?></td>
			<td><?php echo $listing['lot_num'];?></td>
			<td><?php echo $listing['unit_num'];?></td>
			<td><?php echo $listing['suite_num'];?></td>
			<td><?php echo $listing['street_num'];?></td>
			<td><?php echo $listing['street_name'];?></td>
			<td><?php echo $listing['street_type'];?></td>
			<td><?php echo $listing['address'];?></td>
			<td><?php echo $listing['suburb_id'];?></td>
			<td><?php echo $listing['suburb_name'];?></td>
			<td><?php echo $listing['region_id'];?></td>
			<td><?php echo $listing['state_id'];?></td>
			<td><?php echo $listing['lt_lat'];?></td>
			<td><?php echo $listing['lt_log'];?></td>
			<td><?php echo $listing['bed'];?></td>
			<td><?php echo $listing['bath'];?></td>
			<td><?php echo $listing['car'];?></td>
			<td><?php echo $listing['lt_facing'];?></td>
			<td><?php echo $listing['deposit_fee'];?></td>
			<td><?php echo $listing['deposit_pctg'];?></td>
			<td><?php echo $listing['deposit_type'];?></td>
			<td><?php echo $listing['land_size'];?></td>
			<td><?php echo $listing['build_size'];?></td>
			<td><?php echo $listing['external_size'];?></td>
			<td><?php echo $listing['frontage_size'];?></td>
			<td><?php echo $listing['price'];?></td>
			<td><?php echo $listing['rent_week'];?></td>
			<td><?php echo $listing['disp_price'];?></td>
			<td><?php echo $listing['disp_rent'];?></td>
			<td><?php echo $listing['landtax_pq'];?></td>
			<td><?php echo $listing['strata_pq'];?></td>
			<td><?php echo $listing['council_pq'];?></td>
			<td><?php echo $listing['water_pq'];?></td>
			<td><?php echo $listing['app_price'];?></td>
			<td><?php echo $listing['sold_price'];?></td>
			<td><?php echo $listing['comis_fee'];?></td>
			<td><?php echo $listing['comis_pctg'];?></td>
			<td><?php echo $listing['lt_headline'];?></td>
			<td><?php echo $listing['lt_features'];?></td>
			<td><?php echo $listing['lt_desp'];?></td>
			<td><?php echo $listing['lt_exp'];?></td>
			<td><?php echo $listing['lease_start'];?></td>
			<td><?php echo $listing['lease_end'];?></td>
			<td><?php echo $listing['auction_date'];?></td>
			<td><?php echo $listing['contract_expiry_date'];?></td>
			<td><?php echo $listing['listing_date'];?></td>
			<td><?php echo $listing['uncond_exchg_date'];?></td>
			<td><?php echo $listing['cond_exchg_date'];?></td>
			<td><?php echo $listing['contract_date'];?></td>
			<td><?php echo $listing['sold_date'];?></td>
			<td><?php echo $listing['settle_date'];?></td>
			<td><?php echo $listing['leased_date'];?></td>
			<td><?php echo $listing['cooling_off_date'];?></td>
			<td><?php echo $listing['on_market'];?></td>
			<td><?php echo $listing['off_market'];?></td>
			<td><?php echo $listing['first_created'];?></td>
			<td><?php echo $listing['last_mod'];?></td>
			<td><?php echo $listing['palert_mod'];?></td>
			<td><?php echo $listing['online_reason'];?></td>
			<td><?php echo $listing['offline_reason'];?></td>
			<td><?php echo $listing['exp_set'];?></td>
			<td><?php echo $listing['oexp_set'];?></td>
			<td><?php echo $listing['fset1'];?></td>
			<td><?php echo $listing['fset2'];?></td>
			<td><?php echo $listing['fset3'];?></td>
			<td><?php echo $listing['fset4'];?></td>
			<td><?php echo $listing['fset5'];?></td>
			<td><?php echo $listing['fset6'];?></td>
			<td><?php echo $listing['fset7'];?></td>
			<td><?php echo $listing['fset8'];?></td>
			<td><?php echo $listing['fset9'];?></td>
			<td><?php echo $listing['fset10'];?></td>
			<td><?php echo $listing['lt_catg_add'];?></td>
			<td><?php echo $listing['cset1'];?></td>
			<td><?php echo $listing['cset2'];?></td>
			<td><?php echo $listing['cset3'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'listings', 'action' => 'view', $listing['lt_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'listings', 'action' => 'edit', $listing['lt_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'listings', 'action' => 'delete', $listing['lt_id']), null, __('Are you sure you want to delete # %s?', $listing['lt_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Listing'), array('controller' => 'listings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
