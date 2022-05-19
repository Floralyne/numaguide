<?php

/**
 * Template Name: Slide 11
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

  <section id="slide_11">
  <div id="slide_11_c" class="container-fluid">
    <div id="slide_11_r" class="row vh-100">
      <div id="slide_11_div" class="col text-justify mt-auto mb-auto p-5">
        <?php
          $post_tab = $args['article'];
          $post = $post_tab[0];
          $blocks = parse_blocks($post->post_content);
          foreach ($blocks as $block) {
              if ($block['blockName'] == 'core/paragraph') {
                  echo render_block($block);
              }
          }
        ?>
      </div>
    </div>
  </div>
</section>