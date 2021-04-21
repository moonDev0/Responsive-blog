<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>About US</h3>
					<p><?php getshortdescription("titles"); ?></p>
					<div class="read">
						<a href="about.php" class="btn btn-primary read-m">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>Popular Posts</h3>
						<?php getpopularposts("page_hits"); ?>
					</div>
				</div>
			
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="<?php getlinks("links","facebook");?>">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="<?php getlinks("links","twitter");?>">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li>
												<!--dribble is now instagram-->
								<a class="dribble" href="<?php getlinks("links","dribble");?>">
										<i class="fab fa-instagram"></i>

										<span>instagram</span> </a>
								</li>
							<li>
							<!--pinterest is now youtube -->
								<a class="facebook" href="<?php getlinks("links","pinterest");?>">
									<i class="fab fa-youtube"></i>
									<span>youtube</span>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p> x!zone site <?php $current=date("Y"); print_r($current);?> | Brought To You by
						<a href="#">moonDev</a>
					</p>

				</div>
			</div>
			<!-- //footer -->
		</div>
	</footer>