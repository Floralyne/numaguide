<?php

/**
 * Le fichier qui définit les classe du plugin de base
 *
 * Une définition de classe qui comprend des attributs et des fonctions utilisés à la fois
 * côté public et côté administrateur
 *
 * @link              https://numaguide.msh-vdl.fr/
 * @since             1.0.0
 * @package           Numaguide
 * @subpackage           Numaguide/includes
 */

class Numaguide
{

    /**
     * Le chargeur qui est responsable de la maintenance et de l'enregistrement de tous les hooks
     * du plugin
     *
     * @since    1.0.0
     * @access   protected
     * @var      Numaguide_Loader    $loader    Maintient et enregistre tous les hooks pour le plugin.
     */
    protected $loader;

    /**
     * L'identifiant unique du plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $numaguide    La chaîne utilisée pour identifier de façon unique ce plugin.
     */
    protected $numaguide;

    /**
     * La version actuelle du plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $version    La version actuelle du plugin.
     */
    protected $version;

    /**
     * Défini la fonctionnalité de base du plugin.
     * Dépendances, locale, hooks pour admin et public.
     *
     * @since    1.0.0
     */
    public function __construct()
    {
        if (defined('NUMAGUIDE_VERSION')) {
            $this->version = NUMAGUIDE_VERSION;
        } else {
            $this->version = '1.0.0';
        }
        $this->numaguide = 'numaguide';

        $this->load_dependencies();
        $this->set_locale();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }

