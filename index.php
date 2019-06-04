<?php
	include("admin/database.php");
?>
<?php 
include("header.php");
?>
	<!-- Place somewhere in the <body> of your page -->
	<div class="main_slider">
		<div class="flexslider">
			<?php
				$sql = "SELECT * FROM images";
				$result = mysqli_query($conn,$sql);

			?>
			<ul class="slides">
				<?php while($row = mysqli_fetch_array($result)): ?>
			    <li><img src='<?php echo "admin/upload/".$row['name'];  ?>' alt="<?php echo $row['name'];  ?>"></li>
			    <?php endwhile ?>
			</ul>
		</div>
	</div>
	<!-- main_slider -->
	<div class="content clearfix">
		<div class="inner">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.406407295483!2d96.1375705144001!3d16.806182788429382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb450499e3e3%3A0x123c960dbef7e7c2!2z44Ob44OG44OrIOOCouOCs-ODvOODiQ!5e0!3m2!1sja!2smm!4v1559551287492!5m2!1sja!2smm" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
<!-- </section> -->
<script src="common/js/jquery.flexslider.js"></script>
<script>
	$(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide"
	  });
	});
</script>
<?php 
include("footer.php");
?>

