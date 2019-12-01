<?php
  $sections = array('header', 'navbar', 'content', 'footer');

  foreach ($sections as $sec) {
    echo $__env->yieldContent($sec);
  }

 ?>
