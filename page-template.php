<?php

/*

Template Name: BootstrapTemplate

*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!--**************                         Carousel                              *****************-->
			<div class="container-fluid">
			<div id="top-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#top-carousel" data-slide-to="0" class="active"></li>
			    <li data-target="#top-carousel" data-slide-to="1"></li>
			    <li data-target="#top-carousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="<?php echo get_template_directory_uri(); ?>/images/coffee.jpg" alt="...">
			      <div class="carousel-caption">
			        Caption 1
			      </div>
			    </div>
			    <div class="item">
			       <img src="<?php echo get_template_directory_uri(); ?>/images/coffee2.jpg" alt="...">
			      <div class="carousel-caption">
			        Caption 2
			      </div>
			    </div>
				<div class="item">
			       <img src="<?php echo get_template_directory_uri(); ?>/images/coffee3.jpg" alt="...">
			      <div class="carousel-caption">
			        Caption 3
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#top-carousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#top-carousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			</div>












<!--**************                         2 COLUMNS                               *****************-->

			<div id="twoColumns">
				<div class="container section">
					<div class="sectionHead">
							<h2>2 Columns</h2>
					</div>
					<div class="sectionText">
						<h3 class = "prominent">Use this template if you would like to have 2 columns of content.</h3>
					</div>
					<div class="sectionContent">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<div class="box">
										<h4>Column 1</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="box">
										<h4>Column 2</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<!--**************                         3 COLUMNS                               *****************-->

			<div id="threeColumns">
				<div class="container section">
					<div class="sectionHead">
							<h2>Three Columns</h2>
					</div>
					<div class="sectionText">
						<h3 class = "prominent">Use this template if you would like to have 3 columns of content.</h3>
					</div>
					<div class="sectionContent">
						<div class="container">
							<div class="row">
								<div class="col-sm-4">
									<div class="box">
										<h4>Column 1</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="box">
										<h4>Column 2</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="box">
										<h4>Column 3</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<!--**************                         4 COLUMNS                               *****************-->

			<div id="fourColumns">
				<div class="container section">
					<div class="sectionHead">
							<h2>Four Columns</h2>
					</div>
					<div class="sectionText">
						<h3 class = "prominent">Use this template if you would like to have 4 columns of content.</h3>
					</div>
					<div class="sectionContent">
						<div class="container">
							<div class="row">
								<div class="col-sm-3">
									<div class="box">
										<h4>Column 1</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="box">
										<h4>Column 2</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="box">
										<h4>Column 3</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="box">
										<h4>Column 4</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<!--**************                         3 COLUMN IMAGES                              *****************-->

			<div id="threeColumnsImages">
				<div class="container section">
					<div class="sectionHead">
							<h2>Three Columns with Images</h2>
					</div>
					<div class="sectionText">
						<h3 class = "prominent">Use this template if you would like to have 3 columns with images and a title.</h3>
					</div>
					<div class="sectionContent">
						<div class="container">
							<div class="row">
								<!-- <div class="col-sm-3"></div> -->
								<div class="col-sm-4">
									<div class="box">
										<img src="<?php echo get_template_directory_uri(); ?>/images/template.png" alt="">
										<h3>Title One</h3>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="box">
										<img src="<?php echo get_template_directory_uri(); ?>/images/template.png" alt="">
										<h3>Title Two</h3>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="box">
										<img src="<?php echo get_template_directory_uri(); ?>/images/template.png" alt="">
										<h3>Title Three</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



<!--**************                         3 ROW IMAGES                              *****************-->

			<div id="threeRowsImages">
				<div class="container section">
					<div class="sectionHead">
							<h2>Three Rows with Images</h2>
					</div>
					<div class="sectionText">
						<h3 class = "prominent">Use this template if you would like to have 3 rows with images and a title and a description.</h3>
					</div>
					<div class="sectionContent">
						<div class="container">
							<div class="row">
								<div class="box">
									<div class="col-sm-2">
										<img src="<?php echo get_template_directory_uri(); ?>/images/template.png" alt="">
									</div>
									<div class="col-sm-10">									
										<h3>Title One</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
								</div>
								<div class="box">
									<div class="col-sm-2">
										<img src="<?php echo get_template_directory_uri(); ?>/images/template.png" alt="">
									</div>
									<div class="col-sm-10">									
										<h3>Title Two</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
								</div>
								<div class="box">
									<div class="col-sm-2">
										<img src="<?php echo get_template_directory_uri(); ?>/images/template.png" alt="">
									</div>
									<div class="col-sm-10">									
										<h3>Title Three</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>




<!--**************                         4 ROW IMAGES PING PONG                              *****************-->

			<div id="fourRowsPingPong">
				<div class="container section">
					<div class="sectionHead">
							<h2>Four Rows Pinp Pong</h2>
					</div>
					<div class="sectionText">
						<h3 class = "prominent">Use this template if you would like to have 4 rows ping ponging.</h3>
					</div>
					<div class="sectionContent">
						<div class="container">
							<div class="row">
								<div class="box">
									<div class="col-sm-2">
										<img src="<?php echo get_template_directory_uri(); ?>/images/template.png" alt="">
									</div>
									<div class="col-sm-10">									
										<h3>Title One</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
								</div>
								<div class="box">
									<div class="col-sm-10">									
										<h3>Title Two</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
									<div class="col-sm-2">
										<img src="<?php echo get_template_directory_uri(); ?>/images/template.png" alt="">
									</div>
								</div>
								<div class="box">
									<div class="col-sm-2">
										<img src="<?php echo get_template_directory_uri(); ?>/images/template.png" alt="">
									</div>
									<div class="col-sm-10">									
										<h3>Title Three</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
								</div>
								<div class="box">
									<div class="col-sm-10">									
										<h3>Title Four</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
									<div class="col-sm-2">
										<img src="<?php echo get_template_directory_uri(); ?>/images/template.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



<!--**************                         CHECKMARK LIST                               *****************-->

			<div id="checkmarkList">
				<div class="container section">
					<div class="sectionHead">
							<h2>Checkmark List</h2>
					</div>
					<div class="sectionText">
						<h3 class = "prominent">Use this template if you would like to have list without using the li tag.</h3>
					</div>
					<div class="sectionContent">
						<div class="container">
							<div class="row">
								<!-- <div class="col-sm-3"></div> -->
								<div class="col-sm-12">
									<div class="box">
										<div class="checkMark">
											<img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.png" alt="">
										</div>	
										<div class="checkList">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="box">
										<div class="checkMark">
											<img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.png" alt="">
										</div>	
										<div class="checkList">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="box">
										<div class="checkMark">
											<img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.png" alt="">
										</div>	
										<div class="checkList">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="box">
										<div class="checkMark">
											<img src="<?php echo get_template_directory_uri(); ?>/images/checkmark.png" alt="">
										</div>	
										<div class="checkList">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sectionContent hover-zoom">
				<div class="container">
					<div class="col-md-4">
						<div class="content-box">
							<img src="http://img.youtube.com/vi/8uwd1uWzg_A/0.jpg"/>
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>Caption</h3>
									<p>Description</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

					<div class="container">
						<div class="row"><!-- ********************* PICTURE SECTION-->
							<div class="picture-section">

								<div class="col-sm-4">
									<div class="picture-box overlay overlay-color">
										<img src="<?php echo get_template_directory_uri(); ?>/images/cafe_bar.jpg" alt="">
									</div>
								</div>



								<div class="col-sm-4">
									<div class="picture-box overlay overlay-color">
										<img src="<?php echo get_template_directory_uri(); ?>/images/pic1.jpg" alt="">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="picture-box overlay overlay-color">
										<img src="<?php echo get_template_directory_uri(); ?>/images/pic2.jpg" alt="">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="picture-box overlay overlay-color">
										<img src="<?php echo get_template_directory_uri(); ?>/images/pic3.jpg" alt="">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="picture-box overlay overlay-color">
										<img src="<?php echo get_template_directory_uri(); ?>/images/pic4.jpg" alt="">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="picture-box overlay overlay-color">
										<img src="<?php echo get_template_directory_uri(); ?>/images/pic5.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>