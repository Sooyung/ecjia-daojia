<?php


namespace Ecjia\System\Facades;

use Royalcms\Component\Support\Facades\Facade;

class AdminLog extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'ecjia.admin.log';
    }

}