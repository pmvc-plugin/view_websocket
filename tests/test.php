<?php
namespace PMVC\PlugIn\view_websocket;

use PHPUnit_Framework_TestCase;

class View_websocketTest extends PHPUnit_Framework_TestCase
{
    private $_plug = 'view_websocket';
    function testPlugin()
    {
        ob_start();
        print_r(\PMVC\plug($this->_plug));
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertContains($this->_plug,$output);
    }

}
