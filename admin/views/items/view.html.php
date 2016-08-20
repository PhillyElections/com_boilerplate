<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Items View for Pvnew Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvnewViewItems extends JView
{
    /**
     * Pvnew view display method
     * @return void
     **/
    public function display($tpl = null)
    {
        JToolBarHelper::title(JText::_('PVNews Items Manager'), 'generic.png');
        JToolBarHelper::deleteList();
        JToolBarHelper::editListX();
        JToolBarHelper::addNewX();

        $t = &JToolbar::getInstance('toolbar');

        $items      = &$this->get('Data');
        $pagination = &$this->get('Pagination');

        $this->assignRef('items', $items);
        $this->assignRef('pagination', $pagination);

        parent::display($tpl);
    }
}
