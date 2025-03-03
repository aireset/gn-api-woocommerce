<?php

namespace GN_Includes;

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.gerencianet.com.br
 *
 * @package    Gerencianet_Oficial
 * @subpackage Gerencianet_Oficial/includes
 * @author     Felipe Almeman - Aireset <felipe@aireset.com.br>
 */
class Gerencianet_I18n {


	public static $textDomain = 'efigerencianet-por-aireset';

	/**
	 * Load the plugin text domain for translation.
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'efigerencianet-por-aireset',
			false,
			GERENCIANET_OFICIAL_PLUGIN_PATH . 'languages/'
		);

	}

	// Retrieve the plugin text domain
	public static function getTextDomain() {
		return self::$textDomain;
	}

}
