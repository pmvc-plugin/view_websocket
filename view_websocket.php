<?php
namespace PMVC\PlugIn\view;

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\view_websocket';

class view_websocket extends ViewEngine
{
    public function process()
    {
        $worker = \PMVC\plug('workerman');
        $send = [
            $this['themePath'] => $this->get()
        ];
        $worker->sendHttp($send);
    }
}
