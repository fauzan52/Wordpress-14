<?php get_header();  ?>
<main>
<?php
if( have_posts() ):
	while (have_posts() ): the_post();
        get_template_part('content');
	endwhile;
else:
	echo 'Tidak ada postingan';
endif;

?>

<a href="/wordpress" class="btn btn-success">Back to Home</a>
</main>

<?php get_footer(); ?>
