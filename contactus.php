<?php  
	include("header.php");
?>
	<div class="main_bnr">
		<div class="banner">
			<div class="inner">
				<p>Contact Us</p>
			</div>
		</div>
	</div>
	<!-- main_bnr -->
	<div class="contact">
		<div class="inner">
			<h3 class="logoTtl">Contact Us</h3>
			<form action="mail.php" method="post">
				<table class="contactTbl clearfix">
					<tr class="row01">
						<td>
							<label>First Name</label><br>
							<input type="text" name="firstname" value="" placeholder="Enter First Name" class="form-control" required>
						</td>
					</tr>
					<tr class="row02">
						<td>
							<label>Last Name</label><br>
							<input type="text" name="lastname" value="" placeholder="Enter Last Name" class="form-control" required>
						</td>
					</tr>
					<tr class="row01">
						<td>
							<label>Phone No.</label><br>
							<input type="text" name="phoneno" value="" placeholder="Enter Phone No." class="form-control" required>
						</td>
					</tr>
					<tr class="row02">
						<td>
							<label>Email</label><br>
							<input type="text" name="email" value="" placeholder="Enter Email" class="form-control" required>
						</td>
					</tr>
					<tr>
						<td class="textarea">
							<span>Message</span><textarea name="message" placeholder="Enter Your Message..." class="form-control" required></textarea>
						</td>
					</tr>
				</table>
				<input type="submit" name="submit" class="submit">
			</form>
			<div class="contactBox">
				<ul>
					<li>Contact us</li>
					<li>Email : ditigaltreemyanmar@gmail.com</li>
					<li>Phone : 09 96 4288 636</li>
				</ul>
			</div>
			<!-- contactBox -->
			<div class="contactBox01">
				<p>Location</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.406407295483!2d96.1375705144001!3d16.806182788429382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb450499e3e3%3A0x123c960dbef7e7c2!2z44Ob44OG44OrIOOCouOCs-ODvOODiQ!5e0!3m2!1sja!2smm!4v1559551287492!5m2!1sja!2smm" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<!-- contactBox01 -->
		</div>
		<!-- inner -->
	</div>
	<!-- contact -->
<?php  
	include("footer.php");
?>