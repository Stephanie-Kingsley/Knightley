<!DOCTYPE HTML>
<html>
<head>
	<title>Knightley</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>

<body>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<article>
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php the_content(); ?>
</article>
<?php endwhile; else: ?>
	No posts matched your query.
</head>
<?php endif; ?>

</body>
</html>
