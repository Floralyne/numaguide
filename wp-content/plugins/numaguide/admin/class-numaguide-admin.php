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

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->numaguide, plugin_dir_url(__FILE__) . 'css/numaguide-admin.css', array(), $this->version, 'all');
	}

	/**
	 * Enregistre le JavaScript pour la zone d'administration.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

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
	* @since Numaguide 0.1
	*
	* @param string $template_name le path du template
	* @param string $part_name le nom de la partie du template
	* @param array $variable tableau de variables à injecter dans le template
	* 
	* @return string
	*/
	function numaguide_load_template_part($template_name, $part_name = null, $variable)
	{
		
		ob_start();
		//die(var_dump($variable));
		get_template_part($template_name, $part_name, $variable);
		$var = ob_get_contents();
		ob_end_clean();
		return $var;
		//die(var_dump($var));
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

