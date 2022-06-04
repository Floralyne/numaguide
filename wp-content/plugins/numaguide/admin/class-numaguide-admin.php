<?php

/**
 * Les fonctionnalités spécifiques à l'administrateur du plugin.
 *
 * @link              https://numaguide.msh-vdl.fr/
 * @since             1.0.0
 * @package           Numaguide
 * @subpackage           Numaguide/includes
 */

class Numaguide_Admin
{

    /**
     * Le ID de ce plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $numaguide    L'ID de ce plugin.
     */
    private $numaguide;

    /**
     * La version de ce plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    La version de ce plugin.
     */
    private $version;

    /**
     * Initialiser la classe et définir ses propriétés.
     *
     * @since    1.0.0
     * @param      string    $numaguide       Le nom de ce plugin.
     * @param      string    $version            La version de ce plugin.
     */
    public function __construct($numaguide, $version)
    {

        $this->numaguide = $numaguide;
        $this->version = $version;
    }

    /**
     * Enregistre les feuilles de style pour la zone d'administration.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {
        wp_enqueue_style($this->numaguide, plugin_dir_url(__FILE__) . 'css/numaguide-admin.css', array(), $this->version, 'all');
        wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css', []);
        wp_enqueue_style('bootstrap');
    }

    /**
     * Enregistre le JavaScript pour la zone d'administration.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {
        wp_enqueue_script($this->numaguide, plugin_dir_url(__FILE__) . 'js/numaguide-admin.js', array('jquery'), $this->version, false);
        wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', ['popper', 'jquery'], false, true);
        wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
        wp_register_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js', [], false, true);
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('popper');
        wp_enqueue_script('jquery');
    }

    public function numaguide_creer_menu_admin()
    {
        add_menu_page(
            'Numaguide',
            'Numaguide',
            'edit_posts',
            'numaguide',
            'ng_admin_page_contents',
            'dashicons-media-spreadsheet',
            3
        );

        add_submenu_page(
            'numaguide',
            'Numaguide | Création d\'un guide',
            'Créer un guide',
            'edit_posts',
            'ng_creerguide',
            'ng_submenu_form_creation'
        );

        add_submenu_page(
            'numaguide',
            'Numaguide | Modifier un guide',
            'Modifier un guide',
            'edit_posts',
            'ng_modifierguide',
            'ng_submenu_form_creation'
        );

        add_submenu_page(
            'numaguide',
            'Numaguide | Liste des guides',
            'Liste des guides',
            'edit_posts',
            'ng_listeguide',
            'ng_submenu_form_liste'
        );

        add_submenu_page(
            'numaguide',
            'Numaguide | Configuration',
            'Configuration',
            'edit_posts',
            'ng_configuration',
            'ng_submenu_form_configuration'
        );

        add_submenu_page(
            'numaguide',
            'Numaguide | Test XML',
            'Test XML',
            'edit_posts',
            'ng_xml',
            'ng_submenu_xml_test'
        );

        add_submenu_page(
            'numaguide',
            'Numaguide | Test création d\'un guide',
            'Test guide',
            'edit_posts',
            'ng_test_guide',
            'ng_submenu_guide_test'
        );

        function ng_admin_page_contents()
        {
            include_once 'views/view_numaguide_page_accueil.php';
        }

        function ng_submenu_form_creation()
        {
            include_once 'views/view_numaguide_form_creation.php';
        }

        function ng_submenu_form_configuration()
        {
            include_once 'views/view_numaguide_form_configuration.php';
        }

        function ng_submenu_form_liste()
        {
            include_once 'views/view_numaguide_liste_guides.php';
        }

        function ng_submenu_xml_test()
        {
            include_once 'views/view_numaguide_test_xml.php';
        }

        function ng_submenu_guide_test()
        {
            include_once 'views/view_numaguide_test_guide.php';
        }
    }

    /*
     * Cherche l'article pour générer l'article.
     *
     * @since Numaguide 1.0.0
     *
     * @param string $titre_guide Le titre du guide
     * @param string $content le contenu à placer
     * @param int $parent_id id d'un parent, par défaut NULL
     *
     * @return int $page_id
     */
    public function numaguide_article_pour_template($info_slide)
    {
        $slide = "";
        $nbSlide = 1;

        $args = array(
            'post_type' => 'post',
            'post_status' => 'draft',
            'category_name' => $info_slide[0],
            'tag' => $nbSlide,
        );

        $mypost = get_posts($args);

        if ($mypost) {
            the_post();
            $post_tab = array('article' => $mypost);
            $slide = apply_filters('ng_genere_slide', $info_slide[1], null, $post_tab);
            $nbSlide = $nbSlide + 1;
        }

        return $slide;
    }

