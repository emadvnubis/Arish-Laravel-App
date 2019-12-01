<?php
  $sections = array('header', 'navbar', 'slider');
  foreach ($sections as $sec) {
    echo $__env->yieldContent($sec);
  } ?>

  <?php
foreach ($product as $prod) {
  echo $prod['name'];
}

   ?>


  <?php echo $__env->yieldContent('footer'); ?>
