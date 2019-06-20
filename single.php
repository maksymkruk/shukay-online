<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="single-block">
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

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="single-post">
<div class="post1">
<h1 class="zagolovok-single"><?php the_title(); ?></h1>
<p class="misto-post">Місто:</p> <?php the_category(); ?>
<p class="data-post"><i class="far fa-calendar-alt"></i>&nbsp;<?php the_time('j F Y в H:i') ?></p>
<div class="content">
<div class="content-single">
<?php the_content(); ?>
</div>


<div class="share-block">
<!-- uSocial -->
<script async src="#" data-script="usocial" charset="utf-8"></script>
<div class="uSocial-Share" data-pid="f224414e30fa33e62741174ea5c6c240" data-type="share" data-options="round-rect,style1,default,absolute,horizontal,size32,eachCounter1,counter0" data-social="vk,fb,twi,telegram" data-mobile="vi,wa,sms"></div>
<!-- /uSocial -->

</div>
<div class="info-post">
<a href="<?php the_permalink() ?>#comments"><?php comments_number( 'Коментарів: 0', 'Коментарів: 1', 'Коментарів: %' ); ?></a>

</div>
</div>

<div class="comentu">
<?php comments_template(); ?>


</div>

</div>

<?php endwhile; ?>


<?php endif; ?>




</div>
</div>


<?php get_footer(); ?>