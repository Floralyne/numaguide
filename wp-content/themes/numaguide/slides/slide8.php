<?php

/**
 * Template Name: Slide Number heigh
 * Template Post Type: post, page
 */

?>
<?php get_header() ?>

<style>
    html {
        margin-top: 0 !important;
    }

    @media screen and (max-width: 782px) {
        html {
            margin-top: 0 !important;
        }
    }
</style>

<div class="fluid-container" style="background-color: yellow;">
    <div class=" row vh-100">
        <div class="col my-auto text-center">
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
            ?>
        </div>
    </div>
</div>
<section>
    <div class="container-fluid" style="background-color: orange;">
        <div class=" row vh-100 align-items-center">
            <div class="col-sm-12 my-auto mx-auto text-center">
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
                ?>
            </div>
        </div>
    </div>
</section>