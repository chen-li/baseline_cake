<?php echo $this->Html->css(array('jquery.fancybox', 'staff')); ?>
<?php echo $this->Html->script(array('jquery.fancybox', 'staff')); ?>

<h1>Meet the Team</h1>
<div id="staffcategory">
<?php if(sizeof($staff)):?>
	<?php foreach($staff as $mem){
		$staff_link = "javascript:;";
		if(!empty($mem['Member']['profile'])) {
			$staff_link = Router::url('/', true)."Members/profile/".$mem['Member']['mem_uid'];
		}
		
		$mem_photo = Router::url('/', true).'media/staff/'.$mem['Member']['office_id'].'/'.$mem['Member']['mem_uid'].'/'.ereg_replace("\..*$", "-rsc.jpg", $mem['Member']['mem_photo']);
		
		$full_name = $mem['Member']['first_name'].' '.$mem['Member']['last_name'];
		
		if(!isset($tmp) || ($tmp<>$job_title[$mem['Member']['job_pos_id']])){ ?>
        <h2><?php echo $job_title[$mem['Member']['job_pos_id']];?></h2>
        <?php $tmp=$job_title[$mem['Member']['job_pos_id']]; }?>
    <div class="staff">
        <div class="staff-photo box-shadow"><a href="<?php echo $staff_link;?>"><img src="<?php echo $mem_photo;?>" alt="<?php echo $full_name;?>" width="100" /></a></div>
        <div class="staff-info">
            <p><a href="<?php echo $staff_link;?>"><strong><?php echo $full_name;?></strong></a></p>
            <p class="title"><?php echo $mem['Member']['job_position'];?>&nbsp;</p>
            <p class="phone"><?php echo $mem['Member']['mobile'];?></p>
            <p><?php echo $mem['Member']['phone'];?></p>
            <p><a class="emailagent iframe" href="mailto:<?php echo $mem['Member']['email'];?>"><?php echo $mem['Member']['email'];?></a></p>
			<? if(!empty($mem['Member']['profile'])) {?>
            <p class="link"><a href="<?php echo $staff_link;?>">View Profile &raquo;</a></p>
            <? }?>
        </div>
    </div>
    <?php }?>
<?php endif;?>
    <div class="clear"></div>
</div>