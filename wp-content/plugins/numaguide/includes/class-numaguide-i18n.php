<?php

/**
 * Définir la fonctionnalité d'internationalisation
 *
 * Charge et définit les fichiers d'internationalisation pour ce plugin
 * afin qu'il soit prêt pour la traduction.
 *
 * @link              https://numaguide.msh-vdl.fr/
 * @since             1.0.0
 * @package           Numaguide
 * @subpackage 		  Numaguide/includes
 */

class Numaguide_i18n
{


	/**
	 * Charge le domaine de texte du plugin pour la traduction.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain()
	{

		load_plugin_textdomain(
			'numaguide',
			false,
			dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
		);
	}
}
