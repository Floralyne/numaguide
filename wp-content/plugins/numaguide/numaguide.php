<?php

/**
 * Le fichier d'amorçage du plugin
 *
 * Ce fichier est lu par WordPress pour générer les informations relatives au plugin
 * dans la zone d'administration du plugin. Ce fichier comprend également toutes les dépendances utilisées par le plugin,
 * et enregistre les fonctions d'activation et de désactivation, et définit une fonction
 * qui démarre le plugin.
 *
 * @link              https://numaguide.msh-vdl.fr/
 * @since             1.0.0
 * @package           Numaguide
 *
 * @wordpress-plugin
 * Plugin Name:       Numaguide
 * Plugin URI:        https://numaguide.msh-vdl.fr/numaguide-uri/
 * Description:       Le plugin Numaguide permet la génération de guide numérique
 * Version:           1.0.0
 * Author:            Numaguide
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Numaguide
 * Domain Path:       /languages
 */

// Empêche ce fichier d'être appelé directement.
if (!defined('WPINC')) {
	die;
}

/**
 * La version actuelle du fichier.
 */
define('NUMAGUIDE_VERSION', '1.0.0');

/**
 * Le code activé lors de l'activation du plugin.
 */
function activate_numaguide()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-numaguide-activator.php';
	Numaguide_Activator::activate();
}

/**
 * Le code activé lors de la désactivation du plugin.
 */
function deactivate_numaguide()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-numaguide-deactivator.php';
	Numaguide_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_numaguide');
register_deactivation_hook(__FILE__, 'deactivate_numaguide');

/**
 * La classe de base du plugin,
 * admin-specific hooks, et public-facing site hooks.
 * 
 */
require plugin_dir_path(__FILE__) . 'includes/class-numaguide.php';

/**
 * Commence l'exécution du plugin.
 *
 * Puisque tout ce qui se trouve dans le plugin est enregistré via des hooks,
 * alors le lancement du plugin à partir de ce point dans le fichier
 * n'affecte pas le cycle de vie.
 *
 * @since    1.0.0
 */
function run_numaguide()
{

	$plugin = new Numaguide();
	$plugin->run();
}
run_numaguide();
