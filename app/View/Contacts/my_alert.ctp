<?php echo $this->Html->css(array('jquery.fancybox', 'alert')); ?>
<?php echo $this->Html->script(array('jquery.fancybox', 'alert', 'forms')); ?>

<?php echo $this->element('reg_user_header'); ?>

<?php if($switch[1]=='on'):?>
<?php echo $this->element('reg_edit'); ?>
<?php else:?>
<?php echo $this->element('reg_list'); ?>
<?php endif;?>