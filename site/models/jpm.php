<?php
/**
 * Hello Model for Hello World Component
 * 
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_2
 * @license    GNU/GPL
 */

// No direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );

/**
 * Hello Model
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class jpmModeljpm extends JModel
{
    /**
     * Gets the greeting
     * @return string The greeting to be displayed to the user
     */
    function getGreeting()
    {
        return 'Joomla Picture Menu';
    }

    var $_data;

    /**
     * Returns the query
     * @return string The query to be used to retrieve the rows from the database
     */
    function _buildQuery($jpm_id)
    {
        $query = ' SELECT * '
            . ' FROM #__jpm '
            . ' WHERE CID=' . $jpm_id
            ;
        return $query;
    }

    /**
     * Retrieves the hello data
     * @return array Array of objects containing the data from the database
     */
    function getData($jpm_id)
    {
        // Lets load the data if it doesn't already exist
        if (empty( $this->_data ))
        {
            $query = $this->_buildQuery($jpm_id);
            $this->_data = $this->_getList( $query );
        }

        return $this->_data;
    }

}
