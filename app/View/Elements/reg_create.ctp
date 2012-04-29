
<div class="tab-content">
	<div id="step1">
		<?php echo $this->Form->create('AddContactForm', array('url' => array('controller' => 'Contacts', 'action' => 'propertyAlert'))); ?>
			<?php echo $msg2;?>
            
            <?php echo $this->Form->input('email', array('label' => 'Email Address', 'class' => 'mid', 'error' => false)); ?>
            <?php echo $this->Form->input('email_confirmation', array('label' => 'Confirm Email Address', 'class' => 'mid', 'error' => false)); ?>
            <?php echo $this->Form->input('title', array('label' => 'Title', 'class' => 'short', 'error' => false)); ?>
            <?php echo $this->Form->input('first_name', array('label' => 'First Name', 'class' => 'mid', 'error' => false)); ?>
            <?php echo $this->Form->input('last_name', array('label' => 'Last Name', 'class' => 'mid', 'error' => false)); ?>
            <?php echo $this->Form->input('address', array('label' => 'Your Address', 'class' => 'long', 'error' => false)); ?>
            
            <?php echo $this->Form->input('suburb_name', array('label' => 'Suburb', 'class' => 'mid', 'id' => 'Suburb', 'error' => false)); ?>
            <?php echo $this->Form->hidden('suburb_id', array('id' => 'suburb_id', 'error' => false, 'value'=>'0')); ?>
            
            <?php echo $this->Form->input('phone', array('label' => 'Home Phone', 'class' => 'mid', 'error' => false)); ?>
            <?php echo $this->Form->input('mobile', array('label' => 'Mobile', 'class' => 'mid', 'error' => false)); ?>
            
			
			<div id='new_passwd_div'>
            
            <?php echo $this->Form->input('password', array('label' => 'Password', 'class' => 'mid', 'error' => false)); ?>
            <?php echo $this->Form->input('password_confirmation', array('type'=>'password', 'label' => 'Confirm Password', 'class' => 'mid', 'error' => false)); ?>
			</div>
			<p><label>&nbsp;</label> <em>Please review your details above before proceeding. </em></p>            
			<?php echo $this->Form->input('Submit', array('type' => 'submit', 'class' => 'next_btn curvy-all', 'value'=>'Submit', 'label'=>'&nbsp;')); ?>
		<?php echo $this->Form->end(null); ?>
	</div>
</div>
</div>
