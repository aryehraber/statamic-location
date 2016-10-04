<?php

namespace Statamic\Addons\Location;

use Statamic\Extend\Listener;

class LocationListener extends Listener {
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */
    public $events = [
    	'cp.add_to_head' => 'addToHead'
    ];

    public function addToHead()
    {
        $apiKey = $this->getConfig('api_key', '');

        return '<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key='.$apiKey.'&libraries=places"></script>';
    }
}