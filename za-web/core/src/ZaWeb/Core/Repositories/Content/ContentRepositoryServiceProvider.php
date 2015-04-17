<?php namespace ZaWeb\Core\Repositories\Content;

use ZaWeb\Core\Repositories\Content\ContentRepository;
use Illuminate\Support\ServiceProvider;

class ContentRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('ZaWeb\Core\Repositories\Content\ContentInterface', function($app)
        {
           
            return new ContentRepository;
            
        });
    }
    
}

