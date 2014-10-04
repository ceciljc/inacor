<?php include('../template/meta.php'); ?>

<body>
<?php include('../template/header.php'); ?>
    
<div class="container inaCor-container">
    <div class="inaCor-content">
    <div class="row">
        <div class="col-md-12">
            
            <div class="inaCor-contentPage text-justify">
                <h3>Malls in Indonesia</h3>
                <div id="carousel_shopping" class="carousel slide" data-ride="carousel" style="margin-bottom: 25px;">
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="<?php echo $base_url; ?>public_assets/img/mall_gi.jpg">
                      <div class="container">
                        <div class="carousel-caption">
                          <p>Grand Indonesia is a successful premium mall that offers an International shopping experience and wide range of fashion apparels, restaurants and entertainment choices.</p>
                          <a class="btn btn-large btn-primary" href="http://www.grand-indonesia.com/">Go to site</a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo $base_url; ?>public_assets/img/mall_sarinah.jpg">
                      <div class="container">
                        <div class="carousel-caption">
                          <p>Sarinah is a shopping center as high as 74 meters and 15 floors located in Menteng, Jakarta.</p>
                          <a class="btn btn-large btn-primary" href="http://www.sarinahco.com/">Go to site</a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo $base_url; ?>public_assets/img/mall_cp.jpg">
                      <div class="container">
                        <div class="carousel-caption">
                          <p>Central Park in Jakarta, Indonesia is a mixed-use complex including a shopping mall, an office tower, 3 apartments, and a hotel</p>
                          <a class="btn btn-large btn-primary" href="http://www.centralparkjakarta.com/">Go to site</a>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo $base_url; ?>public_assets/img/mall_smesco.jpg">
                      <div class="container">
                        <div class="carousel-caption">
                          <p></p>
                          <a class="btn btn-large btn-primary" href="http://smescoindonesia.com/">Go to site</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#carousel_shopping" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                  <a class="right carousel-control" href="#carousel_shopping" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div><!-- /.carousel -->
            </div>
            
        </div>
    </div>
    </div>
</div>

<?php include('../template/footer.php') ?>
<?php include('../template/javascript.php'); ?>  
    
    

</body>
</html>