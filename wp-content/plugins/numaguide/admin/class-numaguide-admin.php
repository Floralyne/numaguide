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
            'ng_submenu_page_content'
        );

        add_submenu_page(
            'numaguide',
            'Numaguide | Modifier un guide',
            'Modifier un guide',
            'edit_posts',
            'ng_modifierguide',
            'ng_submenu_page_content'
        );

        add_submenu_page(
            'numaguide',
            'Numaguide | Liste des guides',
            'Liste des guides',
            'edit_posts',
            'ng_listeguide',
            'ng_submenu_page_content'
        );

        add_submenu_page(
            'numaguide',
            'Numaguide | Configuration',
            'Configuration',
            'edit_posts',
            'ng_configuration',
            'ng_submenu_page_content'
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
            ?>
						<h1>
							<?php esc_html_e('Test Numaguide', 'Numaguide');?>
						</h1>
			<?php
}

        function ng_submenu_page_content()
        {
            include_once 'views/view_numaguide_form_creation.php';
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
        //TO DO
        //RAJOUTER LES VARIABLES D'ENTREE
        //POUR AUTOMATISER LA CATEGORIE/ETIQUETTE/GUIDE

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
        echo "<a href=\"http://localhost/wordpress/" . strtolower(str_replace(' ', '-', trim($titre_guide))) . "\">Appuyez pour voir le guide !</a>";
        return $page_id;
    }

    /*
     * Masques les menus de la barre de menus pour les éditeurs, auteurs et contributeurs.
     *
     * @since Numaguide 1.0.0
     *
     * @param string $user
     * @param array $allowed_roles la liste des rôles concernés

     * @param int $parent_id id d'un parent, par défaut NULL
     *
     * @return int $page_id
     */

    public function numaguide_cacher_menus()
    {
        $user = wp_get_current_user();
        $allowed_roles = array('editor', 'contributor', 'author');

        if (array_intersect($allowed_roles, $user->roles)) {

            remove_menu_page('index.php'); //Dashboard
            remove_menu_page('jetpack'); //Jetpack*
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

     * @param int $parent_id id d'un parent, par défaut NULL
     *
     * @return int $page_id
     */

    public function numaguide_vider_barre_admin($wp_admin_bar)
    {

        $wp_admin_bar->remove_node('comments');
        $wp_admin_bar->remove_node('new-content');

    }
}

/*Change la photo de profil par défaut*/

update_option( 'avatar_default', 'https://zupimages.net/up/22/21/3hzz.png' );
