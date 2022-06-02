<div class="container" id="formCrea">
<div class="titreForm">Informations du guide</div>
<hr>


    <div class="soustitreForm">Métadonnnées</div>
    <hr>

    <form name="form" action="" method="post">
    <div class="form-group pb-sm">
            <label for="nom_guide">Titre du guide :</label>
            <input type="text" class="form-control" id="nomGuide" name="nomGuide" maxlength="40" required>
        </div>

        <div class="form-group pb-sm">
            <label for="auteur_guide">Auteur(e)(s) du guide :</label>
            <input type="auteur" class="form-control" name="auteurGuide" required>
            <small class="text-muted">
                Nom de famille en majuscules, prénom en minuscules, séparer les noms d'une virgule si plusieurs auteurs.
            </small>
        </div>

        <hr>

        <div class="form-group pb-sm">
            <label for="auteur_guide">Lien du guide :</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        http://numaguide.msh-vdl.fr/
                    </div>
                </div>
                <input class="form-control" type="text" pattern="/\W|_/g" maxlength="20" id="urlGuide" placeholder="Adresse du guide" required>
            </div>
        </div>
<hr>
        <div class="titreForm">Création du guide</div>
<hr>
<div class="soustitreForm">Thèmes colorés</div>
        <div class="form-group row">
            <div class="col">
                <input type="radio" name="options" id="option1" autocomplete="off" data-toggle="collapse"
                        aria-expanded="false" aria-controls="collapseExample" data-target="#ete">
                        <label class="boutonForm boutonAjouter">Été</label>
                <div class="collapse" id="ete">
                    <div class="card card-body" id="paletteete">
                        <div id="numaFFA86B">#FFA86B</div>
                        <div id="numaFFCC84">#FFCC84</div>
                        <div id="numaFFE69E">#FFE69E</div>
                        <div id="numaFFFFEB">#FFFFEB</div>
                        <div id="numaCCF6EE">#CCF6EE</div>
                    </div>
                </div>
            </div>
            <div class="col">
            <label class="boutonForm boutonAjouter">
                    <input type="radio" name="options" id="option1" autocomplete="off" data-toggle="collapse"
                        aria-expanded="false" aria-controls="collapseExample" data-target="#pastel" checked>Pastel
                </label>
                <div class="collapse" id="pastel">
                    <div class="card card-body" id="palettepastel">
                        <div id="numaEEF9FF">#EEF9FF</div>
                        <div id="numaFFF7FC">#FFF7FC</div>
                        <div id="numaFFFDED">#FFFDED</div>
                        <div id="numaFFF7EC">#FFF7EC</div>
                        <div id="numaFFFBFB">#FFFBFB</div>
                    </div>
                </div>
            </div>
            <div class="col">
            <label class="boutonForm boutonAjouter">
                    <input type="radio" name="options" id="option1" autocomplete="off" data-toggle="collapse"
                        aria-expanded="false" aria-controls="collapseExample" data-target="#campagne">Campagne
                </label>
                <div class="collapse" id="campagne">
                    <div class="card card-body" id="palettecampagne">
                        <div id="numaD3C1C3">#D3C1C3</div>
                        <div id="numaE2D0BE">#E2D0BE</div>
                        <div id="numaEEE5BF">#EEE5BF</div>
                        <div id="numaE8F8C1">#E8F8C1</div>
                        <div id="numaD0F0B9">#D0F0B9</div>
                    </div>
                </div>
            </div>
            <div class="col">
            <label class="boutonForm boutonAjouter">
                    <input type="radio" name="options" id="option1" autocomplete="off" data-toggle="collapse"
                        aria-expanded="false" aria-controls="collapseExample" data-target="#sombre">Sombre
                </label>
                <div class="collapse" id="sombre">
                    <div class="card card-body" id="palettesombre">
                        <div id="numa002029">#002029</div>
                        <div id="numa032934">#032934</div>
                        <div id="numa04323E">#04323E</div>
                        <div id="numa0D3B47">#0D3B47</div>
                        <div id="numa144B58">#144B58</div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="titreForm">Choix des slides</div>
        <hr>
        <details>
    <summary>Slides introductives</summary>
        <div class="form-group pb-sm-2" id="groupeIntro">
            <div class="soustitreForm2">Slide 1 - Titre, sous-titre, auteur(s)</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_1.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide1-1"></textarea>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide1-2"></textarea>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide1-3"></textarea>
                </div>
            </div>

            <hr>
            <div class="soustitreForm2">Slide 2 - Titre, sous-titre, auteur(e)(s), affiliation(s), mots-clés</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_2.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide2-1"></textarea>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide2-2"></textarea>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide2-3"></textarea>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide2-4"></textarea>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide2-5"></textarea>
                </div>
            </div>
            <hr>

            <div class="soustitreForm">Slide 3 - Remerciements</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_3.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide3-1"></textarea>
                </div>
            </div>
            <hr>
            <div class="soustitreForm">Slide 4 - Résumé</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_4.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide4-1"></textarea>
                </div>
            </div>
            <hr>
            <div class="soustitreForm">Slide 5 - Introduction</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_5.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide5-1"></textarea>
                </div>
            </div>
        </div>