    /*
     * Met en variable un template avec son contenu.
     *
     * @since Numaguide 1.0.0
     *
     * @param string $template_name le path du template
     * @param string $part_name le nom de la partie du template
     * @param array $args tableau de variables à injecter dans le template
     *
     * @return string
     */
    public function numaguide_genere_slide($template_name, $part_name = null, $args)
    {
        $slide = "";

        //Start le buffering
        ob_start();

        //Inclu le template
        include $template_name;

        //Fin du buffering et retourne son contenu
        $slide = ob_get_clean();

        return $slide;

    }

    /*
     * Creer le guide numérique sous la forme d'une page wordpress.
     *
     * @since Numaguide 1.0.0
     *
     * @param string $titre_guide Le titre du guide
     * @param string $content le contenu à placer
     * @param int $parent_id id d'un parent, par défaut NULL
     *
     * @return int $page_id
     */
    public function numaguide_creer_guide($titre_guide, $content, $parent_id = null)
    {
        $objPage = get_page_by_title($titre_guide, 'OBJECT', 'page');
        if (!empty($objPage)) {
            echo "La page existe déjà: " . $titre_guide;
            return $objPage->ID;
        }

        $enleveaccent_array = array('Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
            'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
            'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
            'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y');
        $titre_guide = strtr($titre_guide, $enleveaccent_array);
        $titre_guide = str_replace('\'', '', $titre_guide);

        $page_id = wp_insert_post(
            array(
                'comment_status' => 'close',
                'ping_status' => 'close',
                'post_author' => 1,
                'post_title' => ucwords($titre_guide),
                'post_name' => strtolower(str_replace(' ', '-', trim($titre_guide))),
                'post_status' => 'publish',
                'post_content' => $content,
                'post_type' => 'page',
                'post_parent' => $parent_id, //seulement s'il y en a un
            )
        );
        echo "Le guide numérique : \"" . $titre_guide . " (ID: " . $page_id . ")\" a été crée ! <br>";
        echo "<a href=\"" . get_site_url() . "/" . strtolower(str_replace(' ', '-', trim($titre_guide))) . "\">Appuyez pour voir le guide !</a>";
        return $page_id;
    }

    /*
     * Masques les menus de la barre de menus pour les éditeurs, auteurs et contributeurs.
     *
     * @since Numaguide 1.0.0
     *
     * @param string $user
     * @param array $allowed_roles la liste des rôles concernés

     */

    public function numaguide_cacher_menus()
    {
        $user = wp_get_current_user();
        $allowed_roles = array('editor', 'contributor', 'author');

        if (array_intersect($allowed_roles, $user->roles)) {

            remove_menu_page('index.php'); //Dashboard
            remove_menu_page('jetpack'); //Jetpack
            remove_menu_page('edit.php'); //Articles
            remove_menu_page('upload.php'); //Media
            remove_menu_page('edit.php?post_type=page'); //Pages
            remove_menu_page('edit-comments.php'); //Commentaires
            remove_menu_page('themes.php'); //Apparence
            remove_menu_page('plugins.php'); //Plugins
            remove_menu_page('users.php'); //Utilisateurs
            remove_menu_page('tools.php'); //Outils
            remove_menu_page('options-general.php'); //Paramètres
            remove_menu_page('profile.php'); //Profils des utilisateurs

        }
    }

