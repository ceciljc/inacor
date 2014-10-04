<?php include('../template/meta.php'); ?>

<body>
<?php include('../template/header.php'); ?>
    
<div class="container inaCor-container">
    <div class="inaCor-content">
    <div class="row">
        <div class="col-md-12">
            
            <div class="row inaCor-titlePage inaCor-box">
                <div class="col-md-2">
                <h4>Attraction in <span>Indonesia</span></h4>
                </div>
                
                <div class="col-md-10">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
            </div>
            
            
        </div>
    </div>
    <div class="row">    
        <div class="col-md-6">
            <div class="row inaCor-menuPage inaCor-boxPink odd">
                <div class="col-md-5">
                    <img src="<?php echo $base_url; ?>public_assets/img/map.jpg" class="img-responsive" />
                </div>
                <div class="col-md-7">
                    <strong><a href="#">Travel Highlights</a></strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    <a href="#" class="pull-right more"><i class="glyphicon glyphicon-plus"></i>  More</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="row inaCor-menuPage inaCor-boxPink even">
                <div class="col-md-5">
                    <img src="<?php echo $base_url; ?>public_assets/img/map.jpg" class="img-responsive" />
                </div>
                <div class="col-md-7">
                    <strong><a href="<?php echo $base_url; ?>attraction/events.php">Events</a></strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    <a href="#" class="pull-right more"><i class="glyphicon glyphicon-plus"></i>  More</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<?php include('../template/footer.php') ?>
<?php include('../template/javascript.php'); ?>  
    
    

</body>
</html>