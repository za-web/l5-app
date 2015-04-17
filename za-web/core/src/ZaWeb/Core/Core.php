<?php

namespace ZaWeb\Core;

use Illuminate\Support\Facades\Config;


class Core
{
    public function hi(){
        return Config::get("core::message");
    }
}