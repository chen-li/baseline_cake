<h1>Property Alert</h1>
<div id="free-text" class="free-text">
	<p><strong>Welcome <?php echo $this->Session->read('user'); ?>,</strong></p>
	<p>You can update and change your personal contact details at any time. You can also delete and create new property requirements to further control the Property Alert emails you receive. Please use the navigation above to manage your Property Alert account.</p>
	</div>

<!--logged in form-->
<div class="tabs">
<h2>My Property Alert</h2>
<ul>
	<!--<li><a href="<?php echo Router::url('/', true).'Contacts/myAlert/myProperties';?>" class="on">My Properties</a></li>-->
	<li><a href="<?php echo Router::url('/', true).'Contacts/myAlert/mydetails';?>" class="on">My Details</a></li>
	<li><a href="<?php echo Router::url('/', true).'Contacts/logout';?>" class="off">Log Out</a></li>
</ul>