    /*
     * Supprime les commentaires et la possibilité de créer des articles via la barre administrateur.
     *
     * @since Numaguide 1.0.0
     *
     * @param WP_Admin_Bar $wp_admin_bar WP_Admin Bar instance.
     * @param array $allowed_roles la liste des rôles concernés
     *
     */

    public function numaguide_vider_barre_admin($wp_admin_bar)
    {

        $wp_admin_bar->remove_node('comments');
        $wp_admin_bar->remove_node('new-content');

    }

    /*
     * SLIDE 1
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 1
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $texte1
     * @param string $texte2
     * @param string $texte3
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide1($ng_guide_nom, $texte1, $texte2, $texte3, $slide)
    {
        $ng_slide1_nom = "slide1";

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte1 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte2 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte3 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(51),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide1_nom, 'views/slides/slide_1.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }

    /*
     * SLIDE 2
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 2
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $texte1
     * @param string $texte2
     * @param string $texte3
     * @param string $texte4
     * @param string $texte5
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide2($ng_guide_nom, $texte1, $texte2, $texte3, $texte4, $texte5, $slide)
    {
        $ng_slide2_nom = "slide2";

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte1 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte2 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte3 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte4 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte5 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(52),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide2_nom, 'views/slides/slide_2.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }

    /*
     * SLIDE 3
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 3
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $texte1
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide3($ng_guide_nom, $texte1, $slide)
    {
        $ng_slide3_nom = 'slide3';

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte1 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(53),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide3_nom, 'views/slides/slide_3.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }

    /*
     * SLIDE 4
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 4
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $texte1
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide4($ng_guide_nom, $texte1, $slide)
    {
        $ng_slide4_nom = 'slide4';

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte1 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(54),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide4_nom, 'views/slides/slide_4.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }

    /*
     * SLIDE 5
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 5
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $texte1
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide5($ng_guide_nom, $texte1, $slide)
    {
        $ng_slide5_nom = 'slide5';

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte1 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(55),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide5_nom, 'views/slides/slide_5.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }

    /*
     * SLIDE 6
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 6
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $texte1
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide6($ng_guide_nom, $texte1, $slide)
    {
        $ng_slide6_nom = 'slide6';

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte1 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(56),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide6_nom, 'views/slides/slide_6.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }

    /*
     * SLIDE 7
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 7
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $texte1
     * @param string $texte2
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide7($ng_guide_nom, $texte1, $texte2, $slide)
    {
        $ng_slide7_nom = 'slide7';

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte1 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte2 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(57),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide7_nom, 'views/slides/slide_7.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }

    /*
     * SLIDE 8
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 8
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $texte1
     * @param string $texte2
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide8($ng_guide_nom, $texte1, $texte2, $slide)
    {
        $ng_slide8_nom = 'slide8';

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte1 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte2 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(58),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide8_nom, 'views/slides/slide_8.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }

    /*
     * SLIDE 9
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 9
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $image1
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide9($ng_guide_nom, $image1, $slide)
    {
        require ABSPATH . 'wp-load.php';
        $wordpress_upload_dir = wp_upload_dir();
        // $wordpress_upload_dir['path'] est le path entier du serveur vers (wp-content/uploads/2017/05)
        // $wordpress_upload_dir['url'] le lien absolut vers l'url du même dossier, pour montrer le lien vers le fichier
        $i = 1; // compteur si le même nom de fichier

        $new_file_path = $wordpress_upload_dir['path'] . '/' . $image1['name'];

        $new_file_mime = mime_content_type($image1['tmp_name']);

        if ($image1['error']) {
            die($image1['error']);
        }

        if ($image1['size'] > wp_max_upload_size()) {
            die('La taille de l\'image est trop grande.');
        }

        if (!in_array($new_file_mime, get_allowed_mime_types())) {
            die('Le type de l\'image n\'est pas valide');
        }

        while (file_exists($new_file_path)) {
            $i++;
            $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $image1['name'];
            $nomImg = preg_replace('/\.[^.]+$/', '', $image1['name']) . "-" . $i;
        }

        // Ajout de l'image dans wordpress
        if (move_uploaded_file($image1['tmp_name'], $new_file_path)) {

            $upload_id = wp_insert_attachment(array(
                'guid' => $new_file_path,
                'post_mime_type' => $new_file_mime,
                'post_title' => preg_replace('/\.[^.]+$/', '', $image1['name']),
                'post_content' => '',
                'post_status' => 'inherit',
            ), $new_file_path);

            // wp_generate_attachment_metadata() sans cet include
            require_once ABSPATH . 'wp-admin/includes/image.php';

            // Genere et sauvegarde les métadonnées associé dans la BDD
            wp_update_attachment_metadata($upload_id, wp_generate_attachment_metadata($upload_id, $new_file_path));

            $args = array(
                'post_type' => 'attachment',
                'name' => sanitize_title($nomImg),
                'posts_per_page' => 1,
                'post_status' => 'inherit',
            );

            $imgObj = get_posts($args);
            $imgID = $imgObj[0]->ID;
            $imgURL = wp_get_attachment_image_src($imgID, 'full');

            $ng_content = '<!-- wp:image {"id":' . $imgID . ',"sizeSlug":"full","linkDestination":"none"} -->
              <figure class="wp-block-image size-full"><img src="' . $imgURL[0] . '" alt="" class="wp-image-190"/></figure>
              <!-- /wp:image -->';

            $ng_info_article = array(
                'post_content' => $ng_content,
                'post_category' => array(59),
                'tags_input' => array('1', $ng_guide_nom),
                'post_type' => 'post',
            );

            wp_insert_post($ng_info_article);

            $info_slide = array($ng_slide1_nom, 'views/slides/slide_9.php');
            $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

            return $slide;
        }
    }

    /*
     * SLIDE 10
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 10
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $image1
     * @param string $texte1
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide10($ng_guide_nom, $image1, $texte1, $slide)
    {
        require ABSPATH . 'wp-load.php';
        $wordpress_upload_dir = wp_upload_dir();
        // $wordpress_upload_dir['path'] est le path entier du serveur vers (wp-content/uploads/2017/05)
        // $wordpress_upload_dir['url'] le lien absolut vers l'url du même dossier, pour montrer le lien vers le fichier
        $i = 1; // compteur si le même nom de fichier

        $ng_slide10_nom = 'slide10';
        $ng_content = '';

        $new_file_path = $wordpress_upload_dir['path'] . '/' . $image1['name'];

        $new_file_mime = mime_content_type($image1['tmp_name']);

        if ($image1['error']) {
            die($image1['error']);
        }

        if ($image1['size'] > wp_max_upload_size()) {
            die('La taille de l\'image est trop grande.');
        }

        if (!in_array($new_file_mime, get_allowed_mime_types())) {
            die('Le type de l\'image n\'est pas valide');
        }

        while (file_exists($new_file_path)) {
            $i++;
            $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $image1['name'];
            $nomImg = preg_replace('/\.[^.]+$/', '', $image1['name']) . "-" . $i;
        }

        // Ajout de l'image dans wordpress
        if (move_uploaded_file($image1['tmp_name'], $new_file_path)) {

            $upload_id = wp_insert_attachment(array(
                'guid' => $new_file_path,
                'post_mime_type' => $new_file_mime,
                'post_title' => preg_replace('/\.[^.]+$/', '', $image1['name']),
                'post_content' => '',
                'post_status' => 'inherit',
            ), $new_file_path);

            // wp_generate_attachment_metadata() sans cet include
            require_once ABSPATH . 'wp-admin/includes/image.php';

            // Genere et sauvegarde les métadonnées associé dans la BDD
            wp_update_attachment_metadata($upload_id, wp_generate_attachment_metadata($upload_id, $new_file_path));

            $args = array(
                'post_type' => 'attachment',
                'name' => sanitize_title($nomImg),
                'posts_per_page' => 1,
                'post_status' => 'inherit',
            );

            $imgObj = get_posts($args);
            $imgID = $imgObj[0]->ID;
            $imgURL = wp_get_attachment_image_src($imgID, 'full');

            $ng_content = '<!-- wp:image {"id":' . $imgID . ',"sizeSlug":"full","linkDestination":"none"} -->
              <figure class="wp-block-image size-full"><img src="' . $imgURL[0] . '" alt="" class="wp-image-190"/></figure>
              <!-- /wp:image -->';
        }

        // Ajout du paragraphe pour la création de l'article
        $ng_content = $ng_content . '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte1 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(60),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide10_nom, 'views/slides/slide_10.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }

/*
     * SLIDE 11
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 11
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $image1
     * @param string $texte1
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide11($ng_guide_nom, $image1, $texte1, $slide)
    {
        require ABSPATH . 'wp-load.php';
        $wordpress_upload_dir = wp_upload_dir();
        // $wordpress_upload_dir['path'] est le path entier du serveur vers (wp-content/uploads/2017/05)
        // $wordpress_upload_dir['url'] le lien absolut vers l'url du même dossier, pour montrer le lien vers le fichier
        $i = 1; // compteur si le même nom de fichier

        $ng_slide11_nom = 'slide11';
        $ng_content = '';

        $new_file_path = $wordpress_upload_dir['path'] . '/' . $image1['name'];

        $new_file_mime = mime_content_type($image1['tmp_name']);

        if ($image1['error']) {
            die($image1['error']);
        }

        if ($image1['size'] > wp_max_upload_size()) {
            die('La taille de l\'image est trop grande.');
        }

        if (!in_array($new_file_mime, get_allowed_mime_types())) {
            die('Le type de l\'image n\'est pas valide');
        }

        while (file_exists($new_file_path)) {
            $i++;
            $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $image1['name'];
            $nomImg = preg_replace('/\.[^.]+$/', '', $image1['name']) . "-" . $i;
        }

        // Ajout de l'image dans wordpress
        if (move_uploaded_file($image1['tmp_name'], $new_file_path)) {

            $upload_id = wp_insert_attachment(array(
                'guid' => $new_file_path,
                'post_mime_type' => $new_file_mime,
                'post_title' => preg_replace('/\.[^.]+$/', '', $image1['name']),
                'post_content' => '',
                'post_status' => 'inherit',
            ), $new_file_path);

            // wp_generate_attachment_metadata() sans cet include
            require_once ABSPATH . 'wp-admin/includes/image.php';

            // Genere et sauvegarde les métadonnées associé dans la BDD
            wp_update_attachment_metadata($upload_id, wp_generate_attachment_metadata($upload_id, $new_file_path));

            $args = array(
                'post_type' => 'attachment',
                'name' => sanitize_title($nomImg),
                'posts_per_page' => 1,
                'post_status' => 'inherit',
            );

            $imgObj = get_posts($args);
            $imgID = $imgObj[0]->ID;
            $imgURL = wp_get_attachment_image_src($imgID, 'full');

            $ng_content = '<!-- wp:image {"id":' . $imgID . ',"sizeSlug":"full","linkDestination":"none"} -->
              <figure class="wp-block-image size-full"><img src="' . $imgURL[0] . '" alt="" class="wp-image-190"/></figure>
              <!-- /wp:image -->';
        }

        // Ajout du paragraphe pour la création de l'article
        $ng_content = $ng_content . '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte1 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(61),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide11_nom, 'views/slides/slide_11.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }

    /*
     * SLIDE 12
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 12
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $image1
     * @param string $texte1
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide12($ng_guide_nom, $image1, $texte1, $slide)
    {
        require ABSPATH . 'wp-load.php';
        $wordpress_upload_dir = wp_upload_dir();
        // $wordpress_upload_dir['path'] est le path entier du serveur vers (wp-content/uploads/2017/05)
        // $wordpress_upload_dir['url'] le lien absolut vers l'url du même dossier, pour montrer le lien vers le fichier
        $i = 1; // compteur si le même nom de fichier

        $ng_slide12_nom = 'slide12';
        $ng_content = '';

        $new_file_path = $wordpress_upload_dir['path'] . '/' . $image1['name'];

        $new_file_mime = mime_content_type($image1['tmp_name']);

        if ($image1['error']) {
            die($image1['error']);
        }

        if ($image1['size'] > wp_max_upload_size()) {
            die('La taille de l\'image est trop grande.');
        }

        if (!in_array($new_file_mime, get_allowed_mime_types())) {
            die('Le type de l\'image n\'est pas valide');
        }

        while (file_exists($new_file_path)) {
            $i++;
            $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $image1['name'];
            $nomImg = preg_replace('/\.[^.]+$/', '', $image1['name']) . "-" . $i;
        }

        // Ajout de l'image dans wordpress
        if (move_uploaded_file($image1['tmp_name'], $new_file_path)) {

            $upload_id = wp_insert_attachment(array(
                'guid' => $new_file_path,
                'post_mime_type' => $new_file_mime,
                'post_title' => preg_replace('/\.[^.]+$/', '', $image1['name']),
                'post_content' => '',
                'post_status' => 'inherit',
            ), $new_file_path);

            // wp_generate_attachment_metadata() sans cet include
            require_once ABSPATH . 'wp-admin/includes/image.php';

            // Genere et sauvegarde les métadonnées associé dans la BDD
            wp_update_attachment_metadata($upload_id, wp_generate_attachment_metadata($upload_id, $new_file_path));

            $args = array(
                'post_type' => 'attachment',
                'name' => sanitize_title($nomImg),
                'posts_per_page' => 1,
                'post_status' => 'inherit',
            );

            $imgObj = get_posts($args);
            $imgID = $imgObj[0]->ID;
            $imgURL = wp_get_attachment_image_src($imgID, 'full');

            $ng_content = '<!-- wp:image {"id":' . $imgID . ',"sizeSlug":"full","linkDestination":"none"} -->
              <figure class="wp-block-image size-full"><img src="' . $imgURL[0] . '" alt="" class="wp-image-190"/></figure>
              <!-- /wp:image -->';
        }

        // Ajout du paragraphe pour la création de l'article
        $ng_content = $ng_content . '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $texte1 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(62),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide12_nom, 'views/slides/slide_12.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }


    // TO DO
    // public function numaguide_creer_slide13($texte1, $texte2, $son1)
    // {
    //     $ng_slide2text_nom = $_POST['slide2text'];
    //     $ng_slide2text_value1 = $_POST['slide2text-1'];
    //     $ng_slide2text_value2 = $_POST['slide2text-2'];

    //     $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
    //         $ng_slide2text_value1 . '<!-- /wp:paragraph -->' .
    //         '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
    //         $ng_slide2text_value2 . '<!-- /wp:paragraph -->';

    //     if ($ng_slide2text_nom == 'slide7') {
    //         $num_cat = 57;
    //         $nom_slide = 'slide_7';
    //     }if ($ng_slide2text_nom == 'slide8') {
    //         $num_cat = 58;
    //         $nom_slide = 'slide_8';
    //     }if ($ng_slide2text_nom == 'slide13') {
    //         $num_cat = 63;
    //         $nom_slide = 'slide_13';
    //     }if ($ng_slide2text_nom == 'slide14') {
    //         $num_cat = 64;
    //         $nom_slide = 'slide_14';
    //     }if ($ng_slide2text_nom == 'slide16') {
    //         $num_cat = 66;
    //         $nom_slide = 'slide_16';
    //     }

    //     $ng_info_article = array(
    //         'post_content' => $ng_content,
    //         'post_category' => array($num_cat),
    //         'tags_input' => array('1', $ng_guide_nom),
    //         'post_type' => 'post',
    //     );

    //     wp_insert_post($ng_info_article);

    //     $info_slide = array($ng_slide2text_nom, 'views/slides/' . $nom_slide . '.php');
    //     $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

    // }

    //TO DO
    // public function numaguide_creer_slide14($texte1, $texte2, $son1, $son2)
    // {
    //     $ng_slide2text_nom = $_POST['slide2text'];
    //     $ng_slide2text_value1 = $_POST['slide2text-1'];
    //     $ng_slide2text_value2 = $_POST['slide2text-2'];

    //     $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
    //         $ng_slide2text_value1 . '<!-- /wp:paragraph -->' .
    //         '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
    //         $ng_slide2text_value2 . '<!-- /wp:paragraph -->';

    //     if ($ng_slide2text_nom == 'slide7') {
    //         $num_cat = 57;
    //         $nom_slide = 'slide_7';
    //     }if ($ng_slide2text_nom == 'slide8') {
    //         $num_cat = 58;
    //         $nom_slide = 'slide_8';
    //     }if ($ng_slide2text_nom == 'slide13') {
    //         $num_cat = 63;
    //         $nom_slide = 'slide_13';
    //     }if ($ng_slide2text_nom == 'slide14') {
    //         $num_cat = 64;
    //         $nom_slide = 'slide_14';
    //     }if ($ng_slide2text_nom == 'slide16') {
    //         $num_cat = 66;
    //         $nom_slide = 'slide_16';
    //     }

    //     $ng_info_article = array(
    //         'post_content' => $ng_content,
    //         'post_category' => array($num_cat),
    //         'tags_input' => array('1', $ng_guide_nom),
    //         'post_type' => 'post',
    //     );

    //     wp_insert_post($ng_info_article);

    //     $info_slide = array($ng_slide2text_nom, 'views/slides/' . $nom_slide . '.php');
    //     $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

    // }

    //TO DO
    // public function numaguide_creer_slide15($video1)
    // {

    // }

    //TO DO
    // public function numaguide_creer_slide16($texte1, $texte2, $video1)
    // {
    //     $ng_slide2text_nom = $_POST['slide2text'];
    //     $ng_slide2text_value1 = $_POST['slide2text-1'];
    //     $ng_slide2text_value2 = $_POST['slide2text-2'];

    //     $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
    //         $ng_slide2text_value1 . '<!-- /wp:paragraph -->' .
    //         '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
    //         $ng_slide2text_value2 . '<!-- /wp:paragraph -->';

    //     if ($ng_slide2text_nom == 'slide7') {
    //         $num_cat = 57;
    //         $nom_slide = 'slide_7';
    //     }if ($ng_slide2text_nom == 'slide8') {
    //         $num_cat = 58;
    //         $nom_slide = 'slide_8';
    //     }if ($ng_slide2text_nom == 'slide13') {
    //         $num_cat = 63;
    //         $nom_slide = 'slide_13';
    //     }if ($ng_slide2text_nom == 'slide14') {
    //         $num_cat = 64;
    //         $nom_slide = 'slide_14';
    //     }if ($ng_slide2text_nom == 'slide16') {
    //         $num_cat = 66;
    //         $nom_slide = 'slide_16';
    //     }

    //     $ng_info_article = array(
    //         'post_content' => $ng_content,
    //         'post_category' => array($num_cat),
    //         'tags_input' => array('1', $ng_guide_nom),
    //         'post_type' => 'post',
    //     );

    //     wp_insert_post($ng_info_article);

    //     $info_slide = array($ng_slide2text_nom, 'views/slides/' . $nom_slide . '.php');
    //     $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

    // }

    //TO DO
    // public function numaguide_cree_slide17($texte1, $video1)
    // {
    //     $ng_slide1text_nom = $_POST['slide1text'];
    //     $ng_slide1text_value1 = $_POST['slide1text-1'];

    //     $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
    //         $ng_slide1text_value1 . '<!-- /wp:paragraph -->';

    //     if ($ng_slide1text_nom == 'slide3') {
    //         $num_cat = 53;
    //         $nom_slide = 'slide_3';
    //     }if ($ng_slide1text_nom == 'slide4') {
    //         $num_cat = 54;
    //         $nom_slide = 'slide_4';
    //     }if ($ng_slide1text_nom == 'slide5') {
    //         $num_cat = 55;
    //         $nom_slide = 'slide_5';
    //     }if ($ng_slide1text_nom == 'slide6') {
    //         $num_cat = 56;
    //         $nom_slide = 'slide_6';
    //     }if ($ng_slide1text_nom == 'slide10') {
    //         $num_cat = 60;
    //         $nom_slide = 'slide_10';
    //     }if ($ng_slide1text_nom == 'slide11') {
    //         $num_cat = 61;
    //         $nom_slide = 'slide_11';
    //     }if ($ng_slide1text_nom == 'slide12') {
    //         $num_cat = 62;
    //         $nom_slide = 'slide_12';
    //     }if ($ng_slide1text_nom == 'slide17') {
    //         $num_cat = 67;
    //         $nom_slide = 'slide_17';
    //     }

    //     $ng_info_article = array(
    //         'post_content' => $ng_content,
    //         'post_category' => array($num_cat),
    //         'tags_input' => array('1', $ng_guide_nom),
    //         'post_type' => 'post',
    //     );

    //     wp_insert_post($ng_info_article);

    //     $info_slide = array($ng_slide1text_nom, 'views/slides/' . $nom_slide . '.php');
    //     $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

    // }

    /*
     * SLIDE 18
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 1
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $texte1
     * @param string $texte2
     * @param string $texte3
     * @param string $texte4
     * @param string $texte5
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide18($ng_guide_nom, $texte1, $texte2, $texte3, $texte4, $texte5, $slide)
    {
        $ng_slide18_nom = "slide18";
        $ng_slide18_value1 = $_POST['slide18-1'];
        $ng_slide18_value2 = $_POST['slide18-2'];
        $ng_slide18_value3 = $_POST['slide18-3'];
        $ng_slide18_value4 = $_POST['slide18-4'];
        $ng_slide18_value5 = $_POST['slide18-5'];

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide18_value1 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide18_value2 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide18_value3 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide18_value4 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide18_value5 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(68),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide18_nom, 'views/slides/slide_18.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }

    /*
     * SLIDE 19
     * ///////
     * Récupère les infos du formulaire de création de guide
     * créé un article et génère la slide 1
     *
     * @since Numaguide 1.0.0
     *
     * @param string $ng_guide_nom
     * @param string $texte1
     * @param string $texte2
     * @param string $texte3
     * @param string $texte4
     * @param string $texte5
     * @param string $slide
     *
     * @return string $slide
     *
     */

