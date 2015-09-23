<?php
/**
 * Fichier gérant l'installation et désinstallation du plugin Vertige Setup
 *
 * @plugin     Vertige Setup
 * @copyright  2015
 * @author     vertige
 * @licence    GNU/GPL
 * @package    SPIP\Setup_vertige\Installation
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Fonction d'installation et de mise à jour du plugin Vertige Setup.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
**/
function setup_vertige_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}


/**
 * Fonction de désinstallation du plugin Vertige Setup.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
**/
function setup_vertige_vider_tables($nom_meta_base_version) {


	effacer_meta($nom_meta_base_version);
}

?>