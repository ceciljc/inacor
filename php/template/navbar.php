<!-- NAVBAR -->

<?php 
    $active_link = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $active = explode('/', $active_link);
?>

<div class="navbar navbar-default navbar-static-top">
  <div class="container inaCor-container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
        <li id="home" class="dropdown menu-large <?php echo $active['2'] == ''?'active':''; ?>">
			<a href="<?php echo $base_url; ?>" class="dropdown-toggle" data-toggle="dropdown">Home</a>				
			<ul class="dropdown-menu inaCor-dropdown row">
                <li class="inaCor-container">
                    <a href="<?php echo $base_url; ?>">Home</a>
				</li>
			</ul>
		</li>
        <li id="aboutInaCor" class="dropdown menu-large <?php echo $active['2'] == 'aboutInaCor'?'active':''; ?>">
			<a href="<?php echo $base_url; ?>aboutInaCor" class="dropdown-toggle" data-toggle="dropdown">About Indonesia Corner</a>				
			<ul class="dropdown-menu inaCor-dropdown row">
                <li class="inaCor-container">
                    <a href="<?php echo $base_url; ?>aboutInaCor/about_inacor.php">About Indonesian Corner</a>
                    <a href="<?php echo $base_url; ?>aboutInaCor/hosting_inacor.php">Hosting an Inacor</a>
                    <a href="<?php echo $base_url; ?>aboutInaCor/scope_activities.php">Scope of Activities</a>
                    <a href="<?php echo $base_url; ?>aboutInaCor/support_organization.php">Supporting Organizations</a>
				</li>
			</ul>
		</li>
        <li id="aboutIna" class="dropdown menu-large <?php echo $active['2'] == 'aboutIna'?'active':''; ?>">
			<a href="<?php echo $base_url; ?>aboutIna" class="dropdown-toggle" data-toggle="dropdown">About Indonesia</a>				
			<ul class="dropdown-menu inaCor-dropdown row">
                <li class="inaCor-container">
                    <a href="<?php echo $base_url; ?>aboutIna/location.php">Location &amp; Weather</a>
                    <a href="<?php echo $base_url; ?>aboutIna/general_info.php">General Info</a>
                    <a href="<?php echo $base_url; ?>aboutIna/travellers_essential.php">Traveller's Essential</a>
                    <a href="<?php echo $base_url; ?>aboutIna/imaging_ina.php">Imaging Indonesia</a>
				</li>
			</ul>
		</li>
        <li id="destinations" class="dropdown menu-large <?php echo $active['2'] == 'destinations'?'active':''; ?>">
			<a href="<?php echo $base_url; ?>destinations" class="dropdown-toggle" data-toggle="dropdown">Destinations</a>				
			<ul class="dropdown-menu inaCor-dropdown row">
                <li class="inaCor-container">
                    <a href="<?php echo $base_url; ?>destinations/recomended.php">Recomended</a>
                    <a href="<?php echo $base_url; ?>destinations/spot.php">Spectacular Indonesia Spot</a>
                    <a href="<?php echo $base_url; ?>destinations/region.php">Region</a>
                    <a href="<?php echo $base_url; ?>destinations/cities.php">Cities</a>
				</li>
			</ul>
		</li>
        <li id="attraction" class="dropdown menu-large <?php echo $active['2'] == 'attraction'?'active':''; ?>">
			<a href="<?php echo $base_url; ?>attraction" class="dropdown-toggle" data-toggle="dropdown">Attraction</a>				
			<ul class="dropdown-menu inaCor-dropdown row">
                <li class="inaCor-container">
                    <a href="#">Travel Highlight</a>
                    <a href="<?php echo $base_url; ?>attraction/events.php">Events</a>
				</li>
			</ul>
		</li>
        <li id="cultureArt" class="dropdown menu-large <?php echo $active['2'] == 'cultureArt'?'active':''; ?>">
			<a href="<?php echo $base_url; ?>cultureArt" class="dropdown-toggle" data-toggle="dropdown">Culture/Art Life</a>				
			<ul class="dropdown-menu inaCor-dropdown row">
                <li class="inaCor-container">
                    <a href="#">Culture &amp; Life</a>
                    <a href="#">Art</a>
                    <a href="#">Craft</a>
                    <a href="#">Music/Instrument</a>
				</li>
			</ul>
		</li>
        <li id="food" class="dropdown menu-large <?php echo $active['2'] == 'food'?'active':''; ?>">
			<a href="<?php echo $base_url; ?>food" class="dropdown-toggle" data-toggle="dropdown">Food</a>				
			<ul class="dropdown-menu inaCor-dropdown row">
                <li class="inaCor-container">
                    <a href="#">Regional Dishes</a>
                    <a href="#">Feasts</a>
                    <a href="#">Beverages</a>
                    <a href="#">Eating establishment</a>
                    <a href="#">Snacks</a>
                    <a href="#">Fruits</a>
				</li>
			</ul>
		</li>
        <li id="shopping" class="dropdown menu-large <?php echo $active['2'] == 'shopping'?'active':''; ?>">
			<a href="<?php echo $base_url; ?>shopping" class="dropdown-toggle" data-toggle="dropdown">Shopping</a>				
			<ul class="dropdown-menu inaCor-dropdown row">
                <li class="inaCor-container">
                    <a href="<?php echo $base_url; ?>shopping/malls.php">Mall</a>
                    <a href="<?php echo $base_url; ?>shopping/traditional.php">Traditional</a>
				</li>
			</ul>
		</li>
	</ul>
	</div>
  </div>
</div>

<div class="inaCor-dropdown"></div>