<?php include('../template/meta.php'); ?>

<body>
<?php include('../template/header.php'); ?>
    
<div class="container inaCor-container">
    <div class="inaCor-content">
    <div class="row">
        <div class="col-md-12">
            
            <div class="inaCor-contentPage text-justify">
                <h3>Traditional Market in Indonesia</h3>
                <div id="carousel_shopping" class="carousel slide" data-ride="carousel" style="margin-bottom: 25px;">
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="<?php echo $base_url; ?>public_assets/img/pasar_sukawati.jpg">
                      <div class="container">
                        <div class="carousel-caption">
                          <p>Pasar Sukawati</p>
                          <!--<a class="btn btn-large btn-primary" href="http://www.grand-indonesia.com/">Go to site</a>-->
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo $base_url; ?>public_assets/img/pasar_beringharjo.jpg">
                      <div class="container">
                        <div class="carousel-caption">
                          <p>Pasar Beringharjo</p>
                          <!--<a class="btn btn-large btn-primary" href="http://www.sarinahco.com/">Go to site</a>-->
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo $base_url; ?>public_assets/img/pasar_induk.jpg">
                      <div class="container">
                        <div class="carousel-caption">
                          <p>Pasar Induk</p>
                          <!--<a class="btn btn-large btn-primary" href="http://www.centralparkjakarta.com/">Go to site</a>-->
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo $base_url; ?>public_assets/img/pasar_baru_bandung.jpg">
                      <div class="container">
                        <div class="carousel-caption">
                          <p>Pasar Baru Bandung</p>
                          <!--<a class="btn btn-large btn-primary" href="http://www.centralparkjakarta.com/">Go to site</a>-->
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