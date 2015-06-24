<div class="fluid-container">
	<div class="row text-center footer-ppp">
		<img src="<?php echo ABSPATH;?>img/ppp_logo-footer.png"/>
		<p style="color:white;margin-top:50px;">
		&#169;2015 PPP Laser Clinic. All Rights Reserved. | Disclaimer
		</p>
	</div>
</div>
<a href="#" class="scrollToTop"><span class="glyphicon glyphicon-chevron-up" /></a>
<script>
$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
</script>