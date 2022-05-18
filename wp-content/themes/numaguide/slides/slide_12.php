<?php

/**
 * Template Name: Slide 12
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>
<section id="slide_12">
    <div id="slide_12_c" class="container-fluid">
        <div id="slide_12_r" class="row vh-100">
            <div id="slide_12_div" class="col text-center mt-auto mb-auto p-5">
                <div id="slide_12_titre" class="slide_12_titre"> <?php

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
                <div id="slide_12_merci" class="slide_12_merci">
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