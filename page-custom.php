<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
		<div id="container">
			<div id="content" class="clearfix">
				<div id="main2" class="col940 left first clearfix" role="main">
					<div class="category_bar left clearfix col380">
						<div class="me-image">
							
							<!-- Add an Image of yours over here -->
						</div>
						<p class="text">
							
							<!-- A bit of details about you certainly looks good on the welcome page -->
							
							</p>
					</div>
					<div class="category_bar right clearfix col220">
						<h3>My Recent Posts</h3>
						<ul class="category_home">
							<?php wp_get_archives('type=postbypost&limit=10');?>
						</ul>
					</div>
					<div class="category_bar right clearfix col220">
						<h3>Posts By Categories</h3>
						<ul class="category_home">
							<?php wp_list_categories('title_li='); ?>
						</ul>
					</div>
				</div> <!-- end #main -->
			</div> <!-- end #content -->
		</div>
<?php get_footer(); ?>