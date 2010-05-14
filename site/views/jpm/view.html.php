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

        $model =& $this->getModel();
        $greeting = $model->getGreeting();
        $this->assignRef( 'greeting',$greeting );
        $items =& $this->get( 'Data');
        $this->assignRef( 'items', $items );

        parent::display($tpl);
    }
}
