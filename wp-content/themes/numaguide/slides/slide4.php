<?php

/**
 * Template Name: Slide Number Four
 * Template Post Type: post, page
 */

?>

<div class="flex-container">
    <div class="flex-items">
        <div id="texte">
            <?php

            //die(var_dump($post));
            //$post = get_post($args);
            //die(var_dump($post));
            //die(var_dump($args['article']));

            $post_tab = $args['article'];
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
    <div class="flex-items">
        <?php
        $post = get_post();
        $blocks = parse_blocks($post->post_content);
        //die(var_dump($blocks));
        foreach ($blocks as $block) {
            if ($block['blockName'] == 'core/image') {
                echo render_block($block);
            }
        }
        ?>
    </div>
</div>