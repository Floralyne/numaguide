<div class="container">
    <h2 class="pb-sm-4">Création d'un guide</h2>

    <form name="form" action="" method="post">
        <div class="form-group pb-sm-2">
            <label for="nomGuide">Choisissez le titre du guide</label>
            <input type="text" class="form-control" id="nomGuide" name="nomGuide">
        </div>

        <div class="form-group pb-sm-2">
            <label for="slide1">Slide avec trois textes</label>
            <input type="text" id="slide1" name="slide1" value="slide1" readonly="readonly" />
            <input type="text" class="form-control" name="slide1-1">
            <input type="text" class="form-control" name="slide1-2">
            <input type="text" class="form-control" name="slide1-3">
        </div>

        <div class="form-group pb-sm-2">
            <label for="slide1text">Choisir une slide avec un texte</label>
            <select name="slide1text">
                <option value="slide3" selected>Slide 3</option>
                <option value="slide4">Slide 4</option>
                <option value="slide5">Slide 5</option>
                <option value="slide6">Slide 6</option>
                <option value="slide10">Slide 10</option>
                <option value="slide11">Slide 11</option>
                <option value="slide12">Slide 12</option>
                <option value="slide17">Slide 17</option>
            </select>
            <input type="text" class="form-control" name="slide1text-1">
        </div>

        <div class="form-group pb-sm-2">
            <label for="slide2text">Choisir une slide avec deux textes</label>
            <select name="slide2text">
                <option value="slide7" selected>Slide 7</option>
                <option value="slide8">Slide 8</option>
                <option value="slide13">Slide 13</option>
                <option value="slide14">Slide 14</option>
                <option value="slide16">Slide 16</option>
            </select>
            <input type="text" class="form-control" name="slide2text-1">
            <input type="text" class="form-control" name="slide2text-2">
        </div>

        <div class="form-group pb-sm-2">
            <label for="slide5text">Choisir une slide avec cinq textes</label>
            <select name="slide5text">
                <option value="slide2" selected>Slide 2</option>
                <option value="slide18">Slide 18</option>
                <option value="slide19">Slide 19</option>
            </select>
            <input type="text" class="form-control" name="slide5text-1">
            <input type="text" class="form-control" name="slide5text-2">
            <input type="text" class="form-control" name="slide5text-3">
            <input type="text" class="form-control" name="slide5text-4">
            <input type="text" class="form-control" name="slide5text-5">
        </div>

        <input type=submit name="ok" value="Créer le mini guide">
    </form>

</div>

