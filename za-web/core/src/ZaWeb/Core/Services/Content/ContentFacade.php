<?php namespace ZaWeb\Core\Services\Content;

use \Illuminate\Support\Facades\Facade;


class ContentFacade extends Facade
{
    protected static function getFacadeAccessor() { return 'contentService'; }
}