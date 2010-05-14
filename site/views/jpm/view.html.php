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
        if (!($jpmId= JRequest::getInt( 'jpm_id',0 ))) {
            $jpmId= JRequest::getInt( 'id',$jpmId );
        }

        $model =& $this->getModel();
        $greeting = $model->getGreeting();
        $this->assignRef( 'greeting',$greeting );
        $items = $model->getData($jpmId);
        $this->assignRef( 'items', $items );
        $this->assignRef( 'jpm_id', $jpmId );

        parent::display($tpl);
    }
}