<?php
    if (isset($_POST['ok'])) {
        //Titre du guide
        $slide = "<style>html[lang] {
            margin-top: 0 !important;
          }
          </style>";
        $ng_guide_nom = $_POST['nomGuide'];

        //Slide avec trois textes
        if ($_POST['slide1-1'] !== ''&$_POST['slide1-2'] !== ''&$_POST['slide1-3'] !== '') {
            $ng_slide1_nom = $_POST['slide1'];
            $ng_slide1_value1 = $_POST['slide1-1'];
            $ng_slide1_value2 = $_POST['slide1-2'];
            $ng_slide1_value3 = $_POST['slide1-2'];

            $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
                $ng_slide1_value1 . '<!-- /wp:paragraph -->' .
                '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
                $ng_slide1_value2 . '<!-- /wp:paragraph -->' .
                '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
                $ng_slide1_value3 . '<!-- /wp:paragraph -->';

            $ng_info_article = array(
                'post_content' => $ng_content,
                'post_category' => array(51),
                'tags_input' => array('1'),
                'post_type' => 'post',
            );

            wp_insert_post($ng_info_article);

            $info_slide = array($ng_slide1_nom, 'views/slides/slide_1.php');
            $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        }

        //Slides avec un texte
        if ($_POST['slide1text-1'] !== '') {
            $ng_slide1text_nom = $_POST['slide1text'];
            $ng_slide1text_value1 = $_POST['slide1text-1'];

            $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
                $ng_slide1text_value1 . '<!-- /wp:paragraph -->';

            if ($ng_slide1text_nom == 'slide3') {
                $num_cat = 53;
                $nom_slide = 'slide_3';
            }if ($ng_slide1text_nom == 'slide4') {
                $num_cat = 54;
                $nom_slide = 'slide_4';
            }if ($ng_slide1text_nom == 'slide5') {
                $num_cat = 55;
                $nom_slide = 'slide_5';
            }if ($ng_slide1text_nom == 'slide6') {
                $num_cat = 56;
                $nom_slide = 'slide_6';
            }if ($ng_slide1text_nom == 'slide10') {
                $num_cat = 60;
                $nom_slide = 'slide_10';
            }if ($ng_slide1text_nom == 'slide11') {
                $num_cat = 61;
                $nom_slide = 'slide_11';
            }if ($ng_slide1text_nom == 'slide12') {
                $num_cat = 62;
                $nom_slide = 'slide_12';
            }if ($ng_slide1text_nom == 'slide17') {
                $num_cat = 67;
                $nom_slide = 'slide_17';
            }

            $ng_info_article = array(
                'post_content' => $ng_content,
                'post_category' => array($num_cat),
                'tags_input' => array('1'),
                'post_type' => 'post',
            );

            wp_insert_post($ng_info_article);

            $info_slide = array($ng_slide1text_nom, 'views/slides/' . $nom_slide . '.php');
            $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        }

        //Slides avec deux textes
        if ($_POST['slide2text-1'] !== ''&$_POST['slide2text-2'] !== '') {
            $ng_slide2text_nom = $_POST['slide2text'];
            $ng_slide2text_value1 = $_POST['slide2text-1'];
            $ng_slide2text_value2 = $_POST['slide2text-2'];

            $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
                $ng_slide2text_value1 . '<!-- /wp:paragraph -->' .
                '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
                $ng_slide2text_value2 . '<!-- /wp:paragraph -->';

            if ($ng_slide2text_nom == 'slide7') {
                $num_cat = 57;
                $nom_slide = 'slide_7';
            }if ($ng_slide2text_nom == 'slide8') {
                $num_cat = 58;
                $nom_slide = 'slide_8';
            }if ($ng_slide2text_nom == 'slide13') {
                $num_cat = 63;
                $nom_slide = 'slide_13';
            }if ($ng_slide2text_nom == 'slide14') {
                $num_cat = 64;
                $nom_slide = 'slide_14';
            }if ($ng_slide2text_nom == 'slide16') {
                $num_cat = 66;
                $nom_slide = 'slide_16';
            }

            $ng_info_article = array(
                'post_content' => $ng_content,
                'post_category' => array($num_cat),
                'tags_input' => array('1'),
                'post_type' => 'post',
            );

            wp_insert_post($ng_info_article);

            $info_slide = array($ng_slide2text_nom, 'views/slides/' . $nom_slide . '.php');
            $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);
        }

        //Slides avec cinq textes
        if ($_POST['slide5text-1'] !== ''&$_POST['slide5text-2'] !== ''&$_POST['slide5text-3'] !== ''&$_POST['slide5text-4'] !== ''&$_POST['slide5text-5'] !== '') {
            $ng_slide5text_nom = $_POST['slide5text'];
            $ng_slide5text_value1 = $_POST['slide5text-1'];
            $ng_slide5text_value2 = $_POST['slide5text-2'];
            $ng_slide5text_value3 = $_POST['slide5text-3'];
            $ng_slide5text_value4 = $_POST['slide5text-4'];
            $ng_slide5text_value5 = $_POST['slide5text-5'];
            

            $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
                $ng_slide5text_value1 . '<!-- /wp:paragraph -->' .
                '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
                $ng_slide5text_value2 . '<!-- /wp:paragraph -->' .
                '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
                $ng_slide5text_value3 . '<!-- /wp:paragraph -->' .
                '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
                $ng_slide5text_value4 . '<!-- /wp:paragraph -->' .
                '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
                $ng_slide5text_value5 . '<!-- /wp:paragraph -->';

            if ($ng_slide5text_nom == 'slide2') {
                $num_cat = 52;
                $nom_slide = 'slide_2';
            }if ($ng_slide5text_nom == 'slide18') {
                $num_cat = 68;
                $nom_slide = 'slide_18';
            }if ($ng_slide5text_nom == 'slide19') {
                $num_cat = 69;
                $nom_slide = 'slide_19';
            }

            $ng_info_article = array(
                'post_content' => $ng_content,
                'post_category' => array($num_cat),
                'tags_input' => array('1'),
                'post_type' => 'post',
            );

            wp_insert_post($ng_info_article);

            $info_slide = array($ng_slide5text_nom, 'views/slides/' . $nom_slide . '.php');
            $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);
        }

        if ($slide !== NULL) {
            apply_filters('ng_creer_guide', $ng_guide_nom, $slide);
        }
    }


?>