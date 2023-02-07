			<!--section package -->
			<section class="package">
				<div class="text-center">
					<h3>Our <b>Packages</b></h3>
						<p>Choose one of our packages to enlist our expertise for creating your brand image.</p>
							<button class="package-tab-active" id="logo">LOGO</button>
							<button class="package-tab" id="cms-website">CMS WEBSITE</button>
							<button class="package-tab" id="website">WEBSITE</button>
							<button class="package-tab" id="seo">SEO</button>
							<button class="package-tab" id="e-commerce">E-COMMERCE</button>
							<button class="package-tab" id="content-writing">CONTENT WRITING</button>
							<button class="package-tab" id="social-media">SOCIAL MARKETING</button>
						<?php
							require_once("logo-package.php");
							require_once("cms-website-package.php");
							require_once("website-package.php");
							require_once("seo-package.php");
							require_once("e-commerce-package.php");
							require_once("content-writing-package.php");
							require_once("social-media-package.php");
						?>
				</div>
			</section>
			<!--section package end -->