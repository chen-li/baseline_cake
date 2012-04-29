<h1>Property Alert</h1>
<div id="free-text" class="free-text">
        <div id="login">
        <h2>Member Login</h2>
        <div id="login-form">
        <?php echo $msg;?>
        <?php echo $this->Form->create('LoginContactForm', array('url' => array('controller' => 'Contacts', 'action' => 'propertyAlert'))); ?>
            <p class="message">Already a Member? Login Below:</p>
            <?php echo $this->Form->input('username', array('label' => 'Email', 'error' => false)); ?>
            <?php echo $this->Form->input('password', array('label' => 'Password', 'error' => false)); ?>
            <p id="forgotPassword"><a href="<?php echo Router::url('/', true);?>Contacts/forgetPassword" class="iframe">Forgot password?</a></p>
            <?php echo $this->Form->input('login', array('type' => 'submit', 'class' => 'login_btn curvy-all', 'value'=>'Login', 'label'=>false)); ?>
        <?php echo $this->Form->end(null); ?>
        </div>
        </div>
    
	<p><strong>Let our Property Alert do the searching for you!</strong></p>
    <p>The search for a home can come to you with the Property Alert, now available via email. Simply tell us what you're looking for, and we'll search through all our listings every day (or as often as you like).</p>
    <ul>
        <li>Invitations to exclusive VIP inspections of new properties before they are advertised to the public</li>
        <li>Immediate email alerts with details of new properties that meet the requirements you've registered with Property Alert</li>
        <li>Notification of sales results by email to help you keep track of prices being achieved for properties that match your profile</li>
        <li>Express entry at open for inspections - all you do is provide your User ID, which is your Email Address</li>
        <li>Notification via email and SMS of properties under offer that you have inspected</li>
        <li>Auction reminders of properties that meet your requirements or that you have inspected</li>
        <li>Access to your own Short List where you can store properties of interest, saving you time when you wish to revisit these properties</li>
        <li>Exclusive Property Alert benefits including industry updates</li>
    </ul>
    <p>Register to receive instant property alerts. The following page will allow you to enter your search requirements.</p>
    
    <div class="clear"></div>
</div>

<!--registration form-->
<div class="tabs">
<h2>Registration</h2>
<ul>
	<li><a class="on">Your Details</a></li>
</ul>