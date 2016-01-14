<?php include('template/meta.php'); ?>

<body>
<?php include('template/header.php'); ?>
    
<div class="container inaCor-container">
    <div class="inaCor-content">

<!-- TOP -->
    <div class="row">
        <div class="col-md-8">
            <div class="row">
             <?php
             include "./view/index_galeri.php";
             ?><!-- /.carousel -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <!--Nav tabs --> 
                        <ul class="nav nav-tabs inaCor-tabs" role="tablist">
                          <li class="active"><a href="#profile" role="tab" data-toggle="tab">Weather</a></li>
                          <li class="rate"><a href="#messages" role="tab" data-toggle="tab">Exchange Rates</a></li>
                        </ul>
                     <!-- Tab panes --> 
                        <div class="tab-content inaCor-tabContent">
                          <div class="tab-pane active" id="profile">
                            <div id="weather"></div>
                          </div>
                          <div class="tab-pane exchange" id="messages">
                            <p>1 USD = Rp 12025,00</p>
                            <p>1 EUR = Rp 15332,70</p>
                          </div>
                        </div> 
                <div class="clearfix"></div>  
                </div>
            </div>
        </div>
    </div>
<!-- END TOP -->

<!-- MIDDLE -->
    <div class="row">
        <div class="col-md-8">
            <!-- LATEST NEWS -->            
            <div class="row">  
                <div class="col-md-12">
                    <h4 class="pull-left">Indonesia Latest News</h4>
                    
                    
                   <?php
                               include './view/index_latest_news.php';
                   ?>
                       
                  
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="pull-left">Today's Icon</h4>
                    <a href="#" class="pull-right more"><i class="glyphicon glyphicon-plus"></i> See all</a>
                    <div class="clearfix"></div>
                
                <!-- Carousel icon -->
                    <div id="myCarousel2" class="carousel slide" data-ride="carousel" style="margin: 0;">
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="public_assets/banner/music1.jpg" alt="First slide">
                        </div>
                        <div class="item">
                          <img src="public_assets/banner/music2.jpg" alt="Second slide">
                        </div>
                        <div class="item">
                          <img src="public_assets/banner/music3.jpg" alt="Third slide">
                        </div>
                      </div>
                    </div><!-- /.carousel -->
                </div>
            </div>
        </div>
    </div>
<!-- END MIDDLE -->

<!-- BOTTOM -->

    <div class="row">
        <div class="col-md-8">
            <!-- HIGHLIGHTS -->              
            <div class="row">
                <div class="col-md-6">
                    <h4>Travel Highlights</h4>
                    
                    <?php
                                      include './view/index_travel_highlight.php';
                    ?>
                </div>
                <div class="col-md-6">
                    <h4>Today's Festival</h4>
                  <?php
                  include "./view/index_today_festival.php";
                  ?>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 15px;">
                    <h4>Destination by Region</h4>
                    <a href="#"><img src="assets/img/ind_map.png" class="img-responsive" /></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <h4>Reservation</h4>
                <a href="<?php echo $base_url; ?>reservation/transportation.php">
                    <div class="inaCor-reservation inaCor-box">
                        <div class="row">
                            <div class="col-md-7">
                                <span class="type">Transportation</span><br /><span class="title">Resevation</span>
                                <p>Some introduction...Lorem ipsum Lorem ipsum Lorem</p>
                            </div>
                            <div class="col-md-5">
                                <img src="assets/img/transportation.png" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </a>
                
                <a href="<?php echo $base_url; ?>reservation/hotel.php">
                    <div class="inaCor-reservation inaCor-box">
                        <div class="row">
                            <div class="col-md-7">
                                <span class="type">Hotel</span><br /><span class="title">Resevation</span>
                                <p>Some introduction...Lorem ipsum Lorem ipsum Lorem</p>
                            </div>
                            <div class="col-md-5">
                                <img src="assets/img/hotel.png" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>

<!-- END BOTTOM -->
    
    </div>
</div>

<?php include('template/footer.php') ?>
<?php include('template/javascript.php'); ?>  
    
    

</body>
</html>