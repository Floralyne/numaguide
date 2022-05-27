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
		wp_enqueue_style($this->numaguide, plugin_dir_url(__FILE__) . 'css/numaguide-public.css', array(), $this->version, 'all');
	}

	/**
	 * Enregistrez le JavaScript pour la partie du site destinée au public.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{
		wp_enqueue_script($this->numaguide, plugin_dir_url(__FILE__) . 'js/numaguide-public.js', array('jquery'), $this->version, false);
	}

	/**
	 * Enlève la barre administrateur côté front.
	 *
	 * @since    1.0.0
	 */
	public function numaguide_enleve_barre_admin() {
		show_admin_bar(false);
	  }
}
