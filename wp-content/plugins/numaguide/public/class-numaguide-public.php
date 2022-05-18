<?php

/**
 * La fonctionnalité du plugin côté public.
 *
 * @link              https://numaguide.msh-vdl.fr/
 * @since             1.0.0
 * @package           Numaguide
 * @subpackage 		  Numaguide/includes
 */

class Numaguide_Public
{

	/**
	 * L'ID de ce plugin.
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
	 * @param      string    $numaguide       Le nom du plugin.
	 * @param      string    $version    La version de ce plugin.
	 */
	public function __construct($numaguide, $version)
	{

		$this->numaguide = $numaguide;
		$this->version = $version;
	}

	/**
	 * Enregistrez les feuilles de style pour la partie du site destinée au public.
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

		wp_enqueue_style($this->numaguide, plugin_dir_url(__FILE__) . 'css/plugin-name-public.css', array(), $this->version, 'all');
	}

	/**
	 * Enregistrez le JavaScript pour la partie du site destinée au public.
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

		wp_enqueue_script($this->numaguide, plugin_dir_url(__FILE__) . 'js/plugin-name-public.js', array('jquery'), $this->version, false);
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
		get_template_part($template_name, $part_name, $variable);
		$var = ob_get_contents();
		ob_end_clean();
		return $var;
		//die(var_dump($var));
	}
}
