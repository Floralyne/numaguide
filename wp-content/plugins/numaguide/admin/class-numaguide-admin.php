<?php

/**
 * Les fonctionnalités spécifiques à l'administrateur du plugin.
 *
 * @link              https://numaguide.msh-vdl.fr/
 * @since             1.0.0
 * @package           Numaguide
 * @subpackage 		  Numaguide/includes
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
	 * @param      string    $version    		La version de ce plugin.
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
	}

	/**
	 * Enregistre le JavaScript pour la zone d'administration.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{
		wp_enqueue_script($this->numaguide, plugin_dir_url(__FILE__) . 'js/plugin-name-admin.js', array('jquery'), $this->version, false);
	}

	function numaguide_page()
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


		function ng_admin_page_contents()
		{
?>
			<h1>
				<?php esc_html_e('Test Numaguide', 'Numaguide'); ?>
			</h1>
<?php
		}

		function ng_submenu_page_content()
		{
			echo '<div class="wrap">';
			echo '<h2>Formulaires Numaguide</h2>';
			echo '</div>';
		}
	}

	/*
	* Met en variable un template avec son contenu
	*
	* @since Numaguide 1.0.0
	*
	* @param string $template_name le path du template
	* @param string $part_name le nom de la partie du template
	* @param array $args tableau de variables à injecter dans le template
	* 
	* @return string
	*/
	function numaguide_genere_slide($template_name, $part_name = null, $args)
	{
		
		ob_start();
		get_template_part($template_name, $part_name, $args);
		$var = ob_get_contents();
		ob_end_clean();
		return $var;
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
	function numaguide_creer_guide($titre_guide, $content, $parent_id = NULL)
    {
        $objPage = get_page_by_title($titre_guide, 'OBJECT', 'page');
        if (!empty($objPage)) {
            echo "La page existe déjà:" . $titre_guide . "<br/>";
            return $objPage->ID;
        }

        $page_id = wp_insert_post(
            array(
                'comment_status' => 'close',
                'ping_status'    => 'close',
                'post_author'    => 1,
                'post_title'     => ucwords($titre_guide),
                'post_name'      => strtolower(str_replace(' ', '-', trim($titre_guide))),
                'post_status'    => 'publish',
                'post_content'   => $content,
                'post_type'      => 'page',
                'post_parent'    =>  $parent_id //seulement s'il y en a un
            )
        );
        echo "Le guide numérique" . $titre_guide . "( ID: " . $page_id . ") a été crée !";
		echo "Retrouvez le à l'adresse : http://localhost/wordpress/" . strtolower(str_replace(' ', '-', trim($titre_guide)));
        return $page_id;
    }

}

// // Ajout des pages dans la bar de menu administrateur
// function ajout_menu_configuration($wp_admin_bar)
// {
//   $args = array(
//     'id' => 'wp_numaguide',
//     'title' => 'Numaguide',
//     'href' => '/',
//     'meta' => array(
//       'class' => 'wp_config_numaguide',
//       'title' => 'Search WPBeginner Tutorials'
//     )
//   );
//   $wp_admin_bar->add_node($args);


//   $args = array(
//     'id' => 'wp_config_numaguide',
//     'title' => 'Configuration',
//     'href' => get_template_directory_uri() . '/page_config/form_configuration.php',
//     'parent' => 'wp_numaguide',
//     'meta' => array(
//       'class' => 'wp_config_numaguide',
//       'title' => 'Configuration'
//     )
//   );
//   $wp_admin_bar->add_node($args);


//   $args = array(
//     'id' => 'wp_creation_numaguide',
//     'title' => 'Création d\'un guide',
//     'href' => get_template_directory_uri() . '/page_creation/form_creation.php',
//     'parent' => 'wp_numaguide',
//     'meta' => array(
//       'class' => 'wp_creation_numaguide',
//       'title' => 'Création d\'un guide'
//     )
//   );
//   $wp_admin_bar->add_node($args);


//   $args = array(
//     'id' => 'wp_liste_numaguide',
//     'title' => 'Liste des guides',
//     'href' => get_template_directory_uri() . '/page_liste/form_liste.php',
//     'parent' => 'wp_numaguide',
//     'meta' => array(
//       'class' => 'wp_liste_numaguide',
//       'title' => 'Liste des guides'
//     )
//   );
//   $wp_admin_bar->add_node($args);
// }
// add_action('admin_bar_menu', 'ajout_menu_configuration', 999);

