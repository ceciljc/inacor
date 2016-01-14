<?php include('../template/meta.php'); ?>

<body>
<?php include('../template/header.php'); ?>
    
<div class="container inaCor-container">
    <div class="inaCor-content">
    <div class="row">
        <div class="col-md-3">
            
            <div class="inaCor-sidebar">
                <p>Imaging Indonesia</p>
                <ul class="nav nav-sidebar">
                    <li class="inaCor-box"><a href="<?php echo $base_url; ?>aboutIna/imaging_ina.php">Image</a></li>
                    <li class="inaCor-box active"><a href="<?php echo $base_url; ?>aboutIna/imaging_ina_vid.php">Video</a></li>
                </ul>
            </div>
            
        </div>
        
        <div class="col-md-9">
            
            <div class="inaCor-contentPage text-justify">
                <h3>Video Name</h3>
                <div id="video">
                    <div class="col-md-4">
                        <a href="<?php echo $base_url; ?>public_assets/album/sample.mp4">
                            <img src="<?php echo $base_url; ?>public_assets/album/sample_thumbs.jpg" class="inaCor-gallery">
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    </div>
</div>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../template/footer.php') ?>
<?php include('../template/javascript.php'); ?>  
    
    

</body>
</html>