<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Item View for Boilerplate Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class BoilerplateViewItem extends JView
{
    /**
     * display method of Item view
     * @return void
     **/
    public function display($tpl = null)
    {

        $item = &$this->get('Data');

        $isNew = ($item->id < 1);


        if ($isNew) {
            $tpl = 'add';
        }
        $this->assignRef('item', $item);
        $this->assignRef('isNew', $isNew);

        parent::display($tpl);
    }
}
