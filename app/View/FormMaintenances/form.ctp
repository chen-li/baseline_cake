<?php echo $this->Html->script(array('forms')); ?>
<?php echo $this->Html->css(array('forms')); ?>

<h1>Maintenance Request</h1>
<div id="free-text">
	<p>For general maintenance requested please complete &amp; submit the form below providing as much information of the repairs as possible. Maintenance, unless urgent, is given to tradesmen by the end of the following business day.</p>

    <p>If the damage is found to be caused by the tenant either accidently or maliciously, the tenant is responsible for payment of the repair. The cost will be debited from the tenant's rental account after 30 day notice.</p>
    
    <p>In the event of an urgent repair ring our office immediately and we shall attend to your problem as quickly as possible. If it is outside business hours then you should take what ever action is necessary to protect your goods and the property from further damage.</p>
    
    <p>As per your lease agreement the method of access by a tradesman to your property is by use of management keys. They will call your prior to attending on the number you have supplied above.</p>
</div>
<?php echo $msg;?>

<?php echo $this->Form->create(null, array('url' => array('controller' => 'FormMaintenances', 'action' => 'form'))); ?>
<h2>Your Details</h2>

    <?php echo $this->Form->input('date', array('label' => 'Date', 'class' => 'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('name', array('label' => "Tenant's Name", 'class' => 'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('address', array('label' => "Tenant's Address", 'class' => 'long', 'error' => false)); ?>
    <?php echo $this->Form->input('contact_phone', array('label' => 'Contact Phone', 'class' => 'mid', 'error' => false)); ?>
    <?php echo $this->Form->input('email', array('label' => 'Email', 'class' => 'mid', 'error' => false)); ?>
    
<h2>Maintenance Details</h2>
    <?php echo $this->Form->input('manager', array('label' => 'Property Manager', 'class' => 'mid', 'error' => false)); ?>
    <div class="input">
        <label>Repairs Required</label>
        <?php echo $this->Form->textarea('repairs_required', array('class' => 'long', 'error' => false)); ?>
    </div>

	<label>&nbsp;</label>
	<?php echo $this->Form->input('Submit', array('type' => 'submit', 'class' => 'submit_btn', 'value'=>'Submit', 'label'=>false)); ?>
	<?php echo $this->Form->input('Reset', array('type' => 'reset', 'class' => 'reset_btn', 'value'=>'Reset', 'label'=>false)); ?>
    
<?php echo $this->Form->end(null); ?>