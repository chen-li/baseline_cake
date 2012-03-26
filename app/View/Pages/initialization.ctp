<div id="left">
<div id="slideshow-box" class="box-shadow">
    <ul>
  	    <li id="slide_1"><?php echo $this->Html->image("1px.png", array("alt" => "loading", "class" => "loading")); ?></li>
        <li id="slide_2"><?php echo $this->Html->image("1px.png", array("alt" => "loading", "class" => "loading")); ?></li>
        <li id="slide_3"><?php echo $this->Html->image("1px.png", array("alt" => "loading", "class" => "loading")); ?></li>
        <li id="slide_4"><?php echo $this->Html->image("1px.png", array("alt" => "loading", "class" => "loading")); ?></li>
      </ul>
  </div><div id="pow">
<div id="featured-box" class="box-shadow">
<div id="featured-tag"><img src="http://baseline.dev.youragencies.com.au/img/featured_tag.png" alt="featured tag" width="80" height="78" /></div>
    <ul>
            <li id="fp_1"> <a href="http://baseline.dev.youragencies.com.au/1P0040"><img src="http://baseline.dev.youragencies.com.au/lt-1-1P0040-m-rse.jpg" alt="21 Burrows Road South, St Peters" /></a>
        <div>
	  <p class="headline" title="Exceptional Industrial building">Exceptional Industrial building</p>
        <p><strong>Featured:</strong> 21 Burrows Road South, St Peters</p>
        </div>
      </li>
        </ul>
</div>
</div>
<h1>Welcome to Your Agency </h1>
<div id="welcome" class="cms-text">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim   veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea   commodo consequat. Duis aute irure dolor in reprehenderit in voluptate   velit esse cillum dolore eu fugiat nulla pariatur.</p><p><a href="http://baseline.dev.youragencies.com.au/about/company-profile.php">View our Company Profile &raquo;</a></p>
</div>
</div>
<div id="right">
  <div id="quick-search" class="box-shadow">
    <h2>Property Search</h2>
    
