<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="block-content">
<script type='text/javascript'>
$(function() {
 $.fn.scrollToTop = function() {
  $(this).hide().removeAttr("href");
  if ($(window).scrollTop() >= "250") $(this).fadeIn("medium")
  var scrollDiv = $(this);
  $(window).scroll(function() {
   if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("medium")
   else $(scrollDiv).fadeIn("medium")
  });
  $(this).click(function() {
   $("html, body").animate({scrollTop: 0}, "medium")
  })
 }
});

$(function() {
 $("#scrollup").scrollToTop();
});
</script>
<div id="scrollup"><i class="fa fa-space-shuttle fa-3x fa-rotate-270" aria-hidden="true"></i></div>

<?php $count = 0;?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>


<div class="post1">
<h1 class="zagolovok-single"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<p class="misto-post">Місто: </p><?php the_category(); ?>
<p class="data-post"><i class="far fa-calendar-alt"></i>&nbsp;<?php the_time('j F Y в H:i') ?></p>
<div class="content-index">
<?php the_content(); ?>
</div>
<div class="info-post">
<a href="<?php the_permalink() ?>#comments"><?php comments_number( 'Коментарів: 0', 'Коментарів: 1', 'Коментарів: %' ); ?></a>


</div>
</div>



	

	


<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>








<div class="pagination">
	<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
</div>

</div>



<?php get_footer(); ?>
