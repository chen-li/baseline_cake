<div class="formAppraisals view">
<h2><?php  echo __('Form Appraisal');?></h2>
	<dl>
		<dt><?php echo __('Form Id'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['form_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appraisal Type'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['appraisal_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Day Time Phone'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['day_time_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Unit Number'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['street_unit_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Name'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['street_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Type'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['property_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Bedrooms'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['number_bedrooms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Living Areas'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['living_areas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Status'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['property_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Construction Type'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['construction_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Bathrooms'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['number_bathrooms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Outdoor Living Areas'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['outdoor_living_areas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parking'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['parking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Air Conditioning'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['air_conditioning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Condition'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['property_condition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pool'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['pool']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Renovated'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['property_renovated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Description'); ?></dt>
		<dd>
			<?php echo h($formAppraisal['FormAppraisal']['property_description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form Appraisal'), array('action' => 'edit', $formAppraisal['FormAppraisal']['form_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form Appraisal'), array('action' => 'delete', $formAppraisal['FormAppraisal']['form_id']), null, __('Are you sure you want to delete # %s?', $formAppraisal['FormAppraisal']['form_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Appraisals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Appraisal'), array('action' => 'add')); ?> </li>
	</ul>
</div>
