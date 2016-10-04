<?php

namespace Statamic\Addons\Location;

use Statamic\Extend\Fieldtype;

class LocationFieldtype extends Fieldtype
{
    public function blank()
    {
        return '';
    }

    public function preProcess($data)
    {
        return $data;
    }

    public function process($data)
    {
        return $data;
    }
}