<form id="quick_search_form" method="post" action="/system/form.php">
	<p class="type">
        <label><input type="radio" value="buying/listings.php" id="buy" alt="buy" name="qs_type" checked="checked" /> Buy</label>
        <label><input type="radio" value="renting/rental-listings.php" id="rent" alt="rent" name="qs_type" /> Rent</label>
        <label><input type="radio" value="selling/recent-sales.php" id="sold" alt="sold" name="qs_type" /> Sold</label>
        <label><input type="radio" value="renting/recent-leases.php" id="leased" alt="leased" name="qs_type" /> Leased</label>
    </p>
    <!--<div id="rs-catg" class="select-box curvy-all">        
            <label class="all"><input name="all_catg" type="checkbox" value="all" /> All Types</label>
		            <label class="buy option catg">
            <input name="catg[]" type="checkbox" value="1" />
			Apartment (7)
            </label>
		            <label class="buy option catg">
            <input name="catg[]" type="checkbox" value="4" />
			House (16)
            </label>
		            <label class="buy option catg">
            <input name="catg[]" type="checkbox" value="5" />
			Land (6)
            </label>
		            <label class="buy option catg">
            <input name="catg[]" type="checkbox" value="8" />
			Semi/Duplex (1)
            </label>
		            <label class="buy option catg">
            <input name="catg[]" type="checkbox" value="13" />
			Townhouse (2)
            </label>
		            <label class="buy option catg">
            <input name="catg[]" type="checkbox" value="14" />
			Unit (2)
            </label>
		            <label class="buy option catg">
            <input name="catg[]" type="checkbox" value="16" />
			Warehouse (3)
            </label>
				            <label class="rent option catg">
            <input name="catg[]" type="checkbox" value="1" />
			Apartment (1)
            </label>
		            <label class="rent option catg">
            <input name="catg[]" type="checkbox" value="4" />
			House (4)
            </label>
		            <label class="rent option catg">
            <input name="catg[]" type="checkbox" value="6" />
			Office (5)
            </label>
		            <label class="rent option catg">
            <input name="catg[]" type="checkbox" value="8" />
			Semi/Duplex (1)
            </label>
		            <label class="rent option catg">
            <input name="catg[]" type="checkbox" value="9" />
			Retail (2)
            </label>
		            <label class="rent option catg">
            <input name="catg[]" type="checkbox" value="16" />
			Warehouse (3)
            </label>
		 		            <label class="sold option catg">
            <input name="catg[]" type="checkbox" value="1" />
			Apartment (3)
            </label>
		            <label class="sold option catg">
            <input name="catg[]" type="checkbox" value="4" />
			House (18)
            </label>
		            <label class="sold option catg">
            <input name="catg[]" type="checkbox" value="5" />
			Land (3)
            </label>
		            <label class="sold option catg">
            <input name="catg[]" type="checkbox" value="14" />
			Unit (1)
            </label>
				            <label class="leased option catg">
            <input name="catg[]" type="checkbox" value="1" />
			Apartment (14)
            </label>
		            <label class="leased option catg">
            <input name="catg[]" type="checkbox" value="4" />
			House (3)
            </label>
		            <label class="leased option catg">
            <input name="catg[]" type="checkbox" value="8" />
			Semi/Duplex (4)
            </label>
		            <label class="leased option catg">
            <input name="catg[]" type="checkbox" value="15" />
			Villa (1)
            </label>
		   </div>-->
    <p>
    <select id="rs-catg" name="catg" class="multi styled">
        <option value="">Property Type</option>
        <option value="">All Types</option>
                <option class="buy option catg" value="1">Apartment (7)</option>
                <option class="buy option catg" value="4">House (16)</option>
                <option class="buy option catg" value="5">Land (6)</option>
                <option class="buy option catg" value="8">Semi/Duplex (1)</option>
                <option class="buy option catg" value="13">Townhouse (2)</option>
                <option class="buy option catg" value="14">Unit (2)</option>
                <option class="buy option catg" value="16">Warehouse (3)</option>
                        <option class="rent option catg" value="1">Apartment (1)</option>
		        <option class="rent option catg" value="4">House (4)</option>
		        <option class="rent option catg" value="6">Office (5)</option>
		        <option class="rent option catg" value="8">Semi/Duplex (1)</option>
		        <option class="rent option catg" value="9">Retail (2)</option>
		        <option class="rent option catg" value="16">Warehouse (3)</option>
		                <option class="sold option catg" value="1">Apartment (3)</option>
		        <option class="sold option catg" value="4">House (18)</option>
		        <option class="sold option catg" value="5">Land (3)</option>
		        <option class="sold option catg" value="14">Unit (1)</option>
		                <option class="leased option catg" value="1">Apartment (14)</option>
		        <option class="leased option catg" value="4">House (3)</option>
		        <option class="leased option catg" value="8">Semi/Duplex (4)</option>
		        <option class="leased option catg" value="15">Villa (1)</option>
		    </select>
    </p>
    
    <!--<div id="rs-suburb" class="select-box curvy-all">
            <label class="all"><input name="all_suburbs" type="checkbox" value="all" /> All Suburbs</label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="747" />
            Alexandria (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="10313" />
            Beaumaris (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="4646" />
            Bellamack (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="4821" />
            Cairns (2)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="2662" />
            Clontarf (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="13888" />
            East Perth (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="2675" />
            Elanora Heights (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="2680" />
            Freshwater (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="5724" />
            Innisfail (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="2685" />
            Manly (12)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="592" />
            Mudgee (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="2693" />
            North Curl Curl (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="2694" />
            North Manly (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="110" />
            Phillip (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="2698" />
            Queenscliff (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="4855" />
            Redlynch (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="6012" />
            Runaway Bay (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="9749" />
            Sandy Bay (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="2700" />
            Seaforth (3)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="1737" />
            St Peters (2)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="9467" />
            Tennyson (1)
            </label>
                    <label class="buy option suburbs">
            <input name="suburbs[]" type="checkbox" value="4859" />
            Trinity Park (1)
            </label>
                            <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="747" />
            Alexandria (2)
            </label>
                    <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="1694" />
            Balmain (1)
            </label>
                    <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="4612" />
            East Lindfield (1)
            </label>
                    <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="2685" />
            Manly (2)
            </label>
                    <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="2686" />
            Manly Vale (1)
            </label>
                    <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="2693" />
            North Curl Curl (1)
            </label>
                    <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="2698" />
            Queenscliff (1)
            </label>
                    <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="2700" />
            Seaforth (1)
            </label>
                    <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="1737" />
            St Peters (1)
            </label>
                    <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="800" />
            Surry Hills (1)
            </label>
                    <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="803" />
            Waterloo (3)
            </label>
                    <label class="rent option suburbs">
            <input name="suburbs[]" type="checkbox" value="808" />
            Zetland (1)
            </label>
                            <label class="sold option suburbs">
            <input name="suburbs[]" type="checkbox" value="2650" />
            Balgowlah (2)
            </label>
                    <label class="sold option suburbs">
            <input name="suburbs[]" type="checkbox" value="2651" />
            Balgowlah Heights (1)
            </label>
                    <label class="sold option suburbs">
            <input name="suburbs[]" type="checkbox" value="2654" />
            Belrose (1)
            </label>
                    <label class="sold option suburbs">
            <input name="suburbs[]" type="checkbox" value="2664" />
            Collaroy (2)
            </label>
                    <label class="sold option suburbs">
            <input name="suburbs[]" type="checkbox" value="2670" />
            Curl Curl (1)
            </label>
                    <label class="sold option suburbs">
            <input name="suburbs[]" type="checkbox" value="2676" />
            Fairlight (4)
            </label>
                    <label class="sold option suburbs">
            <input name="suburbs[]" type="checkbox" value="2685" />
            Manly (8)
            </label>
                    <label class="sold option suburbs">
            <input name="suburbs[]" type="checkbox" value="2693" />
            North Curl Curl (3)
            </label>
                    <label class="sold option suburbs">
            <input name="suburbs[]" type="checkbox" value="2698" />
            Queenscliff (1)
            </label>
                    <label class="sold option suburbs">
            <input name="suburbs[]" type="checkbox" value="2700" />
            Seaforth (2)
            </label>
                            <label class="leased option suburbs">
            <input name="suburbs[]" type="checkbox" value="2670" />
            Curl Curl (1)
            </label>
                    <label class="leased option suburbs">
            <input name="suburbs[]" type="checkbox" value="2672" />
            Dee Why (1)
            </label>
                    <label class="leased option suburbs">
            <input name="suburbs[]" type="checkbox" value="2676" />
            Fairlight (2)
            </label>
                    <label class="leased option suburbs">
            <input name="suburbs[]" type="checkbox" value="2680" />
            Freshwater (1)
            </label>
                    <label class="leased option suburbs">
            <input name="suburbs[]" type="checkbox" value="2685" />
            Manly (15)
            </label>
                    <label class="leased option suburbs">
            <input name="suburbs[]" type="checkbox" value="2693" />
            North Curl Curl (1)
            </label>
                    <label class="leased option suburbs">
            <input name="suburbs[]" type="checkbox" value="2698" />
            Queenscliff (1)
            </label>
            </div>-->
    <p>
    <select id="rs-suburb" name="suburbs" class="multi styled">
        <option value="">Suburbs</option>
        <option value="">All Suburbs</option>
                    <option class="buy option suburbs" value="747">Alexandria (1)</option>
                    <option class="buy option suburbs" value="10313">Beaumaris (1)</option>
                    <option class="buy option suburbs" value="4646">Bellamack (1)</option>
                    <option class="buy option suburbs" value="4821">Cairns (2)</option>
                    <option class="buy option suburbs" value="2662">Clontarf (1)</option>
                    <option class="buy option suburbs" value="13888">East Perth (1)</option>
                    <option class="buy option suburbs" value="2675">Elanora Heights (1)</option>
                    <option class="buy option suburbs" value="2680">Freshwater (1)</option>
                    <option class="buy option suburbs" value="5724">Innisfail (1)</option>
                    <option class="buy option suburbs" value="2685">Manly (12)</option>
                    <option class="buy option suburbs" value="592">Mudgee (1)</option>
                    <option class="buy option suburbs" value="2693">North Curl Curl (1)</option>
                    <option class="buy option suburbs" value="2694">North Manly (1)</option>
                    <option class="buy option suburbs" value="110">Phillip (1)</option>
                    <option class="buy option suburbs" value="2698">Queenscliff (1)</option>
                    <option class="buy option suburbs" value="4855">Redlynch (1)</option>
                    <option class="buy option suburbs" value="6012">Runaway Bay (1)</option>
                    <option class="buy option suburbs" value="9749">Sandy Bay (1)</option>
                    <option class="buy option suburbs" value="2700">Seaforth (3)</option>
                    <option class="buy option suburbs" value="1737">St Peters (2)</option>
                    <option class="buy option suburbs" value="9467">Tennyson (1)</option>
                    <option class="buy option suburbs" value="4859">Trinity Park (1)</option>
                            <option class="rent option suburbs" value="747">Alexandria (2)</option>
                    <option class="rent option suburbs" value="1694">Balmain (1)</option>
                    <option class="rent option suburbs" value="4612">East Lindfield (1)</option>
                    <option class="rent option suburbs" value="2685">Manly (2)</option>
                    <option class="rent option suburbs" value="2686">Manly Vale (1)</option>
                    <option class="rent option suburbs" value="2693">North Curl Curl (1)</option>
                    <option class="rent option suburbs" value="2698">Queenscliff (1)</option>
                    <option class="rent option suburbs" value="2700">Seaforth (1)</option>
                    <option class="rent option suburbs" value="1737">St Peters (1)</option>
                    <option class="rent option suburbs" value="800">Surry Hills (1)</option>
                    <option class="rent option suburbs" value="803">Waterloo (3)</option>
                    <option class="rent option suburbs" value="808">Zetland (1)</option>
                            <option class="sold option suburbs" value="2650">Balgowlah (2)</option>
                    <option class="sold option suburbs" value="2651">Balgowlah Heights (1)</option>
                    <option class="sold option suburbs" value="2654">Belrose (1)</option>
                    <option class="sold option suburbs" value="2664">Collaroy (2)</option>
                    <option class="sold option suburbs" value="2670">Curl Curl (1)</option>
                    <option class="sold option suburbs" value="2676">Fairlight (4)</option>
                    <option class="sold option suburbs" value="2685">Manly (8)</option>
                    <option class="sold option suburbs" value="2693">North Curl Curl (3)</option>
                    <option class="sold option suburbs" value="2698">Queenscliff (1)</option>
                    <option class="sold option suburbs" value="2700">Seaforth (2)</option>
                            <option class="leased option suburbs" value="2670">Curl Curl (1)</option>
                    <option class="leased option suburbs" value="2672">Dee Why (1)</option>
                    <option class="leased option suburbs" value="2676">Fairlight (2)</option>
                    <option class="leased option suburbs" value="2680">Freshwater (1)</option>
                    <option class="leased option suburbs" value="2685">Manly (15)</option>
                    <option class="leased option suburbs" value="2693">North Curl Curl (1)</option>
                    <option class="leased option suburbs" value="2698">Queenscliff (1)</option>
        	</select>
    </p>

    <p class="price">
        <select id="rs-min-price" name="price_fm" class="price_fm styled">
            <option value="any" >Price From:</option>
                        <option value="0" class="buy sold option min-price" >$ 0 </option>
                        <option value="150000" class="buy sold option min-price" >$ 150,000 </option>
                        <option value="200000" class="buy sold option min-price" >$ 200,000 </option>
                        <option value="250000" class="buy sold option min-price" >$ 250,000 </option>
                        <option value="300000" class="buy sold option min-price" >$ 300,000 </option>
                        <option value="350000" class="buy sold option min-price" >$ 350,000 </option>
                        <option value="400000" class="buy sold option min-price" >$ 400,000 </option>
                        <option value="450000" class="buy sold option min-price" >$ 450,000 </option>
                        <option value="500000" class="buy sold option min-price" >$ 500,000 </option>
                        <option value="600000" class="buy sold option min-price" >$ 600,000 </option>
                        <option value="700000" class="buy sold option min-price" >$ 700,000 </option>
                        <option value="800000" class="buy sold option min-price" >$ 800,000 </option>
                        <option value="900000" class="buy sold option min-price" >$ 900,000 </option>
                        <option value="1000000" class="buy sold option min-price" >$ 1,000,000 </option>
                        <option value="1500000" class="buy sold option min-price" >$ 1,500,000 </option>
                        <option value="2000000" class="buy sold option min-price" >$ 2,000,000 </option>
                        <option value="5000000" class="buy sold option min-price" >$ 5,000,000 </option>
                        <option value="10000000" class="buy sold option min-price" >$ 10,000,000 </option>
                                    <option value="0" class="rent leased option min-price" >$ 0 p.w</option>
                        <option value="150" class="rent leased option min-price" >$ 150 p.w</option>
                        <option value="200" class="rent leased option min-price" >$ 200 p.w</option>
                        <option value="250" class="rent leased option min-price" >$ 250 p.w</option>
                        <option value="300" class="rent leased option min-price" >$ 300 p.w</option>
                        <option value="350" class="rent leased option min-price" >$ 350 p.w</option>
                        <option value="400" class="rent leased option min-price" >$ 400 p.w</option>
                        <option value="450" class="rent leased option min-price" >$ 450 p.w</option>
                        <option value="500" class="rent leased option min-price" >$ 500 p.w</option>
                        <option value="600" class="rent leased option min-price" >$ 600 p.w</option>
                        <option value="700" class="rent leased option min-price" >$ 700 p.w</option>
                        <option value="800" class="rent leased option min-price" >$ 800 p.w</option>
                        <option value="900" class="rent leased option min-price" >$ 900 p.w</option>
                        <option value="1000" class="rent leased option min-price" >$ 1,000 p.w</option>
                        <option value="1500" class="rent leased option min-price" >$ 1,500 p.w</option>
                        <option value="2000" class="rent leased option min-price" >$ 2,000 p.w</option>
                        <option value="5000" class="rent leased option min-price" >$ 5,000 p.w</option>
                        <option value="10000" class="rent leased option min-price" >$ 10,000 p.w</option>
                    </select><select id="rs-max-price" name="price_to" class="price_to styled">
            <option value="any" >Price To:</option>
                        <option value="150000" class="buy sold option max-price" >$ 150,000 </option>
                        <option value="200000" class="buy sold option max-price" >$ 200,000 </option>
                        <option value="250000" class="buy sold option max-price" >$ 250,000 </option>
                        <option value="300000" class="buy sold option max-price" >$ 300,000 </option>
                        <option value="350000" class="buy sold option max-price" >$ 350,000 </option>
                        <option value="400000" class="buy sold option max-price" >$ 400,000 </option>
                        <option value="450000" class="buy sold option max-price" >$ 450,000 </option>
                        <option value="500000" class="buy sold option max-price" >$ 500,000 </option>
                        <option value="600000" class="buy sold option max-price" >$ 600,000 </option>
                        <option value="700000" class="buy sold option max-price" >$ 700,000 </option>
                        <option value="800000" class="buy sold option max-price" >$ 800,000 </option>
                        <option value="900000" class="buy sold option max-price" >$ 900,000 </option>
                        <option value="1000000" class="buy sold option max-price" >$ 1,000,000 </option>
                        <option value="1500000" class="buy sold option max-price" >$ 1,500,000 </option>
                        <option value="2000000" class="buy sold option max-price" >$ 2,000,000 </option>
                        <option value="5000000" class="buy sold option max-price" >$ 5,000,000 </option>
                        <option value="10000000" class="buy sold option max-price" >$ 10,000,000 </option>
                                    <option value="0" class="rent leased option max-price" >$ 0 p.w</option>
                        <option value="150" class="rent leased option max-price" >$ 150 p.w</option>
                        <option value="200" class="rent leased option max-price" >$ 200 p.w</option>
                        <option value="250" class="rent leased option max-price" >$ 250 p.w</option>
                        <option value="300" class="rent leased option max-price" >$ 300 p.w</option>
                        <option value="350" class="rent leased option max-price" >$ 350 p.w</option>
                        <option value="400" class="rent leased option max-price" >$ 400 p.w</option>
                        <option value="450" class="rent leased option max-price" >$ 450 p.w</option>
                        <option value="500" class="rent leased option max-price" >$ 500 p.w</option>
                        <option value="600" class="rent leased option max-price" >$ 600 p.w</option>
                        <option value="700" class="rent leased option max-price" >$ 700 p.w</option>
                        <option value="800" class="rent leased option max-price" >$ 800 p.w</option>
                        <option value="900" class="rent leased option max-price" >$ 900 p.w</option>
                        <option value="1000" class="rent leased option max-price" >$ 1,000 p.w</option>
                        <option value="1500" class="rent leased option max-price" >$ 1,500 p.w</option>
                        <option value="2000" class="rent leased option max-price" >$ 2,000 p.w</option>
                        <option value="5000" class="rent leased option max-price" >$ 5,000 p.w</option>
                        <option value="10000" class="rent leased option max-price" >$ 10,000 p.w</option>
                        <option value="0">MAX</option>
        </select> 
    </p>
    
    <p class="bbc">
        <select id="beds" class="beds" name="bed_fm">
          <option value="">Bed:</option>
          <option value="any">Any</option>
                    <option value="studio" > Studio </option>
                    <option value="1" > 1+ </option>
                    <option value="2" > 2+ </option>
                    <option value="3" > 3+ </option>
                    <option value="4" > 4+ </option>
                    <option value="5" > 5+ </option>
                  </select><select id="baths" class="baths" name="bath_fm">
          <option  value="">Bath:</option>
          <option value="any">Any</option>
                    <option value="1" > 1+ </option>
                    <option value="2" > 2+ </option>
                    <option value="3" > 3+ </option>
                    <option value="4" > 4+ </option>
                    <option value="5" > 5+ </option>
                  </select><select id="cars" class="cars" name="car_fm">
          <option  value="">Park:</option>
          <option value="any">Any</option>
                    <option value="1" > 1+ </option>
                    <option value="2" > 2+ </option>
                    <option value="3" > 3+ </option>
                    <option value="4" > 4+ </option>
                    <option value="5" > 5+ </option>
                  </select>
    </p>
    
    <p class="submit">
        <input type="submit" value="Show in a list" class="list_search_btn curvy-all" />
        <input type="submit" value="Show on a map" name="map_view" class="map_search_btn curvy-all" />
    </p>
    
</form>  </div>
  <div id="appraisal" class="box-shadow">
  <h2>Market Appraisal</h2>
  <p><a href="http://baseline.dev.youragencies.com.au/selling/market-appraisal.php">Know what your property is worth? Click for a Free No Obligation Appraisal</a></p>
  </div>
  <div id="testimonials" class="box-shadow">
  <h2>Our Testimonials</h2>
  <p><a href="http://baseline.dev.youragencies.com.au/about/company-testimonials.php">Browse through the comments from our very happy clients on our outstanding service</a></p>
  </div>
  <div id="property-alert" class="box-shadow">
  <h2>Property Alert</h2>
  <p>Find out about properties when they first become available.</p>
  <p class="register"><a class="curvy-all box-shadow" href="http://baseline.dev.youragencies.com.au/buying/property-alert.php"><span class="text-shadow">Register Now!</span></a></p>
  <p>Already a member? Then <a href="http://baseline.dev.youragencies.com.au/buying/property-alert.php">login here</a> </p>
  </div>
</div>