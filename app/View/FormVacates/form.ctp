<?php echo $this->Html->script(array('forms')); ?>
<?php echo $this->Html->css(array('forms')); ?>

<h1>Vacate Notice</h1>
<div id="free-text">
	<p>Please notify us with following details if you wish to vacate the property you are leasing from us. Minimum 21 days notice is required if your fixed term lease has expired OR minimum 14 days notice is required to the end of your fixed term lease.</p>
</div>
<?php echo $msg;?>

<?php echo $this->Form->create(null, array('url' => array('controller' => 'FormVacates', 'action' => 'form'))); ?>
<h2>Your Details</h2>

    <?php echo $this->Form->input('tenant_name', array('label' => 'Tenant(s) Name(s)', 'class' => 'long', 'error' => false)); ?>
    <?php echo $this->Form->input('property_address', array('label' => "Property Address", 'class' => 'long', 'error' => false)); ?>
    <?php echo $this->Form->input('vacate_date', array('label' => "On the Vacating Date", 'class' => 'long', 'error' => false)); ?>
    <?php echo $this->Form->input('are_breaking_lease', array('options' => array(
			'Yes' => 'Yes',
			'No' => 'No'
	), 'type' => 'radio', 'error' => false));?>
    <?php echo $this->Form->input('contact_phone', array('label' => 'Contact Phone', 'class' => 'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('email', array('label' => 'Email', 'class' => 'mid', 'error' => false)); ?>
    <div class="input">
        <label>Reason for Notice</label>
        <?php echo $this->Form->textarea('reason_for_notice', array('class' => 'long', 'error' => false)); ?>
    </div>
    <?php echo $this->Form->input('forward_address', array('label' => 'Forwarding Address', 'class' => 'long', 'error' => false)); ?>

	<label>&nbsp;</label>
	<?php echo $this->Form->input('Submit', array('type' => 'submit', 'class' => 'submit_btn', 'value'=>'Submit', 'label'=>false)); ?>
	<?php echo $this->Form->input('Reset', array('type' => 'reset', 'class' => 'reset_btn', 'value'=>'Reset', 'label'=>false)); ?>
    
<?php echo $this->Form->end(null); ?>