    /**
     * Charge les dépendances requises pour ce plugin.
     *
     * Include the following files that make up the plugin:
     *
     * - Numaguide_Loader. Chef d'orchestre des hooks.
     * - Numaguide_i18n. Langages.
     * - Numaguide_Admin. Hooks côté admin.
     * - Numaguide_Public. Hooks côté public.
     *
     * @since    1.0.0
     * @access   private
     */
    private function load_dependencies()
    {

        /**
         * The class responsible for orchestrating the actions and filters of the
         * core plugin.
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'includes/class-numaguide-loader.php';

        /**
         * The class responsible for defining internationalization functionality
         * of the plugin.
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'includes/class-numaguide-i18n.php';

        /**
         * The class responsible for defining all actions that occur in the admin area.
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/class-numaguide-admin.php';

        /**
         * The class responsible for defining all actions that occur in the public-facing
         * side of the site.
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'public/class-numaguide-public.php';

        $this->loader = new Numaguide_Loader();
    }

    /**
     * Défini la variable locale pour la traduction.
     *
     * @since    1.0.0
     * @access   private
     */
    private function set_locale()
    {

        $plugin_i18n = new Numaguide_i18n();

        $this->loader->add_action('plugins_loaded', $plugin_i18n, 'load_plugin_textdomain');
    }

    /**
     * Enregistre tous les hooks liés à la fonctionnalité de la zone d'administration.
     * du plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function define_admin_hooks()
    {

        $plugin_admin = new Numaguide_Admin($this->get_numaguide(), $this->get_version());

        // Hooks d'action pour importer les styles et scripts côté admin
        $this->loader->add_action('admin_enqueue_scripts', $plugin_admin, 'enqueue_styles');
        $this->loader->add_action('admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts');

        // Hooks d'action pour la création du menu Numaguides et cacher des menus pour Editeur
        $this->loader->add_action('admin_menu', $plugin_admin, 'numaguide_creer_menu_admin');
        $this->loader->add_action('admin_menu', $plugin_admin, 'numaguide_cacher_menus');
        $this->loader->add_action('admin_bar_menu', $plugin_admin, 'numaguide_vider_barre_admin', 999);

        // Hooks pour utiliser les fonctions pour la création d'un guide
        $this->loader->add_filter('ng_article_pour_template', $plugin_admin, 'numaguide_article_pour_template', 10, 1);
        $this->loader->add_filter('ng_genere_slide', $plugin_admin, 'numaguide_genere_slide', 10, 3);
        $this->loader->add_filter('ng_creer_guide', $plugin_admin, 'numaguide_creer_guide', 10, 3);

        $this->loader->add_filter('ng_creer_slide1', $plugin_admin, 'numaguide_creer_slide1', 10, 5);
        $this->loader->add_filter('ng_creer_slide2', $plugin_admin, 'numaguide_creer_slide2', 10, 7);
        $this->loader->add_filter('ng_creer_slide3', $plugin_admin, 'numaguide_creer_slide3', 10, 3);
        $this->loader->add_filter('ng_creer_slide4', $plugin_admin, 'numaguide_creer_slide4', 10, 3);
        $this->loader->add_filter('ng_creer_slide5', $plugin_admin, 'numaguide_creer_slide5', 10, 3);
        $this->loader->add_filter('ng_creer_slide6', $plugin_admin, 'numaguide_creer_slide6', 10, 3);
        $this->loader->add_filter('ng_creer_slide7', $plugin_admin, 'numaguide_creer_slide7', 10, 4);
        $this->loader->add_filter('ng_creer_slide8', $plugin_admin, 'numaguide_creer_slide8', 10, 4);
        $this->loader->add_filter('ng_creer_slide9', $plugin_admin, 'numaguide_creer_slide9', 10, 3);
        $this->loader->add_filter('ng_creer_slide10', $plugin_admin, 'numaguide_creer_slide10', 10, 4);
        $this->loader->add_filter('ng_creer_slide11', $plugin_admin, 'numaguide_creer_slide11', 10, 4);
        $this->loader->add_filter('ng_creer_slide12', $plugin_admin, 'numaguide_creer_slide12', 10, 4);
        //$this->loader->add_filter('ng_creer_slide13', $plugin_admin, 'numaguide_creer_slide13',10, 5);
        //$this->loader->add_filter('ng_creer_slide14', $plugin_admin, 'numaguide_creer_slide14',10, 6);
        //$this->loader->add_filter('ng_creer_slide15', $plugin_admin, 'numaguide_creer_slide15',10, 3);
        //$this->loader->add_filter('ng_creer_slide16', $plugin_admin, 'numaguide_creer_slide16',10, 5);
        //$this->loader->add_filter('ng_creer_slide17', $plugin_admin, 'numaguide_creer_slide17',10, 4);
        $this->loader->add_filter('ng_creer_slide18', $plugin_admin, 'numaguide_creer_slide18', 10, 7);
        $this->loader->add_filter('ng_creer_slide19', $plugin_admin, 'numaguide_creer_slide19', 10, 7);

    }

    /**
     * Enregistre tous les hooks liés à la fonctionnalité de la zone public.
     * du plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function define_public_hooks()
    {

        $plugin_public = new Numaguide_Public($this->get_numaguide(), $this->get_version());

        $this->loader->add_action('after_setup_theme', $plugin_public, 'numaguide_enleve_barre_admin');

        //$this->loader->add_action('wp_enqueue_scripts', $plugin_public, 'enqueue_styles');
        //$this->loader->add_action('wp_enqueue_scripts', $plugin_public, 'enqueue_scripts');
    }

    /**
     * Lance le chargeur pour exécuter tous les hooks avec WordPress.
     *
     * @since    1.0.0
     */
    public function run()
    {
        $this->loader->run();
    }

    /**
     * Le nom du plugin utilisé pour l'identifier de manière unique dans le contexte de
     * WordPress et pour définir la fonctionnalité de langage.
     *
     * @since     1.0.0
     * @return    string    Le nom du plugin.
     */
    public function get_numaguide()
    {
        return $this->numaguide;
    }

    /**
     * La référence à la classe qui orchestre les hooks avec le plugin.
     *
     * @since     1.0.0
     * @return    Numaguide_Loader    Orchestre les hooks du plugin.
     */
    public function get_loader()
    {
        return $this->loader;
    }

    /**
     * Récupérer le numéro de version du plugin.
     *
     * @since     1.0.0
     * @return    string   Le numéro de version du plugin.
     */
    public function get_version()
    {
        return $this->version;
    }

}
