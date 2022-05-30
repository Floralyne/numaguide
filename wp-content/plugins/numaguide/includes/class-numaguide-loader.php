<?php

/**
 * Enregistrer toutes les actions et tous les filtres pour le plugin
 *
 * @link              https://numaguide.msh-vdl.fr/
 * @since             1.0.0
 * @package           Numaguide
 * @subpackage 		  Numaguide/includes
 */

class Numaguide_Loader
{

	/**
	 * Le tableau des actions enregistrées avec WordPress.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      array    $actions    Les actions enregistrées auprès de WordPress à déclencher au chargement du plugin.
	 */
	protected $actions;

	/**
	 * Le tableau des filtres enregistrés avec WordPress.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      array    $filters    Les filtres enregistrés auprès de WordPress pour être activés au chargement du plugin.
	 */
	protected $filters;

	/**
	 * Initialiser les collections utilisées pour gérer les actions et les filtres.
	 *
	 * @since    1.0.0
	 */
	public function __construct()
	{

		$this->actions = array();
		$this->filters = array();
	}

	/**
	 * Ajoutez une nouvelle action à la collection à enregistrer auprès de WordPress.
	 *
	 * @since    1.0.0
	 * @param    string               $hook             Le nom de l'action WordPress qui est enregistrée.
	 * @param    object               $component        Une référence à l'instance de l'objet sur lequel l'action est définie.
	 * @param    string               $callback         Le nom de la définition de la fonction sur le $component.
	 * @param    int                  $priority         Facultatif. La priorité à laquelle la fonction doit être lancée. La valeur par défaut est 10.
	 * @param    int                  $accepted_args    Facultatif. Le nombre d'arguments qui doivent être passés à la $callback. La valeur par défaut est 1.
	 */
	public function add_action($hook, $component, $callback, $priority = 10, $accepted_args = 1)
	{
		$this->actions = $this->add($this->actions, $hook, $component, $callback, $priority, $accepted_args);
	}

	/**
	 * Ajoutez un nouveau filtre à la collection à enregistrer avec WordPress.
	 *
	 * @since    1.0.0
	 * @param    string               $hook             Le nom du filtre WordPress qui est enregistré.
	 * @param    object               $component        Une référence à l'instance de l'objet sur lequel le filtre est défini.
	 * @param    string               $callback         Le nom de la définition de la fonction sur le $component.
	 * @param    int                  $priority         Facultatif. La priorité à laquelle la fonction doit être lancée. La valeur par défaut est 10.
	 * @param    int                  $accepted_args    Facultatif. Le nombre d'arguments qui doivent être passés à la $callback. La valeur par défaut est 1.
	 */
	public function add_filter($hook, $component, $callback, $priority = 10, $accepted_args = 1)
	{
		$this->filters = $this->add($this->filters, $hook, $component, $callback, $priority, $accepted_args);
	}

	/**
	 * Une fonction utilitaire qui est utilisée pour enregistrer les actions et les hooks dans une seule et unique
	 * collection.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @param    array                $hooks            La collection de hooks qui est enregistrée (c'est-à-dire les actions ou les filtres).
	 * @param    string               $hook             Le nom du filtre WordPress qui est enregistré.
	 * @param    object               $component        Une référence à l'instance de l'objet sur lequel le filtre est défini.
	 * @param    string               $callback         Le nom de la définition de la fonction sur le $component.
	 * @param    int                  $priority         La priorité à laquelle la fonction doit être lancée.
	 * @param    int                  $accepted_args    Le nombre d'arguments qui doivent être passés à la $callback.
	 * @return   array                                  La collection d'actions et de filtres enregistrés avec WordPress.
	 */
	private function add($hooks, $hook, $component, $callback, $priority, $accepted_args)
	{

		$hooks[] = array(
			'hook'          => $hook,
			'component'     => $component,
			'callback'      => $callback,
			'priority'      => $priority,
			'accepted_args' => $accepted_args
		);

		return $hooks;
	}

	/**
	 * Enregistrez les filtres et les actions avec WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run()
	{

		foreach ($this->filters as $hook) {
			add_filter($hook['hook'], array($hook['component'], $hook['callback']), $hook['priority'], $hook['accepted_args']);
		}

		foreach ($this->actions as $hook) {
			add_action($hook['hook'], array($hook['component'], $hook['callback']), $hook['priority'], $hook['accepted_args']);
		}
	}
}
