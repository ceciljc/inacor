<!-- Main component for a primary marketing message or call to action -->
<div class="inaCor-header">
    <div class="container inaCor-container">
        <div class="pull-left logo">
            <a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>assets/img/logo/indonesia corner merah shadow.png" class="img-responsive"/></a>
        </div>   
        <div class="pull-right">
            <div class="inaCor-menuHeader">
                <div class="pull-left" style="margin: 8px 10px;">
                    <a href="#">Login | </a>
                    <a href="#">My Page | </a>
                    <a href="#">Signup | </a>
                    <a href="#">Sitemap</a>
                </div>
                <div class="pull-right">
                <select class="form-control">
                  <option>Indonesia</option>
                  <option>English</option>
                </select>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="inaCor-socialHeader">
                <div class="pull-left" style="margin-right: 10px;">
                    <a href="#"><img src="<?php echo $base_url; ?>assets/img/facebook.png" /></a>
                    <a href="#"><img src="<?php echo $base_url; ?>assets/img/twitter.png" /></a>
                    <a href="#"><img src="<?php echo $base_url; ?>assets/img/youtube.png" /></a>
                    <a href="#"><img src="<?php echo $base_url; ?>assets/img/rss.png" /></a>
                </div>
                <div class="pull-right">
                <form class="form-inline global-search" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="">Enter search terms</label>
                        <input type="search" class="form-control" id="k" name="k" placeholder="Enter search terms">
                        <input id="cn" name="cn" type="hidden" value="false">
                    </div>
                    <button type="submit" id="s" class="btn inaCor-btn"><span class="glyphicon glyphicon-search"></span></button>
                </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>        
    </div>
    <div class="clearfix"></div>
    
<?php include('navbar.php'); ?>

</div>