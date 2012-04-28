<div class="formContacts view">
<h2><?php  echo __('Form Contact');?></h2>
	<dl>
		<dt><?php echo __('Form Id'); ?></dt>
		<dd>
			<?php echo h($formContact['FormContact']['form_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regarding'); ?></dt>
		<dd>
			<?php echo h($formContact['FormContact']['regarding']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($formContact['FormContact']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($formContact['FormContact']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($formContact['FormContact']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($formContact['FormContact']['comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form Contact'), array('action' => 'edit', $formContact['FormContact']['form_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form Contact'), array('action' => 'delete', $formContact['FormContact']['form_id']), null, __('Are you sure you want to delete # %s?', $formContact['FormContact']['form_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Contact'), array('action' => 'add')); ?> </li>
	</ul>
</div>
