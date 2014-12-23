<?php get_header(); ?>
<?php  if(1==2 ) { ?>
		<section>

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>">
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></p>
				</header>
				<section>
					<?php the_content('Read more on "'.the_title('', '', false).'" &raquo;'); ?>

				</section>
				<footer>
					<p><?php the_tags('Tags: ', ', ', '<br>'); ?> Posted in <?php the_category(', '); ?> &bull; <?php edit_post_link('Edit', '', ' &bull; '); ?> <?php comments_popup_link('Respond to this post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p>
				</footer>
			</article>

			<?php endwhile; ?>

			<nav>
				<p><?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?></p>
			</nav>

			<?php else : ?>

			<article>
				<h1>Not Found</h1>
				<p>Sorry, but the requested resource was not found on this site.</p>
				<?php get_search_form(); ?>
			</article>

			<?php endif; ?>

		</section>

<?php } else {?>
<div data-role="content">
    	
	<div class="content-primary">	
		<ul data-role="listview" data-theme="d" data-inset="false">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); global $post; /*$is_expired=check_if_post_exprired($post->ID); */
			if($is_expired){
	
} else { ?>
            <?php /*$imgsrc=get_main_image_url();*/?>			
            <li  ><a class="custom-a" href="<?php the_permalink() ?>" data-transition="turn">
                <span class="custom-img" >
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-image');  ?>
				<img src="<?php $image=str_replace('http://m.freesweetsweeps', 'http://freesweetsweeps', $image[0]); echo $image; ?>"  height="66">
                </span>
				<span class="custom-heading"><?php  mobile_title($post->ID); ?></span>
				
			</a>
            </li>
			<?php  $i+=1; if ($i == 1){ ?>
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
				} endwhile; ?>

			
				<div class='pagenav'> <?php posts_nav_link(' ','<span data-role="button" data-theme="a" data-icon="arrow-l" data-inline="true" data-mini="true" class="ppage" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>','<span data-role="button" data-theme="a" data-icon="arrow-r" data-inline="true" data-mini="true" data-iconpos="right" class="npage"  >&nbsp;&nbsp;&nbsp;More Offers&nbsp;</span>'); ?></div>
			
<?php get_search_form(); ?>
			<?php else : ?>

			
				
			<li>
				<h1 align="center"><span class="custom-heading">Not Found</span></h1>
				<h2 align="center">Sorry, but the requested resource was not found on this site.</h2>
				<?php get_search_form(); ?>
			</li>
			

			<?php endif; ?>
                 
		</ul>
        
    </div>	
	</div><!-- /content -->

<?php } ?>

<?php get_footer(); ?>