</details>
        <hr>
        <details>
    <summary>Slides textuelles</summary>
        <div class="form-group pb-sm-2" id="groupeTexte">
            <div class="soustitreForm">Slide 6 - Paragraphe</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_6.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide1-1"></textarea>
                </div>
            </div>

            <hr>
            <div class="soustitreForm">Slide 7 - Deux paragraphes verticaux</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_7.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide7-1"></textarea>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide7-2"></textarea>
                </div>
            </div>
            <hr>

            <div class="soustitreForm">Slide 8 - Deux paragraphes horizontaux</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_8.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide8-1"></textarea>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide8-2"></textarea>

                </div>
            </div>
        </div>
</details>
        <hr>
        <details>
    <summary>Slides images</summary>
        <div class="form-group pb-sm-2" id="groupeImages">
            <div class="soustitreForm">Slide 9 - Image plein écran</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_9.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" name="slide9-1">
                </div>
            </div>

            <hr>
            <div class="soustitreForm">Slide 10 - Un paragraphe et une image</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_10.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide10-2"></textarea>
                <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" name="slide10-1">
                </div>
            </div>
            <hr>

            <div class="soustitreForm">Slide 11 - Une image et un paragraphe</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_11.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" name="slide11-1">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide11-2"></textarea>

                </div>
            </div>

            <hr>
            <div class="soustitreForm">Slide 12 - Un paragraphe et une image</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_12.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide12-1"></textarea>
                <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" name="slide12-2">
                </div>
            </div>
        </div>
</details>
        <hr>

        <details>
    <summary>Slides son</summary>
        <div class="form-group pb-sm-2" id="groupeSon">
            <div class="soustitreForm">Slide 13 - Paragraphe, son, légende</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_13.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide13-1"></textarea>
                <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" name="slide13-2">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide13-3"></textarea>
                </div>
            </div>

            <hr>
            <div class="soustitreForm">Slide 14 - Son et légende, son et légende</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_14.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" name="slide14-1">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide14-2"></textarea>
                <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" name="slide14-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide14-4"></textarea>
                </div>
            </div>
        </div>
</details>
        <hr>

<details>
    <summary>Slides vidéos</summary>
        <div class="form-group pb-sm-2" id="groupeVideos">
            <div class="soustitreForm">Slide 15 - Vidéo plein écran</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_15.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" name="slide15-1">
                </div>
            </div>

            <hr>
            <div class="soustitreForm">Slide 16 - Vidéo et légende, paragraphe</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_16.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" name="slide16-1">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide16-2"></textarea>
                <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" name="slide16-3">
                </div>
            </div>

            <hr>
            <div class="soustitreForm">Slide 17 - Paragraphe et vidéo</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_17.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide17-1"></textarea>
                <input type="file" name="parcourir" placeholder="Parcourir (PNG, JPEG, GIF..)"
                            class="parcourir" name="slide17-2">
                </div>
            </div>
        </div>
</details>
        <hr>
<details>
    <summary>Slides de fin</summary>
        <div class="form-group pb-sm-2" id="groupeFin">
            <div class="soustitreForm">Slide 18 - Bibliographie</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_18.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide18-1"></textarea>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide18-2"></textarea>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide18-3"></textarea>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide18-4"></textarea>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide18-5"></textarea>
                </div>
            </div>

            <hr>
            <div class="soustitreForm">Slide 19 - Bibliographie</div>
            <div class="row">
                <div class="col col-lg-3 mb-auto mt-auto">
                    <figure class="figure">
                        <img src="<?= plugin_dir_url(__DIR__ ) . 'images/Slide_19.png'; ?>"
                            class="figure-img img-fluid rounded">
                    </figure>
                </div>
                <div class="col">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide19-1"></textarea>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide19-2"></textarea>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide19-3"></textarea>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide19-4"></textarea>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="slide19-5"></textarea>
                </div>
            </div>
</details>
        </div>
        <hr>

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
        $enleveaccent_array = array('Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
            'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
            'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
            'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y');
        
        $ng_guide_nom = strtr($ng_guide_nom, $enleveaccent_array);
        $ng_guide_nom = str_replace('\'', '', trim($ng_guide_nom));
        $ng_guide_nom = preg_replace('/[^A-Za-z0-9-]/', '', $ng_guide_nom);
        $ng_guide_nom = preg_replace('/-+/', '-', $ng_guide_nom);
        $ng_guide_nom = substr($ng_guide_nom, 0, 20);

        /*Créer la taxonomie*/

        wp_create_term($ng_guide_nom);
        
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
                'tags_input' => array('1', $ng_guide_nom),
                'post_type' => 'post',
            );

            wp_insert_post($ng_info_article);

            die("monkey");

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
                'tags_input' => array('1', $ng_guide_nom),
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
                'tags_input' => array('1', $ng_guide_nom),
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
                'tags_input' => array('1', $ng_guide_nom),
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