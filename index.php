<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
	include_once("load.php");
	/*require 'vendor/autoload.php';
	$app = new \Slim\Slim();
	$app->config(array(
    'debug' => true,
    'templates.path' => dirname(__FILE__).'/pages'
		));
	$app->get('/faq', function () use ($app) {
		$app->render('/pages/faq.php'); // <-- SUCCESS
		});
	$app->get('/', function () use ($app) {
		$app->render('faq.php'); // <-- SUCCESS
		});
	$app->get('/users','getUsers');
	$app->run();
	function getUsers(){echo 1111;}*/
?>
  </head>
<!-- http://css-snippets.com/drop-down-navigation --> 
<body>
<div id="content-ppp"></div>
<?php include_once("menu.php");
	  include_once("slider.php");
?>
<div class="fluid-container">
	<div class="row text-center ">
		<h1 class="homepageheader"> WHY CHOOSE PPP?</h1>
	</div>
	<div class="row text-center ">
		<div class="col-md-1 text-center"></div>
		<div class="col-md-2 text-center">
			<img src="img/1.png" /> 
			<p><strong>
				CLEANER, HEALTHIER SKIN LESS THAN 5 MINUTES
				</strong>
			</p>
		</div>
		<div class="col-md-2 text-center">
			<img src="img/2.png" />
			<p><strong>
			NON SURGICAL 
			NO DOWNTIME
			</strong>
			</p>
		</div>
		<div class="col-md-2 text-center">
			<img src="img/3.png" /> 
			<p>
			<strong>
			TREATMENT PROTOCOL DEVELOPED AND REFINED SINCE 1992
			</strong>
			</p>
		</div>
		<div class="col-md-2 text-center">
			<img src="img/4.png" />
			<p><strong>
			WE PRIORITISE
			YOUR SAFETY</strong>
			</p>
		</div>
		<div class="col-md-2 text-center">
			<img src="img/5.png" /> 
			<p><strong>
			PERFORMED BY MEDICAL DOCTORS TRAINED BY DR GOH SENG HENG
			</strong>
			</p>
		</div>
		<div class="col-md-1 text-center"></div>
	</div>
	<div class="row text-center ppp-blur-bg">
		<h1 class="homepageheader">OUR LASER TREATMENTS</h1>
		<div class="col-md-4 text-center">
			<img src="img/micro-laser-RESIZED.jpg" /> 
			<p class="homepage3treatments-title"><strong>
				PPP <BR />
				MICRO-LASER
				</strong>
			</p>
			<hr class="blue thick">
			<p class="homepage3treatments-subtitle ">
			<strong>Skincell Renewal & Textural Resurfacing</strong>
			</p>
			<p>A more intensive treatment used to smoothen, thicken and strengthen the skin</p>
		</div>
		<div class="col-md-4 text-center">
			<img src="img/laser-and-light-RESIZED.jpg" /> 
			<p class="homepage3treatments-title"><strong>
				PPP LASER & LIGHT <BR />
				CLEANING SYSTEM™
				</strong>
			</p>
			<hr class="blue thick">
			<p class="homepage3treatments-subtitle ">
			<strong>Non-Ablative Skin Rejuvenation</strong>
			</p>
			<p>PPP’s advanced laser treatment developed by Dr. Goh Seng Heng.	</p>
		</div>
		<div class="col-md-4 text-center">
			<img src="img/warm-touch-RESIZED.jpg" /> 
			<p class="homepage3treatments-title"><strong>
				PPP  <BR />
				WARM TOUCH
				</strong>
			</p>
			<hr class="blue thick">
			<p class="homepage3treatments-subtitle ">
			<strong>Skin Firming and Tightening</strong>
			</p>
			<p>A treatment used to stimulate collagen growth to tighten and contour the skin.</p>
		</div>		
	</div>
	<div class="row text-center ">
		<img width="100%" src="img/stats-banner1-compressor.jpg" />
	</div>
	<div class="row text-center ">
		<h1 class="homepageheader"> CLINIC INFORMATION TODAY</h1>
	</div>
	<div id="clinic_map" class="row text-center ">
		<div class="col-md-4">
			<div class="clinic-info-header">AMK CENTRAL</div>
			<div>709 Ang Mo Kio Ave 8 #01-2593 <span onclick="$('#map_amk').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_amk" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6456 0038"><span class="glyphicon glyphicon-earphone" />6456 0038</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
		<div class="col-md-4">
			<div class="clinic-info-header">ARC (Alexandra Retail Centre)</div>
			<div>460 Alexandra Road #02-26 <span onclick="$('#map_arc').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_arc" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6271 1223"><span class="glyphicon glyphicon-earphone" />6271 1223</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
		<div class="col-md-4">
			<div class="clinic-info-header">BEDOK</div>
			<div>204 Bedok North Street 1 #01-409 <span onclick="$('#map_bdk').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_bdk" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6448 1778"><span class="glyphicon glyphicon-earphone" />6448 1778</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
	</div>
	<div class="row text-center ">
		<div class="col-md-4">
			<div class="clinic-info-header">BISHAN MRT</div>
			<div>200 Bishan Road #01-03 <span onclick="$('#map_bsh').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_bsh" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6353 4408"><span class="glyphicon glyphicon-earphone" />6353 4408</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
		<div class="col-md-4">
			<div class="clinic-info-header">GOLDEN SHOE</div>
			<div>50 Market Street #01-22 <span onclick="$('#map_gsh').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_gsh" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6536 6628"><span class="glyphicon glyphicon-earphone" />6536 6628</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
		<div class="col-md-4">
			<div class="clinic-info-header">DHOBY GHAUT</div>
			<div>61 Orchard Road #01-50 <span onclick="$('#map_dbg').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_dbg" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6238 7760"><span class="glyphicon glyphicon-earphone" />6238 7760</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
	</div>
	<div class="row text-center ">
		<div class="col-md-4">
			<div class="clinic-info-header">AMK CENTRAL</div>
			<div>709 Ang Mo Kio Ave 8 #01-2593 <span onclick="$('#map_bsh').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_bsh" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6456 0038"><span class="glyphicon glyphicon-earphone" />6456 0038</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
		<div class="col-md-4">
			<div class="clinic-info-header">AMK CENTRAL</div>
			<div>709 Ang Mo Kio Ave 8 #01-2593 <span onclick="$('#map_bsh').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_bsh" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6456 0038"><span class="glyphicon glyphicon-earphone" />6456 0038</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
		<div class="col-md-4">
			<div class="clinic-info-header">AMK CENTRAL</div>
			<div>709 Ang Mo Kio Ave 8 #01-2593 <span onclick="$('#map_bsh').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_bsh" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6456 0038"><span class="glyphicon glyphicon-earphone" />6456 0038</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
	</div>
	<div class="row text-center ">
		<div class="col-md-4">
			<div class="clinic-info-header">AMK CENTRAL</div>
			<div>709 Ang Mo Kio Ave 8 #01-2593 <span onclick="$('#map_bsh').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_bsh" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6456 0038"><span class="glyphicon glyphicon-earphone" />6456 0038</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
		<div class="col-md-4">
			<div class="clinic-info-header">AMK CENTRAL</div>
			<div>709 Ang Mo Kio Ave 8 #01-2593 <span onclick="$('#map_bsh').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_bsh" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6456 0038"><span class="glyphicon glyphicon-earphone" />6456 0038</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
		<div class="col-md-4">
			<div class="clinic-info-header">AMK CENTRAL</div>
			<div>709 Ang Mo Kio Ave 8 #01-2593 <span onclick="$('#map_bsh').toggle();" class="glyphicon glyphicon-map-marker" /></div>
			<iframe id = "map_bsh" style="display:none"  frameBorder="0" scrolling="no" src="map/map.html" width="100%" height="400">
			  <p>Your browser does not support iframes.</p>
			</iframe>
			<div><a href="tel:6456 0038"><span class="glyphicon glyphicon-earphone" />6456 0038</a></div>
			<div>Doctor starts at: 10:00am</div>
			<div>Last Q-Ticket :7:00pm</div>
			<div>Waiting in line :<?php echo file_get_contents( 'http://pppque.dyndns.org:8080/pppque/queue_services.asmx/GetInQueueByOutlet?strOutlet=JPT' );?> </div>
			<div>Doctor’s Break Time :2:30pm to 3:00pm</div>
		</div>
	</div>	
</div>
<?php 
	include_once("footer.php");
?>
</body>
</html>