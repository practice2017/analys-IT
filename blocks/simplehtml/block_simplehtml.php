<?php

class block_simplehtml extends block_base {
    function init() {
        $this->title   = get_string('pluginname', 'block_simplehtml');
    }

    function get_content() {
        if ($this->content !== NULL) {
        return $this->content;
        }
 
    $this->content         =  new stdClass;
        $this->content->text .= html_writer::link(new moodle_url('/путь_к_скрипту'), html_writer::tag('button', get_string('buttonname', 'block_simplehtml')), array('type'=>'button'));
    return $this->content;
    }
}   // Конец класса