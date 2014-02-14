<?php
/**
 * Orphus for Moodle
 * 20130830
 * http://docs.moodle.org/dev/
 *
 * @package    block_orphus
 * @copyright  2013 Yevhen Matasar (Евгений Матасар), Borys Grinchenko Kyiv University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */ 

class block_orphus_edit_form extends block_edit_form {
 
    /**
     * Defines edit form
     * 
     * @return void
     */
    protected function specific_definition($mform) {
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));
        $mform->addElement('text', 'config_text', get_string('emailsetting', 'block_orphus'));
        $mform->setDefault('config_text', 'your@mail.com');
        $mform->setType('config_text', PARAM_MULTILANG);
    }
}