<div class="contacts form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
		<legend><?php echo __('Add Contact'); ?></legend>
	<?php
		echo $this->Form->input('c_uid');
		echo $this->Form->input('created_frm');
		echo $this->Form->input('share_all');
		echo $this->Form->input('c_origin');
		echo $this->Form->input('c_hvset');
		echo $this->Form->input('title');
		echo $this->Form->input('salute');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('mobile');
		echo $this->Form->input('bus_phone');
		echo $this->Form->input('password');
		echo $this->Form->input('company_name');
		echo $this->Form->input('job_position');
		echo $this->Form->input('abn_acn');
		echo $this->Form->input('trading_name');
		echo $this->Form->input('address');
		echo $this->Form->input('region_id');
		echo $this->Form->input('suburb_id');
		echo $this->Form->input('suburb_name');
		echo $this->Form->input('state_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('fax');
		echo $this->Form->input('notes');
		echo $this->Form->input('croles_txt');
		echo $this->Form->input('first_created');
		echo $this->Form->input('last_mod');
		echo $this->Form->input('mailing_set');
		echo $this->Form->input('c_status');
		echo $this->Form->input('office_id');
		echo $this->Form->input('anniv_date');
		echo $this->Form->input('c_method');
		echo $this->Form->input('rset1');
		echo $this->Form->input('rset2');
		echo $this->Form->input('rset3');
		echo $this->Form->input('rset4');
		echo $this->Form->input('rset5');
		echo $this->Form->input('rset6');
		echo $this->Form->input('rset7');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index'));?></li>
	</ul>
</div>
