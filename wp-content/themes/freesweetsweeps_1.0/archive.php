<?php get_header(); ?>

		<div align="center">

		<?php if (have_posts()) : ?>

			<?php $post = $posts[0]; // hack: set $post so that the_date() works ?>
			<?php if (is_category()) { ?>
			<h1><span class="custom-heading"><?php single_cat_title(); ?></span></h1>

			<?php } elseif(is_tag()) { ?>
			<h1><span class="custom-heading">Posts Tagged &ldquo;<?php single_tag_title(); ?>&rdquo;</span></h1>

			<?php } elseif (is_day()) { ?>
			<h1><span class="custom-heading">Archive for <?php the_time('F jS, Y'); ?></span></h1>

			<?php } elseif (is_month()) { ?>
			<h1><span class="custom-heading">Archive for <?php the_time('F, Y'); ?></span></h1>

			<?php } elseif (is_year()) { ?>
			<h1><span class="custom-heading">Archive for <?php the_time('Y'); ?></span></h1>

			<?php } elseif (is_author()) { ?>
			<h1><span class="custom-heading">Author Archive</span></h1>

			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1><span class="custom-heading">Blog Archives</span></h1>

		<?php } ?>
        
        
        </div>
        
        <ul data-role="listview" data-theme="d" data-inset="false">
		<?php while (have_posts()) : the_post(); ?>

		<!--	<article id="post-<?php the_ID(); ?>">
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
				</header>
				<section>
					<?php the_excerpt(); ?>

				</section>
				<footer>
					<p><?php the_tags('Tags: ', ', ', '<br>'); ?> Posted in <?php the_category(', '); ?> &bull; <?php edit_post_link('Edit', '', ' &bull; '); ?> <?php comments_popup_link('Respond to this post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p>
				</footer>
			</article>-->
            
            
            <li><a class="custom-a" href="<?php the_permalink() ?>" data-transition="turn">
				 <span class="custom-img" >
				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-image'); ?>
				<img src="<?php $image=str_replace('http://m.freesweetsweeps', 'http://freesweetsweeps', $image[0]); echo $image;  ?>"  height="66">
                </span>
				<span class="custom-heading"><?php  mobile_title($post->ID); ?></span>
				
			</a>
            </li>
            <?php $i+=1; ?>
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
            
           

			<div class='pagenav'> <?php posts_nav_link(' ','<span data-role="button" data-theme="'.mobi_get_content_data_theme().'" data-icon="arrow-l" data-inline="true" data-mini="true" class="ppage" >Previous Page</span>','<span data-role="button" data-theme="'.mobi_get_content_data_theme().'" data-icon="arrow-r" data-inline="true" data-mini="true" data-iconpos="right" class="npage"  >&nbsp;&nbsp;&nbsp;Next Page&nbsp;&nbsp;&nbsp;</span>'); ?></div>

			<?php else : ?>

			
			<li>
				<h1 align="center"><span class="custom-heading">Not Found</span></h1>
				<h2 align="center">Sorry, but the requested resource was not found on this site.</h2>
				<?php get_search_form(); ?>
			</li>
			

			<?php endif; ?>
 </ul>
		



<?php get_footer(); ?>
