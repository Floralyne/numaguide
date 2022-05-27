<div class="container">
        <h2 class="pb-sm-4">Création d'un guide</h2>

        <form name="form" action="" method="post">
            <div class="form-group pb-sm-2">
                <label for="nomGuide">Choisissez le titre du guide</label>
                <input type="text" class="form-control" id="nomGuide" name="nomGuide">
            </div>

            <div class="form-group pb-sm-2">
                <label for="slide1">Choisir une slide avec deux textes</label>
                <select name="slide1">
                    <option value="slide10" selected>Slide 10</option>
                    <option value="slide12">Slide 12</option>
                    <option value="slide14">Slide 14</option>
                    <option value="slide17">Slide 17</option>
                    <option value="slide18">Slide 18</option>
                </select>
                <input type="text" class="form-control" name="slide1-1">
                <input type="text" class="form-control" name="slide1-2">
            </div>
            
            <!-- <div class="form-group pb-sm-2">
                <label for="slide7">Slide avec 7 textes</label>
                <input type="text" id="slide7" name="slide7" value="slide7" disabled>
                <input type="text" class="form-control" name="slide13-1">
                <input type="text" class="form-control" name="slide13-2">
                <input type="text" class="form-control" name="slide13-3">
                <input type="text" class="form-control" name="slide13-4">
                <input type="text" class="form-control" name="slide13-5">
                <input type="text" class="form-control" name="slide13-6">
                <input type="text" class="form-control" name="slide13-7">
            </div> -->

            <div class="form-group pb-sm-2">
                <label for="slide11">Slide avec uns textes</label>
                <input type="text" id="slide11" name="slide11" value="slide11" disabled>
                <input type="text" class="form-control" name="slide11-1">
            </div>

            <div class="form-group pb-sm-2">
                <label for="slide8">Slide avec 3 texte</label>
                <input type="text" id="slide8" name="slide8" value="slide8" disabled>
                <input type="text" class="form-control" name="slide8-1">
                <input type="text" class="form-control" name="slide8-2">
                <input type="text" class="form-control" name="slide8-3">
            </div>

            <!-- <div class="form-group pb-sm-2">
                <label for="slide13">Slide avec 4 texte</label>
                <input type="text" id="slide13" name="slide13" value="slide13" disabled>
                <input type="text" class="form-control" name="slide13-1">
                <input type="text" class="form-control" name="slide13-2">
                <input type="text" class="form-control" name="slide13-3">
                <input type="text" class="form-control" name="slide13-4">
            </div> -->

            <input type=submit name="ok" value="Créer le mini guide">
        </form>

</div>

