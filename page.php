<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article class="post">

    <header class="post-header">
      <h1><?php the_title(); ?></h1>
    </header><!-- /.post-header -->

    <div class="post-content">
      <?php the_content(); ?>
    </div><!-- /.post-content -->

  </article><!-- /.post -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>
