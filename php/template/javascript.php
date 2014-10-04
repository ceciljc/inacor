<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- Jquery JS -->
<script type="text/javascript" src="<?php echo $base_url; ?>assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="<?php echo $base_url; ?>plugin/bootstrap-3.1.1/js/bootstrap.min.js"></script>

<!-- Bootstrap Image Gallery JS -->
<script src="<?php echo $base_url; ?>plugin/bootstrap-image-gallery-3.1.1/js/jquery.blueimp-gallery.min.js"></script>
<script src="<?php echo $base_url; ?>plugin/bootstrap-image-gallery-3.1.1/js/bootstrap-image-gallery.min.js"></script>

<!-- Datatables JS -->
<script src="<?php echo $base_url; ?>plugin/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $base_url; ?>plugin/datatable/js/dataTables.bootstrap.js"></script>

<!-- SimpleWeather JS -->
<script src="<?php echo $base_url; ?>plugin/simpleWeather/jquery.simpleWeather.min.js"></script>

<!-- JQuery UI JS -->
<script src="<?php echo $base_url; ?>plugin/jquery-ui/jquery-ui.js"></script>

<!-- FullCalendar JS -->
<script src="<?php echo $base_url; ?>plugin/fullcalendar-2.1.1/lib/moment.min.js"></script>
<script src="<?php echo $base_url; ?>plugin/fullcalendar-2.1.1/fullcalendar.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
		//INITIATE NAVBAR HOVER
        
        $('.navbar .dropdown').mouseover(function() {
		  $('.dropdown-menu').hide();
          $('.navbar .dropdown').removeClass('active');
          $(this).find('.dropdown-menu').show();
          $(this).addClass('active');
        });
        
        $('.navbar .dropdown').mouseout(function(){
            $('.navbar .dropdown').removeClass('active');  
            var pathArray = window.location.pathname.split( '/' );
            var active = pathArray[2];
            var drop_hide = $('.dropdown-menu').hide();
            if(active == ''){
                drop_hide;
                $('#home').find('.dropdown-menu').show();
                $('#home').addClass('active');            
            }
            else if(active == 'aboutIna'){
                drop_hide;
                $('#aboutIna').find('.dropdown-menu').show();
                $('#aboutIna').addClass('active');            
            }
            else if(active == 'aboutInaCor'){
                drop_hide;
                $('#aboutInaCor').find('.dropdown-menu').show();
                $('#aboutInaCor').addClass('active');            
            }
            else if(active == 'destinations'){
                drop_hide;
                $('#destinations').find('.dropdown-menu').show();
                $('#destinations').addClass('active');            
            }
            else if(active == 'attraction'){
                drop_hide;
                $('#attraction').find('.dropdown-menu').show();
                $('#attraction').addClass('active');            
            }
            else if(active == 'cultureArt'){
                drop_hide;
                $('#cultureArt').find('.dropdown-menu').show();
                $('#cultureArt').addClass('active');            
            }
            else if(active == 'food'){
                drop_hide;
                $('#food').find('.dropdown-menu').show();
                $('#food').addClass('active');            
            }
            else if(active == 'shopping'){
                drop_hide;
                $('#shopping').find('.dropdown-menu').show();
                $('#shopping').addClass('active');            
            }
            console.log(active);
        });
        
               
        $('.navbar .active').find('.dropdown-menu').show();
        $(function () {
            $('#myTab a:last').tab('show')
        });
        
        $('.navbar .dropdown > a').click(function(){
            location.href = this.href;
        });
        
        //INITIATE SIMPLE WEATHER
        $.simpleWeather({
            location: 'Indonesia, Jakarta',
            woeid: '',
            unit: 'f',
            success: function(weather) {
              html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
              html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
              html += '<li class="currently">'+weather.currently+'</li>';
              html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';
          
              $("#weather").html(html);
            },
            error: function(error) {
              $("#weather").html('<p>'+error+'</p>');
            }
          });
        
        //INITIATE DATEPICKER
        $( "#datepicker" ).datepicker({
        	inline: true
        });
        
        // INITIATE GALLERY PLUGIN
            $('#blueimp-gallery').toggleClass('blueimp-gallery-controls', true);
        
        //INITIATE FULL CALENDAR
        $('#calendar').fullCalendar({
			header: false,
            defaultView: 'basicDay',
			defaultDate: '2014-09-12',
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: {
				url: 'php/get-events.php',
				error: function() {
					$('#script-warning').show();
				}
			},
			loading: function(bool) {
				$('#loading').toggle(bool);
			}
		});
        
    });
</script>