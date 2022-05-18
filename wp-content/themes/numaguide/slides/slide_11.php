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


//$post = get_post($args);
//die(var_dump($post));
//die(var_dump($args['article']));

$post_tab = $args['article'];
//die(var_dump($post_tab));
$post = $post_tab[0];
//die(var_dump($post));
//die(var_dump($post1->post_content));
$blocks = parse_blocks($post->post_content);

//die(var_dump($blocks));
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