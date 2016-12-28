<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Items Controller for [COmponent] Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class [Component]ControllerItems extends [Component]Controller
{
    /**
     * Display the Items View
     * @return void
     */
    public function display()
    {
        JRequest::setVar('view', 'items');

        parent::display();
    }

    /**
     * Redirect Edit task to Item Controller
     * @return void
     */
    public function edit()
    {
        $mainframe = JFactory::getApplication();
        $cid       = JRequest::getVar('cid');
        $mainframe->redirect('index.php?option=com_[component]&controller=item&task=edit&cid=' . $cid[0]);
    }

    /**
     * Redirect Add task to Item Controller
     * @return void
     */
    public function add()
    {
        $mainframe = JFactory::getApplication();
        $cid       = JRequest::getVar('cid');
        $mainframe->redirect('index.php?option=com_[component]&controller=item&task=add&cid=' . $cid[0]);
    }

    /**
     * Redirect Add task to Item Controll
     * @return void
     */
    public function publish()
    {
        $mainframe = JFactory::getApplication();
        $cid       = JRequest::getVar('cid');
        $mainframe->redirect('index.php?option=com_[component]&controller=item&task=publish&cid=' . $cid[0]);
    }
}
