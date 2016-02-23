<?php get_header(); ?>
			<div id="about" class="parallax__group">
				<div class="parallax__layer parallax__layer--fore">
					<div class="title">Foreground Layer</div>
				</div>
				<div class="parallax__layer parallax__layer--base">
					<div class="title">
						About Us
						<?php
							$page_id = 5;
							$page_data = get_page($page_id);
							echo "<p>" . $page_data->post_content . "</p>";
						?>
					</div>
				</div>
			</div>
			<div id="services" class="parallax__group">
				<div class="parallax__layer parallax__layer--base">
					<div class="title">Services</div>
				</div>
				<div class="parallax__layer parallax__layer--back">
					<div class="title"></div>
				</div>
				<div class="parallax__layer parallax__layer--deep">
					<div class="title">Deep Background Layer</div>
				</div>
		    </div>
		    <div id="portfolio" class="parallax__group">
				<div class="parallax__layer parallax__layer--fore">
					<div class="title">Foreground Layer</div>
				</div>
				<div class="parallax__layer parallax__layer--base">
					<div class="title">Portfolio</div>
				</div>
		    </div>
		    <div id="contact" class="parallax__group">
				<div class="parallax__layer parallax__layer--back">
					<div class="title"></div>
				</div>
				<div class="parallax__layer parallax__layer--base">
					<div class="title">Contact Us</div>
				</div>
			</div>
		</div>
<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>


		<!--<div id="main">
			<div class="center" id="splash">
				<div id="adtext">
					<div id="advert_text">
						<div id="big">
							Let your<br />
							ideas reach<br />
							new heights.
						</div>
						<div id="subtext">
							We will deliver to you what you have in mind.
						</div>
						<div id="button">
							<button>Partner with us</button>
						</div>
					</div>
				</div>
				<div id="adimage">
					<img src="images/main_img_2.png" />
				</div>
			</div>
		</div>-->

		<!--<div id="content">
			<div class="center" id="steps">
				<p>We are ready to provide solutions in various fields of multimedia.</p>
				copywriting, website development, graphic design, and social media marketing.
				<div id="categories">
					<ul>
						<li>Copywriting</li>
						<li></li>
						<li>Website Development</li>
						<li></li>
						<li>Graphic Design</li>
						<li></li>
						<li>Social Media Marketing</li>
					</ul>
				</div>

				Our team of highly-qualified Filipino freelancers aim to help small businesses achieve more for less through topnotch service at affordable rates.
			</div>
		</div>-->

		<!--<div id="footer">
			&copy; 2014. Creative Contents. All rights reserved.
		</div>-->