<?php  
	include("header.php");
?>

	<div class="main_bnr">
		<div class="banner">
			<div class="inner">
				<p>Article</p>
			</div>
		</div>
	</div>
	<!-- main_bnr -->
	<div class="article">
		<div class="inner">
			<h3 class="logoTtl">Article</h3>
			<ul class="articleBox clearfix">
				<li>
					<a href="#">
						<p>Web Developmnet ဆိုတာဘာလဲ ?</p>
						<img src="img/article/article01.jpg" alt="article">
					</a>
				</li>
				<li>
					<a href="#">
						<p>Web Developmnet Basic Knowledge</p>
						<img src="img/article/article02.jpg" alt="article">
					</a>
				</li>
				<li>
					<a href="#">
						<p>What is PHP?</p>
						<img src="img/article/article01.jpg" alt="article">
					</a>
				</li>
			</ul>
		</div>
		<!-- inner -->
	</div>
	<!-- article -->

<?php  
	include("footer.php");
?>
<script src="common/js/jquery.matchHeight.js"></script>
<script>
	$(function() {
	    $('.articleBox img').matchHeight();
	});
</script>