<?php
$id = 'sidebar';

if ( is_active_sidebar( $id ) ) :
?>
  <div class="site-sidebar">
    <?php dynamic_sidebar( $id ); ?>
  </div><!-- /.site-sidebar -->
<?php endif; ?>
