<?php get_header(); ?>
			<?php if (have_posts()) : ?>

			
				<h1 align="center"><span class="custom-heading">Search Results for &ldquo;<?php the_search_query(); ?>&rdquo;</span></h1>
				<ul data-role="listview" data-theme="d" data-inset="false">

					<?php while (have_posts()) : the_post(); ?>

				
           
            <li><a class="custom-a" href="<?php the_permalink() ?>" data-transition="turn">
				 <span class="custom-img" >
				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-image'); ?>
				<img src="<?php echo $image[0]; ?>"  height="66">
                </span>
				<span class="custom-heading"><?php  mobile_title($post->ID); ?></span>
				
			</a>
            </li> <?php $i+=1; ?>
				<?php
					if ($i == 1){?>
<div id="google_ads_li" style="height:50px;" >
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7945481179141682";
/* mobile_after1 */
google_ad_slot = "8883893830";
google_ad_width = 320;
google_ad_height = 50;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
                        </div>
					<?php
						++$i;
					}
				?>         
					<?php endwhile; ?>

				</ul>
		
							<div class='pagenav'> <?php posts_nav_link(' ','<span data-role="button" data-theme="'.mobi_get_content_data_theme().'" data-icon="arrow-l" data-inline="true" data-mini="true" class="ppage" >Previous Page</span>','<span data-role="button" data-theme="'.mobi_get_content_data_theme().'" data-icon="arrow-r" data-inline="true" data-mini="true" data-iconpos="right" class="npage"  >&nbsp;&nbsp;&nbsp;Next Page&nbsp;&nbsp;&nbsp;</span>'); ?></div>
			
<?php get_search_form(); ?>

			<?php else : ?>

			<li>
				<h1 align="center"><span class="custom-heading">Not Found</span></h1>
				<h2 align="center">Sorry, but the requested resource was not found on this site.</h2>
				<?php get_search_form(); ?>
			</li>

			<?php endif; ?>




<?php get_footer(); ?>