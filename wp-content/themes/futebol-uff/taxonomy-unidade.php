<?php 
	get_header();
    $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
    $taxonomies = get_terms( 'unidade', array(
        'hide_empty' => true,
    ) );
?>
<span class="way"><a href="<?= site_url(); ?>">Home</a> > <?= $term->name ?></span>
<h1><?= $term->name ?></h1>
<?php if(!empty($taxonomies)): foreach ($taxonomies as $tax ): ?>
    <a href="<?= get_term_link( $tax ); ?>" class="<?= $tax->term_id == $term->term_id ? "active" : "" ?>">
        <?= $tax->name ?>
    </a>              
<?php endforeach; endif; ?>
<?php get_footer();?>
