<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include_once("../load.php");?>

  </head>

<body>
<?php include_once("../menu.php");?>
	<div class="row text-center ">
		<img width="100%" src="<?php echo ABSPATH;?>img/understand-your-skin.png" />
	</div>
<div class="row featurette" id="third" 
data-center-top="opacity:0.1;" 
data-top-top="opacity:1;"
>
    <div class="col-md-4 text">
      <h1 class="homepageheader"> PORES</h1>
      <p class="faqtext">Pores are tiny openings in the skin that hair follicles and sebaceous glands (oil glands) that produce sebum, our body’s natural oil.</p>
    </div>
    <div class="col-md-8 image">
        <img class="featurette-image img-responsive" src="<?php echo ABSPATH;?>img/understand-your-skin-pimples.jpg" alt="Generic placeholder image">
    </div>
</div>
<div class="row featurette" id="third" 
data-center-top="opacity:0.1;" 
data-top-top="opacity:1;"
>
    <div class="col-md-8 image">
        <img class="featurette-image img-responsive" src="<?php echo ABSPATH;?>img/understand-your-skin-pores.jpg" alt="Generic placeholder image">
    </div>
    <div class="col-md-4 text">
      <h1 class="homepageheader"> PIMPLES</h1>
      <p class="faqtext">Acne is considered a subcategory of the oily skin type. It comes in many forms, including black and whiteheads, small papules, pustules and severe nodules and cysts.</p>
    </div>

</div>
<div class="row featurette" id="third" 
data-center-top="opacity:0.1;" 
data-top-top="opacity:1;"
>
    <div class="col-md-4 text">
      <h1 class="homepageheader"> PIGMENTATION</h1>
      <p class="faqtext">Sun exposure is the primary cause of premature ageing, brown spots, wrinkles and skin cancer.</p>
    </div>
    <div class="col-md-8 image">
        <img class="featurette-image img-responsive" src="<?php echo ABSPATH;?>img/understand-your-skin-pigmentation.jpg" alt="Generic placeholder image">
    </div>
</div>
<?php 
	include_once("../footer.php");
?>
<script type="text/javascript" src="<?php echo ABSPATH;?>js/skrollr-master/dist/skrollr.min.js"></script>
	<script type="text/javascript">
		var s = skrollr.init({forceHeight: false});
	</script>
</body>
</html>