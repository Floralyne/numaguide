<?php get_header() ?>

<main id="site-content">

    <?php
    /*
 * Met en variable un template avec son contenu
 *
 * @since Numaguide 0.1
 *
 * @param string $template_name le path du template
 * @param string $part_name le nom de la partie du template
 * @param array $variable tableau de variables à injecter dans le template
 * 
 * @return string
*/
    function load_template_part($template_name, $part_name = null, $variable)
    {
        ob_start();
        get_template_part($template_name, $part_name, $variable);
        $var = ob_get_contents();
        ob_end_clean();
        return $var;
        die(var_dump($var));
    }
    ?>


    <?php
    if (have_posts()) {
        $nbSlide = 1;

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'slide4',
            'tag' => $nbSlide
        );

        $mypost = get_posts($args);

        //die(var_dump($mypost));
        if ($mypost) {
            the_post();

            //$post = $mypost;
            $post_tab = array('article' => $mypost);
            //die(var_dump($post));
            //, null, $post
            //get_template_part('slides/slide4', null, $post_tab);
            $slide = load_template_part('slides/slide4', null, $post_tab);
            $nbSlide = $nbSlide + 1;
        }

        $nbSlide2 = 1;

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'slide8',
            'tag' => $nbSlide2
        );

        $mypost = get_posts($args);

        if ($mypost) {
            the_post();

            //$post = $mypost;
            $post_tab = array('article' => $mypost);
            //die(var_dump($post));
            //, null, $post
            //get_template_part('slides/slide4', null, $post_tab);
            $slide = $slide . load_template_part('slides/slide8', null, $post_tab);
            $nbSlide2 = $nbSlide2 + 1;
        }
    }
    ?>


    <?php

    function creer_page($title_of_the_page, $content, $parent_id = NULL)
    {
        $objPage = get_page_by_title($title_of_the_page, 'OBJECT', 'page');
        if (!empty($objPage)) {
            echo "La page existe déjà:" . $title_of_the_page . "<br/>";
            return $objPage->ID;
        }

        $page_id = wp_insert_post(
            array(
                'comment_status' => 'close',
                'ping_status'    => 'close',
                'post_author'    => 1,
                'post_title'     => ucwords($title_of_the_page),
                'post_name'      => strtolower(str_replace(' ', '-', trim($title_of_the_page))),
                'post_status'    => 'publish',
                'post_content'   => $content,
                'post_type'      => 'page',
                'post_parent'    =>  $parent_id //'id_of_the_parent_page_if_it_available'
            )
        );
        echo "Created page_id=" . $page_id . " for page '" . $title_of_the_page . "'<br/>";
        return $page_id;
    }

    //creer_page('MONKEY NATION', $slide);

    ?>

</main><!-- #site-content -->

<?php get_footer() ?>