<?php
    if(isset($_POST['ok'])){
        $ng_guide_nom = $_POST['nomGuide'];

        $ng_slide1_nom = $_POST['slide1'];
        $ng_slide1_value1 = $_POST['slide1-1'];
        $ng_slide1_value2 = $_POST['slide1-2'];

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
                        $ng_slide1_value1 . '<!-- /wp:paragraph -->' . 
                        '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
                        $ng_slide1_value2 . '<!-- /wp:paragraph -->';


        if($ng_slide1_nom == 'slide10') {
            $num_cat = 22;
            $nom_slide = 'slide_4';
        }if($ng_slide1_nom == 'slide12') {
            $num_cat = 16;
            $nom_slide = 'slide_3';
        }if($ng_slide1_nom == 'slide14') {
            $num_cat = 17;
            $nom_slide = 'slide_5';
        }if($ng_slide1_nom == 'slide17') {
            $num_cat = 13;
            $nom_slide = 'slide_7';
        }if($ng_slide1_nom == 'slide18') {
            $num_cat =14;
            $nom_slide = 'slide_8';
        }
        
        $ng_info_article = array(
            'post_content'  => $ng_content,
            'post_category' => array( $num_cat ),
            'tags_input' => array('1'),
            'post_type' => 'post'
        );
            
        wp_insert_post($ng_info_article);

        $info_slide = array($num_cat, 'views/slides/' . $nom_slide . '.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        // $ng_slide7_nom = $_POST['slide7'];
        // $ng_slide7_value1 = $_POST['slide7-1'];
        // $ng_slide7_value2 = $_POST['slide7-2'];
        // $ng_slide7_value3 = $_POST['slide7-3'];
        // $ng_slide7_value4 = $_POST['slide7-4'];
        // $ng_slide7_value5 = $_POST['slide7-5'];
        // $ng_slide7_value6 = $_POST['slide7-6'];
        // $ng_slide7_value7 = $_POST['slide7-7'];

        // $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
        //                 $ng_slide7_value1 . '<!-- /wp:paragraph -->' . 
        //                 '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
        //                 $ng_slide7_value2 . '<!-- /wp:paragraph -->' . 
        //                 '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
        //                 $ng_slide7_value3 . '<!-- /wp:paragraph -->' . 
        //                 '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
        //                 $ng_slide7_value4 . '<!-- /wp:paragraph -->' . 
        //                 '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
        //                 $ng_slide7_value5 . '<!-- /wp:paragraph -->' . 
        //                 '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
        //                 $ng_slide7_value6 . '<!-- /wp:paragraph -->' . 
        //                 '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
        //                 $ng_slide7_value7 . '<!-- /wp:paragraph -->';

        // $ng_info_article = array(
        //     'post_content'  => $ng_content,
        //     'post_category' => array( 12 ),
        //     'tags_input' => array('1'),
        //     'post_type' => 'post'
        // );
            
        // wp_insert_post($ng_info_article);

        $ng_slide11_nom = $_POST['slide11'];
        $ng_slide11_value1 = $_POST['slide11-1'];

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
                        $ng_slide11_value1 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content'  => $ng_content,
            'post_category' => array( 12 ),
            'tags_input' => array('1'),
            'post_type' => 'post'
        );
            
        wp_insert_post($ng_info_article);
        
        $info_slide = array('slide6', 'views/slides/slide_6.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);
        
        $ng_slide8_nom = $_POST['slide8'];
        $ng_slide8_value1 = $_POST['slide8-1'];
        $ng_slide8_value2 = $_POST['slide8-2'];
        $ng_slide8_value3 = $_POST['slide8-3'];

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
                        $ng_slide8_value1 . '<!-- /wp:paragraph -->' .
                        '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
                        $ng_slide8_value2 . '<!-- /wp:paragraph -->' . 
                        '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
                        $ng_slide8_value3 . '<!-- /wp:paragraph -->';
                        
        $ng_info_article = array(
            'post_content'  => $ng_content,
            'post_category' => array( 11 ),
            'tags_input' => array('1'),
            'post_type' => 'post'
        );

        wp_insert_post($ng_info_article);

        $info_slide = array('slide1', 'views/slides/slide_1.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        $ng_slide13_nom = $_POST['slide13'];
        $ng_slide13_value1 = $_POST['slide13-1'];
        $ng_slide13_value2 = $_POST['slide13-2'];
        $ng_slide13_value3 = $_POST['slide13-3'];
        $ng_slide13_value4 = $_POST['slide13-4'];

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
                        $ng_slide13_value1 . '<!-- /wp:paragraph -->' .
                        '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
                        $ng_slide8_value2 . '<!-- /wp:paragraph -->' . 
                        '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
                        $ng_slide8_value3 . '<!-- /wp:paragraph -->' .
                        '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' . 
                        $ng_slide8_value3 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content'  => $ng_content,
            'post_category' => array( 15 ),
            'tags_input' => array('1'),
            'post_type' => 'post'
        );

        wp_insert_post($ng_info_article);

        $info_slide = array('slide2', 'views/slides/slide_2.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        apply_filters('ng_creer_guide', $ng_guide_nom, $slide);
    }
?>

   
