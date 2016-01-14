<?php include('../template/meta.php'); ?>

<body>
<?php include('../template/header.php'); ?>
    
<div class="container inaCor--container">
    <div class="inaCor--content">
    <div class="row">
        <div class="col-md-3">
            
            <div id="datepicker"></div>
            
        </div>
        
        <div class="col-md-9">
            
            <div class="inaCor--contentPage text-justify">
                <h3>Events</h3>
                <div id='script-warning'>
            		<code>php/get-events.php</code> must be running.
            	</div>
            
            	<div id='loading'>loading...</div>
            
            	<div id='calendar'></div>
            </div>
            
        </div>
    </div>
    </div>
</div>

<?php include('../template/footer.php') ?>
<?php include('../template/javascript.php'); ?>  
    
    

</body>
</html>