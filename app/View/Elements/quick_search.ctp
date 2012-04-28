<?php
//price from list
$price_fm = array(150000,200000,250000,300000,350000,400000,450000,500000,600000,700000,800000,900000,1000000,1500000,2000000,5000000,10000000);
//price to list
$price_to = array(150000,200000,250000,300000,350000,400000,450000,500000,600000,700000,800000,900000,1000000,1500000,2000000,5000000,10000000);
$rent_price_fm = array(150,200,250,300,350,400,450,500,600,700,800,900,1000,1500,2000,5000,10000);
//price to list
$rent_price_to = array(150,200,250,300,350,400,450,500,600,700,800,900,1000,1500,2000,5000,10000);
//bed
$bed = array(1=>"1+",2=>"2+",3=>"3+",4=>"4+",5=>"5+");
//bath
$bath = array(1=>"1+",2=>"2+",3=>"3+",4=>"4+",5=>"5+");
//car
$car = array(1=>"1+",2=>"2+",3=>"3+",4=>"4+",5=>"5+");
//total of available properties by category
?>


<form id="quick_search_form" method="post" action="Listings/index/buying">
	<p class="type">
        <label><input type="radio" value="Listings/index/buying" id="buy" alt="buy" name="qs_type" checked="checked" /> Buy</label>
        <label><input type="radio" value="Listings/index/renting" id="rent" alt="rent" name="qs_type" /> Rent</label>
        <label><input type="radio" value="Listings/index/buying/status:2" id="sold" alt="sold" name="qs_type" /> Sold</label>
        <label><input type="radio" value="Listings/index/renting/status:3" id="leased" alt="leased" name="qs_type" /> Leased</label>
    </p>
    <p>
    <select id="rs-catg" name="catg" class="multi styled">
        <option value="">Property Type</option>
        <option value="">All Types</option>
        <?php foreach($quickSearch['buy']['catg'] as $id => $name):?>
        <option class="buy option catg" value="<?php echo $id;?>"><?php echo $name;?></option>
        <?php endforeach;?>
        <?php foreach($quickSearch['rent']['catg'] as $id => $name):?>
        <option class="rent option catg" value="<?php echo $id;?>"><?php echo $name;?></option>
		<?php endforeach;?>
        <?php foreach($quickSearch['sold']['catg'] as $id => $name):?>
        <option class="sold option catg" value="<?php echo $id;?>"><?php echo $name;?></option>
		<?php endforeach;?>
        <?php foreach($quickSearch['leased']['catg'] as $id => $name):?>
        <option class="leased option catg" value="<?php echo $id;?>"><?php echo $name;?></option>
		<?php endforeach;?>
    </select>
    </p>
    
    <p>
    <select id="rs-suburb" name="suburbs" class="multi styled">
        <option value="">Suburbs</option>
        <option value="">All Suburbs</option>
        <?php foreach($quickSearch['buy']['suburb'] as $id => $name):?>
            <option class="buy option suburbs" value="<?php echo $id;?>"><?php echo $name;?></option>
        <?php endforeach;?>
        <?php foreach($quickSearch['rent']['suburb'] as $id => $name):?>
            <option class="rent option suburbs" value="<?php echo $id;?>"><?php echo $name;?></option>
        <?php endforeach;?>
        <?php foreach($quickSearch['sold']['suburb'] as $id => $name):?>
            <option class="sold option suburbs" value="<?php echo $id;?>"><?php echo $name;?></option>
        <?php endforeach;?>
        <?php foreach($quickSearch['leased']['suburb'] as $id => $name):?>
            <option class="leased option suburbs" value="<?php echo $id;?>"><?php echo $name;?></option>
        <?php endforeach;?>
	</select>
    </p>

    <p class="price">
        <select id="rs-min-price" name="price_fm" class="price_fm styled">
            <option value="" >Price From:</option>
            <?php foreach($price_fm as $key=>$val){?>
            <option value="<?php echo $val;?>" class="buy sold option min-price" >$ <?php echo number_format($val);?> </option>
            <?php }?>
            <?php foreach($rent_price_fm as $key=>$val){?>
            <option value="<?php echo $val;?>" class="rent leased option min-price" >$ <?php echo number_format($val);?> p.w</option>
            <?php }?>
        </select><select id="rs-max-price" name="price_to" class="price_to styled">
            <option value="" >Price To:</option>
            <?php foreach($price_to as $key=>$val){?>
            <option value="<?php echo $val;?>" class="buy sold option max-price" >$ <?php echo number_format($val);?> </option>
            <?php }?>
            <?php foreach($rent_price_fm as $key=>$val){?>
            <option value="<?php echo $val;?>" class="rent leased option max-price" >$ <?php echo number_format($val);?> p.w</option>
            <?php }?>
        </select> 
    </p>
    
    <p class="bbc">
        <select id="beds" class="beds" name="bed_fm">
          <option value="">Bed:</option>
          <option value="any">Any</option>
          <?php foreach($bed as $key=>$val){?>
          <option value="<?php echo $key;?>" > <?php echo $val;?> </option>
          <?php }?>
        </select><select id="baths" class="baths" name="bath_fm">
          <option  value="">Bath:</option>
          <option value="any">Any</option>
          <?php foreach($bath as $key=>$val){?>
          <option value="<?php echo $key;?>" > <?php echo $val;?> </option>
          <?php }?>
        </select><select id="cars" class="cars" name="car_fm">
          <option  value="">Park:</option>
          <option value="any">Any</option>
          <?php foreach($bath as $key=>$val){?>
          <option value="<?php echo $key;?>" > <?php echo $val;?> </option>
          <?php }?>
        </select>
    </p>
    
    <p class="submit">
        <input type="submit" value="Show in a list" class="list_search_btn curvy-all" />
        <!--<input type="submit" value="Show on a map" name="map_view" class="map_search_btn curvy-all" />-->
    </p>
    
</form>