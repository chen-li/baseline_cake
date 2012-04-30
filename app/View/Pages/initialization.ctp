<?php echo $this->Html->script(array('jquery.cycle.lite.min', 'home')); ?>
<?php echo $this->Html->css(array('home')); ?>

<div id="left">
<div id="slideshow-box" class="box-shadow">
    <ul>
  	    <li id="slide_1"><?php echo $this->Html->image("1px.png", array("alt" => "loading", "class" => "loading")); ?></li>
        <li id="slide_2"><?php echo $this->Html->image("1px.png", array("alt" => "loading", "class" => "loading")); ?></li>
        <li id="slide_3"><?php echo $this->Html->image("1px.png", array("alt" => "loading", "class" => "loading")); ?></li>
        <li id="slide_4"><?php echo $this->Html->image("1px.png", array("alt" => "loading", "class" => "loading")); ?></li>
      </ul>
</div>
<?php echo $this->element('featured_property'); ?>
<h1>Welcome to Your Agency </h1>
<div id="welcome" class="cms-text">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim   veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea   commodo consequat. Duis aute irure dolor in reprehenderit in voluptate   velit esse cillum dolore eu fugiat nulla pariatur.</p><p><a href="<?php echo Router::url('/', true);?>Pages/companyProfile">View our Company Profile &raquo;</a></p>
</div>
</div>
<div id="right">
  <div id="quick-search" class="box-shadow">
    <h2>Property Search</h2>
	<?php echo $this->element('quick_search'); ?>    
  </div>
  <div id="appraisal" class="box-shadow">
  <h2>Market Appraisal</h2>
  <p><a href="<?php echo Router::url('/', true);?>FormAppraisals/form">Know what your property is worth? Click for a Free No Obligation Appraisal</a></p>
  </div>
  <div id="testimonials" class="box-shadow">
  <h2>Our Testimonials</h2>
  <p><a href="<?php echo Router::url('/', true);?>Pages/testimonials">Browse through the comments from our very happy clients on our outstanding service</a></p>
  </div>
  <div id="property-alert" class="box-shadow">
  <h2>Property Alert</h2>
  <p>Find out about properties when they first become available.</p>
  <p class="register"><a class="curvy-all box-shadow" href="<?php echo Router::url('/', true);?>Contacts/propertyAlert"><span class="text-shadow">Register Now!</span></a></p>
  <p>Already a member? Then <a href="<?php echo Router::url('/', true);?>Contacts/propertyAlert">login here</a> </p>
  </div>
</div>