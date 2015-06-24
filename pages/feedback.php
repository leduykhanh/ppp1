<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include_once("../load.php");?>
  </head>

<body>
<?php include_once("../menu.php");?>
<div class="fluid-container">
	<div class="row text-center ">
		<img width="100%" src="<?php echo ABSPATH;?>img/feedback.jpg" />
	</div>
	<div class="row text-center ">
		<h1 class="homepageheader"> GENERAL FEEDBACK</h1>
	</div>
</div>
<div class="container">
	<form id="feedback_form">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 form-group">
			<div class="col-md-6">
				<label>Full Name </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" />
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 form-group">
			<div class="col-md-6">
				<label>NRIC </label> 
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" />
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 form-group">
			<div class="col-md-6 ">
				<label>Email Address</label>  
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" />
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>		
		
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 form-group">
			<div class="col-md-6 ">
				<label>Contact Number</label>  
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" />
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>	
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 form-group">
			<div class="col-md-6">
			  <label for="fia">Feedback is About</label>
			</div>
			<div class="col-md-6">
				<select class="form-control" id="fia">
					<option>Treatments & Packages</option>
					<option>Clinic</option>
					<option>Staff</option>
					<option>Doctors</option>
					<option>Marketing</option>
					<option>Other Enquries</option>
			  </select>
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>	
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 form-group">
			<div class="col-md-6 ">
				<label>Upload Attachment (JPEG only) </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="file" />
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>					
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 form-group">
			<div class="col-md-6 ">
				<label>Date Of Last Treatment </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="datetime" />
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>					
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 form-group">
			<div class="col-md-6 ">
				<label>Clinic of last visit</label>
			</div>
			<div class="col-md-6">
				<select class=" form-control">
					<option>AMK CENTRAL</option>
					<option>ARC (Alexandra Retail Centre)</option>
					<option>BEDOK</option>
					<option>BISHAN MRT</option>
					<option>DHOBY GHAUT</option>
					<option>GOLDEN SHOE</option>
					<option>LUCKY PLAZA</option>
					<option>MARINE PARADE</option>
					<option>NEX</option>
					<option>RAFFLES CITY</option>
					<option>WEST COAST</option>
					<option>YISHUN CENTRAL</option>
					<option>JURONG POINT</option>
				</select>	
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>	
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 form-group">
			<div class="col-md-6 ">
				<label>Doctor Who Last Treat You </label> 
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" />
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 form-group">
			<div class="col-md-6 ">
				<label>Details</label>
			</div>
			<div class="col-md-6">
				<textarea class="form-control" type="" rows=3 ></textarea>
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>		
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 form-group">
			  <p>
				<img id="siimage" style="border: 1px solid #000; margin-right: 15px" src="<?php echo ABSPATH;?>securimage/securimage_show.php?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" align="left">
				<object type="application/x-shockwave-flash" data="<?php echo ABSPATH;?>securimage//securimage_play.swf?bgcol=#ffffff&amp;icon_file=<?php echo ABSPATH;?>securimage//images/audio_icon.png&amp;audio_file=<?php echo ABSPATH;?>securimage/securimage_play.php" height="32" width="32">
				<param name="movie" value="<?php echo ABSPATH;?>securimage//securimage_play.swf?bgcol=#ffffff&amp;icon_file=<?php echo ABSPATH;?>securimage//images/audio_icon.png&amp;audio_file=.<?php echo ABSPATH;?>securimage/securimage_play.php" />
				</object>
				&nbsp;
				<a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = '<?php echo ABSPATH;?>securimage/securimage_show.php?sid=' + Math.random(); this.blur(); return false"><img src="<?php echo ABSPATH;?>securimage/images/refresh.png" alt="Reload Image" onclick="this.blur()" align="bottom" border="0"></a><br />
				<strong>Enter Code*:</strong><br />
				<input type="text" id="ct_captcha" size="12" maxlength="16" />
			  </p>
			    <p>
				<?php
				  // show captcha HTML using Securimage::getCaptchaHtml()
				 /* require_once '../securimage/securimage.php';
				  $options = array();
				  $options['input_name'] = 'ct_captcha'; // change name of input element for form post

				  if (!empty($_SESSION['ctform']['captcha_error'])) {
					// error html to show in captcha output
					$options['error_html'] = $_SESSION['ctform']['captcha_error'];
				  }

				  echo Securimage::getCaptchaHtml($options);
				  */
				?>
			  </p>
		</div>
		<div class="col-md-3">
		</div>
	</div>			
		
		
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 text-right">
			<input type="submit" value="SUBMIT" />
		</div>
		<div class="col-md-3">
		</div>
	</div>	
	</form>
</div>
<?php 
	include_once("../footer.php");
?>
<script>
$('input[type="submit"]').click(function(){
	$.ajax({
		method:'POST',
		url:"../validation/feedbackForm.php",
		data:{
			ct_captcha : $("#ct_captcha").val(),
		},
		success:function(data){
			alert(data);
		}
	});
});

</script>
</body>
</html>