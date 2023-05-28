<?php

/**
 * @brief		Hello World Application Class
 * @author		<a href='https://axendev.net/'>aXenDev</a>
 * @copyright	(c) 2022 aXenDev
 * @package		Invision Community
 * @subpackage	Hello World
 * @since		09 Nov 2022
 * @version		
 */

namespace IPS\helloworld;

/**
 * Hello World Application Class
 */
class _Application extends \IPS\Application
{
  /**
   * [Node] Get Icon for tree
   *
   * @note    Return the class for the icon (e.g. 'globe')
   * @return    string|null
   */
  protected function get__icon()
  {
    return 'globe';
  }
}
