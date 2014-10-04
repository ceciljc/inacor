<?php include('../template/meta.php'); ?>

<body>
<?php include('../template/header.php'); ?>
    
<div class="container inaCor-container">
    <div class="inaCor-content">
    <div class="row">
        <div class="col-md-3">
            
            <div class="inaCor-sidebar">
                <p>Location &amp; Weather</p>
                <ul class="nav nav-sidebar">
                    <li class="inaCor-box active"><a href="<?php echo $base_url; ?>aboutIna/location.php">Indonesia Location</a></li>
                    <li class="inaCor-box"><a href="<?php echo $base_url; ?>aboutIna/weather.php">Indonesia Weather</a></li>
                </ul>
            </div>
            
        </div>
        
        <div class="col-md-9">
            
            <div class="inaCor-contentPage text-justify">
                <h3>Location</h3>
                <p>Indonesian Archipelago spread between latitudes 11°S and 6°N, and longitudes 95°E and 141°E. It consists of 17,508 islands, about 6,000 of which are inhabited. These are scattered over both sides of the equator. Indonesia has 5 large Islands, which are Java, Sumatra, Borneo (shared with Brunei and Malaysia), New Guinea (shared with Papua New Guinea), and Sulawesi. </p>
                <p>Indonesia shares maritime borders across narrow straits with Singapore, Malaysia,  Philippines, and Palau to the north, and with Australia to the south.
The capital city of Indonesia, which know as “Jakarta”, is on Java island. It is the nation's largest city, followed by Surabaya, Bandung, Medan, and Semarang, which located on different island. </p>
                <p>According to Wikipedia, Indonesia is the world's 15th-largest country in terms of land area since it has 1,919,440 square kilometers (741,050 sqmi) of land. Furthermore it is the world's 7th-largest country in terms of combined sea and land area. </p>
                <img src="../public_assets/img/map.jpg" class="img-responsive" />
            </div>
            
        </div>
    </div>
    </div>
</div>

<?php include('../template/footer.php') ?>
<?php include('../template/javascript.php'); ?>  
    
    

</body>
</html>