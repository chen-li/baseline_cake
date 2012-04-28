<div class="formVacates view">
<h2><?php  echo __('Form Vacate');?></h2>
	<dl>
		<dt><?php echo __('Form Id'); ?></dt>
		<dd>
			<?php echo h($formVacate['FormVacate']['form_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tenant Name'); ?></dt>
		<dd>
			<?php echo h($formVacate['FormVacate']['tenant_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Address'); ?></dt>
		<dd>
			<?php echo h($formVacate['FormVacate']['property_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vacate Date'); ?></dt>
		<dd>
			<?php echo h($formVacate['FormVacate']['vacate_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Are Breaking Lease'); ?></dt>
		<dd>
			<?php echo h($formVacate['FormVacate']['are_breaking_lease']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Phone'); ?></dt>
		<dd>
			<?php echo h($formVacate['FormVacate']['contact_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($formVacate['FormVacate']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason For Notice'); ?></dt>
		<dd>
			<?php echo h($formVacate['FormVacate']['reason_for_notice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forward Address'); ?></dt>
		<dd>
			<?php echo h($formVacate['FormVacate']['forward_address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form Vacate'), array('action' => 'edit', $formVacate['FormVacate']['form_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form Vacate'), array('action' => 'delete', $formVacate['FormVacate']['form_id']), null, __('Are you sure you want to delete # %s?', $formVacate['FormVacate']['form_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Vacates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Vacate'), array('action' => 'add')); ?> </li>
	</ul>
</div>
