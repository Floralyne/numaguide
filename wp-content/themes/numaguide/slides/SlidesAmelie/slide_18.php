<?php

/**
 * Template Name: Slide 18
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<section id="slide_18">
        <div id="slide_18_c" class="container-fluid">
            <div id="slide_18_r" class="row vh-100">
                <div id="slide_18_div1" class="row text-justify mt-auto mb-auto p-5">
                    <div id="slide_18_texte1" class="slide_18_texte">
                    <?php

//die(var_dump($post));
//$post = get_post($args);
//die(var_dump($post));
//die(var_dump($args['article']));

//$post_tab = $args['article'];
//$post = $post_tab[0];
//die(var_dump($post));
//die(var_dump($post1->post_content));
$blocks = parse_blocks($post->post_content);

//die(var_dump($blocks));
foreach ($blocks as $block) {
    if ($block['blockName'] == 'core/paragraph') {
        echo render_block($block);
    }
}
?></div>
                </div>
                <div class="row text-justify mt-auto mb-auto p-5">
                    <div id="slide_18_texte2" class="slide_18_texte">
                    <?php

//die(var_dump($post));
//$post = get_post($args);
//die(var_dump($post));
//die(var_dump($args['article']));

//$post_tab = $args['article'];
//$post = $post_tab[0];
//die(var_dump($post));
//die(var_dump($post1->post_content));
$blocks = parse_blocks($post->post_content);

//die(var_dump($blocks));
foreach ($blocks as $block) {
    if ($block['blockName'] == 'core/paragraph') {
        echo render_block($block);
    }
}
?></div>
                </div>
            </div>
        </div>
        </div>

</section>