<?php namespace ZaWeb\Core\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class AbstractAdminController extends BaseController
{

    use ValidatesRequests;


}
