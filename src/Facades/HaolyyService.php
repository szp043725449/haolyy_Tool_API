<?php 

namespace Haolyy\Api\Facades;

use Illuminate\Support\Facades\Facade;

class HaolyyService extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'HaolyyService';
    }

}