<?php echo $this->Html->script(array('cms')); ?>
<?php echo $this->Html->css(array('cms')); ?>

<h1>Sitemap</h1>
<div id='free-text' class='free-text'>
	<h1>Buying</h1>
    <ul>
        <li><a href="<?php echo Router::url('/', true);?>Listings/index">Properties for Sale</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Listings/index/residential/buying">Residential for Sale</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Listings/index/land/buying">Land for Sale</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Listings/index/commercial/buying">Commercial for Sale</a></li>
        <li><a href="<?php echo Router::url('/', true);?>LtInsps/inspection">Open Homes</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Listings/auction">Auction Timetables</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Pages/buyingTips">Buying Tips</a></li>
    </ul>
    
	<h1>Selling</h1>
    <ul>
        <li><a href="<?php echo Router::url('/', true);?>Pages/sellingTips">Selling Tips</a></li>
        <li><a href="<?php echo Router::url('/', true);?>FormAppraisals/form">Market Appraisal</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Listings/index/buying/status:2">Recent Sales</a></li>
    </ul>
    
	<h1>Renting</h1>
    <ul>
    	<li><a href="<?php echo Router::url('/', true);?>Listings/index/renting">Properties for Lease</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Listings/index/residential/renting">Residential for Lease</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Listings/index/commercial/renting">Commercial for Lease</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Pages/guideToRenting">Guide to Renting</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Offices/tenancyApplication">Tenancy Application</a></li>
        <li><a href="<?php echo Router::url('/', true);?>FormMaintenances/form">Maintenance Request</a></li>
        <li><a href="<?php echo Router::url('/', true);?>FormAppraisals/form/lease">Lease Appraisal</a></li>
        <li><a href="<?php echo Router::url('/', true);?>FormVacates/form">Vacate Notice</a></li>
    </ul>
    
	<h1>Resources</h1>
    <ul>
        <li><a href="<?php echo Router::url('/', true);?>Pages/usefulLinks">Useful Links</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Pages/calculators">Calculators</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Pages/newsletters">Newsletters</a></li>
    </ul>
    
	<h1>About Us</h1>
    <ul>
        <li><a href="<?php echo Router::url('/', true);?>Pages/companyProfile">Company Profile</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Members/team">Meet the Team</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Pages/testimonials">Testimonials</a></li>
        <li><a href="<?php echo Router::url('/', true);?>Pages/careers">Careers</a></li>
    </ul>
    
	<h1>Contact Us</h1>
    <ul>
        <li><a href="<?php echo Router::url('/', true);?>FormContacts/contact">Contact Us</a></li>
    </ul>
</div>