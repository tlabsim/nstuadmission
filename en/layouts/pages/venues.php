<style>
* { box-sizing: border-box }

h6
{
	background-color: #E6E6E6;
	border-bottom: 3px solid #D6D6D6;
	padding-left: 20px;
	height: 40px;
	line-height: 40px;
	font-size: 20px;
	margin-bottom: 0px;
}

.spanel
{
	box-shadow: 0px 0px 5px rgba(128,128,128,0.5);
}

.bpanel
{
	background-color: #FFF;
	padding: 20px;
}

#roll-not-found
{
	position: relative;
	height: 50px;
	margin-top: 10px;
	background-color: #FBE5D6;
	padding: 0px 20px;
	line-height: 50px;
	border-radius: 5px;
}

#venue-result
{
	margin-top: 15px;
}

#vr-unit
{
	float: left;
	background-color: #E6E6E6;
	border-radius: 10px 10px 0px 0px;
	font-size: 15px;
	line-height: 20px; 
	padding: 10px 20px;
	text-transform: uppercase;
	color: #767676;
}

#vr-venue
{
	clear: both;
	margin: 0px;
	background-color: #F0F0F0;
	border-radius: 0px 10px 10px 10px;
	line-height: 50px;
	font-size: 20px;
	padding: 0px 0px 0px 20px;
}

#vr-dir
{
	height: 50px;
	width: 180px;
	float: right;
	background-color: #E6E6E6;
	border-radius: 0px 10px 10px 0px;
	padding: 0px 10px;
	font-size: 14px;
	color: #363636;
	line-height: 50px;
	
}

#vr-dir:hover
{
	background-color: #D0D0D0;
	cursor: pointer; cursor: hand;
}

#vr-dir .img-icon
{	
	height: 24px;
	margin-right: 10px;
}

@media (max-width: 1000px) {
	#vr-unit
	{
		float: none;
	}
	
	#vr-venue
	{
		clear: both;
		margin: 0px;
		line-height: 30px;
		padding: 10px 20px;
		border-radius: 0px 0px 10px 10px;
	}

	#vr-dir
	{
		height: 40px;
		float: none;
		border-radius: 10px;
		padding: 0px 10px;
		line-height: 40px;
		margin-top: 10px;
	}
}

img.venue-photo
{
	background-color: #E6E6E6;
	width: 100%;
}

#modal-gmap
{
	width: 100%;
	height: 400px;
}

#download-bar
{
	background: #F0F0F0;
	border-top: 1px solid #C6C6C6;
	line-height: 30px;
	font-size: 15px;
	color: #464646;
	padding: 10px 20px;
}

#download-bar a
{
	color: #565656;
	text-outline: none;
}



</style>

<div class="spanel">
	<h6>
		Find your exam venue
	</h6>
	<div class="bpanel">
		<p>
			Enter your roll here:
		</p>
		<input id="search-roll" type="text" name="roll" placeholder="Roll" style="background-color: #F0F0F0; height: 40px; width: 200px; float:left; margin-bottom: 5px; margin-right: 10px;"></input>
		<input id="find-venue" value="Find venue" type="submit" style="height: 40px; margin-bottom: 5px;">
		
		<div id="alert_roll_not_found" class="alert alert-danger alert-dismissable hidden" style="margin-top: 10px;">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4>Roll not found!</h4>
			<p>Please input a valid roll.</p>
		</div>
		
		<div id="venue-result" class="hidden">
			<div id="vr-unit">
				<span>Your venue for unit </span><span id="s-vr-unit"></span><span> admission test</span>
			</div>
			
			<div id="vr-venue">
				<span id="res-venue"></span>
				<div id="vr-dir" data-toggle="modal" data-target="#venue-details">
					<span><img class="img-icon" src="../images/compass.png"/></span><span>GET DIRECTION</span>
				</div>
			</div>	
		</div>			
	</div>
	<div id="download-bar">
		<span>Download seat plan (all units):</span>
		&nbsp;&nbsp;
		<i class="fa fa-download">&nbsp;</i>
		<a target="blank" href="http://nstu.edu.bd/images/Notices/2015/Admission 2015-16/Seat Plan/seat plan of NSTU admission test 2015-16.pdf">Download PDF</a>
		&nbsp;&nbsp;
		<i class="fa fa-download">&nbsp;</i>
		<a target="blank" href="http://nstu.edu.bd/images/Notices/2015/Admission 2015-16/Seat Plan/seat plan of NSTU admission test 2015-16.doc">Download DOC</a>
	</div>	
	
</div>

<div id="venue-details" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 id="modal-venue-name" class="modal-title">VENUE DETAILS :: </h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4">
						<img id="modal-venue-photo" class="venue-photo" src="../images/venues/nstu.jpg"/>
						<h4 id="modal-venue-loc"></h4>
						<h5>যেভাবে যাবেনঃ </h5>
						<p id="modal-venue-dir"></p>
					</div>
					<div class="col-md-8">
						<div id="modal-gmap-data-container" class="hidden" data-lat="" data-lng=""> </div>
						<div id="modal-gmap">
						</div>
					</div>
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<!--<script src="../scripts/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="../scripts/bootstrap.min.js" type="text/javascript"></script>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvJXjCHkAAMGTLrtYECvUEAGbieZGhZ1g"></script>

<script src="../scripts/venue-search.js" type="text/javascript"></script>


<script>
var map;
function load_map(lat, lng) {
	var mapCanvas = document.getElementById('modal-gmap');
	var mapOptions = {
	  center: new google.maps.LatLng(lat, lng),
	  zoom: 16,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	 map = new google.maps.Map(mapCanvas, mapOptions);
}

function find_venue()
{
	var sr = $('#search-roll').val().trim();
		
	if(sr!="")
	{
		var r = parseInt(sr);
		var res = search(r);
		
		if(res != null && res.success)
		{				
			$('#s-vr-unit').text(res.unit);
			$('#res-venue').text(res.centre_name);
			
			$('#modal-venue-name').text('VENUE DETAILS :: ' + res.centre_name);
			$('#modal-venue-photo').attr('src', res.centre_img);
			$('#modal-venue-loc').text(res.centre_loc);
			$('#modal-venue-dir').text(res.centre_dir);
			
			$('#modal-gmap-data-container').attr('data-lat', res.centre_lat);
			$('#modal-gmap-data-container').attr('data-lng', res.centre_lng);
			
			$('#alert_roll_not_found').addClass('hidden');
			$('#venue-result').removeClass('hidden');		
		}
		else
		{
			$('#venue-result').addClass('hidden');
			$('#alert_roll_not_found').removeClass('hidden');
		}
	}
}

$(document).ready(function() { 
	$('#find-venue').click(function(){
		find_venue();
	});
	
	$('#search-roll').keydown(function(e){
		if(e.which == 13)
		{
			find_venue();
		}
	});

	$('#search-roll').on('input', function(){
		$('#venue-result').addClass('hidden');
		$('#alert_roll_not_found').addClass('hidden');
	});

	$('#venue-details').on('shown.bs.modal', function(e) {
        var lat = parseFloat($('#modal-gmap-data-container').attr('data-lat'));
		var lng = parseFloat($('#modal-gmap-data-container').attr('data-lng'));
		load_map(lat,lng);
    });


});	
	
</script>