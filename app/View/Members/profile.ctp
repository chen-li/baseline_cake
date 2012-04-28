<?php echo $this->Html->css(array('jquery.fancybox', 'profiles', 'tabs')); ?>
<?php echo $this->Html->script(array('jquery.fancybox', 'profiles')); ?>

<h1>Meet the Team</h1>
<?php if(sizeof($staff['Member'])):?>
    <?php
    	$mem_photo = Router::url('/', true).'media/staff/'.$staff['Member']['office_id'].'/'.$staff['Member']['mem_uid'].'/'.ereg_replace("\..*$", "-rsd.jpg", $staff['Member']['mem_photo']);
		
		$full_name = $staff['Member']['first_name'].' '.$staff['Member']['last_name'];
	?>
<div id="links">
    <p id="vcard"><a href="<?php echo Router::url('/', true).'Members/vcard/'.$staff['Member']['mem_id'];?>" target="_blank"><span class="icon namecard"></span> download <?php echo $full_name;?>'s contact details</a></p>
    <p><a href="<?php echo Router::url('/', true)."Members/team";?>">&laquo; back to all staff</a></p>
</div>

<div id="staff">
    <div id="staff-photo" class="box-shadow">
    <img src="<?php echo $mem_photo;?>" alt="<?php echo $full_name;?>" width="264" height="335">             
  </div>
    <div id="staff-info">
      <h1><?php echo $full_name;?></h1>
      <p id="title"><?php echo htmlspecialchars($staff['Member']['job_position']);?></p>
      <p id="phone"><?php echo $staff['Member']['mobile'];?></p>
	  <p><?php echo $staff['Member']['phone'];?></p>
      <p id="email"><a class="emailagent iframe" href="mailto:<?php echo $staff['Member']['email'];?>"><?php echo $staff['Member']['email'];?></a></p>
      <div id="staff-bio">
      <?php echo $staff['Member']['profile'];?>
      </div>
     </div>
  <div class="clear"></div>
</div>
<?php else:?>
	<p class="error_msg">Sorry, staff does not exist.</p>
<?php endif;?>