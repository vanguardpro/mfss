<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php 
     
      
      $hyperlink=get_post_meta($post->ID, "hyperlink", true);
	  
	  $html=get_html();
	 
	  if(!$hyperlink){
		$hyperlink=$html->link;
	  }
	  
	  
	  

?>

<div data-role="content">


<div class="navigation">
      <div class="alignleft prevpost">
 
      </div>
      <div class="alignright nextpost">
        
      </div>
    </div>


<center>
<h1 class="title" style="font-size:22px; font-family: BebasNeue;" ><a onClick="_gaq.push(['_trackEvent', 'Post Link', '<?php the_title(); ?>', 'TitleMobile']);" href="<?php echo $hyperlink; ?>"><?php the_title(); ?></a></h1>   
<a href="<?php echo $hyperlink; ?>" target="_blank" onClick="_gaq.push(['_trackEvent', 'Post Link', '<?php the_title(); ?>', 'ImageMobile']);">
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-image'); ?>


<img src="<?php $image=str_replace('http://m.freesweetsweeps', 'http://freesweetsweeps', $image[0]); echo $image;?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" style="max-width:290px; padding:2px; border:1px solid #d7d7d7;" /></a><br />



<p>
 
<h3 class="meta" style="font-size:14px; font-weight:normal; text-transform:uppercase;"><?php the_time('F jS, Y'); ?></h3>
</center>

<div class="post">

<?php the_content();?>


</div>	
<?php if($hyperlink) {?>
<div class="max content">
<a onClick="_gaq.push(['_trackEvent', 'Post Link', '<?php the_title(); ?>', 'ButtonMobile']);" href="<?php echo $hyperlink; ?>" data-role="button" target="_blank" data-theme="<?php mobi_the_bpb_data_theme(); ?>" class="g-btn-xlg g-btn-act rnd max" value="Click Here" >Click Here</a>
</div>
<?php } ?>
<div style="margin-left:-15px">
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
<div>
<div align="center" style="margin-top:1.5em">
 <?php 

$navigation=new Navigation();
$navigation->get_previous_post('Expired');
?>
<?php $navigation->get_next_post('Expired');  ?>
<br/><br/>
</div>	
	</div><!-- /content --> 

	<?php endwhile; else: ?>

		<section>
			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		</section>

	<?php endif; ?>



<?php get_footer(); ?>