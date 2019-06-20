<!DOCTYPE html>
<html lang="uk">
<head>
	<title><?php wp_title( '', true, 'right' ); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5B46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Ruslan+Display" rel="stylesheet">



	<link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css' />


	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />

	<?php wp_head(); ?>
	


	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<script type="text/javascript">$(function () {
    $('.menu a, #sidebar-misto ul li a').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).addClass('active');
        }
        
        $(this).click(function() {
            $('.menu .active, #sidebar-misto ul li a . active').removeClass('active');
            $(this).addClass('active');            
        });
    });
});
</script>	

	
</head>
<body>

<div id="block-body">
<div id="fb-root"></div>




<div id="block-header">

	<div id="logo">
	<a id="nadpis" href="/">Шукаю <img src="<?php bloginfo('template_url'); ?>/images/search1.png" alt="shukay-logo" /><span>Тебе</span></a>
	</div>

	<nav>
	<div id="menu-ref">
<ul class="menu">
	<li><a href="https://shukay.online/">Всі новини</a></li>
	<?php wp_list_pages('include=10,12&title_li=' ); ?>
</ul>

</div>







</nav>

</div>