    public function numaguide_creer_slide19($ng_guide_nom, $texte1, $texte2, $texte3, $texte4, $texte5, $slide)
    {

        $ng_slide19_nom = "slide19";
        $ng_slide19_value1 = $_POST['slide19-1'];
        $ng_slide19_value2 = $_POST['slide19-2'];
        $ng_slide19_value3 = $_POST['slide19-3'];
        $ng_slide19_value4 = $_POST['slide19-4'];
        $ng_slide19_value5 = $_POST['slide19-5'];

        $ng_content = '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide19_value1 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide19_value2 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide19_value3 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide19_value4 . '<!-- /wp:paragraph -->' .
            '<!-- wp:paragraph {"placeholder":"Post Paragraph"} -->' .
            $ng_slide19_value5 . '<!-- /wp:paragraph -->';

        $ng_info_article = array(
            'post_content' => $ng_content,
            'post_category' => array(69),
            'tags_input' => array('1', $ng_guide_nom),
            'post_type' => 'post',
        );

        wp_insert_post($ng_info_article);

        $info_slide = array($ng_slide19_nom, 'views/slides/slide_19.php');
        $slide = $slide . apply_filters('ng_article_pour_template', $info_slide);

        return $slide;
    }
}

/*Change la photo de profil par défaut*/

update_option('avatar_default', 'https://zupimages.net/up/22/21/3hzz.png');
