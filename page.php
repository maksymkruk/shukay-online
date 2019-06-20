<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="single-block-page">


<div class="cover-page">
<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#contact").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "#",     
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Повідомлення відправлено!</div>';   
					$("#fields").show();
				}
				else {result = msg;}
				$('#note').html(result);
				 $('.input', '#contact')       
 .not(':button, :submit, :reset, :hidden')
 .val('')			 
			}
		});
		return false;
	});
});
</script>

<?php $count = 0;?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="content-page">
<?php the_content(); ?>

<div class="comentu" id="comentu-page">
<?php comments_template(); ?>
</div>
</div>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>



</div>

</div>




<?php get_footer(); ?>
