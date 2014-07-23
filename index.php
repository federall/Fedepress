<?php get_header(); ?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

query_posts( [
  'posts_per_page' => get_option( 'posts_per_page' ),
  'paged'          => $paged
] );

if ( have_posts() ) :
?>

  <nav class="posts-nav">
    <ul>
      <li><?= get_next_posts_link( __( '« Articles plus anciens', 'fedepress' ) ); ?></li>
      <li><?= get_previous_posts_link( __( 'Articles plus récents »', 'fedepress' ) ); ?></li>
    </ul>
  </nav><!-- /.posts-nav -->

<?php
  while ( have_posts() ) :
    the_post();
?>

    <article class="post">

      <header class="post-header">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p>publié le <?= get_the_date(); ?> par <?php the_author_link(); ?></p>
      </header><!-- /.post-header -->

      <div class="post-content">
        <?php the_content(); ?>
      </div><!-- /.post-content -->

    </article><!-- /.post -->

<?php
  endwhile;
?>

  <nav class="posts-nav">
    <ul>
      <li><?= get_next_posts_link( __( '« Articles plus anciens', 'fedepress' ) ); ?></li>
      <li><?= get_previous_posts_link( __( 'Articles plus récents »', 'fedepress' ) ); ?></li>
    </ul>
  </nav><!-- /.posts-nav -->

<?php
endif;

wp_reset_query();
?>

<?php get_footer(); ?>
