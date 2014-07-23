<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>

  <?php
  $prev_post = get_previous_post();
  $next_post = get_next_post();
  ?>

  <nav class="posts-nav">
    <ul>
      <li class="post-nav__prev">
        <?php if ( $prev_post ) : ?>
          <a href="<?= get_permalink( $prev_post->ID ); ?>">« <?= $prev_post->post_title; ?></a>
        <?php endif; ?>
      </li>
      <li class="post-nav__back">
        <a href="<?= get_permalink( get_option( 'page_for_posts' ) ); ?>"><?php _e( 'Retour aux articles', 'fedepress' ); ?></a>
      </li>
      <li class="post-nav__next">
        <?php if ( $next_post ) : ?>
          <a href="<?= get_permalink( $next_post->ID ); ?>"><?= $next_post->post_title; ?> »</a>
        <?php endif; ?>
      </li>
    </ul>
  </nav><!-- /.posts-nav -->

  <article class="post">

    <header class="post-header">
      <h1><?php the_title(); ?></h1>
      <p>publié le <?= get_the_date(); ?> par <?php the_author_link(); ?></p>
    </header><!-- /.post-header -->

    <div class="post-content">
      <?php the_content(); ?>
    </div><!-- /.post-content -->

  </article><!-- /.post -->

  <nav class="posts-nav">
    <ul>
      <li class="post-nav__prev">
        <?php if ( $prev_post ) : ?>
          <a href="<?= get_permalink( $prev_post->ID ); ?>">« <?= $prev_post->post_title; ?></a>
        <?php endif; ?>
      </li>
      <li class="post-nav__back">
        <a href="<?= get_permalink( get_option( 'page_for_posts' ) ); ?>"><?php _e( 'Retour aux articles', 'fedepress' ); ?></a>
      </li>
      <li class="post-nav__next">
        <?php if ( $next_post ) : ?>
          <a href="<?= get_permalink( $next_post->ID ); ?>"><?= $next_post->post_title; ?> »</a>
        <?php endif; ?>
      </li>
    </ul>
  </nav><!-- /.posts-nav -->

<?php endif; ?>

<?php get_footer(); ?>
