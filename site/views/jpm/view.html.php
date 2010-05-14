<?php
/**
 * @package    KelebekYazilim.Work
 * @subpackage Components
 * @link http://kelebekyazilim.net
 * @license    GNU/GPL
 */

// no direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the Jpm Component
 *
 * @package    KelebekYazilim.Work
 */

class jpmViewjpm extends JView
{
    function display($tpl = null)
    {
        $greeting = "Hello mumumumumu World!";
        $this->assignRef( 'greeting', $greeting );

        parent::display($tpl);
    }
}
